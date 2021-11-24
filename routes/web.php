<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Shop\ContactController;
use App\Http\Controllers\Shop\HomeController;
use App\Http\Controllers\Shop\PageController;
use App\Http\Controllers\Shop\PostController;
use App\Http\Controllers\Shop\ProductController;
use App\Http\Controllers\Shop\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layout');
// });

Auth::routes();

//fontend

Route::prefix('shop')->group(function () {
    // Trang chủ
    Route::get('/',[HomeController::class ,'index'])->name('home');

    //Trang liên hệ
    Route::get('/lien-he',[ContactController::class , 'index'])->name('lien-he');
    // Route::post();

    //Trang bài viết
    Route::get('/bai-viet',[PostController::class,'index'] )->name('post.index');
    Route::get('/bai-viet-chi-tiet',[PostController::class, 'show'])->name('post.show') ;

    //Trang trắng thông tin
    Route::get('/trang' ,[PageController::class,'index'] )->name('page.index');

    //Trang sản phẩm
    Route::get('/san-pham' ,[ProductController::class,'index'] )->name('san-pham');
});
//Chi tiết sản phẩm
Route::get('/product-detail/{product_id}', [App\Http\Controllers\Shop\ProductController::class, 'detail_product']);

// Cart (Thêm Sp vào giỏ hàng bằng session)
Route::post('/save-cart', [App\Http\Controllers\Shop\CartController::class, 'save_cart']);

Route::post('/add-cart-ajax', [App\Http\Controllers\Shop\CartController::class, 'add_cart_ajax']);

Route::get('/gio-hang', [App\Http\Controllers\Shop\CartController::class, 'gio_hang']);

Route::get('/del-product/{session_id}', [App\Http\Controllers\Shop\CartController::class, 'del_product']);

Route::post('/update-cart', [App\Http\Controllers\Shop\CartController::class, 'update_cart']);














// backend


Route::get('/admin_login', [App\Http\Controllers\AdminController::class, 'Admin']);


Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'show_dashboard']);

Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);

Route::post('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);


// category-product

Route::get('/add-category-product', [App\Http\Controllers\CategoryProductCon::class, 'add_category_product']);

Route::get('/all-category-product', [App\Http\Controllers\CategoryProductCon::class, 'all_category_product']);

Route::get('/unactive-category-product/{category_product_id}', [App\Http\Controllers\CategoryProductCon::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}', [App\Http\Controllers\CategoryProductCon::class, 'active_category_product']);

Route::post('/save-category-product', [App\Http\Controllers\CategoryProductCon::class, 'save_category_product']);

Route::get('/edit-category-product/{category_product_id}', [App\Http\Controllers\CategoryProductCon::class, 'edit_category_product']);

Route::get('/delete-category-product/{category_product_id}', [App\Http\Controllers\CategoryProductCon::class, 'delete_category_product']);

Route::post('/update-category-product/{category_product_id}', [App\Http\Controllers\CategoryProductCon::class, 'update_category_product']);


// brand-product
Route::get('/add-brand-product', [App\Http\Controllers\BrandProductCon::class, 'add_brand_product']);

Route::get('/all-brand-product', [App\Http\Controllers\BrandProductCon::class, 'all_brand_product']);

Route::get('/unactive-brand-product/{brand_product_id}', [App\Http\Controllers\BrandProductCon::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}', [App\Http\Controllers\BrandProductCon::class, 'active_brand_product']);

Route::post('/save-brand-product', [App\Http\Controllers\BrandProductCon::class, 'save_brand_product']);

Route::get('/edit-brand-product/{brand_product_id}', [App\Http\Controllers\BrandProductCon::class, 'edit_brand_product']);

Route::get('/delete-brand-product/{brand_product_id}', [App\Http\Controllers\BrandProductCon::class, 'delete_brand_product']);

Route::post('/update-brand-product/{brand_product_id}', [App\Http\Controllers\BrandProductCon::class, 'update_brand_product']);


//product
Route::get('/add-product', [App\Http\Controllers\ProductCon::class, 'add_product']);

Route::get('/all-product', [App\Http\Controllers\ProductCon::class, 'all_product']);

Route::get('/unactive-product/{product_id}', [App\Http\Controllers\ProductCon::class, 'unactive_product']);
Route::get('/active-product/{product_id}', [App\Http\Controllers\ProductCon::class, 'active_product']);

Route::post('/save-product', [App\Http\Controllers\ProductCon::class, 'save_product']);

Route::get('/edit-product/{product_id}', [App\Http\Controllers\ProductCon::class, 'edit_product']);

Route::get('/delete-product/{product_id}', [App\Http\Controllers\ProductCon::class, 'delete_product']);

Route::post('/update-product/{product_id}', [App\Http\Controllers\ProductCon::class, 'update_product']);




