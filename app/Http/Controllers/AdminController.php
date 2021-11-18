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

session_start();

class AdminController extends Controller
{
    public function AuthLoign(){
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin_login')->send();
        }
    }

    public function Admin(){

        return view('admin_login');
    }

    public function show_dashboard(){
        $this->AuthLoign();

        return view('admin.dashboard');
    }

    public function dashboard(Request $request){

        $admim_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email',$admim_email)->where('admin_password',$admin_password)->first();
        if ($result) {
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','Tài khoản hoặc mật khẩu không chính xác !');
            return Redirect::to('/admin_login');
        }
     }
     public function logout(){
        $this->AuthLoign();

        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin_login');
     }
}
