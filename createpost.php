<!-- CREATE POST MODAL -->
<div class="modal fade" id="newPostModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="newPostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-light" id="newPostModalLabel">New Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-light">

                <!-- FORM START -->
                <form action="includes/createpost.inc.php" method="POST" enctype="multipart/form-data">

                    <!-- POST TITLE START -->
                    <div class="mb-3">
                        <label for="postTitle" class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="postTitle" name="title" aria-describedby="postTitle">
                    </div>
                    <!-- POST TITLE END -->

                    <!-- IMAGE UPLOAD START -->
                    <div class="mb-3">
                        <label for="imageUpload" class="form-label">Choose Image</label>
                        <input type="file" class="form-control" id="imageUpload" name="imageUpload">
                    </div>
                    <!-- IMAGE UPLOAD END -->

                    <!-- PASSWORD START -->
                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                    </div>
                    <!-- PASSWORD END -->


                    <!-- FORM SUBMIT/CLOSE -->
                    <button type="submit" class="btn btn-primary" value="Upload" name="post-submit">Submit</button>
                    <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">Close</button>
                </form>
                <!-- FORM END -->

            </div>
        </div>
    </div>
</div>