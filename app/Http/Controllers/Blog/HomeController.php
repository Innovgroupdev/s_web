<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Controllers\VisitlogController;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Publicite;
use Illuminate\Http\Request;

use Illuminate\Support\Arr;
use Laracasts\Flash\Flash;

class HomeController extends Controller
{
    /*
     * show index blog
     * */
    public function index()
    {
        return view('partials.index');
    }

    /*
     * show blog
     * */
    public function blog()
    {
        $articleRecentFive = Article::orderBy('created_at', 'desc')->where('etat', 1)->take(5)->get();
        $articleCommentes1 = Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();
        $articleCommentes = collect([]);
        foreach( $articleCommentes1 as $articleCommente){
            if($articleCommente->article){
                if($articleCommente->article->etat == 1 )
                {
                    $articleCommentes->push($articleCommente);
                }
            }
        }
        $articlePopFives = Article::orderBy('nbvue', 'desc')->where('etat', 1)->take(5)->get();
        $cats = Categorie::all();
        $getCollections = collect([]);
        foreach ($cats as $cat){
            $art = Article::where('categorie_id',$cat->id)->where('etat', 1);
            if ($art->count()>0 ){
                $getCollections = $getCollections->push($cat);
            }
        }
        $articles =  Article::orderBy('created_at', 'desc')->where('etat', 1)->paginate(12);
        $categories = $getCollections;
        $publicites = Publicite::all();
        VisitLogController::CompterVisiteurs();
        return view('partials.blog.index', compact(['articles', 'publicites', 'articleRecentFive','articleCommentes','categories','articlePopFives']));
    }

   /*
    *  search article
    * */
    public function search(Request $request)
    {
        $search =  $request->input('q');
        if($search!=""){
            $articles = Article::where(function ($query) use ($search){
                $query->where('libelle', 'like', '%'.$search.'%')
                    ->orWhere('contenu', 'like', '%'.$search.'%')
                    ->orWhere('created_at', 'like', '%'.$search.'%');
            })->where('etat', 1)
                ->paginate(12);
            $articles->appends(['q' => $search]);
        }
        else{
            $articles = Article::orderBy('created_at', 'desc')->where('etat', 1)->paginate(12);
            Flash::error('Article non trouvé');
        }
        return view('partials.search', compact(['articles','search']));
    }

   /*
    *  article detail
    * */
    public function article($titre)
    {
        $articles = Article::firstWhere('urlTitre', $titre);
        if(!$articles->etat){
            return abort('503');
        }
        $nb = 0;
        if (empty($articles)) {
            Flash::error('Article non trouvé');
        }
        $nb++;
        $article = Article::firstWhere('urlTitre', $titre);
        $article->nbvue = $article->nbvue + $nb;
        $article->save();
        $publicites = Publicite::all();
        $cats = Categorie::all();
        $getCollections = collect([]);
        foreach ($cats as $cat){
            $art = Article::where('categorie_id',$cat->id);
            if ($art->count()>0){
                $getCollections = $getCollections->push($cat);
            }
        }
        $articleRecentFive = Article::orderBy('created_at', 'desc')->where('etat', 1)->take(5)->get();
        $articleCommentes1 = Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();
        $articleCommentes = collect([]);
         foreach( $articleCommentes1 as $articleCommente){
            if($articleCommente->article){
                if($articleCommente->article->etat == 1 )
                {
                    $articleCommentes->push($articleCommente);
                }
            }
        }
        $articlePopFives = Article::orderBy('nbvue', 'desc')->where('etat', 1)->take(5)->get();
        $cats = Categorie::all();
        $getCollections = collect([]);
        foreach ($cats as $cat){
            $art = Article::where('categorie_id',$cat->id)->where('etat', 1);
            if ($art->count()>0 ){
                $getCollections = $getCollections->push($cat);
            }
        }
        $categories = $getCollections;
        $articleCommentaires = Article::find($article->id)->commentaires;
        return view('partials.blog.detail', compact(['publicites', 'articleRecentFive', 'articles','articleCommentes','categories','articlePopFives','articleCommentaires']));
    }

    public function detail()
    {
        $publicites = Publicite::all();
        $cats = Categorie::all();
        $getCollections = collect([]);
        foreach ($cats as $cat){
            $art = Article::where('categorie_id',$cat->id);
            if ($art->count()>0){
                $getCollections = $getCollections->push($cat);
            }
        }
        $articleRecentFive = Article::orderBy('created_at', 'desc')->where('etat', 1)->take(5)->get();
        $articleCommentes1 = Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();
        $articleCommentes = collect([]);
         foreach( $articleCommentes1 as $articleCommente){
            if($articleCommente->article){
                if($articleCommente->article->etat == 1 )
                {
                    $articleCommentes->push($articleCommente);
                }
            }
        }
        $articlePopFives = Article::orderBy('nbvue', 'desc')->where('etat', 1)->take(5)->get();
        $cats = Categorie::all();
        $getCollections = collect([]);
        foreach ($cats as $cat){
            $art = Article::where('categorie_id',$cat->id)->where('etat', 1);
            if ($art->count()>0 ){
                $getCollections = $getCollections->push($cat);
            }
        }
        $categories = $getCollections;
        return view('partials.blog.detail', compact(['publicites', 'articleRecentFive','articleCommentes','categories','articlePopFives']));
    }

    /*
     * get all categories
     * */
    public function category($titre)
    {
        $categorie = Categorie::firstWhere('urlTitre', $titre);
        $catArticles = Categorie::find($categorie->id)->articles()->where('etat',1)->paginate(9);
        return view('partials.blog.category',compact(['catArticles','categorie']));
    }

}
