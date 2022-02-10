<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::get('/articles',[ArticleController::class,'list'])->name('article.list')->middleware(['auth']);

Route::get('/article/create',[ArticleController::class,'create'])->name('article.create')->middleware(['auth','is_admin','is_old']);
Route::post('/article/save',[ArticleController::class,'save'])->name('article.save');

Route::delete('/article/delete/{id}',[ArticleController::class,'delete'])->name('article.delete');

Route::post('/article/edit/{id}',[ArticleController::class,'edit'])->name('article.edit');

Route::put('/article/update/{id}',[ArticleController::class,'update'])->name('article.update');

Route::get('/article/show/{id}',[ArticleController::class,'show'])->name('article.show');