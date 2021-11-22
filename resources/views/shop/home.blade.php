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
                                        <h2>smart watch</h2>
                                        <h1>flat 75% off</h1>
                                        <h3>at $99-only for today</h3>
                                        <a href="shop.html" class="btn-hero">shop now</a>
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
                                        <h2>smart watch & phones</h2>
                                        <h1>sale 75% off</h1>
                                        <h3>at $199-only for today</h3>
                                        <a href="shop.html" class="btn-hero">shop now</a>
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
                                    <h5>Free return</h5>
                                    <p>30 days money back guarantee!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col lg-4 col-md-4">
                            <div class="single-features-item">
                                <div class="features-icon">
                                    <i class="ion-social-usd"></i>
                                </div>
                                <div class="features-content">
                                    <h5>Free Shipping</h5>
                                    <p>Free shipping on all order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-features-item">
                                <div class="features-icon">
                                    <i class="ion-help-buoy"></i>
                                </div>
                                <div class="features-content">
                                    <h5>support 24/7</h5>
                                    <p>We support online 24 hours a day</p>
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
                                    <h4>Deals Of The Week</h4>
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
                                                    Add To Cart</a>
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
                                                    Add To Cart</a>
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
                                                    Add To Cart</a>
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

        <!-- banner statistics start -->
        <div class="banner-statistics-area pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="img-container">
                            <a href="#"><img src="{{ asset('public/frontend/assets/img/banner/img1_home.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner statistics end -->

        <!-- features categories area start -->
        <section class="features-categories-area pt-50">
            <div class="container">
                <div class="section-wrapper bg-white">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-header">
                                <!-- section title start -->
                                <div class="section-title">
                                    <h4>Electronics</h4>
                                </div>
                                <!-- section title start -->

                                <!-- product tab menu start -->
                                <div class="feature-menu">
                                    <ul class="nav justify-content-start justify-content-lg-end">
                                        <li><a data-bs-toggle="tab" class="active" href="#one">hand tools</a></li>
                                        <li><a data-bs-toggle="tab" href="#two">tool storage</a></li>
                                        <li><a data-bs-toggle="tab" href="#three">generators</a></li>
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
                                    <div class="tab-pane fade active show" id="one">
                                        <div class="features-categories-wrapper">
                                            <div class="features-categories-active slick-arrow-style">
                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-1.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-13.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$50.00</span>
                                                                <span class="price-old"><del>$29.99</del></span>
                                                            </div>
                                                            <div class="product-item-action">
                                                                <a class="btn btn-cart" href="cart.html"><i
                                                                        class="ion-bag"></i> Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product item start -->

                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-2.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-12.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$50.00</span>
                                                                <span class="price-old"><del>$29.99</del></span>
                                                            </div>
                                                            <div class="product-item-action">
                                                                <a class="btn btn-cart" href="cart.html"><i
                                                                        class="ion-bag"></i> Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product item start -->

                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-3.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-11.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$50.00</span>
                                                                <span class="price-old"><del>$29.99</del></span>
                                                            </div>
                                                            <div class="product-item-action">
                                                                <a class="btn btn-cart" href="cart.html"><i
                                                                        class="ion-bag"></i> Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product item start -->

                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-4.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-10.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$50.00</span>
                                                                <span class="price-old"><del>$29.99</del></span>
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
                                    <div class="tab-pane fade" id="two">
                                        <div class="features-categories-wrapper">
                                            <div class="features-categories-active slick-arrow-style">
                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-5.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-9.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$80.00</span>
                                                                <span class="price-old"><del>$30.00</del></span>
                                                            </div>
                                                            <div class="product-item-action">
                                                                <a class="btn btn-cart" href="cart.html"><i
                                                                        class="ion-bag"></i> Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product item start -->

                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-6.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-8.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$40.00</span>
                                                                <span class="price-old"><del>$55.00</del></span>
                                                            </div>
                                                            <div class="product-item-action">
                                                                <a class="btn btn-cart" href="cart.html"><i
                                                                        class="ion-bag"></i> Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product item start -->

                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-7.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-7.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$55.00</span>
                                                                <span class="price-old"><del>$59.99</del></span>
                                                            </div>
                                                            <div class="product-item-action">
                                                                <a class="btn btn-cart" href="cart.html"><i
                                                                        class="ion-bag"></i> Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product item start -->

                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-8.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-6.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$20.00</span>
                                                                <span class="price-old"><del>$29.99</del></span>
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
                                    <div class="tab-pane fade" id="three">
                                        <div class="features-categories-wrapper">
                                            <div class="features-categories-active slick-arrow-style">
                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-9.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-5.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$50.00</span>
                                                                <span class="price-old"><del>$29.99</del></span>
                                                            </div>
                                                            <div class="product-item-action">
                                                                <a class="btn btn-cart" href="cart.html"><i
                                                                        class="ion-bag"></i> Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product item start -->

                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-10.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-14.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$25.00</span>
                                                                <span class="price-old"><del>$30.00</del></span>
                                                            </div>
                                                            <div class="product-item-action">
                                                                <a class="btn btn-cart" href="cart.html"><i
                                                                        class="ion-bag"></i> Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product item start -->

                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-11.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontendassets/img/product/product-3.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$30.00</span>
                                                                <span class="price-old"><del>$39.00</del></span>
                                                            </div>
                                                            <div class="product-item-action">
                                                                <a class="btn btn-cart" href="cart.html"><i
                                                                        class="ion-bag"></i> Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product item start -->

                                                <!-- product item start -->
                                                <div class="product-slide-item">
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="pri-img"
                                                                    src="{{ asset('public/frontend/assets/img/product/product-12.jpg') }}" alt="">
                                                                <img class="sec-img"
                                                                    src="{{ asset('public/frontend/assets/img/product/product-2.jpg') }}" alt="">
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
                                                            <h5 class="product-name"><a href="product-details.html">joust
                                                                    duffle bag</a></h5>
                                                            <div class="price-box">
                                                                <span class="price-regular">$15.00</span>
                                                                <span class="price-old"><del>$20.00</del></span>
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
                                </div>
                                <div class="img-container">
                                    <a href="#">
                                        <img src="{{ asset('public/frontend/assets/img/banner/ca1_bottom.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="section-banner">
                                <img src="{{ asset('public/frontend/assets/img/banner/ca1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                    <div class="col-lg-4">
                        <div class="group-list-wrapper">
                            <div class="group-list-header">
                                <h4 class="group-list-title">Special Offers</h4>
                                <div class="slick-append"></div>
                            </div>
                            <div class="group-list-item-wrapper">
                                <div class="group-list-carousel">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- best sellers group end -->

                    <!-- new product group start -->
                    <div class="col-lg-4">
                        <div class="group-list-wrapper">
                            <div class="group-list-header">
                                <h4 class="group-list-title">new products</h4>
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
                                <h4 class="group-list-title">most viewed</h4>
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
                            <div class="img-container">
                                <a href="shop.html">
                                    <img src="assets/img/banner/img2_home.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-5">
                            <div class="feature-product-slider">
                                <div class="features-product-carousel slick-arrow-style">
                                    <!-- product item start -->
                                    <div class="product-slide-item">
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img class="pri-img" src="assets/img/product/product-5.jpg"
                                                        alt="">
                                                    <img class="sec-img" src="assets/img/product/product-9.jpg"
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
                                            <div class="product-content">
                                                <h5 class="product-name"><a href="product-details.html">joust duffle
                                                        bag</a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="product-item-action">
                                                    <a class="btn btn-cart" href="cart.html"><i
                                                            class="ion-bag"></i> Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item start -->

                                    <!-- product item start -->
                                    <div class="product-slide-item">
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img class="pri-img" src="assets/img/product/product-4.jpg"
                                                        alt="">
                                                    <img class="sec-img" src="assets/img/product/product-8.jpg"
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
                                            <div class="product-content">
                                                <h5 class="product-name"><a href="product-details.html">joust duffle
                                                        bag</a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="product-item-action">
                                                    <a class="btn btn-cart" href="cart.html"><i
                                                            class="ion-bag"></i> Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item start -->

                                    <!-- product item start -->
                                    <div class="product-slide-item">
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img class="pri-img" src="assets/img/product/product-2.jpg"
                                                        alt="">
                                                    <img class="sec-img" src="assets/img/product/product-12.jpg"
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
                                            <div class="product-content">
                                                <h5 class="product-name"><a href="product-details.html">joust duffle
                                                        bag</a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="product-item-action">
                                                    <a class="btn btn-cart" href="cart.html"><i
                                                            class="ion-bag"></i> Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item start -->

                                    <!-- product item start -->
                                    <div class="product-slide-item">
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img class="pri-img" src="assets/img/product/product-6.jpg"
                                                        alt="">
                                                    <img class="sec-img" src="assets/img/product/product-7.jpg"
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
                                            <div class="product-content">
                                                <h5 class="product-name"><a href="product-details.html">joust duffle
                                                        bag</a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
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
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="product-large-slider mb-20">
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img1.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img2.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img3.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img4.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img5.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img1.jpg" alt="" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img2.jpg" alt="" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img3.jpg" alt="" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img4.jpg" alt="" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img5.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-details-des">
                                    <h5 class="product-name">Private Selection Wild Caught Jumbo</h5>
                                    <div class="ratings">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="price-regular">$70.00</span>
                                        <span class="price-old"><del></del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                        voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac
                                        habitasse platea dictumst.</p>
                                    <div class="availability mt-10 mb-20">
                                        <i class="ion-checkmark-circled"></i>
                                        <span>200 in stock</span>
                                    </div>
                                    <div class="quantity-cart-box d-flex align-items-center">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <div class="action_link">
                                            <a class="btn btn-cart" href="#"><i class="ion-bag"></i>Add to
                                                cart</a>
                                        </div>
                                    </div>
                                    <div class="useful-links mt-28">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare"><i
                                                class="ion-ios-shuffle"></i>compare</a>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist"><i
                                                class="ion-android-favorite-outline"></i>wishlist</a>
                                    </div>
                                    <div class="like-icon mt-20">
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                        <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                        <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

@endsection