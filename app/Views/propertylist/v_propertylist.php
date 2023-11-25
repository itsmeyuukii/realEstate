<?= $this->extend("layouts/admin_base") ?>

<?= $this->section("content") ?>

<link rel="stylesheet" href="<?= base_url('theme/css/sidebar.css'); ?>">



<input type="checkbox" class="sidebar-checkbox" id="sidebar-toggle">
<div class="sidebar">
    <ul class="links">
        <li><a href="<?= base_url('propertylist'); ?>" class="act">Property List</a></li>
        <li><a href="<?= base_url('propertylist/addproperty'); ?>">Add Property</a></li>
    </ul>
</div>
<label for="sidebar-toggle" class="hamburger-btn">
    <i class="fas fa-bars"></i>
</label>
<!-- Content Start Here -->
<div class="content-property">
    <div class="col">
        
            <h4 class="text-center my-1">
                Property List
            </h4>
            <?php if (count($properties) > 0): ?>
                <table class="table align-middle mb-0 bg-dark " id="myPropertyTable">
                    <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Property Code</th>
                            <th>Property Type</th>
                            <th>Property Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($properties as $property): ?>
                            <tr>
                                <td>
                                    <p class="fw-normal mb-1">
                                        <?= $property->id ?>
                                    </p>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <p class="fw-normal mb-1">
                                                <?= $property->p_code ?>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">
                                        <?= $property->p_type ?>
                                    </p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">
                                        <?= $property->p_title ?>
                                    </p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">
                                        <?= $property->v_status ?>
                                    </p>
                                </td>
                                <td>
                                    <a href="<?= base_url('propertylist/editproperty/' . $property->id) ?>"
                                        class="btn btn-warning" style="text-decoration: none;">Edit </a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal<?= $property->id ?>">
                                        Delete
                                    </button>

                                    <!-- Delete Confirmation Modal -->
                                    <div class="modal fade" id="deleteModal<?= $property->id ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this: 
                                                    <?= $property->p_code ?>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <a href="<?= base_url('propertylist/deleteproperty/' . $property->id) ?>"
                                                        class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Of Modal -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No login information available.</p>
            <?php endif; ?>
        

    </div>



    <?= $this->endSection(); ?>