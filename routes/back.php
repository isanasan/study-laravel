<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Back\DashboardController')->name('dashboard');

Route::resource('posts', 'Back\PostController')->except('show');
