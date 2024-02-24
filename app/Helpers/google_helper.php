<?php
function instantiateGoogleClient()
{
    // Google auth for login
    require_once APPPATH . "Libraries/vendor/autoload.php";

    $googleClient = new \Google_Client();
    $googleClient->setClientId("779344683721-3gh143m90c8q9jt0s70abkf1bi6qd4i2.apps.googleusercontent.com");
    $googleClient->setClientSecret("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");
    $googleClient->setRedirectUri("http://localhost/ci4_cms/loginwithgoogle");
    $googleClient->addScope("email");
    $googleClient->addScope("profile");

    return $googleClient;
}
function generateGoogleButton($googleClient)
{
    return '<div class="col-4 px-2 mb-4">
                <a href="' . $googleClient->createAuthUrl() . '" class="btn btn-lg btn-block google px-0">
                    <img src="' . base_url('/theme/images/google.png') . '" alt="Google">
                </a>
            </div>';
}
