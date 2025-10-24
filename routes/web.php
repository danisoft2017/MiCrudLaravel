<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/',[ClienteController::class,'index'])->name('index');
Route::get('/create',[ClienteController::class,'create'])->name('create');
Route::post('/store',[ClienteController::class,'store'])->name('store');
Route::get('/edit/{id}',[ClienteController::class,'edit'])->name('edit');
Route::put('/update/{id}',[ClienteController::class,'update'])->name('update');
Route::delete('/destroy/{id}',[ClienteController::class,'destroy'])->name('destroy');
Route::get('/show/{id}',[ClienteController::class,'show'])->name('show');