<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Flash;
use Carbon\Carbon;
use Response;

class NewsController extends AppBaseController
{
    /** @var NewsRepository $newsRepository*/
    private $newsRepository;

    public function __construct(NewsRepository $newsRepo)
    {
        $this->newsRepository = $newsRepo;
    }

    /**
     * Display a listing of the News.
     *
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $news = $this->newsRepository->all();

        return view('news.index')
            ->with('news', $news);
    }

    /*
     * store news
     **/
    public function enregistre(Request $request)
    {
        if($request->get('email')){
            $ip = request()->ip();
            // Cette Api fournis 120 requêtes par minute
            $geoinformations = json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip={$ip}'));
            $country = $geoinformations->geoplugin_countryName;
            $news = new News();
            $news->email = $request->email;
            $news->pays = $country;
            $news->souscription_month = date('m');
            $news->save();
            return response()->json($news);
        }
    }
    /**
     * @author Charles
     * @return int
     * This function returns the total of souscriptions received
     */

     public static function totalNewsSouscription()
     {
        $totalOfSouscriptions = News::count();

        return $totalOfSouscriptions;
     }

    /**
     * @return JsonResponse
     * This function returns the total of souscriptions group by Country
     *@author Charles
     */

     public static function PercentageSouscriptionsperCountry()
     {
        $totalOfSouscriptions = News::count();
        $donnees = News::select(DB::raw('count(*) as NombredeSouscrivant, pays'))
        ->groupBy('pays')
        ->get();

        /*$tableaudonnees = [];
        $tab1 = [];
        $tab2  = [];

        foreach($donnees as $stats){
            $pourcentage = ($stats['NombredeSouscrivant']/$totalOfSouscriptions)*100;
            array_push($tab1,$pourcentage);
            array_push($tab2, $stats['pays']);
            $tableaudonnees = array_combine($tab2, $tab1);
        }*/
        if(!empty($donnees)){
            return response()->json([
                "data" =>$donnees
            ]);
        }
     }
     /**
      * 
      */
      public static function Getnewsstats()
      {
        $stats = News::select(DB::raw('count(*) as NombredeSouscrivant,pays'))->groupBy('pays')
        ->get();
        if(!empty($stats)){
            return response()->json([
                "data"=>$stats
            ]);
        }
      }
}
