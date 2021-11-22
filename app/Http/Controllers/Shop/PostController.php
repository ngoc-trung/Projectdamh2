<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('shop.post.index');
    }
    public function show(){
        return view('shop.post.show');
    }
}