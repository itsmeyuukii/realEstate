<?= $this->extend("layouts/admin_base") ?>

<?= $this->section("content") ?>

<link rel="stylesheet" href="<?= base_url('theme/css/sidebar.css'); ?>">

<input type="checkbox" class="sidebar-checkbox" id="sidebar-toggle">
<div class="sidebar">
    <ul class="links">
        <li><a href="<?= base_url('cms'); ?>" class="act">Home</a></li>
        <ul>
            <li class="links mt-0" ><a href="<?= base_url('cms/homecontent'); ?>" style="color:black;">Head Image</a></li>
        </ul>
        <li><a href="<?= base_url('propertylist/addproperty'); ?>">Services</a></li>
        <li><a href="<?= base_url('propertylist/addproperty'); ?>">About Us</a></li>
        <li><a href="<?= base_url('propertylist/addproperty'); ?>">News & Events</a></li>
        <li><a href="<?= base_url('propertylist/addproperty'); ?>">Contact US</a></li>
    </ul>
</div>
<label for="sidebar-toggle" class="hamburger-btn">
    <i class="fas fa-bars"></i>
</label>
<!-- Content Start Here -->
<div class="content-property">
    <div class="col">

        <div class="col">
            <div class="card">
                <h4 class="text-center my-1">
                    Recent Members
                </h4>
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Section</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p class="fw-normal mb-1">Head Image</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Date</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">
                                   <a href="<?= base_url('cms/homecontent')?>" class="btn btn-warning p-1" style="text-decoration: none;">Edit</a>
                                </p>
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <?= $this->endSection(); ?>