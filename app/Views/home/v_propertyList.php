<?php echo $this->extend("layouts/home_base"); ?>

<?php echo $this->section("title"); ?>
    <?= $page_title->page_title ?>
<?php echo $this->endSection(); ?>

<?= $this->section("content"); ?>

<section class="pt-1 pb-1 pb-lg-1 page-title bg-overlay bg-img-cover-center d-none d-lg-block"
    style="background-image: url('<?= base_url('theme/images/BG3.jpg'); ?>');">
    <div class="container">
        <h1 class="fs-22 fs-md-42 mb-0 text-white font-weight-normal text-center py-7 lh-15 px-lg-16"
            data-animate="fadeInDown">
        </h1>
    </div>
</section>
<section class="pt-8 pb-11 bg-gray-01">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 order-1 order-lg-1 primary-sidebar sidebar-sticky" id="sidebar">
                <div class="primary-sidebar-inner">
                    <div class="card mb-4">
                        <div class="card-body px-6 py-4">
                            <h4 class="card-title fs-16 lh-2 text-dark mb-3">Find your home</h4>
                            <form id="search-form">
                                <div class="form-group">
                                    <label for="key-word" class="sr-only">Enter location ...</label>
                                    <input type="text" class="form-control form-control-lg border-0 shadow-none"
                                        id="location" name="search" placeholder="Enter location ...">
                                </div>
                                <div class="form-group">
                                    <label for="status" class="sr-only">Status</label>
                                    <select class="form-control border-0 shadow-none form-control-lg"
                                        title="List type" data-style="btn-lg py-2 h-52" id="listType" name="status">
                                        <option value="buy">For Sale</option>
                                        <option value="rent">For Rent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="p_type" class="sr-only">Property Type</label>
                                    <select class="form-control border-0 shadow-none form-control-lg"
                                            title="Select" data-style="p-0 h-24 lh-17 text-dark" name="p_type" id="p_type">
                                    <option value="any" >Any</option>
                                    <option value="House" >House</option>
                                    <option value="condominium" >Condominium</option>
                                    <option value="townhouse" >Townhouse</option>
                                    <option value="commercial" >Commercial</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-lg-9 pt-6 pl-7">
                                    <input class="form-check-input" type="checkbox" id="enable-price-range">
                                    <label class="form-check-label" for="enable-price-range">
                                        Enable Price Range
                                    </label>
                                </div>
                                <div class="form-group slider-range slider-range-secondary" id="priceRange">
                                    <label for="price" class="mb-4 text-gray-light">Price Range</label>
                                    <div data-slider="true"
                                        data-slider-options='{"min":0,"max":100000000,"values":[100000,9000000],"type":"currency"}'>
                                    </div>
                                    <div class="text-center mt-2">
                                        <input id="price" type="text" readonly name="price"
                                            class="border-0 amount text-center text-body font-weight-500">
                                    </div>
                                </div>
                                <!-- <a class="lh-17 d-inline-block" data-toggle="collapse" href="#other-feature"
                                    role="button" aria-expanded="false" aria-controls="other-feature">
                                    <span class="text-primary d-inline-block mr-1"><i
                                            class="far fa-plus-square"></i></span>
                                    <span class="fs-15 text-heading font-weight-500 hover-primary">Other Features</span>
                                </a>
                                <div class="collapse" id="other-feature">
                                    <div class="card card-body border-0 px-0 pb-0 pt-3">
                                        <ul class="list-group list-group-no-border">
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check1">
                                                    <label class="custom-control-label" for="check1">Air
                                                        Conditioning</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check2">
                                                    <label class="custom-control-label" for="check2">Laundry</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check3">
                                                    <label class="custom-control-label"
                                                        for="check3">Refrigerator</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check4">
                                                    <label class="custom-control-label" for="check4">Washer</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check5">
                                                    <label class="custom-control-label" for="check5">Barbeque</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check6">
                                                    <label class="custom-control-label" for="check6">Lawn</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check7">
                                                    <label class="custom-control-label" for="check7">Sauna</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check8">
                                                    <label class="custom-control-label" for="check8">WiFi</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check9">
                                                    <label class="custom-control-label" for="check9">Dryer</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check10">
                                                    <label class="custom-control-label" for="check10">Microwave</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check11">
                                                    <label class="custom-control-label" for="check11">Swimming
                                                        Pool</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check12">
                                                    <label class="custom-control-label" for="check12">Window
                                                        Coverings</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check13">
                                                    <label class="custom-control-label" for="check13">Gym</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check14">
                                                    <label class="custom-control-label" for="check14">Outdoor
                                                        Shower</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pt-0 pb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="features[]" id="check15">
                                                    <label class="custom-control-label" for="check15">TV Cable</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <button type="submit" class="btn btn-primary btn-lg btn-block shadow-none mt-4">Search
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card property-widget mb-4 d-none d-lg-block">
                        <div class="card-body px-6 pt-5 pb-6">
                            <h4 class="card-title fs-16 lh-2 text-dark mb-3">Featured Properties</h4>
                            <div class="slick-slider mx-0" data-slick-options='{"slidesToShow": 1, "autoplay":true}'>
                                <?php foreach($featuredProperties as $featuredProperty) :?>
                                <div class="box px-0">
                                    <div class="card border-0">
                                        <?php if($featuredProperty->image_link): ?>
                                            <img src="<?= base_url() . $featuredProperty->image_link ?>" class="card-img" alt="<?= $featuredProperty->image_link ?>">
                                         <?php else: ?>
                                            <img src="<?= base_url('theme/images/alt/property-default.png') ?>" alt="MSG Property" style="max-height: 216px; width: 100%;">
                                         <?php endif; ?>
                                        
                                        <div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
                                            <div class="d-flex mb-auto">
                                                <a href="#" class="mr-1 badge badge-orange">featured</a>
                                                <a href="#" class="badge badge-indigo">for Rent</a>
                                            </div>
                                            <div class="px-2 pb-2">
                                                <a href="<?= base_url('property/'). $featuredProperty->slug ?>" class="text-white">
                                                    <h5 class="card-title fs-16 lh-2 mb-0"><?= $featuredProperty->p_code ?></h5>
                                                </a>
                                                <p class="card-text text-gray-light mb-0 font-weight-500">
                                                    <?= $featuredProperty->address ?></p>
                                                <p class="text-white mb-0">
                                                    <?php if($featuredProperty->price_type == 'Cash' ): ?>
                                                        <span class="fs-17 font-weight-bold">
                                                            <?= number_to_currency($featuredProperty->price, 'PHP') ?>
                                                        </span>
                                                    <?php elseif($featuredProperty->price_type == 'Monthly') :?>
                                                        <span class="fs-17 font-weight-bold">
                                                            <?= number_to_currency($featuredProperty->price, 'PHP') ?>
                                                        </span>/month
                                                    <?php elseif($featuredProperty->price_type == 'Contact'): ?>
                                                        <span class="fs-17 font-weight-bold">
                                                            Contact Us
                                                        </span>
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card d-none d-lg-block">
                        <div class="card-body px-6 py-4">
                            <h4 class="card-title fs-16 lh-2 text-dark mb-3">Latest Posts</h4>
                            <ul class="list-group list-group-flush">
                                <?php foreach($latestBlogs as $blog) :?>
                                <li class="list-group-item px-0 pt-0 pb-3">
                                    <div class="media">
                                        <div class="position-relative mr-3">
                                            <a href="<?= base_url('blog-detail/'). $blog->slugs?>"
                                                class="d-block w-100px rounded pt-11 bg-img-cover-center"
                                                style="background-image: url('<?= $basUrl . $blog->image_path ?>')">
                                            </a>
                                            <!-- <a href="blog-grid-with-sidebar.html"
                                                class="badge text-white bg-dark-opacity-04 m-1 fs-13 font-weight-500 bg-hover-primary hover-white position-absolute pos-fixed-top">
                                                creative
                                            </a> -->
                                        </div>
                                        <div class="media-body">
                                            <h4 class="fs-14 lh-186 mb-1">
                                                <a href="<?= base_url('blog-detail/'). $blog->slugs?>" class="text-dark hover-primary">
                                                    <?= $blog->title ?>
                                                </a>
                                            </h4>
                                            <div class="text-gray-light">
                                                <?= date('F j, Y', strtotime($blog->created_at)) ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-8 mb-lg-0 order-2 order-lg-2">
                <div class="row align-items-sm-center mb-4">
                    <?php if ($properties): ?>
                        <div class="col-md-6">
                            <h2 class="fs-15 text-dark mb-0">We found <span class="text-primary">
                                    <?= $total ?>
                                </span>
                                properties available for you
                            </h2>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <div class="d-flex justify-content-md-end align-items-center">
                                <div class="d-none d-md-block">
                                    <a class="fs-sm-18 text-dark" href="#">
                                        <i class="fas fa-list"></i>
                                    </a>
                                    <a class="fs-sm-18 text-dark opacity-2 ml-5" href="listing-grid-with-left-filter.html">
                                        <i class="fa fa-th-large"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    // Fetch the user's favorites once
                    $userFavorites = [];
                    foreach ($favourites as $favourite) {
                        $userFavorites[] = $favourite['p_code'];
                    }
                    ?>
                    <?php foreach ($properties as $property): ?>
                        <div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="">
                            <div class="media flex-column flex-sm-row no-gutters">
                                <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">
                                    <?php
                                    if (!empty($property['image_links'])) {
                                        $imageLinks = explode(',', $property['image_links']);
                                        $firstImageLink = reset($imageLinks);
                                        ?>
                                        <img src="<?= $baseurl . $firstImageLink ?>" class="card-img" alt="Home in Metric Way">
                                    
                                    <?php }else{ ?>
                                        <img src="<?= base_url('theme/images/alt/property-default.png') ?>" class="card-img" alt="Home in Metric Way">
                                    <?php } ?>
                                    <div class="card-img-overlay p-2">
                                        <ul
                                            class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                            <?php if (session()->has('logged_user')): ?>
                                                <?php if (in_array($property['p_code'], $userFavorites)): ?>
                                                    <!-- Property is in user's favorites -->
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-primary bg-accent border-accent add-to-favorites"
                                                            data-property-code="<?= $property['p_code'] ?>" data-toggle="tooltip"
                                                            title="Remove from Wishlist">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                    </li>
                                                <?php else: ?>
                                                    <!-- Property is not in user's favorites -->
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white add-to-favorites"
                                                            data-property-code="<?= $property['p_code'] ?>" data-toggle="tooltip"
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
                                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="media-body mt-3 mt-sm-0">
                                    <h2 class="my-0">
                                        <a href="<?= base_url('property/') . $property['slug'] ?>"
                                            class="fs-16 lh-2 text-dark hover-primary d-block">
                                            <?= $property['p_title'] ?>
                                        </a>
                                    </h2>
                                    <p class="mb-1 font-weight-500 text-gray-light">
                                        <?= $property['address'] ?>
                                    </p>
                                    <?php if ($property['price_type'] == 'Cash'): ?>
                                        <p class="fs-17 font-weight-bold text-heading mb-1">
                                            <?= number_to_currency($property['price'], 'PHP') ?>
                                        </p>
                                    <?php elseif ($property['price_type'] == 'Monthly'): ?>
                                        <p class="mb-1 font-weight-500 text-gray-light">
                                            <?= number_to_currency($property['price'], 'PHP') ?>/Monthly
                                        </p class="mb-1 font-weight-500 text-gray-light">
                                    <?php elseif ($property['price_type'] == 'Contact'): ?>
                                        <p>Contact Us</p>
                                    <?php endif ?>

                                    <p class="mb-2 ml-0"><?= substr($property['p_desc'], 0, 100) ?></p>
                                </div>
                            </div>
                            <div class="d-sm-flex justify-content-sm-between">
                                <ul class="list-inline d-flex mb-0 flex-wrap">
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
                                        2300 Sq.Ft
                                    </li>
                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                        data-toggle="tooltip" title="1 Garage">
                                        <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                            <use xlink:href="#icon-Garage"></use>
                                        </svg>
                                        1 Gr
                                    </li>
                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                        data-toggle="tooltip" title="Year">
                                        <svg class="icon icon-year fs-18 text-primary mr-1">
                                            <use xlink:href="#icon-year"></use>
                                        </svg>
                                        2020
                                    </li>
                                </ul>
                                <span class="badge badge-primary mr-xl-2 mt-3 mt-sm-0">For Sale</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?= $pager->makeLinks($page, $perPage, $total, 'pagination_view') ?>
                    <div class="mt-6 text-center">
                        Showing
                        <?= (($page * $perPage) - $perPage + 1) . "-" . (($page * $perPage) - $perPage + count($properties)) ?>
                        Result out of
                        <?= number_format($total) ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

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

    //form Searching
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


<?= $this->endSection(); ?>