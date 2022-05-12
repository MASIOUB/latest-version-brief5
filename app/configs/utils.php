<?php

function view($path, $data = [])
{
    extract($data);
    $path = dirname(__DIR__)."/resources/views/$path.php";
    if (file_exists($path)){
        require_once $path;
    }
    else{
        die ("View doesn't exist");
    }
}

function isPostRequest()
{
    return $_SERVER["REQUEST_METHOD"] === "POST";
}

function verify($required, $data): bool
{
    foreach ($required as $value) {
        if (empty($data[$value])) {
            return false;
        }
    }
    return true;
}


function isLoggedIn()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION["id"]) && !empty($_SESSION["id"]);
}


function isAdmin()
{
    return currentUserRole() === ADMIN;
}


function isClient()
{
    return currentUserRole() === CLIENT;

}

function isGuest()
{
    return currentUserRole() === GUEST;

}

function redirect($path)
{
    header("location: /trainMvc/$path");
}

function createLink($path)
{
    $path = trim($path, "/");
    return "/trainMvc/$path";
}


function currentUserId()
{
    isLoggedIn();
    return $_SESSION["id"] ?? null; // nullish coalascing  
}


function currentUserRole(){
    if(!isLoggedIn()) return null;
    return $_SESSION["role"];
}


function createUserSession($user)
{
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION["id"] = $user["id"];
    $_SESSION["role"] = $user["role"];
    $_SESSION["username"] = $user["username"];
}
