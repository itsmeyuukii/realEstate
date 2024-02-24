<?php echo $this->extend("layouts/home_base"); ?>

<?php echo $this->section("title"); ?>
Msg-Homes | Home
<?php echo $this->endSection(); ?>

<?= $this->section("content"); ?>

<main id="content">
    <section class="pt-1 pb-1 pb-lg-1 page-title bg-overlay bg-img-cover-center d-none d-lg-block"
        style="background-image: url('<?= base_url('theme/images/BG3.jpg'); ?>');">
        <div class="container">
            <h1 class="fs-22 fs-md-42 mb-0 text-white font-weight-normal text-center py-7 lh-15 px-lg-16"
                data-animate="fadeInDown">
            </h1>
        </div>
    </section>
      <!-- <section class="bg-secondary py-6 py-lg-0">
        <div class="container">
          <form class="search-form d-none d-lg-block">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="row">
                  <div class="col-md-6">
                    <label class="text-uppercase font-weight-500 opacity-7 text-white letter-spacing-093 mb-1">Home
                      Type</label>
                    <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-input-opacity-02" name="type"
                                    title="Select" data-style="p-0 h-24 lh-17 text-white">
                      <option>Condominium</option>
                      <option>Single-Family Home</option>
                      <option>Townhouse</option>
                      <option>Multi-Family Home</option>
                    </select>
                  </div>
                  <div class="col-md-6 pl-md-3 pt-md-0 pt-6">
                    <label class="text-uppercase font-weight-500 opacity-7 text-white letter-spacing-093 mb-1">Location</label>
                    <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-input-opacity-02" name="location"
                                    title="Select" data-style="p-0 h-24 lh-17 text-white">
                      <option>Austin</option>
                      <option>Boston</option>
                      <option>Chicago</option>
                      <option>Denver</option>
                      <option>Los Angeles</option>
                      <option>New York</option>
                      <option>San Francisco</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-5 pt-lg-0 pt-6">
                <label class="text-uppercase font-weight-500 opacity-7 text-white letter-spacing-093">Search</label>
                <div class="position-relative">
                  <input type="text" name="search"
                               class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border-bottom rounded-0 h-24 lh-17 p-0 pr-md-5 text-white placeholder-light font-weight-500 border-input-opacity-02"
                               placeholder="Enter an address, neighbourhood...">
                  <i class="far fa-search position-absolute pos-fixed-right-center pr-0 fs-18 text-white pb-2 d-none d-md-block"></i>
                </div>
              </div>
              <div class="col-12 col-lg-2 pt-lg-0 pt-7">
                <button type="submit"
                            class="btn bg-white-opacity-01 bg-white-hover-opacity-03 h-lg-100 w-100 shadow-none text-white rounded-0 fs-16 font-weight-600">
                  Search
                </button>
              </div>
            </div>
          </form>
          <form class="property-search property-search-mobile d-lg-none">
            <div class="row align-items-lg-center" id="accordion-mobile">
              <div class="col-12">
                <div class="form-group mb-0 position-relative">
                  <a href="#advanced-search-filters-mobile"
                           class="icon-primary btn advanced-search shadow-none pr-3 pl-0 d-flex align-items-center position-absolute pos-fixed-left-center py-0 h-100 border-right collapsed"
                           data-toggle="collapse" data-target="#advanced-search-filters-mobile"
                           aria-expanded="true"
                           aria-controls="advanced-search-filters-mobile">
                  </a>
                  <input type="text"
                               class="form-control form-control-lg border-0 shadow-none pr-9 pl-11 bg-white placeholder-muted"
                               name="key-word"
                               placeholder="Search...">
                  <button type="submit"
                                class="btn position-absolute pos-fixed-right-center p-0 text-heading fs-20 px-3 shadow-none h-100 border-left bg-white">
                    <i class="far fa-search"></i>
                  </button>
                </div>
              </div>
              <div id="advanced-search-filters-mobile" class="col-12 pt-2 collapse"
                     data-parent="#accordion-mobile">
                <div class="row mx-n2">
                  <div class="col-sm-6 pt-4 px-2">
                    <select class="form-control border-0 shadow-none form-control-lg selectpicker bg-white"
                                    title="Home Types" data-style="btn-lg py-2 h-52 bg-white" name="type">
                      <option>Condominium</option>
                      <option>Single-Family Home</option>
                      <option>Townhouse</option>
                      <option>Multi-Family Home</option>
                    </select>
                  </div>
                  <div class="col-sm-6 pt-4 px-2">
                    <select class="form-control border-0 shadow-none form-control-lg selectpicker bg-white"
                                    name="bedroom"
                                    title="Location" data-style="btn-lg py-2 h-52 bg-white">
                      <option>Austin</option>
                      <option>Boston</option>
                      <option>Chicago</option>
                      <option>Denver</option>
                      <option>Los Angeles</option>
                      <option>New York</option>
                      <option>San Francisco</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section> -->
      <?php
      // Fetch the user's favorites once
      $userFavorites = [];
      foreach ($favourites as $favourite) {
          $userFavorites[] = $favourite['p_code'];
      }
      ?>
      <div class="primary-content bg-gray-01 pb-12 pt-7">
        <div class="container">
          <div class="row">
            <article class="col-lg-8">
              <?php if($properties) : ?>
              <section>
                <div class="galleries position-relative">
                  <div class="position-absolute pos-fixed-top-right z-index-3">
                    <ul class="list-inline pt-4 pr-5">
                      <?php if (session()->has('logged_user')): ?>
                        <?php if (in_array($properties->p_code, $userFavorites)): ?>
                            <!-- Property is in user's favorites -->
                            <li class="list-inline-item">
                                <a href="#"
                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-primary bg-accent border-accent add-to-favorites"
                                    data-property-code="<?= $properties->p_code ?>" data-toggle="tooltip"
                                    title="Remove from Wishlist">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </li>
                        <?php else: ?>
                            <!-- Property is not in user's favorites -->
                            <li class="list-inline-item">
                                <a href="#"
                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white add-to-favorites"
                                    data-property-code="<?= $properties->p_code ?>" data-toggle="tooltip"
                                    title="Add to Wishlist">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <!-- User is not logged in -->
                        <li class="list-inline-item">
                            <a data-toggle="modal" href="#login-register-modal"
                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                      <li class="list-inline-item mr-2">
                        <button type="button" class="btn btn-white p-0 d-flex align-items-center justify-content-center w-40px h-40 text-heading bg-hover-primary hover-white rounded-circle border-0 shadow-none"
                                data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-content=' <ul class="list-inline mb-0">
                          <!-- <li class="list-inline-item">
                            <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i class="fab fa-twitter"></i></a>
                          </li> -->
                          <li class="list-inline-item ">
                            <a href="https://www.facebook.com/msgrdc.official" class="text-muted fs-15 hover-dark lh-1 px-2"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="https://www.instagram.com/msgrealty.official" class="text-muted fs-15 hover-dark lh-1 px-2"><i class="fab fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="https://www.youtube.com/@msgrealtyofficial" class="text-muted fs-15 hover-dark lh-1 px-2"><i class="fab fa-youtube"></i></a>
                          </li>
                        </ul>
                        '>
                        <i class="far fa-share-alt"></i>
                      </button>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" data-toggle="tooltip" title="Print" class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle">
                        <i class="far fa-print"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="slick-slider slider-for-01 arrow-haft-inner mx-0" data-slick-options='{"slidesToShow": 1, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-nav-01"}'>
                  <?php if($images): ?>
                  <?php foreach($images as $image) : ?>
                    <div class="box px-0">
                      <div class="item item-size-3-2">
                        <div class="card p-0 hover-change-image">
                          <a href="<?= $baseurl . $image->image_link ?>" class="card-img"
                              data-gtf-mfp="true"
                              data-gallery-id="04"
                              style="background-image:url('<?= $baseurl . $image->image_link ?>')">
                          </a>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php if(count($images)>3): ?>
                <div class="slick-slider slider-nav-01 mt-4 mx-n1 arrow-haft-inner" data-slick-options='{"slidesToShow": <?= count($images) ?>, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-for-01","focusOnSelect": true,"responsive":[{"breakpoint": 768,"settings": {"slidesToShow": 4}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>
                  <?php foreach($images as $image) : ?>
                    <div class="box pb-6 px-0">
                      <div class="bg-hover-white p-1 shadow-hover-xs-3 h-50 rounded-lg">
                        <img src="<?= $baseurl . $image->image_link ?>" alt="Gallery 01" class="h-100 w-100 rounded-lg">
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
                  <?php else: ?>
                  <div class="box px-0">
                    <div class="item item-size-3-2">
                      <div class="card p-0 hover-change-image">
                        <a href="<?= base_url('theme/images/alt/property-default.png') ?>" class="card-img"
                            data-gtf-mfp="true"
                            data-gallery-id="01"
                            style="background-image:url('<?= base_url('theme/images/alt/property-default.png') ?>')">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
              </div>
              </section>
              <?php endif; ?>
            <section class="pb-8 px-6 pt-5 bg-white rounded-lg">
              <h4 class="fs-22 text-heading mb-3">Description</h4>
              <p class="mb-0 lh-214"><?= $properties->p_desc ?></p>
            </section>
            <section class="mt-2 pb-3 px-6 pt-5 bg-white rounded-lg">
              <h4 class="fs-22 text-heading mb-6">Facts and Features</h4>
              <div class="row">
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-family fs-32 text-primary"><use xlink:href="#icon-family"></use></svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Type</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">Single Family</p>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-year fs-32 text-primary"><use xlink:href="#icon-year"></use></svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">year built</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">2020</p>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-heating fs-32 text-primary"><use xlink:href="#icon-heating"></use></svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">heating</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">Radiant</p>
                    </div>
                  </div>
                </div> -->
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-price fs-32 text-primary"><use xlink:href="#icon-price"></use></svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Lot Area</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">
                        <?php if ($properties->lot_area == 0): ?>
                          N/A
                        <?php else: ?>
                            <?= $properties->lot_area ?>
                        <?php endif; ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-price fs-32 text-primary"><use xlink:href="#icon-price"></use></svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Floor Area</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">
                      <?php if ($properties->floor_area == 0): ?>
                          N/A
                        <?php else: ?>
                            <?= $properties->floor_area ?>
                        <?php endif; ?>
                      </p>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-bedroom fs-32 text-primary"><use xlink:href="#icon-bedroom"></use></svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Bedrooms</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">3</p>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-sofa fs-32 text-primary"><use xlink:href="#icon-sofa"></use></svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">bathrooms</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">2</p>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-Garage fs-32 text-primary"><use xlink:href="#icon-Garage"></use></svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">GARAGE</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">1</p>
                    </div>
                  </div>
                </div> -->
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-status fs-32 text-primary"><use xlink:href="#icon-status"></use></svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Status</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">Active</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="mt-2 pb-6 px-6 pt-5 bg-white rounded-lg">
              <h4 class="fs-22 text-heading mb-4">Additional Details</h4>
              <div class="row">
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property Code</dt>
                  <dd><?= $properties->p_code ?></dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Price</dt>
                  <?php if($properties->price_type == 'Cash') : ?>
                  <dd><?= number_to_currency($properties->price, 'PHP') ?></dd>
                  <?php elseif($properties->price_type == 'Monthly'): ?>
                    <dd><?= number_to_currency($properties->price, 'PHP') ?>/Monthly</dd>
                  <?php elseif($properties->price_type == 'Contact'): ?>
                    <dd>Contact Us</dd>
                    <?php endif ?>

                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property type</dt>
                  <dd><?= $properties->p_type ?></dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property status</dt>
                  <dd><?php if ($properties->list_type === 'buy'): ?>
                          For Sale
                        <?php else: ?>
                          For Rent
                        <?php endif; ?>
                  </dd>
                </dl>
                <!-- <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Year build</dt>
                  <dd>2020</dd>
                </dl> -->
              </div>
            </section>
            <!-- <section class="mt-2 pb-7 px-6 pt-5 bg-white rounded-lg">
              <h4 class="fs-22 text-heading mb-4">Offices Amenities</h4>
              <ul class="list-unstyled mb-0 row no-gutters">
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony</li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace</li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony</li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace</li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement</li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling</li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement</li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling</li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room</li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher</li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room</li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher</li>
              </ul>
            </section> -->
            <?php if ($embedVideo) :?>
            <section class="mt-2 pb-6 px-6 pt-6 bg-white rounded-lg">
              <h4 class="fs-22 text-heading mb-6">YouTube</h4>
              <iframe height="430" src="<?= $embedVideo->embed_link ?>" allowfullscreen="" class="w-100"></iframe>
            </section>
            <?php endif; ?>
            <?php if($location): ?>
            <section class="mt-2 pb-6 px-6 pt-6 bg-white rounded-lg" >
              <h4 class="fs-22 text-heading mb-6">Location</h4>
              <div class="position-relative">
                <div class="position-relative">
                  <div id="map" class="position-relative">
                    <iframe src="https://www.google.com/maps?q=<?=$location->lat?>,<?=$location->lng?>&output=embed"
                      width="100%"
                      height="100%"
                      style="border:0;"
                      allowfullscreen=""
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                  </div>
                </div>
              </div>
            </section>
            <?php endif; ?>
            
          </article>
          <aside class="col-lg-4 pl-xl-4 primary-sidebar sidebar-sticky" id="sidebar">
            <div class="primary-sidebar-inner">
              <div class="bg-white rounded-lg py-lg-6 pl-lg-6 pr-lg-3 p-4">
                <ul class="list-inline d-sm-flex align-items-sm-center mb-2">
                  <?php if($properties->p_feature == 2) :?>
                  <li class="list-inline-item badge badge-orange mr-2">Featured</li>
                  <?php elseif($properties->p_feature == 3): ?>
                  <li class="list-inline-item badge badge-orange mr-3">Private</li>
                  <?php endif ?>
                  <?php if($properties->list_type == 'buy'): ?>
                  <li class="list-inline-item badge badge-primary mr-3">For Sale</li>
                  <?php endif ?>
                </ul>
                <h2 class="fs-22 text-heading pt-2"><?= $properties->p_title ?></h2>
                <p class="mb-2"><i class="fal fa-map-marker-alt mr-1"></i><?= $properties->address ?></p>
                <div class="d-flex align-items-center">
                  <?php if($properties->price_type == 'Cash') : ?>
                    <p class="fs-22 text-heading font-weight-bold mb-0 mr-6"><?= number_to_currency($properties->price, 'PHP') ?></p>
                  <?php elseif($properties->price_type == 'Monthly'): ?>
                    <p class="fs-22 text-heading font-weight-bold mb-0 mr-6"><?= number_to_currency($properties->price, 'PHP') ?>/Monthly</p>
                  <?php elseif($properties->price_type == 'Contact'): ?>
                    <p class="fs-22 text-heading font-weight-bold mb-0 mr-6">Contact Us</p>
                  <?php endif ?>
                </div>
                <div class="row mt-5">
                  <!-- <div class="col-6 mb-3">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2 lh-1">
                        <svg class="icon icon-bedroom fs-18 text-primary"><use xlink:href="#icon-bedroom"></use></svg>
                      </div>
                      <div class="media-body">
                        <h5 class="fs-13 font-weight-normal mb-0">Bedrooms</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-dark">3</p>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="col-6 mb-3">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2 lh-1">
                        <svg class="icon icon-shower fs-18 text-primary"><use xlink:href="#icon-shower"></use></svg>
                      </div>
                      <div class="media-body">
                        <h5 class="fs-13 font-weight-normal mb-0">Bathrooms</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-dark">2</p>
                      </div>
                    </div>
                  </div> -->
                  <div class="col-6 mb-3">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2 lh-1">
                        <svg class="icon icon-square fs-18 text-primary"><use xlink:href="#icon-square"></use></svg>
                      </div>
                      <div class="media-body">
                        <h5 class="fs-13 font-weight-normal mb-0">Lot Area</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-dark">
                          <?php if ($properties->lot_area == 0): ?>
                            N/A
                          <?php else: ?>
                              <?= $properties->lot_area ?>
                          <?php endif; ?>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-3">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2 lh-1">
                        <svg class="icon icon-square fs-18 text-primary"><use xlink:href="#icon-price"></use></svg>
                      </div>
                      <div class="media-body">
                        <h5 class="fs-13 font-weight-normal mb-0">Floor Area</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-dark">
                        <?php if ($properties->floor_area == 0): ?>
                          N/A
                        <?php else: ?>
                            <?= $properties->floor_area ?>
                        <?php endif; ?>
                        </p>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="mr-xl-2">
                  <a href="#" class="btn btn-outline-primary btn-lg btn-block rounded border text-body border-hover-primary hover-white">Schedule a Tour</a>
                  <?php if (session()->has('logged_user')): ?>
                    <a class="btn btn-outline-primary btn-lg btn-block rounded border text-body border-hover-primary hover-white mt-4 send-request"
                        href="#" data-property-code="<?= $properties->p_code ?>" data-toggle="tooltip">
                        Request Info
                    </a>
                  <?php else: ?>
                    <a data-toggle="modal" href="#login-register-modal"
                      class="btn btn-outline-primary btn-lg btn-block rounded border text-body border-hover-primary hover-white mt-4">
                      Request Info
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </main>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
      // Attach a click event to the heart icon
      $(document).on('click', '.add-to-favorites', function (e) {
        e.preventDefault();

        // Get the property code from the data attribute
        var propertyCode = $(this).data('property-code');

        // Store the current list item for later use
        var listItem = $(this).closest('li');

        // Make an AJAX request to addToFavorites or removeFromFavorites endpoint
        $.ajax({
            type: 'POST',
            url: '<?= base_url('addtofavourite/') ?>' + propertyCode,
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    // Replace the entire li HTML content based on the response
                    listItem.replaceWith(response.html);

                    // Optionally, you can update other parts of the UI dynamically here
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            },
            error: function () {
                alert('Error occurred during the AJAX request');
            }
        });
    });
</script>
<script>
  // Attach a click event to the request icon
  $(document).on('click', '.send-request', function (e) {
        e.preventDefault();

        // Get the property code from the data attribute
        var propertyCode = $(this).data('property-code');

        // Make an AJAX request to addToFavorites or removeFromFavorites endpoint
        $.ajax({
            type: 'POST',
            url: '<?= base_url('send-request/') ?>' + propertyCode,
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            },
            error: function () {
                alert('Error occurred during the AJAX request');
            }
        });
    });
</script>

<?= $this->endSection(); ?>