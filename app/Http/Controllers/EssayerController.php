<?php

namespace App\Http\Controllers;

use App\Models\Essayer;
use App\Repositories\EssayerRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Flash;
use Response;

class EssayerController extends AppBaseController
{
    /** @var EssayerRepository $essayerRepository*/
    private $essayerRepository;

    public function __construct(EssayerRepository $essayerRepo)
    {
        $this->essayerRepository = $essayerRepo;
    }

    /**
     * Display a listing of the Essayer.
     *
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $essayers = $this->essayerRepository->all();

        return view('essayers.index')
            ->with('essayers', $essayers);
    }

   /*
    *  Store a newly created Essayer
    * */
    public function enregistre(Request $request)
    {
        if($request->email != ''){
            $request->validate([
                'email' => 'unique:essayers',
            ]);
        }
        $request->validate([
            'numero' => 'required|min:5|unique:essayers',
        ]);
     
        $essayer = new Essayer();
        $essayer->nom = $request->nom;
        $essayer->numero = $request->numero;
        $essayer->email = $request->email;
        $essayer->pays = $request->pays;
        $essayer->profession = $request->profession;
        $essayer->raison = $request->raison;
        $essayer->save();
        return response()->json($essayer);

    }

    /**
     * Display the specified Essayer.
     *
     * @param int $id
     *
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $essayer = $this->essayerRepository->find($id);

        if (empty($essayer)) {
            Flash::error('Essayer not found');

            return redirect(route('essayers.index'));
        }

        return view('essayers.show')->with('essayer', $essayer);
    }

}
