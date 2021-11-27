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

use App\Models\Shipping;
use App\Models\Order;
use App\Models\OrderDetails;

use App\Http\Controllers\Shop\CartController;


session_start();
class CheckoutController extends Controller
{

    public function login_checkout(){

        return view('shop.checkout.login_checkout');
    }

    public function add_customer(Request $request){
        $data = array();

        $data['customer_name'] = $request->customer_name;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = md5($request->customer_password);

        $customer_id = DB::table('tbl_customer')->insertGetId($data);

        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);

        return Redirect('/checkout');

    }

    public function checkout(){
        return view('shop.checkout.show_checkout');
    }

    public function save_checkout(Request $request){
        $data = array();

        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_note'] = $request->shipping_note;
        $data['shipping_address'] = $request->shipping_address;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        Session::put('customer_id',$shipping_id);
        

        return Redirect('/checkout');
    }

   

    public function logout_checkout(){
        Session::flush();
        return Redirect::to('login-checkout');
    }

    public function login_customer(Request $request)
    {
        $email = $request->email_account;
        $password = md5($request->password_account);

        $result = DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first();

        if ($result) {
            Session::put('customer_id',$result->customer_id);
            return Redirect::to('/checkout');
        }else{
            return Redirect::to('/login-checkout');
        }
    }
     
    // Xac nhận đơn hàng
    public function comfirm_order(Request $request)
    {
        $data = $request ->all();
        $shipping = new Shipping();

        $shipping -> shipping_name = $data['shipping_name'];
        $shipping -> shipping_email = $data['shipping_email'];
        $shipping -> shipping_address = $data['shipping_address'];
        $shipping -> shipping_phone = $data['shipping_phone'];
        $shipping -> shipping_note = $data['shipping_note'];
        $shipping -> shipping_method = $data['shipping_method'];

        $shipping->save();

        $shipping_id = $shipping->shipping_id;

        $checkout_code = substr(md5(microtime()),rand(0,26),5);

        $order = new Order;
        $order->customer_id = Session::get('customer_id');
        $order->shipping_id = $shipping_id;
        $order->order_status = 1;
        $order->order_code = $checkout_code;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order->created_at = now();
        $order->save();

        if(Session::get('cart')==true){
            foreach(Session::get('cart') as $key => $cart){

              $order_details = new OrderDetails;
              $order_details->order_code = $checkout_code;
              $order_details->product_id = $cart['product_id'];
              $order_details->product_name = $cart['product_name'];
              $order_details->product_price = $cart['product_price'];
              $order_details->product_sales_quantity = $cart['product_qty'];
              $order_details->product_coupon =  $data['order_coupon'];
              
              $order_details->save();
            }
          }
        //   Session::forget('coupon');
        //   Session::forget('cart');

    }
}
