<?= $this->extend("layouts/user_base"); ?>
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
                        <h2 class="card-title fs-30 font-weight-600 text-dark lh-16 mb-2">Edit My Profile</h2>
                        <?= form_open_multipart() ?>
                        <div class="form-row mx-n2">
                            <div class="col-sm-6 px-2">
                                <div class="form-group">
                                    <label for="firstName" class="text-heading">Full Name</label>
                                    <input type="text" name="firstname"
                                        class="form-control form-control-lg border-0" value="<?= $userdata->full_name ?>"
                                        id="firstname" placeholder="First Name" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6 px-2">
                                <div class="form-group">
                                    <label for="email" class="text-heading">Email</label>
                                    <input type="text" class="form-control form-control-lg border-0" value="<?= $userdata->email ?>"
                                        id="email" placeholder="Your Email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row mx-n2">
                            <div class="col-sm-6 px-2">
                                <div class="form-group">
                                    <label for="email" class="text-heading">Phone</label>
                                    <input type="text" class="form-control form-control-lg border-0" value="<?php echo isset($userdata->phone) ? $userdata->phone : ''; ?>"
                                        id="phone" placeholder="Phone" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-row mx-n2">
                            <div class="col-sm-6 px-2">
                                <div class="form-group">
                                    <label for="profile_img" class="text-heading">Current Photo</label>
                                    <?php if(isset($userdata->profile_img) && !empty($userdata->profile_img)): ?>
                                        <img src="<?php echo $userdata->profile_img; ?>" alt="Current Photo" style="max-width: 100%; height: auto;">
                                    <?php else: ?>
                                        <p>No photo uploaded.</p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-sm-6 px-2">
                                <div class="form-group">
                                    <label for="profile_img" class="text-heading">Upload New Photo</label>
                                    <input type="file" class="form-control form-control-lg border-0" id="profile_img" placeholder="Upload New Photo" name="profile_img">
                                    <img id="imagePreview" src="#" alt="Preview" style="display: none; max-width: 100%; height: auto;">
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Save Changes</button>
                        <?= form_close() ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.getElementById('profile_img').addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').src = e.target.result;
                document.getElementById('imagePreview').style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>

<?= $this->endSection(); ?>