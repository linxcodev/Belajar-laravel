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

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/restore', 'BlogController@restore')->name('blog.restore');
Route::get('/blog/fc/{id}', 'BlogController@fc')->name('blog.fc');

Route::get('/blog/create', 'BlogController@create')->name('blog.create');
Route::post('/blog/store', 'BlogController@store')->name('blog.store');

Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');

Route::get('/blog/edit/{id}', 'BlogController@edit')->name('blog.edit');
Route::put('/blog/{id}', 'BlogController@update');

Route::delete('/blog/{id}', 'BlogController@destroy')->name('blog.destroy');
