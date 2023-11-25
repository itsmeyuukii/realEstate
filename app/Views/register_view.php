    <?php $page_session = \Config\Services::session(); ?>
    
    <?= $this->extend("layouts/base"); ?>

    <?= $this->section("content"); ?>

    <script>
    setTimeout(function () {
        $("#successMsg, #errorMsg").hide();
    }, 3000);
    </script>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-5">
                <div class="primary mt-5">
                    <h1>Register</h1>
                </div>

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


                <?= form_open(); ?>

                    <div class="form-group mt-4">
                        <label for=""> Username</label>
                        <input type="text" name="username" class="form-control" value= "<?= set_value('username');?>">
                        <span class="text-danger" ><?= display_error($validation, 'username'); ?></span>
                    </div>
                    <div class="form-group mt-4">
                        <label for=""> Email</label>
                        <input type="text" name="email" class="form-control" value= "<?= set_value('email');?>">
                        <span class="text-danger" ><?= display_error($validation, 'email'); ?></span>
                    </div>
                    <div class="form-group mt-4">
                        <label for=""> Password</label>
                        <input type="password" name="pass" class="form-control" value= "<?= set_value('pass');?>">
                        <span class="text-danger" ><?= display_error($validation, 'pass'); ?></span>
                    </div>
                    <div class="form-group mt-4">
                        <label for=""> Confirm Password</label>
                        <input type="password" name="cpass" class="form-control" value= "<?= set_value('cpass');?>">
                        <span class="text-danger" ><?= display_error($validation, 'cpass'); ?></span>
                    </div>
                    <div class="form-group mt-4">
                        <input type="submit" name="register" class="btn btn-primary" value="Register">
                    </div>

                <?= form_close(); ?>

            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>
