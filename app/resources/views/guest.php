<?php
require_once dirname(__DIR__) . "/includes/header.php";
?>

<div class="row min-vh-100 align-content-center justify-content-center">
    <div class="shadow rounded-3 card align-items-center w-50 p-0">
        <div class="card-header text-center w-100" style="background-color: #428DFC">
            <h2 class=" text-white">Register form</h2>
        </div>
        <div class="card-body w-100">
            <form class="d-flex flex-column" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn text-light align-self-center" style="background-color: #428DFC">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
require_once dirname(__DIR__) . "/includes/footer.php";
?>