<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\voucherController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\productdetailController;
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

Route::get('/', function () {
    return view('content.home');
});
//frontend
Route::get('/admin/', [HomeController::class, 'index']);
Route::get('/admin/home', [HomeController::class, 'index']);
Route::post('/search_product', [HomeController::class, 'search_product']);

//backend
Route::get('/admin/login', [AdminController::class, 'index']);
Route::get('/admin/dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/admin/logout', [AdminController::class, 'logout']);
Route::post('/admin/dashboard', [AdminController::class, 'dashboard']);


//category product
Route::get('/admin/add_category', [categoryController::class, 'add_category']);
Route::post('/admin/save_category', [categoryController::class, 'save_category']);
Route::get('/admin/all_category', [categoryController::class, 'all_category']);
Route::get('/admin/edit_category/{id_product}', [categoryController::class, 'edit_category']);
Route::post('/admin/update_category/{id_product}', [categoryController::class, 'update_category']);
Route::get('/admin/delete_category/{id_product}', [categoryController::class, 'delete_category']);


// add product detail
Route::get('/admin/add_productdetail', [productdetailController::class, 'add_productdetail']);
Route::post('/admin/save_productdetail', [productdetailController::class, 'save_productdetail']);
Route::get('/admin/all_productdetail', [productdetailController::class, 'all_productdetail']);
Route::get('/admin/edit_productdetail/{id_product}', [productdetailController::class, 'edit_productdetail']);
Route::post('/admin/update_productdetail/{id_product_detail}', [productdetailController::class, 'update_productdetail']);
Route::get('/admin/delete_productdetail/{id_product_detail}', [productdetailController::class, 'delete_productdetail']);



//voucher product
Route::get('/admin/add_voucher', [voucherController::class, 'add_voucher']);
Route::post('/admin/save_voucher', [voucherController::class, 'save_voucher']);
Route::get('/admin/all_voucher', [voucherController::class, 'all_voucher']);
Route::get('/admin/edit_voucher/{id_voucher}', [voucherController::class, 'edit_voucher']);
Route::post('/admin/update_voucher/{id_voucher}', [voucherController::class, 'update_voucher']);
Route::get('/admin/delete_voucher/{id_voucher}', [voucherController::class, 'delete_voucher']);




//client route
Route::get('/', [ProductController::class, 'home']);

Route::get('/men', [ProductController::class,'index']);

Route::get('/{product_name}/{id_product}/{id_product_detail}',[ProductController::class,'show']);

Route::get('/{product_name}/{id_product}/{id_product_detail}/{color_name}',[ProductController::class,'showByColor']);

Route::get('/login',[ClientController::class,'login']);

Route::get('/cart', function(){
    return view('client.cart');
});

Route::get('/pay', function(){
    return view('client.pay');
});