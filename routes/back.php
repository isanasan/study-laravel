<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Back\DashboardController')->name('dashboard');

Route::resource('posts', 'Back\PostController')->except('show');

Route::group(['middleware' => 'can:admin'], function() {
    Route::resource('users','UserController')->except('show');
});
