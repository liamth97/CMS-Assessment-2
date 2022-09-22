<!-- REQUIRE HEADER START -->
<!-- Includes <head> with Bootstrap, Session Start, Body, Navbar, Modals for Login/Signup -->
<?php
require "header.php"
?>
<!-- REQUIRE HEADER END -->

<!-- MAIN CONTENT START -->

<div class="container ">
    <?php

    require "./alerts.php"

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