<?php

use App\Models\Article;
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
    $articleRecentFive = Article::orderBy('created_at', 'desc')->where('etat', 1)->take(5)->get();
    $countries = \App\Models\Country::all();
    $essayers = \App\Models\Essayer::all();
    return view('partials.index',compact('countries','articleRecentFive','essayers'));
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('blog', [App\Http\Controllers\Blog\HomeController::class, 'blog'])->name('blog');
Route::get('/search/', [App\Http\Controllers\Blog\HomeController::class, 'search'])->name('search');
Route::get('blog/{titre?}', [App\Http\Controllers\Blog\HomeController::class, 'article']);
Route::get('article', [App\Http\Controllers\Blog\HomeController::class, 'detail'])->name('detail');
Route::get('categorie/{titre?}', [App\Http\Controllers\Blog\HomeController::class, 'category']);
Route::get('/validate-email',[App\Http\Controllers\Blog\HomeController::class, 'validateEmail']);

Route::resource('categories', App\Http\Controllers\CategoriesController::class);
Route::resource('publicites', App\Http\Controllers\PublicitesController::class);
Route::resource('articles', App\Http\Controllers\ArticlesController::class);
Route::resource('faqs', App\Http\Controllers\FaqController::class);
Route::resource('informers', App\Http\Controllers\InformerController::class);
Route::resource('essayers', App\Http\Controllers\EssayerController::class);
Route::resource('news', App\Http\Controllers\NewsController::class);
Route::resource('commentaires', App\Http\Controllers\CommentaireController::class);

Route::post('/storeFaqs/', [App\Http\Controllers\FaqController::class, 'storeFaqs'])->name('storeFaqs');
Route::post("/enregistre", [App\Http\Controllers\NewsController::class, 'enregistre'])->name('enregistre');
Route::post("informer-enregistre", [App\Http\Controllers\InformerController::class, 'enregistre'])->name('informer-enregistre');
Route::post("essayer-enregistre", [App\Http\Controllers\EssayerController::class, 'enregistre'])->name('essayer-enregistre');
Route::post("commentaire-enregistre", [App\Http\Controllers\CommentaireController::class, 'enregistreCom'])->name('commentaire-enregistre');
Route::put("articles/etat/{id}", [App\Http\Controllers\ArticlesController::class, 'etat'])->name('etat');
Route::put("/commentaire-update/{id}", [App\Http\Controllers\CommentaireController::class, 'updateDetail']);

