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
    Route::get('/all-contacts', [ContactController::class, 'getAllContacts'])->name('all-contacts');
    Route::post('/send-contact', [ContactController::class, 'sendContact'])->name('send-contact');
    Route::get('/delete-contact/{contact}', [ContactController::class, 'delete'])->name('obrisiContact');
    Route::get('/edit-contact/edit/{id}', [ContactController::class, 'singleContact'])->name('contact.single');
    Route::post('/edit-contact/save/{id}', [ContactController::class, 'save'])->name('contact.save');


    Route::get('/add-product', [ProductController::class, 'getAllProducts']);
    Route::post('/send-product', [ProductController::class, 'sendProduct'])->name('sendProduct');
    Route::get('/all-products', [ProductController::class, 'sendAdminProducts']);
    Route::get('/delete-product/{product}', [ProductController::class, 'delete'])->name('obrisiProizvod');
    /**
     * Editovanje ili izmena single product-a !
     */
    Route::get('/edit-product/edit/{id}', [ProductController::class, 'singleProduct'])->name('product.single');
    /**
     * Updagte izmene product-a u bazu !!!
     */
    Route::post('/edit-product/save/{id}', [ProductController::class, 'save'])->name('product.save');
});

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
