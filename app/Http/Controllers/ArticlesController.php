<?php




namespace App\Http\Controllers;

use App\Http\Requests\CreateArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;
use App\Models\Articles;
use App\Models\Categories;
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

        // $articles = DB::table('articles')
        //     ->join('categories', 'articles.categorie_id', '=', 'categories.id')
        //     ->join('users', 'articles.user_id', '=', 'users.id')
        //     ->get();
           // dd($categories);

        return view('articles.index')
            ->with('articles', $articles);
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
        $input = $request->all();
       // dd($input);

        //$articles = $this->articlesRepository->create($input);
        $user = auth()->user();
        $article = new Articles();
        $article->libelle = $request->libelle;
        $article->desc = $request->desc;
        $article->contenu = $request->contenu;
        $article->tags = $request->tags;
        $article->categorie_id = $request->categorie_id;
        $article->user_id = $user->id;
        $fileName = time().$request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('images', $fileName, 'public');
        $article["img"] = '/storage/'.$path;
        //dd($pub);

        $article->save();

        Flash::success('Articles saved successfully.');

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
            Flash::error('Articles not found');

            return redirect(route('articles.index'));
        }

        return view('articles.show')->with('articles', $articles);
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

        if (empty($articles)) {
            Flash::error('Articles not found');

            return redirect(route('articles.index'));
        }

        return view('articles.edit')->with('articles', $articles);
    }

    /**
     * Update the specified Articles in storage.
     *
     * @param int $id
     * @param UpdateArticlesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticlesRequest $request)
    {
        $articles = $this->articlesRepository->find($id);

        if (empty($articles)) {
            Flash::error('Articles not found');

            return redirect(route('articles.index'));
        }

        $articles = $this->articlesRepository->update($request->all(), $id);

        Flash::success('Articles updated successfully.');

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
    public function destroy($id)
    {
        $articles = $this->articlesRepository->find($id);

        if (empty($articles)) {
            Flash::error('Articles not found');

            return redirect(route('articles.index'));
        }

        $this->articlesRepository->delete($id);

        Flash::success('Articles deleted successfully.');

        return redirect(route('articles.index'));
    }
}
