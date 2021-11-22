<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use Session;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
class ProductController extends Controller
{
    public function index(){
        //hien thi danh muc ra trang san pham
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); // Lay id tu bang catagory_product

        //Hien Thi thuong hieu ra trang san pham
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        // Hiển Thị Sản Phẩm ra trang san pham
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(10)->get();

        return view('shop.page.product')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
    }
}
