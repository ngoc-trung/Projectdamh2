<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test1(){
        $a = 12 ;
        $b = 22 ;
        $kq = $a + $b ;
        $str = "Ôi bạn ơi ÔI bạ ơi" ;
        $data = [
            "a" => $kq ,
            "b" => $str
        ];

        return view("Test1" ,  $data) ;
    }
    public function test2($a , $b){

        return "Xin chào chào chào chào".$a.$b ;
    }
}
