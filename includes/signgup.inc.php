<?php 

if(isset($_POST['signup-submit'])){
    // CONNECT TO DATABASE
    require "connect.inc.php";


    // SAVE SIGNUP POST INFO TO VARIABLES
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];


    // VALIDATION
}
