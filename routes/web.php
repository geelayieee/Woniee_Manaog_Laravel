<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;

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

Route::get('/register', [UserController::class, 'create'])->name('register.create');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');


Route::group(['middleware' => 'auth'], function () {

 Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::put('/products/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('product.destroy');



Route::get('/', function () {
    return view('welcome');
});
