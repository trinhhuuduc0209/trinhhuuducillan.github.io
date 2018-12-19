<?php

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
// middleware như 1 bộ lọc , middleware mặc định cảu laravel là middleware => auth(chứng thực đăng nhập của người dùng)
Route::group(['prefix' => 'backend','namespace' => 'Backend','middleware' => 'admin'],function(){
	Route::get('/','BackendController@index')->name('backendnm');
	// Route::group(['prefix' => 'backend\category','namespace' => 'Backend'],function(){
	// });
	require 'backend-category.php';
	require 'backend-product.php';
	require 'backend-banner.php';


});

	require 'backend-user.php';
// Có 2 tham số , tham số thứ nhất là 1 cái mảng,, tham số thứ 2 là 1 function

Route::get('', 'HomeController@home')->name('homenm');
Route::get('home/{id}', 'HomeController@home_view')->name('home_viewnm');
Route::get('gioi-thieu', 'HomeController@about')->name('aboutnm');
Route::get('/black/{slug}.html', 'HomeController@product_slug')->name('product_slug');
// ===================== Route có tham số=====================
route::get('test/{name}', 'HomeController@test')->name('testnm');
// =================route có tham số là name=====================
//-------------------------------------------------------------


// Đăng nhập tài khoản khách
Route::get('login', 'UserController@index')->name('user_login');
Route::post('login', 'UserController@post_index')->name('user_login');
Route::get('logout', 'UserController@post_logout')->name('user_logout');


// Đăng ký tài khoản khách
Route::get('register.html', 'UserController@register')->name('user_register');
Route::post('register.html', 'UserController@post_register')->name('user_register');


// Sửa thông tin cá nhân
Route::get('edit_account/{id}', 'UserController@edit_account')->name('edit_account');
Route::post('edit_account/{id}', 'UserController@post_edit_account')->name('edit_account');

Route::get('chane-pass/{id}', 'UserController@chane_pass')->name('chane_pass');
Route::post('chane-pass/{id}', 'UserController@post_chane_pass')->name('chane_pass');



// Tìm kiếm
Route::get('search', 'HomeController@search')->name('search');


//thêm sản phẩm vào giỏ hàng
Route::get('add-cart/{id}', 'CartController@add_cart')->name('add_cart');
Route::get('remode-cart/{id}', 'CartController@remode_cart')->name('remode_cart');
Route::get('update_cart', 'CartController@update_cart')->name('update_cart');

// View giỏ hàng
Route::get('check_cart', 'CartController@check_cart')->name('check_cart');


Route::get('buy_cart', 'CartController@buy_cart')->name('buy_cart');
Route::post('buy_cart', 'CartController@post_buy_cart')->name('buy_cart');



Route::get('history_cart', 'CartController@history_cart')->name('history_cart');


Route::get('view_cart/{id}', 'CartController@view_cart')->name('view_cart');



// Danh sách sản phẩm theo danh mục
Route::get('category/{id}', 'CategoryController@cat_list')->name('categorynm');
Route::get('product-view/{id}','ProductController@prod_view')->name('prod_view');


// Route::get('product/{id}', 'ProductController@prod_list')->name('productnm');
Route::get('/black/{view}.html', 'ProductController@prod_view_slug')->name('prod_view_slug');











// =============Thanh=================

	require 'co-ban.php';

// ===================================














?>