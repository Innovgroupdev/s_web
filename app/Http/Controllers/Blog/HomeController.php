<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Articles;
use App\Models\Categorie;
use App\Models\Categories;
use App\Models\Commentaire;
use App\Models\Publicites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function index()
    {
        return view('partials.index');
    }
    public function blog()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        $articleRecentFive = Article::orderBy('created_at', 'desc')->take(5)->get();
        $articleCommentes= Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();
        $articlePopFives = Articles::orderBy('nbvue', 'desc')->take(5)->get();
        $categories = Categorie::all();
//        $getCollections = collect([]);
//        foreach ($categories as $categorie){
//            $catArticles = Categorie::find($categorie->id)->articles;
//            $getCollections = $getCollections->push($catArticles);
//        }

        //$catArticleCollections = $getCollections;
       // dd($catArticleCollections);


        $publicites = Publicites::all();
        return view('partials.blog.index', compact(['articles', 'publicites', 'articleRecentFive','articleCommentes','categories','articlePopFives']));
    }

    public function article($id)
    {

        $articles = Articles::all();
        $articles  =  $articles->find($id);
        $nb = 0;

       // dd($articles);

        if (empty($articles)) {
            Flash::error('Articles not found');

            //return redirect(route('articles.index'));
        }
        $nb++;
        $article = Article::find($id);
        $article->nbvue = $article->nbvue + $nb;
        $article->save();
        //dd($nb);
        $publicites = Publicites::all();
        $categories = Categorie::all();

        $articleRecentFive = Articles::orderBy('created_at', 'desc')->take(5)->get();
        $articlePopFives = Articles::orderBy('nbvue', 'desc')->take(5)->get();
        $articleCommentes= Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();

        $articleCommentaires = Article::find($id)->commentaires;
        // dd( $articleCommentaires);
        return view('partials.blog.detail', compact(['publicites', 'articleRecentFive', 'articles','articleCommentes','categories','articlePopFives','articleCommentaires']));
    }

    public function detail()
    {

        $publicites = Publicites::all();
        $categories = Categorie::all();
        $articleRecentFive = Articles::orderBy('created_at', 'desc')->take(5)->get();
        $articlePopFives = Articles::orderBy('nbvue', 'desc')->take(5)->get();
        $articleCommentes= Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();
        return view('partials.blog.detail', compact(['publicites', 'articleRecentFive','articleCommentes','categories','articlePopFives']));
    }

    public function category($id)
    {


        $catArticles = Categorie::find($id)->articles;

        return view('partials.blog.category',compact(['catArticles']));
    }
}
