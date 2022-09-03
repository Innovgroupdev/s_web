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
    public static function getClientIp(Request $request){
        dd($_SERVER);
        $visiteur = new Visitor;
        $oneInstanceOfVisiteur = new Oneinstancevisitor;
        $visiteur->ip_address =  $request->ip;
        $visiteur->visit_date = (new DateTime())->format('Y-M-d');
        $visiteur->visit_month =  date('M');
        $visiteur->visit_year = date('Y');
        $visiteur->visit_time = date('H:i:s');
        $visiteur->pays = $request->pays;
        $visiteur->ville = $request->ville;
        $visiteur->region = $request->region;
        if(!Visitor::where('ip_address',  $request->ip)->where('visit_date',(new DateTime())->format('Y-M-d'))->exists()){
            $visiteur->save();
        }
        if(!Oneinstancevisitor::where('ip_address',  $request->ip)->exists()){
            $oneInstanceOfVisiteur->ip_address =  $request->ip;
            $oneInstanceOfVisiteur->visit_date = (new DateTime())->format('Y-M-d');
            $oneInstanceOfVisiteur->visit_month =  date('M');
            $oneInstanceOfVisiteur->visit_year = date('Y');
            $oneInstanceOfVisiteur->visit_time = date('H:i:s');
            $oneInstanceOfVisiteur->pays = $request->pays;
            $oneInstanceOfVisiteur->ville = $request->ville;
            $oneInstanceOfVisiteur->region = $request->region;
            $oneInstanceOfVisiteur->save();
        }

    }
    /**
     * @author Charles
     * Cette fonction Sauvegarde un internaute qui a visiter le site
     */
    /*ublic static function CompterVisiteurs()
    {
        $visitor = new Visitor;

        $ip = VisitLogController::IpClient();
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
    /*public static function NumberVisiteurs()
    {
        $nombretotalvisiteurs = Oneinstancevisitor::count();
            return $nombretotalvisiteurs;
    }
    /**
     * @return Application|Factory|View
     *@author Charles
     * Cette fonction va compter le nombre de visiteurs dans la table Visistslog et va retourner le nombre
     */
    /*public static function NumberofVisitors()
    {
        $nombreVisiteurs = Visitor::count();
        return $nombreVisiteurs;
    }

    /**
     * @return JsonResponse
     *@author Charles
     * Cette fonction va retourner le nombre de visiteurs par pays
     */
    /*public static function StatsVisitsPermonthandYear()
    {
        $nombrevisiteursparpays = Visitor::select('count(*) as Numbervisits, visit_month, pays, visit_year')
        ->groupBy('visit_month, pays, visit_year')
        ->get();
        if(!empty($nombrevisiteursparpays)){
            return response()->json([
                "mesage" => "Donnees reçus avec succès",
                "data"=> $nombrevisiteursparpays
            ], 200);
        }
    }*/
}
