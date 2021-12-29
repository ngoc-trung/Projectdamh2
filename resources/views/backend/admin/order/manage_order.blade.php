@extends('backend.admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản Lý Đơn Hàng
    </div>
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
            
            @foreach($order as $key => $ord)
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
              <a href="{{URL::to('/view-order/'.$ord->order_code)}}" class="active" style="font-size: 20px;" ui-toggle-class="">
                  <i class="fa fa-eye text-active"></i></a>
              <a onclick="return confirm('Bạn có muốn xóa thương hiệu này không ?')" href="{{URL::to('/delete-order/'.$ord->order_code)}}">
                  <i class="fa fa-times text-danger text" style="font-size: 20px;"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
  </div>
</div>



@endsection
