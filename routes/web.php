<?php

Route::get('/', 'HomeController@soon');
Route::resource('subscribe', 'SubscribeController');

//Admin Page
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('star', 'StarController');
});
