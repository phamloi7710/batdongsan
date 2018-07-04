<?php

Route::get('admin/dang-nhap-he-thong.html','Account\LoginController@getLoginAdmin')->name('getLoginAdmin');
Route::post('admin/dang-nhap-he-thong.html','Account\LoginController@postLoginAdmin')->name('postLoginAdmin');
Route::get('admin/logout.html','Account\LoginController@getLogoutAdmin')->name('getLogoutAdmin');
Route::group(['prefix'=>'admin'],function(){
	Route::get('', 'Admin\AdminController@getIndexAdmin')->name('getIndexAdmin');
});
