@extends('shop.layouts.app')
@section('title','Lịch Sử Đơn Hàng')
@section('content')

<main class="body-bg">
        <div class="shop-main-wrapper pt-50 pb-50">


        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>Lịch Sử Đơn Hàng</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Lịch sử đơn hàng</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="table-agile-info">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                            <div class="panel panel-default">
                                <div class="table-responsive">
                                                    <?php
                                                        $message = Session::get('message');
                                                        if ($message) {
                                                            echo '<span class="text-alert">'.$message.'</span>';
                                                            Session::put('message',null) ;
                                                        }
                                                    ?>
                                <table class="table table-striped b-t b-light" id="myTable">
                                    <thead>
                                    <tr>
                                        <th >
                                        Thứ Tự
                                        </th>
                                        <th>Mã Đơn Hàng</th>
                                        <th>Tình Trạng Đơn Hàng</th>
                                        <th>Ngày Đặt Hàng</th>
                                        <th style="width:30px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i= 0;
                                        ?>
                                        
                                        @foreach($getorder as $key => $ord)
                                        <?php
                                            $i++;
                                        ?>
                                    <tr>
                                        <td><i>{{$i}}</i></td>
                                        <td>
                                            {{$ord->order_code}}
                                        </td>
                                        <td>
                                            @if($ord->order_status==1)
                                            Đơn Hàng Mới
                                            @else
                                            Đã Xử Lý
                                            @endif
                                        </td>
                                        <td>{{$ord->created_at}}</td>
                                        <td>
                                        <a href="{{URL::to('/history')}}" class="active" style="font-size: 20px;" ui-toggle-class="">
                                            <i class="fa fa-eye text-active"></i></a>
                                        
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                </div>
                                
                                </div>
                            </div>
                </div>
        </div>
</div>

</div>

</main>


@endsection
