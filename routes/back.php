<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'back';
});

Route::get('/', 'Back\DashboardController')->name('dashboard');

Route::resource('Posts', 'Back/PostController')->except('show');
