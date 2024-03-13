<?php echo $this->extend("layouts/home_base"); ?>

<?php echo $this->section("title"); ?>
    <?= $page_title->page_title ?>
<?php echo $this->endSection(); ?>

<?= $this->section("content"); ?>

<main id="content">
      <section class="d-flex flex-column">
        <div style="background-image: url(<?= base_url('theme/images/bg-home-01.jpg') ?>)"
              class="bg-cover d-flex align-items-center custom-vh-100">
          <div class="container pt-lg-15 py-8" data-animate="zoomIn">
            <p class="text-white fs-md-22 fs-18 font-weight-500 letter-spacing-367 mb-6 text-center text-uppercase">Let
              us guide your home</p>
            <h2 class="text-white display-2 text-center mb-sm-13 mb-8">Find Your Dream Home</h2>
            <form class="property-search py-lg-0 z-index-2 position-relative d-none d-lg-block" id="search-form">
              <div class="row no-gutters">
                <div class="col-md-5 col-lg-4 col-xl-3">
                  <input class="search-field" type="hidden" name="status" value="buy" id="listType"
						       data-default-value="">
                  <ul class="nav nav-pills property-search-status-tab">
                    <li class="nav-item bg-primary rounded-top" role="presentation">
                      <a href="#" role="tab" aria-selected="true"
                        class="nav-link btn shadow-none rounded-bottom-0 text-white text-btn-focus-secondary text-uppercase d-flex align-items-center fs-13 rounded-bottom-0 bg-active-white text-active-secondary letter-spacing-087 flex-md-1 px-4 py-2 active"
                        data-toggle="pill" data-value="buy">
                        <svg class="icon icon-villa fs-22 mr-2">
                          <use xlink:href="#icon-villa"></use>
                        </svg>
                        for sale
                      </a>
                    </li>
                    <li class="nav-item bg-primary rounded-top" role="presentation">
                      <a href="#" role="tab" aria-selected="true"
								   class="nav-link btn shadow-none rounded-bottom-0 text-white text-btn-focus-secondary text-uppercase d-flex align-items-center fs-13 rounded-bottom-0 bg-active-white text-active-secondary letter-spacing-087 flex-md-1 px-4 py-2"
								   data-toggle="pill" data-value="rent">
                        <svg class="icon icon-building fs-22 mr-2">
                          <use xlink:href="#icon-building"></use>
                        </svg>
                        for rent
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="bg-white px-6 rounded-bottom rounded-top-right pb-6 pb-lg-0">
                <div class="row align-items-center"
                      id="accordion-4">
                  <div class="col-md-6 col-lg-3 col-xl-3 pt-6 pt-lg-0 order-1">
                    <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Property Type</label>
                    <select class="form-control bg-transparent border-bottom rounded-0 border-color-input"
                            title="Select" data-style="p-0 h-24 lh-17 text-dark" name="p_type" id="p_type">
                      <option value="any" >Any</option>
                      <option value="House" >House</option>
                      <option value="condominium" >Condominium</option>
                      <option value="townhouse" >Townhouse</option>
                      <option value="commercial" >Commercial</option>
                    </select>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-5 pt-6 pt-lg-0 order-2">
                    <label class="text-uppercase font-weight-500 letter-spacing-093">Search</label>
                    <div class="position-relative">
                      <input type="text" name="search" id= "location"
								       class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border-bottom rounded-0 h-24 lh-17 pl-0 pr-4 font-weight-600 border-color-input placeholder-muted"
								       placeholder="Find something...">
                      <i class="far fa-search position-absolute pos-fixed-right-center pr-0 fs-18 mt-n3"></i>
                    </div>
                  </div>
                  <div class="col-sm pr-lg-0 pt-6 pt-lg-0 order-3">
                    <a href="#advanced-search-filters-4"
                        class="btn advanced-search btn-accent h-lg-100 w-100 shadow-none text-primary rounded-0 fs-14 fs-sm-16 font-weight-600 text-left d-flex align-items-center collapsed"
                        data-toggle="collapse" data-target="#advanced-search-filters-4" aria-expanded="true"
                        aria-controls="advanced-search-filters-4">
                        Advance
                    </a>
                  </div>
                  <div class="col-sm pt-6 pt-lg-0 order-sm-4 order-5">
                    <button type="submit"
							        class="btn btn-primary shadow-none fs-16 font-weight-600 w-100 py-lg-2 lh-213">
                      Search
                    </button>
                  </div>
                  <div id="advanced-search-filters-4" class="col-12 pt-4 pb-sm-4 order-sm-5 order-4 collapse"
                        data-parent="#accordion-4">
                    <div class="row">
                      <div class="col-sm-6 col-lg-3 pt-6 pl-7">
                          <input class="form-check-input" type="checkbox" id="enable-price-range">
                          <label class="form-check-label" for="enable-price-range">
                              Enable Price Range
                          </label>
                      </div>
                      <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary" id="priceRange">
                        <label for="price-1-4" class="mb-4 text-gray-light">Price Range</label>
                        <div data-slider="true"
                            data-slider-options='{"min":0,"max":100000000,"values":[100000,7000000],"type":"currency"}'></div>
                        <div class="text-center mt-2">
                          <input id="price-1-4" type="text" readonly name="price"
										       class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3 pt-6">
                        <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Property
                          Code</label>
                        <input type="text" name="p_code" id="p_code"
									       class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border-bottom rounded-0 h-24 lh-17 p-0 font-weight-600 border-color-input"
									       placeholder="Enter ID...">
                      </div>
            <!--          <div class="col-12 pt-6 pb-2">-->
            <!--            <a class="lh-17 d-inline-block other-feature collapsed" data-toggle="collapse"-->
									   <!--href="#other-feature-4"-->
									   <!--role="button"-->
									   <!--aria-expanded="false" aria-controls="other-feature-4">-->
            <!--              <span class="fs-15 text-heading font-weight-500 hover-primary">Other Features</span>-->
            <!--            </a>-->
            <!--          </div>-->
            <!--          <div class="collapse row mx-0 w-100" id="other-feature-4">-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check1-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check1-4">Air Conditioning</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check2-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check2-4">Laundry</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check4-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check4-4">Washer</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check5-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check5-4">Barbeque</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check6-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check6-4">Lawn</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check7-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check7-4">Sauna</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check8-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check8-4">WiFi</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check9-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check9-4">Dryer</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check10-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check10-4">Microwave</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check11-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check11-4">Swimming Pool</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check12-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check12-4">Window Coverings</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check13-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check13-4">Gym</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check14-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check14-4">Outdoor Shower</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check15-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check15-4">TV Cable</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-4 col-lg-3 py-2">-->
            <!--              <div class="custom-control custom-checkbox">-->
            <!--                <input type="checkbox" class="custom-control-input" id="check16-4"-->
											 <!--      name="features[]">-->
            <!--                <label class="custom-control-label" for="check16-4">Refrigerator</label>-->
            <!--              </div>-->
            <!--            </div>-->
            <!--          </div>-->
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <form class="property-search property-search-mobile d-lg-none z-index-2 position-relative bg-white rounded mx-md-10" id="search-form-mobile">
              <div class="row align-items-lg-center" id="accordion-4-mobile">
                <div class="col-12">
                  <div class="form-group mb-0 position-relative">
                    <a href="#advanced-search-filters-4-mobile"
							   class="text-primary btn advanced-search shadow-none pr-3 pl-0 d-flex align-items-center position-absolute pos-fixed-left-center py-0 h-100 border-right collapsed"
							   data-toggle="collapse" data-target="#advanced-search-filters-4-mobile"
							   aria-expanded="true"
							   aria-controls="advanced-search-filters-4-mobile">
                    </a>
                    <input type="text"
							       class="form-control form-control-lg border shadow-none pr-9 pl-11 bg-white placeholder-muted"
							       name="search" id="location-mobile"
							       placeholder="Search...">
                    <button type="submit"
							        class="btn position-absolute pos-fixed-right-center p-0 text-heading fs-20 px-3 shadow-none h-100 border-left">
                      <i class="far fa-search"></i>
                    </button>
                  </div>
                </div>
                <div id="advanced-search-filters-4-mobile" class="col-12 pt-2 px-7 collapse"
					     data-parent="#accordion-4-mobile">
                  <div class="row mx-n2">
                    <div class="col-sm-6 pt-4 px-2">
                      <select class="form-control border shadow-none form-control-lg bg-transparent"
								        title="Select" data-style="btn-lg py-2 h-52 bg-transparent" name="status" id="listTypeMobile">
                        <option value="buy">For Sale</option>
                        <option value="rent">For Rent</option>
                      </select>
                    </div>
                    <div class="col-sm-6 pt-4 px-2">
                      <select class="form-control border shadow-none form-control-lg bg-transparent"
								        title="All Types" data-style="btn-lg py-2 h-52 bg-transparent" name="p_type_mobile" id="p_type_mobile" >
                        <option value="any" >Any</option>
                        <option value="house" >House and Lot</option>
                        <option value="lot" >Lot</option>
                        <option value="condominium" >Condominium</option>
                        <option value="subdivision" >Subdivision</option>
                        <option value="commercial" >Commercial</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-lg-3 py-6 pl-7">
                        <input class="form-check-input" type="checkbox" id="enable-price-range-mobile">
                        <label class="form-check-label" for="enable-price-range-mobile">
                            Enable Price Range
                        </label>
                    </div>
                    <div class="col-md-6 pb-6 slider-range slider-range-secondary" id="price-range-mobile">
                      <label for="price-4-mobile" class="mb-4 text-white">Price Range</label>
                      <div data-slider="true"
								     data-slider-options='{"min":0,"max":1000000,"values":[100000,700000],"type":"currency"}'></div>
                      <div class="text-center mt-2">
                        <input id="price-4-mobile" type="text" readonly
									       class="border-0 amount text-center bg-transparent font-weight-500"
									       name="price">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <?php
      // Fetch the user's favorites once
      $userFavorites = [];
      foreach ($favourites as $favourite) {
          $userFavorites[] = $favourite['p_code'];
      } 
      ?>
      <section class="pt-lg-12 pb-lg-10 py-11">
        <div class="container container-xxl">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-heading">Best Properties For Sale</h2>
              <span class="heading-divider"></span>
              <p class="mb-6">Look at the best properties available on our list</p>
            </div>
            <div class="col-md-6 text-md-right">
              <a href="listing-grid-with-left-filter.html"
                   class="btn fs-14 text-primary btn-accent py-3 lh-15 px-7 mb-6 mb-lg-0">See all properties
                <i class="far fa-long-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
          <div class="slick-slider slick-dots-mt-0 custom-arrow-spacing-30"
             data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":true,"infinite":true,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>
            <?php foreach($featuredProperties as $featuredProperty): ?>
             <div class="box pb-7 pt-2">
              <div class="card shadow-hover-2" data-animate="zoomIn">
                <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                  <?php if($featuredProperty->image_link): ?>
                    <img src="<?= $featuredProperty->image_link ?>" alt="MSG Property" style="max-height: 216px; width: 100%;">
                  <?php else: ?>
                    <img src="<?= base_url('theme/images/alt/property-default.png') ?>" alt="MSG Property" style="max-height: 216px; width: 100%;">
                  <?php endif; ?>
                  <div class="card-img-overlay p-2 d-flex flex-column">
                    <div>
                      <span class="badge mr-2 badge-primary">for Sale</span>
                      <span class="badge mr-2 badge-white">featured</span>
                    </div>
                    <ul class="list-inline mb-0 mt-auto hover-image">
                      <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                        <a href="#" class="text-white hover-primary">
                          <i class="far fa-images"></i><span class="pl-1">9</span>
                        </a>
                      </li>
                      <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                        <a href="#" class="text-white hover-primary">
                          <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body pt-3">
                  <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                                                  class="text-dark hover-primary"><?= $featuredProperty->p_code ?></a></h2>
                  <p class="card-text font-weight-500 text-gray-light mb-2"><?= $featuredProperty->address ?></p>
                  <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bedroom">
                      <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                        <use xlink:href="#icon-bedroom"></use>
                      </svg>
                      3 Br
                    </li>
                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bathrooms">
                      <svg class="icon icon-shower fs-18 text-primary mr-1">
                        <use xlink:href="#icon-shower"></use>
                      </svg>
                      3 Ba
                    </li>
                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="Size">
                      <svg class="icon icon-square fs-18 text-primary mr-1">
                        <use xlink:href="#icon-square"></use>
                      </svg>
                      <?=$featuredProperty->lot_area; ?>
                    </li>
                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="1 Garage">
                      <svg class="icon icon-Garage fs-18 text-primary mr-1">
                        <use xlink:href="#icon-Garage"></use>
                      </svg>
                      1 Gr
                    </li>
                  </ul>
                </div>
                <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                  <?php if($featuredProperty->price_type == 'Cash') : ?>
                      <p class="fs-17 font-weight-bold text-heading mb-0">
                      <?= number_to_currency($featuredProperty->price, 'PHP', 'fil-PH') ?></p> <!-- fil-PH is locale -->
                  <?php elseif($featuredProperty->price_type == 'Monthly'): ?>
                    <p class="fs-17 font-weight-bold text-heading mb-0">
                        <?= number_to_currency($featuredProperty->price, 'PHP', 'fil-PH') ?> <!-- fil-PH is locale -->
                        <span class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                  <?php elseif($featuredProperty->price_type == 'Contact'): ?>
                    <p class="fs-17 font-weight-bold text-heading mb-0">Contact Us</p>
                    <?php endif ?>
                  <ul class="list-inline mb-0">
                    <?php if (session()->has('logged_user')): ?>
                        <?php if (in_array($featuredProperty->p_code, $userFavorites)): ?>
                            <!-- Property is in user's favorites -->
                            <li class="list-inline-item">
                                <a href="#"
                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-primary bg-accent border-accent add-to-favorites"
                                    data-property-code="<?= $featuredProperty->p_code ?>" data-toggle="tooltip"
                                    title="Remove from Wishlist">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </li>
                        <?php else: ?>
                            <!-- Property is not in user's favorites -->
                            <li class="list-inline-item">
                                <a href="#"
                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white add-to-favorites"
                                    data-property-code="<?= $featuredProperty->p_code ?>" data-toggle="tooltip"
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
                    <li class="list-inline-item">
                      <a href="#"
                        class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                        data-toggle="tooltip" title="Compare"><i
                            class="fas fa-exchange-alt"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </div>
        </div>
      </section>
      <section>
        <div class="bg-gray-02 py-lg-13 pt-11 pb-6">
          <div class="container container-xxl">
            <div class="row">
              <div class="col-lg-4 pr-xl-13" data-animate="fadeInLeft">
                <h2 class="text-heading lh-1625">Explore <br>
                   by Property Type</h2>
                <span class="heading-divider"></span>
                <p class="mb-6">Have a piece of paradise.</p>
                <a href="listing-grid-with-left-filter.html"
                       class="btn btn-lg text-primary btn-accent">+<?= $total_properties ?> Available Properties
                  <i class="far fa-long-arrow-right ml-1"></i>
                </a>
              </div>
              <div class="col-lg-8" data-animate="fadeInRight">
                <div class="slick-slider arrow-haft-inner custom-arrow-xxl-hide mx-0"
                         data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 3,"arrows":false,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 2,"arrows":false,"autoplay":true}}]}'>
                  <div class="box px-0 py-6">
                    <a href="listing-grid-with-left-filter.html"
                               class="card border-0 align-items-center justify-content-center pt-7 pb-5 px-3 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none">
                      <img src="<?= base_url('theme/images/verified.png'); ?>" class="card-img-top"
                                     alt="Apartment">
                      <div class="card-body px-0 pt-5 pb-0">
                        <h4 class="card-title fs-16 lh-2 text-dark mb-0">Apartment</h4>
                      </div>
                    </a>
                  </div>
                  <div class="box px-0 py-6">
                    <a href="listing-grid-with-left-filter.html"
                               class="card border-0 align-items-center justify-content-center pt-7 pb-5 px-3 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none">
                      <img src="<?= base_url('theme/images/sofa.png') ?>" class="card-img-top"
                                     alt="House">
                      <div class="card-body px-0 pt-5 pb-0">
                        <h4 class="card-title fs-16 lh-2 text-dark mb-0">House</h4>
                      </div>
                    </a>
                  </div>
                  <div class="box px-0 py-6">
                    <a href="listing-grid-with-left-filter.html"
                               class="card border-0 align-items-center justify-content-center pt-7 pb-5 px-3 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none">
                      <img src="<?= base_url('theme/images/architecture-and-city.png') ?>" class="card-img-top"
                                     alt="Office">
                      <div class="card-body px-0 pt-5 pb-0">
                        <h4 class="card-title fs-16 lh-2 text-dark mb-0">Office</h4>
                      </div>
                    </a>
                  </div>
                  <div class="box px-0 py-6">
                    <a href="listing-grid-with-left-filter.html"
                               class="card border-0 align-items-center justify-content-center pt-7 pb-5 px-3 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none">
                      <img src="<?= base_url('theme/images/eco-house.png') ?>" class="card-img-top"
                                     alt="Villa">
                      <div class="card-body px-0 pt-5 pb-0">
                        <h4 class="card-title fs-16 lh-2 text-dark mb-0">Villa</h4>
                      </div>
                    </a>
                  </div>
                  <div class="box px-0 py-6">
                    <a href="listing-grid-with-left-filter.html"
                               class="card border-0 align-items-center justify-content-center pt-7 pb-5 px-3 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none">
                      <img src="<?= base_url('theme/images/verified.png') ?>" class="card-img-top"
                                     alt="Apartment">
                      <div class="card-body px-0 pt-5 pb-0">
                        <h4 class="card-title fs-16 lh-2 text-dark mb-0">Apartment</h4>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-lg-12 pb-lg-11 py-11">
        <div class="container container-xxl">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-heading">Recently Added Properties</h2>
              <span class="heading-divider"></span>
              <p class="mb-6">This are the properties that is recently added to our list</p>
            </div>
            <div class="col-md-6 text-md-right">
              <a href="listing-grid-with-left-filter.html"
                   class="btn fs-14 text-primary btn-accent py-3 lh-15 px-7 mb-6 mb-lg-0">See all properties
                <i class="far fa-long-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
          <div class="slick-slider slick-dots-mt-0 custom-arrow-spacing-30"
             data-slick-options='{"slidesToShow": 4,"dots":true,"arrows":false,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3}},{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>
            <?php foreach($recentProperties as $recentProperty) : ?>
              <div class="box box pb-7 pt-2" data-animate="fadeInUp">
                <div class="card shadow-hover-2">
                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                    <?php if($recentProperty->image_link): ?>
                    <img src="<?= $recentProperty->image_link ?>" class="img-fluid" alt="MSG Property" style="max-height: 216px; width: 100%;">
                    <?php else: ?>
                    <img src="<?= base_url('theme/images/alt/property-default.png') ?>" class="card-img" alt="MSG Property" style="max-height: 216px; width: 100%;">
                    <?php endif; ?>
                    <div class="card-img-overlay p-2 d-flex flex-column">
                      <div>
                        <span class="badge mr-2 badge-primary">For Sale</span>
                        <span class="badge mr-2 badge-white">Hot</span>
                      </div>
                      <ul class="list-inline mb-0 mt-auto hover-image">
                        <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                          <a href="#" class="text-white hover-primary">
                            <i class="far fa-images"></i><span class="pl-1">9</span>
                          </a>
                        </li>
                        <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                          <a href="#" class="text-white hover-primary">
                            <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body pt-3">
                    <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html" class="text-dark hover-primary"><?= $recentProperty->p_code ?></a></h2>
                    <p class="card-text font-weight-500 text-gray-light mb-2"><?= substr($recentProperty->address, 0, 40) ?> ...</p>
                    <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                      <!--<li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"-->
                      <!--            data-toggle="tooltip" title="3 Bedroom">-->
                      <!--  <svg class="icon icon-bedroom fs-18 text-primary mr-1">-->
                      <!--    <use xlink:href="#icon-bedroom"></use>-->
                      <!--  </svg>-->
                      <!--  3 Br-->
                      <!--</li>-->
                      <!--<li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"-->
                      <!--            data-toggle="tooltip" title="3 Bathrooms">-->
                      <!--  <svg class="icon icon-shower fs-18 text-primary mr-1">-->
                      <!--    <use xlink:href="#icon-shower"></use>-->
                      <!--  </svg>-->
                      <!--  3 Ba-->
                      <!--</li>-->
                      <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                  data-toggle="tooltip" title="Size">
                        <svg class="icon icon-square fs-18 text-primary mr-1">
                          <use xlink:href="#icon-square"></use>
                        </svg>
                        <?=$recentProperty->lot_area ?> Sqm.
                      </li>
                    </ul>
                  </div>
                  <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                        <?php if($recentProperty->price_type == 'Cash') : ?>
                      <p class="fs-17 font-weight-bold text-heading mb-0">
                      <?= number_to_currency($recentProperty->price, 'PHP') ?></p>
                  <?php elseif($recentProperty->price_type == 'Monthly'): ?>
                    <p class="fs-17 font-weight-bold text-heading mb-0">
                        <?= number_to_currency($recentProperty->price, 'PHP') ?>
                        <span class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                  <?php elseif($recentProperty->price_type == 'Contact'): ?>
                    <p class="fs-17 font-weight-bold text-heading mb-0">Contact Us</p>
                    <?php endif ?>
                    <ul class="list-inline mb-0">
                      <?php if (session()->has('logged_user')): ?>
                        <?php if (in_array($recentProperty->p_code, $userFavorites)): ?>
                            <!-- Property is in user's favorites -->
                            <li class="list-inline-item">
                                <a href="#"
                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-primary bg-accent border-accent add-to-favorites"
                                    data-property-code="<?= $recentProperty->p_code ?>" data-toggle="tooltip"
                                    title="Remove from Wishlist">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </li>
                        <?php else: ?>
                            <!-- Property is not in user's favorites -->
                            <li class="list-inline-item">
                                <a href="#"
                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white add-to-favorites"
                                    data-property-code="<?= $recentProperty->p_code ?>" data-toggle="tooltip"
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
                      <li class="list-inline-item">
                        <a href="#"
                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                            data-toggle="tooltip" title="Compare"><i
                                class="fas fa-exchange-alt"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
            
          </div>
        </div>
      </section>
      <section class="pt-lg-12 pb-lg-15 py-11">
        <div class="container container-xxl">
          <h2 class="text-heading">Destinations We Love The Most</h2>
          <span class="heading-divider"></span>
          <p class="mb-7">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
          <div class="slick-slider mx-n2"
             data-slick-options='{"slidesToShow": 5,"arrows":false, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
            <div class="box px-2" data-animate="fadeInUp">
              <div class="card text-white bg-overlay-gradient-8 hover-zoom-in">
                <img src="<?= base_url('theme/images/properties-city-01.jpg') ?>" class="card-img" alt="New York">
                <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                  <h2 class="card-title mb-0 fs-20 lh-182"><a href="single-property-1.html"
                                                                    class="text-white">New York</a></h2>
                  <p class="card-text fs-13 font-weight-500 letter-spacing-087">FROM<span
                                class="ml-2 fs-15 font-weight-bold">$540.000 - $900.000</span></p>
                </div>
              </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
              <div class="card text-white bg-overlay-gradient-8 hover-zoom-in">
                <img src="<?= base_url('theme/images/properties-city-02.jpg') ?>" class="card-img" alt="Los Angeles">
                <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                  <h2 class="card-title mb-0 fs-20 lh-182"><a href="single-property-1.html"
                                                                    class="text-white">Los Angeles</a></h2>
                  <p class="card-text fs-13 font-weight-500 letter-spacing-087">FROM<span
                                class="ml-2 fs-15 font-weight-bold">$520.000 - $700.000</span></p>
                </div>
              </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
              <div class="card text-white bg-overlay-gradient-8 hover-zoom-in">
                <img src="<?= base_url('theme/images/properties-city-03.jpg') ?>" class="card-img" alt="San Jose">
                <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                  <h2 class="card-title mb-0 fs-20 lh-182"><a href="single-property-1.html"
                                                                    class="text-white">San Jose</a></h2>
                  <p class="card-text fs-13 font-weight-500 letter-spacing-087">FROM<span
                                class="ml-2 fs-15 font-weight-bold">$340.000 - $600.000</span></p>
                </div>
              </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
              <div class="card text-white bg-overlay-gradient-8 hover-zoom-in">
                <img src="<?= base_url('theme/images/properties-city-04.jpg') ?>" class="card-img" alt="Fort Worth">
                <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                  <h2 class="card-title mb-0 fs-20 lh-182"><a href="single-property-1.html"
                                                                    class="text-white">Fort Worth</a></h2>
                  <p class="card-text fs-13 font-weight-500 letter-spacing-087">FROM<span
                                class="ml-2 fs-15 font-weight-bold">$240.000 - $660.000</span></p>
                </div>
              </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
              <div class="card text-white bg-overlay-gradient-8 hover-zoom-in">
                <img src="<?= base_url('theme/images/properties-city-05.jpg') ?>" class="card-img" alt="Kansas City">
                <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                  <h2 class="card-title mb-0 fs-20 lh-182"><a href="single-property-1.html"
                                                                    class="text-white">Kansas City</a></h2>
                  <p class="card-text fs-13 font-weight-500 letter-spacing-087">FROM<span
                                class="ml-2 fs-15 font-weight-bold">$380.000 - $680.000</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-accent pt-10 pb-lg-11 pb-8 bg-patten-04">
        <div class="container container-xxl">
          <h2 class="text-dark text-center mxw-751 fs-26 lh-184 px-md-8">
            We have the most listings and constant updates.
            So you’ll never miss out.</h2>
          <span class="heading-divider mx-auto"></span>
          <div class="row mt-8">
            <div class="col-lg-4 mb-6 mb-lg-0" data-animate="zoomIn">
              <div class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                <div class="row no-gutters">
                  <div class="col-sm-3">
                    <img src="<?= base_url('theme/images/group-16.png') ?>"
                                 alt="Buy a new home">
                  </div>
                  <div class="col-sm-9">
                    <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                      <a href="single-property-1.html"
                                   class="d-flex align-items-center text-dark hover-secondary"><h4
                                        class="fs-20 lh-1625 mb-1">Buy a new home </h4>
                        <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                          <svg class="icon icon-long-arrow"><use
                                            xlink:href="#icon-long-arrow"></use></svg>
                        </span>
                      </a>
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-6 mb-lg-0" data-animate="zoomIn">
              <div class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                <div class="row no-gutters">
                  <div class="col-sm-3">
                    <img src="<?= base_url('theme/images/group-17.png') ?>"
                                 alt="Sell a home">
                  </div>
                  <div class="col-sm-9">
                    <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                      <a href="single-property-1.html"
                                   class="d-flex align-items-center text-dark hover-secondary"><h4
                                        class="fs-20 lh-1625 mb-1">Sell a home </h4>
                        <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                          <svg class="icon icon-long-arrow"><use
                                            xlink:href="#icon-long-arrow"></use></svg>
                        </span>
                      </a>
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-6 mb-lg-0" data-animate="zoomIn">
              <div class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                <div class="row no-gutters">
                  <div class="col-sm-3">
                    <img src="<?= base_url('theme/images/group-21.png') ?>"
                                 alt="Rent a home">
                  </div>
                  <div class="col-sm-9">
                    <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                      <a href="single-property-1.html"
                                   class="d-flex align-items-center text-dark hover-secondary"><h4
                                        class="fs-20 lh-1625 mb-1">Rent a home </h4>
                        <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                          <svg class="icon icon-long-arrow"><use
                                            xlink:href="#icon-long-arrow"></use></svg>
                        </span>
                      </a>
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container container-xxl">
          <div class="py-lg-8 py-6 border-top">
          <h2 class="text-dark text-center mxw-751 fs-26 lh-184 px-md-8 pb-5">
            Affiliated Banks & Partners</h2>
            <div class="slick-slider mx-0 partners"
                 data-slick-options='{"slidesToShow": 6, "autoplay":true,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":4}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 3}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/partners/BDO_colored.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 6">
                  <img src="<?= base_url('theme/images/partners/BDO_bw.png') ?>" alt="Partner 6" class="image">
                </a>
              </div>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/partners/Unionbank_colored.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 1">
                  <img src="<?= base_url('theme/images/partners/Unionbank_bw.png') ?>" alt="Partner 1" class="image">
                </a>
              </div>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/partners/RCBC_colored.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 6">
                  <img src="<?= base_url('theme/images/partners/RCBC_bw.png') ?>" alt="Partner 6" class="image">
                </a>
              </div>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/partners/PSBank_colored.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 5">
                  <img src="<?= base_url('theme/images/partners/PSBank_bw.png') ?>" alt="Partner 5" class="image">
                </a>
              </div>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/partners/security-bank_colored.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 2">
                  <img src="<?= base_url('theme/images/partners/security-bank_bw.png') ?>" alt="Partner 2" class="image">
                </a>
              </div>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/partners/Chinabank_colored.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 6">
                  <img src="<?= base_url('theme/images/partners/Chinabank_bw.png') ?>" alt="Partner 6" class="image">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container container-xxl">
          <div class="py-lg-8 py-6 border-top">
          <h2 class="text-dark text-center mxw-751 fs-26 lh-184 px-md-8 pb-5">
           Commendations</h2>
            <div class="slick-slider mx-0 partners"
                 data-slick-options='{"slidesToShow": 6, "autoplay":true,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":4}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 3}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/commend/All-star-2020-2022.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 1">
                  <img src="<?= base_url('theme/images/commend/All-star-2020-2022_bw.png') ?>" alt="Partner 1" class="image">
                </a>
              </div>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/commend/Most-leads-2019.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 1">
                  <img src="<?= base_url('theme/images/commend/Most-leads-2019_bw.png') ?>" alt="Partner 1" class="image">
                </a>
              </div>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/commend/Golden-globe-2019.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 2">
                  <img src="<?= base_url('theme/images/commend/Golden-globe-2019_bw.png') ?>" alt="Partner 2" class="image">
                </a>
              </div>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/commend/Brokerage-2018.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 2">
                  <img src="<?= base_url('theme/images/commend/Brokerage-2018_bw.png') ?>" alt="Partner 2" class="image">
                </a>
              </div>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/commend/BDO-2015.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 3">
                  <img src="<?= base_url('theme/images/commend/BDO-2015_bw.png') ?>" alt="Partner 3" class="image">
                </a>
              </div>
              <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                <a href="#" class="item position-relative hover-change-image">
                  <img src="<?= base_url('theme/images/commend/BDO-2015.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 3">
                  <img src="<?= base_url('theme/images/commend/BDO-2015_bw.png') ?>" alt="Partner 3" class="image">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      
</main>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function () {
    // Function to toggle the visibility of the price range input based on the checkbox state
    function togglePriceRangeInput() {
        var priceRangeInput = $("#priceRange");
        var priceRangeCheckbox = $("#enable-price-range");

        // Hide or show the price range input based on the checkbox state
        if (priceRangeCheckbox.prop("checked")) {
            priceRangeInput.show();
        } else {
            priceRangeInput.hide();
        }
    }

    // Attach event listener to the checkbox to toggle the visibility of the price range input
    $("#enable-price-range").change(togglePriceRangeInput);

    // Initial toggle based on checkbox state
    togglePriceRangeInput();

    // Prevent form submission in the traditional way
    $("#search-form").submit(function (event) {
        event.preventDefault();

        // Construct the custom URL based on form values
        var listType = $('#listType').val();
        var pType = $('#p_type').val();
        var location = $('#location').val();

        // Extract minimum and maximum values from the slider
        var $slider = $('[data-slider="true"]');
        var priceMin = $slider.slider("values", 0);
        var priceMax = $slider.slider("values", 1);

        // Build the custom URL
        var customURL = "<?= base_url('filtered-result') ?>";

        // Add type to the URL
        customURL += '/' + encodeURIComponent(listType);

        // Add property type to the URL
        customURL += (pType !== 'any') ? '/' + encodeURIComponent(pType) : '/property-type:any'; // Fix property-type

        // Add location to the URL or use '/location:any' if it has no value
        customURL += (location) ? '/' + encodeURIComponent(location) : '/location:any'; // Fix location

        // Check if the price range checkbox is checked
        var enablePriceRange = $('#enable-price-range').prop('checked');

        // Add price range to the URL if enabled
        if (enablePriceRange && (priceMin || priceMax)) {
            customURL += '/price:' + priceMin + '-' + priceMax;
        } else {
            customURL += '/price:any';
        }

        // Redirect to the custom URL
        window.location.href = customURL;
    });
});


</script>
<script>
$(document).ready(function () {
    // Function to toggle the visibility of the price range input based on the checkbox state
    function togglePriceRangeInputMobile() {
        var priceRangeInputMobile = $("#price-range-mobile");
        var priceRangeCheckboxMobile = $("#enable-price-range-mobile");

        // Hide or show the price range input based on the checkbox state
        if (priceRangeCheckboxMobile.prop("checked")) {
            priceRangeInputMobile.show();
        } else {
            priceRangeInputMobile.hide();
        }
    }

    // Attach event listener to the checkbox to toggle the visibility of the price range input
    $("#enable-price-range-mobile").change(togglePriceRangeInputMobile);

    // Initial toggle based on checkbox state
    togglePriceRangeInputMobile();

    // Prevent form submission in the traditional way
    $("#search-form-mobile").submit(function (event) {
        event.preventDefault();

        // Construct the custom URL based on form values
        var listTypeMobile = $('#listTypeMobile').val();
        var pTypeMobile = $('#p_type_mobile').val();
        var locationMobile = $('#location-mobile').val();

        // Extract minimum and maximum values from the slider
        var $sliderMobile = $('[data-slider-mobile="true"]');
        var priceMinMobile = $sliderMobile.slider("values", 0);
        var priceMaxMobile = $sliderMobile.slider("values", 1);

        // Build the custom URL
        var customURLMobile = "<?= base_url('filtered-result') ?>";

        // Add type to the URL
        customURLMobile += '/' + encodeURIComponent(listTypeMobile);

        // Add property type to the URL
        customURLMobile += (pTypeMobile !== 'any') ? '/' + encodeURIComponent(pTypeMobile) : '/property-type:any';

        // Add location to the URL or use '/location:any' if it has no value
        customURLMobile += (locationMobile) ? '/' + encodeURIComponent(locationMobile) : '/location:any';

        // Check if the price range checkbox is checked
        var enablePriceRangeMobile = $('#enable-price-range-mobile').prop('checked');

        // Add price range to the URL if enabled
        if (enablePriceRangeMobile && (priceMinMobile || priceMaxMobile)) {
            customURLMobile += '/price:' + priceMinMobile + '-' + priceMaxMobile;
        } else {
            customURLMobile += '/price:any';
        }

        // Redirect to the custom URL
        window.location.href = customURLMobile;
    });
});
</script>
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

<?= $this->endSection(); ?>



