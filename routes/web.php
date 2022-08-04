<?php

use App\Models\Articles;
use App\Models\News;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    //$news = News::all();
    $articleRecentFive = Articles::orderBy('created_at', 'desc')->take(5)->get();
    $countries = \App\Models\Country::all();
    return view('partials.index',compact('countries','articleRecentFive'));
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('categories', App\Http\Controllers\CategoriesController::class);


Route::resource('publicites', App\Http\Controllers\PublicitesController::class);


Route::resource('articles', App\Http\Controllers\ArticlesController::class);

///Route::get('home', 'Blog\HomeController@index')->name('home');
Route::get('blog', [App\Http\Controllers\Blog\HomeController::class, 'blog'])->name('blog');
Route::get('blog/{id}', [App\Http\Controllers\Blog\HomeController::class, 'article']);
Route::get('article', [App\Http\Controllers\Blog\HomeController::class, 'detail'])->name('detail');
Route::get('category/{id}', [App\Http\Controllers\Blog\HomeController::class, 'category']);


Route::resource('informers', App\Http\Controllers\InformerController::class);


Route::resource('essayers', App\Http\Controllers\EssayerController::class);


Route::resource('news', App\Http\Controllers\NewsController::class);

Route::resource('commentaires', App\Http\Controllers\CommentaireController::class);

//Route::post("commentaire/register", [App\Http\Controllers\Blog\HomeController::class, 'store']);
Route::get('/validate-email',[App\Http\Controllers\Blog\HomeController::class, 'validateEmail']);
Route::post("/enregistre", [App\Http\Controllers\NewsController::class, 'enregistre'])->name('enregistre');
Route::post("informer-enregistre", [App\Http\Controllers\InformerController::class, 'enregistre'])->name('informer-enregistre');
Route::post("essayer-enregistre", [App\Http\Controllers\EssayerController::class, 'enregistre'])->name('essayer-enregistre');
Route::post("commentaire-enregistre", [App\Http\Controllers\CommentaireController::class, 'enregistreCom'])->name('commentaire-enregistre');
Route::put("articles/state{id}", [App\Http\Controllers\ArticlesController::class, 'desactiver']);
