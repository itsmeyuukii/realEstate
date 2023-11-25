<?php echo $this->extend("layouts/base"); ?>

<?php echo $this->section("title"); ?>
<?php echo $this->endSection(); ?>


<?php echo $this->section("content"); ?>


<div>
    <h1>User View</h1>

    <div>
        <?php if (count($users)>0): ?>
            <?php foreach($users as $user): ?>
                <p>name: <?= $user['username'];?></p>
                <p>Email: <?= $user['email'];?> </p>
                <p>Status: <?= $user['active']; ?> </p>
            <?php endforeach ; ?>
        <?php endif ; ?>
    </div>
</div>

<?php echo $this->endSection();