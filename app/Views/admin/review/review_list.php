<?= $this->extend("layouts/admin_base") ?>

<?= $this->section("content") ?>

<link rel="stylesheet" href="<?= base_url('theme/css/sidebar.css'); ?>">

<main id="content" class="bg-gray-01">
    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10 invoice-listing">
        <div class="mb-6">
            <div class="row">
                <div class="col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center">
                    <div class="d-flex form-group mb-0 align-items-center">
                        <label for="list_length" class="d-block mr-2 mb-0">Results:</label>
                        <select name="list_length" id="list_length" aria-controls="review-list"
                            class="form-control form-control-lg mr-2 selectpicker"
                            data-style="bg-white btn-lg h-52 py-2 border">
                            <option value="10" <?= ($perPage == 10) ? 'selected' : '' ?>>10</option>
                            <option value="20" <?= ($perPage == 20) ? 'selected' : '' ?>>20</option>
                            <option value="50" <?= ($perPage == 50) ? 'selected' : '' ?>>50</option>
                        </select>
                    </div>
                    <div class="align-self-center">
                        <a href="<?= base_url('admin/add') ?>" class="btn btn-primary btn-lg" tabindex="0" aria-controls="admin-list">
                            <span>Add New</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3">
                    <div class="input-group input-group-lg bg-white mb-0 position-relative mr-2">
                        <input type="text" class="form-control bg-transparent border-1x" id="getName"
                            placeholder="Search...">
                        <div class="input-group-append position-absolute pos-fixed-right-center">
                            <button class="btn bg-transparent border-0 text-gray lh-1" type="button"
                                id="searchButton"><i class="fal fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="align-self-center">
                        <button class="btn btn-danger btn-lg" tabindex="0"
                            aria-controls="review-list"><span>Delete</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <?php if (count($reviews) > 0): ?>
                <table id="review-list" class="table table-hover bg-white border rounded-lg">
                    <thead>
                        <tr role="row">
                            <th class="no-sort py-6 pl-6"><label class="new-control new-checkbox checkbox-primary m-auto">
                                    <input type="checkbox" class="new-control-input chk-parent select-customers-info">
                                </label>
                            </th>
                            <th class="py-6 text-center">Id</th>
                            <th class="py-6 text-center">Full Name</th>
                            <th class="py-6 text-center">Agent Name</th>
                            <th class="py-6 text-center">Email</th>
                            <th class="py-6 text-center">Date</th>
                            <th class="no-sort py-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reviews as $review): ?>
                            <tr role="row">
                                <td class="checkbox-column py-6 pl-6"><label
                                        class="new-control new-checkbox checkbox-primary m-auto">
                                        <input type="checkbox" class="new-control-input child-chk select-customers-info">
                                    </label></td>
                                <td class="align-middle text-center"><a href="dashboard-preview-invoice.html"><span class="inv-number">
                                            <?= $review['id'] ?>
                                        </span></a>
                                </td>
                                <td class="align-middle text-center">
                                    <?= $review['name'] ?>
                                </td>
                                <td class="align-middle text-center">
                                    <?= $review['agent'] ?>
                                </td>
                                <td class="align-middle text-center">
                                    <?= $review['created_at'] ?>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="<?= base_url('review-detail/' . $review['id']) ?>"
                                        data-toggle="tooltip" title="Edit"
                                        class="d-inline-block fs-18 text-muted hover-primary mr-5"><i
                                            class="fal fa-eye"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#deleteConfirmationModal"
                                        data-property-id="<?= $review['id'] ?>"
                                        class="delete-review-btn d-inline-block fs-18 text-muted hover-primary">
                                        <i class="fal fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $pager->makeLinks($page, $perPage, $total, 'pagination_view') ?>
                <div class="mt-6 text-center">
                    Showing
                    <?= (($page * $perPage) - $perPage + 1) . "-" . (($page * $perPage) - $perPage + count($review)) ?>
                    Result out of
                    <?= number_format($total) ?>
                </div>
            <?php else: ?>
                <p>No login information available.</p>
            <?php endif; ?>
        </div>

    </div>
    <!-- Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this request?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="<?= base_url('review/delete/' . $review['id']) ?>"
                        id="confirmDeleteButton" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    $(document).ready(function () {
        $("#list_length").on("change", function () {
            var selectedValue = $(this).val();
            // Update the URL with the new selected value
            var newUrl = "<?= current_url() ?>?page=<?= $page ?>&list_length=" + selectedValue;
            window.location.href = newUrl;
        });

        $("#getName").on("keyup", function () {
            var getName = $(this).val().toLowerCase();
            // alert(getName);

            $("tbody tr").each(function () {
                var rowText = $(this).text().toLowerCase();
                // console.log('Row Text:', rowText);

                if (rowText.includes(getName)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>


<?= $this->endSection(); ?>