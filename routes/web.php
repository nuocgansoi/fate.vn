<?php

Route::get('/', function () {
    return view('welcome');
});


//Admin Page
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('star', 'StarController');
});
