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
                    <h1>Careers</h1>
                </div>
                <?php if(count($careers) > 0) : ?>
                <?php foreach($careers as $career) : ?>
                <div class="card p-2 border-0 mb-4 d-block">
                    <div class="row no-gutters">
                        <div class="col-sm-12 pr-0 pr-sm-1">
                            <a href="#" class="card-title d-block fs-large-5 lh-2 text-primary font-weight-500 mb-0 text-center">
                                <?= $career->title ?>
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <div class="card-body pl-0 pl-sm-7">
                                <p class="mb-3 card-text">
                                    <?= $career->description ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                <div>
                    <p>No information avaialble</p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </section>
</main>

<?= $this->endSection(); ?>