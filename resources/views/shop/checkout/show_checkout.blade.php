
@extends('shop.layouts.app')
@section('title','Login-checkout')
@section('content')

        <!-- checkout main wrapper start -->
        <div class="checkout-page-wrapper">
            <div class="container">
                <div class="section-bg-color mb-50">
                    <div class="row">
                        <div class="col-12">
                        <h2>Thanh Toán </h2>
                        </div>
                    </div>
                </div>

                <div class="section-bg-color">
                    <div class="row">
                        <!-- Checkout Billing Details -->
                        <div class="col-lg-6">
                            <div class="checkout-billing-details-wrap">
                                <h2>Điền Thông Tin Gửi Hàng</h2>
                                <div class="billing-form-wrap">
                                    <form action="{{URL::to('/save-checkout')}}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="single-input-item">
                                                <div class="single-input-item">
                                                    <label for="f_name" class="required">Họ Tên</label>
                                                    <input type="text" name="shipping_name" placeholder="Điền Họ Tên" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-input-item">
                                            <label for="email" class="required">Email</label>
                                            <input type="email" name="shipping_email" placeholder="Email Address" required />
                                        </div>

                                        <div class="single-input-item">
                                            <label for="com-name">Địa Chỉ</label>
                                            <input type="text" name="shipping_address" placeholder="Địa Chỉ" />
                                        </div>

                                        <!-- <div class="single-input-item">
                                            <label for="country" class="required">Country</label>
                                            <input type="text" id="com-name" placeholder="Quốc Gia" />
                                        </div> -->

                                        <!-- <div class="single-input-item">
                                            <label for="street-address" class="required mt-20">Street address</label>
                                            <input type="text" id="street-address" placeholder="Street address Line 1" required />
                                        </div> -->

                                        <!-- <div class="single-input-item">
                                            <input type="text" placeholder="Street address Line 2 (Optional)" />
                                        </div>

                                        <div class="single-input-item">
                                            <label for="town" class="required">Town / City</label>
                                            <input type="text" id="town" placeholder="Town / City" required />
                                        </div> -->

                                        <!-- <div class="single-input-item">
                                            <label for="state">State / Divition</label>
                                            <input type="text" id="state" placeholder="State / Divition" />
                                        </div>

                                        <div class="single-input-item">
                                            <label for="postcode" class="required">Postcode / ZIP</label>
                                            <input type="text" id="postcode" placeholder="Postcode / ZIP" required />
                                        </div> -->

                                        <div class="single-input-item">
                                            <label for="phone">Số Điện Thoại</label>
                                            <input type="text" name="shipping_phone" placeholder="Phone" />
                                        </div>

                                        <!-- <div class="checkout-box-wrap">
                                            <div class="single-input-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="create_pwd">
                                                    <label class="custom-control-label" for="create_pwd">Create an
                                                        account?</label>
                                                </div>
                                            </div>
                                            <div class="account-create single-form-row">
                                                <p>Create an account by entering the information below. If you are a
                                                    returning customer please login at the top of the page.</p>
                                                <div class="single-input-item">
                                                    <label for="pwd" class="required">Account Password</label>
                                                    <input type="password" id="pwd" placeholder="Account Password" required />
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="single-input-item">
                                            <label for="ordernote">Yêu Cầu Của Khách Hàng</label>
                                            <textarea name="shipping_note"  cols="30" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>

                                        

                                        <div class="single-input-item">

                                            <button type="submit" name="send_order" value="Gui" class="btn btn__bg">Gửi Để Thanh Toán</button>
                                            
                                        </div>

                                        
                                    </form>
                                         
                                </div>
                            </div>
                        </div>

                        <!-- Order Summary Details -->
                        <div class="col-lg-6">
                            <div class="order-summary-details">
                                <h2>Tổng Đơn Hàng</h2>

                                <form action="{{url('/update-cart')}}" method="POST">
                                @csrf
                                <div class="order-summary-content">
                                    <!-- Order Summary Table -->
                                    <div class="order-summary-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sản Phẩm</th>
                                                    <th>Thành Tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $total = 0;
                                        
                                            ?>
                                            @foreach(Session::get('cart') as $key => $val)
                                            <?php
                                        
                                            $subtotal = $val['product_price']*$val['product_qty'];
                                            $total+=$subtotal;
                                            ?>
                                                <tr>
                                                    <td>{{$val['product_name']}} <strong > x{{$val['product_qty']}}</strong></td>
                                                    
                                                    <td>{{number_format($subtotal,0,',','.')}} đ</td>
                                                </tr>
                                                   
                                            </tbody>
                                            
                                             @endforeach        
                                             
                                             @if(Session::get('coupon'))
                                            
                                             <tr>
                                                 <td>Mã giảm</td>
                                                <td>
                                                    
                                                        @foreach(Session::get('coupon') as $key => $cou)
                                                            @if($cou['coupon_condition']==0)
                                                                {{$cou['coupon_number']}} %
                                                                

                                                                <?php
                                                                    $total_coupon = ($total*$cou['coupon_number'])/100;
                                                                ?>
                                                </td>
                                             </tr>
                                            
                                                <tr>
                                                     <td>Total</td>  
                                                   <td class="total-amount"><span>{{number_format($total-$total_coupon,0,',','.')}} đ</span></td>
                                                </tr>
                                                 
                                                              
                                                        <td>
                                                            @elseif($cou['coupon_condition']==1)
                                                            
                                                                {{number_format($cou['coupon_number'],0,',','.')}} đ
                                                        </td>
                                                            
                                                                
                                                        <tr>
                                                            <td>Total</td>  
                                                                <td class="total-amount"><span>{{number_format($total-$cou['coupon_number'],0,',','.')}} đ</span></
                                                        </tr>
                                                                 
                                                              @endif  
                                                        @endforeach

                                                @endif
                                                
                                        </table>
                                        
                                    </div>
                                    
                                </div>

                                </form>
                            </div> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout main wrapper end -->

@endsection