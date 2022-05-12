<?php
require_once dirname(__DIR__) . "/../includes/header.php";
?>
<div class="row min-vh-100 align-content-center justify-content-center book-form">
    <div class="shadow rounded-3 card align-items-center w-50 p-0 my-5">
        <div class="card-header text-center w-100" style="background-color: #428DFC">
            <h1 class="text-white">add trip</h1>
        </div>
        <div class="card-body w-100">
            <form class="d-flex flex-column" method="POST">
                <div class="mb-3">
                    <label class="form-label">Train Number</label>
                    <select name="id_train" class="form-control">
                        <?php foreach ($trains as $train) : ?>
                            <option><?= $train["id"] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date Of Trip</label>
                    <input type="date" name="date_trip" placeholder="Date Of Trip" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Time</label>
                    <input type="time" name="start_time" placeholder="Time" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Start Station</label>
                    <input type="text" name="start_station" placeholder="Start Station" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Return Station</label>
                    <input type="text" name="return_station" placeholder="Return Station" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" placeholder="Price" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Number Of Seats</label>
                    <input type="number" name="number_of_seats" placeholder="Number Of Seats" class="form-control">
                </div>
                <div class="mx-auto my-1">
                    <button type="submit" class="btn align-self-center text-light" style="background-color: #428DFC">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php
require_once dirname(__DIR__) . "/../includes/footer.php";
?>