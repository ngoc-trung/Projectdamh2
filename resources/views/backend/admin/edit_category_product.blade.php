@extends('backend.admin_layout')
@section('admin_content')
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa Danh Mục Sản Phẩm
                        </header>
                        <?php
                            $message = Session::get('message');
                            if ($message) {
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null) ;
                            }
                        ?>
                        <div class="panel-body">
                            @foreach($edit_category_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text" name="category_product_name" value="{{$edit_value->category_name}}" class="form-control"  placeholder="Tên Danh Mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                                    <textarea class="form-control" name="category_product_desc" value="{{$edit_value->category_desc}}" id="" cols="30" rows="10" placeholder="Mô Tả Danh Mục">{{$edit_value->category_desc}}</textarea>
                                </div>

                                <button type="submit" name="update_category_product" class="btn btn-info">Cập Nhập</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection
