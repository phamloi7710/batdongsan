<?php

Route::get('admin/dang-nhap-he-thong.html','Account\LoginController@getLoginAdmin')->name('getLoginAdmin');
Route::post('admin/dang-nhap-he-thong.html','Account\LoginController@postLoginAdmin')->name('postLoginAdmin');
Route::get('admin/logout.html','Account\LoginController@getLogoutAdmin')->name('getLogoutAdmin');
Route::group(['prefix'=>'admin','middleware' => 'auth'],function(){
	Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\controllers\UploadController@upload');
	Route::get('', 'Admin\AdminController@getIndexAdmin')->name('getIndexAdmin');
	Route::group(['prefix'=>'danh-muc-du-an'], function(){
		Route::get('danh-sach.html','Admin\DuAn\DuAnController@getListDanhMucDuAn')->name('getListDanhMucDuAn');
		Route::get('them-moi.html','Admin\DuAn\DuAnController@getAddDanhMucDuAn')->name('getAddDanhMucDuAn');
		Route::post('them-moi.html','Admin\DuAn\DuAnController@postAddDanhMucDuAn')->name('postAddDanhMucDuAn');
		Route::get('chinh-sua-danh-muc-du-an/{slug}.html','Admin\DuAn\DuAnController@getEditDanhMucDuAn')->where(['url'=>'[0-9A-Za-z\-]+','id' => '[0-9]'])->name('getEditDanhMucDuAn');
		Route::post('chinh-sua-danh-muc-du-an/{slug}.html','Admin\DuAn\DuAnController@postEditDanhMucDuAn')->where(['url'=>'[0-9A-Za-z\-]+','id' => '[0-9]'])->name('postEditDanhMucDuAn');
		Route::get('xoa-danh-muc-du-an/{id}.html','Admin\DuAn\DuAnController@getDeleteDanhMucDuAn')->name('getDeleteDanhMucDuAn');
	});
	Route::group(['prefix'=>'du-an'], function(){
		Route::get('danh-sach.html','Admin\DuAn\DuAnController@getListDuAn')->name('getListDuAn');
		Route::get('them-moi.html','Admin\DuAn\DuAnController@getAddDuAn')->name('getAddDuAn');
		Route::post('them-moi.html','Admin\DuAn\DuAnController@postAddDuAn')->name('postAddDuAn');
		Route::get('chinh-sua-du-an/{slug}.html','Admin\DuAn\DuAnController@getEditDuAn')->where(['url'=>'[0-9A-Za-z\-]+','id' => '[0-9]'])->name('getEditDuAn');
		Route::post('chinh-sua-du-an/{slug}.html','Admin\DuAn\DuAnController@postEditDuAn')->where(['url'=>'[0-9A-Za-z\-]+','id' => '[0-9]'])->name('postEditDuAn');
		Route::get('xoa-danh-muc-du-an/{id}.html','Admin\DuAn\DuAnController@getDeleteDuAn')->name('getDeleteDuAn');
	});
});