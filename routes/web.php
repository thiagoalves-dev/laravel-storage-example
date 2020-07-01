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

Route::get('/products', 'ProductsController@index');
Route::get('/products/{product}', 'ProductsController@show');

Route::get('/categories/{category}', 'CategoriesController@show');

Route::post('/', 'HomeController@store')->name('home.store');
Route::post('/storeS3', 'HomeController@storeS3')->name('home.storeS3');

//Route::get('/{filename}', 'HomeController@show')->name('home.show');
Route::get('/show-s3/{filename}', 'HomeController@showS3')->name('home.showS3');

Route::resource('registers', 'RegistersController', ['only' => ['index', 'create', 'store']]);

Route::post('/users', 'UsersController@store')->name('users.store');