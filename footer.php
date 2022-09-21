 <!-- LOGIN MODAL START -->
 <?php require "login.php" ?>
 <!-- LOGIN MODAL START -->

 <!-- SIGNUP MODAL START -->
 <?php require "signup.php" ?>
 <!-- SIGNUP MODAL END -->

 <!-- NEW POST MODAL START -->
 <?php require "createpost.php" ?>
 <!-- NEW POST MODAL END -->



 <?php

    // IF LOGGED IN DISPLAY NEW POST BUTTON
    if (isset($_SESSION['userId'])) {

        // NEW POST BUTTON START
        echo (' <div class="position-relative">
                    <div class="position-fixed bottom-0 end-0 translate-md-middle m-md-5 pe-md-5 pb-md-3 m-2">
                        <button class="btn btn-primary px-md-4 py-md-3 px-3 py-2 rounded-circle" data-bs-toggle="modal" data-bs-target="#newPostModal">
                            New<br />Post
                        </button>
                    </div>
                </div>');
        // NEW POST BUTTON END

    }

    ?>




 </body>

 </html>