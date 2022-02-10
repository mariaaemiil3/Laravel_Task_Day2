<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;




Route::get('/categories',[CategoryController::class,'list'])->name('category.list');

Route::get('/create',[CategoryController::class,'create'])->name('category.create')->middleware(['auth','is_admin']);
Route::post('/save',[CategoryController::class,'save'])->name('category.save')->middleware(['auth','is_admin']);

Route::delete('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete')->middleware(['auth','is_admin']);

Route::post('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit')->middleware(['auth','is_admin']);

Route::put('/update/{id}',[CategoryController::class,'update'])->name('category.update')->middleware(['auth','is_admin']);

Route::get('/show/{id}',[CategoryController::class,'show'])->name('category.show');


