@extends('backend.admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Sản Phẩm
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <!-- <a href="{{URL::to('/add-product')}}">Thêm Sản Phẩm</a> -->

      </div>
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
            <th>Tên Sản Phẩm </th>
            <th>Giá Sản Phẩm</th>
            <th>Hình Ảnh Sản Phẩm</th>
            <th>Danh Mục</th>
            <th>Thương Hiệu</th>
            <th>Hiển Thị </th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($all_product as $key => $pro_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $pro_pro->product_name}}</td>
            <td>{{ $pro_pro->product_price}}</td>

            <td><img src="public/upload/product/{{ $pro_pro->product_image}}" height="100" width="100"></td>

            <td>{{$pro_pro->category_name}}</td>

            <td>{{$pro_pro->brand_name}}</td>

            <td><span class="text-ellipsis">
                <?php
                    if ($pro_pro->product_status == 0) {
                ?>
                <a href="{{URL::to('/unactive-product/'.$pro_pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up" style="font-size: 28px;
        color: green;"></span></a>
                <?php
                    }else{

                        ?>
                <a href="{{URL::to('/active-product/' .$pro_pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down" style="font-size: 28px;
        color: red;"></span></a>
                <?php
                    }
                ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-product/'.$pro_pro->product_id)}}" class="active" style="font-size: 20px;" ui-toggle-class="">
                  <i class="fa fa-pencil-square-o text-active"></i></a>
              <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không ?')" href="{{URL::to('/delete-product/'.$pro_pro->product_id)}}">
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
