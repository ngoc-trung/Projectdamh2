@extends('shop.layouts.app')
@section('title','Bài viết')
@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <h1>Bài viết</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- blog main wrapper start -->
    <div class="blog-main-wrapper pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="blog-sidebar-wrapper">
                        <div class="blog-sidebar">
                            <h4 class="title">search</h4>
                            <div class="sidebar-serch-form">
                                <form action="#">
                                    <input type="text" class="search-field" placeholder="search here">
                                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div> <!-- single sidebar end -->
                        <div class="blog-sidebar">
                            <h4 class="title">categories</h4>
                            <ul class="blog-archive blog-category">
                                <li><a href="#">Barber (10)</a></li>
                                <li><a href="#">fashion (08)</a></li>
                                <li><a href="#">handbag (07)</a></li>
                                <li><a href="#">Jewelry (14)</a></li>
                                <li><a href="#">food (10)</a></li>
                            </ul>
                        </div> <!-- single sidebar end -->
                        <div class="blog-sidebar">
                            <h4 class="title">Blog Archives</h4>
                            <ul class="blog-archive">
                                <li><a href="#">January (10)</a></li>
                                <li><a href="#">February (08)</a></li>
                                <li><a href="#">March (07)</a></li>
                                <li><a href="#">April (14)</a></li>
                                <li><a href="#">May (10)</a></li>
                            </ul>
                        </div> <!-- single sidebar end -->
                        <div class="blog-sidebar">
                            <h4 class="title">recent post</h4>
                            <div class="recent-post">
                                <div class="recent-post-item">
                                    <div class="product-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('public/frontend/assets/img/blog/blog-large-4.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-description">
                                        <div class="product-name">
                                            <h4><a href="blog-details.html">Auctor gravida enim</a></h4>
                                            <p>march 10 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="product-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('public/frontend/assets/img/blog/blog-large-6.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-description">
                                        <div class="product-name">
                                            <h4><a href="blog-details.html">gravida auctor dnim</a></h4>
                                            <p>march 18 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="product-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('public/frontend/assets/img/blog/blog-large-7.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-description">
                                        <div class="product-name">
                                            <h4><a href="blog-details.html">enim auctor gravida</a></h4>
                                            <p>march 14 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- single sidebar end -->
                        <div class="blog-sidebar">
                            <h4 class="title">Tags</h4>
                            <ul class="blog-tags">
                                <li><a href="#">camera</a></li>
                                <li><a href="#">computer</a></li>
                                <li><a href="#">bag</a></li>
                                <li><a href="#">watch</a></li>
                                <li><a href="#">smartphone</a></li>
                                <li><a href="#">shoes</a></li>
                            </ul>
                        </div> <!-- single sidebar end -->
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="blog-item-wrapper">
                        <!-- blog single item start -->
                        <div class="blog-post-item mb-30">
                            <div class="blog-post-thumb">
                                <a href="{{ route('post.show') }}">
                                    <img src="{{ asset('public/frontend/assets/img/blog/blog-details-4.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-info-wrapper">
                                <div class="entry-header">
                                    <div class="post-date">
                                        <span class="date">10</span>
                                        <span class="month">mar</span>
                                    </div>
                                    <div class="post-meta">
                                        <h2 class="entry-title">
                                            <a href="blog-details.html">Auctor gravida enim</a>
                                        </h2>
                                        <div class="post-meta-small">
                                            <div class="post-author">
                                                Written by: <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-summary">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas
                                        hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio.
                                    </p>
                                </div>
                                <a href="{{ route('post.show') }}" class="btn btn-read">Đọc thêm</a>
                            </div>
                        </div> <!-- blog single item end -->

                        <!-- blog single item start -->
                        <div class="blog-post-item mb-30">
                            <div class="blog-post-thumb">
                                <a href="{{ route('post.show') }}">
                                    <img src="{{ asset('public/frontend/assets/img/blog/blog-details-4.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-info-wrapper">
                                <div class="entry-header">
                                    <div class="post-date">
                                        <span class="date">10</span>
                                        <span class="month">mar</span>
                                    </div>
                                    <div class="post-meta">
                                        <h2 class="entry-title">
                                            <a href="blog-details.html">Auctor gravida enim</a>
                                        </h2>
                                        <div class="post-meta-small">
                                            <div class="post-author">
                                                Written by: <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-summary">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas
                                        hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio.
                                    </p>
                                </div>
                                <a href="{{ route('post.show') }}" class="btn btn-read">Đọc thêm</a>
                            </div>
                        </div> <!-- blog single item end -->

                        <!-- blog single item start -->
                        <div class="blog-post-item mb-30">
                            <div class="blog-post-thumb">
                                <a href="{{ route('post.show') }}">
                                    <img src="{{ asset('public/frontend/assets/img/blog/blog-details-4.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-info-wrapper">
                                <div class="entry-header">
                                    <div class="post-date">
                                        <span class="date">10</span>
                                        <span class="month">mar</span>
                                    </div>
                                    <div class="post-meta">
                                        <h2 class="entry-title">
                                            <a href="blog-details.html">Auctor gravida enim</a>
                                        </h2>
                                        <div class="post-meta-small">
                                            <div class="post-author">
                                                Written by: <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-summary">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas
                                        hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio.
                                    </p>
                                </div>
                                <a href="{{ route('post.show') }}" class="btn btn-read">Đọc thêm</a>
                            </div>
                        </div> <!-- blog single item end -->
                        <!-- blog single item start -->
                        <div class="blog-post-item mb-30">
                            <div class="blog-post-thumb">
                                <a href="blog-details.html">
                                    <img src="{{ asset('public/frontend/assets/img/blog/blog-details-2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-info-wrapper">
                                <div class="entry-header">
                                    <div class="post-date">
                                        <span class="date">10</span>
                                        <span class="month">may</span>
                                    </div>
                                    <div class="post-meta">
                                        <h2 class="entry-title">
                                            <a href="blog-details.html">Aenean posue libeo</a>
                                        </h2>
                                        <div class="post-meta-small">
                                            <div class="post-author">
                                                Written by: <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-summary">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas
                                        hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio.
                                    </p>
                                </div>
                                <a href="blog-details.html" class="btn btn-read">read more</a>
                            </div>
                        </div> <!-- blog single item end -->

                        <!-- start pagination area -->
                        <div class="paginatoin-area text-center">
                            <ul class="pagination-box">
                                <li><a class="previous" href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a class="next" href="#">Next</a></li>
                            </ul>
                        </div>
                        <!-- end pagination area -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog main wrapper end -->
@endsection
