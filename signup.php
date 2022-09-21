<div class="modal fade" id="signupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-light" id="signupModalLabel">Signup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-light">

                <!-- FORM START -->
                <form action="includes/signgup.inc.php" method="POST" enctype="multipart/form-data">

                    <!-- USERNAME START -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="uid" aria-describedby="username">
                    </div>
                    <!-- USERNAME END -->

                    <!-- EMAIL START -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="mail">
                    </div>
                    <!-- EMAIL END -->

                    <!-- ICON UPLOAD START -->
                    <div class="mb-3">
                        <label for="iconUpload" class="form-label">Choose Icon</label>
                        <input type="file" class="form-control" id="iconUpload" name="iconUpload">
                    </div>
                    <!-- ICON UPLOAD END -->

                    <!-- PASSWORD START -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="pwd">
                    </div>
                    <!-- PASSWORD END -->

                    <!-- PASSWORD REPEAT START -->
                    <div class="mb-3">
                        <label for="passwordRepeat" class="form-label">Repeat Password</label>
                        <input type="password" class="form-control" id="passwordRepeat" name="pwd-repeat">
                    </div>
                    <!-- PASSWORD REPEAT END -->

                    <!-- FORM SUBMIT/CLOSE -->
                    <button type="submit" class="btn btn-primary" name="signup-submit" value="Upload">Submit</button>
                    <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">Close</button>
                </form>
                <!-- FORM END -->

            </div>
        </div>
    </div>
</div>