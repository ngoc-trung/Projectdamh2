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

class BrandProductCon extends Controller
{
    public function add_brand_product(){
        return view('admin.add_brand_product');
    }

    public function all_brand_product(){
        $all_brand_product = DB::table('tbl_brand')->get();
        $manager_brand_product = view('admin.all_brand_product')->with('all_brand_product', $all_brand_product);
        return view('admin_layout')->with('admin.all_brand_product', $manager_brand_product);
    }


    public function save_brand_product(Request $request){
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;

        DB::table('tbl_brand')->insert($data);
        Session::put('message','Thêm Thuong Hieu Sản Phẩm Thành Công');
        return Redirect::to('/all-brand-product');
        
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
