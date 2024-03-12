<?= $this->extend("layouts/user_base"); ?>
<?php $page_session = \Config\Services::session(); ?>

<?= $this->section('page_title'); ?>
Dashboard | Admin
<?= $this->endSection() ?>


<?= $this->section("content"); ?>

<main id="content" class="bg-gray-01">
    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
        <div class="mb-6">
        <h2 class="mb-0 text-heading fs-22 lh-15">My Profile
        </h2>
        <p class="mb-1">Please Fill out the form for your profile.</p>
        </div>
        <form>
        <div class="row mb-6">
            <div class="col-lg-6">
            <div class="card mb-6">
                <div class="card-body px-6 pt-6 pb-5">
                <div class="row">
                    <div class="col-sm-4 col-xl-12 col-xxl-7 mb-6">
                    <h3 class="card-title mb-0 text-heading fs-22 lh-15">Photo</h3>
                    <p class="card-text">Upload your profile photo.</p>
                    </div>
                    <div class="col-sm-8 col-xl-12 col-xxl-5">
                    <?php if(isset($userdata->profile_img) && !empty($userdata->profile_img)): ?>
                        <img src="<?php echo $userdata->profile_img; ?>" alt="Current Photo" class="w-100">
                    <?php else: ?>
                        <p>No photo uploaded.</p>
                    <?php endif; ?>
                    <div class="custom-file mt-4 h-auto">
                        <input type="file" class="profile_img" hidden id="profile_img" name="profile_img">
                        <label class="btn btn-secondary btn-lg btn-block" for="profile_img">
                        <span class="d-inline-block mr-1"><i class="fal fa-cloud-upload"></i></span>Upload
                        profile image</label>
                    </div>
                    <p class="mb-0 mt-2">
                        *minimum 500px x 500px
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="card mb-6">
                <div class="card-body px-6 pt-6 pb-5">
                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Contact information</h3>
                <div class="form-row mx-n4">
                    <div class="form-group col-md-12 px-4">
                    <label for="firstName" class="text-heading">First name</label>
                    <input type="text" class="form-control form-control-lg border-0" id="firstName" readonly
                                name="firsName"value="<?php echo isset($userdata->full_name) ? $userdata->full_name : ''; ?>">
                    </div>
                </div>
                <div class="form-row mx-n4">
                    <div class="form-group col-md-12 px-4">
                    <label for="mobile" class="text-heading">Mobile</label>
                    <input type="text" class="form-control form-control-lg border-0" id="mobile"
                                name="mobile" value="<?php echo isset($userdata->phone) ? $userdata->phone : ''; ?>">
                    </div>
                </div>
                <div class="form-row mx-n4">
                    <div class="form-group col-md-12 px-4">
                    <label for="email" class="text-heading">Email</label>
                    <input type="email" class="form-control form-control-lg border-0" id="email"
                                name="email">
                    </div>
                </div>
                <div class="form-row mx-n4">
                    <div class="form-group col-md-12 px-4">
                    <label for="email" class="text-heading">Occupation</label>
                    <input type="email" class="form-control form-control-lg border-0" id="email"
                                name="email">
                    </div>
                </div>
                <div class="form-row mx-n4">
                    <div class="form-group col-md-12 px-4 mb-md-0">
                    <label for="email" class="text-heading">Address</label>
                    <input type="email" class="form-control form-control-lg border-0" id="email"
                                name="email" value="<?php echo isset($userdata->email) ? $userdata->email : ''; ?>">
                    </div>
                </div>
                </div>
            </div>
            </div>
            
        </div>
        <div class="d-flex justify-content-end flex-wrap">
            <button class="btn btn-lg btn-primary ml-4 mb-3">Update Profile</button>
        </div>
        </form>
    </div>
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