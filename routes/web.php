<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home'); // resources/views/home.blade.php
});

// jika file didalam folder lagi
Route::get('/inner', function () {
    return view('blog.inner'); // resources/views/blog/inner.blade.php
});
