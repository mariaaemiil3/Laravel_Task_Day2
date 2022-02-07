<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/categories',[CategoryController::class,'list'])->name('category.list');

Route::get('/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/save',[CategoryController::class,'save'])->name('category.save');

Route::delete('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

Route::post('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
// Route::post('category.show/{id}', function () {
//     return view('show');
// });
Route::put('/update/{id}',[CategoryController::class,'update'])->name('category.update');

Route::get('/show/{id}',[CategoryController::class,'show'])->name('category.show');

// Route::delete('/delete/{id}', function (Request $request) {
//     $token = $request->session()->token();

//     $token = csrf_token();

//     // ...
// });

Route::get('/articles',[ArticleController::class,'list'])->name('article.list');

Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');
Route::post('/article/save',[ArticleController::class,'save'])->name('article.save');

Route::delete('/article/delete/{id}',[ArticleController::class,'delete'])->name('article.delete');

Route::post('/article/edit/{id}',[ArticleController::class,'edit'])->name('article.edit');

Route::put('/article/update/{id}',[ArticleController::class,'update'])->name('article.update');

Route::get('/article/show/{id}',[ArticleController::class,'show'])->name('article.show');