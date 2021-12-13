<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Shop\CartController;
use App\Http\Controllers\Shop\ContactController;
use App\Http\Controllers\Shop\HomeController;
use App\Http\Controllers\Shop\PageController;
use App\Http\Controllers\Shop\PostController;
use App\Http\Controllers\Shop\ProductController;
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

    //e cho vào no ko nhận id đâu Ctrl Z lại đi

    //Trang sản phẩm
    Route::get('/san-pham' ,[ProductController::class,'index'] )->name('san-pham');


    //Chi tiết sản phẩm
    Route::get('/product-detail/{product_id}', [ProductController::class, 'detail_product']) ;

// // Tìm Kiếm Sản Phẩm

// Route::post('/tim-kiem', [App\Http\Controllers\Shop\SearchController::class, 'tim_kiem']);

// //Login-Checkout -- Đăng Nhập Để Thanh Toán

// Route::get('/login-checkout', [App\Http\Controllers\Shop\CheckoutController::class, 'login_checkout']);

// // Dang kys tai khoan de thanh toan
// Route::post('/add-customer', [App\Http\Controllers\Shop\CheckoutController::class, 'add_customer']);

// Route::get('/checkout', [App\Http\Controllers\Shop\CheckoutController::class, 'checkout']);

// Route::post('/save-checkout', [App\Http\Controllers\Shop\CheckoutController::class, 'save_checkout']);

// Route::get('/logout-checkout', [App\Http\Controllers\Shop\CheckoutController::class, 'logout_checkout']);

// Route::post('/login-customer', [App\Http\Controllers\Shop\CheckoutController::class, 'login_customer']);

// // Thanh Toan San Pham

// Route::get('/payment', [App\Http\Controllers\Shop\CheckoutController::class, 'payment']);

// Route::post('/order-place', [App\Http\Controllers\Shop\CheckoutController::class, 'order_place']);

// // Thêm Mã Giảm Giá


// Route::post('/check-coupon', [App\Http\Controllers\Shop\CouponController::class, 'check_coupon']);


// >>>>>>> Stashed changes

    // Cart (Thêm Sp vào giỏ hàng bằng session)
    Route::post('/save-cart', [CartController::class, 'save_cart']);

    Route::post('/add-cart-ajax', [CartController::class, 'add_cart_ajax'])->name('add-cart-ajax');

    Route::get('/gio-hang', [CartController::class, 'gio_hang'])-> name('cart');

    Route::get('/del-product/{session_id}', [CartController::class, 'del_product']);



    });
    Route::get('/del-product/{session_id}', [App\Http\Controllers\Shop\CartController::class, 'del_product']);

    Route::get('/del-all-product', [App\Http\Controllers\Shop\CartController::class, 'del_all_product']);

    Route::get('/gio-hang', [App\Http\Controllers\Shop\CartController::class, 'gio_hang']);

    Route::post('/update-cart', [App\Http\Controllers\Shop\CartController::class, 'update_cart']);


// Tìm Kiếm Sản Phẩm

Route::post('/tim-kiem', [App\Http\Controllers\Shop\SearchController::class, 'tim_kiem']);

// //Login-Checkout -- Đăng Nhập Để Thanh Toán
Route::get('/login-checkout', [App\Http\Controllers\Shop\CheckoutController::class, 'login_checkout']);
// Dang kys tai khoan de thanh toan


Route::post('/add-customer', [App\Http\Controllers\Shop\CheckoutController::class, 'add_customer']);

Route::get('/checkout', [App\Http\Controllers\Shop\CheckoutController::class, 'checkout']);

Route::post('/save-checkout', [App\Http\Controllers\Shop\CheckoutController::class, 'save_checkout']);

Route::get('/logout-checkout', [App\Http\Controllers\Shop\CheckoutController::class, 'logout_checkout']);

Route::post('/login-customer', [App\Http\Controllers\Shop\CheckoutController::class, 'login_customer']);

// Thanh Toan San Pham


Route::post('/comfirm-order', [App\Http\Controllers\Shop\CheckoutController::class, 'comfirm_order']);

// Thêm Mã Giảm Giá


Route::post('/check-coupon', [App\Http\Controllers\Shop\CouponController::class, 'check_coupon']);

// Thêm Thư Viện Ảnh

Route::get('/add-gallery/{product_id}', [App\Http\Controllers\Shop\GalleryController::class, 'add_gallery']);

Route::post('/select-gallery', [App\Http\Controllers\Shop\GalleryController::class, 'select_gallery']);

Route::post('/insert-gallery/{pro_id}', [App\Http\Controllers\Shop\GalleryController::class, 'insert_gallery']);

Route::post('/update-gallery-name', [App\Http\Controllers\Shop\GalleryController::class, 'update_gallery_name']);

Route::post('/delete-gallery', [App\Http\Controllers\Shop\GalleryController::class, 'delete_gallery']);

Route::post('/update-gallery', [App\Http\Controllers\Shop\GalleryController::class, 'update_gallery']);








// ============================================= backend =========================================================


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



// Thêm mã giảm giá

Route::get('/add-coupon', [App\Http\Controllers\CouponCon::class, 'add_coupon']); 

Route::get('/all-coupon', [App\Http\Controllers\CouponCon::class, 'all_coupon']);

Route::post('/save-coupon', [App\Http\Controllers\CouponCon::class, 'save_coupon']);

Route::get('/delete-coupon/{coupon_id}', [App\Http\Controllers\CouponCon::class, 'delete_coupon']);

//Quản Lý đơn hàng..

Route::get('/manage-order', [App\Http\Controllers\OrderCon::class, 'manage_order']);

Route::get('/view-order/{order_code}', [App\Http\Controllers\OrderCon::class, 'view_order']);

//In Hoa Don 

Route::get('/print-order/{checkout_code}', [App\Http\Controllers\OrderCon::class, 'print_order']);


// Phân Quyền cho User
Route::get('/register-auth', [App\Http\Controllers\AuthController::class, 'register_auth']);

Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);

Route::get('/login-auth', [App\Http\Controllers\AuthController::class, 'login_auth']);

Route::get('/logout-auth', [App\Http\Controllers\AuthController::class, 'logout_auth']);


