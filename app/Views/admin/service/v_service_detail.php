<?= $this->extend("layouts/admin_base") ?>

<?= $this->section("content") ?>

<link rel="stylesheet" href="<?= base_url('theme/css/sidebar.css'); ?>">

<main id="content" class="bg-gray-01">
    <div class="table-responsive">
        <?php if ($inquiry): ?>
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
                            <?= $inquiry['id'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    First Name
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $inquiry['first_name'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Last Name
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $inquiry['last_name'] ?>
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
                            <?= $inquiry['email'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Contact Number
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
                                    Date
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['date_created'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Message
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $sellerData['message'] ?>
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