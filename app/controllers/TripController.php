<?php


class TripController
{
    private $trainModel;
    private $tripModel;

    public function __construct()
    {
        $this->trainModel = new Train();
        $this->tripModel = new Trip();
    }

    public function index()
    {

        if (!isLoggedIn()) return redirect("login");

        else {
            $trips = $this->tripModel->fetchAll("WHERE status = 1");
            return view("trip/dashboard", ["trips" => $trips]);
        }
    }

    public function addTrip()
    {
        if (!isLoggedIn()) return redirect("login");

        if (isPostRequest()) {
            $trip = $this->tripModel->create($_POST);
            if ($trip) {
                redirect("trip");
            }
        } else {
            $trains = $this->trainModel->fetchAll();
            return view("trip/addTrip", ["trains" => $trains]);
        }
    }

    public function updateTrip($id)
    {
        if (!isLoggedIn()) return redirect("login");

        $trip = $this->tripModel->fetchById($id);
        if (!$trip) {
            return redirect("/trip");
        }

        if (isPostRequest()) {
            $dataTrip = $this->tripModel->update($_POST, $id);
            if ($dataTrip) {
                return redirect("/trip");
            }
            return redirect("trip/updateTrip/$id");
        } else {
            $trains = $this->trainModel->fetchAll();
            return view("trip/updateTrip", ["trip" => $trip, "trains" => $trains]);
        }
    }

    public function deleteTrip($id)
    {
        if (!isLoggedIn()) return redirect("login");

        $trip = $this->tripModel->fetchById($id);
        if (!$trip) {
            return redirect("/trip");
        }
        $dataTrip = $this->tripModel->delete($id);
        if ($dataTrip) {
            return redirect("/trip");
        }
    }

    public function cancelTrip($id)
    {
        if (!isLoggedIn()) return redirect("login");

        $trip = $this->tripModel->fetchById($id);
        if (!$trip) {
            return redirect("/trip");
        }

            $dataTrip = $this->tripModel->update(["status" => 0], $id);
            if ($dataTrip) {
                return redirect("/trip");
            }
    }
}
