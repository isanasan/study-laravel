<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'back';
});

Route::get('/', 'Back\DashboardController')->name('dashboard');
