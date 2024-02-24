<?= $this->extend("layouts/home_base") ?>

<?= $this->section("content") ?>

<main id="content">
    <section class="pt-1 pb-1 pb-lg-1 page-title bg-overlay bg-img-cover-center d-none d-lg-block"
        style="background-image: url('<?= base_url('theme/images/BG3.jpg'); ?>');">
        <div class="container">
            <h1 class="fs-22 fs-md-42 mb-0 text-white font-weight-normal text-center py-7 lh-15 px-lg-16"
                data-animate="fadeInDown">
            </h1>
        </div>
    </section>
    <section class="pt-1 pb-1">
    <div class="container">
        <div class="text-center mb-15">
        <img src="<?= base_url('theme/images/404-error.png')?>" alt="Page 404" class="mb-5">
        <h1 class="fs-30 lh-16 text-dark font-weight-600 mb-5">Oops! Page does not exist.</h1>
        </div>
        
    </div>
    </section>
</main>

<?= $this->endSection(); ?>