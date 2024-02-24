<?php $page_session = \Config\Services::session(); ?>

<?= $this->extend("layouts/admin_base"); ?>

<?= $this->section("content"); ?>

<main id="content" class="bg-gray-01">
    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10 my-profile">
        
        <div class="collapse-tabs new-property-step">
        <ul class="nav nav-pills border py-2 px-3 mb-6 d-none d-md-flex mb-6"
            role="tablist">
            <li class="nav-item col">
                <a class="nav-link active bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block"
                    id="description-tab" data-toggle="pill" data-number="1."
                    href="#description"
                    role="tab"
                    aria-controls="description" aria-selected="true">
                    <span class="number"></span> Add Employee
                </a>
            </li>
        </ul>
        <?php if (session()->getTempdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getTempdata('error'); ?>
            </div>
        <?php endif; ?>
        <div class="tab-content shadow-none p-0">
            <?= form_open_multipart(); ?>
            <div id="collapse-tabs-accordion">
                <div class="tab-pane tab-pane-parent fade show active px-0" id="description"
                    role="tabpanel"
                    aria-labelledby="description-tab">
                    <div class="card bg-transparent border-0">
                        <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0"
                                id="heading-description">
                            <h5 class="mb-0">
                                <button class="btn btn-lg collapse-parent btn-block border shadow-none"
                                            data-toggle="collapse" data-number="1."
                                            data-target="#description-collapse"
                                            aria-expanded="true"
                                            aria-controls="description-collapse">
                                <span class="number"></span> Update Employee
                                </button>
                            </h5>
                        </div>
                        <div id="description-collapse" class="collapse show collapsible"
                            aria-labelledby="heading-description"
                            data-parent="#collapse-tabs-accordion">
                            <div class="card-body py-4 py-md-0 px-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card mb-6">
                                            <div class="card-body p-6">
                                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Employee's Information</h3>
                                                <p class="card-text mb-5">Please Enter Fields</p>
                                                <div class="form-group">
                                                    <label for="name" class="text-heading">Employee's Name
                                                        <span class="text-muted">(mandatory)</span>
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg border-0"
                                                            id="name" name="name" value="<?= $employee['name'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="position" class="text-heading">Employee's Position</label>
                                                        <span class="text-muted">(mandatory)</span>
                                                    <input type="text" class="form-control form-control-lg border-0"
                                                            id="position" name="position" value="<?= $employee['position'] ?>">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card mb-6">
                                            <div class="card-body p-6">
                                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Uploaded Photo</h3>
                                                <p class="card-text mb-5">Please Attached photo</p>
                                                <div class="form-row mx-n2">
                                                    <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                        <div class="form-group mb-0">
                                                            <label for="employeeImage" class="text-heading">Employee's Image</label>
                                                            <input type="file" id="employeeImage" name="employeeImage" onchange="previewImage(this)">
                                                            <img id="imagePreview" class="img-fluid mt-2" style="display: none; height: 100px;">
                                                            <a href="#" type="button" id="removeImage" class="btn btn-danger mt-2" style="display: none;" onclick="removeImage()">Remove</a>
                                                            <h2 id="existingHeader" style="display: none;">Existing Image</h2><!-- addedd -->
                                                            <img id="existingImagePreview" class="img-fluid mt-2" style="display: none; height: 100px;"><!-- added -->
                                                            <a href="#" type="button" id="existingRemoveImage" class="btn btn-danger mt-2" style="display: none;" onclick="existingRemoveImage()">Remove</a><!-- addedd -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card mb-6">
                                            <div class="card-body p-6">
                                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Employee Description</h3>
                                                <p class="card-text mb-5">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit</p>
                                                <div class="form-group mb-0">
                                                    <label class="text-heading">Description</label>
                                                    <textarea class="form-control border-0" name="description" id="textcontent"><?= $employee['description'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="text-right">
                                <button class="btn btn-lg btn-primary" type="submit">SUBMIT </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</main>

<script src="<?= base_url('theme/js/tinymce/tinymce.min.js'); ?>"></script>
<script>
    tinymce.init({
        selector: '#textcontent'
    });

    function previewImage(input) {
        var preview = document.getElementById('imagePreview');
        var removeButton = document.getElementById('removeImage');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
            preview.style.display = 'block';
            removeButton.style.display = 'block';
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none';
            removeButton.style.display = 'none';
        }
    }

    function removeImage() {
        var preview = document.getElementById('imagePreview');
        var removeButton = document.getElementById('removeImage');
        var fileInput = document.getElementById('employeeImage');

        preview.src = '';
        preview.style.display = 'none';
        removeButton.style.display = 'none';
        fileInput.value = ''; // Clear the file input
    }

    // Add image validation logic
    document.querySelector('form').addEventListener('submit', function (event) {
        var fileInput = document.getElementById('employeeImage');
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

        // if (fileInput.files.length === 0 || !allowedExtensions.exec(fileInput.value)) {
        //     alert('Please select a valid image file (jpg, jpeg, png, gif).');
        //     event.preventDefault();
        //     return false;
        // }
    });

    // Check if there is an existing image path and display it
    document.addEventListener('DOMContentLoaded', function () {
        var baseUrl = "<?= base_url() ?>";
        var existingImagePath = "<?= $employee['image_path'] ?>";
        var preview = document.getElementById('existingImagePreview');
        var removeButton = document.getElementById('existingRemoveImage');
        var existingHeader = document.getElementById('existingHeader');// added
        console.log(baseUrl.existingImagePath);

        if (existingImagePath) {
            preview.src = baseUrl + existingImagePath;
            preview.style.display = 'block';
            removeButton.style.display = 'block';
            existingHeader.style.dispaly = 'block'; //added
        }
    });


    function existingRemoveImage() {
        var preview = document.getElementById('existingImagePreview');
        var fileInput = document.getElementById('employeeImage');
        var existingImage = "<?= $employee['image_path'] ?>"

        // Send AJAX request to remove the image
        $.ajax({
            url: '<?= base_url('cms/aboutus/remove-image')?>', // Updated AJAX URL
            type: 'POST',
            data: {existingImage: existingImage}, // Send the image path to the server
            success: function(response) {
                // Handle success
                preview.src = '';
                preview.style.display = 'none';
                fileInput.value = ''; // Clear the file input
                alert(response.message); // Display success message
            },
            error: function(xhr, status, error) {
                // Handle error
                alert('Error: ' + xhr.responseText); // Display error message
            }
        });
    }
</script>


<?= $this->endSection(); ?>