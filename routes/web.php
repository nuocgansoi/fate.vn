<?php

Route::get('/', 'HomeController@soon');
Route::get('/home', 'HomeController@index');
Route::resource('subscriber', 'SubscriberController');

//Admin Page
Route::get('admin/login', 'Admin\AdminController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\AdminController@login')->name('admin.login');
Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'role:' . \App\Models\User::ROLE_ADMIN,
], function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('star', 'StarController');
    Route::resource('subscriber', 'SubscriberController');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
