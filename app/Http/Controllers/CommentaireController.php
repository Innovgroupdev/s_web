<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentaireRequest;
use App\Http\Requests\UpdateCommentaireRequest;
use App\Repositories\CommentaireRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Flash;
use Response;

class CommentaireController extends AppBaseController
{
    /** @var CommentaireRepository $commentaireRepository*/
    private $commentaireRepository;

    public function __construct(CommentaireRepository $commentaireRepo)
    {
        $this->commentaireRepository = $commentaireRepo;
    }

    /**
     * Display a listing of the Commentaire.
     *
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $commentaires = $this->commentaireRepository->all();

        return view('commentaires.index')
            ->with('commentaires', $commentaires);
    }

    /*
     * store comment
     * */
    public function enregistreCom(CreateCommentaireRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'email' => 'required',

        ]);
        $input = $request->all();
        $comment = $this->commentaireRepository->create($input);
        $comment->save();
        return response()->json($comment);
    }

    /**
     * Display the specified Commentaire.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $commentaire = $this->commentaireRepository->find($id);

        if (empty($commentaire)) {
            Flash::error('Commentaire not found');

            return redirect(route('commentaires.index'));
        }

        return view('commentaires.show')->with('commentaire', $commentaire);
    }

    public function updateDetail($id, UpdateCommentaireRequest $request)
    {
        $commentaire = $this->commentaireRepository->find($id);

        if (empty($commentaire)) {
            Flash::error('Commentaire non trouvé');

            return redirect(route('commentaires.index'));
        }

        $this->commentaireRepository->update($request->all(), $id);

        Flash::success('Commentaire modifié avec succès .');
    }

}
