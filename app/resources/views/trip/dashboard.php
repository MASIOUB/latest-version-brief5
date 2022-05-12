<?php
require_once dirname(__DIR__) . "/../includes/header.php";
?>

<div class="container py-5">

    <button class='btn mb-3' style="background-color: #428DFC">
        <a href="<?= createLink("/trip/addTrip") ?>">
            <i class='fas fa-plus text-white'></i>
        </a>
    </button>

    <div class=" table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Date</th>
                    <th>Train Number</th>
                    <th>Time</th>
                    <th>Departure</th>
                    <th>Destination</th>
                    <th>Price</th>
                    <th>Number Of Seats</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($trips as $trip) { ?>
                    <tr>
                        <td> <?= $trip['id'] ?> </td>
                        <td> <?= $trip['date_trip'] ?> </td>
                        <td> <?= $trip['id_train'] ?> </td>
                        <td> <?= $trip['start_time'] ?> </td>
                        <td> <?= $trip['start_station'] ?> </td>
                        <td> <?= $trip['return_station'] ?> </td>
                        <td> <?= $trip['price'] ?> </td>
                        <td> <?= $trip['number_of_seats'] ?> </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn" style="background-color: #428DFC" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis text-light"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href='<?= createLink("/trip/updateTrip/" . $trip["id"]) ?>'>Edit</a></li>
                                    <li><a class="dropdown-item" href='<?= createLink("/trip/cancelTrip/" . $trip["id"]) ?>'>Cancel</a></li>
                                    <li><a class="dropdown-item" href='<?= createLink("/trip/deleteTrip/" . $trip["id"]) ?>'>Delete</a></li>
                                </ul>
                            </div>
                        </td>
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