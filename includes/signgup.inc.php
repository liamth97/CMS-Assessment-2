<?php

if (isset($_POST['signup-submit'])) {
    // CONNECT TO DATABASE
    require "connect.inc.php";


    // SAVE SIGNUP POST INFO TO VARIABLES
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];


    // VALIDATION

    // CHECK EMPTY FIELDS
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../index.php?error=emptyfields&uid=" . $username . "&mail=" . $email);
        exit();

        // CHECK EMAIL/PWD FOR CORRECT SYNTAX
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../index.php?error=invalidmailuid");
        exit();

        // CHECK EMAIL
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?error=invalidmail");
        exit();

        // CHECK USERNAME
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../index.php?error=invaliduid");
        exit();

        // CHECK PASSWORDS MATCH
    } else if ($password !== $passwordRepeat) {
        header("Location: ../index.php?error=passwordcheck&uid=" . $username . "&mail=" . $email);
        exit();

        // VALIDATION COMPLETE - RUN SQL + ESCAPE STRINGS
    } else {
        // CHECKING IS USER ALREADY EXISTS

        // DECLARE SQL
        $sql = "SELECT username FROM tblusers WHERE username=?";

        // INIT STATEMENT
        $statement = mysqli_stmt_init($conn);

        // PREPARE + SEND STMT TO DATABASE TO CHECK FOR ERRORS
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("Location: ../index.php?error=internalerror");
            exit();
        } else {
            // BIND PARAMS + ESCAPE STRINGS
            mysqli_stmt_bind_param($statement, "s", $username);

            // EXECUTE SQL WITH USER DATA
            mysqli_stmt_execute($statement);

            // RETURN + STORE RESULT IN $statement
            mysqli_stmt_store_result($statement);

            // CHECK HOW MANY ROWS OF RESULTS WERE RETURNED
            $resultCheck = mysqli_stmt_num_rows($statement);

            // IF USER EXISTS, PASS BACK ERROR
            if ($resultCheck > 0) {
                header("Location: ../index.php?error=userexists&mail=" . $email);
                exit();

                // ELSE CREATE NEW USER
            } else {

                // DECLARE SQL
                $sql = "INSERT INTO tblusers (username, userEmail, userPwd) VALUES (?, ?, ?)";

                // INIT STATEMENT
                $statement = mysqli_stmt_init($conn);

                // SEND TO DB TO CHECK ERRORS
                if (!mysqli_stmt_prepare($statement, $sql)) {
                    header("Location: ../index.php?error=internalerror");
                    exit();

                    // HASH PASSWORD
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    // BIND PARAMS
                    mysqli_stmt_bind_param($statement, "sss", $username, $email, $hashedPwd);

                    // EXECUTE STMT
                    mysqli_stmt_execute($statement);

                    // SUCCESS
                    header("Location: ../index.php?signup=success");
                    exit();
                }
            }
        }
    }
    // CLOSE CONNECTION
    mysqli_stmt_close($statement);
    mysqli_close($conn);

    // SEND BACK TO INDEX IF NOT AUTHORISED
} else {
    header("Location: ../index.php");
    exit();
}
