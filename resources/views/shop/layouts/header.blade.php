<!-- Start Header Area -->
<header class="header-area">
    <!-- main header start -->
    <div class="lg-block">
        <!-- header top start -->
          <div class="header-top theme-color">
            <div class="container bdr-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header-links">
                            <ul class="nav justify-content-end">
                            <?php
                                $customer_id = Session::get('customer_id');
                                if($customer_id!=NULL){
                                    ?>

                                    <li>
                                        <a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a>

                                    </li>
                                  <?php
                                }else{
                                   ?>
                                   <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                   <?php
                               }
                               ?>
                                <li><a href="{{URL::to('/login-checkout')}}">Tài Khoản</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                         <form class="search-box-inner" action="{{URL::to('/tim-kiem')}}" method="POST">
                             {{ csrf_field() }}
                             <div class="search-box-wrapper">
                                <input type="text" class="search-field" placeholder="Tìm kiếm sản phẩm" name="keywords_submit">
                                <button class="search-btn" name="search_items" value="Tìm Kiếm"><i class="ion-ios-search"></i></button>
                            </div>
                        </form>
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
                                <i class="ion-android-menu"></i>Danh mục Sản Phẩm </div>
                            <nav class="category-menu">
                                    <ul class="categories-list">
                                    @foreach($category as $key => $cate)
                                        @if($cate->category_parent == 0)
                                        <li class="menu-item-has-children"><a href="">{{$cate->category_name}}</a>
                                        
                                            <!-- Mega Category Menu Start -->
                                            <ul class="category-mega-menu dropdown">
                                            @foreach($category as $key => $cate_sub)
                                                 @if($cate_sub->category_parent==$cate->category_id)
                                                    <li class="menu-item-has-children">
                                                        <a href="{{URL::to('/danh-muc/'.$cate_sub->category_id)}}">{{$cate_sub->category_name}}</a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop.html">Samsome</a></li>
                                                            <li><a href="shop.html">Samsome</a></li>
                                                            <li><a href="shop.html">Samsome</a></li>
                                                            <li><a href="shop.html">GL Stylus</a></li>
                                                            <li><a href="shop.html">Uawei</a></li>
                                                            <li><a href="shop.html">Cherry Berry</a></li>
                                                        </ul>
                                                    </li>
                                                @endif
                                            @endforeach
                                            </ul><!-- Mega Category Menu End -->
                                        
                                        </li>
                                        @endif
                                    @endforeach    
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
