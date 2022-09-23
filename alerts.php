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
if (isset($_GET['signuperror'])) {

    // SIGNUP ERRORS

    // EMPTY FIELDS
    if ($_GET['signuperror'] == "emptyfields") {
        $signupErrorMessage = 'One or more login fields were <strong>empty</strong>, please try again.';

        // INVALID USERNAME OR EMAIL
    } else if ($_GET['signuperror'] == "invalidmailuid") {
        $signupErrorMessage = 'Username or email may have been <strong>invalid</strong>, please try again.';

        // INVALID EMAIL
    } else if ($_GET['signuperror'] == "invalidmail") {
        $signupErrorMessage = 'Email is <strong>invalid</strong>, please try again.';

        // INVALID USERNAME
    } else if ($_GET['signuperror'] == "invaliduid") {
        $signupErrorMessage = 'Username is <strong>invalid</strong>, please try again.';

        // PASSWORDS DON'T MATCH
    } else if ($_GET['signuperror'] == "passwordcheck") {
        $signupErrorMessage = 'Please check both passwords <strong>match</strong> and try again.';

        // ICON UPLOAD ERROR
    } else if ($_GET['signuperror'] == "iconuploaderror") {
        $signupErrorMessage = 'Failed to upload icon, please check file size is less than 2MB or try a different file.';

        // ICON FILE ALREADY EXISTS
    } else if ($_GET['signuperror'] == "iconexists") {
        $signupErrorMessage = 'This icon already exists, please a different icon.';

        // INCORRECT ICON FILE TYPE
    } else if ($_GET['signuperror'] == "incorrectfiletype") {
        $signupErrorMessage = 'Icon file type must be .jpg, .png, .jpeg, or .gif, please try again.';

        // USER ALREADY EXISTS
    } else if ($_GET['signuperror'] == "userexists") {
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

    // LOGGOUT SUCCESS
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
        $postErrorMsg = 'This image already exists, please a different image.';

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

    // DELETE SUCCESS
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

        // IMAGE EXISTS
    } else if ($_GET['posterror'] == "imageexists") {
        $postErrorMsg = 'This image already exists, please a different image.';
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
