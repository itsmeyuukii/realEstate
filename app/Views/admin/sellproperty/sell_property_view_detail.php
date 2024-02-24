<?= $this->extend("layouts/admin_base") ?>

<?= $this->section("content") ?>

<link rel="stylesheet" href="<?= base_url('theme/css/sidebar.css'); ?>">

<main id="content" class="bg-gray-01">
    <div class="table-responsive">
        <?php if ($sellerData): ?>
            <table id="seller-list" class="table table-hover bg-white border rounded-lg">
                <thead>
                    <tr role="row">
                        <th class="py-6 text-center">Label</th>
                        <th class="py-6 text-center">User Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    ID
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['id'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Full Name
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['full_name'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Phone number
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['phone'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Email
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['email'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Property Type
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['type'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Property Class
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['class'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Address
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['address'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Maps
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['maps'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Floor Area
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['floor_area'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Lot Area
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['lot_area'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <p>No login information available.</p>
        <?php endif; ?>
    </div>
</main>

<?= $this->endSection(); ?>