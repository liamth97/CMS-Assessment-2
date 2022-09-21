<?php

// START SESSION
session_start();

$directory = "uploads";

if (isset($_POST['post-submit']) && isset($_SESSION['userId'])) {

    require "connect.inc.php";

    // COLLECT AND STORE POST DATA
    $userId = $_SESSION['userId'];
    $title = $_POST['title'];
    $imageUpload = $_POST['imageUpload'];
    $comment = $_POST['comment'];

    // COLLECT AND STORE FILES DATA
    // ICON FILE VARIABLES
    $tmp_name = $_FILES['imageUpload']['tmp_name'];
    $target_file = $_FILES['imageUpload']['name'];
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $my_url = $directory . DIRECTORY_SEPARATOR . $target_file;
    $db_image_url = $directory . "/" . $target_file;
    $icon_error = $_FILES['imageUpload']['error'];



    // VALIDATION
    if (empty($title) || empty($comment)) {
        header("Location: ../index.php");

        // SAVE POST TO DB
    } else {
        // MOVE IMAGE
        move_uploaded_file($tmp_name, ".." . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $target_file);

        // DECLARE SQL WITH PLACEHOLDERS
        $sql = "INSERT INTO tblposts VALUES (NULL, ?, ?, ?, ?)";

        // INIT STATEMENT
        $statement = mysqli_stmt_init($conn);

        // PREPARE STATEMENT + CHECK FOR ERRORS
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("Location: ../index.php?error=internalerror");
            exit();

            // BIND PARAMS AND EXECUTE + SUCCESS
        } else {
            mysqli_stmt_bind_param($statement, "isss", $userId, $title, $db_image_url, $comment);
            mysqli_stmt_execute($statement);
            header("Location: ../index.php?post=success");
            exit();
        }
    }
} else {
    header(("Location: ../index.php"));
    exit();
}
