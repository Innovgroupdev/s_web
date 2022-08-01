<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInformerRequest;
use App\Http\Requests\UpdateInformerRequest;
use App\Models\Informer;
use App\Repositories\InformerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InformerController extends AppBaseController
{
    /** @var InformerRepository $informerRepository*/
    private $informerRepository;

    public function __construct(InformerRepository $informerRepo)
    {
        $this->informerRepository = $informerRepo;
    }

    /**
     * Display a listing of the Informer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $informers = $this->informerRepository->all();

        return view('informers.index')
            ->with('informers', $informers);
    }

    /**
     * Show the form for creating a new Informer.
     *
     * @return Response
     */
    public function create()
    {
        return view('informers.create');
    }

    /**
     * Store a newly created Informer in storage.
     *
     * @param CreateInformerRequest $request
     *
     * @return Response
     */
    public function store(CreateInformerRequest $request)
    {
        $input = $request->all();

        $informer = $this->informerRepository->create($input);

        Flash::success('Informer saved successfully.');

        return redirect(route('informers.index'));
    }
    public function enregistre(Request $request)
    {
        $request->validate([
            'numero' => 'required|min:5|unique:informers',
            'email' => 'required|unique:informers',

        ]);
            $informer = new Informer();
            $informer->pays = $request->pays;
            $informer->numero = $request->numero;
            $informer->email = $request->email;
            $informer->save();
            return response()->json($informer);

    }
    /**
     * Display the specified Informer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $informer = $this->informerRepository->find($id);

        if (empty($informer)) {
            Flash::error('Informer not found');

            return redirect(route('informers.index'));
        }

        return view('informers.show')->with('informer', $informer);
    }

    /**
     * Show the form for editing the specified Informer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $informer = $this->informerRepository->find($id);

        if (empty($informer)) {
            Flash::error('Informer not found');

            return redirect(route('informers.index'));
        }

        return view('informers.edit')->with('informer', $informer);
    }

    /**
     * Update the specified Informer in storage.
     *
     * @param int $id
     * @param UpdateInformerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInformerRequest $request)
    {
        $informer = $this->informerRepository->find($id);

        if (empty($informer)) {
            Flash::error('Informer not found');

            return redirect(route('informers.index'));
        }

        $informer = $this->informerRepository->update($request->all(), $id);

        Flash::success('Informer updated successfully.');

        return redirect(route('informers.index'));
    }

    /**
     * Remove the specified Informer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $informer = $this->informerRepository->find($id);

        if (empty($informer)) {
            Flash::error('Informer not found');

            return redirect(route('informers.index'));
        }

        $this->informerRepository->delete($id);

        Flash::success('Informer deleted successfully.');

        return redirect(route('informers.index'));
    }
}
