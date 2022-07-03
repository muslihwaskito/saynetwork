<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <meta name="apps" content="DriveCrypto - Drive2Earn">
    <meta name="author" content="DriveCrypto - Drive2Earn">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="HpyGjfhe8T7rNyCNTsxyGbeE3TPXjeYAJviDGys4">
    <meta name="site-token" content="a084964ab04d678999685b0dNyCNrBkda12245d964">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Sign-in | DriveCrypto - Drive2Earn</title>
    <link rel="stylesheet" href="css/vendor.bundle.css">
    <link rel="stylesheet" href="css/style-green.css">
    <!-- Core App v1402456720220116 @iO -->
</head>

<body class="page-ath theme-modern page-ath-modern page-ath-alt">

    <div class="page-ath-wrap">
        <div class="page-ath-content">
            <div class="page-ath-header"><a href="https://app.uni-metaverso.com" class="page-ath-logo"><img
                        class="page-ath-logo-img" src="images/62b50a451369a.png" srcset="images/62b50a451369a.png"
                        alt="DriveCrypto - Drive2Earn"></a></div>
            <div class="page-ath-form">
                <h2 class="page-ath-heading">Sign in<small>with your DriveCrypto - Drive2Earn
                        Account</small></h2>
                <form class="login-form validate validate-modern" action="/service/login.php"
                    method="POST">
                    <input type="hidden" name="_token" value="HpyGjfhe8T7rNyCNTsxyGbeE3TPXjeYAJviDGys4">
                    <div class="input-item">
                        <input type="email" placeholder="Your Email" data-msg-required="Required."
                            class="input-bordered" name="email" value required autofocus>
                    </div>
                    <div class="input-item">
                        <input type="password" placeholder="Password" minlength="6" data-msg-required="Required."
                            data-msg-minlength="At least 6 chars." class="input-bordered" name="password" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="input-item text-left">
                            <input class="input-checkbox input-checkbox-md" type="checkbox" name="remember"
                                id="remember-me">
                            <label for="remember-me">Remember Me</label>
                        </div>
                        <div>
                            <a href="https://app.uni-metaverso.com/password/reset">Forgot password?</a>
                            <div class="gaps-2x"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>

                <div class="gaps-4x"></div>
                <div class="form-note">
                    Don’t have an account? <a href="/auth/register"> <strong>Sign up
                            here</strong></a>
                </div>
            </div>


            <div class="page-ath-footer">
                <ul class="socials mb-3">
                    <li><a href="https://twitter.com/drive_crypto?s=21&t=Zj5U8m98dliL5dhs5NOqCQ" "><em class=" fab
                            fa-twitter"></em></a></li>
                    <li><a href="https://t.me/drivecrypto_official"><em class="fab fa-telegram-plane"></em></a></li>
                </ul>
                <ul class="footer-links guttar-20px align-items-center">
                    <li><a href="https://app.uni-metaverso.com/privacy-policy">Privacy and Policy</a></li>
                    <li><a href="https://app.uni-metaverso.com/terms-and-condition">Terms and Condition</a></li>
                    <li>
                        <div class="lang-switch relative"><a href="javascript:void(0)"
                                class="lang-switch-btn toggle-tigger">EN<em class="ti ti-angle-up"></em></a>
                            <div class="toggle-class dropdown-content dropdown-content-up">
                                <ul class="lang-list">
                                    <li><a href="https://app.uni-metaverso.com/locale?lang=en">EN</a></li>
                                    <li><a href="https://app.uni-metaverso.com/locale?lang=pt">pt</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="copyright-text">&copy; 2022 DriveCrypto - Drive2Earn. All rights reserved</div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="css/custom.css">
    <script>
        var base_url = "https://app.uni-metaverso.com",
            csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            layouts_style = "modern";
    </script>
    <script src="js/jquery.bundle.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
        jQuery(function () {
            var $frv = jQuery('.validate');
            if ($frv.length > 0) {
                $frv.validate({
                    errorClass: "input-bordered-error error"
                });
            }
        });
    </script>

</body>

</html>