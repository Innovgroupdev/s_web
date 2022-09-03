<?php

namespace App\Http\Controllers;

use App\Models\Essayer;
use App\Repositories\EssayerRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InformerController;
use App\Models\Informer;
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

    /**
     * 
     */
     public static function Percentageessayers(){
        $numberofessayers = Essayer::count();
        $data = Essayer::select(DB::raw('count(*) as nombreEssayers, pays'))
        ->where('pays', '!=', 'null')
        ->groupBy('pays')
        ->get();
        /*$tableaupays = [];
        $tableauvaleures = [];
        $tableauData = [];
        $donneesfinaux = [];
        foreach($data as $stats){
            array_push($tableauvaleures ,(($stats['nombreEssayers']/$numberofessayers)*100));
            array_push($tableaupays, $stats['pays']);
            $donneesfinaux = array_combine($tableaupays,$tableauvaleures);
        }*/
        if(!empty($data)){
            return response()->json([
                "data" => $data
            ]);
        }
     }
     public static function TotalUsers()
     {
        $array1 = [];
        $array2 =[];
        $data = [];
        $datafinish = [];
        $essayersemails =   Essayer::all('email');
        $informersemails = Informer::all('email');
        foreach($essayersemails as $essayer){
            array_push($array1, $essayer['email']);
        }
        foreach($informersemails as $informer){
            array_push($array2, $informer['email']);
        }
        $data = array_merge($array1, $array2);
        $datafinish = array_unique($data);
        $number = count($datafinish);
        return $number;
     }

     public static function totalEssayers(){
        $number = Essayer::count();
        return $number;
     }

}
