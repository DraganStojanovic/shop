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

Route::middleware(['auth', AdminCheckMiddleware::class])->prefix('admin')->group(function () {

    Route::prefix('contact')->name('contact.')->group(function () {
        Route::get('/all', [ContactController::class, 'getAllContacts'])->name('all-contacts');
        Route::post('/send', [ContactController::class, 'sendContact'])->name('send-contact');
        Route::get('/delete/{contact}', [ContactController::class, 'delete'])->name('obrisiContact');
        Route::get('/edit/edit/{id}', [ContactController::class, 'singleContact'])->name('single');
        Route::post('/edit/save/{id}', [ContactController::class, 'save'])->name('save');
    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/add', [ProductController::class, 'getAllProducts'])->name('addProduct');
        Route::post('/product', [ProductController::class, 'saveProduct'])->name('saveProduct');
        Route::get('/all', [ProductController::class, 'sendAdminProducts'])->name('allProducts');
        Route::delete('/delete/{product}', [ProductController::class, 'delete'])->name('obrisiProizvod');
        Route::get('/edit/edit/{id}', [ProductController::class, 'singleProduct'])->name('single');
        Route::put('/edit/save/{id}', [ProductController::class, 'save'])->name('save');
    });
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
