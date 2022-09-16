<!-- SESSION START -->
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Bootstrap JavaScript -->
    <!-- JavaScript Bundle with Popper -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Personal CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>jumblr | Feel the content</title>
</head>

<body class="bg-dark">

    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container-fluid">

            <!-- NAVBAR ICON START -->
            <a class="navbar-brand text-light" href="#">Navbar</a>
            <!-- NAVBAR ICON END -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <!-- LOGIN START -->
                    <li class="nav-item mt-2 m-lg-0 ms-lg-5 me-lg-2">
                        <button class="text-light btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    </li>
                    <!-- LOGIN START -->

                    <!-- SIGNUP START -->
                    <li class="nav-item mt-3 m-lg-0">
                        <button class="text-light btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
                    </li>
                    <!-- SIGNUP START -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->