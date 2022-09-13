<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('hhh.hhh');

Route::get('/home', [ProductController::class, 'home'])->name('products.home'); //route untuk menampilkan table home product
Route::get('/products', [ProductController::class, 'index'])->name('products.index'); //route untuk menampilkan table product 
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); //route untuk menginputkan product
Route::post('/products', [ProductController::class, 'store']); //route untuk mengirimkan data product
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); //route untuk mengedit data product
Route::put('/products/{id}', [ProductController::class, 'update']); //route untuk mengirimkan data product yang sudah di edit
Route::get('products/destroy/{id}', [ProductController::class, 'destroy']); //route untuk menghapus data di database

// Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// Auth::routes();
// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

