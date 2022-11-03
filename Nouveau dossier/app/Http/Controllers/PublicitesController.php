<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePublicitesRequest;
use App\Http\Requests\UpdatePublicitesRequest;
use App\Models\Publicite;
use App\Repositories\PublicitesRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Routing\Redirector;
use Response;

class PublicitesController extends AppBaseController
{
    /* @var PublicitesRepository $publicitesRepository*/
    private $publicitesRepository;

    public function __construct(PublicitesRepository $publicitesRepo)
    {
        $this->publicitesRepository = $publicitesRepo;
    }

    /**
     * Display a listing of the advertising.
     *
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $publicites = $this->publicitesRepository->all();
       

        return view('publicites.index')
            ->with('publicites', $publicites);
    }

    /**
     * Show the form for creating a new advertising.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('publicites.create');
    }

    /**
     * Store a newly created advertising in storage.
     *
     * @param CreatePublicitesRequest $request
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle'=>'required|string|min:3',
            'img_url'=>'required'
        ]);
        $user = auth()->user();
        $pub = new Publicite();
        $pub->libelle = $request->libelle;
        $pub->user_id = $user->id;
        $fileName = time().$request->file('img_url')->getClientOriginalName();
        $path = $request->file('img_url')->storeAs('images', $fileName, 'public');
        $pub["img_url"] = '/storage/app/public/'.$path;
        $pub->save();

        Flash::success('Publicité enregistrée avec succès.');

        return redirect(route('publicites.index'));
    }

    /**
     * Display the specified Publicite.
     *
     * @param int $id
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function show($id)
    {
        $publicite = $this->publicitesRepository->find($id);

        if (empty($publicite)) {
            Flash::error('Publicité non trouvée');

            return redirect(route('publicites.index'));
        }

        return view('publicites.show')->with('publicites', $publicite);
    }

    /**
     * Show the form for editing the specified Publicites.
     *
     * @param int $id
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function edit($id)
    {
        $publicite = $this->publicitesRepository->find($id);
        if (empty($publicite)) {
            Flash::error('Publicité non trouvée');

            return redirect(route('publicites.index'));
        }

        return view('publicites.edit')->with('publicites', $publicite);
    }

    /**
     * Update the specified Publicite in storage.
     *
     * @param int $id
     * @param UpdatePublicitesRequest $request
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'libelle'=>'required'
        ]);
        $publicite = Publicite::find($id);

        if (empty($publicite)) {
            Flash::error('Publicité non trouvée');

            return redirect(route('publicites.index'));
        }

        $user = auth()->user();
        if($request->file('img_url') != null){

            $publicite->libelle = $request->libelle;

            $fileName = time().$request->file('img_url')->getClientOriginalName();
            $path = $request->file('img_url')->storeAs('images', $fileName, 'public');
            $publicite->img_url = '/storage/app/public/'.$path;
            $publicite->user_id = $user->id;
            Flash::success('Publicités modifiée avec succès.');
            $publicite->save();
        }
        else{
            $publicite->libelle = $request->libelle;
            Flash::success('Publicités modifiée avec succès.');
            $publicite->save();
        }
        return redirect(route('publicites.index'));
    }

    /**
     * Remove the specified advertising from storage.
     *
     * @param int $id
     *
     * @return Application|Redirector|RedirectResponse
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $publicite = $this->publicitesRepository->find($id);

        if (empty($publicite)) {
            Flash::error('Publicité non trouvée');

            return redirect(route('publicites.index'));
        }
        $publicite->forceDelete();

        Flash::success('Publicité supprimée.');

        return redirect(route('publicites.index'));
    }

}