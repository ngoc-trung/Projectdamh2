@extends('shop.layouts.app')
@section('title','Trang chủ')
@section('content')   
<!-- main wrapper start -->
    <main class="body-bg">
        <!-- slider area start -->
        <section class="slider-area">
            <div class="hero-slider-active slick-arrow-style slick-dot-style">
                <!-- single slider item start -->
                <div class="hero-slider-item">
                    <div class="d-flex align-items-center bg-img h-100" data-bg="{{ asset('public/frontend/assets/img/slider/home1-slide1.jpg') }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="hero-slider-content">
                                        <h2>Đồng hồ thông minh</h2>
                                        <h1>giảm tới 75%</h1>
                                        <h3>chỉ 2 triệu trong hôm nay</h3>
                                        <a href="shop.html" class="btn-hero">NUA NGAY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->

                <!-- single slider item start -->
                <div class="hero-slider-item">
                    <div class="d-flex align-items-center bg-img h-100" data-bg="{{ asset('public/frontend/assets/img/slider/home1-slide2.jpg') }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="hero-slider-content">
                                        <h2>Đồng hồ thông minh</h2>
                                        <h1>giảm tới 75%</h1>
                                        <h3>chỉ 2 triệu trong hôm nay</h3>
                                        <a href="shop.html" class="btn-hero">NUA NGAY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->
            </div>
        </section>
        <!-- slider area end -->

        <!-- service features start -->
        <section class="service-features pt-50">
            <div class="container">
                <div class="service-features-inner bg-white">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="single-features-item">
                                <div class="features-icon">
                                    <i class="ion-paper-airplane"></i>
                                </div>
                                <div class="features-content">
                                    <h5>Miễn phí đổi trả</h5>
                                    <p>30 ngày bảo hành hoàn tiền</p>
                                </div>
                            </div>
                        </div>
                        <div class="col lg-4 col-md-4">
                            <div class="single-features-item">
                                <div class="features-icon">
                                    <i class="ion-social-usd"></i>
                                </div>
                                <div class="features-content">
                                    <h5>Miễn phí giao hàng</h5>
                                    <p>Miễn phí mọi đơn giao hàng</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-features-item">
                                <div class="features-icon">
                                    <i class="ion-help-buoy"></i>
                                </div>
                                <div class="features-content">
                                    <h5>Hỗ trợ 24/7</h5>
                                    <p>Chúng tôi hỗ trợ trực tuyến 24 giờ 1 ngày</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service features end -->

        <!-- deals area start -->
        <section class="deals-area pt-50">
            <div class="container">
                <div class="deals-wrapper bg-white">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-header-deals">
                                <div class="section-title-deals">
                                    <h4>Giảm giá trong tuần</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="deals-item-wrapper">
                                <div class="deals-carousel-active slick-arrow-style slick-row-15">
                                    <!-- deals single item start -->
                                    <div class="deals-slider-item">
                                        <div class="deals-item">
                                            <div class="deals-thumb">
                                                <a href="product-details.html">
                                                    <img class="pri-img" src="{{ asset('public/frontend/assets/img/product/product-1.jpg') }}"
                                                        alt="">
                                                    <img class="sec-img" src="{{ asset('public/frontend/assets/img/product/product-14.jpg') }}"
                                                        alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                            data-bs-toggle="tooltip" title="Quick View"><i
                                                                class="ion-eye"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="deals-content">
                                                <div class="ratings">
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                </div>
                                                <h4 class="product-name"><a href="product-details.html">Crown Summit
                                                        Backpack</a></h4>
                                                <p class="product-desc">Convenience is next to nothing when your day is
                                                    crammed with action.</p>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i>
                                                    Thêm vào giỏ hàng</a>
                                                <div class="product-countdown" data-countdown="2021/12/20"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- deals single item start -->

                                    <!-- deals single item start -->
                                    <div class="deals-slider-item">
                                        <div class="deals-item">
                                            <div class="deals-thumb">
                                                <a href="product-details.html">
                                                    <img class="pri-img" src="{{ asset('public/frontend/assets/img/product/product-5.jpg') }}"
                                                        alt="">
                                                    <img class="sec-img" src="{{ asset('public/frontend/assets/img/product/product-10.jpg') }}"
                                                        alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                            data-bs-toggle="tooltip" title="Quick View"><i
                                                                class="ion-eye"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="deals-content">
                                                <div class="ratings">
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                </div>
                                                <h4 class="product-name"><a href="product-details.html">Strive Shoulder
                                                        Handbag</a></h4>
                                                <p class="product-desc">Convenience is next to nothing when your day is
                                                    crammed with action.</p>
                                                <div class="price-box">
                                                    <span class="price-regular">$40.00</span>
                                                    <span class="price-old"><del>$59.99</del></span>
                                                </div>
                                                <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i>
                                                    Thêm vào giỏ hàng</a>
                                                <div class="product-countdown" data-countdown="2021/12/16"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- deals single item start -->

                                    <!-- deals single item start -->
                                    <div class="deals-slider-item">
                                        <div class="deals-item">
                                            <div class="deals-thumb">
                                                <a href="product-details.html">
                                                    <img class="pri-img" src="{{ asset('public/frontend/assets/img/product/product-4.jpg') }}"
                                                        alt="">
                                                    <img class="sec-img" src="{{ asset('public/frontend/assets/img/product/product-2.jpg') }}"
                                                        alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                            data-bs-toggle="tooltip" title="Quick View"><i
                                                                class="ion-eye"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="deals-content">
                                                <div class="ratings">
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                </div>
                                                <h4 class="product-name"><a href="product-details.html">Brown Summit
                                                        Backpack</a></h4>
                                                <p class="product-desc">Convenience is next to nothing when your day is
                                                    crammed with action.</p>
                                                <div class="price-box">
                                                    <span class="price-regular">$70.00</span>
                                                    <span class="price-old"><del>$75.00</del></span>
                                                </div>
                                                <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i>
                                                    Thêm vào giỏ hàng</a>
                                                <div class="product-countdown" data-countdown="2021/12/29"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- deals single item start -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- deals area end -->

        
        <!-- features categories area end -->

        <!-- features categories area start -->
        <!-- Sản Phẩm -->
        <section class="features-categories-area pt-50">
            <div class="container">
                <div class="section-wrapper bg-white">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-header">
                                <!-- section title start -->
                                <div class="section-title">
                                    <h4>Sản Phẩm</h4>
                                </div>
                                <!-- section title start -->

                                <!-- product tab menu start -->
                                <div class="feature-menu">
                                    <ul class="nav justify-content-start justify-content-lg-end">
                                        <li><a data-bs-toggle="tab" class="active" href="#four">Mua Nhiều</a>
                                        </li>
                                        <li><a data-bs-toggle="tab" href="#five">Đánh Giá Cao</a></li>
                                        <li><a data-bs-toggle="tab" href="#six">Được Yêu Thích</a></li>
                                    </ul>
                                </div>
                                <!-- product tab menu start -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="products-area-wrapper mt-30">
                                <div class="tab-content">
                                    
                                    <div class="tab-pane fade active show" id="four">
                                    
                                        <div class="features-categories-wrapper">
                                            <div class="features-categories-active slick-arrow-style">
                                                <!-- product item start -->
                                                
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="" alt="">
                                                                <img class="sec-img"
                                                                    src="" alt="">
                                                            </a>
                                                            <div class="add-to-links">
                                                                <a href="wishlist.html" data-bs-toggle="tooltip"
                                                                    title="Add to Wishlist"><i
                                                                        class="ion-android-favorite-outline"></i></a>
                                                                <a href="compare.html" data-bs-toggle="tooltip"
                                                                    title="Add to Compare"><i
                                                                        class="ion-stats-bars"></i></a>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick_view"><span
                                                                        data-bs-toggle="tooltip" title="Quick View"><i
                                                                            class="ion-eye"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h5 class="product-name"><a href="product-details.html">
                                                            </a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular"></span>
                                                               
                                                            </div>
                                                            <div class="product-item-action">
                                                                <a class="btn btn-cart" href="cart.html"><i
                                                                        class="ion-bag"></i> Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <!-- product item start -->
                                        </div>
                                   
                                    </div>
                                   
                                </div>
                                <div class="img-container">
                                    <a href="#">
                                        <img src="assets/img/banner/ca2_bottom.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="section-banner">
                                <img src="assets/img/banner/ca2.jpg" alt="">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- features categories area end -->

        <!-- group list product area start -->
        <div class="group-list-products pt-50">
            <div class="container">
                <div class="row">
                    <!-- best sellers group start -->
                    
                    <!-- best sellers group end -->

                    <!-- new product group start -->
                    <div class="col-lg-4">
                        <div class="group-list-wrapper">
                            <div class="group-list-header">
                                <h4 class="group-list-title">Sản phẩm mới</h4>
                                <div class="slick-append"></div>
                            </div>
                            <div class="group-list-item-wrapper">
                                <div class="group-list-carousel">
                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-11.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-12.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- new product group end -->

                    <!-- most view group start -->
                    <div class="col-lg-4">
                        <div class="group-list-wrapper">
                            <div class="group-list-header">
                                <h4 class="group-list-title">Được xem nhiều nhất</h4>
                                <div class="slick-append"></div>
                            </div>
                            <div class="group-list-item-wrapper">
                                <div class="group-list-carousel">
                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- most view group end -->
                </div>
            </div>
        </div>
        <!-- group list product area end -->

        <!-- feature product area start -->
        <div class="feature-product-area pt-50 pb-50">
            <div class="container">
                <div class="feature-product-wrapper bg-white">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5 col-sm-7">
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- feature product area end -->

        <!-- brand logo area start -->
        <div class="brand-logo-area bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-logo-slider">
                            <div class="brand-logo-carousel">
                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/brand-1.png') }}" alt="">
                                </div>
                                <!-- brand single item end -->

                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/brand-2.png') }}" alt="">
                                </div>
                                <!-- brand single item end -->

                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/brand-3.png') }}" alt="">
                                </div>
                                <!-- brand single item end -->

                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/brand-4.png') }}" alt="">
                                </div>
                                <!-- brand single item end -->

                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/brand-5.png') }}" alt="">
                                </div>
                                <!-- brand single item end -->

                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/brand-3.png') }}" alt="">
                                </div>
                                <!-- brand single item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand logo area end -->

    </main>
    <!-- main wrapper end -->

    <!-- Quick view modal start -->
    
    <!-- Quick view modal end -->

@endsection