<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminCheckMiddleware;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/shop', [ProductController::class, 'index']);

Route::middleware(['auth', AdminCheckMiddleware::class])->prefix('admin')->group(function(){
    Route::get('/contact/all', [ContactController::class, 'getAllContacts'])->name('all-contacts');
    Route::post('/contact/send', [ContactController::class, 'sendContact'])->name('send-contact');
    Route::get('/contact/delete/{contact}', [ContactController::class, 'delete'])->name('obrisiContact');
    Route::get('/contact/edit/edit/{id}', [ContactController::class, 'singleContact'])->name('contact.single');
    Route::post('/contact/edit/save/{id}', [ContactController::class, 'save'])->name('contact.save');

    Route::get('/product/add', [ProductController::class, 'getAllProducts'])->name('addProduct');
    Route::post('/product/product', [ProductController::class, 'saveProduct'])->name('saveProduct');
    Route::get('/product/all', [ProductController::class, 'sendAdminProducts'])->name('allProducts');
    Route::delete('/product/delete/{product}', [ProductController::class, 'delete'])->name('obrisiProizvod');


    Route::get('/product/edit/edit/{id}', [ProductController::class, 'singleProduct'])->name('product.single');
    Route::put('/product/edit/save/{id}', [ProductController::class, 'save'])->name('product.save');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
