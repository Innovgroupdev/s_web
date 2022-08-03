<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Categories;
use App\Models\Commentaire;
use App\Models\Publicites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('partials.index');
    }
    public function blog()
    {
        $articles = DB::table('articles')->orderBy('created_at', 'desc')->get();
        $articleRecentFive = Articles::orderBy('created_at', 'desc')->take(5)->get();
        $articleCommentes= Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();

//        $catArticle= Categories::with('articles')->get();
//        $catArticles = $catArticle->first()->articles();
        //$catArticles=Categories::with("articles")->first();
       // dump($catArticles);
        //$catArticle= Categories::where('id', '=', 1)->with('articles')->get();
        $catArticle = Articles::with("categories")->first();
        dd($catArticle);

        $publicites = Publicites::all();
        return view('partials.blog.index', compact(['articles', 'publicites', 'articleRecentFive','articleCommentes']));
    }

    public function article($id)
    {

        $articles = Articles::all();
        $articles  =  $articles->find($id);
       // dd($articles);

        if (empty($articles)) {
            Flash::error('Articles not found');

            //return redirect(route('articles.index'));
        }

        $publicites = Publicites::all();

        $articleRecentFive = Articles::orderBy('created_at', 'desc')->take(5)->get();
        $articleCommentes= Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();
        return view('partials.blog.detail', compact(['publicites', 'articleRecentFive', 'articles','articleCommentes']));
    }

    public function detail()
    {

        $publicites = Publicites::all();
        $articleRecentFive = Articles::orderBy('created_at', 'desc')->take(5)->get();
        $articleCommentes= Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();
        return view('partials.blog.detail', compact(['publicites', 'articleRecentFive','articleCommentes']));
    }

    public function category()
    {
        return view('partials.blog.category');
    }
}
