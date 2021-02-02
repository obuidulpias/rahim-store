<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    //return view('welcome');
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin');
})->name('dashboard');

//Products routes
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::post('/new-product', [ProductController::class, 'creatProduct'])->name('new-product');
Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manage-product');
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('update-product');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');