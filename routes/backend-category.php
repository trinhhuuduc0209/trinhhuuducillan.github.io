<?php  
	Route::get('category.html','CategoryController@index')->name('categoryend');
	Route::get('category-delete/{id}','CategoryController@delete')->name('category-del-end');
	Route::post('category-delete-all','CategoryController@delete_all')->name('cat-del-all');
	Route::get('category-add','CategoryController@cate_add')->name('cate_add');
	Route::post('category-add','CategoryController@post_cate_add')->name('cate_add');

	Route::get('category-edit/{id}','CategoryController@cate_edit')->name('cate_edit');
	Route::post('category-edit/{id}','CategoryController@post_cate_edit')->name('cate_edit');


?>