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
    return redirect()->route('blog.index');
});

Route::prefix('blog')->group(function () {
  Route::match(['get', 'post'], '/testing', 'BlogController@testing')->name('test');

  Route::get('/', 'BlogController@index')->name('blog.index');
  Route::get('/restore', 'BlogController@restore')->name('blog.restore');
  Route::get('/fc/{id}', 'BlogController@fc')->name('blog.fc');

  Route::get('/create', 'BlogController@create')->name('blog.create');
  Route::post('/store', 'BlogController@store')->name('blog.store');

  Route::get('/{id}', 'BlogController@show')->name('blog.show');

  Route::get('/edit/{id}', 'BlogController@edit')->name('blog.edit');
  // Regulat Expression Constrain (digunakan untuk menetapkan suatu nilai
  // parameter apakah bernilai int/varchar) ['id' => '[0-9]+', 'name' => '[a-z]+']
  // untuk membuat ini menjadi global ke app/providres
  Route::put('/{id}', 'BlogController@update')->where('id', '[0-9]+');

  Route::delete('/{id}', 'BlogController@destroy')->name('blog.destroy');
});
