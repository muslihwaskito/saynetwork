<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <meta name="apps" content="USay">
    <meta name="author" content="USay">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="HpyGjfhe8T7rNyCNTsxyGbeE3TPXjeYAJviDGys4">
    <meta name="site-token" content="a084964ab04d678999685b0dNyCNrBkda12245d964">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Sign-in | USay</title>
    <link rel="stylesheet" href="css/vendor.bundle.css">
    <link rel="stylesheet" href="css/style-green.css">
    <!-- Core App v1402456720220116 @iO -->
</head>

<body class="page-ath theme-modern page-ath-modern page-ath-alt">

    <div class="page-ath-wrap">
        <div class="page-ath-content" style="background-image: unset;background-color: #010122;">
            <div class="page-ath-header"><a href="/" class="page-ath-logo"><img
                        class="page-ath-logo-img" src="/images/say-network-logo-1.png" srcset="/images/say-network-logo-1.png"
                        alt="USay"></a></div>
            <div class="page-ath-form">

                <h2 class="page-ath-heading">Sign up <small>Create New USay Account</small></h2>
                <form class="register-form" method="POST" action="/service/register.php" id="register">
                    <?php
                        if (isset($_SESSION['flash_message']) && $_SESSION['flash_message']['status'] == '401') {
                            echo '<ul>
                            <li><div class="alert alert-dismissible fade show alert-danger"><a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&nbsp;</a> '.$_SESSION['flash_message']['message'].'</div></li>
                        </ul>';
                            unset($_SESSION['flash_message']);
                        }
                    ?>
                    <div class="input-item">
                        <input type="text" placeholder="Your Name" class="input-bordered" name="name" value=""
                            minlength="3" data-msg-required="Required." data-msg-minlength="At least 3 chars."
                            required=""
                            style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: pointer;">
                            <?php
                            if (isset($_SESSION['flash_message']) && $_SESSION['flash_message']['status'] == '422' && $_SESSION['flash_message']['data']['name'] == '') {
                                echo '<small>Name is required</small>';
                            }
                            ?>
                    </div>
                    <div class="input-item">
                        <input type="email" placeholder="Your Email" class="input-bordered" name="email" value=""
                            data-msg-required="Required." data-msg-email="Enter valid email." required="">
                        <?php
                            if (isset($_SESSION['flash_message']) && $_SESSION['flash_message']['status'] == '422' && $_SESSION['flash_message']['data']['email'] == '') {
                                echo '<small>Email is required</small>';
                            }
                        ?>
                    </div>
                    <div class="input-item" style="display:none">
                        <input type="number" placeholder="Telefone" class="input-bordered" name="phone" value=""
                            data-msg-required="Required." data-msg-phone="Enter valid phone.">
                    </div>
                    <div class="input-item">
                        <input type="password" placeholder="Password" class="input-bordered" name="password"
                            id="password" minlength="6" data-msg-required="Required."
                            data-msg-minlength="At least 6 chars." required=""
                            style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"
                            aria-autocomplete="list">
                        <?php
                            if (isset($_SESSION['flash_message']) && $_SESSION['flash_message']['status'] == '422' && $_SESSION['flash_message']['data']['password'] == '') {
                                echo '<small>Password is required</small>';
                            }
                        ?>
                    </div>
                    <div class="input-item">
                        <input type="password" placeholder="Repeat Password" class="input-bordered"
                            name="password_confirmation" data-rule-equalto="#password" minlength="6"
                            data-msg-required="Required." data-msg-equalto="Enter the same value."
                            data-msg-minlength="At least 6 chars." required=""
                            style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                    </div>



                    <div class="input-item text-left">
                        <input name="terms" class="input-checkbox input-checkbox-md" id="agree" type="checkbox"
                            required="required" data-msg-required="You should accept our terms and policy.">
                        <label for="agree">I agree to the <a target="_blank"
                                href="https://app.uni-metaverso.com/terms-and-condition">Terms and Condition</a> and <a
                                target="_blank" href="https://app.uni-metaverso.com/privacy-policy">Privacy and
                                Policy</a>.</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                </form>


                <div class="gaps-4x"></div>
                <div class="form-note">
                    Already have an account ? <a href="/auth"> <strong>Sign in
                            instead</strong></a>
                </div>
            </div>


            <div class="page-ath-footer">
                <ul class="socials mb-3">
                    <li><a href="ttps://twitter.com/uSayNetwork"><em class=" fab
                            fa-twitter"></em></a></li>
                    <li><a href="https://t.me/uSayNetwork"><em class="fab fa-telegram-plane"></em></a></li>
                </ul>
                <div class="copyright-text">&copy; 2022 USay. All rights reserved</div>
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