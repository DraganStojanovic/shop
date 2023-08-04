<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);

Route::get('/shop',[\App\Http\Controllers\ProductController::class, 'index']);

Route::get('/admin/all-contacts', [\App\Http\Controllers\ContactController::class, 'getAllContacts']);
Route::post('/send-contact', [\App\Http\Controllers\ContactController::class, 'sendContact']);
Route::get('/admin/delete-contact/{contact}', [\App\Http\Controllers\ContactController::class, 'delete']);

Route::get('/admin/all-product', [\App\Http\Controllers\ProductController::class, 'getAllProducts']);
Route::post('/send-product', [\App\Http\Controllers\ProductController::class, 'sendProduct']);
Route::get('/admin/products',[\App\Http\Controllers\ProductController::class, 'sendAdminProducts']);
Route::get('/admin/delete-product/{product}', [\App\Http\Controllers\ProductController::class, 'delete']);






