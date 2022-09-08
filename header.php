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

    <title>Document</title>
</head>

<body class="bg-dark">

    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">

            <!-- NAVBAR ICON START -->
            <a class="navbar-brand text-light" href="#">Navbar</a>
            <!-- NAVBAR ICON END -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5 ps-5" id="navbarNav">
                <ul class="navbar-nav ">

                    <!-- LOGIN START -->
                    <li class="nav-item">
                        <button class="text-light btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    </li>
                    <!-- LOGIN START -->

                    <!-- SIGNUP START -->
                    <li class="nav-item ms-4">
                        <button class="text-light btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
                    </li>
                    <!-- SIGNUP START -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- LOGIN MODAL START -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title text-light" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-light">

                    <!-- FORM START -->
                    <form action="includes/login.inc.php" method="POST">

                        <!-- USERNAME START -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" aria-describedby="username">
                        </div>
                        <!-- USERNAME END -->

                        <!-- PASSWORD START -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <!-- PASSWORD END -->

                        <!-- FORM SUBMIT/CLOSE -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">Close</button>
                    </form>
                    <!-- FORM END -->

                </div>

            </div>
        </div>
    </div>
    <!-- LOGIN MODAL START -->

    <!-- SIGNUP MODAL START -->
    <div class="modal fade" id="signupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title text-light" id="signupModalLabel">Signup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-light">

                    <!-- FORM START -->
                    <form>

                        <!-- USERNAME START -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" aria-describedby="username">
                        </div>
                        <!-- USERNAME END -->

                        <!-- EMAIL START -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <!-- EMAIL END -->

                        <!-- PASSWORD START -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <!-- PASSWORD END -->

                        <!-- PASSWORD REPEAT START -->
                        <div class="mb-3">
                            <label for="passwordRepeat" class="form-label">Repeat Password</label>
                            <input type="password" class="form-control" id="passwordRepeat">
                        </div>
                        <!-- PASSWORD REPEAT END -->

                        <!-- FORM SUBMIT/CLOSE -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">Close</button>
                    </form>
                    <!-- FORM END -->

                </div>
            </div>
        </div>
    </div>
    <!-- SIGNUP MODAL END -->