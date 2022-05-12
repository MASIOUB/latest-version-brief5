<?php
require_once dirname(__DIR__) . "/../includes/header.php";
?>

<div class="container py-5">
    <h1 class="text-center mb-5">Your Bookings</h1>
    <div class=" table-responsive">
        <table class="table border border-dark">
            <thead>
                <tr>
                    <th>Train</th>
                    <th>date</th>
                    <th>time</th>
                    <th>Number of Seat</th>
                    <th>departure</th>
                    <th>destination</th>
                    <th>class</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($bookings as $booking) { ?>
                    <tr>
                        <td> <?= $booking['name_train'] ?> </td>
                        <td> <?= $booking['date'] ?> </td>
                        <td> <?= $booking['time'] ?> </td>
                        <td> <?= $booking['number_seat'] ?> </td>
                        <td> <?= $booking['start_station'] ?> </td>
                        <td> <?= $booking['return_station'] ?> </td>
                        <td> <?= $booking['class'] ?> </td>
                        <?php
                        $date = $booking["date"];
                        $time = $booking["time"];
                        $datetime = ("$date $time");
                        if($datetime > date("Y-m-d H:i:s", strtotime("+1 hour")) ):
                        ?>
                        <td>
                            <button class='btn' style="background-color: #dc3545; border-color: #dc3545;">
                                <a href='<?= createLink("/booking/deleteBooking/" . $booking["id"]) ?>' class="text-dark" style="text-decoration: none;" >
                                    <span>cancel</span>
                                </a>
                            </button>
                        <td>
                        <?php 
                        endif;
                        ?>
                    </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>

</div>

<?php
require_once dirname(__DIR__) . "/../includes/footer.php";
?>