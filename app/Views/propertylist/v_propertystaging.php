<?php $page_session = \Config\Services::session(); ?>

<?= $this->extend("layouts/admin_base"); ?>
<?= $this->section("content"); ?>
<link rel="stylesheet" href="<?= base_url('theme/css/sidebar.css'); ?>">

<input type="checkbox" class="sidebar-checkbox" id="sidebar-toggle">
<div class="sidebar">
    <ul class="links">
        <li><a href="<?= base_url('propertylist'); ?>">Property List</a></li>
        <li><a href="<?= base_url('addproperty'); ?>" class="act">Add Property</a></li>
        <li><a href="#">ForeClosed</a></li>
        <li><a href="#">Private</a></li>
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
            <h4>Property Identification</h4>
        </div>
        <div class="col-6">
            <label for="" class="form-label">Property Code</label>
            <input type="text" class="form-control" id="" placeholder="Property Code here" name="p_code">
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

        <div class="col-12 mt-5">
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
    document.getElementById('submitBtn').addEventListener('click', function (e) {
        if (!document.getElementById('gridCheck').checked) {
            e.preventDefault(); // Prevent form submission
            alert("Please confirm before submitting.");
        }
    });
    $(document).ready(function () {
        var fileArr = [];
        $("#images").change(function () {
            // check if fileArr length is greater than 0
            if (fileArr.length > 0) fileArr = [];

            $('#image_preview').html("");
            var total_file = document.getElementById("images").files;
            if (!total_file.length) return;
            for (var i = 0; i < total_file.length; i++) {
                if (total_file[i].size > 1048576) {
                    return false;
                } else {
                    fileArr.push(total_file[i]);
                    $('#image_preview').append("<div class='img-div' id='img-div" + i + "'><img src='" + URL.createObjectURL(event.target.files[i]) + "' class='img-responsive image img-thumbnail' title='" + total_file[i].name + "'><div class='middle'><button id='action-icon' value='img-div" + i + "' class='btn btn-danger' role='" + total_file[i].name + "'><i class='fa fa-trash'></i></button></div></div>");
                }
            }
        });

        $('body').on('click', '#action-icon', function (evt) {
            var divName = this.value;
            var fileName = $(this).attr('role');
            $(`#${divName}`).remove();

            for (var i = 0; i < fileArr.length; i++) {
                if (fileArr[i].name === fileName) {
                    fileArr.splice(i, 1);
                }
            }
            document.getElementById('images').files = FileListItem(fileArr);
            evt.preventDefault();
        });

        function FileListItem(file) {
            file = [].slice.call(Array.isArray(file) ? file : arguments)
            for (var c, b = c = file.length, d = !0; b-- && d;) d = file[b] instanceof File
            if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
            for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(file[c])
            return b.files
        }
    });
</script>



<?= $this->endSection(); ?>