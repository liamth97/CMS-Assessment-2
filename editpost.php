<?php

// EDIT MODAL TO ACCESS UNIQUE POST ID FOR EDITING
$output .= '
                <div class="modal fade" id="editPostModal' . $row['postID'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editPostModal' . $row['postID'] . 'Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-dark">
                            <div class="modal-header">
                                <h5 class="modal-title text-light" id="editPostModal' . $row['postID'] . 'Label">Edit Post</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-light">

                                <!-- FORM START -->
                                <form action="includes/editpost.inc.php?id=' . $row['postID'] . '" method="POST" enctype="multipart/form-data">

                                    <!-- POST TITLE START -->
                                    <div class="mb-3">
                                        <label for="postTitle' . $row['postID'] . '" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="postTitle' . $row['postID'] . '" name="title" value="' . $row['postTitle'] . '" aria-describedby="postTitle">
                                    </div>
                                    <!-- POST TITLE END -->

                                    <!-- IMAGE UPLOAD START -->
                                    <div class="mb-3">
                                        <label for="imageUpload' . $row['postID'] . '" class="form-label">Choose Image</label>
                                        <input type="file" class="form-control" id="imageUpload' . $row['postID'] . '" name="imageUpload">
                                    </div>
                                    <!-- IMAGE UPLOAD END -->

                                    <!-- COMMENT START -->
                                    <div class="mb-3">
                                        <label for="comment' . $row['postID'] . '" class="form-label">Comment</label>
                                        <textarea class="form-control" id="comment' . $row['postID'] . '" name="comment" rows="3">' . $row['comment'] . '</textarea>
                                    </div>
                                    <!-- COMMENT END -->


                                    <!-- FORM SUBMIT/CLOSE -->
                                    <button type="submit" class="btn btn-primary" value="Upload" name="edit-submit">Submit</button>
                                    <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">Close</button>
                                </form>
                                <!-- FORM END -->

                            </div>
                        </div>
                    </div>
                </div>;
            ';
