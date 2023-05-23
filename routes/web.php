<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('prueba');

Auth::routes();
//Route::auth();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('products.home');
Route::get('products',[ProductController::class, 'index'])->name('products.index');
Route::get('products/create',[ProductController::class,'create'])->name('products.create');
Route::post('product/store',[ProductController::class, 'store'])->name('products.store');
Route::get('product/show/{id}', [ProductController::class,'show'])->name('products.show');
Route::get('products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('productS/delete/{id}',[ProductController::class,'destroy'])->name('products.delete');
