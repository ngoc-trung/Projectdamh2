@extends('backend.admin_layout')
@section('admin_content')
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Sản Phẩm
                        </header>
                        <?php
                            $message = Session::get('message');
                            if ($message) {
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null) ;
                            }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên San Pham</label>
                                    <input type="text" name="product_name" class="form-control"  placeholder="Tên Danh Mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thêm Giá</label>
                                    <input type="text" name="product_price" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh Sản Phẩm</label>
                                    <input type="file" name="product_image" class="form-control" rows="8" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Sản Phẩm</label>
                                    <textarea class="form-control" name="product_desc" id="" cols="30" rows="10" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung Sản Phẩm</label>
                                    <textarea class="form-control" name="product_content" id="" cols="30" rows="10" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Danh Muc San Pham</label>
                                    <select name="product_cate" id="">
                                        @foreach($cate_product as $key => $cate)
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Thuong Hieu</label>
                                    <select name="product_brand" id="">
                                        @foreach($brand_product as $key => $brand)
                                        <option value="{{$brand->brand_id}}">{{ $brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Hiển Thị</label>
                                    <select name="product_status" id="">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>
                                <button type="submit" name="add_product" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection
