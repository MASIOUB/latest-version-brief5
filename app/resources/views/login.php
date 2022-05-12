<?php
require_once dirname(__DIR__) . "/includes/header.php";
?>

<div class="row min-vh-100 align-content-center justify-content-center">
    <div class="shadow rounded-3 card align-items-center w-50 p-0">
        <div class="card-header text-center w-100" style="background-color: #428DFC">
            <h2 class=" text-white">Login form</h2>
        </div>
        <div class="card-body w-100">
            <form class="d-flex flex-column" method="post">
                <div class="mb-3">
                    <label class="form-label">Username</label><br>
                        <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                </div>
                <button name="submit" class="btn text-light align-self-center" style="background-color: #428DFC">submit</button>
            </form>
            <p class="text-center mt-3">Not a member? <a href="<?= createLink("/register") ?>" style="text-decoration: none; color: #428DFC">Sign Up Now</a></p>
        </div>
    </div>
</div>
<?php
require_once dirname(__DIR__) . "/includes/footer.php";
?>