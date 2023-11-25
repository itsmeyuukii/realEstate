<?php $page_session = \Config\Services::session(); ?>

<?= $this->extend("layouts/admin_base"); ?>


<?= $this->section("content"); ?>
<link rel="stylesheet" href="<?= base_url('theme/css/sidebar.css'); ?>">

<input type="checkbox" class="sidebar-checkbox" id="sidebar-toggle">
<div class="sidebar">
    <ul class="links">
        <li><a href="<?= base_url('cms'); ?>" class="act">Home</a></li>
        <ul>
            <li class= "links mt-0"><a href="<?= base_url('cms/homecontent'); ?>" style="color:black;">Head Image</a></li>
        </ul>
        <li><a href="<?= base_url('cms/services'); ?>">Services</a></li>
        <li><a href="<?= base_url('cms/about'); ?>">About Us</a></li>
        <li><a href="<?= base_url('cms/news'); ?>">News & Events</a></li>
        <li><a href="<?= base_url('cms/contact'); ?>">Contact US</a></li>
    </ul>
</div>
<label for="sidebar-toggle" class="hamburger-btn">
    <i class="fas fa-bars"></i>
</label>

<div class="content-property">
    <div class="row justify-content-center align-items-center">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-5">
            <h1>CMS</h1>

            <?= form_open_multipart(); ?>

            <div class="form-group mt-4">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="<?= set_value('title'); ?>">
                <span class="text-danger" ><?= display_error($validation, 'title'); ?></span>
            </div>
            <div class="form-group mt-4">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control" value="<?= set_value('image'); ?>">
                <span class="text-danger" ><?= display_error($validation, 'image'); ?></span>
            </div>
            <div class="form-group mt-4">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="show" <?php echo set_select('status', 'show'); ?>>Show</option>
                    <option value="hidden" <?php echo set_select('status', 'hidden'); ?>>Hidden</option>
                </select>
            </div>


            <div class="form-group mt-4">
                <input type="submit" name="upload" class="btn btn-primary" value="upload">
            </div>

            <?= form_close(); ?>

        </div>
    </div>
</div>




<?= $this->endSection(); ?>