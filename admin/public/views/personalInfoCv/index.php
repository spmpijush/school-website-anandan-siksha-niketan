<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<!-- <div class="container">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <form action="<?php echo URL ?>updateData" method="post" id="form">
                <div class="mt-3">
                    <label for="">Organization name</label>
                    <input type="text" name="company_name" id="company_name"
                        class="form-control form-control-sm">
                </div>

                <div class="mt-3">
                    <label for="">Tagline</label>
                    <input type="text" name="company_slogan" id="company_slogan"
                        class="form-control form-control-sm">
                </div>
                
                <div class="row mt-3">
                    <div class="col">
                        <label for="">ESTD</label>
                        <input type="number" name="estd" id="estd"
                            class="form-control form-control-sm">
                    </div>

                    <div class="col">
                        <label for="">Latitude</label>
                        <input type="number" id="lat" name="lat"
                            class="form-control form-control-sm">
                    </div>

                    <div class="col">
                        <label for="">Longitude</label>
                        <input type="number" id="longitude" name="longitude"
                            class="form-control form-control-sm">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="">Facebook page link</label>
                        <input type="text" name="facebook_page_link" id="facebook_page_link"
                            class="form-control form-control-sm">
                    </div>

                    <div class="col">
                        <label for="">Youtube channel link</label>
                        <input type="text" name="youtube_channel_link" id="youtube_channel_link"
                            class="form-control form-control-sm">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <button class="btn btn-success btn-sm" id="save_data_btn"> Save data </button>
                    </div>

                    <div class="col text-end">
                        <a href="<?php echo URL ?>contact"> To update contact details click here </a>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div> -->
<div class="pt-3  container bg-white">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    PERSONAL INFORMATION
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <form action="<?php echo URL ?>updateData" method="post" id="form">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="fathers_name" class="form-label">Father's Name</label>
                                        <input type="text" class="form-control" id="fathers_name" name="fathers_name" aria-describedby="textHelp" placeholder="Enter Father's Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="date_of_birth" class="form-label">Date Of Birth</label>
                                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" aria-describedby="textHelp" placeholder="Enter Date of Birth">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="vill" class="form-label">Village Name</label>
                                        <input type="text" class="form-control" id="vill" name="vill" aria-describedby="textHelp" placeholder="Enter Village Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="">
                                    <label for="marital_status" class="form-label">Marital Status</label>
                                    <select class="form-select" id="marital_status" value="marital_status" name="marital_status" aria-label="Default select example">
                                        <option selected>-- Select --</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Single">Single</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="po" class="form-label">Post Office</label>
                                        <input type="text" class="form-control" id="po" name="po" aria-describedby="textHelp" placeholder="Enter Post Office Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="dist" class="form-label">District</label>
                                        <input type="text" class="form-control" id="dist" name="dist" aria-describedby="textHelp" placeholder="Enter District Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="ps" class="form-label">Police Station</label>
                                        <input type="text" class="form-control" id="ps" name="ps" aria-describedby="textHelp" placeholder="Enter Police Station Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="gp" class="form-label">G.P</label>
                                        <input type="text" class="form-control" id="gp" name="gp" aria-describedby="textHelp" placeholder="Enter G.P Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="pin" class="form-label">PIN</label>
                                        <input type="text" class="form-control" id="pin" name="pin" aria-describedby="textHelp" placeholder="Enter Your PIN No">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" name="state" aria-describedby="textHelp" placeholder="Enter State Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="language" class="form-label">Language</label>
                                        <input type="text" class="form-control" id="language" name="language" aria-describedby="textHelp" placeholder="Please write down how many languages ​​you know ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="phone_no" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_no" name="phone_no" aria-describedby="textHelp" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="alternate_phone_number" class="form-label">Alternate Phone Number</label>
                                        <input type="text" class="form-control" id="alternate_phone_number" name="alternate_phone_number" aria-describedby="textHelp" placeholder="Enter Alternate Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="whatsapp_no" class="form-label">Whatsapp Number</label>
                                        <input type="text" class="form-control" id="whatsapp_no" name="whatsapp_no" aria-describedby="textHelp" placeholder="Enter Whatsapp Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="button" id="save_data_btn" class="btn btn-success">Save / Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    EDUCATIONAL QUALIFICATIONS
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse " aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-12 table-sm table-responsive-sm">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th scope="col">Degree</th>
                                        <th scope="col">Board / University</th>
                                        <th scope="col">Institute</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Passing Year</th>
                                        <th scope="col">Percentage</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="education_data">
                                    <!-- <tr>
                                        <th scope="row">ITI EXAMINATION</th>
                                        <td>N.S.Q.F </td>
                                        <td>HARIRAMPUR GOVERNMENT ITI </td>
                                        <td>COPA </td>
                                        <td>2021 FEB </td>
                                        <td>86% </td>
                                        <td><i class="fas fa-edit"></i></td>
                                        <td><i class="fas fa-trash-alt"></i></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-end">
                        <button id="show_hide_education_button" type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add New </button>
                    </div>
                    <div class="row" id="show_hide_education">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="">
                                <div class="mb-3">
                                    <label for="degree" class="form-label">Degree</label>
                                    <input type="text" class="form-control" id="degree" name="degree" aria-describedby="textHelp" placeholder="Enter Your Degree">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="">
                                <div class="mb-3">
                                    <label for="board_university" class="form-label">Board / University</label>
                                    <input type="text" class="form-control" id="board_university" name="board_university" aria-describedby="textHelp" placeholder="Enter Your Board / University">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="">
                                <div class="mb-3">
                                    <label for="insititute" class="form-label">Institute</label>
                                    <input type="text" class="form-control" id="insititute" name="insititute" aria-describedby="textHelp" placeholder="Enter Your Institute">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="">
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" aria-describedby="textHelp" placeholder="Enter Your Subject">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="">
                                <div class="mb-3">
                                    <label for="passing_year" class="form-label">Passing Year </label>
                                    <input type="text" class="form-control" id="passing_year" name="passing_year" aria-describedby="textHelp" placeholder="Enter Your Passing Year">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="">
                                <div class="mb-3">
                                    <label for="percentage" class="form-label">Percentage</label>
                                    <input type="text" class="form-control" id="percentage" name="percentage" aria-describedby="textHelp" placeholder="Enter Your Percentage">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" id="education_save_data" class="btn btn-success">Save</button>
                            <button type="button" id="education_update_data" class="btn btn-success d-none">Update</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    WORK EXPERIENCE
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-12 table-sm table-responsive-sm">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="work_experience_data">
                                    <!-- <tr>
                                        <th scope="row">ADYTUMINFOTECH P.V.T L.T.D SOFTWARE COMPANY</th>
                                        <td>WEB DEVELOPER </td>
                                        <td>2021-11-01 - 2022-03-31</td>
                                        <td>I joined this Software Company in November and currently working in this company as a Web Developer. </td>
                                        <td><i class="fas fa-edit"></i></td>
                                        <td><i class="fas fa-trash-alt"></i></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <div class="text-end">
                            <button id="show_hide_work_experience_button" type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add New </button>
                        </div>
                    </div>
                    <div id="show_hide_work_experience_section">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="company" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="company" name="company" aria-describedby="textHelp" placeholder="Enter Your Company Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="position" class="form-label">Position</label>
                                        <input type="text" class="form-control" id="position" name="position" aria-describedby="textHelp" placeholder="Enter Your Position">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date" aria-describedby="textHelp" placeholder="Enter Duration E.g - 2021-11-01 ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date" aria-describedby="textHelp" placeholder="Enter Duration E.g - 2021-11-01 ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Your Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button id="work_experience_submit" type="button" class="btn btn-success"> Save </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor" aria-expanded="false" aria-controls="flush-collapseFor">
                    SKILS
                </button>
            </h2>
            <div id="flush-collapseFor" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-12 table-sm table-responsive-sm">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th scope="col">Skils Name</th>
                                        <th scope="col">Skils Percentage</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="skils_data">
                                    <!-- <tr>
                                        <th scope="row">HTML</th>
                                        <td>90%</td>
                                        <td><i class="fas fa-edit"></i></td>
                                        <td><i class="fas fa-trash-alt"></i></td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <div class="text-end">
                                <button id="show_hide_skils_btn" type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add New </button>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="show_hide_skils_section">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="">
                                <div class="mb-3">
                                    <label for="skils_name" class="form-label">Skils Name</label>
                                    <input type="text" class="form-control" id="skils_name" name="skils_name" aria-describedby="textHelp" placeholder="Enter Your Skils Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="">
                                <div class="mb-3">
                                    <label for="skils_percentage" class="form-label">Skils Percentage</label>
                                    <input type="text" class="form-control" id="skils_percentage" name="skils_percentage" aria-describedby="textHelp" placeholder="Enter Your Skils Percentage">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button id="skils_submit" type="button" class="btn btn-success"> Save </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    GALLERY
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row" id="gallery_data">
                        <!-- <div class="col-lg-3 col-md-4 col-12">
                            <div class="text-center bg-white p-2 rounded-3">
                                <img src="../../website/public/uploads/cv/bg.jpg" for="formFile" class="gallery_img" alt="...">
                                <i class="fas fa-trash-alt mt-3"></i>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="text-center bg-white p-2 rounded-3">
                                <img src="../../website/public/uploads/cv/bg.jpg" for="formFile" class="gallery_img" alt="...">
                                <i class="fas fa-trash-alt mt-3"></i>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="text-center bg-white p-2 rounded-3">
                                <img src="../../website/public/uploads/cv/bg.jpg" for="formFile" class="gallery_img" alt="...">
                                <i class="fas fa-trash-alt mt-3"></i>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="text-center bg-white p-2 rounded-3">
                                <img src="../../website/public/uploads/cv/bg.jpg" for="formFile" class="gallery_img" alt="...">
                                <i class="fas fa-trash-alt mt-3"></i>
                            </div>
                        </div> -->

                        <div class="col-lg-3 col-md-4 col-12 mt-2" id="main_file_box">
                            <div class="text-center" id="file_box">
                                <label class="btn btn-default btn-sm center-block btn-file">
                                    <img src="<?php echo URL ?>uploads/cv/uploads.png" for="formFile" class="gallery_img" alt="...">
                                    <input type="file" style="display: none;">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>