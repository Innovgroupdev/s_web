<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEssayerRequest;
use App\Http\Requests\UpdateEssayerRequest;
use App\Models\Essayer;
use App\Repositories\EssayerRepository;
use App\Http\Controllers\AppBaseController;
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
     * @return Response
     */
    public function index(Request $request)
    {
        $essayers = $this->essayerRepository->all();

        return view('essayers.index')
            ->with('essayers', $essayers);
    }

    /**
     * Show the form for creating a new Essayer.
     *
     * @return Response
     */
    public function create()
    {
        return view('essayers.create');
    }

    /**
     * Store a newly created Essayer in storage.
     *
     * @param CreateEssayerRequest $request
     *
     * @return Response
     */
    public function store(CreateEssayerRequest $request)
    {
        $input = $request->all();

        $essayer = $this->essayerRepository->create($input);

        Flash::success('Essayer saved successfully.');

        return redirect(route('essayers.index'));
    }

    public function enregistre(Request $request)
    {
        $request->validate([
            'numero' => 'required|min:5|unique:essayers',
            'email' => 'required|unique:essayers',
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
     * @return Response
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

    /**
     * Show the form for editing the specified Essayer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $essayer = $this->essayerRepository->find($id);

        if (empty($essayer)) {
            Flash::error('Essayer not found');

            return redirect(route('essayers.index'));
        }

        return view('essayers.edit')->with('essayer', $essayer);
    }

    /**
     * Update the specified Essayer in storage.
     *
     * @param int $id
     * @param UpdateEssayerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEssayerRequest $request)
    {
        $essayer = $this->essayerRepository->find($id);

        if (empty($essayer)) {
            Flash::error('Essayer not found');

            return redirect(route('essayers.index'));
        }

        $essayer = $this->essayerRepository->update($request->all(), $id);

        Flash::success('Essayer updated successfully.');

        return redirect(route('essayers.index'));
    }

    /**
     * Remove the specified Essayer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $essayer = $this->essayerRepository->find($id);

        if (empty($essayer)) {
            Flash::error('Essayer not found');

            return redirect(route('essayers.index'));
        }

        $this->essayerRepository->delete($id);

        Flash::success('Essayer deleted successfully.');

        return redirect(route('essayers.index'));
    }
}
