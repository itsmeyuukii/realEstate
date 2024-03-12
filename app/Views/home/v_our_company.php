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
                <div class="card p-2 border-0 mb-4 d-block">
                    Welcome to <span style="color: #fa3b11;">My Saving Grace Realty and Development Corporation (MSGRDC)</span>, where we’ve redefined the landscape of Real Estate Brokerage, all by God’s Grace! Founded in 2013 in the Philippines, MSGRDC is not just a real estate company, it is a testament to innovative thinking and a business model built on the divine principle of God’s grace.</br>

<div class="fs-25 text-primary"><b>Our Unique Approach</b></div>

At MSGRDC, we believe in transforming how real estate brokerage works, and we owe our success entirely to God’s grace. Led by our founder, Mr. Ramil Alquileta, a visionary with a mission, a seasoned real estate broker with over 30 years of experience and more than two decades as a license broker, we have carved our path in the industry.</br>

<div class="fs-25 text-primary"><b>Innovative Business Model</b></div>

Our innovative business model is founded on the principles of integrity grace, and the relentless pursuit of excellence. We take pride in helping property seekers, investors, and sales performers reach new heights, offering end-to-end real estate services that cover every aspect of the transaction process.</br>

<div class="fs-25 text-primary"><b>Empowering your success</b></div>

Our commitment to your success goes beyond traditional real estate services. We provide and environment where your earning potential knows no bounds. With comprehensive marketing support, unlimited listings, and ongoing training, we equip you with the tools and techniques to thrive in the dynamic world of real estate.</br>

<div class="fs-25 text-primary"><b>Palawan Paradise</b></div>

In 2022, we expanded our offerings to cater to investors seeking their own piece of paradise in Palawan. This expansion is a testament to our dedication to providing diverse and tailored solutions to our clients, ensuring that they can find their dream property in one of the beautiful locations in the world.</br>

                </div>
            </div>
        </div>
    </div>
    </section>
</main>

<?= $this->endSection(); ?>