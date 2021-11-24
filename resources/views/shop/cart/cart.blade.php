@extends('shop.layouts.app')
@section('title','cart')
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
                                <h1>Giỏ Hàng</h1>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- cart main wrapper start -->
        
        <div class="cart-main-wrapper pt-50 pb-50">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                         @if(session()->has('message'))
                            <div class="alert alert-succes">
                                {{session()->get('message')}}
                            </div>
                            @elseif(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif

                        <form action="{{url('/update-cart')}}" method="POST">
                            @csrf
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Hình Ảnh</th>
                                            <th class="pro-title">Tên Sản Phẩm</th>
                                            <th class="pro-price">Giá Sản Phẩm</th>
                                            <th class="pro-quantity">Số Lượng</th>
                                            <th class="pro-subtotal">Tổng Tiền</th>
                                            <th class="pro-remove">Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $total = 0;
                                   
                                     ?>
                                     @foreach (Session::get('cart') as $key => $val)
                                     <?php
                                        $subtotal = $val['product_price']*$val['product_qty'];
                                        $total+=$subtotal;
                                     ?>
                                        <tr>
                                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{asset('public/upload/product/'.$val['product_image'])}}" alt="Product" /></a></td>
                                                <td class="pro-title"><a href="#">{{$val['product_name']}}</a></td>
                                                <td class="pro-price"><span>{{number_format($val['product_price'],0,',','.')}} đ</span></td>

                                                <td class="pro-quantity" >

                                                    <div class="pro-qty">
                                                        <input type="number" value="{{$val['product_qty']}}" min="1" name="cart_qty[{{$val['session_id']}}]">
                                                    </div>    
                                                    
                                                        
                                                </td> 
                                                <td class="pro-subtotal"><span>{{number_format($subtotal,0,',','.')}} đ</span></td>

                                                <td class="pro-remove"><a href="{{url('/del-product/'.$val['session_id'])}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                   @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Cart Update Option -->
                            <div class="cart-update-option d-block d-md-flex justify-content-between">
                                <div class="apply-coupon-wrapper">
                                    <form action="#" method="post" class=" d-block d-md-flex">
                                        <input type="text"  />
                                        <button class="btn btn__bg btn__sqr">Thêm Mã Giảm Giá</button>
                                    </form>
                                </div>
                                <div class="cart-update">
                                    <input type="submit" value="Cap Nhap" name="update_qty" class="btn btn__bg">
                                    
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 ml-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <h3>Cart Totals</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>Sub Total</td>
                                                <td><span>{{number_format($total,0,',','.')}} đ</span></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>$70</td>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
                                                <td class="total-amount">$300</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <a href="checkout.html" class="btn btn__bg d-block">Proceed To Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->

    </main>
    <!-- main wrapper end -->

@endsection