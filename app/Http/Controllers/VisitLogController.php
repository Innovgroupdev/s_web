<?php

namespace App\Http\Controllers;

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
        $visitor->ip_address = $ip;
        $visitor->visit_date = date('D-M-Y');
        $visitor->visit_time = date('H:i:s');
        if(DB::table('visitslog')
        ->where('ip_address',$ip)
        ->OrWhere('visit_date', date('D-M-Y'))
        ->exists()) {
            return ;
          }else{
            $visitor->save();
          }
        $visitor->save();
    }
    /**
     * @author Charles
     * Cette fonction va compter le nombre de visiteurs dans la table Visistslog et va retourner le nombre
     * @return int
     */
    public function NumberofVisitors()
    {
        $nombreVisiteurs = DB::table('visitslog')->count();

        return $nombreVisiteurs;
    }

    /**
     * @author Charles
     * Cette fonction va retourner le nombre de visiteurs par pays
     */
    public function NumberOfVisitorsPerCountry()
    {
        //
    }
}
