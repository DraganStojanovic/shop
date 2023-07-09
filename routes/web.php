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
//Route::get('/', function () {
//    return view('welcome', ['name' => 'Home']);
//});
//Route::get('/about-page', function () {
//    return view('about', ['name' => 'About']);
//});
//Route::get('/shop-page', function () {
//    return view('shop', ['name' => 'Shop']);
//});
//Route::get('/contact-page', function () {
//    return view('contact', ['name' => 'Contact']);
//});
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
//Route::get('/', "HomeController@index");

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);
//Route::get('/contact', "ContactController@index");

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);
//Route::get('/about', "AboutController@index");

Route::get('/shop',[\App\Http\Controllers\ProductController::class, 'index']);
//Route::get('/shop','ShopController@index');
Route::get('/admin/all-contacts', [\App\Http\Controllers\ContactController::class, 'getAllContacts']);


