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

session_start();
class CartController extends Controller

{
    // Thêm sản phẩm vào giỏ hàng
    public function add_cart_ajax(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,36),10);

        $cart = Session::get('cart');

        if ($cart == true) {

            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if ($val['product_id']==$data['cart_product_id']) {
                    $is_avaiable++;
                }
            }

            if ($is_avaiable == 0) {
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_name' => $data['cart_product_name'],
                    'product_id' => $data['cart_product_id'],
                    'product_image' => $data['cart_product_image'],
                    'product_price' => $data['cart_product_price'],
                    'product_qty' => $data['cart_product_qty'],
                );
                Session::put('cart',$cart);
            }
        }else{

            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_price' => $data['cart_product_price'],
                'product_qty' => $data['cart_product_qty'],
            );
            Session::put('cart',$cart);
        }
        
        Session::save();
    }


    public function gio_hang(Request $request){
        //seo
        $meta_desc = "Giỏ hàng của bạn";
        $meta_keywords = "Giỏ hàng Ajax";
        $meta_title = "Giỏ Hàng Ajax";
        $url_canonical = $request->url();

        return view('shop.cart.cart')->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('meta_canonical',$url_canonical);

    }

    //xóa sản phẩm trong giỏ hàng
    public function del_product($session_id){
        $cart = Session::get('cart');
        if ($cart==true) {
            foreach($cart as $key => $val){
                if ($val['session_id']==$session_id) {
                    unset($cart[$key]);
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Xoa san pham thanh cong');
        }else{
            return redirect()->back()->with('message','Xoa san pham that bai');
        }
    }


    public function update_cart(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');
        if ($cart==true) {
            foreach($data['cart_qty'] as $key => $qty){
                foreach($cart as $session => $val){
                    if ($val['session_id']==$key) {

                     $cart[$session]['product_qty'] = $qty;
                    }
                   
                }
            }
                Session::put('cart',$cart);
                return redirect()->back()->with('message','Cap nhap san pham thanh cong');
        }else{
            return redirect()->back()->with('message','Cap nhap san pham that bai');
        }
    }


    public function save_cart(Request $request){
        $productId = $request->productid_hidden;
        $quanlity = $request->qty;

        $data = DB::table('tbl_product')->where('product_id',$productId)->get();

        return view('shop.cart.cart');
    }
}
