<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Front\PostController@index')->name('home');

Route::get('posts/tag/{tagsSlug}', 'Front\PostController@index')
    ->where('tagsSlug', '[a-z]+')
    ->name('posts.index.tag');

Route::resource('posts', 'Front\PostController')->only(['index', 'show']);
