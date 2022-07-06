<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header('Location: /auth/register.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <meta name="apps" content="USay">
    <meta name="author" content="USay">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="rudaMBfrCx0REZUKlBWzHIwxhdNQ1dv1li2DG7Fj">
    <meta name="site-token" content="a084964ab04d678999ea637aEZUK03Nda12245d964">
    <link rel="shortcut icon" href="https://app.uni-metaverso.com/images/favicon.png">
    <title>USay Token Balance | USay</title>
    <link rel="stylesheet" href="https://app.uni-metaverso.com/assets/css/vendor.bundle.css?ver=20220116140">
    <link rel="stylesheet" href="https://app.uni-metaverso.com/assets/css/style-green.css?ver=20220116140">
    <!-- Core App v1402456720220116 @iO -->
</head>

<body class="user-dashboard page-user theme-modern">
    <div class="topbar-wrap">
        <div class="topbar is-sticky">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="topbar-nav d-lg-none">
                        <li class="topbar-nav-item relative">
                            <a class="toggle-nav" href="#">
                                <div class="toggle-icon">
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <a class="topbar-logo" href="https://app.uni-metaverso.com">
                        <!-- <img height="40" src="https://app.uni-metaverso.com/images/logo-light.png" srcset="https://app.uni-metaverso.com/images/logo-light2x.png" alt="USay"> -->
                        <img height="40" src="/images/say-network-logo-1.png"
                            srcset="/images/say-network-logo-1.png"
                            alt="USay">
                    </a>
                    <ul class="topbar-nav">
                        <li class="topbar-nav-item relative">
                            <span class="user-welcome d-none d-lg-inline-block">Welcome! <?php echo $_SESSION['user']['name'] ?></span>
                            <a class="toggle-tigger user-thumb" href="#"><em class="ti ti-user"></em></a>
                            <div
                                class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
                                <div class="user-status">
                                    <h6 class="text-white"><?php echo $_SESSION['user']['email'] ?> <small
                                            class="text-white-50">(UD05630)</small></h6>
                                    <h6 class="user-status-title">Token Balance</h6>
                                    <div class="user-status-balance">0 <small>USay</small></div>
                                </div>
                                <ul class="user-links">
                                    <li><a href="/admin/account"><i
                                                class="ti ti-id-badge"></i>My Profile</a></li>
                                </ul>
                                <ul class="user-links bg-light">
                                    <li><a href="/service/logout"><i
                                                class="ti ti-power-off"></i>Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="navbar">
            <div class="container">
                <div class="navbar-innr">
                    <ul class="navbar-menu" id="main-nav" style="flex-wrap: wrap;">
                        <li><a href="/admin/index"><em class="ikon ikon-dashboard"></em> Dashboard</a></li>
                        <li><a href="/admin/contribute"><em class="ikon ikon-coins"></em> Buy Token</a></li>
                        <!-- <li><a href="https://app.uni-metaverso.com/user/staking"><em class="ikon ikon-coins"></em> Staking</a></li> -->
                        <!-- <li><a href="/admin/transaction"><em class="ikon ikon-transactions"></em> Transactions</a></li> -->
                        <li><a href="/admin/account"><em class="ikon ikon-user"></em> Profile</a></li>
                        <li><a href="/" target="_blank"><em class="ikon ikon-home-link"></em> Main Site</a></li>
                        <!-- <li><a href="https://t.me/UniMetaversoBot?start=r08016730640" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-headset-vr" viewBox="0 0 16 16"
                                    style="margin-right: 6px;margin-top: 2px;">
                                    <path
                                        d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                                </svg>
                                Airdrop</a></li> -->
                        <!-- <li><a href="https://t.me/UniMetaversoBot?start=r08016730640" target="_blank"><em class="ikon ikon-my-token"></em>Airdrop</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">

                <div class="main-content col-lg-8">
                    <div class="d-lg-none">
                        <a href="javascript:void(0)"
                            class="btn btn-danger btn-xl btn-between w-100 mgb-1-5x user-wallet">Conectar metamask <em
                                class="ti ti-arrow-right"></em></a>
                        <div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>
                    </div>
                    <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">My USay Token</h4>
                            </div>
                            <div class="gaps-1x"></div>

                            <div class="card-bordered nopd">
                                <div class="card-innr">
                                    <div class="row guttar-vr-15px align-items-center">
                                        <div class="col-md-8">
                                            <div class="total-block">
                                                <h6 class="total-title ucap">Token Balance</h6>
                                                <span class="total-amount-lead">0 USay
                                                </span>
                                                <p class="total-note">Equivalent to <span>0 USD</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-md-right">
                                            <a href="https://app.uni-metaverso.com/user/contribute"
                                                class="btn btn-primary">Buy More Token</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sap sap-light"></div>
                                <div class="card-innr">
                                    <div class="total-block">
                                        <h5 class="total-title-sm">Total Token Amount</h5>
                                        <span class="total-amount">0 USay</span>
                                    </div>
                                    <div class="total-block">
                                        <ul class="list total-wg">
                                            <li>
                                                <span class="total-title-xs">Purchased Token</span>
                                                <span class="total-amount-sm">0 USay</span>
                                            </li>
                                            <li>
                                                <span class="total-title-xs">Referral Token</span>
                                                <span class="total-amount-sm">0 USay</span>
                                            </li>
                                            <li>
                                                <span class="total-title-xs">Bonuses Token</span>
                                                <span class="total-amount-sm">0 USay</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sap sap-light"></div>
                                <div class="card-innr">
                                    <div class="total-block">
                                        <h5 class="total-title-sm">Total Contributed</h5>
                                        <span class="total-amount">0 USD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="aside sidebar-right col-lg-4">
                    <div class="d-none d-lg-block">
                        <a href="javascript:void(0)"
                            class="btn btn-danger btn-xl btn-between w-100 mgb-1-5x user-wallet">Conectar metamask <em
                                class="ti ti-arrow-right"></em></a>
                        <div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>
                    </div>
                    <div class="account-info card">
                        <div class="card-innr">
                            <div class="user-account-status">
                                <h6 class="card-title card-title-sm">Your Account Status</h6>
                                <div class="gaps-1-5x"></div>
                                <ul class="btn-grp">
                                    <li><a href="javascript:void(0)" class="btn btn-xs btn-auto btn-success">Email
                                            Verified</a></li>
                                </ul>
                            </div>
                            <div class="gaps-2x"></div>
                            <div class="user-receive-wallet" style="display:none">
                                <h6 class="card-title card-title-sm">Seu pix</h6>
                                <div class="d-flex justify-content-between">
                                    <span>
                                        <span></span>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-pix"
                                            class="link link-ucap">Editar</a></span>
                                </div>
                            </div>
                            <div class="gaps-2-5x"></div>
                            <div class="user-receive-wallet">
                                <h6 class="card-title card-title-sm">Receiving Wallet</h6>
                                <div class="gaps-1x"></div>
                                <div class="d-flex justify-content-between">Add Your Wallet Address<a
                                        href="javascript:void(0)" data-toggle="modal" data-target="#edit-wallet"
                                        class="user-wallet link link-ucap">Add</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="referral-info card">
                        <div class="card-innr">
                            <div class="card-head has-aside">
                                <h6 class="card-title card-title-sm">Earn with Referral</h6>
                                <div class="card-opt"><a href="https://app.uni-metaverso.com/user/referral?referral"
                                        class="link ucap">More<em class="fas fa-angle-right ml-1"></em></a></div>
                            </div>
                            <p class="pdb-0-5x"><strong>Invite your friends & family.</strong></p>
                            <div class="copy-wrap mgb-0-5x"><span class="copy-feedback"></span><em
                                    class="copy-icon fas fa-link"></em><input type="text" class="copy-address"
                                    value="https://app.uni-metaverso.com/invite?ref=UD05630" disabled /><button
                                    class="copy-trigger copy-clipboard"
                                    data-clipboard-text="https://app.uni-metaverso.com/invite?ref=UD05630"><em
                                        class="ti ti-files"></em></button></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center order-lg-last text-lg-right pdb-2x pb-lg-0">
                    <ul class="socials">
                        <li><a href="https://twitter.com/drive_crypto?s=21&t=Zj5U8m98dliL5dhs5NOqCQ""><em class=" fab
                                fa-twitter"></em></a></li>
                        <li><a href="https://t.me/drivecrypto_official"><em class="fab fa-telegram-plane"></em></a></li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div
                        class="d-flex align-items-center justify-content-center justify-content-lg-start guttar-15px pdb-1-5x pb-lg-2">
                        <div class="copyright-text">&copy; 2022 USay. All rights reserved</div>
                        <div class="lang-switch relative"><a href="javascript:void(0)"
                                class="lang-switch-btn toggle-tigger">EN<em class="ti ti-angle-up"></em></a>
                            <div class="toggle-class dropdown-content dropdown-content-up">
                                <ul class="lang-list">
                                    <li><a href="https://app.uni-metaverso.com/locale?lang=en">EN</a></li>
                                    <li><a href="https://app.uni-metaverso.com/locale?lang=pt">pt</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="footer-links align-items-center justify-content-center justify-content-lg-start">
                        <li><a href="https://app.uni-metaverso.com/how-to-buy">How to buy?</a></li>
                        <li><a href="https://app.uni-metaverso.com/faq">FAQ </a></li>
                        <li><a href="https://app.uni-metaverso.com/privacy-policy">Privacy and Policy</a></li>
                        <li><a href="https://app.uni-metaverso.com/terms-and-condition">Terms and Condition</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="ajax-modal"></div>
    <div class="page-overlay">
        <div class="spinner"><span class="sp sp1"></span><span class="sp sp2"></span><span class="sp sp3"></span></div>
    </div>

    <link rel="stylesheet" href="https://app.uni-metaverso.com/css/custom.css?ver=20220116140">
    <script>
        var base_url = "https://app.uni-metaverso.com",


            user_wallet_address = "https://app.uni-metaverso.com/user/ajax/account/wallet-form",
            csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var msg_wrong = "Something is Wrong!",
            msg_cancel_order = "Do you really cancel your order?",
            msg_unable_process = "Unable process request!",
            msg_sure = "Are you sure?",
            msg_unable_perform = "Unable to perform!",
            msg_use_modern_browser = "Please use a modern browser to properly view this template!",
            num_fmt = true;
    </script>
    <script src="https://app.uni-metaverso.com/assets/js/jquery.bundle.js?ver=20220116140"></script>
    <script src="https://app.uni-metaverso.com/assets/js/script.js?ver=20220116140"></script>
    <script src="https://app.uni-metaverso.com/assets/js/app.js?ver=20220116140"></script>
    <script type="text/javascript">
    </script>
</body>

</html>