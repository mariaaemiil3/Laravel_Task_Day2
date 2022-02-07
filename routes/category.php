<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;




Route::get('/categories',[CategoryController::class,'list'])->name('category.list');

Route::get('/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/save',[CategoryController::class,'save'])->name('category.save');

Route::delete('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

Route::post('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');

Route::put('/update/{id}',[CategoryController::class,'update'])->name('category.update');

Route::get('/show/{id}',[CategoryController::class,'show'])->name('category.show');


