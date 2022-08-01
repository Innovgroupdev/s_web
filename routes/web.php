<?php

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
    return view('partials.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('categories', App\Http\Controllers\CategoriesController::class);


Route::resource('publicites', App\Http\Controllers\PublicitesController::class);


Route::resource('articles', App\Http\Controllers\ArticlesController::class);

///Route::get('home', 'Blog\HomeController@index')->name('home');
Route::get('blog', [App\Http\Controllers\Blog\HomeController::class, 'blog'])->name('blog');
Route::get('article', [App\Http\Controllers\Blog\HomeController::class, 'detail'])->name('detail');
Route::get('category', [App\Http\Controllers\Blog\HomeController::class, 'category'])->name('category');
