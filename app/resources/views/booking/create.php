<?php
require_once dirname(__DIR__) . "/../includes/header.php";
?>


<div class="row min-vh-100 align-content-center justify-content-center" sty>
    <div class="shadow rounded-3 card align-items-center w-50 p-0 my-5">
        <div class="card-header text-center w-100" style="background-color: #428DFC">
            <h2 class=" text-white">Make Your Booking</h2>
        </div>
        <div class="card-body w-100">
            <form class="d-flex flex-column" method="POST">
                <div class="mb-3">
                    <label class="form-label">name of train</label>
                    <input type="text" class=" form-control" name="name_train" value="<?= $train["name"] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">date of trip</label>
                    <input type="date" class=" form-control" name="date" value="<?= $trip["date_trip"] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">time</label>
                    <input type="time" class=" form-control" name="time" value="<?= $trip["start_time"] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">start station</label>
                    <input type="text" class=" form-control" name="start_station" value="<?= $trip["start_station"] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">return station</label>
                    <input type="text" class=" form-control" name="return_station" value="<?= $trip["return_station"] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">price</label>
                    <input type="number" class=" form-control" value="<?= $trip["price"] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">class</label>
                    <select class="form-select" aria-label="Default select example" name="class" id="class">
                        <?php
                        $confort = ["first class", "second class", "bed class"];
                        foreach ($confort as $class) : ?>
                            <option value="<?= $class ?>"><?= $class ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="mb-3">
                        <label class="form-label">number of places</label>
                        <input type="number" class="form-control" value="1" min="1" name="number_seat">
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn text-light" style="background-color: #428DFC">Book</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once dirname(__DIR__) . "/../includes/footer.php";
?>