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
        $articleRecentFive = Article::orderBy('created_at', 'desc')->take(5)->get();
        $articleCommentes= Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();
        $articlePopFives = Articles::orderBy('nbvue', 'desc')->take(5)->get();
        $cats = Categorie::all();
        $getCollections = collect([]);
        foreach ($cats as $cat){
            $art = Article::where('categorie_id',$cat->id);
            if ($art->count()>0){
                $getCollections = $getCollections->push($cat);
            }
        }
        $articles =  Article::orderBy('created_at', 'desc')->paginate(12);
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
            })
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
            $articles = Article::orderBy('created_at', 'desc')->paginate(12);
            Flash::error('Article non trouvé');
        }

        return view('partials.search', compact(['articles','search']));
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
        $cats = Categorie::all();
        $getCollections = collect([]);
        foreach ($cats as $cat){
            $art = Article::where('categorie_id',$cat->id);
            if ($art->count()>0){
                $getCollections = $getCollections->push($cat);
            }
        }
        $categories = $getCollections;

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
        $cats = Categorie::all();
        $getCollections = collect([]);
        foreach ($cats as $cat){
            $art = Article::where('categorie_id',$cat->id);
            if ($art->count()>0){
                $getCollections = $getCollections->push($cat);
            }
        }
        $categories = $getCollections;
        $articleRecentFive = Articles::orderBy('created_at', 'desc')->take(5)->get();
        $articlePopFives = Articles::orderBy('nbvue', 'desc')->take(5)->get();
        $articleCommentes= Commentaire::orderBy('created_at', 'desc')->where('is_valid','=','1')->take(5)->get();
        return view('partials.blog.detail', compact(['publicites', 'articleRecentFive','articleCommentes','categories','articlePopFives']));
    }

    public function category($id)
    {
        $categorie = Categorie::find($id);
        $catArticles = Categorie::find($id)->articles()->paginate(9);
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
