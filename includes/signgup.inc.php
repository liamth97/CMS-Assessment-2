<?php

// GENERAL VARIABLES FOR FILE UPLOAD
$directory = "icons";
$uploadOk = 1;
$the_message = '';
$phpFileUploadErrors = array(
    0 => 'There is no error, the file uploaded with success',
    1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk.',
    8 => 'A PHP extension stopped the file upload.',
);



if (isset($_POST['signup-submit'])) {
    // CONNECT TO DATABASE
    require "connect.inc.php";


    // SAVE SIGNUP POST INFO TO VARIABLES
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    // ICON FILE VARIABLES
    $tmp_name = $_FILES['iconUpload']['tmp_name'];
    $target_file = $_FILES['iconUpload']['name'];
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $my_url = $directory . DIRECTORY_SEPARATOR . $target_file;
    $db_icon_url = $directory . "/" . $target_file;
    $icon_error = $_FILES['iconUpload']['error'];
    $icon_check = ".." . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $target_file;


    // VALIDATION

    // FORM VALIDATION
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

        // PHP ICON ERRORS
    } else if ($_FILES['iconUpload']['error'] != 0) {
        header("Location: ../index.php?error=iconuploaderror");
        exit();

        // FILE EXIST    
    } else if (file_exists($icon_check)) {
        header("Location: ../index.php?error=iconexists");
        exit();

        // INCORRECT FILE TYPE
    } else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        header("Location: ../index.php?error=incorrectfiletype");
        exit();

        // VALIDATION COMPLETE - MOVE ICON TO ICONS FOLDER + RUN SQL + ESCAPE STRINGS
    } else {

        // MOVE ICON
        move_uploaded_file($tmp_name, ".." . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $target_file);

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
                $sql = "INSERT INTO tblusers (username, userEmail, userIcon, userPwd) VALUES (?, ?, ?, ?)";

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
                    mysqli_stmt_bind_param($statement, "ssss", $username, $email, $db_icon_url, $hashedPwd);

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
