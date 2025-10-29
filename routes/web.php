<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AuthController;

Route::get('/index',[ClienteController::class,'index'])->name('index');
Route::get('/create',[ClienteController::class,'create'])->name('create');
Route::post('/store',[ClienteController::class,'store'])->name('store');
Route::get('/edit/{id}',[ClienteController::class,'edit'])->name('edit');
Route::put('/update/{id}',[ClienteController::class,'update'])->name('update');
Route::delete('/destroy/{id}',[ClienteController::class,'destroy'])->name('destroy');
Route::get('/show/{id}',[ClienteController::class,'show'])->name('show');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logeo', [AuthController::class, 'logeo'])->name('logeo');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');