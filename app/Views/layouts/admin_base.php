<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Real Estate Html Template">
  <meta name="author" content="">
  <meta name="generator" content="Jekyll">
  <title>Dashboard - HomeID</title>
  <!-- Google fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= base_url('theme/vendors/fontawesome-pro-5/css/all.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/vendors/bootstrap-select/css/bootstrap-select.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/vendors/slick/slick.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/vendors/magnific-popup/magnific-popup.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/vendors/jquery-ui/jquery-ui.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/vendors/chartjs/Chart.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/vendors/dropzone/css/dropzone.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/vendors/animate.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/vendors/timepicker/bootstrap-timepicker.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/vendors/mapbox-gl/mapbox-gl.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/vendors/dataTables/jquery.dataTables.min.css'); ?>">

  <!-- Themes core CSS -->
  <link rel="stylesheet" href="<?= base_url('theme/css/themes.css'); ?>">
  <!-- Favicons -->
  <link rel="icon" href="<?= base_url('theme/images/favicon.ico'); ?>">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@">
  <meta name="twitter:creator" content="@">
  <meta name="twitter:title" content="Dashboard">
  <meta name="twitter:description" content="Real Estate Html Template">
  <meta name="twitter:image" content="<?= base_url('theme/images/homeid-social-logo.png'); ?>">
  <!-- Facebook -->
  <meta property="og:url" content="<?= base_url('theme/dashboard.html'); ?>">
  <meta property="og:title" content="Dashboard">
  <meta property="og:description" content="Real Estate Html Template">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?= base_url('theme/images/homeid-social.png'); ?>">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <!-- script -->
</head>

<body>
  <div class="wrapper dashboard-wrapper">
    <div class="d-flex flex-wrap flex-xl-nowrap">
      <div class="db-sidebar bg-white">
        <nav class="navbar navbar-expand-xl navbar-light d-block px-0 header-sticky dashboard-nav py-0">
          <div class="sticky-area shadow-xs-1 py-3">
            <div class="d-flex px-3 px-xl-6 w-100">
              <a class="navbar-brand" href="<?= base_url('') ?>">
                <img src="<?= base_url('theme/images/logo/logo-colored.png') ?>" alt="HomeID">
              </a>
              <div class="ml-auto d-flex align-items-center ">
                <div class="d-flex align-items-center d-xl-none">
                  <div class="dropdown px-3">
                    <a href="#" class="dropdown-toggle d-flex align-items-center text-heading" data-toggle="dropdown">
                      <div class="w-48px">
                        <img src="<?= base_url('theme/images/testimonial-5.jpg') ?>" alt="Ronald Hunter"
                          class="rounded-circle">
                      </div>
                      <span class="fs-13 font-weight-500 d-none d-sm-inline ml-2">
                        Ronald Hunter
                      </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">My Profile</a>
                      <a class="dropdown-item" href="#">My Profile</a>
                      <a class="dropdown-item" href="#">Logout</a>
                    </div>
                  </div>
                  <div class="dropdown no-caret py-4 px-3 d-flex align-items-center notice mr-3">
                    <a href="#" class="dropdown-toggle text-heading fs-20 font-weight-500 lh-1" data-toggle="dropdown">
                      <i class="far fa-bell"></i>
                      <span class="badge badge-primary badge-circle badge-absolute font-weight-bold fs-13">1</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse"
                  data-target="#primaryMenuSidebar" aria-controls="primaryMenuSidebar" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
            </div>
            <div class="collapse navbar-collapse bg-white" id="primaryMenuSidebar">

              <ul class="list-group list-group-flush w-100">
                <li class="list-group-item pt-6 pb-4">
                  <h5 class="fs-13 letter-spacing-087 text-muted mb-3 text-uppercase px-3">Main</h5>
                  <ul class="list-group list-group-no-border rounded-lg">
                    <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                      <a href="<?=base_url('dashboard') ?>" class="text-heading lh-1 sidebar-link">
                        <span class="sidebar-item-icon d-inline-block mr-3 fs-20"><i class="fal fa-cog"></i></span>
                        <span class="sidebar-item-text">Dashboard</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="list-group-item pt-6 pb-4">
                  <h5 class="fs-13 letter-spacing-087 text-muted mb-3 text-uppercase px-3">Manage Listings</h5>
                  <ul class="list-group list-group-no-border rounded-lg">
                    <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                      <a href="<?= base_url('addpropertystaging'); ?>" class="text-heading lh-1 sidebar-link">
                        <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20 fs-20">
                          <svg class="icon icon-add-new">
                            <use xlink:href="#icon-add-new"></use>
                          </svg></span>
                        <span class="sidebar-item-text">Add new</span>
                      </a>
                    </li>
                    <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                      <a href="<?=base_url('propertystaging') ?>" class="text-heading lh-1 sidebar-link d-flex align-items-center">
                        <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                          <svg class="icon icon-my-properties">
                            <use xlink:href="#icon-my-properties"></use>
                          </svg>
                        </span>
                        <span class="sidebar-item-text">Property List</span>
                        <span class="sidebar-item-number ml-auto text-primary fs-15 font-weight-bold">29</span>
                      </a>
                    </li>
                    <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                      <a href="dashboard-my-favorites.html"
                        class="text-heading lh-1 sidebar-link d-flex align-items-center">
                        <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                          <svg class="icon icon-heart">
                            <use xlink:href="#icon-heart"></use>
                          </svg>
                        </span>
                        <span class="sidebar-item-text">My Favorites</span>
                        <span class="sidebar-item-number ml-auto text-primary fs-15 font-weight-bold">5</span>
                      </a>
                    </li>

                    <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                      <a href="dashboard-reviews.html" class="text-heading lh-1 sidebar-link d-flex align-items-center">
                        <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                          <svg class="icon icon-review">
                            <use xlink:href="#icon-review"></use>
                          </svg>
                        </span>
                        <span class="sidebar-item-text">Reviews</span>
                        <span class="sidebar-item-number ml-auto text-primary fs-15 font-weight-bold">29</span>
                      </a>
                    </li>
                    <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                      <a href="#invoice_collapse" class="text-heading lh-1 sidebar-link d-flex align-items-center"
                        data-toggle="collapse" aria-haspopup="true" aria-expanded="false">
                        <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                          <i class="fal fa-file-invoice"></i>
                        </span>
                        <span class="sidebar-item-text">Invoice</span>
                        <span class="d-inline-block ml-auto"><i class="fal fa-angle-down"></i></span>
                      </a>
                    </li>
                  </ul>
                  <div class="collapse" id="invoice_collapse">
                    <div class="card card-body border-0 bg-transparent py-0 pl-6">
                      <ul class="list-group list-group-flush list-group-no-border">
                        <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                          <a class="text-heading lh-1 sidebar-link" href="dashboard-invoice-listing.html">Listing
                            Invoice</a>
                        </li>
                        <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                          <a class="text-heading lh-1 sidebar-link" href="dashboard-add-new-invoice.html">Add New
                            Invoice</a>
                        </li>
                        <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                          <a class="text-heading lh-1 sidebar-link" href="dashboard-edit-invoice.html">Edit
                            Invoice</a>
                        </li>
                        <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                          <a class="text-heading lh-1 sidebar-link" href="dashboard-preview-invoice.html">Preview
                            Invoice</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="list-group-item pt-6 pb-4">
                  <h5 class="fs-13 letter-spacing-087 text-muted mb-3 text-uppercase px-3">Manage Acount</h5>
                  <ul class="list-group list-group-no-border rounded-lg">
                    <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                      <a href="dashboard-my-packages.html"
                        class="text-heading lh-1 sidebar-link d-flex align-items-center">
                        <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                          <svg class="icon icon-my-package">
                            <use xlink:href="#icon-my-package"></use>
                          </svg>
                        </span>
                        <span class="sidebar-item-text">My Package</span>
                        <span class="sidebar-item-number ml-auto text-primary fs-15 font-weight-bold">5</span>
                      </a>
                    </li>
                    <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                      <a href="dashboard-my-profiles.html" class="text-heading lh-1 sidebar-link">
                        <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                          <svg class="icon icon-my-profile">
                            <use xlink:href="#icon-my-profile"></use>
                          </svg>
                        </span>
                        <span class="sidebar-item-text">My Profile</span>
                      </a>
                    </li>
                    <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                      <a href="#" class="text-heading lh-1 sidebar-link">
                        <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                          <svg class="icon icon-log-out">
                            <use xlink:href="#icon-log-out"></use>
                          </svg>
                        </span>
                        <span class="sidebar-item-text">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="page-content">
        <header class="main-header shadow-none shadow-lg-xs-1 bg-white position-relative d-none d-xl-block">
          <div class="container-fluid">
            <nav class="navbar navbar-light py-0 row no-gutters px-3 px-lg-0">
              <div class="col-md-4 px-0 px-md-6 order-1 order-md-0">
              </div>
              <div class="col-md-6 d-flex flex-wrap justify-content-md-end order-0 order-md-1">
                <div class="dropdown border-md-right border-0 py-3 text-right">
                  <a href="#"
                    class="dropdown-toggle text-heading pr-3 pr-sm-6 d-flex align-items-center justify-content-end"
                    data-toggle="dropdown">
                    <div class="mr-4 w-48px">
                      <img src="<?= base_url('theme/images/testimonial-5.jpg'); ?>" alt="Ronald Hunter"
                        class="rounded-circle">
                    </div>
                    <div class="fs-13 font-weight-500 lh-1">
                      Ronald Hunter
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right w-100">
                    <a class="dropdown-item" href="dashboard-my-profiles.html">My Profile</a>
                    <a class="dropdown-item" href="#">Logout</a>
                  </div>
                </div>
                <div class="dropdown no-caret py-3 px-3 px-sm-6 d-flex align-items-center justify-content-end notice">
                  <a href="#" class="dropdown-toggle text-heading fs-20 font-weight-500 lh-1" data-toggle="dropdown">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-primary badge-circle badge-absolute font-weight-bold fs-13">1</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>
        <!-- dashboard_view -->
        <?= $this->renderSection("content"); ?>

      </div>
    </div>
  </div>
  <!-- CDN jquery -->
  <!-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script> -->
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
  <script src="<?= base_url('theme/vendors/dropzone/js/dropzone.min.js'); ?>"></script>
  <script src="<?= base_url('theme/vendors/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
  <script src="<?= base_url('theme/vendors/hc-sticky/hc-sticky.min.js'); ?>"></script>
  <script src="<?= base_url('theme/vendors/jparallax/TweenMax.min.js'); ?>"></script>
  <script src="<?= base_url('theme/vendors/mapbox-gl/mapbox-gl.js'); ?>"></script>
  <script src="<?= base_url('theme/vendors/dataTables/jquery.dataTables.min.js'); ?>"></script>

  <script src="<?= base_url('theme/js/script.js'); ?>"></script>
  <!-- Theme scripts -->
  <script src="<?= base_url('theme/js/theme.js'); ?>"></script>

  <?= $this->include('layouts/svg'); ?>
</body>

</html>