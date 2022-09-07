@extends('layouts.app')

@section('content')

 <div class="container-fluid py-5 px-5">
        <!-- <h1 class="text-black-50">DASHBOARD!</h1> -->
        <!-- Comptage -->
        <div class="container-fluid count">
            <div class="box one">
                <div class="icone">
                    <img
                        src="https://img.icons8.com/windows/40/284d1f/check-male.png"
                    />
                </div>
                <div class="info">
                    <h3>Futurs utilisateurs</h3>
                    <div class="nombre">{{ count($users) }} </div>
                </div>
            </div>
            <div class="box two">
                <div class="icone">
                    <img
                        src="https://img.icons8.com/windows/40/284d1f/ask-question.png"
                    />
                </div>
                <div class="info">
                    <h3>Questions posées</h3>
                    <div class="nombre">{{ $numberofaqs }}
                    </span></div>
                </div>
            </div>
            <div class="box three">
                <div class="icone">
                    <img
                        src="https://img.icons8.com/windows/40/284d1f/mailing.png"
                    />
                </div>
                <div class="info">
                    <h3>Inscrits à la newsletter</h3>
                    <div class="nombre">{{ $numberofNewsSouscription }} </div>
                </div>
            </div>
        </div>
        <!-- GraphesBox1 -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-1 mt-5">
                    <h6 class="text-secondary mb-3 text-uppercase ml-3">Nombre d'inscrits à la newsletters</h6> 
                    <div class="box one bg-white px-4 py-5 shadow-sm br container-fluid h-100">
                    
                        <!---<canvas id="one" class="container-fluid"></canvas>-->
                        <div class="chartBox">
                            <div class="selects mb-5">
                                <div class="d-flex justify-content-end align-items-center container-fluid">
                                    <h6 class="text-secondary mr-3">Filtres :</h6>
                                    <select name="year" id="year" onchange="changeData()" class="yearselect form-control w-25">
                                        <option value="" disabled selected>Choisir une année</option>
                                    </select>
                                    <select name="country" id="country" onchange="changeData()" class="countryselect form-control ml-2 w-25">
                                        <option value="Tous">Tous</option>
                                    </select>
                                </div> 
                            </div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-6 mt-5 box-22">
                    <h6 class="text-secondary mb-3 text-uppercase ml-3">Pourcentage Futurs Utilisateurs par Pays</h6> 
                        <div class="box two bg-white px-4 py-5 shadow-sm br container-fluid h-100 text-left">
                            @php
                            $totalCountriesVisites = 0;
                            @endphp
                            @foreach($userandpercentage->getData()->data as $country)
                                @php
                                $totalCountriesVisites += $country->NombreUser;
                                @endphp
                            @endforeach

                            @foreach($userandpercentage->getData()->data as $country)
                        
                        <div class="country mb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                    <h6>{{$country->pays}}</h6>
                                    <div class="nombre ">
                                    <strong>{{ $country->NombreUser }} </strong> <span>| </span> 
                                    <span class="pourecentage"> 
                                    {{ round(($country->NombreUser * 100 / count($users)), 0) }} %
                                        </span>
                                    </div>
                                
                            </div>
                            <div class="slideP p-0  br container-fluid mt-2" style="height: .5rem;background-color:#e3e3e3">
                                <div class="slideV bg-primary br h-100 p-0" style="width: {{$country->NombreUser * 100 / count($users)}}%;"></div>
                            </div>
                            </div>
                            @endforeach   
                        </div>
                </div>
                <div class="col-6 mt-5 box-20">
                    <h6 class="text-secondary mb-3 text-uppercase ml-3">Pourcentage News par pays</h6> 
                        <div class="box two bg-white px-4 py-5 shadow-sm br container-fluid h-100 text-left">
                            @php
                            $totalCountriesVisites = 0;
                            @endphp
                            @foreach($percentagesouscription->getData()->data as $country)
                                @php
                                $totalCountriesVisites += $country->NombredeSouscrivant;
                                @endphp
                            @endforeach

                            @foreach($percentagesouscription->getData()->data as $country)
                        
                        <div class="country mb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                    @if($country->pays != "")
                                        <h6>{{$country->pays}}</h6>

                                    @else
                                        <h6>Non Sépécifié</h6>
                                    @endif
                                    <div class="nombre ">
                                    <strong>{{ $country->NombredeSouscrivant }} </strong> <span>| </span> 
                                    <span class="pourecentage"> 
                                    {{ round(($country->NombredeSouscrivant * 100 / $numberofNewsSouscription),0) }} %
                                        </span>
                                    </div>
                                
                            </div>
                            <div class="slideP p-0  br container-fluid mt-2" style="height: .5rem;background-color:#e3e3e3">
                                <div class="slideV bg-danger br h-100 p-0" style="width: {{$country->NombredeSouscrivant * 100 / $numberofNewsSouscription}}%;"></div>
                            </div>
                        </div>
                            @endforeach 
            
                </div>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-6 questions-box ">
                <div class="container-fluid mt-5 py-5 px-0">
                    <div class="d-flex justify-content-between align-items-center">
                    <h6 class="text-secondary mb-3 text-uppercase ml-3">Questions récentes </h6> 
                    <a href="{{ route('faqs.index') }}" class="py-2  h6 pr-2"  style="text-decoration: none;">Toutes les questions <i class="fa fa-arrow-right ml-1"></i> </a>
                    </div>
                    <div class="br container-fluid mr-0 bg-white shadow-sm p-3 h-100 mt-4">
                          <!-- Comments areas -->
                          <div class="container-fluid py-4">
                                        @php
                                         $k = 0;
                                        @endphp
                                        @foreach($questions as $question)
                                        @if($k > 0)
                                        <hr>
                                        @endif
                                      
                                        <div class="item-comment-area comtainer-fluid">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="{{asset('images/cible-app-avatar.png')}}" style="border-radius:50%" alt="" width="50" height="50">
                                                </div>
                                                <div class=" ml-3 mt-2">
                                                    <h6 class="mb-0 pb-0 fw-600" > {{$question->pays}} - User {{$question->id}}</h6>
                                                    <small class="small mt-3 text-secondary" >{{$question->email}}</small>
                                                </div>
                                            </div>
                                            
                                         
                                            <div class="comment-text">
                                            <p class="text-secondary mt-3 ">
                                             <strong>Téléphone   </strong> | {{$question->tel}}
                                            </p>
                                           
                                            <p class="text-secondary mt-3 small" > 
                                            <!-- <strong>Raison </strong> <br> -->
                                            <span class="m-0 me-2 h5 text-info"> &#128630;</span>
                                            {{$question->question}}
                                            </p>
                                            <p class="small text-right text-secondary">
                                            {{$question->updated_at}}
                                            </p>
                                            </div>
                                        </div>
                                    
                                        @php
                                         $k ++;
                                        @endphp
                                        @endforeach
                                    </div>
                                    <!-- End Comments areas -->
                    </div>
                    </div>
                </div>
                <div class="col-6 articles-box pr-0">
                <div class="container-fluid mt-5 pt-5 pb-3 px-0 mx-0">
            <div class="d-flex justify-content-between align-items-center">
            <h6 class="text-secondary mb-3 text-uppercase ml-3 pr-3">Articles les plus populaires</h6> 
            <a href="{{ route('articles.index') }}" class="py-2  h6 pr-2"  style="text-decoration: none;">Tous les articles <i class="fa fa-arrow-right ml-1"></i> </a>
            </div>
                <div class="row">
                @if($articlewithnumbervues->count())
                @foreach($articlewithnumbervues as $article)
                    <div class="col-md-6 col-lg-4 col-xl-6 mb-3 article-box">
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
    var articlesBox = document.querySelector('.articles-box');
    var questionsBox = document.querySelector('.questions-box');
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
        // console.log(articleBoxs)
        }
        if(screen.width < 1600){
            articlesBox.classList.remove('col-6');
            articlesBox.classList.add('col-7');
            questionsBox.classList.remove('col-6');
            questionsBox.classList.add('col-5');
        }
        if(screen.width < 1450){
            articlesBox.classList.add('col-6');
            articlesBox.classList.remove('col-7');
            questionsBox.classList.add('col-6');
            questionsBox.classList.remove('col-5');
            for(let i = 0; i < articleBoxs.length ; i++){
            articleBoxs[i].classList.remove('col-xl-6')
            articleBoxs[i].classList.add('col-xl-12')
            }
        }
        if(screen.width < 1250){
            articlesBox.classList.add('col-12');
            articlesBox.classList.remove('col-6');
            questionsBox.classList.add('col-12');
            questionsBox.classList.remove('col-6');
            for(let i = 0; i < articleBoxs.length ; i++){
            articleBoxs[i].classList.add('col-xl-6')
            articleBoxs[i].classList.remove('col-xl-12')
            }
        }
     }
     responsive();
     window.addEventListener('resize', function(event) {
        responsive();
        }, true);
 </script> 
 <style>
            .chartBox {
                padding: 4px;
                background: white;
            }
            .selects {
                text-align: right;
            }
            select {
                width: 20%;
                padding: 5px;
                border-radius: 5px;
            }
        </style> 
<script type="text/javascript">
    var number_news_souscrivant = <?php echo json_encode($newsstats);?>;
    var news_stat_all = <?php echo json_encode($statsofNews);?>;

    var nbnewssouscrivant=[];
    var payssouscrivant=[];
    var mois =[];
    var annees=[];

    var nball=[];
    var paysall=[];
    var moisall =[];
    var anneesall=[];


    var our_data_one =[];
    var our_data_two=[];
    var displayedYears =[];
    var displayCountries =[];
    var souscrivantdata;
    var statAll;
    var our_final_data = [];
        
    
    souscrivantdata = number_news_souscrivant.original.data;
    statAll = news_stat_all.original.data;

    var elt = document.querySelector('.yearselect');
    var countryselect = document.querySelector('.countryselect')

    for (let i = 0; i <souscrivantdata.length; i++){
        payssouscrivant[i] = souscrivantdata[i].pays;
        nbnewssouscrivant[i] = souscrivantdata[i].NombredeSouscrivant;
        mois[i] = souscrivantdata[i].souscription_month;
        annees[i] = souscrivantdata[i].souscription_year;
        our_data_one[i] = {
            id:mois[i],
            countries: {
            [annees[i]]: {[payssouscrivant[i]]:nbnewssouscrivant[i]}
                }
        };
    }
            for(let i=0; i<statAll.length; i++){
                paysall[i] = "Tous";
                nball[i] = statAll[i].total;
                moisall[i] = statAll[i].souscription_month;
                anneesall[i] = statAll[i].souscription_year;
                payssouscrivant.push(paysall[i]);
                our_data_two[i] = {
                    id:moisall[i],
                    countries: {
                        [anneesall[i]]: {[paysall[i]]:nball[i]}
                    }
                };
            }
            function renderGraph(){
                //  console.log(document.getElementById("country").value);
                if(document.getElementById("country").value != "Tous"){
                     //console.log("test1")
                     console.log(our_data_one)
                   our_final_data = our_data_one;
               }else{
                   console.log(our_data_two)
                   our_final_data = our_data_two;
                } 

                return our_final_data;
            }
            // }
                /* const country = document.getElementById("country").value;
                if(country == "Tous"){
                    our_final_data = our_data_two;
                }else{
                    our_final_data = our_data_one;
                } */
    displayedYears = [...new Set(annees)];
    displayCountries = [...new Set(payssouscrivant)];
    for(let i=0; i<displayedYears.length; i++){
        if(displayedYears[i] != ""){
            var option = new Option(`${displayedYears[i]}`,`${displayedYears[i]}`);
            elt.options[elt.options.length] = option;
        }
    }
    for(let i=0; i<displayCountries.length; i++){
        if(displayCountries[i] != null){
            var option = new Option(`${displayCountries[i]}`,`${displayCountries[i]}`);
            countryselect.options[countryselect.options.length] = option;
        }
    }
    
            const data = {
                datasets: [
                    {
                        label: "Par pays et annee",
                        data: renderGraph(),
                        backgroundColor: [
                            "rgba(255, 26, 104, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                            "rgba(255, 206, 86, 0.2)",
                            "rgba(75, 192, 192, 0.2)",
                            "rgba(153, 102, 255, 0.2)",
                            "rgba(255, 159, 64, 0.2)",
                            "rgba(0, 0, 0, 0.2)",
                        ],
                        borderColor: [
                            "rgba(255, 26, 104, 1)",
                            "rgba(54, 162, 235, 1)",
                            "rgba(255, 206, 86, 1)",
                            "rgba(75, 192, 192, 1)",
                            "rgba(153, 102, 255, 1)",
                            "rgba(255, 159, 64, 1)",
                            "rgba(0, 0, 0, 1)",
                        ],
                        borderWidth: 0.5,
                    },
                ],
            };
            // config
    const config = {
                type: "bar",
                data,
                options: {
                    parsing: {
                        xAxisKey: "id",
                        yAxisKey: "countries.2022.Togo",
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            };
            // render init block
            const myChart = new Chart(
                document.getElementById("myChart"),
                config
            );

            function changeData() {
                renderGraph();
                console.log(renderGraph());
                var year = document.getElementById("year").value;
                var country = document.getElementById("country").value;
                myChart.config.options.parsing.yAxisKey = `countries.${year}.${country}`;
                myChart.update();
            }
        </script>
@endsection