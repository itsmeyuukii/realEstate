<?php echo $this->extend("layouts/admin_base"); ?>

<?= $this->section('page_title'); ?>
Dashboard | Admin
<?= $this->endSection(); ?>
<?= $this->section('username'); ?>
Welcome
<?= $userdata->username ?> <!-- use ucfirst -->
<?= $this->endSection(); ?>

<?php echo $this->section("content"); ?>


    <main id="content" class="bg-gray-01">
        <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
            <div class="d-flex flex-wrap flex-md-nowrap mb-6">
                <div class="mr-0 mr-md-auto">
                    <h2 class="mb-0 text-heading fs-22 lh-15"><?= $userdata->username ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xxl-3 mb-6">
                    <div class="card">
                        <div class="card-body row align-items-center px-6 py-7">
                            <div class="col-5">
                                <span
                                    class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-blue badge-circle">
                                    <svg class="icon icon-1">
                                        <use xlink:href="#icon-1"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-7 text-center">
                                <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="<?= $total_properties ?>" data-decimals="0"
                                    data-duration="0" data-separator=""><?= $total_properties ?></p>
                                <p>Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-3 mb-6">
                    <div class="card">
                        <div class="card-body row align-items-center px-6 py-7">
                            <div class="col-5">
                                <span
                                    class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-green badge-circle">
                                    <svg class="icon icon-2">
                                        <use xlink:href="#icon-2"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-7 text-center">
                                <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="<?= $total_views ?>" data-decimals="0"
                                    data-duration="0" data-separator=""><?= $total_views ?></p>
                                <p>Total views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-3 mb-6">
                    <div class="card">
                        <div class="card-body row align-items-center px-6 py-7">
                            <div class="col-4">
                                <span
                                    class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-yellow badge-circle">
                                    <svg class="icon icon-review">
                                        <use xlink:href="#icon-review"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-8 text-center">
                                <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="<?= $total_inquiries ?>" data-decimals="0"
                                    data-duration="0" data-separator=""><?= $total_inquiries ?></p>
                                <p>Total Inquiries</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-3 mb-6">
                    <div class="card">
                        <div class="card-body row align-items-center px-6 py-7">
                            <div class="col-5">
                                <span
                                    class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-pink badge-circle">
                                    <svg class="icon icon-heart">
                                        <use xlink:href="#icon-heart"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-7 text-center">
                                <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="<?= $total_favorites ?>" data-decimals="0"
                                    data-duration="0" data-separator=""><?= $total_favorites ?></p>
                                <p>Total Favorites</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 mb-6">
                  <div class="card px-7 py-6 h-100 chart">
                    <div class="card-body p-0 collapse-tabs">
                      <div class="d-flex align-items-center mb-5">
                        <h2 class="mb-0 text-heading fs-22 lh-15 mr-auto">View statistics</h2>
                      </div>
                      <div class="card-body p-0 py-4">
                            <canvas class="chartjs" data-chart-options="[]"
                                            data-chart-labels='<?= json_encode($monthsArray) ?>'
                                            data-chart-datasets='[{"label":"Clicked","data":[2,15,20,10,15,20,10,0,20,30,10,0],"backgroundColor":"rgba(105, 105, 235, 0.1)","borderColor":"#6969eb","borderWidth":3,"fill":true},{"label":"View","data":<?= json_encode($monthlyViews) ?>,"backgroundColor":"rgba(254, 91, 52, 0.1)","borderColor":"#ff6935","borderWidth":3,"fill":true}]'>
                            </canvas>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 mb-6">
                    <div class="card px-7 py-6 h-100">
                        <div class="card-body p-0">
                            <h2 class="mb-2 text-heading fs-22 lh-15">Recent Activities</h2>
                            <ul class="list-group list-group-no-border">
                                <li class="list-group-item px-0 py-2">
                                    <div class="media align-items-center">
                                        <div
                                            class="badge badge-blue w-40px h-40 d-flex align-items-center justify-content-center property fs-18 mr-3">
                                            <svg class="icon icon-1">
                                                <use xlink:href="#icon-1"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            Your listing <a href="#" class="text-heading"> Villa Called Archangel</a>
                                            has been
                                            approved
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 py-2">
                                    <div class="media align-items-center">
                                        <div
                                            class="badge badge-yellow w-40px h-40 d-flex align-items-center justify-content-center fs-18 mr-3">
                                            <svg class="icon icon-review">
                                                <use xlink:href="#icon-review"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            Dollie Horton left a review on
                                            <a href="#" class="text-heading"> Villa
                                                Called Archangel</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 py-2">
                                    <div class="media align-items-center">
                                        <div
                                            class="badge badge-pink w-40px h-40 d-flex align-items-center justify-content-center fs-18 mr-3">
                                            <svg class="icon icon-heart">
                                                <use xlink:href="#icon-heart"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            Someone favorites your <a href="#" class="text-heading"> Adorable Garden
                                                Gingerbread
                                                House</a>
                                            listing
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 py-2">
                                    <div class="media align-items-center">
                                        <div
                                            class="badge badge-pink w-40px h-40 d-flex align-items-center justify-content-center fs-18 mr-3">
                                            <svg class="icon icon-heart">
                                                <use xlink:href="#icon-heart"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            Someone favorites your <a href="#" class="text-heading"> Adorable Garden
                                                Gingerbread
                                                House</a>
                                            listing
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 py-2">
                                    <div class="media align-items-center">
                                        <div
                                            class="badge badge-blue w-40px h-40 d-flex align-items-center justify-content-center fs-18 mr-3">
                                            <svg class="icon icon-1">
                                                <use xlink:href="#icon-1"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            Your listing <a href="#" class="text-heading"> Villa Called Archangel</a>
                                            has been
                                            approved
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 py-2">
                                    <div class="media align-items-center">
                                        <div
                                            class="badge badge-yellow w-40px h-40 d-flex align-items-center justify-content-center fs-18 mr-3">
                                            <svg class="icon icon-review">
                                                <use xlink:href="#icon-review"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            Dollie Horton left a review on
                                            <a href="#" class="text-heading"> Villa
                                                Called Archangel</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a class="text-heading d-block text-center mt-4" role="button">
                                View more
                                <span class="text-primary d-inline-block ml-2"><i class="fal fa-angle-down"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

<?php echo $this->endSection(); ?>


