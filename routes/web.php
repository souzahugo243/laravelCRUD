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

Route::get("/", "UserController@index");

Route::resource('/category', 'CategoryController');

// Route::get('/search', 'CategoryController@search');

// DataTable ROUTE
Route::get('/ajax', 'CategoryController@ajax')->name('categoria.data');

Route::post('/category/destroy', ['as' => 'category.destroy', 'uses' => 'CategoryController@destroy']);