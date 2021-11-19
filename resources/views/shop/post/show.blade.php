@extends('shop.layouts.app')
@section('title', 'Bài viết chi tiết')
@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <h1>Bài viết chi tiết</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="blog-left-sidebar.html">Bài viết</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bài viết chi tiết</li>
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
                                            <img src="assets/img/blog/blog-large-4.jpg" alt="">
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
                                            <img src="assets/img/blog/blog-large-6.jpg" alt="">
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
                                            <img src="assets/img/blog/blog-large-7.jpg" alt="">
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
                    <!-- blog single item start -->
                    <div class="blog-post-item blog-grid section-bg-color">
                        <div class="blog-post-thumb">
                            <div class="blog-carousel-active slick-arrow-style slick-dot-style">
                                <div class="blog-single-slide">
                                    <img src="{{ asset('public/frontend/assets/img/blog/blog-details-1.jpg') }}" alt="">
                                </div>
                                <div class="blog-single-slide">
                                    <img src="{{ asset('public/frontend/assets/img/blog/blog-details-4.jpg') }}" alt="">
                                </div>
                                <div class="blog-single-slide">
                                    <img src="{{ asset('public/frontend/assets/img/blog/blog-details-2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="post-info-wrapper">
                            <div class="entry-header">
                                <div class="post-date">
                                    <span class="date">10</span>
                                    <span class="month">mar</span>
                                </div>
                                <div class="post-meta blog-details-title">
                                    <h2 class="entry-title">Praesent gravida enim fermentum</h2>
                                    <div class="post-meta-small">
                                        <div class="post-author">
                                            Written by: <a href="#">Admin</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-summary mb-0">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate perferendis
                                    consequuntur illo aliquid nihil ad neque, debitis praesentium libero ullam
                                    asperiores exercitationem deserunt inventore facilis, officiis,</p>
                                <blockquote>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur.
                                        In
                                        venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed,
                                        cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin
                                        dictum
                                        tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque
                                        scelerisque.</p>
                                </blockquote>
                                <p>aliquam maiores asperiores recusandae commodi blanditiis ipsum tempora culpa
                                    possimus assumenda ab quidem a voluptatum quia natus? Ex neque, saepe
                                    reiciendis
                                    quasi velit perspiciatis error vel quas quibusdam autem nesciunt voluptas odit
                                    quis
                                    dignissimos eos aspernatur voluptatum est repellat. Pariatur praesentium,
                                    corrupti
                                    deserunt ducimus quo doloremque nostrum aspernatur saepe cupiditate sit autem
                                    exercitationem debitis, maiores vitae perferendis nemo? Voluptas illo, animi
                                    temporibus quod earum molestias eaque, iure rem amet autem dignissimos officia
                                    dolores numquam distinctio esse voluptates optio pariatur aspernatur omnis?
                                    Ipsam
                                    qui commodi velit natus reiciendis quod quibusdam nemo eveniet similique animi!</p>
                                <div class="tag-line">
                                    <h5>tag :</h5>
                                    <a href="#">barber</a>,
                                    <a href="#">fashion</a>,
                                    <a href="#">food</a>,
                                </div>
                                <div class="blog-share-link">
                                    <h5>share :</h5>
                                    <div class="blog-social-icon">
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog single item end -->

                   
                </div>
            </div>
        </div>
    </div>
    <!-- blog main wrapper end -->
@endsection
