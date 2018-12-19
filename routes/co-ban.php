<?php  



// Route::post('category', 'CategoryController@add')->name('category');


// Route::post('category', 'CategoryController@delete')->name('category');


// route::get('/hello',function(){
// 	// echo "Welcome";
// 	return view('hello');



Route::get('co-ban-thanh/hienthi','co_ban\DemoController@hienthi');
Route::get('co-ban-thanh/sanpham','co_ban\DemoController@sanpham');
Route::get('co-ban-thanh/danhmuc','co_ban\DemoController@danhmuc');
Route::get('co-ban-thanh/xoa-sanpham/{id}','co_ban\DemoController@xoa')->name('xoasp');




?>