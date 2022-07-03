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
    <meta name="apps" content="DriveCrypto - Drive2Earn">
    <meta name="author" content="DriveCrypto - Drive2Earn">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="rudaMBfrCx0REZUKlBWzHIwxhdNQ1dv1li2DG7Fj">
    <meta name="site-token" content="a084964ab04d678999ea637aEZUK03Nda12245d964">
    <link rel="shortcut icon" href="https://app.uni-metaverso.com/images/favicon.png">
    <title>Purchase Token | DriveCrypto - Drive2Earn</title>
    <link rel="stylesheet" href="https://app.uni-metaverso.com/assets/css/vendor.bundle.css?ver=20220116140">
    <link rel="stylesheet" href="https://app.uni-metaverso.com/assets/css/style-green.css?ver=20220116140">
    <script>
        var access_url = "https://app.uni-metaverso.com/user/ajax/contribute/access";
        var minimum_token = 1000,
            maximum_token = 300000,
            token_price = {
                "usd": 0.04,
                "eur": 0.038,
                "gbp": 0.030536,
                "cad": 0.05028,
                "aud": 0.05336,
                "try": 0.5876,
                "rub": 3.4232,
                "inr": 3.194,
                "brl": 0.212,
                "nzd": 0.05764,
                "pln": 0.16668,
                "jpy": 4.9136,
                "myr": 0.16924,
                "idr": 574.88,
                "ngn": 23.392,
                "mxn": 0.7976,
                "php": 2.7316,
                "chf": 0.037284,
                "thb": 1.3432,
                "sgd": 0.05436,
                "czk": 0.8824,
                "nok": 0.34656,
                "zar": 0.5964,
                "sek": 0.37276,
                "kes": 4.7088,
                "nad": 0.4804,
                "dkk": 0.23836,
                "hkd": 0.31364,
                "huf": 13.1584,
                "pkr": 0.6804,
                "egp": 0.7364,
                "clp": 30.8972,
                "cop": 148.286,
                "jmd": 6.8096,
                "eth": 2.162e-5,
                "btc": 1.48e-6,
                "ltc": 0.00037656,
                "xrp": 0.06152,
                "xlm": 0.1722,
                "bch": 0.00013248,
                "bnb": 0.00019072,
                "usdt": 0.04,
                "trx": 0.574,
                "usdc": 0.04,
                "dash": 0.0004116,
                "waves": 0.000792,
                "xmr": 0.00018204,
                "busd": 0.04,
                "ada": 0.04524,
                "doge": 0.27644,
                "sol": 0.00036404,
                "uni": 0.0035684,
                "link": 0.0023752,
                "cake": 0.004744,
                "base": 0.04
            },
            token_symbol = "DriveCrypto",
            base_bonus = 50,
            amount_bonus = {
                1: 0
            },
            decimals = {
                "min": 3,
                "max": 8
            },
            base_currency = "usd",
            base_method = "brl";
        var max_token_msg = "Maximum you can purchase 300,000 token per contribution.",
            min_token_msg = "Enter minimum 1,000 token and select currency!";
    </script>
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
                        <!-- <img height="40" src="https://app.uni-metaverso.com/images/logo-light.png" srcset="https://app.uni-metaverso.com/images/logo-light2x.png" alt="DriveCrypto - Drive2Earn"> -->
                        <img height="40" src="https://app.uni-metaverso.com/uploads/62b50a451369a.png"
                            srcset="https://app.uni-metaverso.com/uploads/62b50a451369a.png"
                            alt="DriveCrypto - Drive2Earn">
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
                                    <div class="user-status-balance">0 <small>DriveCrypto</small></div>
                                </div>
                                <ul class="user-links">
                                    <li><a href="https://app.uni-metaverso.com/user/account"><i
                                                class="ti ti-id-badge"></i>My Profile</a></li>
                                    <li><a href="https://app.uni-metaverso.com/user/referral"><i
                                                class="ti ti-infinite"></i>Referral</a></li>
                                    <li><a href="https://app.uni-metaverso.com/user/account/activity"><i
                                                class="ti ti-eye"></i>Activity</a></li>
                                </ul>
                                <ul class="user-links bg-light">
                                    <li><a href="https://app.uni-metaverso.com/log-out"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                                class="ti ti-power-off"></i>Logout</a></li>
                                </ul>
                                <form id="logout-form" action="https://app.uni-metaverso.com/logout" method="POST"
                                    style="display: none;"> <input type="hidden" name="_token"
                                        value="rudaMBfrCx0REZUKlBWzHIwxhdNQ1dv1li2DG7Fj"> </form>
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
                        <li><a href="/admin"><em class="ikon ikon-dashboard"></em> Dashboard</a></li>
                        <li><a href="/admin/contribute"><em class="ikon ikon-coins"></em> Buy Token</a></li>
                        <!-- <li><a href="https://app.uni-metaverso.com/user/staking"><em class="ikon ikon-coins"></em> Staking</a></li> -->
                        <li><a href="/admin/transaction"><em class="ikon ikon-transactions"></em> Transactions</a></li>
                        <li><a href="/admin/account"><em class="ikon ikon-user"></em> Profile</a></li>
                        <li><a href="/admin/balance"><em class="ikon ikon-my-token"></em> My Token</a></li>
                        <li><a href="/" target="_blank"><em class="ikon ikon-home-link"></em> Main Site</a></li>
                        <li><a href="https://t.me/UniMetaversoBot?start=r08016730640" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-headset-vr" viewBox="0 0 16 16"
                                    style="margin-right: 6px;margin-top: 2px;">
                                    <path
                                        d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                                </svg>
                                Airdrop</a></li>
                        <!-- <li><a href="https://t.me/UniMetaversoBot?start=r08016730640" target="_blank"><em class="ikon ikon-my-token"></em>Airdrop</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">

                <div class="main-content  col-lg-8">
                    <div class="d-lg-none">
                        <a href="javascript:void(0)"
                            class="btn btn-danger btn-xl btn-between w-100 mgb-1-5x user-wallet">Conectar metamask <em
                                class="ti ti-arrow-right"></em></a>
                        <div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>
                    </div>

                    <div class="content-area card">
                        <div class="card-innr">
                            <form action="javascript:void(0)" method="post" class="token-purchase">
                                <div class="card-head">
                                    <h4 class="card-title">
                                        Choose currency and calculate DRIVECRYPTO token price
                                    </h4>
                                </div>
                                <div class="card-text">
                                    <p>You can buy our DRIVECRYPTO token using the below currency choices to become part
                                        of our project.</p>
                                </div>

                                <div class="token-currency-choose payment-list">
                                    <div class="row guttar-15px">
                                        <div class="col-6">
                                            <div class="payment-item pay-option">
                                                <input class="pay-option-check pay-method" type="radio" id="payusd"
                                                    name="paymethod" value="usd">
                                                <label class="pay-option-label" for="payusd">
                                                    <span class="pay-title">
                                                        <em class="pay-icon pay-icon-usd ikon ikon-sign-usd"></em>
                                                        <span class="pay-cur">USD</span>
                                                    </span>
                                                    <span class="pay-amount">0.04 USD</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="payment-item pay-option">
                                                <input class="pay-option-check pay-method" type="radio" id="paybrl"
                                                    name="paymethod" value="brl" checked>
                                                <label class="pay-option-label" for="paybrl">
                                                    <span class="pay-title">
                                                        <em class="pay-icon pay-icon-brl ikon ikon-sign-brl"></em>
                                                        <span class="pay-cur">BRL</span>
                                                    </span>
                                                    <span class="pay-amount">0.212 BRL</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="payment-item pay-option">
                                                <input class="pay-option-check pay-method" type="radio" id="paybnb"
                                                    name="paymethod" value="bnb">
                                                <label class="pay-option-label" for="paybnb">
                                                    <span class="pay-title">
                                                        <em class="pay-icon pay-icon-bnb ikon ikon-sign-bnb"></em>
                                                        <span class="pay-cur">BNB</span>
                                                    </span>
                                                    <span class="pay-amount">0.00019072 BNB</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="payment-item pay-option">
                                                <input class="pay-option-check pay-method" type="radio" id="payusdt"
                                                    name="paymethod" value="usdt">
                                                <label class="pay-option-label" for="payusdt">
                                                    <span class="pay-title">
                                                        <em class="pay-icon pay-icon-usdt ikon ikon-sign-usdt"></em>
                                                        <span class="pay-cur">USDT</span>
                                                    </span>
                                                    <span class="pay-amount">0.04 USDT</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="payment-item pay-option">
                                                <input class="pay-option-check pay-method" type="radio" id="payusdc"
                                                    name="paymethod" value="usdc">
                                                <label class="pay-option-label" for="payusdc">
                                                    <span class="pay-title">
                                                        <em class="pay-icon pay-icon-usdc ikon ikon-sign-usdc"></em>
                                                        <span class="pay-cur">USDC</span>
                                                    </span>
                                                    <span class="pay-amount">0.04 USDC</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="payment-item pay-option">
                                                <input class="pay-option-check pay-method" type="radio" id="paybusd"
                                                    name="paymethod" value="busd">
                                                <label class="pay-option-label" for="paybusd">
                                                    <span class="pay-title">
                                                        <em class="pay-icon pay-icon-busd ikon ikon-sign-busd"></em>
                                                        <span class="pay-cur">BUSD</span>
                                                    </span>
                                                    <span class="pay-amount">0.04 BUSD</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-head">
                                    <h4 class="card-title">Amount of contribute</h4>
                                </div>
                                <div class="card-text">
                                    <p>Enter the amount you would like to contribute in order to calculate the amount of
                                        tokens you will receive. The calculator below helps to convert the required
                                        quantity of tokens into the amount of your selected currency.</p>
                                </div>
                                <div class="token-contribute">
                                    <div class="token-calc">
                                        <div class="token-pay-amount payment-get"><input
                                                class="input-bordered input-with-hint token-number" type="text"
                                                id="token-number" value="" min="1000" max="300000">
                                            <div class="token-pay-currency"><span
                                                    class="input-hint input-hint-sap payment-get-cur payment-cal-cur ucap">DriveCrypto</span>
                                            </div>
                                        </div>
                                        <div class="token-received token-received-alt">
                                            <div class="token-eq-sign">=</div>
                                            <div class="token-received-amount">
                                                <h5 class="token-amount pay-amount-u">0.00</h5>
                                                <div class="token-symbol pay-currency ucap">brl</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="token-calc-note note note-plane token-note">
                                        <div class="note-box">
                                            <span class="note-icon">
                                                <em class="fas fa-info-circle"></em>
                                            </span>
                                            <span class="note-text text-light"><strong class="min-amount">212</strong>
                                                <span class="pay-currency ucap">brl</span> (<strong
                                                    class="min-token">1,000</strong>
                                                <span class="token-symbol ucap">DriveCrypto</span>) Minimum contribution
                                                amount is required.</span>
                                        </div>
                                        <div class="note-text note-text-alert"></div>
                                    </div>
                                </div>

                                <div class="token-overview-wrap">
                                    <div class="token-overview">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="token-bonus token-bonus-sale">
                                                    <span class="token-overview-title">+ Sale Bonus 50%</span>
                                                    <span
                                                        class="token-overview-value bonus-on-sale tokens-bonuses-sale">0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="token-total">
                                                    <span class="token-overview-title font-bold">Total
                                                        DriveCrypto</span>
                                                    <span
                                                        class="token-overview-value token-total-amount text-primary payment-summary-amount tokens-total">0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note note-plane note-danger note-sm pdt-1x pl-0">
                                        <p>Your contribution will be calculated based on exchange rate at the moment
                                            when your transaction is confirmed.</p>
                                    </div>
                                </div>

                                <div class="pay-buttons">
                                    <div class="pay-buttons pt-0">
                                        <a data-type="offline" href="#payment-modal"
                                            class="btn btn-primary btn-between payment-btn disabled token-payment-btn offline_payment">Make
                                            Payment&nbsp;<i class="ti ti-wallet"></i></a>
                                    </div>
                                    <div class="pay-notes">
                                        <div class="note note-plane note-light note-md font-italic">
                                            <em class="fas fa-info-circle"></em>
                                            <p>Tokens will appear in your account after payment successfully made and
                                                approved by our team. Please note that, DRIVECRYPTO token will be
                                                distributed after the token sales end-date.</p>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="data_amount" value="0">
                                <input type="hidden" id="data_currency" value="BRL">
                            </form>
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
                    <div class="token-statistics card card-token">
                        <div class="card-innr">
                            <div class="token-balance token-balance-with-icon">
                                <div class="token-balance-icon"><img
                                        src="https://app.uni-metaverso.com/images/token-symbol-light.png" alt=""></div>
                                <div class="token-balance-text">
                                    <h6 class="card-sub-title">Token Balance</h6>
                                    <span class="lead">0 <span>DriveCrypto <em class="fas fa-info-circle fs-11"
                                                data-toggle="tooltip" data-placement="right"
                                                title="Equivalent to ~ USD"></em></span></span>
                                    <span class="lead" style="margin-left: 10px"> <span> <em>USD</em> ~ </span>
                                </div>
                            </div>
                            <div class="token-balance token-balance-s2">
                                <h6 class="card-sub-title">Your Contribution in</h6>
                                <ul class="token-balance-list">
                                    <li class="token-balance-sub"><span class="lead">~</span><span
                                            class="sub">USD</span></li>
                                    <li class="token-balance-sub"><span class="lead">~</span><span
                                            class="sub">BNB</span></li>
                                    <li class="token-balance-sub"><span class="lead">~</span><span
                                            class="sub">BRL</span></li>
                                </ul>
                            </div>
                            <div class="token-balance token-balance-s2">
                            </div>
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
                        <div class="copyright-text">&copy; 2022 DriveCrypto - Drive2Earn. All rights reserved</div>
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
    <div class="modal fade modal-payment" id="payment-modal" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content"></div>
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