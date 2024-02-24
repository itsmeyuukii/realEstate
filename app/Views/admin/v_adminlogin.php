<?= $this->extend("layouts/home_base"); ?>

<?= $this->section('page_title'); ?>
Dashboard | Admin
<?= $this->endSection() ?>


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
    <section class="py-5">
        <div class="container">
            <div class="row login-register">
                <div class="col-lg-6">
                    <div class="card border-0">
                    <div class="card-body px-6 pr-lg-0 pl-xl-13 py-6">
                        <h2 class="card-title fs-30 font-weight-600 text-dark lh-16 mb-2">Admin Login</h2>
                        <?= form_open() ?>
                        <div class="form-row mx-n2">
                            <div class="col-sm-12 px-2">
                                <div class="form-group">
                                    <label for="username" class="text-heading">Username</label>
                                    <input type="text" class="form-control form-control-lg border-0"
                                        id="username" placeholder="Username" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="form-row mx-n2">
                            <div class="col-sm-12 px-2">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group input-group-lg">
                                        <input type="password" class="form-control border-0 shadow-none"
                                            id="password" name="password" placeholder="Password">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-gray-01 border-0 text-body fs-18">
                                                <i class="far fa-eye-slash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Create</button>
                        <?= form_close() ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?= $this->endSection(); ?>