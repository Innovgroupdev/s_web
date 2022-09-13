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
        /* $_SERVER; */
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
}
