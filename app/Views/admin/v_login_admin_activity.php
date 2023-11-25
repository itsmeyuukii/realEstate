<?php $this->extend("layouts/admin_base"); ?>

<?= $this->section('page_title'); ?>
  Dashboard | Admin
<?= $this->endSection(); ?>


<?php echo $this->section("content"); ?>

<section class= "container mt-5">
<div class="col justify-content-center text-center">
    <div class="card">
        <h4 class="text-center my-1">
            Login Activity
        </h4>
        <?php if (count($login_info)>0): ?>
        </div>
        <div class="container-fluid py-4">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Email</th>
                        <th>Device</th>
                        <th>IP address</th>
                        <th>Logged in</th>
                        <th>Logged out</th>
                    </tr>
                </thead>
                <?php foreach ($login_info as $info): ?>
                <tbody>
                    <tr>
                    <td>
                            <div class="d-flex align-items-center">  
                                <p class="text-muted mb-0"><?= $info->email ?></p>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">  
                                <p class="text-muted mb-0"><?= $info->agent ?></p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?= $info->ip ?></p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?= date("l d M Y h:i:s a", strtotime($info->login_time)) ?></p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?= $info->logout_time ?></p>
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
<?php echo $this->endSection(); ?>