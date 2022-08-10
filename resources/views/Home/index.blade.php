@extends('base')

@section('body')
    <section class="section__intro">
<div class="slider">
    <slider-home data-sliders = "define" />
</div>
    </section>
    <section class="section">
        <h2 class="section__title">Actualités</h2>
        <div class="grid_article">
            <card class="card">
                <img src="/images/card_1.jpg" alt="" class="card_img">

                <div class="card__content">
                   <h3 class="card__title">UKRAINE : FAITES UN DON POUR SOUTENIR LA POPULATION UKRAINIENNE</h3>
                   <p>Depuis le 23 février et l’attaque de leur territoire par l’armée russe,
                       la vie des Ukrainiennes et Ukrainiens est bouleversée. Les deux organisations syndicales affiliées
                       à la CSI, la FPU (Fédération des syndicats ukrainiens) et la KPVU (Confédération des syndicats libres
                       d'Ukraine),
                   </p>
                   <a href="#" class="btn btn__primary">Lire la suite</a>
               </div>
            </card>  <card class="card">
                <img src="/images/card_2.jpg" alt="" class="card_img">

                <div class="card__content">
                   <h3 class="card__title">UKRAINE : FAITES UN DON POUR SOUTENIR LA POPULATION UKRAINIENNE</h3>
                   <p>Depuis le 23 février et l’attaque de leur territoire par l’armée russe,
                       la vie des Ukrainiennes et Ukrainiens est bouleversée. Les deux organisations syndicales affiliées
                       à la CSI, la FPU (Fédération des syndicats ukrainiens) et la KPVU (Confédération des syndicats libres
                       d'Ukraine),
                   </p>
                   <a href="#" class="btn btn__primary">Lire la suite</a>
               </div>
            </card>  <card class="card">
                <img src="/images/card_3.jpg" alt="" class="card_img">

                <div class="card__content">
                   <h3 class="card__title">UKRAINE : FAITES UN DON POUR SOUTENIR LA POPULATION UKRAINIENNE</h3>
                   <p>Depuis le 23 février et l’attaque de leur territoire par l’armée russe,
                       la vie des Ukrainiennes et Ukrainiens est bouleversée. Les deux organisations syndicales affiliées
                       à la CSI, la FPU (Fédération des syndicats ukrainiens) et la KPVU (Confédération des syndicats libres
                       d'Ukraine),
                   </p>
                   <a href="#" class="btn btn__primary">Lire la suite</a>
               </div>
            </card>
        </div>
    </section>
@endsection
