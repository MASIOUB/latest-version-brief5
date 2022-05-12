<?php
class  BookingController
{

    private $trainModel;
    private $bookingModel;
    private $tripModel;
    // private $userModel;
    public function __construct()
    {
        $this->trainModel = new Train();
        $this->tripModel = new Trip();
        $this->bookingModel = new Booking();
        // $this->userModel = new User();
    }

    public function index()
    {
        // if(isset($_GET['date_trip']) && isset($_GET['start_station']) && isset($_GET['return_station'])){
        if (isPostRequest()) {
            $trips = $this->tripModel->fetchAll("WHERE date_trip =:date_trip and start_station=:start_station and return_station=:return_station", $_POST);
            // and number_of_seats > $numberBookings

            if (count($trips) > 0) {
                $bookings = $this->bookingModel->sum(["time"], "number_seat", "WHERE date =:date_trip and start_station=:start_station and return_station=:return_station", "time", $_POST);
                $bookingsMaxSeatsMapByTime = [];
                foreach ($bookings as $booking) {
                    $bookingsMaxSeatsMapByTime[$booking["time"]] = $booking["somme"];
                }
                $trips = array_filter($trips, function($trip)use ($bookingsMaxSeatsMapByTime){
                    $bookingMaxSeats = $bookingsMaxSeatsMapByTime[$trip["start_time"]] ?? null;
                    return !$bookingMaxSeats ||  $trip["number_of_seats"] > $bookingMaxSeats || $trip["start_time"] > date("H:i:s");
                });
                $dataTrips = ['trips' => $trips];
                return view('booking/search', $dataTrips);
            }
            // return var_dump($_GET);
        }
        return view('booking/search');
    }

    public function create($id_trip)
    {
        $trip = $this->tripModel->fetchById($id_trip);
        if (!$trip) {
            return redirect("/booking/create");
        }
        $train = $this->trainModel->fetchOne("where id = :id", ["id" => $trip["id_train"]]);
        if (isPostRequest()) {
            $bookingData = [
                "id_user" => currentUserId(),
                "id_trip" => $id_trip,
                ...$_POST // spread operator
            ];
            $isBookingCreated = $this->bookingModel->create($bookingData);
            if ($isBookingCreated) {
                return redirect("/");
            }

            return redirect("/booking/create/$id_trip");
        } else {
            if (!isLoggedIn()) {
                return redirect("/register/guest/$id_trip");
            }

            return view("booking/create", ["trip" => $trip, "train" => $train]);
        }
    }

    public function history()
    {
        // var_dump(currentUserId());
        if (!isLoggedIn()) return redirect("login");
        $userId = currentUserId();
        $isBookingExist = $this->bookingModel->fetchAll("Where id_user = $userId");
        if ($isBookingExist) {
            $bookingExist = ["bookings" => $isBookingExist];
            return view("booking/history", $bookingExist);
        }
    }

    public function deleteBooking($id)
    {
        if (!isLoggedIn()) return redirect("login");
        $booking = $this->bookingModel->fetchById($id);
        if (!$booking) return redirect("booking/history");
        $isBookingExist = $this->bookingModel->delete($id);
        if ($isBookingExist) return redirect("/booking/history");
    }
}
