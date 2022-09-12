<?php

namespace App\Http\Controllers;

use App\Models\Essayer;
use App\Models\FuturUser;
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
        if(!empty($data)){
            return response()->json([
                "data" => $data
            ]);
        }
     }
     public static function UserperCountry()
     {
        $essayersemails =  Essayer::all('email','pays');
        $informersemails = Informer::all('email','pays');
        foreach($essayersemails as $essayeruser){
            $futuruser = new FuturUser;
            $futuruser->email = $essayeruser['email'];
            $futuruser->pays = $essayeruser['pays'];

            if(!FuturUser::where('email', '=',$essayeruser['email'])->exists()){
                $futuruser->save();
            }
        }
        foreach($informersemails as $informeruser){
            $futuruser2= new FuturUser;
            $futuruser2->email = $informeruser['email'];
            $futuruser2->pays = $informeruser['pays'];

            if(!FuturUser::where('email', '=',$informeruser['email'])->exists()){
                $futuruser2->save();
            }
        }
        $userandNumber = FuturUser::select(DB::raw('count(*) as NombreUser, pays'))
        ->groupBy('pays')
        ->get();
            if(!empty($userandNumber)){
                return response()->json([
                    "data" =>$userandNumber
                ]);
            }
     }
     public static function TotalUsers()
     {
        $datafinish = FuturUser::all('email');
        if(!empty($datafinish)){
            return $datafinish;
        }
     }
        public static function TotalEssayers(){
            $number = Essayer::count();
            return $number;
        }
}
