<?php  
	Route::get('banner.html','BannerController@index')->name('bannerend');
	Route::get('banner-delete/{id}','BannerController@delete')->name('banner-del-end');
	Route::post('banner-delete-all','BannerController@delete_all')->name('ban-del-all');
	Route::get('banner-add','BannerController@bane_add')->name('bane_add');
	Route::post('banner-add','BannerController@post_bane_add')->name('bane_add');

	Route::get('banner-edit/{id}','BannerController@bane_edit')->name('bane_edit');
	Route::post('banner-edit/{id}','BannerController@post_bane_edit')->name('bane_edit');






?>