<!-- REQUIRE HEADER START -->
<!-- Includes <head> with Bootstrap, Session Start, Body, Navbar, Modals for Login/Signup -->
<?php
require "header.php"
?>
<!-- REQUIRE HEADER END -->

<!-- MAIN CONTENT START -->
<div class="container ">
    <?php
    require "./includes/connect.inc.php";
    ?>

    <!-- CARD START -->
    <div class="row mt-5 mt-md-0 pt-5 pt-md-0">
        <div class="card mt-5 p-0 border-0 bg-light col-12 col-md-9 col-lg-7 m-auto">
            <div class="icon-shift position-absolute">
                <img class="icon-size rounded-1" src="img/oppo.jpg" alt="">
            </div>
            <div class="card-header bg-light rounded-top">
                <p class="h4">Profile Name</p>
            </div>
            <img src="img/venti.jpg" class="card-img-top rounded-0" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <!-- CARD END -->

</div>

<!-- MAIN CONTENT END -->

<!-- REQUIRE FOOTER START -->
<!-- Includes all the Modals and New Post Button -->
<?php
require "footer.php"
?>
<!-- REQUIRE FOOTER END -->