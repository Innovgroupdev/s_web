<?php

namespace App\Http\Controllers;

use IlluminateSupportCarbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Visitor;

class VisitLogController extends Controller
{

    /**
     * @author Charles
     * Cette fonction Sauvegarde un internaute qui a visiter le site
     */
    public static function CompterVisiteurs()
    {
        $visitor = new Visitor;

        $ip = request()->ip();
        // --------------------------------------| Cette Api fournis 120 requêtes par minute |-------------
        $geoinformations = json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip={$ip_address}'));
        // ----------------| API pour avoir le Pays a partir de L'IP ---------------------
        $country = $geoinformations->geoplugin_countryName;
        $visitor->ip_address = $ip;
        $visitor->visit_date = date('D');
        $visitor->visit_month = date('M');
        $visitor->visit_year = date('Y');
        $visitor->visit_time = date('H:i:s');
        $visitor->pays = $country;
        if(DB::table('visitslog')
        ->where('ip_address',$ip)
        ->where('visit_date', date('D'))
        ->exists()) {
            return ;
          }else{
            $visitor->save();
          }
    }
    /**
     * @author Charles
     * Cette fonction va compter le nombre de visiteurs dans la table Visistslog et va retourner le nombre
     * @return int
     */
    public static function NumberofVisitors()
    {
        $nombreVisiteurs = Visitor::count();

        return $nombreVisiteurs;
    }

    /**
     * @author Charles
     * Cette fonction va retourner le nombre de visiteurs par pays
     * @return json
     */
    public static function NumberOfVisitorsPerCountry()
    {
        $nombrevisiteursparpays = Visitor::select(DB::raw('count(*) as totalvisiteurs, pays, visit_month, visit_year'))
        ->groupBy('pays', 'visit_month', 'visit_year')
        ->get();
        return response()->json([
            "mesage" => "Donnees reçus avec succès",
            "data"=> $nombrevisiteursparpays
        ], 200);
    }
}
