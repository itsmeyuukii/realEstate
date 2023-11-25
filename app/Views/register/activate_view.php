
    
    <?= $this->extend("layouts/base"); ?>

    <?= $this->section("content"); ?>



    <div class="container mt-5">
        <h1 class="row justify-content-center align-items-center">Activation Process</h1>
            <?php if(isset($error)): ?>
                <div class="alert alert-danger text-center">
                    <?= $error; ?>
                </div>
            <?php endif; ?>

            <?php if(isset($success)): ?>
                <div class="alert alert-success text-center">
                    <?= $success; ?>
                </div>
            <?php endif; ?>

    </div>


    <?= $this->endSection(); ?>
