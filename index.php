<!-- REQUIRE HEADER START -->
<!-- Includes <head> with Bootstrap, Session Start, Body, Navbar, Modals for Login/Signup -->
<?php
require "header.php"
?>
<!-- REQUIRE HEADER END -->

<!-- MAIN CONTENT START -->

<div class="container ">
    <?php

    // ALERT BOXES FOR LOGIN, SIGNUP, POST SUCCESS ETC



    // LOGIN ALERTS
    if (isset($_GET['loginerror'])) {

        // LOGIN ERRORS

        // EMPTY FIELDS
        if ($_GET['loginerror'] == "emptyfields") {
            $loginErrorMsg = 'One or more login fields were <strong>empty</strong>, please try again.';

            // INCORRECT FIELDS
        } else if ($_GET['loginerror'] == "incorrectfields") {
            $loginErrorMsg = 'One or more login fields were <strong>incorrect</strong>, please try again.';
        }

        // ERROR MESSAGE
        echo ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4>' . $loginErrorMsg . '</h4>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');

        // LOGIN SUCCESS
    } else if (isset($_GET['login']) == "success") {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <h4>You have successfully logged in.</h4>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }



    // SIGNUP ALERTS
    if (isset($_GET['error'])) {

        // SIGNUP ERRORS

        // EMPTY FIELDS
        if ($_GET['error'] == "emptyfields") {
            $signupErrorMessage = 'One or more login fields were <strong>empty</strong>, please try again.';

            // INVALID USERNAME OR EMAIL
        } else if ($_GET['error'] == "invalidmailuid") {
            $signupErrorMessage = 'Username or email may have been <strong>invalid</strong>, please try again.';

            // INVALID EMAIL
        } else if ($_GET['error'] == "invalidmail") {
            $signupErrorMessage = 'Email is <strong>invalid</strong>, please try again.';

            // INVALID USERNAME
        } else if ($_GET['error'] == "invaliduid") {
            $signupErrorMessage = 'Username is <strong>invalid</strong>, please try again.';

            // PASSWORDS DON'T MATCH
        } else if ($_GET['error'] == "passwordcheck") {
            $signupErrorMessage = 'Please check both passwords <strong>match</strong> and try again.';

            // ICON UPLOAD ERROR
        } else if ($_GET['error'] == "iconuploaderror") {
            $signupErrorMessage = 'Failed to upload icon, please check file size is less than 2MB or try a different file.';

            // ICON FILE ALREADY EXISTS
        } else if ($_GET['error'] == "iconexists") {
            $signupErrorMessage = 'This icon already exists, please a different icon.';

            // INCORRECT ICON FILE TYPE
        } else if ($_GET['error'] == "incorrectfiletype") {
            $signupErrorMessage = 'Icon file type must be .jpg, .png, .jpeg, or .gif, please try again.';

            // USER ALREADY EXISTS
        } else if ($_GET['error'] == "userexists") {
            $signupErrorMessage = 'Username already exists, please try a different username.';
        }

        // ERROR MESSAGE
        echo ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4>' . $signupErrorMessage . '</h4>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');

        // SIGNUP SUCCESS
    } else if (isset($_GET['signup']) == "success") {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <h4>You have successfully signed up.</h4>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }



    // LOGOUT ALERT
    if (isset($_GET['logout'])) {
        if ($_GET['logout'] == "success") {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <h4>You have successfully logged out.</h4>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    }



    // NEW POST ALERTS
    if (isset($_GET['posterror'])) {

        // NEW POST ERRORS
        // EMPTY FIELDS
        if ($_GET['posterror'] == "emptyfields") {
            $postErrorMsg = 'One or more login fields were <strong>empty</strong>, please try again.';

            // IMAGE EXISTS
        } else if ($_GET['posterror'] == "imageexists") {
            $postErrorMsg = 'This image already exists, please a different icon.';

            // INCORRECT FILE TYPE
        } else if ($_GET['posterror'] == "incorrectfiletype") {
            $postErrorMsg = 'Image file type must be .jpg, .png, .jpeg, or .gif, please try again.';
        }

        // ERROR MESSAGE
        echo ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4>' . $postErrorMsg . '</h4>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');

        // POST SUCCESS
    } else if (isset($_GET['post']) == "success") {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <h4>Your post was successful!</h4>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }



    // DELETE POST ALERTS
    if (isset($_GET['delete'])) {
        if ($_GET['delete'] == "success") {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <h4>Your post was successfully deleted!</h4>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    }



    // EDIT POST ALERTS
    if (isset($_GET['editerror'])) {

        // EDIT POST ERRORS
        // EMPTY FIELDS
        if ($_GET['editerror'] == "emptyfields") {
            $editErrorMsg = 'One or more login fields were <strong>empty</strong>, please try again.';

            // INCORRECT FILE TYPE
        } else if ($_GET['editerror'] == "incorrectfiletype") {
            $editErrorMsg = 'Image file type must be .jpg, .png, .jpeg, or .gif, please try again.';
        }

        // ERROR MESSAGE
        echo ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4>' . $editErrorMsg . '</h4>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');

        // POST SUCCESS
    } else if (isset($_GET['edit']) == "success") {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <h4>Your post edit was successful!</h4>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }



    // INTERNAL ERROR
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "internalerror") {
            $internalErrorMsg = 'There has been an internal error, please try again later.';
        }

        // ERROR MESSAGE
        echo ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4>' . $internalErrorMsg . '</h4>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
    }

    ?>



    <?php
    // QUERY DATABASE for ALL POSTS

    require './includes/connect.inc.php';

    $sql = "SELECT tblposts.postID, tblposts.userID, tblposts.postTitle, tblposts.postImg, tblposts.comment,
            tblusers.userID, tblusers.username, tblusers.userIcon FROM tblposts, tblusers WHERE tblusers.userID = tblposts.userID";


    $result = mysqli_query($conn, $sql);

    ?>

    <?php
    // CHECK FOR POSTS RETURNED RESULT & DISPLAY ON SUCCESS

    if (mysqli_num_rows($result) > 0 && isset($_SESSION['userId'])) {

        // LOOP DATA INTO OUR BOOTSTRAP CARD TEMPLATE

        $output = "";

        while ($row = mysqli_fetch_array($result)) {

            // POST OUTPUT
            $output .= '
                <div class="row mt-5 mt-md-0 pt-5 pt-md-0">
                    <div class="card mt-5 p-0 border-0 bg-light col-12 col-md-9 col-lg-7 m-auto" id="' . $row['postID'] . '">
                        <div class="icon-shift position-absolute">
                            <img class="icon-size rounded-1" src="' . $row['userIcon'] . '" alt="">
                        </div>
                    <div class="card-header bg-light rounded-top">
                        <p class="h4">' . ucfirst($row['username']) . '</p>
                    </div>
                    <img src="' . $row['postImg'] . '" class="card-img-top rounded-0" alt="' . $row['postTitle'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['postTitle'] . '</h5>
                        <p class="card-text">' . $row['comment'] . '</p>';

            if (isset($_SESSION['userId'])) {
                if ($row['userID'] == $_SESSION['userId']) {
                    $output .=
                        '<div class="admin-btn">
                        <button class="btn btn-secondary mt-2" data-bs-toggle="modal" data-bs-target="#editPostModal' . $row['postID'] . '">Edit</button>
                        <a href="includes/deletepost.inc.php?id=' . $row['postID'] . '" class="btn btn-danger mt-2">Delete</a>
                        </div>';
                } else {
                    echo null;
                }
            }
            $output .=
                '</div>
                </div>
            </div>';

            // EDIT POST MODAL FOR EACH OF THE POSTS
            require "./editpost.php";
        }
        echo $output;
    } else {
        echo null;
    }
    mysqli_close($conn);
    ?>
</div>

<!-- MAIN CONTENT END -->

<!-- REQUIRE FOOTER START -->
<!-- Includes all the Modals and New Post Button -->
<?php
require "footer.php"
?>
<!-- REQUIRE FOOTER END -->