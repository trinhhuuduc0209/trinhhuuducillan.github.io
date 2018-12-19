<?php  
	
	Route::get('product.html','ProductController@index')->name('productend');
	Route::get('product-delete/{id}','ProductController@delete')->name('product-del-end');
	Route::post('product-delete-all','ProductController@delete_all')->name('pro-del-all');
	Route::get('product-add','ProductController@prod_add')->name('prod_add');
	Route::post('product-add','ProductController@post_prod_add')->name('prod_add');

	Route::get('product-edit/{id}','ProductController@prod_edit')->name('prod_edit');
	Route::post('product-edit/{id}','ProductController@post_prod_edit')->name('prod_edit');

	Route::get('prod-del-img/{id}','ProductController@prodel_img')->name('prod-del-img');





?>