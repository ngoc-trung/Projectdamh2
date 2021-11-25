@extends('backend.admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Mã Giảm Giá
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
                        <?php
                            $message = Session::get('message');
                            if ($message) {
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null) ;
                            }
                        ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên Mã Giảm Giá</th>
            <th>Mã Giảm Giá</th>
            <th>Số Lượng Mã</th>
            <th>Tính Năng Mã</th>
            <th>Số Giảm</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($coupon as $key => $cou)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cou->coupon_name}}</td>
            <td>{{ $cou->coupon_code}}</td>
            <td>{{ $cou->coupon_times}}</td>
            <td>
                <span>
                    <?php
                        if ($cou->coupon_condition==1) {
        
                    ?>
                    Giảm Theo Tiền
                    <?php
                            }else{
                    ?>  
                     Giảm Theo %         
                    <?php
                            }
                    ?>  
                    
                </span>
            </td>
            <td>
                <span>
                    <?php
                        if ($cou->coupon_condition==1) {
                    ?>
                    Giảm {{$cou->coupon_number}} đ
                    <?php
                        }else{
  
                    ?>
                    Giảm {{$cou->coupon_number}} %
                    <?php
                        }

                    ?>
                </span>
            </td>
            <td>
              
              <a onclick="return confirm('Bạn có muốn xóa mã giảm giá này không ?')" href="{{URL::to('/delete-coupon/'.$cou->coupon_id)}}">
                  <i class="fa fa-times text-danger text" style="font-size: 20px;"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">

        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>



@endsection
