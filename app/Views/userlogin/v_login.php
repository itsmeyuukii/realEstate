
<!-- LOGIN/Register MODAL Start-->
<div class="modal fade login-register login-register-modal" id="login-register-modal" tabindex="-1" role="dialog"
    aria-labelledby="login-register-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mxw-571" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 p-0">
                <div class="nav nav-tabs row w-100 no-gutters" id="myTab" role="tablist">
                    <a class="nav-item col-sm-3 ml-0 nav-link pr-6 py-4 pl-9 active fs-18" id="login-tab"
                        data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                    <a class="nav-item col-sm-3 ml-0 nav-link py-4 px-6 fs-18" id="register-tab" data-toggle="tab"
                        href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                    <div class="nav-item col-sm-6 ml-0 d-flex align-items-center justify-content-end">
                        <button type="button" class="close m-0 fs-23" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Login Modal -->
            <div class="modal-body p-4 py-sm-7 px-sm-8">
                <div class="tab-content shadow-none p-0" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <?php if (session()->getTempdata('error')): ?>
                            <div class="alert alert-danger">
                                <?= session()->getTempdata('error'); ?>
                            </div>
                            <script>
                                // Add this JavaScript code to keep the modal open on error
                                $(document).ready(function () {
                                    $('#login-register-modal').modal('show'); // Replace 'yourModalId' with the actual ID of your modal
                                });
                            </script>
                        <?php endif; ?>
                        <?= form_open('login'); ?>
                        <div class="form-group mb-4">
                            <label for="email" class="sr-only">Email</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text bg-gray-01 border-0 text-muted fs-18"
                                        id="inputGroup-sizing-lg">
                                        <i class="far fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control border-0 shadow-none fs-13" id="email"
                                    name="email" autocomplete="off" required placeholder="Your email">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password" class="sr-only">Password</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text bg-gray-01 border-0 text-muted fs-18">
                                        <i class="far fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control border-0 shadow-none fs-13" id="password"
                                    name="pass" required placeholder="Password">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gray-01 border-0 text-body fs-18">
                                        <i class="far fa-eye-slash"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remember-me"
                                    name="remember-me">
                                <label class="form-check-label" for="remember-me">
                                    Remember me
                                </label>
                            </div>
                            <a href="password-recovery.html" class="d-inline-block ml-auto text-orange fs-15">
                                Lost password?
                            </a>
                        </div>
                        <div class="d-flex p-2 border re-capchar align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="verify" name="verify">
                                <label class="form-check-label" for="verify">
                                    I'm not a robot
                                </label>
                            </div>
                            <a href="#" class="d-inline-block ml-auto">
                                <img src="<?= base_url('theme/images/re-captcha.png') ?>" alt="Re-capcha">
                            </a>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Log in</button>
                        <?= form_close(); ?>
                        <div class="divider text-center my-2">
                            <span class="px-4 bg-white lh-17 text">
                                or continue with
                            </span>
                        </div>
                        <div class="row no-gutters mx-n2">
                            <div class="col-4 px-2 mb-4">
                                <a href="#" class="btn btn-lg btn-block facebook text-white px-0">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <?= $googleButton ?>
                            <div class="col-4 px-2 mb-4">
                                <a href="#" class="btn btn-lg btn-block twitter text-white px-0">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Register Modal -->
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <?= form_open('register'); ?>
                        <div class="form-group mb-4">
                            <label for="username" class="sr-only">Username</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text bg-gray-01 border-0 text-muted fs-18">
                                        <i class="far fa-address-card"></i></span>
                                </div>
                                <input type="text" class="form-control border-0 shadow-none fs-13" id="full-name"
                                    name="username" autocomplete="off" required placeholder="Full name">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="email" class="sr-only">Email</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text bg-gray-01 border-0 text-muted fs-18">
                                        <i class="far fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control border-0 shadow-none fs-13" id="username"
                                    name="email" autocomplete="off" required placeholder="Your email">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="pass" class="sr-only">Password</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text bg-gray-01 border-0 text-muted fs-18">
                                        <i class="far fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control border-0 shadow-none fs-13" id="pass"
                                    name="pass" required placeholder="Password">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gray-01 border-0 text-body fs-18">
                                        <i class="far fa-eye-slash"></i>
                                    </span>
                                </div>
                            </div>
                            <p class="form-text">Minimum 8 characters with 1 number and 1 letter</p>
                        </div>
                        <div class="form-group mb-4">
                            <label for="cpass" class="sr-only">Confirm Password</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text bg-gray-01 border-0 text-muted fs-18">
                                        <i class="far fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control border-0 shadow-none fs-13" id="cpass"
                                    name="cpass" required placeholder="Confirm Password">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gray-01 border-0 text-body fs-18">
                                        <i class="far fa-eye-slash"></i>
                                    </span>
                                </div>
                            </div>
                            <p class="form-text">Confirm Password</p>
                        </div>
                        <button type="submit" name="register" class="btn btn-primary btn-lg btn-block">Sign up</button>
                        <?= form_close(); ?>
                        <div class="divider text-center my-2">
                            <span class="px-4 bg-white lh-17 text">
                                or continue with
                            </span>
                        </div>
                        <div class="row no-gutters mx-n2">
                            <div class="col-4 px-2 mb-4">
                                <a href="#" class="btn btn-lg btn-block facebook text-white px-0">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="col-4 px-2 mb-4">
                                <a href="#" class="btn btn-lg btn-block google px-0">
                                    <img src="<?= base_url('theme/images/google.png') ?>" alt="Google">
                                </a>
                            </div>
                            <div class="col-4 px-2 mb-4">
                                <a href="#" class="btn btn-lg btn-block twitter text-white px-0">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                        <div class="mt-2">By creating an account, you agree to HomeID
                            <a class="text-heading" href="#"><u>Terms of Use</u> </a> and
                            <a class="text-heading" href="#"><u>Privacy Policy</u></a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>