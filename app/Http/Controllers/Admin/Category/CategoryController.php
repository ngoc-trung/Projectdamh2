<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view("backend/categories/listcategory");
    }
    public function create(){
         return view("backend/categories/addcategory");
    }
    public function store(){

    }
    public function edit(){
        return view("backend/categories/editcategory");
    }
    public function update(){

    }
    public function delete(){
        return "delete" ;
    }
}
