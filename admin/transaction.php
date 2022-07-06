<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header('Location: /auth/register.php');
        exit;
    }

    require_once '../service/config.php';
    
    // Create connection
    $mysql = new mysqli($servername, $username, $password, $database);
    if ($mysql->connect_error) {
		$die("Connection failed: " . $mysql->connect_error);
	}

    $user_id = $_SESSION['user']['id'];
    $query = mysqli_query($mysql, "SELECT * FROM transactions WHERE user_id = '$user_id' ORDER BY id DESC");
    $trx = mysqli_fetch_all($query, MYSQLI_ASSOC);
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
    <title>User Transactions | USay</title>
    <title>User Dashboard | USay</title>
    <link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=20220116140">
    <link rel="stylesheet" href="assets/css/style-green.css?ver=20220116140">
    <script type="text/javascript">
        var view_transaction_url = "https://app.uni-metaverso.com/user/ajax/transactions/view";
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

                <div class="main-content col-lg-12">
                    <div class="d-lg-none">
                        <a href="javascript:void(0)"
                            class="btn btn-danger btn-xl btn-between w-100 mgb-1-5x user-wallet">Conectar metamask <em
                                class="ti ti-arrow-right"></em></a>
                        <div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>
                    </div>
                    <div class="card content-area content-area-mh">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Transactions list</h4>

                            </div>
                            <div class="gaps-1x"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="float-right position-relative">
                                        <a href="#"
                                            class="btn btn-light-alt btn-xs dt-filter-text btn-icon toggle-tigger"> <em
                                                class="ti ti-settings"></em> </a>
                                        <div
                                            class="toggle-class toggle-datatable-filter dropdown-content dropdown-dt-filter-text dropdown-content-top-left text-left">
                                            <ul class="dropdown-list dropdown-list-s2">
                                                <li>
                                                    <h6 class="dropdown-title">Types</h6>
                                                </li>
                                                <li>
                                                    <input class="data-filter input-checkbox input-checkbox-sm"
                                                        type="radio" name="tnx-type" id="type-all" checked value="">
                                                    <label for="type-all">Any Type</label>
                                                </li>
                                                <li>
                                                    <input class="data-filter input-checkbox input-checkbox-sm"
                                                        type="radio" name="tnx-type" id="type-purchase"
                                                        value="Purchase">
                                                    <label for="type-purchase">Purchase</label>
                                                </li>
                                            </ul>
                                            <ul class="dropdown-list dropdown-list-s2">
                                                <li>
                                                    <h6 class="dropdown-title">Status</h6>
                                                </li>
                                                <li>
                                                    <input class="data-filter input-checkbox input-checkbox-sm"
                                                        type="radio" name="tnx-status" id="status-all" checked value="">
                                                    <label for="status-all">Show All</label>
                                                </li>
                                                <li>
                                                    <input class="data-filter input-checkbox input-checkbox-sm"
                                                        type="radio" name="tnx-status" id="status-approved"
                                                        value="approved">
                                                    <label for="status-approved">Approved</label>
                                                </li>
                                                <li>
                                                    <input class="data-filter input-checkbox input-checkbox-sm"
                                                        type="radio" name="tnx-status" value="pending"
                                                        id="status-pending">
                                                    <label for="status-pending">Pending</label>
                                                </li>
                                                <li>
                                                    <input class="data-filter input-checkbox input-checkbox-sm"
                                                        type="radio" name="tnx-status" value="canceled"
                                                        id="status-canceled">
                                                    <label for="status-canceled">Canceled</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style type="text/css">
                                .nft_store_status.data-state-approved:after {
                                    content: '\e64c';
                                    color: #00bdd2;
                                    border-color: #00bdd2;
                                }
                            </style>
                            <table class="data-table dt-filter-init user-tnx">
                                <thead>
                                    <tr class="data-item data-head">
                                        <th class="data-col tnx-status dt-tnxno">Tranx NO</th>
                                        <th class="data-col dt-token">Tokens</th>
                                        <th class="data-col dt-amount">Amount</th>
                                        <!-- <th class="data-col dt-base-amount">USD Amount</th> -->
                                        <th class="data-col dt-account">To</th>
                                        <th class="data-col dt-type tnx-type">
                                            <div class="dt-type-text">Type</div>
                                        </th>
                                        <!-- <th class="data-col"></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach ($trx as $key => $t) {
                                    ?>
                                    
                                    
                                    <tr class="data-item tnx-item-6118">
                                        <td class="data-col dt-tnxno">
                                            <div class="d-flex align-items-center">
                                                <div class="data-state data-state-canceled ">
                                                    <span class="d-none">Canceled</span>
                                                </div>
                                                <div class="fake-class">
                                                    <span class="lead tnx-id"><?php echo $t['code_trx'] ?></span></span>
                                                    <span class="sub sub-date"><?php echo $t['created_at'] ?></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="data-col dt-token">
                                            <span class="lead token-amount"><?php echo $t['amount'] ?></span>
                                            <span class="sub sub-symbol">USay</span>
                                        </td>
                                        <td class="data-col dt-amount">

                                            <span class="lead amount-pay"><?php echo $t['amount'] ?></span>
                                            <span class="sub sub-symbol"><?php echo strtoupper($t['currency']) ?> <em class="fas fa-info-circle"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="1 USay = 0.000176 BNB"></em></span>
                                        </td>
                                        <!-- <td class="data-col dt-usd-amount">

                                            <span class="lead amount-pay">40</span>
                                            <span class="sub sub-symbol">USD <em class="fas fa-info-circle"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="1 USay = 0.04 USD"></em></span>
                                        </td> -->
                                        <td class="data-col dt-account">
                                            <span class="lead user-info"><?php echo !empty($t['token'])? substr($t['token'], 0, 5) . '....' . substr($t['token'], -5):''; ?></span>
                                            <!-- <span class="sub sub-date">20-06-2022 19:54</span> -->
                                        </td>
                                        <td class="data-col dt-type">
                                            <span
                                                class="dt-type-md badge badge-outline badge-md badge-success">Purchase</span>
                                            <span
                                                class="dt-type-sm badge badge-sq badge-outline badge-md badge-success">P</span>
                                        </td>
                                        <!-- <td class="data-col text-right">
                                            <a href="javascript:void(0)"
                                                class="view-transaction btn btn-light-alt btn-xs btn-icon"
                                                data-id="6118"><em class="ti ti-eye"></em></a>
                                            <a href="https://app.uni-metaverso.com/user/ajax/transactions/delete/6118"
                                                class="btn btn-danger-alt btn-xs btn-icon user_tnx_trash"
                                                data-tnx_id="6118"><em class="ti ti-trash"></em></a>
                                            <a href="https://app.uni-metaverso.com/payment/coinpayments/success?tnx_id=6118"
                                                class="link btn btn-light-alt btn-xs btn-icon">
                                                Já paguei
                                            </a>
                                        </td> -->
                                    </tr>

                                    <?php 
                                    }
                                    ?>
                                </tbody>
                            </table>
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
    <script src="assets/js/jquery.bundle.js?ver=20220116140"></script>
    <script src="assets/js/script.js?ver=20220116140"></script>
    <script src="assets/js/app.js?ver=20220116140"></script>
    <script type="text/javascript">
    </script>
</body>

</html>