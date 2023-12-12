<?php

use App\Http\Controllers\testController;
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

Route::get('/', [testController::class, 'index']);
Route::get('/products', [testController::class, 'product'])->name('products');
//admin
Route::get('adminpanel', [testController::class, 'adminpanel'])->name('adminpanel');
//ekleme
Route::get('/add/product', [testController::class, 'addproduct'])->name('addproduct');
Route::post('/add/product', [testController::class, 'createProduct'])->name('addproduct');
//güncelleme
Route::get('/edit/product/{id}',[testController::class, 'edit'])->name('editproduct');
Route::post('/edit/product/{id}',[testController::class, 'update'])->name('editproduct');
//delete
Route::get('/delete/product/{id}', [testController::class, 'destroy'])->name('deleteproduct');
