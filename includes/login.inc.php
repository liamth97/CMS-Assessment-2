<?php

if (isset($_POST['login-submit'])) {
    // CONNECT TO DATABASE
    require "connect.inc.php";

    // STORE LOGIN DETAILS IN VARIABLES
    $username = $_POST['uid'];
    $password = $_POST['pwd'];

    // VALIDATION
    // EMPTY FIELDS
    if (empty($username) || empty($password)) {
        header("Location: ../index.php?loginerror=emptyfields");
        exit();

        // CHECK USER EXISTS + CHECK ERRORS
    } else {

        // PREPARE SQL
        $sql = "SELECT * FROM tblusers WHERE username=? OR userEmail=?";

        // INIT CONNECTION
        $statement = mysqli_stmt_init($conn);

        // PREPARE AND SEND STATEMENT TO DB
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("Location: ../index.php?internalerror");
            exit();

            // BIND PARAMS AND ESCAPE STRINGS
        } else {
            mysqli_stmt_bind_param($statement, "ss", $username, $username);

            // EXECUTE STATEMENT
            mysqli_stmt_execute($statement);

            // RETURN AND STORE RESULT
            $result = mysqli_stmt_get_result($statement);

            // FETCH RESULT AND STORE AS ARRAY
            if ($row = mysqli_fetch_assoc($result)) {

                // CHECKS ENTERED PWD AGAINST HASHED PWD IN DB
                $pwdCheck = password_verify($password, $row['userPwd']);

                // PWD CHECK
                if ($pwdCheck == false) {
                    header("Location: ../index.php?loginerror=wrongpwd");
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();

                    $_SESSION['userId'] = $row['userID'];
                    $_SESSION['userUid'] = $row['username'];
                    header("Location: ../index.php?login=success");
                    exit();
                } else {
                    header("Location: ../index.php?loginerror=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../index.php?loginerror=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
