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

use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get('/', 'UsersController@index');
Route::get('login', 'UsersController@login')->name('login');
Route::get('logout', 'UsersController@logout')->name('logout');
Route::post('authenticate', 'UsersController@authenticate')->name('authenticate');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/home', 'UsersController@index')->name('index');

    Route::prefix('pelanggan')->name('pelanggan.')->group(function () {
        Route::get('', 'PelangganController@index')->name('index');
        Route::get('create', 'PelangganController@create')->name('create');
        Route::post('store', 'PelangganController@store')->name('store');
        Route::get('{id}/edit', 'PelangganController@edit')->name('edit');
        Route::patch('{id}/edit', 'PelangganController@update')->name('update');
        Route::delete('{id}/delete', 'PelangganController@destroy')->name('delete');
    });
});

