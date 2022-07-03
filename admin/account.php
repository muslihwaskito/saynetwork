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
    <title>User Account | DriveCrypto - Drive2Earn</title>
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
                                    <li><a href="/service/logout"><i
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
                                <h4 class="card-title">Profile Details</h4>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal-data">Personal Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#password">Password</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="profile-details">
                                <div class="tab-pane fade show active" id="personal-data">
                                    <form class="validate-modern"
                                        action="https://app.uni-metaverso.com/user/ajax/account/update" method="POST"
                                        id="nio-user-personal" autocomplete="off">
                                        <input type="hidden" name="_token"
                                            value="rudaMBfrCx0REZUKlBWzHIwxhdNQ1dv1li2DG7Fj"> <input type="hidden"
                                            name="action_type" value="personal_data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="full-name" class="input-item-label">Full Name</label>
                                                    <div class="input-wrap">
                                                        <input class="input-bordered" type="text" id="full-name"
                                                            name="name" required="required"
                                                            placeholder="Enter Full Name" minlength="3" value="<?php echo $_SESSION['user']['name'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="email-address" class="input-item-label">Email
                                                        Address</label>
                                                    <div class="input-wrap">
                                                        <input class="input-bordered" type="text" id="email-address"
                                                            name="email" required="required"
                                                            placeholder="Enter Email Address"
                                                            value="<?php echo $_SESSION['user']['email'] ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="mobile-number" class="input-item-label">Mobile
                                                        Number</label>
                                                    <div class="input-wrap">
                                                        <input class="input-bordered" type="text" id="mobile-number"
                                                            name="mobile" placeholder="Enter Mobile Number" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="date-of-birth" class="input-item-label">Date of
                                                        Birth</label>
                                                    <div class="input-wrap">
                                                        <input class="input-bordered date-picker-dob" type="text"
                                                            id="date-of-birth" name="dateOfBirth" required="required"
                                                            placeholder="mm/dd/yyyy" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="nationality"
                                                        class="input-item-label">Nationality</label>
                                                    <div class="input-wrap">
                                                        <select class="select-bordered select-block" name="nationality"
                                                            id="nationality" required="required"
                                                            data-dd-class="search-on">
                                                            <option value="">Select Country</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegowina">Bosnia and
                                                                Herzegowina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British
                                                                Indian Ocean Territory</option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African
                                                                Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                                Islands</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, the Democratic Republic of the">Congo,
                                                                the Democratic Republic of the</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote d&#039;Ivoire">Cote d&#039;Ivoire
                                                            </option>
                                                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)
                                                            </option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic
                                                            </option>
                                                            <option value="East Timor">East Timor</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                                (Malvinas)</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="France Metropolitan">France Metropolitan
                                                            </option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern
                                                                Territories</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard and Mc Donald Islands">Heard and Mc
                                                                Donald Islands</option>
                                                            <option value="Holy See (Vatican City State)">Holy See
                                                                (Vatican City State)</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran (Islamic Republic of)">Iran (Islamic
                                                                Republic of)</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic People&#039;s Republic of">
                                                                Korea, Democratic People&#039;s Republic of</option>
                                                            <option value="Korea, Republic of">Korea, Republic of
                                                            </option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao, People&#039;s Democratic Republic">Lao,
                                                                People&#039;s Democratic Republic</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab
                                                                Jamahiriya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                            <option value="Macedonia, The Former Yugoslav Republic of">
                                                                Macedonia, The Former Yugoslav Republic of</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia, Federated States of">Micronesia,
                                                                Federated States of</option>
                                                            <option value="Moldova, Republic of">Moldova, Republic of
                                                            </option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles
                                                            </option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana
                                                                Islands</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation
                                                            </option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                            </option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Vincent and the Grenadines">Saint
                                                                Vincent and the Grenadines</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe
                                                            </option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia (Slovak Republic)">Slovakia (Slovak
                                                                Republic)</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option
                                                                value="South Georgia and the South Sandwich Islands">
                                                                South Georgia and the South Sandwich Islands</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="St. Helena">St. Helena</option>
                                                            <option value="St. Pierre and Miquelon">St. Pierre and
                                                                Miquelon</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen Islands">Svalbard and
                                                                Jan Mayen Islands</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Republic">Syrian Arab Republic
                                                            </option>
                                                            <option value="Taiwan, Province of China">Taiwan, Province
                                                                of China</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania, United Republic of">Tanzania,
                                                                United Republic of</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos
                                                                Islands</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United
                                                                States Minor Outlying Islands</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Virgin Islands (British)">Virgin Islands
                                                                (British)</option>
                                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)
                                                            </option>
                                                            <option value="Wallis and Futuna Islands">Wallis and Futuna
                                                                Islands</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Yugoslavia">Yugoslavia</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gaps-1x"></div>
                                        <div class="d-sm-flex justify-content-between align-items-center">
                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                            <div class="gaps-2x d-sm-none"></div>
                                        </div>
                                    </form>

                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <form class="validate-modern"
                                        action="https://app.uni-metaverso.com/user/ajax/account/update" method="POST"
                                        id="nio-user-settings">
                                        <input type="hidden" name="_token"
                                            value="rudaMBfrCx0REZUKlBWzHIwxhdNQ1dv1li2DG7Fj"> <input type="hidden"
                                            name="action_type" value="account_setting">
                                        <div class="pdb-1-5x">
                                            <h5 class="card-title card-title-sm text-dark">Security Settings</h5>
                                        </div>
                                        <div class="input-item">
                                            <input name="save_activity" class="input-switch input-switch-sm"
                                                type="checkbox" checked id="activitylog">
                                            <label for="activitylog">Save my activities log</label>
                                        </div>
                                        <div class="input-item">
                                            <input class="input-switch input-switch-sm" type="checkbox" checked=""
                                                name="unusual" id="unuact">
                                            <label for="unuact">Alert me by email in case of unusual activity in my
                                                account</label>
                                        </div>
                                        <div class="gaps-1x"></div>
                                        <div class="d-sm-flex justify-content-between align-items-center">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <div class="gaps-2x d-sm-none"></div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="password">
                                    <form class="validate-modern"
                                        action="https://app.uni-metaverso.com/user/ajax/account/update" method="POST"
                                        id="nio-user-password">
                                        <input type="hidden" name="_token"
                                            value="rudaMBfrCx0REZUKlBWzHIwxhdNQ1dv1li2DG7Fj"> <input type="hidden"
                                            name="action_type" value="pwd_change">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="old-pass" class="input-item-label">Old Password</label>
                                                    <div class="input-wrap">
                                                        <input class="input-bordered" type="password"
                                                            name="old-password" id="old-pass" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="new-pass" class="input-item-label">New Password</label>
                                                    <div class="input-wrap">
                                                        <input class="input-bordered" id="new-pass" type="password"
                                                            name="new-password" required="required" minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="confirm-pass" class="input-item-label">Confirm New
                                                        Password</label>
                                                    <div class="input-wrap">
                                                        <input id="confirm-pass" class="input-bordered" type="password"
                                                            name="re-password" data-rule-equalTo="#new-pass"
                                                            data-msg-equalTo="Password not match." required="required"
                                                            minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note note-plane note-info pdb-1x">
                                            <em class="fas fa-info-circle"></em>
                                            <p>Password should be a minimum of 6 digits and include lower and uppercase
                                                letter.</p>
                                        </div>
                                        <div class="note note-plane note-danger pdb-2x">
                                            <em class="fas fa-info-circle"></em>
                                            <p>Your password will only change after your confirmation by email.</p>
                                        </div>
                                        <div class="gaps-1x"></div>
                                        <div class="d-sm-flex justify-content-between align-items-center">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <div class="gaps-2x d-sm-none"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Two-Factor Verification</h4>
                            </div>
                            <p>Two-factor authentication is a method for protection of your account. When it is
                                activated you are required to enter not only your password, but also a special code. You
                                can receive this code in mobile app. Even if third party gets access to your password,
                                they still won't be able to access your account without the 2FA code.</p>
                            <div class="d-sm-flex justify-content-between align-items-center pdt-1-5x">
                                <span class="text-light ucap d-inline-flex align-items-center"><span
                                        class="mb-0"><small>Current Status:</small></span> <span
                                        class="badge badge-disabled ml-2">Disabled</span></span>
                                <div class="gaps-2x d-sm-none"></div>
                                <button type="button" disabled data-toggle="modal" data-target="#g2fa-modal"
                                    class="order-sm-first btn btn-primary">Enable 2FA</button>
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

    <div class="modal fade" id="g2fa-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em
                        class="ti ti-close"></em></a>
                <div class="popup-body">
                    <h3 class="popup-title">Enable 2FA Authentication</h3>
                    <form class="validate-modern" action="https://app.uni-metaverso.com/user/ajax/account/update"
                        method="POST" id="nio-user-2fa">
                        <input type="hidden" name="_token" value="rudaMBfrCx0REZUKlBWzHIwxhdNQ1dv1li2DG7Fj"> <input
                            type="hidden" name="action_type" value="google2fa_setup">
                        <div class="pdb-1-5x">
                            <p><strong>Step 1:</strong> Install this app from <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2">Google
                                    Play </a> store or <a target="_blank"
                                    href="https://itunes.apple.com/us/app/google-authenticator/id388497605">App
                                    Store</a>.</p>
                            <p><strong>Step 2:</strong> Scan the below QR code by your Google Authenticator app, or you
                                can add account manually.</p>
                            <p><strong>Manually add Account:</strong><br>Account Name: <strong
                                    class="text-head">DriveCrypto - Drive2Earn</strong> <br> Key: <strong
                                    class="text-head">FOWVFNBJ4WXRAEZJ</strong></p>
                            <div class="row g2fa-box">
                                <div class="col-md-4">
                                    <img class="img-thumbnail"
                                        src="https://app.uni-metaverso.com/qrgen.png?text=otpauth%3A%2F%2Ftotp%2FDriveCrypto%2520-%2520Drive2Earn-Lili%3Alililuluh9%2540gmail.com%3Fsecret%3DFOWVFNBJ4WXRAEZJ%26issuer%3DDriveCrypto%2520-%2520Drive2Earn-Lili"
                                        alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="input-item">
                                        <label for="google2fa_code">Enter Google Authenticator Code</label>
                                        <input id="google2fa_code" type="number" class="input-bordered"
                                            name="google2fa_code" placeholder="Enter the Code to verify">
                                    </div>
                                    <input type="hidden" name="google2fa_secret" value="FOWVFNBJ4WXRAEZJ">
                                    <input name="google2fa" type="hidden" value="1">
                                    <button type="submit" class="btn btn-primary">Confirm 2FA</button>
                                </div>
                            </div>
                            <div class="gaps-2x"></div>
                            <p class="text-danger"><strong>Note:</strong> If you lost your phone or uninstall the Google
                                Authenticator app, then you will lost access of your account.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-pix">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal"><em class="ti ti-close"></em></a>
                <div class="popup-body">
                    <h4 class="popup-title">Seu pix</h4>

                    <div>
                        <form method="post" action="https://app.uni-metaverso.com/user/save_pix">
                            <input type="hidden" name="_token" value="rudaMBfrCx0REZUKlBWzHIwxhdNQ1dv1li2DG7Fj">
                            <div>
                                <label>Informe seu pix</label>
                            </div>

                            <div class="d-flex">
                                <input type="text" name="pix" value="" class="form-control">
                                <button class="btn btn-primary" style="margin-left: 5px">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        (function ($) {
            var $nio_user_2fa = $('#nio-user-2fa');
            if ($nio_user_2fa.length > 0) {
                ajax_form_submit($nio_user_2fa);
            }
        })(jQuery);
    </script>
    <script type="text/javascript">
    </script>
</body>

</html>