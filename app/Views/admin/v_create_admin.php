<?= $this->extend("layouts/admin_base"); ?>
<?php $page_session = \Config\Services::session(); ?>

<?= $this->section('page_title'); ?>
Dashboard | Admin
<?= $this->endSection() ?>


<?= $this->section("content"); ?>

<main id="content">
    <section class="py-5">
        <div class="container">
            <div class="row login-register">
            
            <?php if ($page_session->getTempdata('success')): ?>
                <div id="successMsg" class="alert alert-success">
                    <?= $page_session->getTempdata('success'); ?>
                </div>
            <?php endif; ?>
            <?php if ($page_session->getTempdata('error')): ?>
                <div id="errorMsg" class="alert alert-error">
                    <?= $page_session->getTempdata('error'); ?>
                </div>
            <?php endif; ?>

                <div class="col-lg-11">
                    <div class="card border-0">
                    <div class="card-body px-6 pr-lg-0 pl-xl-13 py-6">
                        <h2 class="card-title fs-30 font-weight-600 text-dark lh-16 mb-2">Create Admin</h2>
                        <?= form_open() ?>
                        <div class="form-row mx-n2">
                            <div class="col-sm-6 px-2">
                                <div class="form-group">
                                    <label for="firstName" class="text-heading">First Name</label>
                                    <input type="text" name="firstname"
                                        class="form-control form-control-lg border-0" 
                                        id="firstname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-sm-6 px-2">
                                <div class="form-group">
                                    <label for="lastName" class="text-heading">Last Name</label>
                                    <input type="text" name="lastname"
                                        class="form-control form-control-lg border-0"
                                        id="lastName" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row mx-n2">
                            <div class="col-sm-6 px-2">
                                <div class="form-group">
                                    <label for="email" class="text-heading">Email</label>
                                    <input type="text" class="form-control form-control-lg border-0"
                                        id="email" placeholder="Your Email" name="email">
                                </div>
                            </div>
                            <div class="col-sm-6 px-2">
                                <div class="form-group">
                                    <label for="level" class="text-heading">
                                        Admin Role
                                    </label>
                                    <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                            title="Select" data-style="btn-lg h-52" id="level" name="level">
                                        <option value="1" >IT/Admin</option>
                                        <option value="2" >Marketing</option>
                                        <option value="3" >Sales</option>
                                        <option value="4" >Services</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mx-n2">
                            <div class="col-sm-6 px-2">
                                <div class="form-group">
                                    <label for="username" class="text-heading">Username</label>
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control border-0 shadow-none"
                                            id="username" name="username" placeholder="Username">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-gray-01 border-0 text-body fs-18">
                                                <i class="far fa-eye-slash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 px-2">
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