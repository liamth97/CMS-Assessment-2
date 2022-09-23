<!-- DELETE POST -->

<?php
session_start();
if (isset($_SESSION['userId']) && isset($_GET['id'])) {
    // CONNECT TO DB
    require 'connect.inc.php';

    // ESCAPE STRINGS
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // CHANGE BACK TO INT
    $id = intval($id);

    // SQL QUERY
    $sql = "DELETE FROM tblposts WHERE postID=?";

    // INIT STATEMENT
    $statement = mysqli_stmt_init($conn);

    // PREPARE STATEMENT
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("Location: ../posts.php?id=$id&error=internalerror");
        exit();

        // BIND PARAMS AND EXECUTE SQL
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
