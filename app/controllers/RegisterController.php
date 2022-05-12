<?php

// require_once "../app/configs/utils.php";
// ConnexionDataBase();

class RegisterController
{

    private $userModel;
    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        if (isPostRequest()) {
            // $password = $_POST["password"];
            // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $data = [ ...$_POST, "role" => CLIENT, "password" => password_hash($_POST["password"], PASSWORD_ARGON2I)];
            // $data = ["role" => CLIENT, $_POST['name'], $_POST['username'], $_POST['email'], $_POST['phone'], $hashedPassword];
            $userId = $this->userModel->create($data);
            $id = $this->userModel->getLastId();

            if ($userId) {
                createUserSession(["id" => $id['id'], ...$data]);
                return redirect("/");
            }
        } else {
            return view("register");
        }
        // view('register');
    }


    public function guest($id_trip)
    {
        if (isPostRequest()) {

            $data = ["role" => GUEST, ...$_POST];

            $userId = $this->userModel->create($data);
            $id = $this->userModel->getLastId();

            if ($userId) {
                createUserSession(["id" => $id['id'], ...$data]);
                return redirect("booking/create/$id_trip");
            }

            return view("guest");
        }

        return view("guest");
    }
}
