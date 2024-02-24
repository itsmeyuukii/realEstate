<?php echo $this->extend("layouts/user_base"); ?>

<?= $this->section('page_title'); ?>
Dashboard | Admin
<?= $this->endSection(); ?>
<?= $this->section('username'); ?>
Welcome
<?= $userdata->full_name ?> <!-- use ucfirst -->
<?= $this->endSection(); ?>

<?php echo $this->section("content"); ?>


<main id="content" class="bg-gray-01">
    <?php
    // Fetch the user's favorites once
    $userFavorites = [];
    foreach ($favorites as $favourite) {
        $userFavorites[] = $favourite['p_code'];
    }
    ?>
        <div class="col-lg-12 mb-8 mb-lg-0 order-2 order-lg-2">
            <div class="row align-items-sm-center mb-4">
                <?php if ($favorites): ?>
                    <div class="col-md-6">
                        <h2 class="fs-15 text-dark mb-0 mt-2">You like <span class="text-primary">
                                <?= $total ?>
                            </span>
                            properties
                        </h2>
                    </div>
                </div>
                <?php foreach ($favorites as $favorite): ?>
                    <div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="fadeInUp">
                        <div class="media flex-column flex-sm-row no-gutters">
                            <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">
                                    <?php
                                    if (!empty($favorite['image_links'])) {
                                        $imageLinks = explode(',', $favorite['image_links']);
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
                                            <?php if (in_array($favorite['p_code'], $userFavorites)): ?>
                                                <!-- Property is in user's favorites -->
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-primary bg-accent border-accent add-to-favorites"
                                                        data-property-code="<?= $favorite['p_code'] ?>" data-toggle="tooltip"
                                                        title="Remove from Wishlist">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </li>
                                            <?php else: ?>
                                                <!-- Property is not in user's favorites -->
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white add-to-favorites"
                                                        data-property-code="<?= $favorite['p_code'] ?>" data-toggle="tooltip"
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
                                    <a href="<?= base_url('property/') . $favorite['slug'] ?>"
                                        class="fs-16 lh-2 text-dark hover-primary d-block">
                                        <?= $favorite['p_title'] ?>
                                    </a>
                                </h2>
                                <p class="mb-1 font-weight-500 text-gray-light">
                                    <?= $favorite['address'] ?>
                                </p>
                                <?php if ($favorite['price_type'] == 'Cash'): ?>
                                    <p class="fs-17 font-weight-bold text-heading mb-1">
                                        <?= number_to_currency($favorite['price'], 'PHP') ?>
                                    </p>
                                <?php elseif ($favorite['price_type'] == 'Monthly'): ?>
                                    <p class="mb-1 font-weight-500 text-gray-light">
                                        <?= number_to_currency($favorite['price'], 'PHP') ?>/Monthly
                                    </p class="mb-1 font-weight-500 text-gray-light">
                                <?php elseif ($favorite['price_type'] == 'Contact'): ?>
                                    <p>Contact Us</p>
                                <?php endif ?>

                                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem
                                    ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem</p>
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
                    <?= (($page * $perPage) - $perPage + 1) . "-" . $perPage ?>
                    Result out of
                    <?= number_format($total) ?>
                </div>
            <?php endif; ?>
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

<?php echo $this->endSection(); ?>