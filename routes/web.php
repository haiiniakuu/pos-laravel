<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalculatorController;

Route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'index']);
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::resource('dashboard', DashboardController::class);
    // Route::get('user', [UserController::class, 'index'])->name('user.index');
    // Route::get('user/create',[UserController::class, 'create'])->name('user.create');
    // Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    // Route::get('user/edit{id}', [UserController::class, 'edit'])->name('user.edit');
    // Route::put('user/update{id}', [UserController::class, 'update'])->name('user.update');
    // Route::delete('user/destroy/{id}',[UserController::class, 'destroy'])->name('user.destroy');
    Route::resource('user', UserController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('role', RoleController::class);
    Route::resource('product', ProductController::class);
    Route::resource('profile', ProfileController::class);
    Route::post('change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');
    Route::post('change-profile', [ProfileController::class, 'changeProfile'])->name('profile.change-profile');
    Route::resource('order', OrderController::class);
    Route::get('get-product', [OrderController::class, 'getProducts'])->name('get-product');

    Route::post('cashless', [ProfileController::class, 'paymentCashless'])->name('cashless');
    
});


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index']);
Route::get('belajar/tambah', [\App\Http\Controllers\BelajarController::class, 'tambah'])->name('belajar.tambah');
Route::get('belajar/kurang', [\App\Http\Controllers\BelajarController::class, 'kurang'])->name('belajar.kurang');
Route::get('belajar/kali', [\App\Http\Controllers\BelajarController::class, 'kali'])->name('belajar.kali');
Route::get('belajar/bagi', [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('belajar.bagi');

Route::post('storeTambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('storeTambah');
Route::post('storeKurang', [\App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('storeKurang');
Route::post('storeBagi', [\App\Http\Controllers\BelajarController::class, 'storeBagi'])->name('storeBagi');
Route::post('storeKali', [\App\Http\Controllers\BelajarController::class, 'storeKali'])->name('storeKali');



Route::get('calculator', [CalculatorController::class, 'create']);

Route::post('calculator.store', [CalculatorController::class, 'store'])->name('calculator.store');
