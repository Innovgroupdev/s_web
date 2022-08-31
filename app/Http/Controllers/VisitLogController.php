<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use IlluminateSupportCarbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Visitor;
use App\Models\Oneinstancevisitor;

class VisitLogController extends Controller
{

    /**
     * @author Charles
     * Cette fonction Sauvegarde un internaute qui a visiter le site
     */
    public static function CompterVisiteurs()
    {
        $visitor = new Visitor;

        //$ip = request()->ip();
        $ip=\Request::ip();
        // --------------------------------------| Cette Api fournis 120 requêtes par minute |-------------
        $geoinformations = json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip={$ip}'));
        // ----------------| API pour avoir le Pays a partir de L'IP ---------------------
        if($geoinformations){
            $country = $geoinformations->geoplugin_countryName;
            $visitor->ip_address =  $ip;
            $visitor->visit_date = date('D');
            $visitor->visit_month = date('M');
            $visitor->visit_year = date('Y');
            $visitor->visit_time = date('H:i:s');
            $visitor->pays = $country;
            if(Visitor::where('ip_address', $ip)->where('visit_date', date('D'))->exists()){
                return;
            }else{
                $visitor->save();
            }
            if(Oneinstancevisitor::where('ip_adress', $ip)->exists()){
                    return;
            }else{
                $visiteur = new Oneinstancevisitor;
                $visiteur->ip_adress = $ip;
                $visiteur->visit_day = date('D');
                $visiteur->visit_month =  date('M');
                $visiteur->save();
            }
        }

    }
    /**
     */
    public static function NumberVisiteurs()
    {
        $nombretotalvisiteurs = Oneinstancevisitor::count();
        if(!empty($nombretotalvisiteurs)){
            return $nombretotalvisiteurs;
        }
    }
    /**
     * @return Application|Factory|View
     *@author Charles
     * Cette fonction va compter le nombre de visiteurs dans la table Visistslog et va retourner le nombre
     */
    public static function NumberofVisitors()
    {
        $nombreVisiteurs = Visitor::count();
        if(!empty($nombreVisiteurs)){
            return $nombreVisiteurs;
        }
    }

    /**
     * @return JsonResponse
     *@author Charles
     * Cette fonction va retourner le nombre de visiteurs par pays
     */
    public static function NumberOfVisitorsPerCountry()
    {
        $nombrevisiteursparpays = Visitor::select(DB::raw('count(*) as totalvisiteurs, pays, visit_month, visit_year'))
        ->groupBy('pays', 'visit_month', 'visit_year')
        ->get();
        if(!empty($nombrevisiteursparpays)){
            return response()->json([
                "mesage" => "Donnees reçus avec succès",
                "data"=> $nombrevisiteursparpays
            ], 200);
        }
    }
}
