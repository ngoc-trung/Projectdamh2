<!-- Start Header Area -->
<header class="header-area">
    <!-- main header start -->
    <div class="main-header d-none d-lg-block">
        <!-- header top start -->
        {{--  <div class="header-top theme-color">
            <div class="container bdr-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header-top-settings">
                            <ul class="nav align-items-center">
                                <li class="language">
                                    <span>Language:</span>
                                    <img src="assets/img/icon/en.png" alt=""> English
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list">
                                        <li><a href="#"><img src="assets/img/icon/en.png" alt=""> english</a></li>
                                        <li><a href="#"><img src="assets/img/icon/fr.png" alt=""> french</a></li>
                                    </ul>
                                </li>
                                <li class="curreny-wrap">
                                    <span>Currency:</span>
                                    $ USD
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list curreny-list">
                                        <li><a href="#">$ usd</a></li>
                                        <li><a href="#"> € EURO</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-links">
                            <ul class="nav justify-content-end">
                                <li><a href="login-register.html">Register</a></li>
                                <li><a href="login-register.html">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}
        <!-- header top end -->

        <!-- header middle area start -->
        <div class="header-middle-area theme-color">
            <div class="container">
                <div class="row align-items-center">
                    <!-- start logo area -->
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('public/frontend/assets/img/logo/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- start logo area -->

                    <!-- start search box area -->
                    <div class="col-lg-5">
                        <div class="search-box-wrapper">
                            <form class="search-box-inner">
                                <input type="text" class="search-field" placeholder="Enter your search key">
                                <button class="search-btn"><i class="ion-ios-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- start search box end -->

                    <!-- mini cart area start -->
                    <div class="col-lg-4">
                        <div class="header-configure-wrapper">
                            <div class="support-inner">
                                <div class="support-icon">
                                    <i class="ion-android-call"></i>
                                </div>
                                <div class="support-info">
                                    <p>Free support call:</p>
                                    <strong><a href="tel:+881234567899">+88 123 456 7899</a></strong>
                                </div>
                            </div>
                            <div class="header-configure-area">
                                <ul class="nav justify-content-end">
                                    <li>
                                        <a href="wishlist.html">
                                            <i class="ion-android-favorite-outline"></i>
                                            <span class="notify">0</span>
                                        </a>
                                    </li>

                                    <li class="mini-cart-wrap">
                                        <a href="{{ route('cart') }}"><i class="ion-bag"></i></a>
                                        <button></button>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- mini cart area end -->
                </div>
            </div>
        </div>
        <!-- header middle area end -->

        <!-- main menu area start -->
        <div class="main-menu-area bg-white sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="category-toggle-wrap">
                            <div class="category-toggle">
                                <i class="ion-android-menu"></i>
                                shop by categories
                            </div>
                            <nav class="category-menu">
                                <ul class="categories-list">
                                    <li class="menu-item-has-children"><a href="shop.html">Fruits & Vegetables</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu dropdown">
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">Smartphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Samsome</a></li>
                                                    <li><a href="shop.html">GL Stylus</a></li>
                                                    <li><a href="shop.html">Uawei</a></li>
                                                    <li><a href="shop.html">Cherry Berry</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Desktop Headphone</a></li>
                                                    <li><a href="shop.html">Mobile Headphone</a></li>
                                                    <li><a href="shop.html">Wireless Headphone</a></li>
                                                    <li><a href="shop.html">LED Headphone</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">accessories</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Power Bank</a></li>
                                                    <li><a href="shop.html">Data Cable</a></li>
                                                    <li><a href="shop.html">Power Cable</a></li>
                                                    <li><a href="shop.html">Battery</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Desktop Headphone</a></li>
                                                    <li><a href="shop.html">Mobile Headphone</a></li>
                                                    <li><a href="shop.html">Wireless Headphone</a></li>
                                                    <li><a href="shop.html">LED Headphone</a></li>
                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop.html">Fresh Meat</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu dropdown three-column">
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">Smartphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Samsome</a></li>
                                                    <li><a href="shop.html">GL Stylus</a></li>
                                                    <li><a href="shop.html">Uawei</a></li>
                                                    <li><a href="shop.html">Cherry Berry</a></li>
                                                    <li><a href="shop.html">uPhone</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Desktop Headphone</a></li>
                                                    <li><a href="shop.html">Mobile Headphone</a></li>
                                                    <li><a href="shop.html">Wireless Headphone</a></li>
                                                    <li><a href="shop.html">LED Headphone</a></li>
                                                    <li><a href="shop.html">Over-ear</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">accessories</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Power Bank</a></li>
                                                    <li><a href="shop.html">Data Cable</a></li>
                                                    <li><a href="shop.html">Power Cable</a></li>
                                                    <li><a href="shop.html">Battery</a></li>
                                                    <li><a href="shop.html">OTG Cable</a></li>
                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop.html">dairy & eggs</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu dropdown two-column">
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">Smartphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Samsome</a></li>
                                                    <li><a href="shop.html">GL Stylus</a></li>
                                                    <li><a href="shop.html">Uawei</a></li>
                                                    <li><a href="shop.html">Cherry Berry</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Desktop Headphone</a></li>
                                                    <li><a href="shop.html">Mobile Headphone</a></li>
                                                    <li><a href="shop.html">Wireless Headphone</a></li>
                                                    <li><a href="shop.html">LED Headphone</a></li>
                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <li><a href="shop.html">Frozen</a></li>
                                    <li><a href="shop.html">Grocery</a></li>
                                    <li><a href="shop.html">Kitchenware</a></li>
                                    <li><a href="shop.html">Tools</a></li>
                                    <li><a href="shop.html">Electronics</a></li>
                                    <li><a href="shop.html">Kitchenware</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="main-menu main-menu-style-1">
                            <!-- main menu navbar start -->
                            <nav class="desktop-menu">
                                <ul>
                                    <li class="active"><a href="{{ route('home') }}">Trang chủ</a>
                                    </li>
                                    <li><a href="{{route('san-pham')}}">Sản phẩm </a>
                                    </li>
                                    <li><a href="{{ route('post.index') }}">Bài viết </a>
                                    </li>
                                    <li><a href="{{ route('page.index') }}">Về chúng tôi </a>
                                    </li>
                                    <li><a href="{{ route('lien-he') }}">Liên hệ</a></li>

                                </ul>
                            </nav>
                            <!-- main menu navbar end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main menu area end -->
    </div>
    <!-- main header start -->

    <!-- mobile header start -->
    <div class="mobile-header d-lg-none d-md-block sticky">
        <!--mobile header top start -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="mobile-main-header">
                        <div class="mobile-logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo-black.png" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="mobile-menu-toggler">
                            <div class="mini-cart-wrap">
                                <a href="cart.html">
                                    <i class="ion-bag"></i>
                                </a>
                            </div>
                            <div class="mobile-menu-btn">
                                <div class="off-canvas-btn">
                                    <i class="ion-android-menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="category-toggle-wrap">
                        <div class="category-toggle">
                            <i class="ion-android-menu"></i>
                            all categories
                            <span><i class="ion-android-arrow-dropdown"></i></span>
                        </div>
                        <nav class="category-menu">
                            <ul class="categories-list">
                                <li class="menu-item-has-children"><a href="shop.html">Fruits & Vegetables</a>
                                    <!-- Mega Category Menu Start -->
                                    <ul class="category-mega-menu dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">Smartphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Samsome</a></li>
                                                <li><a href="shop.html">GL Stylus</a></li>
                                                <li><a href="shop.html">Uawei</a></li>
                                                <li><a href="shop.html">Cherry Berry</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">headphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Desktop Headphone</a></li>
                                                <li><a href="shop.html">Mobile Headphone</a></li>
                                                <li><a href="shop.html">Wireless Headphone</a></li>
                                                <li><a href="shop.html">LED Headphone</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">accessories</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Power Bank</a></li>
                                                <li><a href="shop.html">Data Cable</a></li>
                                                <li><a href="shop.html">Power Cable</a></li>
                                                <li><a href="shop.html">Battery</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">headphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Desktop Headphone</a></li>
                                                <li><a href="shop.html">Mobile Headphone</a></li>
                                                <li><a href="shop.html">Wireless Headphone</a></li>
                                                <li><a href="shop.html">LED Headphone</a></li>
                                            </ul>
                                        </li>
                                    </ul><!-- Mega Category Menu End -->
                                </li>
                                <li class="menu-item-has-children"><a href="shop.html">Fresh Meat</a>
                                    <!-- Mega Category Menu Start -->
                                    <ul class="category-mega-menu dropdown three-column">
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">Smartphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Samsome</a></li>
                                                <li><a href="shop.html">GL Stylus</a></li>
                                                <li><a href="shop.html">Uawei</a></li>
                                                <li><a href="shop.html">Cherry Berry</a></li>
                                                <li><a href="shop.html">uPhone</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">headphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Desktop Headphone</a></li>
                                                <li><a href="shop.html">Mobile Headphone</a></li>
                                                <li><a href="shop.html">Wireless Headphone</a></li>
                                                <li><a href="shop.html">LED Headphone</a></li>
                                                <li><a href="shop.html">Over-ear</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">accessories</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Power Bank</a></li>
                                                <li><a href="shop.html">Data Cable</a></li>
                                                <li><a href="shop.html">Power Cable</a></li>
                                                <li><a href="shop.html">Battery</a></li>
                                                <li><a href="shop.html">OTG Cable</a></li>
                                            </ul>
                                        </li>
                                    </ul><!-- Mega Category Menu End -->
                                </li>
                                <li class="menu-item-has-children"><a href="shop.html">dairy & eggs</a>
                                    <!-- Mega Category Menu Start -->
                                    <ul class="category-mega-menu dropdown two-column">
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">Smartphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Samsome</a></li>
                                                <li><a href="shop.html">GL Stylus</a></li>
                                                <li><a href="shop.html">Uawei</a></li>
                                                <li><a href="shop.html">Cherry Berry</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">headphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Desktop Headphone</a></li>
                                                <li><a href="shop.html">Mobile Headphone</a></li>
                                                <li><a href="shop.html">Wireless Headphone</a></li>
                                                <li><a href="shop.html">LED Headphone</a></li>
                                            </ul>
                                        </li>
                                    </ul><!-- Mega Category Menu End -->
                                </li>
                                <li><a href="shop.html">Frozen</a></li>
                                <li><a href="shop.html">Grocery</a></li>
                                <li><a href="shop.html">Kitchenware</a></li>
                                <li><a href="shop.html">Tools</a></li>
                                <li><a href="shop.html">Electronics</a></li>
                                <li><a href="shop.html">Kitchenware</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile header top start -->
    </div>
    <!-- mobile header end -->
</header>
<!-- end Header Area -->

<!-- off-canvas menu start -->
    {{--  <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>

            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- search box end -->

                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="#">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home version 01</a></li>
                                    <li><a href="index-2.html">Home version 02</a></li>
                                    <li><a href="index-3.html">Home version 03</a></li>
                                    <li><a href="index-4.html">Home version 04</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">pages</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title has-children"><a href="#">column 01</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">shop grid left
                                                    sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                    sidebar</a></li>
                                            <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title has-children"><a href="#">column 02</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-details-affiliate.html">product
                                                    details
                                                    affiliate</a></li>
                                            <li><a href="product-details-variable.html">product details
                                                    variable</a></li>
                                            <li><a href="product-details-group.html">product details
                                                    group</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title has-children"><a href="#">column 03</a>
                                        <ul class="dropdown">
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="compare.html">compare</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title has-children"><a href="#">column 04</a>
                                        <ul class="dropdown">
                                            <li><a href="my-account.html">my-account</a></li>
                                            <li><a href="login-register.html">login-register</a></li>
                                            <li><a href="about-us.html">about us</a></li>
                                            <li><a href="contact-us.html">contact us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">shop</a>
                                <ul class="dropdown">
                                    <li class="has-children"><a href="#">shop grid layout</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">shop grid left sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="#">shop list layout</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                            <li><a href="shop-list-full-width.html">shop list full width</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="#">products details</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-details-affiliate.html">product details affiliate</a></li>
                                            <li><a href="product-details-variable.html">product details variable</a></li>
                                            <li><a href="product-details-group.html">product details group</a></li>
                                            <li><a href="product-details-box.html">product details box</a></li>
                                            <li><a href="product-details-sticky-left.html">product details sticky left</a>
                                            </li>
                                            <li><a href="product-details-sticky-right.html">product details sticky right</a>
                                            </li>
                                            <li><a href="product-details-gallery-left.html">product details gallery left</a>
                                            </li>
                                            <li><a href="product-details-gallery-right.html">product details gallery
                                                    right</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                    <li><a href="blog-left-sidebar-2-col.html">blog left sidebar 2 col</a></li>
                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                    <li><a href="blog-right-sidebar-2-col.html">blog right sidebar 2 col</a></li>
                                    <li><a href="blog-grid-full-width.html">blog grid full width</a></li>
                                    <li><a href="blog-list-full-width.html">blog list full width</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                    <li><a href="blog-details-audio.html">blog details audio</a></li>
                                    <li><a href="blog-details-video.html">blog details video</a></li>
                                    <li><a href="blog-details-image.html">blog details image</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <div class="mobile-settings">
                    <ul class="nav">
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="currency" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Currency
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="currency">
                                    <a class="dropdown-item" href="#">$ USD</a>
                                    <a class="dropdown-item" href="#">$ EURO</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="myaccount" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    My Account
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <a class="dropdown-item" href="my-account.html">my account</a>
                                    <a class="dropdown-item" href="login-register.html"> login</a>
                                    <a class="dropdown-item" href="login-register.html">register</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">0123456789</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>  --}}
    <!-- off-canvas menu end -->
