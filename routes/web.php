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

Route::view('/', "welcome");
Route::view('/about', "about");
Route::view('/shop', "shop");
Route::view('/contact', "contact");


