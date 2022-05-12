<?php
require_once dirname(__DIR__) . "/includes/header.php";
?>



<link rel="stylesheet" href="styles/home.css">

<div class="shadow rounded-3 my-5">
    <div class="row header">
        <div class="col-md-6">
            <div class="feature-box text-center w-100">
                <h1 class="">Where do you want to go?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt eleifend neque vel commodo.</p>
                <a href="<?= createLink("booking") ?>" class="text-light btn mx-0" style="background-color: #428DFC">Book Now</a>
            </div>
        </div>
        <div class="col-md-6">
            <img src="images/clip-travelling-by-train.png" class="feature-img">
        </div>
    </div>
</div>

<br>
<br>
<br>

<?="id is : " . $_SESSION["id"];
echo "<br>";
echo date("Y-m-d H:i:s", strtotime("+1 hour +0 minute +0 second"));
echo "<br>";
echo date("H:i:s");
echo "<br>";
echo date("Y-m-d H:i:s");

?>





<?php
require_once dirname(__DIR__) . "/includes/footer.php";
?>