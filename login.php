<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-light" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-light">

                <!-- FORM START -->
                <form action="includes/login.inc.php" method="POST">

                    <!-- USERNAME START -->
                    <div class="mb-3">
                        <label for="usernameLogin" class="form-label">Username/Email</label>
                        <input type="text" class="form-control" id="usernameLogin" name="uid" aria-describedby="usernameLogin">
                    </div>
                    <!-- USERNAME END -->

                    <!-- PASSWORD START -->
                    <div class="mb-3">
                        <label for="passwordLogin" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pwd" id="passwordLogin">
                    </div>
                    <!-- PASSWORD END -->

                    <!-- FORM SUBMIT/CLOSE -->
                    <button type="submit" class="btn btn-primary" name="login-submit">Submit</button>
                    <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">Close</button>
                </form>
                <!-- FORM END -->

            </div>

        </div>
    </div>
</div>