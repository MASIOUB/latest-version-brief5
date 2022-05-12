<?php
require_once dirname(__DIR__) . "/../includes/header.php";
?>



<link rel="stylesheet" href="styles/searchtrip.css">

<div class="shadow rounded-3 my-5 py-5">
    <div class="row header py-5">
        <div class="col-md-12 feature-box w-100">
            <h1 class=" mt-0 text-center">Sreach For Your Trip</h1>
            <div>
                <form class="d-lg-flex align-items-center gap-4 p-4 form text-dark w-100 needs-validation" novalidate method="POST">
                    <div class="d-flex flex-column w-100">
                        <label class="form-label">Date Of Trip</label>
                        <input type="date" name="date_trip" class="col-md-6 w-100" min='<?= date("Y-m-d")?>' value="<?= $_POST["date_trip"] ?? "" ?>" placeholder="Date Of Trip" required>
                        <div class="invalid-feedback">
                            fill this champ
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-between w-100">
                        <label class="form-label">Start Station</label>
                        <input type="text" class="col-md-6 w-100" name="start_station" value="<?= $_POST["start_station"] ?? "" ?>" placeholder="Start Station" required>
                        <div class="invalid-feedback">
                            fill this champ
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-between w-100">
                        <label class="form-label">Return Station</label>
                        <input type="text" class="col-md-6 w-100" name="return_station" value="<?= $_POST["return_station"] ?? "" ?>" placeholder="Return Station" required>
                        <div class="invalid-feedback">
                            fill this champ
                        </div>
                    </div>
                    <div class="mx-auto my-1 align-self-end">
                        <button class="btn btn-primary text-light" type="submit" style="background-color: #428DFC">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php if (isset($trips)) : ?>
    <div class="row flex-wrap justify-content-lg-between gap-2">
        <?php
        echo "<h1 class='text-center'>" . $_POST["date_trip"] . "</h1>";
        $time = date("H:i:s");
        foreach ($trips as $trip) :
            if ($trip["start_time"] > $time) :
        ?>
            <div class="p-0 text-center col-lg-3 my-2">
                <div class="shadow rounded-3">
                <div class="card-header w-100">
                    <?= "Price:" . $trip["price"] ?>
                </div>
                <div class="card-body">
                    <p class="card-text"><?= "Station Start:" . $trip["start_station"] ?></p>
                    <p class="card-text"><?= "Return Start:" . $trip["return_station"] ?></p>
                    <p class="card-text"><?= "Start Time:" . $trip["start_time"] ?></p>
                    <a class="btn text-light" href="<?= createLink("booking/create/" . $trip["id"]) ?>" style="background-color: #428DFC">Book</a>
                </div>
                </div>
            </div>
    <?php endif;
    endforeach;
    endif; ?>

    </div>

    <script>
        (function() {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

    <?php
    require_once dirname(__DIR__) . "/../includes/footer.php";
    ?>