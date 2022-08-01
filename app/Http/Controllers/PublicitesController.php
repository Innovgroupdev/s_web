<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePublicitesRequest;
use App\Http\Requests\UpdatePublicitesRequest;
use App\Models\Categories;
use App\Models\Publicites;
use App\Repositories\PublicitesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PublicitesController extends AppBaseController
{
    /** @var PublicitesRepository $publicitesRepository*/
    private $publicitesRepository;

    public function __construct(PublicitesRepository $publicitesRepo)
    {
        $this->publicitesRepository = $publicitesRepo;
    }

    /**
     * Display a listing of the Publicites.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $publicites = $this->publicitesRepository->all();

        return view('publicites.index')
            ->with('publicites', $publicites);
    }

    /**
     * Show the form for creating a new Publicites.
     *
     * @return Response
     */
    public function create()
    {
        return view('publicites.create');
    }

    /**
     * Store a newly created Publicites in storage.
     *
     * @param CreatePublicitesRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
       // $input = $request->all();
        $user = auth()->user();
        $pub = new Publicites();
        $pub->libelle = $request->libelle;
        $pub->user_id = $user->id;
        $fileName = time().$request->file('img_url')->getClientOriginalName();
        $path = $request->file('img_url')->storeAs('images', $fileName, 'public');
        $pub["img_url"] = '/storage/'.$path;
        //dd($pub);

        $pub->save();

        //$publicites = $this->publicitesRepository->create($input);

        Flash::success('Publicites saved successfully.');

        return redirect(route('publicites.index'));
    }

    /**
     * Display the specified Publicites.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $publicites = $this->publicitesRepository->find($id);

        if (empty($publicites)) {
            Flash::error('Publicites not found');

            return redirect(route('publicites.index'));
        }

        return view('publicites.show')->with('publicites', $publicites);
    }

    /**
     * Show the form for editing the specified Publicites.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $publicites = $this->publicitesRepository->find($id);
        if (empty($publicites)) {
            Flash::error('Publicites not found');

            return redirect(route('publicites.index'));
        }

        return view('publicites.edit')->with('publicites', $publicites);
    }

    /**
     * Update the specified Publicites in storage.
     *
     * @param int $id
     * @param UpdatePublicitesRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $publicites = $this->publicitesRepository->find($id);

        if (empty($publicites)) {
            Flash::error('Publicites not found');

            return redirect(route('publicites.index'));
        }
          
        $fileName = time().$request->file('img_url')->getClientOriginalName();
        // dd($fileName); 
        $path = $request->file('img_url')->storeAs('images', $fileName, 'public');
        $user = auth()->user();
       
        $data = [
            'libelle' =>  $request->libelle,
            'user_id' =>  $user->id,
            'img_url' =>  '/storage/'.$path
        ];

        $publicites = $this->publicitesRepository->update($data, $id);

        Flash::success('Publicites updated successfully.');

        return redirect(route('publicites.index'));
    }

    /**
     * Remove the specified Publicites from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $publicites = $this->publicitesRepository->find($id);

        if (empty($publicites)) {
            Flash::error('Publicites not found');

            return redirect(route('publicites.index'));
        }

        $this->publicitesRepository->delete($id);

        Flash::success('Publicites deleted successfully.');

        return redirect(route('publicites.index'));
    }
}
