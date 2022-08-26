<?php
// Récupération des Données

// |----------------- Controllers a utilisés --------|
use App\Http\Controllers\VisitLogController;
use App\Http\Controllers\InformerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticlesController;
// |--------------------------------------------------|

//-----------------------------------------------------
$numbervisitors = VisitLogController::NumberofVisitors();
//-----------------------------------------------------

//-----------------------------------------------------
$numbervisitorspercountry = VisitLogController::NumberOfVisitorsPerCountry();
//-----------------------------------------------------

//-------------------------------------------------------
$numberofInformers = InformerController::TotalInformers();
//-------------------------------------------------------

//-------------------------------------------------------
$numberofInformerspercountry = InformerController::TotalInformersPerCountry();
//-------------------------------------------------------


//-----------------------------------------------------------------
$numberofNewsSouscription = NewsController::totalNewsSouscription();
//------------------------------------------------------------------

//-----------------------------------------------------------------
$articlewithnumbervues = ArticlesController::NumberofVues();
//------------------------------------------------------------------

//-----------------------------------------------------------------------
$souscrivantnewssparpays = NewsController::TotalSouscriptionsperCountry();
//------------------------------------------------------------------------

?>
@extends('layouts.app')

@section('content')
 <div class="container-fluid">
        <!-- <h1 class="text-black-50">DASHBOARD!</h1> -->
        <!-- Comptage -->
        <div class="container count">
            <div class="box one">
                <div class="icone">
                    <img
                        src="https://img.icons8.com/small/40/9f4c26/user--v1.png"
                    />
                </div>
                <div class="info">
                    <h3>Nombre de visteurs</h3>
                    <div class="nombre">{{ $numbervisitors }}</div>
                </div>
            </div>
            <div class="box two">
                <div class="icone">
                    <img
                        src="https://img.icons8.com/small/40/1e4e64/about-us-male.png"
                    />
                </div>
                <div class="info">
                    <h3>Nombre de visiteurs à informer</h3>
                    <div class="nombre">{{ $numberofInformers }}</div>
                </div>
            </div>
            <div class="box three">
                <div class="icone">
                    <img
                        src="https://img.icons8.com/windows/40/42183f/mailing.png"
                    />
                </div>
                <div class="info">
                    <h3>Nombre d'inscrits à la newsletter</h3>
                    <div class="nombre">{{ $numberofNewsSouscription }}</div>
                </div>
            </div>
        </div>

        <!-- GraphesBox1 -->
        <div class="container graphes">
            <div class="graph-1">
                <div class="box one">
                    <canvas id="one"></canvas>
                </div>
                <div class="box two">
                    <h3>Nombre de visiteurs à informer par pays</h3>
                    <canvas id="two"></canvas>
                </div>
            </div>
            <!-- GraphesBox2 -->
            <div class="graph-2">
                <div class="box three">
                    <canvas id="three"></canvas>
                </div>
                <div class="box four">
                    <table id="articles">
                        <tr>
                            <th>ARTICLES</th>
                            <th>VUES</th>
                        </tr>
                        @foreach($articlewithnumbervues as $stats)
                            <tr>
                                <td>{{ $stats['libelle'] }}</td>
                                <td>{{ $stats['nbvue'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">

    var js_variable  = <?php echo json_encode($numbervisitorspercountry);?>;
    var number_informers = <?php echo json_encode($numberofInformerspercountry);?>;
    var number_news_souscrivant = <?php echo json_encode($souscrivantnewssparpays);?>;

    var paysvisitors=[];
    var nb=[];
    var donnees;

    var nbformers=[];
    var paysinformers=[];
    var informersdata;

    var nbnewssouscrivant=[];
    var payssouscrivant=[];
    var souscrivantdata;



    // Données Recuperer a partir du Back
    //-----------------------------------
    donnees = js_variable.original.data;
    informersdata = number_informers.original.data;
    souscrivantdata = number_news_souscrivant.original.data;
    
    //----------------------------------------------

    // Parcours Recupération des informations nécessaires pour le graphe
    //----------------------|     |------------------------------------
    for (let i = 0; i < donnees.length; i++) {
        paysvisitors[i] = donnees[i].pays;
        nb[i] = donnees[i].totalvisiteurs;
    }

    for (let i = 0; i < informersdata.length; i++) {
        paysinformers[i] = informersdata[i].pays;
        nbformers[i] = informersdata[i].totalinformers;
    }


    for (let i = 0; i < souscrivantdata.length; i++) {
        payssouscrivant[i] = souscrivantdata[i].pays;
        nbnewssouscrivant[i] = souscrivantdata[i].NombredeSouscrivant;
    }

    //-------------------------|      |---------------------------------
        const data = {
            labels: payssouscrivant,
            datasets: [
                {
                    label: "Nombre d'inscrits à la newsletter",
                    backgroundColor: "rgba(251, 134, 80, 0.4)",
                    hoverBackgroundColor: "rgb(251, 134, 80)",
                    borderWidth: 2,
                    borderColor: "rgb(251, 134, 80)",
                    data: nbnewssouscrivant,
                },
            ],
        };
        const config1 = {
            type: "bar",
            data: data,
            options: {
                scales: {},
                plugins: {},
            },
        };

const data2 = {
    labels: paysinformers,
    datasets: [
        {
            data: nbformers,
            backgroundColor: [
                "#55C3F5",
                "#bee6fa",
                "rgb(113, 117, 151)",
                "rgb(251, 134, 80)",
            ],
            hoverOffset: 4,
        },
    ],
};

const data3 = {
    labels: paysvisitors,
    datasets: [
        {
            label: "NOMBRE DE VISITEURS PAR PAYS",
            backgroundColor: "rgba(47, 72, 88, 0.7)",
            hoverBackgroundColor: "rgb(47, 72, 88)",
            borderColor: "rgb(47, 72, 88)",
            borderWidth: 2,
            data: nb,
        },
    ],
};

const config2 = {
    type: "pie",
    data: data2,
};

const config3 = {
    type: "bar",
    data: data3,
};

        const myChart1 = new Chart(document.getElementById("one"), config1);
        const myChart2 = new Chart(document.getElementById("two"), config2);
        const myChart3 = new Chart(document.getElementById("three"), config3);
    </script>

@endsection
