<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Session;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

class ProductCon extends Controller
{
    public function add_product(){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get(); // Lay id tu bang catagory_product
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get(); 
        return view('admin.add_product')->with('cate_product', $cate_product)->with('brand_product', $brand_product);
    }

    public function all_product(){
        $all_product = DB::table('tbl_product')->get();
        $manager_product = view('admin.all_product')->with('all_product', $all_product);
        return view('admin_layout')->with('admin.all_product', $manager_product);
    }


    public function save_product(Request $request){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_image'] = $request->product_status;

        $get_image = $request->file('product_image');
        if ($get_image) {
            $new_image = rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product', $new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message','Thêm Sản Phẩm Thành Công');
            return Redirect::to('/add-product');
        }
        $data['product_image'] = '';

        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm Thuong Hieu Sản Phẩm Thành Công');
        return Redirect::to('/add-product');
        
    }

    public function unactive_brand_product($brand_product_id){
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status'=>1]);
        Session::put('message','Khong kich hoat Thuong hieu san pham thanh cong');
        return Redirect::to('all-brand-product');
    }

    public function active_brand_product($brand_product_id){
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status'=>0]);
        Session::put('message',' kich hoat thuong hieu san pham thanh cong');
        return Redirect::to('all-brand-product');

    }

    public function edit_brand_product($brand_product_id){
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id',$brand_product_id)->get();
        $manager_brand_product = view('admin.edit_brand_product')->with('edit_brand_product', $edit_brand_product);
        return view('admin_layout')->with('admin.edit_brand_product', $manager_brand_product);
    }

    public function update_brand_product(Request $request, $brand_product_id){
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;

        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update($data);
        Session::put('message','Sua Thuong Hieu Sản Phẩm Thành Công');
        return Redirect::to('all-brand-product');
    }
    public function delete_brand_product( $brand_product_id){
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->delete();
        Session::put('message',' Xoa Thuong Hieu san pham thanh cong');
        return Redirect::to('all-brand-product');
    }
}
