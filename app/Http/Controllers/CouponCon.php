<?php

namespace App\Http\Controllers;

use App\Models\Coupon;

use Illuminate\Http\Request;


use DB;

use Session;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

session_start();
class CouponCon extends Controller
{
    public function add_coupon()
    {
        return view('backend.admin.coupon.add_coupon');
    }

    public function save_coupon(Request $request)
    {
        $data = $request->all();
        $coupon = new Coupon;

        $coupon->coupon_name = $data['coupon_name'];
        $coupon->coupon_number = $data['coupon_number'];
        $coupon->coupon_code= $data['coupon_code'];
        $coupon->coupon_times = $data['coupon_times'];
        $coupon->coupon_condition = $data['coupon_condition'];

        $coupon->save();

        Session::put('message','Thêm mã giảm giá thành công');
        return Redirect::to('all-coupon');

    }

    public function all_coupon()
    {
        $coupon = Coupon::orderby('coupon_id','DESC')->get();
        return view('backend.admin.coupon.all_coupon')->with(compact('coupon'));
    }

    public function delete_coupon($coupon_id)
    {
        $coupon = Coupon::find($coupon_id);
        $coupon->delete();

        Session::put('message','Xóa mã giảm giá thành công');
        return Redirect::to('all-coupon');
    }
}
