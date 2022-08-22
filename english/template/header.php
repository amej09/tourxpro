<head>
    <title>TourX Pro - Travels Tourism Agency HTML Template</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../assets/images/favicon.png" type="image/gif" sizes="20x20">

    <link rel="stylesheet" href="../assets/css/select2.min.css">

    <link rel="stylesheet" href="../assets/css/jquery.fancybox.min.css">

    <link href='../assets/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <script src="https://kit.fontawesome.com/77aaa306cb.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>


    <div class="main-searchbar-wrapper">
        <div class="container">
            <div class="multi-main-searchber">
                <div class="main-searchbar-close search-toggle">
                    <i class="bi bi-x-lg"></i>
                </div>
                <form action="#" method="post" id="main_searchbar">
                    <div class="row g-4">
                        <div class="col-lg-10">
                            <div class="row gx-0 gy-4">
                                <div class="col-lg-3 col-md-6">
                                    <div class="search-box-single destination-box">
                                        <div class="searchbox-icon ">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <div class="searchbox-input">
                                            <label for="deatination_drop">Destination</label>
                                            <select data-placeholder="Where Are You Going?" id="deatination_drop">
                                                <option value="">Where Are You Going?</option>
                                                <optgroup label="India">
                                                    <option>
                                                        Solt Lake
                                                    </option>
                                                    <option>
                                                        Kolkata
                                                    </option>
                                                    <option>
                                                        Mohamia
                                                    </option>
                                                    <option>
                                                        Mumbai
                                                    </option>
                                                    <option>
                                                        New Delhi
                                                    </option>
                                                </optgroup>
                                                <optgroup label=" Bangladash">
                                                    <option>
                                                        Cox's Bazer
                                                    </option>
                                                    <option>
                                                        Rangamati
                                                    </option>
                                                    <option>
                                                        Banderban
                                                    </option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="search-box-single type-box">
                                        <div class="searchbox-icon">
                                            <i class="bi bi-text-paragraph"></i>
                                        </div>
                                        <div class="searchbox-input">
                                            <label for="activity-dropdown">Travel Type</label>
                                            <select class="defult-select-drowpown" data-placeholder="All Activity"
                                                id="activity-dropdown">
                                                <option value="">All Activity</option>
                                                <option value="1">Type 1</option>
                                                <option value="2">Type 2</option>
                                                <option value="3">Type 3</option>
                                                <option value="4">Type 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="search-box-single type-box">
                                        <div class="searchbox-icon">
                                            <i class="bi bi-person-plus"></i>
                                        </div>
                                        <div class="searchbox-input">
                                            <label for="person-dropdown">Person</label>
                                            <select class="defult-select-drowpown" id="person-dropdown">
                                                <option selected value="0">01</option>
                                                <option value="1">02</option>
                                                <option value="2">03</option>
                                                <option value="3">04</option>
                                                <option value="4">05</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="search-box-single date-box">
                                        <div class="searchbox-icon">
                                            <i class="bi bi-capslock"></i>
                                        </div>
                                        <div class="searchbox-input date-picker-input">
                                            <label for="datepicker">When</label>
                                            <input placeholder="Select your date" type="text" name="checkIn"
                                                id="datepicker" value="" class="calendar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="main-form-submit">
                                <button type="submit">Find Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="category-sidebar-wrapper">
        <div class="category-sidebar">
            <div class="category-header d-flex justify-content-between align-items-center">
                <h4>Category</h4>
                <div class="category-toggle">
                    <i class="bi bi-x-lg"></i>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-2 gy-5 mt-3">
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="../assets/images/icons/cate1.svg" alt="">
                        </div>
                        <h5>Adventure</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="../assets/images/icons/cate2.svg" alt="">
                        </div>
                        <h5>Group Tour</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="../assets/images/icons/cate3.svg" alt="">
                        </div>
                        <h5>Couple Tour</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="../assets/images/icons/cate4.svg" alt="">
                        </div>
                        <h5>Single Tour</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="../assets/images/icons/cate5.svg" alt="">
                        </div>
                        <h5>Honeymoon</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="../assets/images/icons/cate6.svg" alt="">
                        </div>
                        <h5>Sea Beach</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="../assets/images/icons/cate7.svg" alt="">
                        </div>
                        <h5>Mountain Tour</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="topbar-area topbar-style-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 align-items-center d-xl-flex d-none">
                    <div class="topbar-contact-left">
                        <ul class="contact-list">
                            <li><i class="bi bi-telephone-fill"></i> <a href="tel:+17632275032">+1 763-227-5032</a></li>
                            <li><i class="bi bi-envelope-fill"></i> <a
                                    href="https://demo.egenslab.com/cdn-cgi/l/email-protection#a8c1c6cec7e8cdd0c9c5d8c4cd86cbc7c5"><span
                                        class="__cf_email__"
                                        data-cfemail="2a43444c456a4f524b475a464f04494547">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 text-xl-center text-md-start text-center">
                    <div class="topbar-ad">
                        <a href="#">Black Friday Big Offer</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 d-md-flex  d-none align-items-center justify-content-end">
                    <ul class="topbar-social-links">
                        <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
                        <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="#"><i class="bx bxl-whatsapp-square"></i></a></li>
                        <li><a href="#"><i class='bx bxl-pinterest'></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <header>
        <div class="header-area header-style-one">
            <div class="container">
                <div class="row">
                    <div
                        class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
                        <div class="nav-logo d-flex justify-content-between align-items-center">
                            <a href="index.html"><img src="../../assets/images/logo11.png" style="height: 130px;width:130px;" id="logo"  alt="logo"></a>
                            <div class="d-flex align-items-center gap-4">
                                <div class="nav-right d-xl-none">
                                    <ul class="nav-actions">
                                        <li class="category-toggle">
                                            <i class='bx bx-category'></i>
                                        </li>
                                        <li class="search-toggle">
                                            <i class='bx bx-search-alt'></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-menu d-flex ">
                                    <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                        <span class="h-top"></span>
                                        <span class="h-middle"></span>
                                        <span class="h-bottom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-xs-6">
                        <nav class="main-nav float-end">
                            <div class="inner-logo d-xl-none text-center">
                                <a href="#"><img src="../assets/images/logo11.png" style="height: 110px;width:100px;" alt=""></a>
                            </div>
                            <ul>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Excursion</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="ouarzazat.php">ouarzazat</a></li>
                                        <li><a href="essaouira.php">essaouira</a></li>
                                        <li><a href="ouzoud.php">ouzoud</a></li>
                                        <li><a href="ourika.php">ourika</a></li>
                                        <li><a href="imlil.php">imlil</a></li>
                                        <li><a href="threevalley.php">three valley</a></li>
                                        <li><a href="casablanca.php">casablanca</a></li>
                                        <li><a href="agadrir.php">agadrir</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                            <div class="inner-contact-options d-xl-none">
                                <div class="contact-box-inner"><i class="bi bi-telephone-fill"></i> <a
                                        href="tel:+17632275032">+1 763-227-5032</a></div>
                                <div class="contact-box-inner"><i class="bi bi-envelope-fill"></i> <a
                                        href="https://demo.egenslab.com/cdn-cgi/l/email-protection#670e09010827021f060a170b024904080a"><span
                                            class="__cf_email__"
                                            data-cfemail="4c25222a230c29342d213c2029622f2321">[email&#160;protected]</span></a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-2">
                        <div class="nav-right float-end d-xl-flex d-none ">
                            <ul class="nav-actions">
                                <li class="category-toggle">
                                    <i class='bx bx-category'></i>
                                </li>
                                <li class="search-toggle">
                                    <i class='bx bx-search-alt'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>