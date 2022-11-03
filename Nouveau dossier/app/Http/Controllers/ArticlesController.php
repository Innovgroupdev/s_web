<?php




namespace App\Http\Controllers;

use App\Http\Requests\CreateArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Repositories\ArticlesRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Routing\Redirector;
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
     * Display a listing of the Article.
     *
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $articles = $this->articlesRepository->all();
        $article1 = $this->articlesRepository->all()->where('etat', 1);
        $article2 = $this->articlesRepository->all()->where('etat', 0);
        return  view('articles.index',compact(['articles', 'article1', 'article2']));
    }

    /**
     * Show the form for creating a new Article.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categories = Categorie::pluck('lib','id');
        return view('articles.create')->with('categories', $categories);
    }

    /**
     * Store a newly created Article in storage.
     *
     * @param CreateArticlesRequest $request
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle'=>'required|string|min:3',
            'tags'=>'required|string|min:3',
            'contenu'=>'required|string|min:50',
            'desc'=>'required|string|min:10'
        ]);
       
        $urlTitre = str_replace(' ', '-', strtolower($request->libelle)); 
        $urlTitre = preg_replace('/[^A-Za-z0-9\-]/', '',$urlTitre);
        $urlTitre = str_replace('--', '-', strtolower($urlTitre));
        
        $user = auth()->user();
        $article = new Article();
        $article->libelle = $request->libelle;
        $article->desc = $request->desc;
        $article->contenu = $request->contenu;
        $article->tags = $request->tags;
        $article->categorie_id = $request->categorie_id;
        $article->etat = $request->etat;
        $article->user_id = $user->id;
        $article->nbvue = 0;
        $article->urlTitre =  $urlTitre;
        $fileName = time().$request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('images', $fileName, 'public');
        $article["img"] = '/storage/app/public/'.$path;

        $article->save();

        Flash::success('Article enregistré avec succès.');

        return redirect(route('articles.index'));
    }

    /**
     * Display the specified Article.
     *
     * @param int $id
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function show($id)
    {
        $articles = $this->articlesRepository->find($id);

        if (empty($articles)) {
            Flash::error('Article non trouvé');

            return redirect(route('articles.index'));
        }
        $articleCommentaires = $this->articleCommentaires($id);
        return view('articles.show',compact(['articles', 'articleCommentaires'])) ;
    }

    /**
     * Show the form for editing the specified Article.
     *
     * @param int $id
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function edit($id)
    {
        $articles = $this->articlesRepository->find($id);
        $categories = Categorie::all();
        if (empty($articles)) {
            Flash::error('Article non trouvé');

            return redirect(route('articles.index'));
        }

        return view('articles.edit',compact('articles','categories'));
    }

    /**
     * Update the specified Article in storage.
     *
     * @param int $id
     * @param UpdateArticlesRequest $request
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function update($id, Request $request)
    {
        $article = Article::find($id);

        if (empty($article)) {
            Flash::error('Article non trouvé');

            return redirect(route('articles.index'));
        }
        $request->validate([
            'libelle'=>'required|string|min:3',
            'tags'=>'required|string|min:3',
            'contenu'=>'required|string|min:50',
            'desc'=>'required|string|min:10'
        ]);
        $urlTitre = str_replace(' ', '-', strtolower($request->libelle)); 
        $urlTitre = preg_replace('/[^A-Za-z0-9\-]/', '',$urlTitre);
        $urlTitre = str_replace('--', '-', strtolower($urlTitre));
       
        $user = auth()->user();
        if($request->file('img') !== null){
            $article->libelle = $request->libelle;
            $article->desc = $request->desc;
            $article->tags = $request->tags;
            $article->etat = $request->etat;
            $article->urlTitre =  $urlTitre;
            $fileName = time().$request->file('img')->getClientOriginalName();
            $path = $request->file('img')->storeAs('images', $fileName, 'public');
            $article->img = '/storage/app/public/'.$path;
            $article->user_id = $user->id;
            $article->categorie_id = $request->categorie_id;
            $article->contenu = $request->contenu;

            Flash::success('Article modifié avec succès.');
            $article->save();
        }
        else{
            $article->libelle = $request->libelle;
            $article->desc = $request->desc;
            $article->tags = $request->tags;
            $article->user_id = $user->id;
            $article->urlTitre =  $urlTitre;
            $article->categorie_id = $request->categorie_id;
            $article->contenu = $request->contenu;
            Flash::success('Article modifié avec succès.');
            $article->save();
        }

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified Article from storage.
     *
     * @param int $id
     *
     * @return Application|Redirector|RedirectResponse
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $article = $this->articlesRepository->find($id);

        if (empty($article)) {
            Flash::error('Article non trouvé');

            return redirect(route('articles.index'));
        }

        if(Commentaire::where('article_id',$id)->exists()){
            $commentaires = Commentaire::all();
            foreach ($commentaires as $comment){
                if($comment->article_id == $id){
                    $comment->forceDelete();
                }
            }
        }
         Article::where('id',$id)->forceDelete();

        Flash::success('Article supprimé avec succès.');

        return redirect(route('articles.index'));
    }

    /*
     * active and desactive Article
     * */
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

   /*
    *  get all comments related to Article
    * */
    public function articleCommentaires($id)
    {
        $articleCommentaires = Article::find($id)->commentaires;
        return  $articleCommentaires;
    }
    
        /**
     * @author Charles
     * This method returns The tottal of vues for an article
     * @return json
     */
    public static function NumberofVues()
    {

        $numberofvues = Article::orderBy('nbvue', 'DESC')->where('etat', 1)->take(4)->get();

        return $numberofvues;
    }
}
