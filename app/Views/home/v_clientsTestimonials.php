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
        
        <div class="col-lg-12 mb-6 mb-lg-0  order-0 order-lg-1">
            <div class="row align-items-sm-center mb-7">
            </div>
            <div class="card p-2 border-0 mb-4 d-block">
                <div class="row no-gutters">
                    <div class="col-sm-4 pr-0 pr-sm-1">
                    <a href="agent-details-1.html" class="d-block hover-shine">
                        <img src="<?= base_url('theme/images/alt/Avatar-people.png') ?> " class="card-img"
                                        alt="Clients">
                    </a>
                    </div>
                    <div class="col-sm-8">
                        <div class="card-body pl-0 pl-sm-7">

                            <p class="card-title d-block fs-large-5 lh-2 text-primary font-weight-500 text-primary mb-0">
                                RISA OCAMPO
                            </a>
                            <p class="mb-3 card-text">Rented Apartment
                            </p>
                            
                            <p class="mb-3 card-text">
                            “ Mr. Rowel Castillo from MSGRDC assisted me throughout the process of purchasing the lot. 
                            He was consistently giving me updates to keep me on track with the progress. He was kind and 
                            easy to talk to whenever I have questions. The whole process was fast. I think it was less 
                            than 2 weeks when I got the call from the bank. I highly recommend them based on my own 
                            experience as their client. ”
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
        </div>
    </div>
    </section>
</main>

<?= $this->endSection(); ?>