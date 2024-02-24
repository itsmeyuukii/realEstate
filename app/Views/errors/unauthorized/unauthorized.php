<?= $this->extend("layouts/admin_base") ?>

<?= $this->section("content") ?>

<main id="content">
    <section class="pt-1 pb-1">
    <div class="container">
        <div class="text-center mb-15">
        <img src="<?= base_url('theme/images/page-404.jpg')?>" alt="Page 404" class="mb-5">
        <h1 class="fs-30 lh-16 text-dark font-weight-600 mb-5">Oops! You don’t have Access.</h1>
        </div>
        
    </div>
    </section>
</main>

<?= $this->endSection(); ?>