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

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Auth::routes(['register' => true]);


Route::get('products/{id}/gallery', 'ProductController@gallery')->name('products.gallery');
Route::resource('products', 'ProductController');
Route::resource('product-galleries', 'ProductGalleryController');
Route::get('products/{id}/set-status', 'TransactionController@setStatus')->name('transaction.status');
Route::resource('transaction', 'TransactionController');
