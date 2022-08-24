<?php

namespace App\Http\Controllers;

use App\Models\Informer;
use App\Repositories\InformerRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\VisitLogController;
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
     * @return Application|Factory|View
     */
    public function index()
    {
        $informers = $this->informerRepository->all();

        return view('informers.index')
            ->with('informers', $informers);
    }

    /*
     * Store a newly created Informer
    */
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
     * @author Charles
     * @return int
     * This function will return the number of Total Informers
     */
    public static function TotalInformers()
    {
        $totalInformers = DB::table('informers')->count();

        $totalVisits = VisitLogController::NumberofVisitors();

        $percentage = (($totalInformers * $totalVisits) / 100);

        return $percentage;
    }

    /**
     * @author Charles
     * @return int
     * This function will return the number of Informers Group by Country
     */

     public static function TotalInformersPerCountry()
     {
        $informerspercountry = Informer::select(DB::raw('count(*) as totalinformers, pays'))
        ->groupBy('pays')
        ->get();
        return response()->json([
            "data" => $informerspercountry
        ], 200);
     }
}
