<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/shop', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('/admin/all-contacts', [\App\Http\Controllers\ContactController::class, 'getAllContacts']);
Route::post('/send-contact', [\App\Http\Controllers\ContactController::class, 'sendContact']);
Route::get('/admin/delete-contact/{contact}', [\App\Http\Controllers\ContactController::class, 'delete'])->name('obrisiContact');
Route::get('/admin/edit-contact/edit/{id}', [\App\Http\Controllers\ContactController::class, 'singleContact'])->name('contact.single');
Route::post('/admin/edit-contact/save/{id}', [\App\Http\Controllers\ContactController::class, 'save'])->name('contact.save');


Route::get('/admin/all-product', [\App\Http\Controllers\ProductController::class, 'getAllProducts']);
Route::post('/send-product', [\App\Http\Controllers\ProductController::class, 'sendProduct']);
Route::get('/admin/products', [\App\Http\Controllers\ProductController::class, 'sendAdminProducts']);

Route::get('/admin/delete-product/{product}', [\App\Http\Controllers\ProductController::class, 'delete'])->name('obrisiProizvod');
/**
 * Editovanje ili izmena single product-a !
 */
Route::get('/admin/edit-product/edit/{id}', [\App\Http\Controllers\ProductController::class, 'singleProduct'])->name('product.single');
/**
 * Updagte izmene product-a u bazu !!!
 */
Route::post('/admin/edit-product/save/{id}', [\App\Http\Controllers\ProductController::class, 'save'])->name('product.save');


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
