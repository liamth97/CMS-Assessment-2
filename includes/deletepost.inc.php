<?php
session_start();
if (isset($_SESSION['userId']) && isset($_GET['id'])) {
    // CONNECT TO DB
    require 'connect.inc.php';

    // ESCAPE STRINGS
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $id = intval($id);


    $sql = "DELETE FROM tblposts WHERE postID=?";

    $statement = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("Location: ../posts.php?id=$id&error=internalerror");
        exit();
    } else {
        mysqli_stmt_bind_param($statement, "i", $id);

        mysqli_stmt_execute($statement);

        header("Location: ../index.php?id=$id&delete=success");
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}
