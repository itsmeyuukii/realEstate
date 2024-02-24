<?= $this->extend("layouts/admin_base") ?>

<?= $this->section("content") ?>

<!-- Content Start Here -->
<div class="col justify-content-center">
        <h1>CMS</h1>
        <a href="<?= base_url('cms/homecontent/addcontent') ?>" class="btn btn-primary"><h6>Add header content</h6></a>

        <?php if (count($tableDatas) > 0): ?>
            </div>
            <div class="container-fluid py-4">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php foreach ($tableDatas as $t_data): ?>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <p class="text-muted mb-0">
                                            <?= $t_data['id'] ?>
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
                                        <a href="<?= base_url('cms/homecontent/edit/' . $t_data['id']);?>" class="btn btn-warning" style="text-decoration: none;">Edit </a>
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


<?= $this->endSection(); ?>