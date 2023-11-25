<?php $page_session = \Config\Services::session(); ?>

<?= $this->extend("layouts/admin_base"); ?>

<?= $this->section("content"); ?>

<link rel="stylesheet" href="<?= base_url('theme/css/sidebar.css'); ?>">



<input type="checkbox" class="sidebar-checkbox" id="sidebar-toggle">
<div class="sidebar">
    <ul class="links">
        <li><a href="<?= base_url('cms'); ?>" class="act">Home</a></li>
        <ul class="links mt-0">
            <li><a href="<?= base_url('cms/homecontent'); ?>" style="color:black;">Head Image</a></li>
        </ul>
        <li><a href="<?= base_url('cms/services'); ?>">Services</a></li>
        <li><a href="<?= base_url('cms/addproperty'); ?>">About Us</a></li>
        <li><a href="<?= base_url('cms/addproperty'); ?>">News & Events</a></li>
        <li><a href="<?= base_url('cms/addproperty'); ?>">Contact US</a></li>
    </ul>
</div>
<label for="sidebar-toggle" class="hamburger-btn">
    <i class="fas fa-bars"></i>
</label>

<section class="content-property">
    <div class="col justify-content-center">
        <h1>CMS</h1>
        <a href="<?= base_url('cms/homecontent/addcontent') ?>" class="btn btn-primary"><h6>Add header content</h6></a>

        <?php if (count($tableDatas) > 0): ?>
            </div>
            <div class="container-fluid py-4">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php foreach ($tableDatas as $t_data): ?>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <p class="text-muted mb-0">
                                            <?= $t_data['title'] ?>
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">
                                        <img src="<?= $t_data['image'] ?>" alt="" width="50" height="50"> 
                                    </p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">
                                        <?= $t_data['author'] ?>
                                    </p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">
                                        <?= $t_data['status'] ?>
                                    </p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">
                                        <a href="<?= base_url('cms/homecontent/edit/' . $t_data['id']);?>" class="btn btn-warning" style="text-decoration: none;">Edit </a>
                                        <a href="<?= base_url('cms/editcms');?>" class="btn btn-danger" style="text-decoration: none;">Delete</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            <?php else: ?>
                <p>No login information available.</p>
            <?php endif; ?>
            
        </div>
    </div>
</section>

        





<?= $this->endSection(); ?>