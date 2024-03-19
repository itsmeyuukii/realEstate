<?= $this->extend("layouts/admin_base") ?>

<?= $this->section("content") ?>

<link rel="stylesheet" href="<?= base_url('theme/css/sidebar.css'); ?>">

<main id="content" class="bg-gray-01">
    <div class="table-responsive">
        <?php if ($review): ?>
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
                            <?= $review['id'] ?>
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
                            <?= $review['name'] ?>
                        </td>
                    </tr>
                    <tr role="row">
                        <td class="align-middle text-center">
                            <a href="dashboard-preview-invoice.html">
                                <span class="inv-number">
                                    Agent Name
                                </span>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <?= $review['agent'] ?>
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
                            <?= $review['review'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <p>No information available.</p>
        <?php endif; ?>
    </div>
</main>

<?= $this->endSection(); ?>