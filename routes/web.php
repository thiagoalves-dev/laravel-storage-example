<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home.index');

Route::post('/', 'HomeController@store')->name('home.store');
Route::post('/storeS3', 'HomeController@storeS3')->name('home.storeS3');

Route::get('/{filename}', 'HomeController@show')->name('home.show');
Route::get('/show-s3/{filename}', 'HomeController@showS3')->name('home.showS3');
