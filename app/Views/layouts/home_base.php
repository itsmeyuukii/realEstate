<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="One of the Best Broker in Phillipines" >
    <meta name="description" content="My Saving Grace Realty & Development Corporation">
    <meta name="author" content="Gerard">
    <meta name="generator" content="Jekyll">
    <title><?= $this->renderSection("title"); ?></title>
    <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?
        family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('theme/vendors/fontawesome-pro-5/css/all.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/vendors/bootstrap-select/css/bootstrap-select.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/vendors/slick/slick.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/vendors/magnific-popup/magnific-popup.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/vendors/jquery-ui/jquery-ui.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('theme/vendors/chartjs/Chart.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/vendors/dropzone/css/dropzone.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/vendors/animate.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/vendors/timepicker/bootstrap-timepicker.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/vendors/mapbox-gl/mapbox-gl.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/vendors/dataTables/jquery.dataTables.min.css'); ?>">
    <!-- Themes core CSS -->
    <link rel="stylesheet" href="<?= base_url('theme/css/themes.css'); ?>">
    <!-- Favicons -->
    <link rel="icon" href="<?= base_url('theme/images/headicon.png'); ?>">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="@">
    <meta name="twitter:description" content="My Saving Grace Realty & Development Corporation">
    <meta name="twitter:image" content="<?=base_url('theme/images/homeid-social-logo.png') ?>">
    <!-- Facebook -->
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:title" content="Best Real Estate Broker">
    <meta property="og:description" content="My Saving Grace Realty & Development Corporation">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://staging.msg-homes.com/public/uploads/blog_images/1703214126_4c57a111578fc044992f.png">
    <meta property="og:image:type" content="image/png">
    <!-- <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630"> -->
</head>

<body>
<!-- script for fblogin -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1530263844489250',
      xfbml      : true,
      version    : 'v18.0'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    <!-- Navbar Start -->
    <header class="main-header position-absolute fixed-top m-0 navbar-dark header-sticky header-sticky-smart header-mobile-xl">
        <div class="sticky-area">
            <div class="container container-xxl">
            <div class="d-flex align-items-center">
                <nav class="navbar navbar-expand-xl bg-transparent px-0 w-100 w-xl-auto">
                <a class="navbar-brand mr-7" href="<?= base_url() ?>">
                    <img src="<?= base_url('theme/images/logo/logo-white.png'); ?>" alt="HomeID" class="normal-logo" style="height:40px;width:156px;">
                    <img src="<?= base_url('theme/images/logo/logo-colored.png'); ?>" alt="HomeID" style="height:40px;width:156px;"
                                class="sticky-logo">
                </a>
                <!-- <a class="d-block d-xl-none ml-auto mr-4 position-relative text-primary p-2" href="#">
                    <i class="fal fa-heart fs-large-4"></i>
                    <span class="badge badge-primary badge-circle badge-absolute">1</span>
                </a> -->
                <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse"
                                data-target="#primaryMenu02"
                                aria-controls="primaryMenu02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-primary fs-24"><i class="fal fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse mt-3 mt-xl-0" id="primaryMenu02">
                    <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                    <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false"
                            class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link p-0" href="<?= base_url() ?>">
                        Home
                        <span class="caret"></span>
                        </a>
                    </li>
                    
                    <li id="navbar-item-services" aria-haspopup="true" aria-expanded="false"
                            class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link p-0" href="<?= base_url('services') ?>">
                        Services
                        <span class="caret"></span>
                        </a>
                    </li>
                    <li id="navbar-item-aboutus" aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link dropdown-toggle p-0" href="#" data-toggle="dropdown" >
                        About Us
                        <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pt-3 pb-0 pb-xl-3" aria-labelledby="navbar-item-dashboard">
                        <li class="dropdown-item">
                            <a id="navbar-link-dashboard"
                                class="dropdown-link"
                                href="<?= base_url('affiliate') ?>" >
                            Affiliate & Partners
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a id="navbar-link-add-new-property"
                                class="dropdown-link"
                                href="<?= base_url('commendation')?>" >
                            Commendation
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a id="navbar-link-my-properties"
                                class="dropdown-link"
                                href="<?= base_url('our-company') ?>" >
                            Our Company
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a id="navbar-link-my-favorites"
                                class="dropdown-link"
                                href="<?= base_url('our-people') ?>" >
                            Our People
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a id="navbar-link-save-search"
                                class="dropdown-link"
                                href="<?= base_url('testimonials') ?>" >
                            Clients Testimonials
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a id="navbar-link-reviews"
                                class="dropdown-link"
                                href="<?= base_url('careers') ?>" >
                            Careers
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li id="navbar-item-news" aria-haspopup="true" aria-expanded="false"
                            class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link p-0" href="<?=base_url("blog") ?>">
                        News & Events
                        <span class="caret"></span>
                        </a>
                    </li>
                    <li id="navbar-item-contact" aria-haspopup="true" aria-expanded="false"
                            class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link p-0" data-toggle="modal" href="#contactModal" >
                        Contact Us
                        <span class="caret"></span>
                        </a>
                    </li>
                    <li id="navbar-item-sell" aria-haspopup="true" aria-expanded="false"
                            class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link p-0" href="<?= base_url('sell-my-property') ?>">
                        Sell My Property
                        <span class="caret"></span>
                        </a>
                    </li>
                    </ul>
                    
                    <!-- Display Mobile-->
                    <div class="d-block d-xl-none">
                    <ul class="navbar-nav flex-row ml-auto align-items-center flex-wrap py-2">
                    <?php
                        $session = session();

                        // Check if there's a logged-in user
                        if ($is_logged_in) {
                            echo '<li class="nav-item">
                                    <a class="btn btn-primary btn-lg" "
                                        href="' . base_url("dashboard") . '">
                                        DASHBOARD
                                    </a>
                                </li>';
                        } else {
                            echo '<li class="nav-item">
                                    <a class="btn btn-primary btn-lg" data-toggle="modal" href="#login-register-modal">SIGN IN</a>
                                </li>';
                        }
                    ?>
                    </ul>
                    </div>
                    
                </div>
                </nav>
                <div class="ml-auto d-none d-xl-block">
                <ul class="navbar-nav flex-row ml-auto align-items-center justify-content-lg-end flex-wrap py-2">
                    
                    <!-- <li class="nav-item mr-auto mr-lg-6">
                    <a class="nav-link px-2 position-relative" href="#">
                        <i class="fal fa-heart fs-large-4"></i>
                        <span class="badge badge-primary badge-circle badge-absolute"></span>
                    </a>
                    </li> -->
                    <?php
                    $session = session();

                    // Check if there's a logged-in user
                    if ($is_logged_in) {
                        echo '<li class="nav-item">
                                <a class="btn btn-outline-light btn-lg text-white rounded-lg bg-hover-primary border-hover-primary hover-white d-none d-lg-block"
                                    href="' . base_url("dashboard") . '">
                                    DASHBOARD
                                </a>
                                <a class="btn btn-primary btn-lg d-block d-lg-none"
                                    href="' . base_url("dashboard") . '">
                                    DASHBOARD
                                </a>
                            </li>';
                    } else {
                        echo '<li class="nav-item">
                                <a class="btn btn-outline-light btn-lg text-white rounded-lg bg-hover-primary border-hover-primary hover-white d-none d-lg-block"
                                    href="#login-register-modal" data-toggle="modal">
                                    SIGN IN
                                </a>
                                <a class="btn btn-primary btn-lg d-block d-lg-none"
                                    href="#login-register-modal" data-toggle="modal">
                                    SIGN IN
                                </a>
                            </li>';
                    }
                    ?>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </header>
    <!-- Navbar End -->

    <!-- Content Start-->
    <?= $this->renderSection("content"); ?>
    <!-- Content End-->


    <!-- Footer Start -->
    <footer class="bg-dark pt-8 footer text-muted">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-6 mb-md-0">
                    <a class="d-block mb-2" href="#">
                        <img src="<?= base_url('theme/images/logo/logo-colored.png'); ?>" alt="">
                    </a>
                    <div class="lh-26 font-weight-500">
                        <p class="mb-0">Unit 4 & 15 Garnet Bldg. Metrogate Estate Complex</p>
                        <a class="d-block text-muted hover-white"
                            href="mailto:info@msg-homes.com">info@msg-homes.com</a>
                        <a class="d-block text-lighter font-weight-bold fs-15 hover-white"
                            href="tel:(046)435-0008">(046)435-0008
                        </a>
                        <a class="d-block text-muted hover-white" href="<?=base_url() ?>">www.msg-homes.com</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mb-6 mb-md-0">
                    <h4 class="text-white fs-16 my-4 font-weight-500">Popular Searches</h4>
                    <ul class="list-group list-group-flush list-group-no-border">
                        <li class="list-group-item bg-transparent p-0">
                            <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Foreclosed Property</a>
                        </li>
                        <li class="list-group-item bg-transparent p-0">
                            <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Private Property</a>
                        </li>
                        <li class="list-group-item bg-transparent p-0">
                            <a href="#" class="text-muted lh-26 font-weight-500 hover-white">For Sale</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-2 mb-6 mb-md-0">
                    <h4 class="text-white fs-16 my-4 font-weight-500">Quick links</h4>
                    <ul class="list-group list-group-flush list-group-no-border">
                        <li class="list-group-item bg-transparent p-0">
                            <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Terms of Use</a>
                        </li>
                        <li class="list-group-item bg-transparent p-0">
                            <a href="<?= base_url('privacy-policy') ?>" class="text-muted lh-26 font-weight-500 hover-white">Privacy Policy</a>
                        </li>
                        <li class="list-group-item bg-transparent p-0">
                            <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Suggestions</a>
                        </li>
                        <li class="list-group-item bg-transparent p-0">
                            <a href="#" class="text-muted lh-26 hover-white font-weight-500">Careers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 mb-6 mb-md-0">
                    <h4 class="text-white fs-16 my-4 font-weight-500">Sign Up for Our Newsletter</h4>
                    <p class="font-weight-500 text-muted lh-184">Stay updated with our latest news, offers, and exclusive promotions by signing up for our newsletter. 
                        <p>
                    <?= form_open('email-sub') ?>
                        <div class="input-group input-group-lg mb-6">
                            <input type="email" name="subsEmail"
                                class="form-control bg-white shadow-none border-0 z-index-1"
                                autocomplete="off" placeholder="Your email">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Subscribe</button>
                            </div>
                        </div>
                    <?= form_close() ?>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-0">
                            <a href="https://twitter.com/msgrdc_official" class="text-white opacity-3 fs-25 px-4 opacity-hover-10"><i
                                    class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="https:/facebook.com/msgrdc.official" class="text-white opacity-3 fs-25 px-4 opacity-hover-10"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="https://instagram.com/msgrdc.official" class="text-white opacity-3 fs-25 px-4 opacity-hover-10"><i
                                    class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="https://tiktok.com/msgrdc.official" class="text-white opacity-3 fs-25 px-4 opacity-hover-10"><i
                                    class="fab fa-tiktok"></i></a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="#" class="text-white opacity-3 fs-25 px-4 opacity-hover-10"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-0 mt-md-10 row">
                <ul class="list-inline mb-0 col-md-6 mr-auto">
                    <li class="list-inline-item mr-6">
                        <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Privacy Policy</a>
                    </li>
                </ul>
                <p class="col-md-auto mb-0 text-muted">
                    © 2023 MySavingGrace. All Rights Reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <div class="position-fixed pos-fixed-bottom-right p-6 z-index-10">
        <a href="#"
            class="gtf-back-to-top bg-white text-primary hover-white bg-hover-primary shadow p-0 w-52px h-52 rounded-circle fs-20 d-flex align-items-center justify-content-center"
            title="Back To Top"><i class="fal fa-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <!-- Vendors scripts -->
    <script src="<?= base_url('theme/vendors/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/bootstrap/bootstrap.bundle.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/bootstrap-select/js/bootstrap-select.min.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/slick/slick.min.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/waypoints/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/counter/countUp.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/magnific-popup/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/chartjs/Chart.min.js'); ?>"></script>
    <!-- <script src="</?= base_url('theme/vendors/dropzone/js/dropzone.min.js'); ?>"></script> -->
    <script src="<?= base_url('theme/vendors/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/hc-sticky/hc-sticky.min.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/jparallax/TweenMax.min.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/mapbox-gl/mapbox-gl.js'); ?>"></script>
    <script src="<?= base_url('theme/vendors/dataTables/jquery.dataTables.min.js'); ?>"></script>
    
   <!-- Theme scripts -->
   <script src="<?= base_url('theme/js/theme.js'); ?>"></script>
   <?= $this->include("userlogin/v_login"); ?>
   <?= $this->include("layouts/svg"); ?>
   <?= $this->include("layouts/contactus"); ?>
    
    <!-- Template Javascript -->
</body>

</html>