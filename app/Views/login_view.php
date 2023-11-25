<?= $this->extend("layouts/home_base"); ?>

<?= $this->section("page_title");?>
    MSG-Homes | Login
<?= $this->endSection(); ?>


<?= $this->section("header_login"); ?>
<!-- LOGIN MODAL START-->     
<div class="modalContent" id="modalContent">
    <div class="mainModal">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="close-btn"
            onclick="document.getElementById('modalContent').style.display = 'none'">&times;</div>

        <div class="signup">
            <form action="">
                <label class="label" for="chk" aria-hidden="true">Signup</label>
                <input class="input" type="text" name="txt" placeholder="User name" required="">
                <input class="input" type="email" name="email" placeholder="Email" required="">
                <input class="input" type="password" name="pswd" placeholder="Password" required="">
                <button class="button"> Signup</button>
            </form>
        </div>

        <div class="login">
            <?= form_open(); ?>
                <label class="label" for="chk" aria-hidden="true">Login</label>
                <input class="input" type="email" name="email" placeholder="Email" required="">
                <input class="input" type="password" name="pass" placeholder="Password" required="">
                <button type= "submit" name="login" class="button">Login</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<!-- LOGIN MODAL END-->
<?= $this->endSection(); ?>




<?= $this->section("content"); ?>






<?= $this->endSection(); ?>


<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-5">
            <div class="primary mt-5">
                <h1>Login</h1>
            </div>

            <?php if (session()->getTempdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getTempdata('error'); ?>
                </div>
            <?php endif; ?>


            <?= form_open(); ?>

            <div class="form-group mt-4">
                <label for=""> Email</label>
                <input type="text" name="email" class="form-control">

            </div>
            <div class="form-group mt-4">
                <label for=""> Password</label>
                <input type="password" name="pass" class="form-control">
            </div>
            <div class="form-group mt-4">
                <input type="submit" name="login" class="btn btn-primary" value="Login">
            </div>
            <?php if (isset($loginButton)): ?>

                <div class="form-group mt-4">
                    <a href="<?= $loginButton ?>"><img src="<?= base_url('theme/img/google.svg') ?>" alt=""></a>
                </div>

            <?php endif; ?>
            <?= form_close(); ?>

        </div>
    </div>
</div>