<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>



<!-- <div class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo URL ?>uploads/1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="body_height">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        New Slider Image Insert
    </button>
    <div class="container">
        <div class="row">
            <div class="row slider_image_row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <h5>Image</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <h5>Caption</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <h5>Description</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <h5>Option</h5>
                    </div>
                </div>
            </div>
            <div class="row slider_image_row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <img class="card-img-top" src="<?php echo URL ?>uploads/1.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <div class="row slider_image_row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <img class="card-img-top" src="<?php echo URL ?>uploads/1.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <div class="row slider_image_row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <img class="card-img-top" src="<?php echo URL ?>uploads/1.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"">
        <div class=" modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post" id="form">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="mb-3">
                            <label for="image_caption" class="form-label">Image Caption</label>
                            <input type="text" class="form-control" id="image_caption" aria-describedby="textHelp" placeholder="Image Caption">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="mb-3">
                            <label for="image_description" class="form-label">Image Description</label>
                            <input type="text" class="form-control" id="image_description" aria-describedby="textHelp" placeholder="Image Description">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mb-3">
                            <label for="file" class="form-label">Image</label>
                            <input type="file" class="form-control" id="file" aria-describedby="textHelp">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="save_btn" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>
</div>