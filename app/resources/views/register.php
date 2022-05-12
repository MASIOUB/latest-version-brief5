<?php
require_once dirname(__DIR__) . "/includes/header.php";
?>

<style>
    @media(max-width:768)
    {
        .book-form{
            width: 100vw;
        }
    }
</style>

<div class="row min-vh-100 align-content-center justify-content-center book-form">
    <div class="shadow rounded-3 card align-items-center w-50 p-0 my-5">
        <div class="card-header text-center w-100" style="background-color: #428DFC">
            <h2 class="text-white">Register form</h2>
        </div>
        <div class="card-body w-100">
            <form class="d-flex flex-column" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn text-light align-self-center" style="background-color: #428DFC">Submit</button>
            </form>
            <p class="text-center mt-3">Not a member? <a href="<?= createLink("/login") ?>" style="text-decoration: none; color: #428DFC">Sign In</a></p>
        </div>
    </div>
</div>

<?php
require_once dirname(__DIR__) . "/includes/footer.php";
?>