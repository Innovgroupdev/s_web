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
            $ip = $request->ip;
            // Cette Api fournis 120 requêtes par minute
            //$geoinformations = json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip={$ip}'));
            $ip = $request->ip;
            $country = $request->pays;
            $news = new News();
            $news->email = $request->email;
            $news->pays = $country;
            $news->souscription_month = date('M');
            $news->souscription_year = date('Y');
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
        $stats = News::select(DB::raw('count(*) as NombredeSouscrivant,pays,souscription_month, souscription_year'))->groupBy('pays','souscription_month','souscription_year')
        ->get();
        if(!empty($stats)){
            return response()->json([
                "data"=>$stats
            ]);
        }
      }
      /**
       * 
       */
      public static function NewsStatsAll(){
        $newsstats = News::select(DB::raw('count(*) as total,souscription_month,souscription_year'))
        ->groupBy('souscription_month','souscription_year')
        ->get();
        if(!empty($newsstats)){
            return response()->json([
                "data" =>$newsstats
            ]);
        }
      }
}
