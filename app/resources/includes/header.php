<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveler Train</title>
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


</head>


<body>

    <?php
    if (!isAdmin()) {
        require_once dirname(__DIR__) . "/includes/navbar.php";
    }
    if (isAdmin()) {
        require_once dirname(__DIR__) . "/includes/dashNav.php";
    }
    ?>

    <div class="container">