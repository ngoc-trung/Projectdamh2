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

class CategoryProductCon extends Controller
{
    public function AuthLoign(){
        $admin_id = Session::get('admin_login');
        if ($admin_id) {
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin_login')->send();
        }
    }

    public function add_category_product(){
        $this->AuthLoign();

        return view('backend.admin.add_category_product');
    }

    public function all_category_product(){
        $this->AuthLoign();

        $all_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product = view('backend.admin.all_category_product')->with('all_category_product', $all_category_product);
        return view('backend.admin_layout')->with('admin.all_category_product', $manager_category_product);
    }


    public function save_category_product(Request $request){
        $this->AuthLoign();

        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Thêm Danh Mục Sản Phẩm Thành Công');
        return Redirect::to('/all-category-product');

    }

    public function unactive_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status'=>1]);
        Session::put('message','Khong kich hoat danh muc san pham thanh cong');
        return Redirect::to('all-category-product');
    }

    public function active_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status'=>0]);
        Session::put('message',' kich hoat danh muc san pham thanh cong');
        return Redirect::to('all-category-product');

    }

    public function edit_category_product($category_product_id){
        $this->AuthLoign();

        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
        $manager_category_product = view('backend.admin.edit_category_product')->with('edit_category_product', $edit_category_product);
        return view('backend.admin_layout')->with('admin.edit_category_product', $manager_category_product);
    }

    public function update_category_product(Request $request, $category_product_id){
        $this->AuthLoign();

        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;

        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update($data);
        Session::put('message','Sua Danh Mục Sản Phẩm Thành Công');
        return Redirect::to('all-category-product');
    }
    public function delete_category_product( $category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->delete();
        Session::put('message',' Xoa danh muc san pham thanh cong');
        return Redirect::to('all-category-product');
    }
}


