<?php  
	
Route::get('/backend/login.html','Backend\UserController@login')->name('backend_login');
Route::post('/backend/login.html','Backend\UserController@post_login')->name('backend_login');

Route::get('/backend/logout.html','Backend\UserController@logout')->name('backend_logout');




?>