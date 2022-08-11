<?php




namespace App\Http\Controllers;

use App\Http\Requests\CreateArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;
use App\Models\Articles;
use App\Models\Article;
use App\Models\Categories;
use App\Models\Commentaire;
use App\Repositories\ArticlesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Response;

class ArticlesController extends AppBaseController
{
    /** @var ArticlesRepository $articlesRepository*/
    private $articlesRepository;

    public function __construct(ArticlesRepository $articlesRepo)
    {
        $this->articlesRepository = $articlesRepo;
    }

    /**
     * Display a listing of the Articles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(ArticlesRepository $request)
    {
        $articles = $this->articlesRepository->all();
        $article1 = $this->articlesRepository->all()->where('etat', 1);
        $article2 = $this->articlesRepository->all()->where('etat', 0);

        // $articles = DB::table('articles')
        //     ->join('categories', 'articles.categorie_id', '=', 'categories.id')
        //     ->join('users', 'articles.user_id', '=', 'users.id')
        //     ->get();
           // dd($categories);

        // return view('articles.index')
        //     ->with('articles', $articles);
            return  view('articles.index',compact(['articles', 'article1', 'article2']));
    }

    /**
     * Show the form for creating a new Articles.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Categories::pluck('lib','id');
        return view('articles.create')->with('categories', $categories);
    }

    /**
     * Store a newly created Articles in storage.
     *
     * @param CreateArticlesRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
       // $input = $request->all();
       // dd($input);

        //$articles = $this->articlesRepository->create($input);
        $request->validate([
            'libelle'=>'required|string|min:3',
            'tags'=>'required|string|min:3',
            'contenu'=>'required|string|min:50',
            'desc'=>'required|string|min:10'
        ]);
        $user = auth()->user();
        $article = new Articles();
        $article->libelle = $request->libelle;
        $article->desc = $request->desc;
        $article->contenu = $request->contenu;
        $article->tags = $request->tags;
        $article->categorie_id = $request->categorie_id;
        $article->etat = $request->etat;
        $article->user_id = $user->id;
        $article->nbvue = 0;
        $article->etat = 0;
        $fileName = time().$request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('images', $fileName, 'public');
        $article["img"] = '/storage/'.$path;
        //dd($pub);

        $article->save();

        Flash::success('Article enregistré avec succès.');

        return redirect(route('articles.index'));
    }

    /**
     * Display the specified Articles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articles = $this->articlesRepository->find($id);

//        $articles = DB::table($article)
//            ->join('categories','categories.id', '=', $article->categorie_id)
//            ->join('users', 'users.id', '=', $article->user_id)
//            ->get();
//        dd($articles);

        if (empty($articles)) {
            Flash::error('Article non trouvé');

            return redirect(route('articles.index'));
        }
        $articleCommentaires = $this->articleCommentaires($id);
        return view('articles.show',compact(['articles', 'articleCommentaires'])) ;
    }

    /**
     * Show the form for editing the specified Articles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articles = $this->articlesRepository->find($id);
        $categories = Categories::all();
        //dd($categories);
        if (empty($articles)) {
            Flash::error('Article non trouvé');

            return redirect(route('articles.index'));
        }

        return view('articles.edit',compact('articles','categories'));
    }

    /**
     * Update the specified Articles in storage.
     *
     * @param int $id
     * @param UpdateArticlesRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $articles = Articles::find($id);

        if (empty($articles)) {
            Flash::error('Articles non trouvé');

            return redirect(route('articles.index'));
        }
        $request->validate([
            'libelle'=>'required|string|min:3',
            'tags'=>'required|string|min:3',
            'contenu'=>'required|string|min:50',
            'desc'=>'required|string|min:10'
        ]);

        $user = auth()->user();
        if($request->file('img') !== null){
            $articles->libelle = $request->libelle;
            $articles->desc = $request->desc;
            $articles->tags = $request->tags;
            $articles->etat = $request->etat;
            $fileName = time().$request->file('img')->getClientOriginalName();
            $path = $request->file('img')->storeAs('images', $fileName, 'public');


            $articles->img = '/storage/'.$path;
            $articles->user_id = $user->id;
            $articles->categorie_id = $request->categorie_id;
            $articles->contenu = $request->contenu;
            // dd($articles);
            Flash::success('Article modifié avec succès.');
            $articles->save();
        }
        else{
            $articles->libelle = $request->libelle;
            $articles->desc = $request->desc;
            $articles->tags = $request->tags;
            $articles->user_id = $user->id;
            $articles->categorie_id = $request->categorie_id;
            $articles->contenu = $request->contenu;
            Flash::success('Article modifié avec succès.');
            // dd($articles);
            $articles->save();
        }



       // $articles = $this->articlesRepository->update($request->all(), $id);

       // Flash::success('Articles updated successfully.');

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified Articles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    // public function destroy($id)
    // {
    //     $articles = $this->articlesRepository->find($id);

    //     if (empty($articles)) {
    //         Flash::error('Articles non trouvé');

    //         return redirect(route('articles.index'));
    //     }
        
    //     //$this->articlesRepository->delete($id);
    //     $article = Articles::where('id',$id)->forceDelete();

    //     Flash::success('Article supprimé avec succès.');

    //     return redirect(route('articles.index'));
    // }
    public function destroy($id)
    {
        $articles = $this->articlesRepository->find($id);

        if (empty($articles)) {
            Flash::error('Articles non trouvé');

            return redirect(route('articles.index'));
        }
        


        if(Commentaire::where('article_id',$id)->exists()){
           // Articles::where('id',$id)->forceDelete();
            $commentaires = Commentaire::all();

            foreach ($commentaires as $comment){
                if($comment->article_id == $id){
                    $comment->forceDelete();
                }
            }
           // Commentaire::where('id',$id)->forceDelete();
        }
         Articles::where('id',$id)->forceDelete();

        Flash::success('Article supprimé avec succès.');

        return redirect(route('articles.index')); 
    }

    public function etat($id,Request $request){
        DB::table('articles')
            ->where('id', $id)
            ->update(['etat' => $request->etat]);
        if($request->etat == 0){
            Flash::success('Article désactivé avec succès !');
        }
        else{
            Flash::success('Article activé avec succès !');
        }
       
        return redirect(route('articles.index'));
    }


    public function articleCommentaires($id)
    {
        $articleCommentaires = Article::find($id)->commentaires;
        return  $articleCommentaires;
    }
}
