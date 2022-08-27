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
 <div class="container-fluid py-5 px-5">
        <!-- <h1 class="text-black-50">DASHBOARD!</h1> -->
        <!-- Comptage -->
        <div class="container-fluid count">
            <div class="box one">
                <div class="icone">
                    <img
                        src="https://img.icons8.com/small/40/9f4c26/user--v1.png"
                    />
                </div>
                <div class="info">
                    <h3>Visteurs</h3>
                    <div class="nombre">{{ $numbervisitors }} </div>
                </div>
            </div>
            <div class="box two">
                <div class="icone">
                    <img
                        src="https://img.icons8.com/small/40/1e4e64/about-us-male.png"
                    />
                </div>
                <div class="info">
                    <h3>Visiteurs à informer</h3>
                    <div class="nombre">{{ $numberofInformers }} <span>| </span> <span class="pourecentage">  40 %</span></div>
                </div>
            </div>
            <div class="box three">
                <div class="icone">
                    <img
                        src="https://img.icons8.com/windows/40/42183f/mailing.png"
                    />
                </div>
                <div class="info">
                    <h3>Inscrits à la newsletter</h3>
                    <div class="nombre">{{ $numberofNewsSouscription }} <span>| </span> <span class="pourecentage">  60 %</span></div>
                </div>
            </div>
        </div>

        <!-- GraphesBox1 -->
        <div class="container-fluid graphes">
            <div class="row graph-1 ">
                <div class="col-8 box-1">
                    <h6 class="text-secondary mb-3 text-uppercase ml-3">Nombre d'inscrits à la newsletters</h6> 
                    <div class="box one bg-white px-4 py-5 shadow-sm br container-fluid h-100 ">
                    
                        <canvas id="one" class="container-fluid"></canvas>
                    </div>
                </div>
            
                <div class="col-4 box-2">
                <h6 class="text-secondary mb-3 text-uppercase ml-3">Nombre de visiteurs à informer par pays</h6> 
                    <div class="box two bg-white px-4 py-5 shadow-sm br container-fluid h-100">
                        <canvas id="two"></canvas>
                    </div>
                </div>

                <div class="col-6 mt-5 box-22 d-none">
                <h6 class="text-secondary mb-3 text-uppercase ml-3">Nombre de visiteurs à informer par pays</h6> 
                    <div class="box two bg-white px-4 py-5 shadow-sm br container-fluid h-100 text-left">
                        @php
                        $totalCountriesVisites = 0;
                        @endphp
                        @foreach($numberofInformerspercountry->getData()->data as $country)
                            @php
                            $totalCountriesVisites += $country->totalinformers;
                            @endphp
                        @endforeach

                        @foreach($numberofInformerspercountry->getData()->data as $country)
                      
                       <div class="country mb-4">
                         <div class="d-flex justify-content-between align-items-center">
                                <h6>{{$country->pays}}</h6>
                                <div class="nombre ">
                                <strong>{{ $country->totalinformers }} </strong> <span>| </span> 
                                <span class="pourecentage"> 
                                {{ round($country->totalinformers * 100 / $totalCountriesVisites,0) }} %
                                    </span>
                                </div>
                               
                         </div>
                         <div class="slideP p-0  br container-fluid mt-2" style="height: .5rem;background-color:#e3e3e3">
                                    <div class="slideV bg-primary br h-100 p-0" style="width:  {{ $country->totalinformers * 100 / $totalCountriesVisites }}%;" ></div>
                        </div>
                        </div>
                        @endforeach
                </div>



            </div>
            <div class="row graph-1 mt-5 pt-4">
                <div class="col-8 box-3">
                    <h6 class="text-secondary mb-3 text-uppercase ml-3">Nombre d'inscrits à la newsletters</h6> 
                    <div class="box one bg-white px-4 py-5 shadow-sm br container-fluid h-100 ">
                    
                        <canvas id="three" class="container-fluid"></canvas>
                    </div>
                </div>
            
                <div class="col-4 box-4">
                <h6 class="text-secondary mb-3 text-uppercase ml-3">Nombre de visiteurs à informer par pays</h6> 
                    <div class="box two bg-white px-4 py-5 shadow-sm br container-fluid h-100 text-left">
                        @php
                        $totalCountriesVisites = 0;
                        @endphp
                        @foreach($numberofInformerspercountry->getData()->data as $country)
                            @php
                            $totalCountriesVisites += $country->totalinformers;
                            @endphp
                        @endforeach

                        @foreach($numberofInformerspercountry->getData()->data as $country)
                      
                       <div class="country mb-4">
                         <div class="d-flex justify-content-between align-items-center">
                                <h6>{{$country->pays}}</h6>
                                <div class="nombre ">
                                <strong>{{ $country->totalinformers }} </strong> <span>| </span> 
                                <span class="pourecentage"> 
                                {{ round($country->totalinformers * 100 / $totalCountriesVisites,0) }} %
                                    </span>
                                </div>
                               
                         </div>
                         <div class="slideP p-0  br container-fluid mt-2" style="height: .5rem;background-color:#e3e3e3">
                                    <div class="slideV bg-primary br h-100 p-0" style="width:  {{ $country->totalinformers * 100 / $totalCountriesVisites }}%;" ></div>
                        </div>
                        </div>
                        @endforeach
                </div>
            </div>
            <div class="container-fluid mt-5 py-5">
            <div class="d-flex justify-content-between align-items-center">
            <h6 class="text-secondary mb-3 text-uppercase ml-3">Articles les plus populaires</h6> 
            <a href="{{ route('articles.index') }}" class="btn btn-primary py-2 px-3 h6" >Tous les articles</a>
            </div>
                <div class="row">
                @if($articlewithnumbervues->count())
                @foreach($articlewithnumbervues as $article)
                    <div class="col-md-6 col-lg-4 col-xl-3 mb-3 article-box">
                      <a href="{{ route('articles.show', [$article->id]) }}" class="container-fluid" style="text-decoration: none;">
                      <div class="br container-fluid bg-white shadow-sm p-3 h-100">
                      <div class="iq-blog-image clearfix mb-3 br text-center" style="position : relative;height:238px;overflow:hidden">
                      <div class="btn btn-warning br px-2 py-1 " style="position: absolute;top: .7rem;right:.5rem;z-index:2;font-size:.7rem;">{{$article->categorie->lib}}</div>
                        <img src="{{ asset($article->img)}}" loading="lazy" style="position : absolute;filter: blur(3px);top:0;left:0;transform:scale(1.2);z-index:0" class="center-block h-100 w-100" alt="{{$article->libelle}}">
                        <img src="{{ asset($article->img)}}" loading="lazy" class="center-block h-100 mx-auto text-center" style="width: auto;position:relative;;z-index:1" alt="{{$article->libelle}}">
                    </div>
                      <div class="row px-1">
                         <div class=" col-6">
                           <div class="container-fluid d-flex justify-content-center align-items-center h6 bg-light p-3 br text-secondary">
                           <i class="fa fa-eye"></i>  
                            <span class="small ml-2">{{ $article->getCommentairesValidCount() }}</span>
                           </div>
                         </div>
                         <div class=" col-6">
                           <div class="container-fluid d-flex justify-content-center align-items-center h6 bg-light p-3 br text-secondary">
                           <i class="fa fa-comment"></i>  
                            <span class="small ml-2">{{ $article->getCommentairesValidCount() }}</span>
                           </div>
                         </div>
                       
                      </div>

                      <div class="px-2">
                      <h6 class="my-2 " style="font-weight:600;">
                            {{ substr($article->libelle, 0, 34)}}
                            @if(strlen($article->libelle) >= 34)
                            ...
                            @endif
                        </h6>
                        <small class="small text-secondary ">
                        {{ substr($article->desc, 0, 70)}}
                            @if(strlen($article->desc) > 70)
                            ...
                        @endif
                        </small>
                      </div>

                      </div>
                      </a>
                    </div>
                @endforeach
                @endif
                </div>
               
            </div>
            <!-- GraphesBox2 -->
            </div> 
            </div> 
        </div>
</div>
<script>
    var box1 = document.querySelector('.box-1');
    var box2 = document.querySelector('.box-2');
    var box22 = document.querySelector('.box-22');
    var box3 = document.querySelector('.box-3');
    var box4 = document.querySelector('.box-4');
    var articleBoxs = document.getElementsByClassName('article-box')

     function responsive(){
        if(screen.width < 1500){
        box1.classList.remove('col-8');
        box1.classList.add('col-12'); 
        box1.classList.add('mb-3'); 
        box2.classList.remove('col-4');
        box2.classList.add('col-6'); 
        box2.classList.add('mt-5');  
        box22.classList.remove('d-none'); 
        box3.classList.add('col-12'); 
        box3.classList.add('mb-3'); 
        box4.classList.add('d-none'); 
        console.log(articleBoxs)
        for(let i = 0; i < articleBoxs.length ; i++){
            articleBoxs[i].classList.remove('col-xl-3')
            if(screen.width < 1350){
                articleBoxs[i].classList.remove('col-lg-4')
            }
        }
        }
     }
     responsive();
     window.addEventListener('resize', function(event) {
        responsive();
        }, true);
 </script>  
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
