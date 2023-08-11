<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>
<div class="">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo URL ?>uploads/carousel/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo URL ?>uploads/carousel/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo URL ?>uploads/carousel/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo URL ?>uploads/carousel/4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo URL ?>uploads/carousel/5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo URL ?>uploads/carousel/6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- About us section start  -->
<div class="py-5 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="">
                    <div class="about_img_box">
                        <img src="<?php echo URL ?>uploads/image/about1.jpg" class="img-fluid rounded" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="">
                    <div class="title_box">
                        <h5 class="py-3">ABOUT US</h5>
                    </div>
                    <div class="title_heading_box">
                        <h1>First Choice For Online Education Anywhere</h1>
                    </div>
                    <div class="heading_details">
                        <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                    </div>
                    <div class="heading_counting_box">
                        <div class="row">
                            <div class="col">
                                <div class="counting_box_1">
                                    <h1 class="text-center">123</h1>
                                    <h6 class="text-center">AVAILABLE
                                        SUBJECTS</h6>
                                </div>
                            </div>
                            <div class="col">
                                <div class="counting_box_1">
                                    <h1 class="text-center">1253</h1>
                                    <h6 class="text-center">ONLINE
                                        COURSES</h6>
                                </div>
                            </div>
                            <div class="col">
                                <div class="counting_box_1">
                                    <h1 class="text-center">1233</h1>
                                    <h6 class="text-center">SKILLED
                                        INSTRUCTORS</h6>
                                </div>
                            </div>
                            <div class="col">
                                <div class="counting_box_1">
                                    <h1 class="text-center">193</h1>
                                    <h6 class="text-center">HAPPY
                                        STUDENTS</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us section end  -->

<!-- WHY CHOOSE US? section start  -->
<div class="why_choose_main_box_section">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="why_choose_main_box">
                    <div class="title_box">
                        <h5 class="">WHY CHOOSE US?</h5>
                    </div>
                    <div class="title_heading_box">
                        <h1>Why You Should Start Learning with Us?</h1>
                    </div>
                    <div class="heading_details">
                        <p>Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet.</p>
                    </div>
                    <div class="row py-1">
                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="choose_us_1st_logo">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-8s">
                            <div class="choose_us_1st_logo_details">
                                <h2>Skilled Instructors</h2>
                                <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="choose_us_1st_logo">
                                <i class="far fa-sun"></i>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-8s">
                            <div class="choose_us_1st_logo_details">
                                <h2>International Certificate</h2>
                                <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="choose_us_1st_logo">
                                <i class="fas fa-book-reader"></i>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-8s">
                            <div class="choose_us_1st_logo_details">
                                <h2>Online Classes</h2>
                                <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="notice_board">
                    <div class="title_box">
                        <h5 class="mb-5">NOTICE BOARD</h5>
                    </div>
                    <!-- <img src="<?php echo URL ?>uploads/image/feature1.jpg" class="img-fluid" alt="..."> -->
                    <div class="row">
                        <div class="col">
                            <div class="notice_board_header">
                                <h5 class="text-white">Notification</h5>
                                <i class="fas fa-bell"></i>
                            </div>
                            <div class="notice_board_content">
                                <div class="notice_board_line">
                                    <div class="notice_content py-2">
                                        <div class="notice_content_logo_date new_notice">
                                            <i class="fas fa-circle"></i>
                                            <div class="d-flex">
                                                <p class="px-4">01/01/2023</p>
                                                <p class="px-4">10:20 PM</p>
                                            </div>
                                        </div>
                                        <div class="notice_content_body">
                                            <p class="px-4">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum</p>
                                        </div>
                                    </div>
                                    <div class="notice_content py-2">
                                        <div class="notice_content_logo_date">
                                            <i class="fas fa-circle"></i>
                                            <div class="d-flex">
                                                <p class="px-4">01/01/2023</p>
                                                <p class="px-4">10:20 PM</p>
                                            </div>
                                        </div>
                                        <div class="notice_content_body">
                                            <p class="px-4">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum</p>
                                        </div>
                                    </div>
                                    <div class="notice_content py-2">
                                        <div class="notice_content_logo_date">
                                            <i class="fas fa-circle"></i>
                                            <div class="d-flex">
                                                <p class="px-4">01/01/2023</p>
                                                <p class="px-4">10:20 PM</p>
                                            </div>
                                        </div>
                                        <div class="notice_content_body">
                                            <p class="px-4">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum</p>
                                        </div>
                                    </div>
                                    <div class="notice_content py-2">
                                        <div class="notice_content_logo_date">
                                            <i class="fas fa-circle"></i>
                                            <div class="d-flex">
                                                <p class="px-4">01/01/2023</p>
                                                <p class="px-4">10:20 PM</p>
                                            </div>
                                        </div>
                                        <div class="notice_content_body">
                                            <p class="px-4">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum</p>
                                        </div>
                                    </div>
                                    <div class="notice_content py-2">
                                        <div class="notice_content_logo_date">
                                            <i class="fas fa-circle"></i>
                                            <div class="d-flex">
                                                <p class="px-4">01/01/2023</p>
                                                <p class="px-4">10:20 PM</p>
                                            </div>
                                        </div>
                                        <div class="notice_content_body">
                                            <p class="px-4">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum</p>
                                        </div>
                                    </div>
                                    <div class="notice_content py-2">
                                        <div class="notice_content_logo_date">
                                            <i class="fas fa-circle"></i>
                                            <div class="d-flex">
                                                <p class="px-4">01/01/2023</p>
                                                <p class="px-4">10:20 PM</p>
                                            </div>
                                        </div>
                                        <div class="notice_content_body">
                                            <p class="px-4">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WHY CHOOSE US? section end  -->

<!-- Meet Our Instructors section start -->
<div class="">
    <div class="container mb-5">
        <div class="title_box text-center mt-5">
            <h5 class="">INSTRUCTORS</h5>
        </div>
        <div class="title_heading_box">
            <h1 class=" text-center py-3">Meet Our Instructors</h1>
        </div>
        <div class="row home_slider">
            <div class="instructors_box">
                <img src=" <?php echo URL ?>uploads/slider/2.jpg" class="card-img-top" alt="...">
                <div class="instructors_details">
                    <h3 class="text-center mt-2">Pijush Kanti Mandal</h3>
                    <p class="text-center">Web Developer & Designer</p>
                </div>
                <div class="instructors_social_media_icon d-flex justify-content-center py-2">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="instructors_box">
                <img src=" <?php echo URL ?>uploads/slider/1.jpg" class="card-img-top" alt="...">
                <div class="instructors_details">
                    <h3 class="text-center mt-2">Pijush Kanti Mandal</h3>
                    <p class="text-center">Web Developer & Designer</p>
                </div>
                <div class="instructors_social_media_icon d-flex justify-content-center py-2">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="instructors_box">
                <img src=" <?php echo URL ?>uploads/slider/3.jpg" class="card-img-top" alt="...">
                <div class="instructors_details">
                    <h3 class="text-center mt-2">Pijush Kanti Mandal</h3>
                    <p class="text-center">Web Developer & Designer</p>
                </div>
                <div class="instructors_social_media_icon d-flex justify-content-center py-2">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="instructors_box">
                <img src=" <?php echo URL ?>uploads/slider/2.jpg" class="card-img-top" alt="...">
                <div class="instructors_details">
                    <h3 class="text-center mt-2">Pijush Kanti Mandal</h3>
                    <p class="text-center">Web Developer & Designer</p>
                </div>
                <div class="instructors_social_media_icon d-flex justify-content-center py-2">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="instructors_box">
                <img src=" <?php echo URL ?>uploads/slider/1.jpg" class="card-img-top" alt="...">
                <div class="instructors_details">
                    <h3 class="text-center mt-2">Pijush Kanti Mandal</h3>
                    <p class="text-center">Web Developer & Designer</p>
                </div>
                <div class="instructors_social_media_icon d-flex justify-content-center py-2">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Meet Our Instructors section end -->

<!-- TESTIMONIAL Section Start -->
<div class="testimonial_main_section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="">
                    <div class="title_box  mt-5">
                        <h5 class="">TESTIMONIAL</h5>
                    </div>
                    <div class="title_heading_box">
                        <h1 class=" py-3">What Say Our Students</h1>
                    </div>
                    <div class="heading_details">
                        <p>Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea amet diam ipsum at amet. Erat sed stet eos ipsum diam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="">
                    <div class=" row student_single_slider">
                        <div class="student_single_slider_box  mt-3 p-4">
                            <div class="student_single_slider_box_details">
                                <i class="fas fa-2x fa-quote-left py-3"></i>
                                <p class="px-4 py-2">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea. Diam lorem ea sea at. </p>
                                <div class="d-flex">
                                    <div class="">
                                        <img src="<?php echo URL ?>uploads/slider/1.jpg" class="img-fluid rounded" width="100" alt="...">
                                    </div>
                                    <div class="px-3 student_name_desig">
                                        <h3>Pijush Kanti Mandal</h3>
                                        <p>Web Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="student_single_slider_box  mt-3 p-4">
                            <div class="student_single_slider_box_details">
                                <i class="fas fa-2x fa-quote-left py-3"></i>
                                <p class="px-4 py-2">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea. Diam lorem ea sea at. </p>
                                <div class="d-flex">
                                    <div class="">
                                        <img src="<?php echo URL ?>uploads/slider/2.jpg" class="img-fluid rounded" width="100" alt="...">
                                    </div>
                                    <div class="px-3 student_name_desig">
                                        <h3>Archana Rajvanshi</h3>
                                        <p>Web Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="student_single_slider_box  mt-3 p-4">
                            <div class="student_single_slider_box_details">
                                <i class="fas fa-2x fa-quote-left py-3"></i>
                                <p class="px-4 py-2">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea. Diam lorem ea sea at. </p>
                                <div class="d-flex">
                                    <div class="">
                                        <img src="<?php echo URL ?>uploads/slider/3.jpg" class="img-fluid rounded" width="100" alt="...">
                                    </div>
                                    <div class="px-3 student_name_desig">
                                        <h3>Pijush Kanti Mandal</h3>
                                        <p>Web Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="student_single_slider_box  mt-3 p-4">
                            <div class="student_single_slider_box_details">
                                <i class="fas fa-2x fa-quote-left py-3"></i>
                                <p class="px-4 py-2">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea. Diam lorem ea sea at. </p>
                                <div class="d-flex">
                                    <div class="">
                                        <img src="<?php echo URL ?>uploads/slider/1.jpg" class="img-fluid rounded" width="100" alt="...">
                                    </div>
                                    <div class="px-3 student_name_desig">
                                        <h3>Pijush Kanti Mandal</h3>
                                        <p>Web Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- TESTIMONIAL Section end -->

<!-- <div class="container-fluid information">
    <div class="container ">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <p> PRE K THROUGH 12 COLLEGE </p>
                <h2>Why Ed Academics is best Solution for Education</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <p>Our vertical solutions expertise allows your business to streamline workflow, and increase productivity. No matter the business, has you covered with industry compliant solutions, customized to your company’s specific needs, specific needs.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="box_1">
                    <i class="fas fa-2x fa-square-root-alt mb-4"></i>
                    <h3>Math</h3>
                    <p>Ability communicate effectively.</p>
                </div>
            </div>
            <div class="col">
                <div class="box_1">
                    <i class="fas fa-2x fa-square-root-alt mb-4"></i>
                    <h3>Math</h3>
                    <p>Ability communicate effectively.</p>
                </div>
            </div>
            <div class="col">
                <div class="box_1">
                    <i class="fas fa-2x fa-square-root-alt mb-4"></i>
                    <h3>Math</h3>
                    <p>Ability communicate effectively.</p>
                </div>
            </div>
            <div class="col">
                <div class="box_1">
                    <i class="fas fa-2x fa-square-root-alt mb-4"></i>
                    <h3>Math</h3>
                    <p>Ability communicate effectively.</p>
                </div>
            </div>
            <div class="col">
                <div class="box_1">
                    <i class="fas fa-2x fa-square-root-alt mb-4"></i>
                    <h3>Math</h3>
                    <p>Ability communicate effectively.</p>
                </div>
            </div>
            <div class="col">
                <div class="box_1">
                    <i class="fas fa-2x fa-square-root-alt mb-4"></i>
                    <h3>Math</h3>
                    <p>Ability communicate effectively.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="student_details_box">
                    <div class="student_feedback">
                        <p>“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</p>
                    </div>
                    <div class="d-flex justify-content-center py-3">
                        <img src="<?php echo URL ?>uploads/image/images.jpeg" alt="..." width="50" class="img-fluid rounded">
                    </div>
                    <div class="details">
                        <h4 class="text-center">Pijush knati Mandal</h4>
                        <h5 class="text-center">Student</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="student_details_box">
                    <div class="student_feedback">
                        <p>“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</p>
                    </div>
                    <div class="d-flex justify-content-center py-3">
                        <img src="<?php echo URL ?>uploads/image/images.jpeg" alt="..." width="50" class="img-fluid rounded">
                    </div>
                    <div class="details">
                        <h4 class="text-center">Pijush knati Mandal</h4>
                        <h5 class="text-center">Student</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="student_details_box">
                    <div class="student_feedback">
                        <p>“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</p>
                    </div>
                    <div class="d-flex justify-content-center py-3">
                        <img src="<?php echo URL ?>uploads/image/images.jpeg" alt="..." width="50" class="img-fluid rounded">
                    </div>
                    <div class="details">
                        <h4 class="text-center">Pijush knati Mandal</h4>
                        <h5 class="text-center">Student</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->



<!-- <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="">
                    <h2 class="bold">Rolling admissions now open</h2>
                    <p>Get in touch with us to discuss it:</p>
                    <div class="container border border-info">
                        <div id="wrap">
                            <div id="left"><i class="fas fa-2x fa-phone-alt"> </i> &nbsp;</div>
                            <h4 id="right"> +91 8167874215</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12 ">
                <div class="img_box  d-flex justify-content-center">
                    <img src="<?php echo URL ?>uploads/childrens1.jpg" alt=".." width="600" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Send Us A Message Section Start  -->
<div class="">
    <div class="container py-5">
        <div class="title_box text-center py-3">
            <h5 class="">NEED HELP?</h5>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="need_help_main_box">
                    <div class="row py-1">
                        <div class="col-lg-2 col-md-2 col-2">
                            <div class="need_help">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-10">
                            <div class="need_help_details">
                                <h3>Our Location</h3>
                                <p>123 Street, New York, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="row py-1 ">
                        <div class="col-lg-2 col-md-2 col-2">
                            <div class="need_help">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-10">
                            <div class="need_help_details ">
                                <h3>Call Us</h3>
                                <p>+91 8167874215</p>
                            </div>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-lg-2 col-md-2 col-2">
                            <div class="need_help">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-10">
                            <div class="need_help_details">
                                <h3>Email Us</h3>
                                <p>pijush.gazole369@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="send_a_message_box">

                    <div class="title_heading_box">
                        <h2 class=" py-1">Send Us A Message</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Your Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">Send Message</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Send Us A Message Section end  -->

<!-- footer section start  -->

<!-- footer section end  -->