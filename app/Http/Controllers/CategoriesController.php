<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Models\Article;
use App\Models\Categorie;
use App\Repositories\CategorieRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Routing\Redirector;
use Response;

class CategoriesController extends AppBaseController
{
    /** @var CategorieRepository $categoriesRepository*/
    private $categoriesRepository;

    public function __construct(CategorieRepository $categoriesRepo)
    {
        $this->categoriesRepository = $categoriesRepo;
    }

    /**
     * Display a listing of the Categories.
     *
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = $this->categoriesRepository->all();
        return view('categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new Categories.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created Categories in storage.
     *
     * @param CreateCategoriesRequest $request
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'lib' => 'string|required|min:3|unique:categories'
        ]);
        $user = auth()->user();
        //$urlTitre = str_replace(' ', '-', strtolower($request->lib));
        $urlTitre = str_replace(' ', '-', strtolower($request->lib));
        $urlTitre = str_replace(':', '', strtolower($urlTitre));
        $urlTitre = str_replace('?', '', strtolower($urlTitre));
        $urlTitre = str_replace('!', '', strtolower($urlTitre));
        $urlTitre = str_replace('(', '', strtolower($urlTitre));
        $urlTitre = str_replace(')', '', strtolower($urlTitre));
        $urlTitre = str_replace("'", '', strtolower($urlTitre));
        $urlTitre = str_replace(',', '', strtolower($urlTitre));
        $urlTitre = str_replace(';', '', strtolower($urlTitre));
        $urlTitre = str_replace('.', '', strtolower($urlTitre));
        $urlTitre = str_replace('--', '-', strtolower($urlTitre));
        $categorie = new Categorie();
        $categorie->lib = $request->lib;
        $categorie->desc = $request->desc;
        $categorie->user_id = $user->id;
        $categorie->urlTitre = $urlTitre;
        if(!empty($categorie)){
            $categorie->save();
        }
        else{
            Flash::error('Categories empty');
        }
        Flash::success('Catégorie créée avec succès.');
        return redirect(route('categories.index'));
    }

    /**
     * Display the specified Categories.
     *
     * @param int $id
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function show($id)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        return view('categories.show')->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified Categories.
     *
     * @param int $id
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function edit($id)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Catégorie non trouvée');

            return redirect(route('categories.index'));
        }

        return view('categories.edit')->with('categories', $categories);
    }

    /**
     * Update the specified Categories in storage.
     *
     * @param int $id
     * @param UpdateCategoriesRequest $request
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'lib'=>'required|string|min:3'
        ]);

        $categorie = Categorie::find($id);

        if (empty($categorie)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }
        $categorie->lib = $request->lib;
        $categorie->desc =$request->desc;
        $categorie->save();

        Flash::success('Catégorie modifiée avec succès.');

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified Categories from storage.
     *
     * @param int $id
     *
     * @return Application|Redirector|RedirectResponse
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $categorie = $this->categoriesRepository->find($id);

        if (empty($categorie)) {
            Flash::error('Catégorie non trouvée');

            return redirect(route('categories.index'));
        }

        if(Article::where('categorie_id',$id)->exists()){
            Flash::error('Cette action ne peut pas être effectuée; il existe déjà une catégorie dans un article');
        }else{
             Categorie::where('id',$id)->forceDelete();
            Flash::success('Catégorie supprimée avec succès.');
        }
        return redirect(route('categories.index'));
    }
}
