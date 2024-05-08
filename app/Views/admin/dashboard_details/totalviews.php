<?php echo $this->extend("layouts/admin_base"); ?>

<?= $this->section('page_title'); ?>
Dashboard | Admin
<?= $this->endSection(); ?>
<?= $this->section('username'); ?>
Welcome
<?= $userdata->username ?> <!-- use ucfirst -->
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
<main id="content" class="bg-gray-01">
    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10 invoice-listing">
        <div class="mb-6">
            <div class="row">
                <div class="col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center">
                    <div class="d-flex form-group mb-0 align-items-center">
                        <label for="list_length" class="d-block mr-2 mb-0">Results:</label>
                        <select name="list_length" id="list_length" aria-controls="seller-list"
                            class="form-control form-control-lg mr-2 selectpicker"
                            data-style="bg-white btn-lg h-52 py-2 border">
                            <option value="10" <?= ($perPage == 10) ? 'selected' : '' ?>>10</option>
                            <option value="20" <?= ($perPage == 20) ? 'selected' : '' ?>>20</option>
                            <option value="50" <?= ($perPage == 50) ? 'selected' : '' ?>>50</option>
                        </select>
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
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <?php if (count($totalviewers) > 0): ?>
                <table id="seller-list" class="table table-hover bg-white border rounded-lg">
                    <thead>
                        <tr role="row">
                            <th class="py-6 text-center">Id</th>
                            <th class="py-6 text-center">Property Code</th>
                            <th class="py-6 text-center">views</th>
                            <th class="py-6 text-center">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($totalviewers as $totalviewer): ?>
                            <tr role="row">
                                <td class="align-middle text-center"><a href="dashboard-preview-invoice.html"><span class="inv-number">
                                            <?= $totalviewer['id'] ?>
                                        </span></a>
                                </td>
                                <td class="align-middle text-center">
                                    <?= $totalviewer['p_code'] ?>
                                </td>
                                <td class="align-middle text-center">
                                    <?= $totalviewer['total_views'] ?>
                                </td>
                                <td class="align-middle text-center">
                                    <?= $totalviewer['view_date'] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $pager->makeLinks($page, $perPage, $total, 'pagination_view') ?>
                <div class="mt-6 text-center">
                    Showing
                    <?= (($page * $perPage) - $perPage + 1) . "-" . (($page * $perPage) - $perPage + count($totalviewers)) ?>
                    Result out of
                    <?= number_format($total) ?>
                </div>
            <?php else: ?>
                <p>No login information available.</p>
            <?php endif; ?>
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


<?= $this->endSection();?>