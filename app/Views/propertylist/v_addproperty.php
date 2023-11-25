<?php $page_session = \Config\Services::session(); ?>

<?= $this->extend("layouts/admin_base"); ?>
<?= $this->section("content"); ?>
<link rel="stylesheet" href="<?= base_url('theme/css/sidebar.css'); ?>">

<input type="checkbox" class="sidebar-checkbox" id="sidebar-toggle">
<div class="sidebar">
    <ul class="links">
        <li><a href="<?= base_url('propertylist'); ?>">Property List</a></li>
        <li><a href="<?= base_url('propertylist/addproperty'); ?>" class="act">Add Property</a></li>
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
            <h4>Add Property</h4>
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

        <div class="row g-3">
            <div class="col-md-3">
                <label for="" class="form-label">Property Type</label>
                <select id="propertyType" class="form-select" name="p_type">
                    <option selected value="">Choose...</option>
                    <option value="House and Lot">House and Lot</option>
                    <option value="Lot">Lot</option>
                    <option value="Condominium">Condominium</option>
                    <option value="TownHouse">TownHouse</option>
                    <option value="Buiding">Building</option>
                    <option value="WareHouse">WareHouse</option>
                    <option value="Island">Island</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Property Classification</label>
                <select id="subPropertyType" class="form-select" name="p_class">
                    <option selected>Choose...</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Property Status</label>
                <select id="propertyStatus" class="form-select" name="p_status">
                    <option selected>Choose...</option>
                    <option value="foreclosed">ForeClosed</option>
                    <option value="non-foreclosed">Non-ForeClosed</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Ribbon text</label>
                <select id="" class="form-select" name="ribbon">
                    <option selected>Choose...</option>
                    <option value="1">Featured</option>
                    <option value="2">Foreclose</option>
                    <option value="3">Private</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Furnishing</label>
                <select id="" class="form-select" name="furnish">
                    <option selected>Choose...</option>
                    <option value="unfurnished">Unfurnished</option>
                    <option value="semi-furnished">Semi-furnished</option>
                    <option value="fully-furnished">Fully-furnished</option>
                </select>
            </div>
            <div class="col-md-3" id="foreclosedStatusDiv">
                <label for="" class="form-label">ForeClosed Status</label>
                <select id="foreclosedStatus" class="form-select" name="fc_status">
                    <option selected>Choose...</option>
                    <option value="1">Ready to Sell</option>
                    <option value="2">Clean title</option>
                    <option value="3">With Posesion</option>
                    <option value="4">No Posesion</option>
                    <option value="5">For Re-appraisal</option>
                    <option value="6">With legal case</option>
                    <option value="7">With illegal occupant</option>
                    <option value="8">No right of way/Landlocked</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Listing Type</label>
                <select id="" class="form-select" name="list_type">
                    <option selected>Choose...</option>
                    <option value="buy">Buy</option>
                    <option value="rent">Rent</option>

                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Property Feature</label>
                <select id="" class="form-select" name="p_feature">
                    <option selected>Choose...</option>
                    <option value="1">No Feature</option>
                    <option value="2">Featured</option>
                    <option value="3">Private Property</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Visibility</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="" name="v_status" value="show" checked>
                    <label class="form-check-label" for="">Show</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="" name="v_status" value="hide">
                    <label class="form-check-label" for="">Hide</label>
                </div>
            </div>
            <!-- Property Description Starts here -->
            <div class="col-md-12 text-center">
                <h4>Property Description</h4>
            </div>
            <div class="col-6">
                <label for="" class="form-label">Title Description</label>
                <input type="text" class="form-control" id="" placeholder="Title Here" name="p_title">
            </div>
            <div class="col-6">
                <label for="" class="form-label">Property Code</label>
                <input type="text" class="form-control" id="" placeholder="Property Code here" name="p_code">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Additional Information</label>
                <textarea id="textcontent" name="p_desc"></textarea>
            </div>
            <!-- Additional Description Starts here -->
            <div class="col-md-12 text-center">
                <h4>Additional Description</h4>
            </div>

            <div class="col-3">
                <label for="" class="form-label">Lot area</label>
                <input type="text" class="form-control" id="" placeholder="&#13217" name="lot_area">
            </div>
            <div class="col-3">
                <label for="" class="form-label">Floor area</label>
                <input type="text" class="form-control" id="" placeholder="&#13217" name="floor_area">
            </div>
            <div class="col-6">
                <label for="" class="form-label">Complete Address</label>
                <input type="text" class="form-control" id="" placeholder="Complete Address" name="address">
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
                        <option value="<?= $region->id ?>">
                            <?= $region->region_name ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Province</label>
                <select name="province_id" id="provinceSelect" class="form-select"
                    onchange="fetchProvinceData(this.value)">
                    <option selected>Choose...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Municipality/City</label>
                <select name="municipality_id" id="municipalitySelect" class="form-select">
                    <option selected>Choose...</option>
                </select>
            </div>
            <div class="row g-3">
                <div class="col-md-12 text-center">
                    <h4>Property Images</h4>
                </div>
                <div class="card-image">
                    <label for="images">Images</label>
                    <input type="file" name="images[]" id="images" multiple class="form-control" required>
                    <div class="form">
                        <div id="image_preview" style="width:100%;"></div>
                    </div>
                </div>
            </div>

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
        <?= form_close(); ?>
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
    // Add an event listener to the Property Status select
    document.getElementById('propertyStatus').addEventListener('change', function () {
        // Get the selected value
        var selectedValue = this.value;

        // Get the Foreclosed Status div
        var foreclosedStatusDiv = document.getElementById('foreclosedStatusDiv');

        // Hide or show based on the selected value
        if (selectedValue === 'non-foreclosed') {
            foreclosedStatusDiv.style.display = 'none';
        } else {
            foreclosedStatusDiv.style.display = 'block';
        }
    });

</script>



<?= $this->endSection(); ?>