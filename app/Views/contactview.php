<?php $page_session = \CodeIgniter\Config\Services::session(); ?>

<?php echo $this->extend("layouts/base"); ?>



<?= $this->section("content"); ?>

<!-- Need to add Jquery here for the script-->
<script>
    setTimeout(function () {
        $("#successMsg, #errorMsg").hide();
    }, 3000);
</script>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <h1>Contact Us</h1> 

            <?php if ($page_session->getTempdata('success')): ?>

                <div id="successMsg" class="alert alert-success">
                    <?php echo $page_session->getTempdata('success'); ?>
                </div>

            <?php endif; ?>
            <?php if ($page_session->getTempdata('error')): ?>

                <div id="errorMsg" class="alert alert-danger">
                    <?php echo $page_session->getTempdata('error'); ?>
                </div>

            <?php endif; ?>

            <?= form_open(); ?>
            <div class="form-group mt-4">
                <label for="">Name</label>
                <input type="text" name="uname" class="form-control" value="<?= set_value('uname') ?>">
                <span class="text-danger">
                    <?= display_error($validation, 'uname') ?>
                </span>
            </div>
            <div class="form-group mt-4">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="<?= set_value('email') ?>">
                <span class="text-danger">
                    <?= display_error($validation, 'email') ?>
                </span>
            </div>
            <div class="form-group mt-4">
                <label for="">Message</label>
                <textarea type="text" name="msg" class="form-control" value="<?= set_value('msg') ?>"></textarea>
                <span class="text-danger">
                    <?= display_error($validation, 'msg') ?>
                </span>
            </div>
            <div class="form-group mt-4">
                <input type="submit" name="save" class="btn btn-primary mt-4" value="save">
            </div>


            <?= form_close(); ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>