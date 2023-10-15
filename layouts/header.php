<?php include 'preloader.php' ?>
<div class="w-100"></div>

<header class="header position-fixed top-0 w-100" >
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent flex-column pt-lg-2">
        <div class="container-fluid headerTop">
            <div class="row w-100 mx-auto">
                <div class="col-auto ms-auto px-0">
                    <div class="row align-items-center gap-4">
                        <div class="col-auto">
                            <a href="tel: +91-9549581582"> +91-9549581582</a>
                        </div>
                        <div class="col-auto">
                            <a href="skype:live:Adconinfotech"> live:Adconinfotech</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-lg-1">
            <a class="navbar-brand color_logo m-0 " href="<?php echo f_path ?>"><img src="<?php echo f_path ?>assets/img/logos/logo.png" alt="" class="h-100"></a>
            <button class="btn toogle_btn border-0 shadow-none fs-sm-25 fs-22 d-lg-none d-flex" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="imgs img-bars text-dark"></i></button>
            <div class="collapse navbar-collapse gap-4" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto gap-4 ">
                    <li class="nav-item"><a class="nav-link position-relative fw-bold text-theme1 active" href="<?php echo f_path ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link position-relative fw-bold text-theme1" href="javascript:;">Our Work<a></li>
                    <li class="nav-item"><a class="nav-link position-relative fw-bold text-theme1" href="javascript:;">Service<a></li>
                    <li class="nav-item"><a class="nav-link position-relative fw-bold text-theme1" href="javascript:;">Solutions<a></li>
                </ul>
                <div class="dflex align-items-center">
                    <a href="javascript:;" class="cr_btn"><span>CONTACT</span></a>
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
            <li class="nav-item"><a class="nav-link fs-sm-16 fs-14 text-center border-bottom py-3 fw-bold" href="<?php echo f_path ?>about-us/about-us.php">Our Work</a></li>
            <li class="nav-item"><a class="nav-link fs-sm-16 fs-14 text-center border-bottom py-3 fw-bold" href="<?php echo f_path ?>how-to-play/how-to-play.php">Service</a></li>
            <li class="nav-item"><a class="nav-link fs-sm-16 fs-14 text-center border-bottom py-3 fw-bold" href="<?php echo f_path ?>contect_us/index.php">Solutions</a></li>

        </ul>
    </div>
</div>