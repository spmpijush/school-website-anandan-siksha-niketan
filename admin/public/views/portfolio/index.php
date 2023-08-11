<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<div class="container">

    <!-- <form action="<?php echo URL ?>updateData" method="post" id="form">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="organization_name" class="form-label">Organization Name</label>
                    <input type="text" class="form-control" id="organization_name" name="organization_name" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="name" class="form-label">Owner Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="position" name="position" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="whatsapp" class="form-label">Whatsapp</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="github" class="form-label">Github</label>
                    <input type="text" class="form-control" id="github" name="github" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="linkdin" class="form-label">Linkdin</label>
                    <input type="text" class="form-control" id="linkdin" name="linkdin" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="youtub" class="form-label">Youtube</label>
                    <input type="text" class="form-control" id="youtub" name="youtub" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="project_overview" class="form-label">Project Overview</label>
                    <textarea class="form-control" id="project_overview" name="project_overview" rows="3"></textarea>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="declaration" class="form-label">Declaration</label>
                    <textarea class="form-control" id="declaration" name="declaration" rows="3"></textarea>
                </div>
            </div>

            <div class="text-end">
                <button type="button" id="save_data_btn" class="btn btn-success">Save / Update</button>
            </div>
        </div>
    </form> -->
    <div class="table-sm table-responsive-sm">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Upload by</th>
                    <th scope="col">Upload date</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody id="product_details">
                <tr>
                    <th scope="row">1</th>
                    <td><img src="../../website/public/uploads/portfolio/bg.jpg" class="" width="60" height="50" alt="..."></td>
                    <td>School Website</td>
                    <td>Pijush Kanti Mandal</td>
                    <td>10/12/2022</td>
                    <td>90</td>
                    <td><i class="fas fa-edit"></i></td>
                    <td><i class="fas fa-trash-alt"></i></td>
                </tr>
            </tbody>
        </table>
        <div class="text-end">
            <button id="show_hide_product_btn" type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add New Product</button>
        </div>
    </div>
    <div class="row mt-2" id="show_hide_product_form">
        <div class="col-lg-3 col-md-4 col-12">
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Enter Product Name" autocomplete="off">
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Upload by</label>
                <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Enter Author Name" autocomplete="off">
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Upload date</label>
                <input type="date" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Enter Upload date" autocomplete="off" value="<?php echo date('Y-m-d') ?>">
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Image</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Document</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Second Image</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="mb-3">
                <label for="price" class="form-label">Price </label>
                <input class="form-control" type="number" id="price" placeholder="Enter Product Price">
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-success">Save / Update</button>
        </div>
    </div>
</div>