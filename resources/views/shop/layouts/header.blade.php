<!-- Start Header Area -->
<header class="header-area">
    <!-- main header start -->
    <div class="lg-block">
        <!-- header top start -->
        {{--  <div class="header-top theme-color">
            <div class="container bdr-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header-links">
                            <ul class="nav justify-content-end">
                                <li><a href="login-register.html">Đăng kí</a></li>
                                <li><a href="login-register.html">Đăng nhập</a></li>
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
                                <h5>LOGO</h5>
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
                                    <p>Gọi tư vấn miễn phí:</p>
                                    <strong><a href="tel:+881234567899">0123456789</a></strong>
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
                                        <a href="{{URL::to('/gio-hang')}}"><i class="ion-bag"></i></a>
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
                                <i class="ion-android-menu"></i>Danh mục sản phẩm </div>
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
    </header>