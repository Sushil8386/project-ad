<?php include 'preloader.php' ?>
<div class="w-100"></div>

<header class="header zi-5 position-fixed top-0 w-100" >
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container py-lg-2">
            <a class="navbar-brand color_logo m-0 h-lg-60px h-50px" href="<?php echo f_path ?>"><img src="<?php echo f_path ?>assets/img/logos/baagigar11.png" alt="" class="h-100"></a>
            <!-- <a class="navbar-brand white_logo d-none" href="<?php echo f_path ?>"><img src="<?php echo f_path ?>assets/img/logos/logo-white.png" alt="" class="h-lg-50px h-md-40px h-25px"></a> -->
            <button class="btn toogle_btn border-0 shadow-none fs-sm-25 fs-22 d-lg-none d-flex" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="imgs img-bars text-dark"></i></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto gap-1 ">
                    <li class="nav-item"><a class="nav-link position-relative fw-bold text-theme1 fs-md-16 fs-14 active" href="<?php echo f_path ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link position-relative fw-bold text-theme1 fs-md-16 fs-14" href="<?php echo f_path ?>about-us/about-us.php">About Us<a></li>
                    <li class="nav-item"><a class="nav-link position-relative fw-bold text-theme1 fs-md-16 fs-14" href="<?php echo f_path ?>how-to-play/how-to-play.php">How To Play<a></li>
                    <li class="nav-item"><a class="nav-link position-relative fw-bold text-theme1 fs-md-16 fs-14" href="<?php echo f_path ?>contect_us/index.php">Contact Us<a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="javascript:;" class="cr_btn"><i class="imgb img-android me-2"></i><span>Download App</span></a>
                </div>
            </div>
        </div>
    </nav>
</header>




<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header align-items-center">
        <h5 class="offcanvas-title h-50px" id="offcanvasRightLabel"><a href="<?php echo f_path ?>" class=""><img src="<?php echo f_path ?>assets/img/logos/xpertgameslogo.png" alt="" class="h-100"></a></h5>
        <button type="button" class="border-0 btn shadow-none fs-20" data-bs-dismiss="offcanvas" aria-label="Close"><i class="imgl img-times"></i></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav ms-aut">
            <li class="nav-item"><a class="nav-link fs-sm-16 fs-14 text-center border-bottom py-3 fw-bold" href="<?php echo f_path ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link fs-sm-16 fs-14 text-center border-bottom py-3 fw-bold" href="<?php echo f_path ?>about-us/about-us.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link fs-sm-16 fs-14 text-center border-bottom py-3 fw-bold" href="<?php echo f_path ?>how-to-play/how-to-play.php">How To Play</a></li>
            <li class="nav-item"><a class="nav-link fs-sm-16 fs-14 text-center border-bottom py-3 fw-bold" href="<?php echo f_path ?>contect_us/index.php">Contact Us</a></li>

        </ul>
    </div>
</div>