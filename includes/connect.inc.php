<?php

// DATABASE CONFIG VARIABLES
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jumblr";

// CREATE CONNECTION VARIABLE
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('<div class="alert alert-danger mt-4 alert-dismissible fade show" role="alert">
    <h4>Connection failed</h4>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
        . $conn->connect_error .
        '</div>');
} else {
    // echo null;

    ('<div class="alert alert-success mt-4 alert-dismissible fade show" role="alert">
    <h4>Connected</h4>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
}
