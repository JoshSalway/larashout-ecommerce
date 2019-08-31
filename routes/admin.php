<?php

//Route::view('/admin', 'admin.dashboard.index');
//Route::view('/admin/login', 'admin.auth.login');

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminLoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::get('/', function () {
        return view('admin.dashboard.index');
    });
});
