@extends('shop.layouts.app')
@section('title','Sản phẩm')
@section('content')


 <!-- main wrapper start -->
 <main class="body-bg">

<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <h1>shop</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item " aria-current="page">Sản Phẩm</li>

                            @foreach($category_name as $key => $name)
                            <h2 class="breadcrumb-item active" aria-current="page">{{$name->category_name}}</h2>
                            @endforeach

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- page main wrapper start -->
<div class="shop-main-wrapper pt-50 pb-50">
    <div class="container">
        <div class="row">
            <!-- sidebar area start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <aside class="sidebar-wrapper">
                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>Danh Mục Sản Phẩm</h3>
                        </div>
                        <div class="sidebar-body">
                            <!-- mobile menu navigation start -->
                            <div class="shop-categories">
                                @foreach($category as $key => $cate)
                                <nav>
                                    @if($cate->category_parent == 0)
                                    <ul class="mobile-menu">
                                        <li class="menu-item-has-children"><a href="">{{$cate->category_name}}</a>
                                            <ul class="dropdown" id="{{$cate->slug_category_product}}">
                                                @foreach($category as $key => $cate_sub)
                                                @if($cate_sub->category_parent==$cate->category_id)
                                                <li><a href="{{URL::to('/danh-muc/'.$cate->category_id)}}">{{$cate_sub->category_name}}</a></li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                    @endif
                                </nav>
                                @endforeach
                            </div>
                            <!-- mobile menu navigation end -->
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>Price filter</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="radio-container">
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" id="customCheck11">
                                        <label class="custom-control-label" for="customCheck11">$7.00 - $9.00 (2)</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" id="customCheck21">
                                        <label class="custom-control-label" for="customCheck21">$10.00 - $12.00 (3)</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" id="customCheck31">
                                        <label class="custom-control-label" for="customCheck31">$17.00 - $20.00 (3)</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" id="customCheck41">
                                        <label class="custom-control-label" for="customCheck41"> $21.00 - $22.00 (1)</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" id="customCheck51">
                                        <label class="custom-control-label" for="customCheck51">$25.00 - $30.00 (3)</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>size</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="checkbox-container">
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck111">
                                        <label class="custom-control-label" for="customCheck111">S (4)</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck222">
                                        <label class="custom-control-label" for="customCheck222">M (5)</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck333">
                                        <label class="custom-control-label" for="customCheck333">L (7)</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck444">
                                        <label class="custom-control-label" for="customCheck444">XL (3)</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-banner">
                        <div class="img-container">
                            <a href="#">
                                <img src="{{ asset('public/frontend/assets/img/banner/sidebar-banner.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- single sidebar end -->
                </aside>
            </div>
            <!-- sidebar area end -->

            <!-- shop main wrapper start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="shop-product-wrapper">
                    <!-- shop product top wrap start -->
                    <div class="shop-top-bar">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                <div class="top-bar-left">
                                    <div class="product-view-mode">
                                        <a class="active" href="#" data-target="grid-view"><i class="fa fa-th"></i></a>
                                        <a href="#" data-target="list-view"><i class="fa fa-list"></i></a>
                                    </div>
                                    <div class="product-amount">
                                        <p>Showing 1–16 of 21 results</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                <div class="top-bar-right">
                                    <div class="product-short">
                                        <p>Sort By : </p>
                                        <form action="">
                                                @csrf
                                            <select class="form-control" id="sort" name="sort">
                                                <option value="{{Request::url()}}?sort_by=none">---Lọc---</option>
                                                <option value="{{Request::url()}}?sort_by=tang_dan">Giá Tăng Dần</option>
                                                <option value="{{Request::url()}}?sort_by=giam_dan">Giá Giảm Dần</option>
                                                <option value="{{Request::url()}}?sort_by=kytu_az">Tên (A - Z)</option>
                                                <option value="{{Request::url()}}?sort_by=kytu_za">Tên (Z - A)</option>
                                            </select>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop product top wrap start -->

                    <!-- product item list start -->
                    <div class="shop-product-wrap grid-view row">
                        <!-- product single item start -->
                        @foreach($category_by_id as $key => $pro)
                        <div class="col-md-4 col-sm-6">

                            <!-- product grid start -->
                            <div class="product-item">
                                <form >
                                    @csrf
                                    <input type="hidden" value="{{$pro->product_id}}" class="cart_product_id_{{$pro->product_id}}">
                                    <input type="hidden" value="{{$pro->product_name}}" class="cart_product_name_{{$pro->product_id}}">
                                    <input type="hidden" value="{{$pro->product_image}}" class="cart_product_image_{{$pro->product_id}}">
                                    <input type="hidden" value="{{$pro->product_price}}" class="cart_product_price_{{$pro->product_id}}">
                                    <input type="hidden" value="1" class="cart_product_qty_{{$pro->product_id}}">

                                <div class="product-thumb">
                                <a href="{{URL::to('/shop/product-detail/'.$pro->product_id)}}">
                                        <img src="{{URL::to('public/upload/product/'.$pro->product_image)}}" alt="">
                                    <div class="add-to-links">
                                        <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>

                                        <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>

                                       <button type="button" data-toggle="modal" data-target="#xemnhanh"  class="xemnhanh" data-id_product="{{$pro->product_id}}">
                                           <i class="ion-eye"></i></button>
                                       

                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name"><a>{{$pro->product_name}}</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">{{number_format($pro->product_price).' '.'VND'}}</span>
                                    </div>
                                    </a>
                                    <button class="add-to-cart3" name="add-to-cart3" type="button" data-id_product="{{$pro->product_id}}">
                                    <div class="product-item-action">
                                        <a class="btn btn-cart" ><i class="ion-bag"></i> Add To Cart</a>
                                    </div>
                                    </button>
                                </div>
                                </form>
                                     

                                
                            </div>

                            <!-- product grid end -->
                        </div>
                        @endforeach
                        <!-- product single item start -->
                    </div>

                    
                    <!-- product item list end -->

                    <!-- start pagination area -->
                    <div class="paginatoin-area text-center">
                        <ul class="pagination-box">
                            <li><a class="previous" href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a class="next" href="#">Next</a></li>
                        </ul>
                    </div>
                    <!-- end pagination area -->
                </div>
            </div>
            <!-- shop main wrapper end -->
        </div>
    </div>
</div>
<!-- page main wrapper end -->


<!-- ======================== Xem Nhanh Sap Pham ========================== -->
            <div class="modal fade" style="margin-top:50px" id="xemnhanh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg"  role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title product_quickview_title" id="">

                                                        <span id="product_quickview_title"></span>
                                                        
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <style type="text/css">
                                                        span#product_quickview_content img {
                                                            width: 100%;
                                                        }

                                                        @media screen and (min-width: 768px) {
                                                            .modal-dialog {
                                                              width: 700px; /* New width for default modal */
                                                            }
                                                            .modal-sm {
                                                              width: 350px; /* New width for small modal */
                                                            }
                                                        }
                                                        
                                                        @media screen and (min-width: 992px) {
                                                            .modal-lg {
                                                              width: 1200px; /* New width for large modal */
                                                            }
                                                        }
                                                    </style>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                           
                                                            <span id="product_quickview_gallery"></span>
                                                        </div>
                                                        <form>
                                                            @csrf
                                                            <div id="product_quickview_value"></div>
                                                        <div class="col-md-7">
                                                            <h2><span id="product_quickview_title"></span></h2>
                                                            <p>Mã ID: <span id="product_quickview_id"></span></p>
                                                            <p style="font-size: 20px; color: brown;font-weight: bold;">Giá sản phẩm : <span id="product_quickview_price"></span></p>
                                
                                                                <label>Số lượng:</label>

                                                                <input name="qty" type="number" min="1" class="cart_product_qty_"  value="1" />
                                                             
                                                            </span>
                                                            <h4 style="font-size: 20px; color: brown;font-weight: bold;">Mô tả sản phẩm</h4>
                                                            <hr>
                                                            <p><span id="product_quickview_desc"></span></p>
                                                            <p><span id="product_quickview_content"></span></p>
                                                            
                                                            <div id="product_quickview_button"></div>
                                                            <div id="beforesend_quickview"></div>
                                                        </div>
                                                        </form>

                                                    </div>
                                                   
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                    <button type="button" class="btn btn-default redirect-cart">Đi tới giỏ hàng</button>
                                                  </div>
                                                </div>
                                              </div>
                                    </div> 

</main>
<!-- main wrapper end -->
@endsection
