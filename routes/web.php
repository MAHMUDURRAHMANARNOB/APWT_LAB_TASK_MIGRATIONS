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


Route::get('/', 'productController@home')->name ('home');
Route::get('/add', 'productController@add')->name('add');
Route::post('/add', 'productController@addProduct')->name('add');
Route::get('/edit/{id}', 'productController@edit');
Route::get('/details/{id}', 'productController@details');
Route::get('/delete/{id}', 'productController@delete');
Route::post('/edit', 'productController@updateData')->name('edit');
Route::get('/products', 'productController@products')->name('products');
Route::get('/contactus', 'productController@contactus')->name('contactus');