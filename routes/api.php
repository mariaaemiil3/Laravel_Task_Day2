<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ArticleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories',[CategoryController::class,'list'])->name('category.list');

Route::post('/save',[CategoryController::class,'save'])->name('category.save');

Route::delete('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

Route::post('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');

Route::put('/update/{id}',[CategoryController::class,'update'])->name('category.update');

Route::get('/show/{id}',[CategoryController::class,'show'])->name('category.show');

// =====================================================================================================
Route::get('/articles',[ArticleController::class,'list'])->name('article.list');

Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');
Route::post('/article/save',[ArticleController::class,'save'])->name('article.save');

Route::post('/article/edit/{id}',[ArticleController::class,'edit'])->name('article.edit');
Route::put('/article/update/{id}',[ArticleController::class,'update'])->name('article.update');

Route::delete('/article/delete/{id}',[ArticleController::class,'delete'])->name('article.delete');

Route::get('/article/show/{id}',[ArticleController::class,'show'])->name('article.show');