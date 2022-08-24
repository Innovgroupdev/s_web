<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Flash;
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
        $totalOfSouscriptions = DB::table('news')->count();

        return $totalOfSouscriptions;
     }

    /**
     * @author Charles
     * @return int
     * This function returns the total of souscriptions group by Country
     */

     public static function TotalSouscriptionsperCountry()
     {
        $souscrivantnewssparpays = News::select(DB::raw('count(*) as NombredeSouscrivant, pays'))
        ->groupBy('pays')
        ->get();
        return response()->json($souscrivantnewssparpays); 
     }
}
