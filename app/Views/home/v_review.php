<?php $page_session = \Config\Services::session(); ?>

<?= $this->extend("layouts/home_base"); ?>
<?= $this->section("content"); ?>

<main id="content" class="bg-gray-01">
    <section class="pt-1 pb-1 pb-lg-1 page-title bg-overlay bg-img-cover-center d-none d-lg-block"
        style="background-image: url('<?= base_url('theme/images/BG3.jpg'); ?>');">
        <div class="container">
            <h1 class="fs-22 fs-md-42 mb-0 text-white font-weight-normal text-center py-7 lh-15 px-lg-16"
                data-animate="fadeInDown">
            </h1>
        </div>
    </section>
    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10 my-profile">
        <div class="mb-6 text-center">
            <h2 class="mb-0 lh-15 text-primary">Write a Review
            </h2>
        <p class="mb-1">How satisfied are you with My Saving Grace Realty?</p>
        </div>
        <?php if (session()->has('success')): ?>
            <div class="alert alert-success">
                <?= session()->get('success') ?>
            </div>
        <?php endif; ?>
        
        <div class="card bg-transparent border-0">
            <div class="card-body">
                <div class="container">
                    <?= form_open(); ?>
                    <div class="mxw-751">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg"
                                            name="name" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg"
                                            name="agent" placeholder="Name of Agent">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-lg"
                                        name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-6">
                                <textarea name="review" class="form-control form-control-lg" cols="30" rows="10" placeholder="Write Something ..."></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary text-white" name="submit" type="submit">Send</button>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
        
        
        
    </div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>


<script src="<?= base_url('theme/js/tinymce/tinymce.min.js'); ?>"></script>
<script type="text/javascript">
tinymce.init({
        selector: '#textcontent'
    });
</script>

<?= $this->endSection(); ?>