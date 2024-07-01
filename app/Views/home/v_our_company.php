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

    <section class="pt-8 pb-13 bg-gray-01">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-6 mb-lg-0 order-0 order-lg-1">
                    <div class="text-center text-primary my-4">
                        <h1>Our Company</h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-center about-us-section">
                <div class="col-md-6 ml-md-10 mx-5">
                    <h1 class="text-dark">ABOUT US</h1>
                    <p class="text-dark text-justify mt-3">
                        Founded in 2013 in the Phillipines, My Saving Grace Realty and Development Corporation
                        (MSGRDC) has redefined real estate brokerage throught innovation and divine grace.
                        As a leading brokerage firm in the Phillipines, our core team boasts over 30 years of
                        experience in the industry.
                    </p>
                </div>
            </div>
            <div class="pt-10 mx-0">
                <h1 class="text-dark mb-8">Get to Know Us</h1>
                <div class="row">
                    <div class="col-md-6 mx-0 d-flex justify-content-center">
                        <div class="know-img-box">
                            <img src="<?= base_url('theme/images/about-us/know.jpg') ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mx-5 text-justify">
                            We offer over 20,000 listings of foreclosed properties and are accredited by all major banks and developers
                            in the Phillipines. Our portfolio also include more that 40 properties in Palawan, ranging from residential
                            and beach lots to agricultural, commercial lots along the highway, and even islands.

                            At MSGRDC, we provide comprehensive real estate services helping properly seekers, investors and sales profesionals
                            achieve new hieghts. Our commitment to excellence ensures our clients find their dream properties in some of the world's
                            most beautiful locations.
                            
                            We are more than just a real estate company, we are a testament to the power of grace and innovation in driving success.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-5 my-0 bg-primary about-properties">
                <div class="row justify-content-center pt-5">
                    <h1 class="text-white mt-5">Available Properties</h1>
                </div>
                <div class="row mx-0 py-5">
                    <div class="col-md-3 d-flex">
                        <div class="about-card">
                            <img src="<?= base_url('theme/images/about-us/1.jpg') ?>" alt="<?= base_url('theme/images/about-us/default-image.jpg') ?>">
                            <h6 class="my-3">FORECLOSED PROPERTIES</h6>
                            <p class="mx-5 fs-14 mb-5 text-center">
                                We offer a variety of foreclosed properties, including land, houses, and condominiums from 
                                various banks. These properties provide excellent investment oppurtunities or comprehensive
                                prices below market value.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="about-card">
                            <img src="<?= base_url('theme/images/about-us/2.jpg') ?>/" alt="<?= base_url('theme/images/about-us/default-image.jpg') ?>">
                            <h6 class="my-3">Property Re-sale</h6>
                            <p class="mx-5 fs-14 mb-5 text-center">
                                We offer a range of resale properties and take pride in helping property owners and investors
                                reach new heights. Benefit from comprehensive marketing suport, unlimited listings maximize
                                earning potential in real estate.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="about-card">
                            <img src="<?= base_url('theme/images/about-us/3.jpg') ?>/" alt="<?= base_url('theme/images/about-us/default-image.jpg') ?>">
                            <h6 class="my-3">PROPERTY PRE-SELLING</h6>
                            <p class="mx-5 fs-14 mb-5 text-center">
                                Accredited by all major developers in the Philippines, we offer a variety of properties, including
                                houses, land, and condominiums. Our offerings extend beyond Metro Manila to top destinations like
                                Boracay and Palawan.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="about-card">
                            <img src="<?= base_url('theme/images/about-us/4.jpg') ?>/" alt="<?= base_url('theme/images/about-us/default-image.jpg') ?>">
                            <h6 class="my-3">PALAWAN PROPERTIES</h6>
                            <p class="mx-5 fs-14 mb-5 text-center">
                                We offer a dirverse range of properties in Palawan, including residential and beach lots,
                                agricultural land, commercial lots along the highway, and even islands.
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>