<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
    return view('layouts.master');
});
//Product controller
Route::get('/product', [ProductController::class, 'index']);
Route::post('/product/search', [ProductController::class, 'search']);
Route::get('/product/search', [ProductController::class, 'search']);
Route::get('/product/edit/{id?}', [ProductController::class, 'edit']);
Route::post('/product/update', [ProductController::class, 'update']);
Route::post('/product/add', [ProductController::class, 'insert']);
Route::get('/product/remove/{id?}', [ProductController::class, 'remove']);

//Category controller
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/search', [CategoryController::class, 'search']);
Route::post('/category/search', [CategoryController::class, 'search']);
Route::get('/category/edit/{id?}', [CategoryController::class, 'edit']);
Route::get('/category/remove/{id?}', [CategoryController::class, 'remove']);
Route::post('/category/add', [CategoryController::class, 'insert']);
Route::post('/category/update', [CategoryController::class, 'update']);