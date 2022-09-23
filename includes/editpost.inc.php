<?php

// START SESSION
session_start();

$directory = "uploads";

if (isset($_POST['edit-submit']) && isset($_SESSION['userId'])) {

    require "connect.inc.php";

    // COLLECT AND STORE POST DATA

    $postId = mysqli_real_escape_string($conn, $_GET['id']);
    $postId = intval($postId);
    $title = $_POST['title'];
    $comment = $_POST['comment'];

    // ICON FILE VARIABLES
    $tmp_name = $_FILES['imageUpload']['tmp_name'];
    $target_file = $_FILES['imageUpload']['name'];
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $my_url = $directory . DIRECTORY_SEPARATOR . $target_file;
    $db_image_url = $directory . "/" . $target_file;
    $image_error = $_FILES['imageUpload']['error'];



    // VALIDATION
    if (empty($title) || empty($comment) || empty($tmp_name)) {
        header("Location: ../index.php?editerror=emptyfields");

        // SAVE EDIT TO DB
    } else {
        // ERROR CHECK + MOVE IMAGE

        // FILE TYPE CORRECT
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            header("Location: ../index.php?editerror=incorrectfiletype");
            exit();

            // UPLOAD IMAGE
        } else {
            move_uploaded_file($tmp_name, ".." . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $target_file);
        }



        // DECLARE SQL WITH PLACEHOLDERS
        $sql = "UPDATE tblposts SET postTitle=?, postImg=?, comment=? WHERE postID=?";

        // INIT STATEMENT
        $statement = mysqli_stmt_init($conn);

        // PREPARE STATEMENT + CHECK FOR ERRORS
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("Location: ../index.php?error=internalerror");
            exit();

            // BIND PARAMS AND EXECUTE + SUCCESS
        } else {
            mysqli_stmt_bind_param($statement, "sssi", $title, $db_image_url, $comment, $postId);
            mysqli_stmt_execute($statement);
            header("Location: ../index.php?edit=success");
            exit();
        }
    }
} else {
    header(("Location: ../index.php"));
    exit();
}
