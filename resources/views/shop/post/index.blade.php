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
                            <h4 class="title">Tìm kiếm</h4>
                            <div class="sidebar-serch-form">
                                <form action="#">
                                    <input type="text" class="search-field" placeholder="Nhập từ khóa ...">
                                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div> <!-- single sidebar end -->
                        <div class="blog-sidebar">
                            <h4 class="title">Chủ đề</h4>
                            <ul class="blog-archive blog-category">
                                <li><a href="#">Điện thoại (10)</a></li>
                                <li><a href="#">Máy tính (08)</a></li>
                                <li><a href="#">Đồng hồ (07)</a></li>
                                <li><a href="#">Máy tính bảng (14)</a></li>
                                <li><a href="#">Khác (10)</a></li>
                            </ul>
                        </div> <!-- single sidebar end -->
                        <div class="blog-sidebar">
                            <h4 class="title">Bài viết gần đây </h4>
                            <div class="recent-post">
                                <div class="recent-post-item">
                                    <div class="product-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('public/frontend/assets/img/blog/blog-large-4.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-description">
                                        <div class="product-name">
                                            <h4><a href="blog-details.html">Tên bài viết</a></h4>
                                            <p>Ngày tháng</p>
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
                                            <h4><a href="blog-details.html">Tên bài viết</a></h4>
                                            <p>Ngày tháng</p>
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
                                            <h4><a href="blog-details.html">Tên bài viết</a></h4>
                                            <p>Ngày tháng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <a href="blog-details.html">Bài viết mẫu</a>
                                        </h2>
                                        <div class="post-meta-small">
                                            <div class="post-author">
                                                Written by: <a href="#">Tác giả</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-summary">
                                    <p>Mô tả bài viết
                                    </p>
                                </div>
                                <a href="{{ route('post.show') }}" class="btn btn-read">Đọc thêm</a>
                            </div>
                        </div>
                        <!-- blog single item end -->

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
                                            <a href="blog-details.html">Bài viết mẫu</a>
                                        </h2>
                                        <div class="post-meta-small">
                                            <div class="post-author">
                                                Written by: <a href="#">Tác giả</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-summary">
                                    <p>Mô tả bài viết
                                    </p>
                                </div>
                                <a href="{{ route('post.show') }}" class="btn btn-read">Đọc thêm</a>
                            </div>
                        </div>
                        <!-- blog single item end -->




                        <!-- start pagination area -->
                        <div class="paginatoin-area text-center">
                            <ul class="pagination-box">
                                <li><a class="previous" href="#">Trước</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a class="next" href="#">Sau</a></li>
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
