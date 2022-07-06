<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header('Location: /auth/index');
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
    <title>Purchase Token | USay</title>
    <link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=20220116140">
    <link rel="stylesheet" href="assets/css/style-green.css?ver=20220116140">
    <script>
        var access_url = "/service/payment";
        var minimum_token = 0,
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
                "bnb": 0.00001,
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
            token_symbol = "USay",
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
                        <!-- <img height="40" src="https://app.uni-metaverso.com/images/logo-light.png" srcset="https://app.uni-metaverso.com/images/logo-light2x.png" alt="USay"> -->
                        <img height="40" src="/images/say-network-logo-1.png"
                            srcset="/images/say-network-logo-1.png"
                            alt="USay">
                    </a>
                    <ul class="topbar-nav">
                        <li class="topbar-nav-item relative">
                            <span class="user-welcome d-none d-lg-inline-block">Welcome!
                                <?php echo $_SESSION['user']['name'] ?></span>
                            <a class="toggle-tigger user-thumb" href="#"><em class="ti ti-user"></em></a>
                            <div
                                class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
                                <div class="user-status">
                                    <h6 class="text-white"><?php echo $_SESSION['user']['email'] ?> <small
                                            class="text-white-50">(UD05630)</small></h6>
                                    <h6 class="user-status-title"><?php echo $_SESSION['user']['name'] ?></h6>
                                    <!-- <div class="user-status-balance">0 <small>USay</small></div> -->
                                </div>
                                <ul class="user-links">
                                    <li><a href="/admin/account"><i
                                                class="ti ti-id-badge"></i>My Profile</a></li>
                                </ul>
                                <ul class="user-links bg-light">
                                    <li><a href="/service/logout"><i class="ti ti-power-off"></i>Logout</a></li>
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

                <div class="main-content  col-lg-8">
                    <!-- <div class="d-lg-none">
                        <a href="javascript:void(0)"
                            class="btn btn-danger btn-xl btn-between w-100 mgb-1-5x user-wallet">Conectar metamask <em
                                class="ti ti-arrow-right"></em></a>
                        <div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>
                    </div> -->

                    <div class="content-area card">
                        <div class="card-innr">
                            <form action="javascript:void(0)" method="post" class="token-purchase">
                                <div class="card-head">
                                    <h4 class="card-title">
                                        Choose currency and calculate USAY token price
                                    </h4>
                                </div>
                                <div class="card-text">
                                    <p>You can buy our USAY token using the below currency choices to become part
                                        of our project.</p>
                                </div>

                                <div class="token-currency-choose payment-list">
                                    <div class="row guttar-15px">
                                        <div class="col-6">
                                            <div class="payment-item pay-option">
                                                <input class="pay-option-check pay-method" type="radio" id="payusd"
                                                    name="paymethod" value="eth">
                                                <label class="pay-option-label" for="payusd">
                                                    <span class="pay-title">
                                                        <em class="pay-icon pay-icon-usd">
                                                            <svg width="20" height="20" viewBox="0 0 256 417" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                                                <g fill="currentColor">
                                                                    <polygon fill="#343434" points="127.9611 0 125.1661 9.5 125.1661 285.168 127.9611 287.958 255.9231 212.32"></polygon>
                                                                    <polygon fill="#8C8C8C" points="127.962 0 0 212.32 127.962 287.959 127.962 154.158"></polygon>
                                                                    <polygon fill="#3C3C3B" points="127.9611 312.1866 126.3861 314.1066 126.3861 412.3056 127.9611 416.9066 255.9991 236.5866"></polygon>
                                                                    <polygon fill="#8C8C8C" points="127.962 416.9052 127.962 312.1852 0 236.5852"></polygon>
                                                                    <polygon fill="#141414" points="127.9611 287.9577 255.9211 212.3207 127.9611 154.1587"></polygon>
                                                                    <polygon fill="#393939" points="0.0009 212.3208 127.9609 287.9578 127.9609 154.1588"></polygon>
                                                                </g>
                                                            </svg>

                                                        </em>
                                                        <span class="pay-cur">ETH</span>
                                                    </span>
                                                    <!-- <span class="pay-amount">
                                                        0.00002162 ETH</span> -->
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="col-6">
                                            <div class="payment-item pay-option">
                                                <input class="pay-option-check pay-method" type="radio" id="paybrl"
                                                    name="paymethod" value="tron" checked>
                                                <label class="pay-option-label" for="paybrl">
                                                    <span class="pay-title">
                                                        <em class="pay-icon pay-icon-brl ikon ikon-sign-brl"></em>
                                                        <span class="pay-cur">TRON</span>
                                                    </span>
                                                    <span class="pay-amount">0.212 TRON</span>
                                                </label>
                                            </div>
                                        </div> -->
                                        <div class="col-6">
                                            <div class="payment-item pay-option">
                                                <input class="pay-option-check pay-method" type="radio" id="paybnb"
                                                    name="paymethod" value="bnb">
                                                <label class="pay-option-label" for="paybnb">
                                                    <span class="pay-title">
                                                        <em class="pay-icon pay-icon-bnb">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 2000 2000"><g fill="currentColor"><path d="M611.59 840.42l388.4-388.39 388.6 388.59 226-226L999.99 0 385.6 614.42l225.99 226M.006 999.969l226.007-226.007 225.992 225.993L226 1225.96zM611.59 1159.58l388.4 388.39 388.59-388.58 226.12 225.88-.11.12L999.99 2000l-614.41-614.4-.32-.32 226.33-225.7M1548.013 1000.093l226.007-226.006 225.992 225.992-226.006 226.007z"/><path d="M1229.22 999.88h.1L999.99 770.55 830.51 940.03h-.01l-19.47 19.48-40.16 40.17-.32.31.32.33 229.12 229.13 229.33-229.33.11-.13-.21-.11"/></g></svg>
                                                        </em>
                                                        <span class="pay-cur">BNB</span>
                                                    </span>
                                                    <!-- <span class="pay-amount">0.00001 BNB</span> -->
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="payment-item pay-option">
                                                <input class="pay-option-check pay-method" type="radio" id="payusdt"
                                                    name="paymethod" value="usdt">
                                                <label class="pay-option-label" for="payusdt">
                                                    <span class="pay-title">
                                                        <em class="pay-icon pay-icon-usdt">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000" width="20" height="20">
                                                                <g fill="currentColor">
                                                                <path d="M1000,0c552.26,0,1000,447.74,1000,1000S1552.24,2000,1000,2000,0,1552.38,0,1000,447.68,0,1000,0" fill="currentColor"/><path d="M1123.42,866.76V718H1463.6V491.34H537.28V718H877.5V866.64C601,879.34,393.1,934.1,393.1,999.7s208,120.36,484.4,133.14v476.5h246V1132.8c276-12.74,483.48-67.46,483.48-133s-207.48-120.26-483.48-133m0,225.64v-0.12c-6.94.44-42.6,2.58-122,2.58-63.48,0-108.14-1.8-123.88-2.62v0.2C633.34,1081.66,451,1039.12,451,988.22S633.36,894.84,877.62,884V1050.1c16,1.1,61.76,3.8,124.92,3.8,75.86,0,114-3.16,121-3.8V884c243.8,10.86,425.72,53.44,425.72,104.16s-182,93.32-425.72,104.18" fill="#fff"/>
                                                                </g>
                                                            </svg>
                                                        </em>
                                                        <span class="pay-cur">USDT</span>
                                                    </span>
                                                    <!-- <span class="pay-amount">0.04 USDT</span> -->
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="payment-item pay-option">
                                                <input class="pay-option-check pay-method" type="radio" id="payusdc"
                                                    name="paymethod" value="btc">
                                                <label class="pay-option-label" for="payusdc">
                                                    <span class="pay-title">
                                                        <em class="pay-icon pay-icon-usdc">
                                                            <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                            <g fill="currentColor">
                                                                <path d="M359.9,244.3c24.4-12.5,39.9-34.6,36.3-71.5c-4.7-50.4-46.1-67.3-100.9-72V31h-42.7v67.9c-11.1,0-22.4,0.3-33.8,0.6V31
                                                                    h-42.7v69.8c-15.7,0.5-33.9,0.2-85.6,0v45.4c33.7-0.6,51.3-2.8,55.4,18.8v191.1c-2.6,17.1-16.3,14.7-46.8,14.1L90.6,421
                                                                    c77.8,0,85.6,0.3,85.6,0.3V481h42.7v-58.9c11.6,0.3,23,0.3,33.8,0.3V481h42.7v-59.8c71.5-3.9,119.2-21.9,125.6-89.2
                                                                    C425.8,278,400.3,253.9,359.9,244.3L359.9,244.3z M219.6,149.3c24.1,0,99.4-7.5,99.4,42.7c0,47.9-75.3,42.4-99.4,42.4V149.3
                                                                    L219.6,149.3z M219.6,370.5v-93.6c28.8,0,117-8,117,46.8C336.6,376.6,248.4,370.5,219.6,370.5L219.6,370.5z"/>
                                                            </g>
                                                            </svg>

                                                        </em>
                                                        <span class="pay-cur">BTC</span>
                                                    </span>
                                                    <!-- <span class="pay-amount">0.00000148 BTC</span> -->
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="col-6">
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
                                        </div> -->
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
                                <div id="nobnb">
                                    <!-- <div class="token-contribute">
                                        <div class="token-calc">
                                            <div class="token-pay-amount payment-get"><input
                                                    class="input-bordered input-with-hint token-number" type="text"
                                                    id="token-number" value="" min="1000" max="300000">
                                                <div class="token-pay-currency"><span
                                                        class="input-hint input-hint-sap payment-get-cur payment-cal-cur ucap">USay</span>
                                                </div>
                                            </div>
                                            <div class="token-received token-received-alt">
                                                <div class="token-eq-sign">=</div>
                                                <div class="token-received-amount">
                                                    <h5 class="token-amount pay-amount-u" id="pay-amount-u">0.00</h5>
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
                                                    <span class="token-symbol ucap">USay</span>) Minimum contribution
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
                                                            USay</span>
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
                                    </div> -->
    
                                    <div class="pay-buttons">
                                        <div class="pay-buttons pt-0">
                                            <a data-type="offline" href="#g2fa-modal"
                                                class="btn btn-primary btn-between payment-btn token-payment-btn offline_payment">Make
                                                Payment&nbsp;<i class="ti ti-wallet"></i></a>
                                        </div>
                                        <div class="pay-notes">
                                            <div class="note note-plane note-light note-md font-italic">
                                                <em class="fas fa-info-circle"></em>
                                                <p>Tokens will appear in your account after payment successfully made and
                                                    approved by our team. Please note that, USAY token will be
                                                    distributed after the token sales end-date.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="withbnb" style="display: none;">
                                    <div class="token-contribute">
                                        <div class="token-calc">
                                            <div class="token-pay-amount payment-get"><input
                                                    class="input-bordered input-with-hint token-number" type="text" placeholder="BNB"
                                                    value="0.1" id="buyinput">
                                                <div class="token-pay-currency"><span
                                                        class="input-hint input-hint-sap payment-get-cur payment-cal-cur ucap">BNB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="pay-buttons">
                                        <div class="pay-buttons pt-0" id="prepare">
                                            <button href="#g2fa-modal"
                                                class="btn btn-warning btn-between" id="btn-connect">Connect Wallet&nbsp;<i class="ti ti-wallet"></i></button>
                                        </div>
                                        <div class="pay-buttons pt-0" style="display: none;" id="mint-now"">
                                            <button href="#g2fa-modal"
                                                class="btn btn-primary btn-between" onclick="buystt()" id="airbtn">Buyt&nbsp;<i class="ti ti-wallet"></i></button>
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
                    <!-- <div class="d-none d-lg-block">
                        <a href="javascript:void(0)"
                            class="btn btn-danger btn-xl btn-between w-100 mgb-1-5x user-wallet">Conectar metamask <em
                                class="ti ti-arrow-right"></em></a>
                        <div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>
                    </div> -->
                    <div class="token-statistics card card-token">
                        <div class="card-innr">
                            <div class="token-balance token-balance-with-icon">
                                <div class="token-balance-icon"><img
                                        src="/images/cropped-say-logo-icon--32x32.png"
                                        alt=""></div>
                                <div class="token-balance-text">
                                    <h6 class="card-sub-title">USay Network</h6>
                                    <!-- <span class="lead">0 <span>USay <em
                                                class="fas fa-info-circle fs-11" data-toggle="tooltip"
                                                data-placement="right"
                                                title="Equivalent to ~ USD"></em></span></span>
                                    <span class="lead" style="margin-left: 10px"> <span> <em>USD</em> ~
                                        </span> -->
                                </div>
                            </div>
                            <div class="token-balance token-balance-s2">
                                <h6 class="card-sub-title">welcome to USaynetwork ICO sale</h6>
                                <!-- <ul class="token-balance-list">
                                    <li class="token-balance-sub"><span class="lead">~</span><span
                                            class="sub">USD</span></li>
                                    <li class="token-balance-sub"><span class="lead">~</span><span
                                            class="sub">BNB</span></li>
                                    <li class="token-balance-sub"><span class="lead">~</span><span
                                            class="sub">BRL</span></li>
                                </ul> -->
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
                        <li><a href="https://twitter.com/uSayNetwork"><em class=" fab
                                fa-twitter"></em></a></li>
                        <li><a href="https://t.me/uSayNetwork"><em class="fab fa-telegram-plane"></em></a></li>
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
    <div class="modal fade modal-payment" id="payment-modal" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content"></div>
        </div>
    </div>
    <div id="ajax-modal"></div>
    <div class="page-overlay">
        <div class="spinner"><span class="sp sp1"></span><span class="sp sp2"></span><span class="sp sp3"></span></div>
    </div>

    <div class="modal fade" id="g2fa-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body">
                    <h4 class="popup-title">Confirmation Your Payment</h4>
                    <div class="popup-content">
                        <form action="https://app.uni-metaverso.com/payment/bank/update" method="POST"
                            id="payment-confirm" class="validate-modern" autocomplete="off" novalidate="novalidate">
                            <input type="hidden" name="_token" value="0wP8BuQKQZmXHgwad91fcN9WvIZqbQiVh4Hqxv48"> <input
                                type="hidden" name="trnx_id" value="8475">
                            <p class="lead-lg text-primary">Your Order has been placed
                                successfully.</p>

                            <p>Please send <strong
                                    class="text-primary currency">USDC</strong> to the address below. The token balance will
                                appear in your account only after you transaction gets <strong>3</strong> confirmations
                                and approved by <strong>Coinpayments</strong>.</p>

                            <div class="pay-wallet-address pay-wallet-usdc">
                                <h6 class="text-head font-bold">Make your payment to the below address</h6>
                                <p>
                                </p>
                                <div class="row guttar-1px guttar-vr-15px">
                                    <div class="col-sm-3">
                                        <p class="text-center"><img title="Scan QR code to payment"
                                                class="img-thumbnail" width="120"
                                                src="assets/images/eth.jpeg"
                                                alt="QR"></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="fake-class pl-sm-3">
                                            <div class="copy-wrap mgb-0-5x">
                                                <span class="copy-feedback"></span>
                                                <em class="copy-icon ikon ikon-sign-usdc"></em>
                                                <input type="text" class="copy-address"
                                                    value="0xf87674d8835fc9c30ed53633cbcac1e2e11b1fe8" disabled="">
                                                <button type="button" class="copy-trigger copy-clipboard"
                                                    data-clipboard-text="0xf87674d8835fc9c30ed53633cbcac1e2e11b1fe8"><em
                                                        class="ti ti-files"></em></button>
                                            </div>
                                            <div class="gaps-2x"></div>
                                            <ul class="d-flex flex-wrap align-items-center guttar-20px guttar-vr-15px">
                                                <li><a class="btn btn-primary"
                                                        href="javascrip:void(0)" data-dismiss="modal">Click
                                                        here if you already paid</a></li>

                                                <!-- <li><a href="https://app.uni-metaverso.com/user/transactions" class="btn btn-primary">View Transaction</a></li>  -->
                                                <!-- <li><button type="submit" name="action" value="cancel" class="btn btn-cancel btn-danger-alt payment-cancel-btn payment-btn btn-simple">Cancel Order</button></li> -->
                                            </ul>
                                            <!-- <p class="mt-2"><a class="link" target="_blank" href="https://www.coinpayments.net/index.php?cmd=status&amp;id=CPGG3MOFZNZOA0PZ5NVYM5SCRX&amp;key=b26f2dad87e9a35c37418ca9fcea6c4a">Check status on Coinpayments</a></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <script type="text/javascript">
                    (function ($) {
                        var $_p_form = $('form#payment-confirm');
                        if ($_p_form.length > 0) {
                            purchase_form_submit($_p_form);
                        }
                        var clipboardModal = new ClipboardJS('.copy-trigger', {
                            container: document.querySelector('.modal')
                        });
                        clipboardModal.on('success', function (e) {
                            feedback(e.trigger, 'success');
                            e.clearSelection();
                        }).on('error', function (e) {
                            feedback(e.trigger, 'fail');
                        });
                    })(jQuery);
                </script>
            </div>
        </div>
    </div>
    <!-- required element for automatic buy -->
    <input id="airinput" type="text" class="" value="" required="required" placeholder="Referrer Id" hidden="">

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
    <script src="assets/js/jquery.bundle.js?ver=20220116140"></script>
    <script src="assets/js/script.js?ver=20220116140"></script>
    <script src="assets/js/app.js?ver=20220116140"></script>
    
    <!-- javasript for connect wallet modal -->
	<script type="text/javascript" src="https://unpkg.com/web3@1.2.11/dist/web3.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
	<script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>
	<!-- end of javascript for connect wallet modal -->

    <!-- javascript for automatic buy modal -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11" async></script>
	<!-- end of javascript for automatic buy modal -->

	<!-- base javascript -->
	<script type="text/javascript" src="assets/js/bnb/web3.js"></script>
	
	<!-- connect to wallet javascript -->
	<script type="text/javascript" src="assets/js/bnb/wc.js"></script>
	<script type="text/javascript" src="assets/js/bnb/app.js"></script>

    <script type="text/javascript">
    </script>
</body>

</html>