<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Articles;
use App\Models\Categorie;
use App\Models\Categories;
use App\Models\Commentaire;
use App\Models\Faq;
use App\Models\Publicites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Arr;
use Laracasts\Flash\Flash;

class HomeController extends Controller
{
    public function index()
    {
        return view('partials.index');
    }
    public function blog()
    {

        //$articles = Article::orderBy('created_at', 'desc')->paginate(12);
        //dd($articles);
        $articleRecentFive = Article::orderBy('created_at', 'desc')->where('etat', 1)->take(5)->get();
        $articleCommentes1 = Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();
        $articleCommentes = collect([]);
        foreach( $articleCommentes1 as $articleCommente){
            // dd(optional($articleCommente->article)->etat);
            if($articleCommente->article){
                if($articleCommente->article->etat == 1 )
                {
                    $articleCommentes->push($articleCommente);
                }
            }
        }
        $articlePopFives = Articles::orderBy('nbvue', 'desc')->where('etat', 1)->take(5)->get();
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

//            if ($articles->count() == 0) {
//                $error = "Résu"
//
//                return view('partials.search', compact(['articles','search']));
//            }
           // dd($articles);
        }
        else{
            $articles = Article::orderBy('created_at', 'desc')->where('etat', 1)->paginate(12);
            Flash::error('Article non trouvé');
        }

        return view('partials.search', compact(['articles','search']));
    }


    public function article($titre)
    {



        $articles = Articles::firstWhere('urlTitre', $titre);
        // $articles  =  $articles->find($id);
        // dd($articles);
        $nb = 0;


        if (empty($articles)) {
            Flash::error('Articles not found');

            //return redirect(route('articles.index'));
        }
        $nb++;
        $article = Articles::firstWhere('urlTitre', $titre);
        $article->nbvue = $article->nbvue + $nb;
        $article->save();
        //dd($nb);
        $publicites = Publicites::all();
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
            // dd(optional($articleCommente->article)->etat);
            if($articleCommente->article){
                if($articleCommente->article->etat == 1 )
                {
                    $articleCommentes->push($articleCommente);
                }
            }
        }
        $articlePopFives = Articles::orderBy('nbvue', 'desc')->where('etat', 1)->take(5)->get();
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
        // $articleCommentaires = Articles::firstWhere('libelle', $titre)->commentaires;
        // dd( $articleCommentaires);
        return view('partials.blog.detail', compact(['publicites', 'articleRecentFive', 'articles','articleCommentes','categories','articlePopFives','articleCommentaires']));
    }

    public function detail()
    {

        $publicites = Publicites::all();
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
            // dd(optional($articleCommente->article)->etat);
            if($articleCommente->article){
                if($articleCommente->article->etat == 1 )
                {
                    $articleCommentes->push($articleCommente);
                }
            }
        }
        $articlePopFives = Articles::orderBy('nbvue', 'desc')->where('etat', 1)->take(5)->get();
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

    public function category($titre)
    {
        $categorie = Categorie::firstWhere('urlTitre', $titre);
        $catArticles = Categorie::find($categorie->id)->articles()->where('etat',1)->paginate(9);
       // dd($catArticles);
        return view('partials.blog.category',compact(['catArticles','categorie']));
    }

    public function faq(Request $request)
    {
        $input = $request->all();

        $faq = $this->faqRepository->create($input);

        Flash::success('Faq saved successfully.');

        return redirect(route('faqs.index'));
    }

}
