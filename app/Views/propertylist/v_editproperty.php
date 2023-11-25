<?php $page_session = \Config\Services::session(); ?>

<?= $this->extend("layouts/admin_base"); ?>
<?= $this->section("content"); ?>
<link rel="stylesheet" href="<?= base_url('theme/css/sidebar.css'); ?>">

<input type="checkbox" class="sidebar-checkbox" id="sidebar-toggle">
<div class="sidebar">
    <ul class="links">
        <li><a href="<?= base_url('propertylist'); ?>">Property List</a></li>
        <li><a href="<?= base_url('propertylist/addproperty'); ?>">Add Property</a></li>
        <li><a href="<?= base_url('propertylist/editproperty'); ?>" class="act">Edit Property</a></li>
        
    </ul>
</div>
<label for="sidebar-toggle" class="hamburger-btn">
    <i class="fas fa-bars"></i>
</label>
<!-- Content Start Here -->
<div class="content-property">

    <div class="container ml-5">

        <?= form_open_multipart(); ?>
        <!-- Property Identification Starts here -->
        <div class="col-md-12 text-center">
            <h4>Edit Property</h4>
        </div>
        <div class="row g-3">
            <div class="col-md-3">
                <label for="" class="form-label">Property Type</label>
                <select id="propertyType" class="form-select" name="p_type">
                    <option value="HouseLot" <?php if ($properties->p_type === 'HouseLot')
                        echo 'selected'; ?>>House & Lot
                    </option>
                    <option value="Lot" <?php if ($properties->p_type === 'Lot')
                        echo 'selected'; ?>>Lot</option>
                    <option value="Condominium" <?php if ($properties->p_type === 'Condominium')
                        echo 'selected'; ?>>
                        Condominium</option>
                    <option value="TownHouse" <?php if ($properties->p_type === 'TownHouse')
                        echo 'selected'; ?>>TownHouse
                    </option>
                    <option value="Building" <?php if ($properties->p_type === 'Building')
                        echo 'selected'; ?>>Building
                    </option>
                    <option value="WareHouse" <?php if ($properties->p_type === 'WareHouse')
                        echo 'selected'; ?>>WareHouse
                    </option>
                    <option value="Island" <?php if ($properties->p_type === 'Island')
                        echo 'selected'; ?>>Island</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Property Classification</label>
                <select id="subPropertyType" class="form-select" name="p_class">
                    <option value="<?= $properties->p_class ?>" selected>
                        <?= $properties->p_class ?>
                    </option>
                    <option> Choose...</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Property Status</label>
                <select id="propertyStatus" class="form-select" name="p_status">
                    <option value="foreclosed" <?php if ($properties->p_status === 'foreclosed')
                        echo 'selected'; ?>>
                        ForeClosed</option>
                    <option value="non-foreclosed" <?php if ($properties->p_status === 'non-foreclosed')
                        echo 'selected'; ?>>Non-ForeClosed</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Ribbon text</label>
                <select id="" class="form-select" name="ribbon">
                    <option value="1" <?php if ($properties->ribbon === '1')
                        echo 'selected'; ?>>Featured</option>
                    <option value="2" <?php if ($properties->ribbon === '2')
                        echo 'selected'; ?>>Foreclose</option>
                    <option value="3" <?php if ($properties->ribbon === '3')
                        echo 'selected'; ?>>Private</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Furnishing</label>
                <select id="" class="form-select" name="furnish">
                    <option value="unfurnished" <?php if ($properties->furnish === 'unfurnished')
                        echo 'selected'; ?>>
                        Unfurnished</option>
                    <option value="semi-furnished" <?php if ($properties->furnish === 'semi-furnished')
                        echo 'selected'; ?>>Semi-furnished</option>
                    <option value="fully-furnished" <?php if ($properties->furnish === 'fully-furnished')
                        echo 'selected'; ?>>Fully-furnished</option>
                </select>
            </div>
            <div class="col-md-3" id="foreclosedStatusDiv">
                <label for="" class="form-label">ForeClosed Status</label>
                <select id="foreclosedStatus" class="form-select" name="fc_status">
                    <option value="1" <?php if ($properties->fc_status === '1')
                        echo 'selected'; ?>>Ready to Sell</option>
                    <option value="2" <?php if ($properties->fc_status === '2')
                        echo 'selected'; ?>>Clean title</option>
                    <option value="3" <?php if ($properties->fc_status === '3')
                        echo 'selected'; ?>>With Posesion</option>
                    <option value="4" <?php if ($properties->fc_status === '4')
                        echo 'selected'; ?>>No Posesion</option>
                    <option value="5" <?php if ($properties->fc_status === '5')
                        echo 'selected'; ?>>For Re-appraisal
                    </option>
                    <option value="6" <?php if ($properties->fc_status === '6')
                        echo 'selected'; ?>>With legal case
                    </option>
                    <option value="7" <?php if ($properties->fc_status === '7')
                        echo 'selected'; ?>>With illegal occupant
                    </option>
                    <option value="8" <?php if ($properties->fc_status === '8')
                        echo 'selected'; ?>>No right of
                        way/Landlocked</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Listing Type</label>
                <select id="" class="form-select" name="list_type">
                    <option value="buy" <?php if ($properties->list_type === 'buy')
                        echo 'selected'; ?>>Buy</option>
                    <option value="rent" <?php if ($properties->list_type === 'rent')
                        echo 'selected'; ?>>Rent</option>

                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Property Feature</label>
                <select id="" class="form-select" name="p_feature">
                    <option value="1" <?php if ($properties->p_feature === '1')
                        echo 'selected'; ?>>No Feature</option>
                    <option value="2" <?php if ($properties->p_feature === '2')
                        echo 'selected'; ?>>Featured</option>
                    <option value="3" <?php if ($properties->p_feature === '3')
                        echo 'selected'; ?>>Private Property
                    </option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Visibility</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="" name="v_status" value="show" <?php if ($properties->v_status === 'show')
                        echo 'checked'; ?>>
                    <label class="form-check-label" for="">Show</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="" name="v_status" value="hide" <?php if ($properties->v_status === 'hide')
                        echo 'checked'; ?>>
                    <label class="form-check-label" for="">Hide</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="" name="v_status" value="closed" <?php if ($properties->v_status === 'closed')
                        echo 'checked'; ?>>
                    <label class="form-check-label" for="">Closed</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="" name="v_status" value="cancel" <?php if ($properties->v_status === 'cancel')
                        echo 'checked'; ?>>
                    <label class="form-check-label" for="">Cancelled</label>
                </div>
            </div>
            <!-- Property Description Starts here -->
            <div class="col-md-12 text-center">
                <h4>Property Description</h4>
            </div>
            <div class="col-6">
                <label for="" class="form-label">Title Description</label>
                <input type="text" class="form-control" id="" name="p_title"
                    value="<?= set_value('p_title', isset($properties->p_title) ? $properties->p_title : '') ?>"
                    placeholder="Title Here">
            </div>
            <div class="col-6">
                <label for="" class="form-label">Property Code</label>
                <input type="text" class="form-control" id="" name="p_code"
                    value="<?= set_value('p_code', isset($properties->p_code) ? $properties->p_code : '') ?>">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Additional Information</label>
                <textarea id="textcontent"
                    name="p_desc"><?= set_value('p_desc', isset($properties->p_desc) ? $properties->p_desc : '') ?></textarea>
            </div>
            <!-- Additional Description Starts here -->
            <div class="col-md-12 text-center">
                <h4>Additional Description</h4>
            </div>

            <div class="col-3">
                <label for="" class="form-label">Lot area</label>
                <input type="text" class="form-control" id="" placeholder="&#13217"
                    value="<?= set_value('lot_area', isset($properties->lot_area) ? $properties->lot_area : '') ?>"
                    name="lot_area">
            </div>
            <div class="col-3">
                <label for="" class="form-label">Floor area</label>
                <input type="text" class="form-control" id="" placeholder="&#13217"
                    value="<?= set_value('floor_area', isset($properties->floor_area) ? $properties->floor_area : '') ?>"
                    name="floor_area">
            </div>
            <div class="col-6">
                <label for="" class="form-label">Complete Address</label>
                <input type="text" class="form-control" id="" placeholder="Complete Address"
                    value="<?= set_value('address', isset($properties->address) ? $properties->address : '') ?>"
                    name="address">
            </div>
            <!-- Location Starts here -->
            <div class="col-md-12 text-center">
                <h4>Property Location</h4>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Region</label>
                <select name="region_id" id="" class="form-select" onchange="fetchRegionData(this.value)">
                    <option selected>Choose...</option>
                    <?php foreach ($regions as $region): ?>
                        <option value="<?= $region->id ?>" <?php if ($properties->region_id == $region->id)
                              echo 'selected'; ?>>
                            <?= $region->region_name ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Province</label>
                <select name="province_id" id="provinceSelect" class="form-select"
                    onchange="fetchProvinceData(this.value)">
                    <option value="<?= $prov_data->id ?>" <?php if ($properties->province_id == $prov_data->id)
                          echo 'selected'; ?>>
                        <?= $prov_data->province_name ?>
                    </option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Municipality/City</label>
                <select name="municipality_id" id="municipalitySelect" class="form-select">
                    <option value="<?= $muni_data->id ?>" <?php if ($properties->municipality_id == $muni_data->id)
                          echo 'selected'; ?>>
                        <?= $muni_data->m_name ?>
                    </option>
                </select>
            </div>

            <!-- Images Starts here -->
            <div class="col-md-12 text-center">
                <h4>Property Images</h4>
            </div>
            <div class="card-image">
                <label for="images">Images</label>
                <input type="file" name="images[]" id="images" multiple class="form-control">
                <div class="form">
                    <div id="image_preview" style="width: 100%;"></div>
                </div>
            </div>

            <div class="col-12">
                <h4>Images Preview</h4>
                <div class="form2">
                    <div class="image_preview">
                        <?php foreach ($images as $image): ?>
                            <div class="img-div">
                                <img src="<?= $image->image_link ?>" class="img-responsive image img-thumbnail" alt="Image">
                                <div class="middle">
                                    <a href="#" class="btn btn-danger action-icon"
                                        data-image-link="<?= $image->image_link ?>">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <?= form_close(); ?>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Confirm Save
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary" id="submitBtn">Submit</button>
            </div>
        </div>
        <!-- Modal for Image Deletion Confirmation -->
        <div class="modal fade" id="deleteConfirmationModal" tabindex="-1"
            aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this image?
                        <span id=displayImageLink></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="deleteImageBtn">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="<?= base_url('theme/js/tinymce/tinymce.min.js'); ?>"></script>
<script src="<?= base_url('theme/js/script.js') ?>"></script>

<script>
    function fetchRegionData(regionId) {
        $.ajax({
            url: "<?= base_url("propertylist/province") ?>",
            method: "POST",
            data: {
                rId: regionId
            },
            success: function (result) {
                $('#provinceSelect').html(result);
            }
        });
    };
    function fetchProvinceData(provinceId) {
        $.ajax({
            url: "<?= base_url("propertylist/municipality") ?>",
            method: "POST",
            data: {
                pId: provinceId
            },
            success: function (result) {
                $('#municipalitySelect').html(result);
            }
        });
    };
    document.getElementById('submitBtn').addEventListener('click', function (e) {
        if (!document.getElementById('gridCheck').checked) {
            e.preventDefault(); // Prevent form submission
            alert("Please confirm before submitting.");
        }
    });

    // Modal confirmation
    $(document).ready(function () {
        // When the delete button is clicked, show the confirmation modal
        $('body').on('click', '.action-icon', function () {
            const imageLink = $(this).data('image-link');
            $('#deleteConfirmationModal').modal('show');

            $('#displayImageLink').text(imageLink);

            // Set the image link in the modal for reference
            $('#deleteConfirmationModal').data('image-link', imageLink);
        });

        // When the delete button in the modal is clicked, perform the deletion
        $('#deleteImageBtn').click(function () {
            const imageLink = $('#deleteConfirmationModal').data('image-link');
            // You can perform the deletion logic here (e.g., an AJAX request to delete the image from the server).
            $.ajax({
                method: 'POST',
                url: '<?= base_url('propertystaging/deleteimage') ?>',
                data:{
                    iLink: imageLink
                },
                success: function (data) {
                    if (data.success) {
                        alert(data.message);
                        // Optionally, you can remove the image from the view.
                        $(`[data-image-link="${imageLink}"]`).closest('.img-div').remove();
                    } else {
                        alert(data.message);
                    }
                    $('#deleteConfirmationModal').modal('hide');
                },
                error: function () {
                    alert('An error occurred during image deletion.');
                }
            });
        });
        // Close the modal when the "Close" button is clicked
        $('#deleteConfirmationModal .btn-close').click(function () {
            $('#deleteConfirmationModal').modal('hide');
        });

        // Close the modal when the "Cancel" button is clicked
        $('#deleteConfirmationModal .btn-secondary').click(function () {
            $('#deleteConfirmationModal').modal('hide');
        });
    });

</script>
<?= $this->endSection(); ?>