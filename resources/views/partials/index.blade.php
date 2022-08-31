@extends('partials.model')
@section('ref')
<title> Billetterie en ligne – Sponsors – Recrutement | CIBLE</title>
<meta name="description" content="Nous digitalisons l’événementiel pour le bonheur des acteurs de tout type d’événement. Qu’il s’agisse de publier gratuitement un événement, de vendre ses tickets en ligne, de trouver un sponsor pour son événement, de recruter des hôtesses … Concerts, festivals, formations, séminaires, cinéma, conférences, salons, foires, congrès, concours, affaires, comédie…">
<link rel="canonical" href="{{url('/')}}" />
<meta name="keywords" content="l’événementiel,cible,cible-app,fêtes,Concerts,festivals,formations,séminaires,cinéma,conférences,salons,foires,congrès,concours,affaires,comédie,Opportunités,Annonces,Conseils">
<meta name="author" content="DIGITAL INNOV GROUP">
<meta property="og:title" content="Billetterie en ligne – Sponsors – Recrutement | CIBLE">
<meta property="og:site_name" content="CIBLE">
<meta property="og:url" content="{{url('/')}}">
<meta property="og:description" content="Nous digitalisons l’événementiel pour le bonheur des acteurs de tout type d’événement. Qu’il s’agisse de publier gratuitement un événement, de vendre ses tickets en ligne, de trouver un sponsor pour son événement, de recruter des hôtesses … Concerts, festivals, formations, séminaires, cinéma, conférences, salons, foires, congrès, concours, affaires, comédie…">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset("images/logo-cible.jpg")}}">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@CIBLE">
<meta name="twitter:title" content="Billetterie en ligne – Sponsors – Recrutement | CIBLE">
<meta name="twitter:image" content="{{ asset("images/logo-cible.jpg")}}">
<meta name="twitter:description" content="Nous digitalisons l’événementiel pour le bonheur des acteurs de tout type d’événement. Qu’il s’agisse de publier gratuitement un événement, de vendre ses tickets en ligne, de trouver un sponsor pour son événement, de recruter des hôtesses … Concerts, festivals, formations, séminaires, cinéma, conférences, salons, foires, congrès, concours, affaires, comédie…">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "CIBLE",
        "alternateName": "CIBLE-APP",
        "url": "{{url('/')}}",
        "logo": "{{ asset("images/logo-cible.jpg")}}",
        "sameAs": [
            "https://youtube.com/channel/UC84ld5phXpktjk8eE75rEIw",
            "https://twitter.com/CibleApp?t=fZnzC21urJJ_-SolfBcocw&s=09",
            "https://www.instagram.com/invites/contact/?i=1g3q0tntwd7bs&utm_content=p0pxx73",
            "https://www.linkedin.com/company/cible-app/",
            "https://www.tiktok.com/@cible_app?is_from_webapp=1&sender_device=pc",
            "https://www.facebook.com/cibleapp"
        ]
    }
</script>

<?php
use App\Http\Controllers\VisitLogController;
VisitLogController::CompterVisiteurs();
?>
@endsection
@section('content')
<div class="site-content-contain">
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <article id="post-543" class="appino-panel  post-543 page type-page status-publish hentry">


                    <div class="panel-content">
                        <div class="container">
                            <div class="sf-content">
                                <div id="home" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1" data-vc-parallax-image="{{ asset('images/clible_app.jpg')}}" class="vc_row wpb_row vc_row-fluid vc_custom_1549710885163 vc_row-has-fill vc_row-no-padding vc_general vc_parallax vc_parallax-content-moving">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <section id="iq-home" class="no-slider" class="banner">
                                                    <div id="particles-js"></div>
                                                    <div class="container">
                                                        <div class="banner-text">
                                                            <div class="row flex-row-reverse">
                                                                <div class="col-sm-5 col-lg-5 col-md-5 hidden-xs">
                                                                    <div class="img-one">
                                                                        <img loading="lazy" class="iq-mobile-img" src="{{ asset('images/Billeterie_en_ligne.png')}}" alt="application de vente et d’achat de tickets pour événement en ligne">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-7 col-lg-7 col-md-7 align-self-center">
                                                                    <h1>Faites de chaque événement une opportunité</h1>
                                                                    <div class="link">
                                                                        <p>
                                                                            Concert – Formation – Comédie – Spectacle – Foire – Exposition – Cinéma – Sport
                                                                            – Séminaire – Conférence – Colloque – Défilé – Tour de magie – Lancement – Danse
                                                                            – Festival – Anniversaire – Mariage – Soirée.
                                                                        </p>



                                                                        <a data-target="#exampleModalCenterHeader" data-toggle="modal" title="Modal Soyez informé au lancement de cible" class="button  button-icon " href="#">
                                                                            Soyez informé au lancement </a>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="iq-background-overlay overlay3" id="overlay_96900610"></div>
                                                <div class="layer_wrap iq-objects-style-1 " id="object_2103496286"><span class="iq-objects-01" data-bottom="transform:translatey(100px)" data-top="transform:translatex(0);">
                                                        <img loading="lazy" src="{{ asset('images/clibe-app-w-1-1.png')}}" alt="application de vente et d’achat de tickets pour événement en ligne">
                                                    </span><span class="iq-objects-02" data-bottom="transform:translatey(100px)" data-top="transform:translatex(0);">
                                                        <img loading="lazy" src="{{ asset('images/clibe-app-w-1-1.png')}}" alt="application de vente et d’achat de tickets pour événement en ligne">
                                                    </span><span class="iq-objects-03" data-bottom="transform:translatey(100px)" data-top="transform:translatex(0);">
                                                        <img loading="lazy" src="{{ asset('images/clibe-app-w-1-1.png')}}" alt="application de vente et d’achat de tickets pour événement en ligne">
                                                    </span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title text-center">
                                                                    <h2 class="title">Chacun gagne dans un événement </h2>
                                                                    <p>Cible est conçue pour répondre aux besoins de tous les acteurs de l'événementiel à savoir les
                                                                        organisateurs, les sponsors, les investisseurs, les acheteurs de tickets, les prestataires de
                                                                        services, les recruteurs et les propriétaires de salles ou espaces pour évènements. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box text-"><img loading="lazy" alt="Dépenser moins pour chaque événement" src="{{ asset('images/événementiel_moins_cher.png')}}" />
                                                                    <h5>Dépensez <br> toujours moins</h5>
                                                                    <p>
                                                                        Achetez vos tickets sur CIBLE sans dépenser votre propre argent.
                                                                        Il suffit juste de recommander l’application.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box text-"><img loading="lazy" alt="Gagnez plus d’argent pour chaque événement" src="{{ asset('images/gagner_argent_événement.png')}}" />
                                                                    <h5>Gagnez <br> encore plus</h5>
                                                                    <p>
                                                                        Augmentez la visibilité de votre événement pour vendre plus de tickets et avoir des
                                                                        résultats sur la satisfaction.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box text-"><img loading="lazy" alt="Des gadgets personnalisés pour chaque concert, formation, séminaires, spectacles…" src="{{ asset('images/gadgets_événements.png')}}" />
                                                                    <h5>Gardez <br> des souvenirs</h5>
                                                                    <p>A chaque événement, des gadgets souvenirs vous sont proposés.
                                                                        C’est à vous de choisir et d’en profiter…</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box text-"><img loading="lazy" alt="Des événements en live, des tchats, avec de fortes sensations pour plus de plaisir" src="{{ asset('images/application_mobile_événementielle.png')}}" />
                                                                    <h5>Simplifiez-vous <br> la vie</h5>
                                                                    <p>
                                                                        Facilitez-vous la vie avec une application pour les entreprises
                                                                        et une application pour les particuliers
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box text-"><img loading="lazy" alt="publiez, vendez et encaissez en 48h l’argent de vos tickets pour tous vos événements" src="{{ asset('images/clible-app-plus-event-icone.png')}}" />
                                                                    <h5>Vivez <br> plus qu'un événement</h5>
                                                                    <p>Des fonctionnalités sont développées mois après mois pour
                                                                        vous donner la meilleure expérience </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box text-"><img loading="lazy" alt="une équipe formidable pilote CIBLE, l’application mobile des acteurs de l’événementiel" src="{{ asset('images/équipe_cible_tickets_évéments.png')}}" />
                                                                    <h5>Exigez <br> Le meilleur de nous</h5>
                                                                    <p>Demandez-nous encore plus de fonctionnalités...
                                                                        Nous tâcherons de toujours réaliser vos meilleures idées. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div id="about" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1547897411945 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                    <div class="no-margin wpb_column vc_column_container vc_col-sm-6">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                            <img  width="604" height="615" src="{{ asset('images/application_de_vente_de_tickets.png')}}" class="vc_single_image-img attachment-full" alt="Vendre les tickets de tout type d’événements en ligne" loading="lazy" sizes="100vw" />
                                                                        </div>
                                                                    </figure>
                                                                </div>
                                                                <div class="layer_wrap iq-objects-style-2 " id="object_1959149622"><span class="iq-objects-01" data-bottom="transform:translatey(200px)" data-top="transform:translatex(0);">
                                                                        <!-- <img src="/b3-1.png"
																					alt="drive02"> -->
                                                                    </span><span class="iq-objects-02" data-bottom="transform:translatey(-200px)" data-top="transform:translatex(-0);">
                                                                        <!-- <img src="/b1-1.png"
																					alt="drive02"> -->
                                                                    </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title text-left">
                                                                    <h2 class="title">Plus qu’une billetterie en ligne</h2>
                                                                    <p>Avec CIBLE, trouvez des sponsors ou des investisseurs pour vos événements sans vous déplacer.
                                                                    </p>
                                                                </div>
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p>Recruter vos prestataires (organisateurs, restaurateurs, sonorisateurs, décorateurs…) et
                                                                            choisissez le lieu idéal pour votre événement en moins de 1h depuis votre téléphone.
                                                                            Invitez vos proches à vos anniversaires, mariages… Puis soyez informés
                                                                            et participez à tous les événements gratuits.</p>

                                                                    </div>
                                                                </div>
                                                                <div class="button-position text-left">
                                                                    <a title="Modal Soyez informé au lancement de cible" class="button " data-toggle="modal" data-target="#exampleModalCenterHeader" href="#screenshots">Soyez informé au lancement </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title text-left">
                                                                    <h2 class="title">Pourquoi opter pour CIBLE ?</h2>
                                                                    <p>La seule raison de ne pas télécharger l’application CIBLE,
                                                                        c’est de trouver une application plus complète,
                                                                        moins chère et mieux conçue. Mais hélas… <br>
                                                                        <b>Pourquoi alors CIBLE?</b>
                                                                    </p>
                                                                </div>
                                                                <ul class="iq-list">
                                                                    <li> <i aria-hidden="true" class="ion ion-android-done-all"></i> <span>La possibilité d’acheter vos tickets sans dépenser votre argent</span></li>
                                                                    <li> <i aria-hidden="true" class="ion ion-android-done-all"></i> <span>Des cadeaux (gadgets) personnalisés à chaque événement
                                                                        </span></li>
                                                                    <li> <i aria-hidden="true" class="ion ion-android-done-all"></i> <span> Minimisez vos charges organisationnelles et gagnez plus</span></li>
                                                                    <li> <i aria-hidden="true" class="ion ion-android-done-all"></i> <span>Bénéficiez des enquêtes de satisfaction</span></li>
                                                                    <li> <i aria-hidden="true" class="ion ion-android-done-all"></i> <span>Gagnez du temps et minimisez vos déplacements</span></li>
                                                                    <li> <i aria-hidden="true" class="ion ion-android-done-all"></i> <span>Un système de vérification de tickets simple et gratuit</span></li>
                                                                    <li> <i aria-hidden="true" class="ion ion-android-done-all"></i> <span>Vivez vos évènements en présentiel et en ligne…</span></li>
                                                                    <li> <i aria-hidden="true" class="ion ion-android-done-all"></i> <span>Recrutez les acteurs de l’évènementiel en quelques minutes</span></li>
                                                                </ul>
                                                                <div class="button-position text-left mt-4">
                                                                    <a title="Modal Soyez informé au lancement de cible" class="button " data-toggle="modal" data-target="#exampleModalCenterHeader" href="#screenshots">Soyez informé au lancement </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="no-margin wpb_column vc_column_container vc_col-sm-6">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                            <img width="543" height="680" src="{{ asset('images/application_achat_tickets.png')}}" class="vc_single_image-img attachment-full" alt="Acheter les tickets d’événements en ligne" loading="lazy" srcset="{{ asset('images/application_achat_tickets.png')}} 543w, {{ asset('images/application_achat_tickets-240x300.png')}} 240w" sizes="100vw" />
                                                                        </div>
                                                                    </figure>
                                                                </div>
                                                                <div class="layer_wrap iq-objects-style-3 " id="object_443663318"><span class="iq-objects-01" data-bottom="transform:translatey(-200px)" data-top="transform:translatex(-0);">

                                                                    </span><span class="iq-objects-02" data-bottom="transform:translatey(200px)" data-top="transform:translatex(-0);">

                                                                    </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="{{ asset('images/cible_application_evennementiel.jpg')}}" class="vc_row wpb_row vc_row-fluid iq-video-live vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title title-white text-center" style="color:#fff">
                                                                    <h2 class="title">Découvrez bientôt CIBLE en vidéo</h2>
                                                                    <p>
                                                                        Un design soigné, des Fonctionnalités complètes et des
                                                                        processus optimisés pour <br> vous offrir la meilleure expérience utilisateur.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-sm-offset-2">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-bg about-img popup-gallery play-video">
                                                                    <img loading="lazy" class="img-fluid center-block img-fluid center-block " style="border-radius:10px" src="{{ asset('images/Présentation_application_événementielle.jpg')}}" alt="publier vos événements en ligne et gagner en visibilité pour chaque événement">
                                                                    <span class="iq-video popup-youtube text-light"><i class="ion-ios-play-outline"></i></span>
                                                                    <div class="iq-waves">
                                                                        <div class="waves wave-1"></div>
                                                                        <div class="waves wave-2"></div>
                                                                        <div class="waves wave-3"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="iq-background-overlay" id="overlay_1491111130">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div id="features" class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title text-center">
                                                                    <h2 class="title">Des fonctionnalités bien pensées <br> et complètes pour l’événementiel </h2>
                                                                    <!-- <p>These features are essential for
																				developing an app that makes the grade
																				with users.</p> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-amazing-tab">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-lg-4 align-self-xl-center">
                                                                            <!-- Nav tabs -->
                                                                            <ul class="nav nav-tabs" role="tablist">
                                                                                <li class="nav-item wow fadeInLeft" data-wow-duration="1s">
                                                                                    <a class="active round-right nav-link" href="#tab11" title="Informez des millions d’utilisateurs de vos évènements en 02 clics" aria-controls="tab11" role="tab" data-toggle="tab" aria-selected="true">
                                                                                        <div class="iq-fancy-box-01 text-right">
                                                                                            <i aria-hidden="true" class="ion ion-ios-checkmark-outline"></i>
                                                                                            <h5>Créer et publier</h5>
                                                                                            <div class="fancy-content-01">
                                                                                                <p>Informez des millions d’utilisateurs de vos évènements en 02 clics </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item wow fadeInLeft" data-wow-duration="1s">
                                                                                    <a class=" round-right nav-link" href="#tab13" title="Suivez en temps réel vos ventes depuis votre téléphone" aria-controls="tab13" role="tab" data-toggle="tab" aria-selected="false">
                                                                                        <div class="iq-fancy-box-01 text-right">
                                                                                            <i aria-hidden="true" class="ion ion-ios-color-wand-outline"></i>
                                                                                            <h5>Vendre des tickets</h5>
                                                                                            <div class="fancy-content-01">
                                                                                                <p>Suivez en temps réel vos ventes depuis votre téléphone</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item wow fadeInLeft" data-wow-duration="1s">
                                                                                    <a class=" round-right nav-link" href="#tab15" title="Contrôlez les tickets et l’accès au lieu avec votre smartphone" aria-controls="tab15" role="tab" data-toggle="tab" aria-selected="false">
                                                                                        <div class="iq-fancy-box-01 text-right">
                                                                                            <i aria-hidden="true" class="ion ion-ios-copy-outline"></i>
                                                                                            <h5>Scanner des tickets
                                                                                            </h5>
                                                                                            <div class="fancy-content-01">
                                                                                                <p>Contrôlez les tickets et l’accès au lieu avec votre smartphone </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-4 text-center d-none d-md-none d-lg-block d-xl-block align-self-lg-center">
                                                                            <!-- Tab panes -->
                                                                            <div class="tab-content" id="myTabContent">


                                                                                <div class="tab-pane fade show active" id="tab11"><img src="{{ asset('images/application_pour_publier_vos_événements.png')}}" class="img-fluid center-block img-fluid center-block " loading="lazy" alt="Concerts-formations-spectables-foire-séminaire-conférence-cinéma-sport-concourt"></div>


                                                                                <div class="tab-pane fade show " id="tab22"><img src="{{ asset('images/facture_ticket_événement.png')}}" class="img-fluid center-block img-fluid center-block " loading="lazy" alt="Obtenez une facture à chaque achat de ticket pour tout événement"></div>


                                                                                <div class="tab-pane fade show " id="tab13"><img src="{{ asset('images/ticket_événementiel_CIBLE.png')}}" class="img-fluid center-block img-fluid center-block " loading="lazy" alt="Vos tickets pour tout type d’événement avec un code QR"></div>


                                                                                <div class="tab-pane fade show " id="tab24"><img src="{{ asset('images/application_mobile_pour_vos_événements.png')}}" class="img-fluid center-block img-fluid center-block " loading="lazy" alt="utilisez l’application de vente et achat de tickets en ligne et gagnez l’argent"></div>


                                                                                <div class="tab-pane fade show " id="tab15"><img src="{{ asset('images/scanner_ticket_événementiel_CIBLE.png')}}" class="img-fluid center-block img-fluid center-block " loading="lazy" alt="Scanner gratuitement les tickets d’événements avec CIBLE"></div>


                                                                                <div class="tab-pane fade show " id="tab26"><img src="{{ asset('images/enquête_de_satisfaction_événementiel.png')}}" class="img-fluid center-block img-fluid center-block " loading="lazy" alt="Publiez vos événements, vendez vos tickets et obtenez les résultats de sondages de satisfaction"></div>


                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-lg-4 align-self-xl-center">
                                                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                                                <li class=" nav-item wow fadeInRight" data-wow-duration="1s">
                                                                                    <a href="#tab22" aria-controls="tab22" title="Acheter des tickets" role="tab" data-toggle="tab">
                                                                                        <div class="iq-fancy-box-01">
                                                                                            <i aria-hidden="true" class="ion ion-ios-photos-outline"></i>
                                                                                            <h5>Acheter des tickets
                                                                                            </h5>
                                                                                            <div class="fancy-content-01">
                                                                                                <p>Ne vous déplacez plus. Tous les tickets sont dans l’application</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class=" nav-item wow fadeInRight" data-wow-duration="1s">
                                                                                    <a href="#tab24" aria-controls="tab24" title="Partagez avec vos contacts l’application et gagnez de l’argent" role="tab" data-toggle="tab">
                                                                                        <div class="iq-fancy-box-01">
                                                                                            <i aria-hidden="true" class="ion ion-ios-heart-outline"></i>
                                                                                            <h5>Recommander</h5>
                                                                                            <div class="fancy-content-01">
                                                                                                <p>Partagez avec vos contacts l’application et gagnez de l’argent</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class=" nav-item wow fadeInRight" data-wow-duration="1s">
                                                                                    <a href="#tab26" aria-controls="tab26" role="tab" data-toggle="tab" title="Obtenez l’avis de vos participants à chaque événement">
                                                                                        <div class="iq-fancy-box-01">
                                                                                            <i aria-hidden="true" class="ion ion-ios-plus-outline"></i>
                                                                                            <h5>Enquête de satisfaction
                                                                                            </h5>
                                                                                            <div class="fancy-content-01">
                                                                                                <p>Obtenez l’avis de vos participants à chaque événement</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="screenshots" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid iq-app-screenshots vc_custom_1548668011635 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title text-center">
                                                                    <h2 class="title">Parce que vous êtes un BOSS, <br> utilisez CIBLE</h2>
                                                                    <p>
                                                                        Si vous pouvez croire en vous, vous pouvez croire en CIBLE. <br>
                                                                        Essayez, adoptez et recommandez… C’est vous qui gagnez après tout…
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="home-screen-slide">
                                                                    <div class="owl-carousel popup-gallery" data-dots="false" data-nav="true" data-items="4" data-items-laptop="3" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                                                                        <div class="item"><a title="Obtenez une facture à chaque achat de ticket pour tout événement" href="{{ asset('images/facture_ticket_événement.png')}}" class="popup-img"><img class="img-fluid" src="{{ asset('images/facture_ticket_événement.png')}}" loading="lazy" alt="Obtenez une facture à chaque achat de ticket pour tout événement"></a></div>
                                                                        <div class="item"><a title="Publiez vos événements, vendez vos tickets et obtenez les résultats de sondages de satisfaction" href="{{ asset('images/enquête_de_satisfaction_événementiel.png')}}" class="popup-img"><img class="img-fluid" src="{{ asset('images/enquête_de_satisfaction_événementiel.png')}}" loading="lazy" alt="Publiez vos événements, vendez vos tickets et obtenez les résultats de sondages de satisfaction"></a></div>
                                                                        <div class="item"><a title="Publiez vos événements, vendez vos tickets et obtenez les résultats de sondages de satisfaction" href="{{ asset('images/application_mobile_pour_vos_événements.png')}}" class="popup-img"><img class="img-fluid" src="{{ asset('images/application_mobile_pour_vos_événements.png')}}" loading="lazy" alt="utilisez l’application de vente et achat de tickets en ligne et gagnez l’argent"></a></div>
                                                                        <div class="item"><a title="utilisez l’application de vente et achat de tickets en ligne et gagnez l’argent" href="{{ asset('images/scanner_ticket_événementiel_CIBLE.png')}}" class="popup-img"><img class="img-fluid" src="{{ asset('images/scanner_ticket_événementiel_CIBLE.png')}}" loading="lazy" alt="Scanner gratuitement les tickets d’événements avec CIBLE"></a></div>
                                                                        <div class="item"><a title="Vos tickets pour tout type d’événement avec un code QR" href="{{ asset('images/ticket_événementiel_CIBLE.png')}}" class="popup-img"><img class="img-fluid" src="{{ asset('images/ticket_événementiel_CIBLE.png')}}" loading="lazy" alt="Vos tickets pour tout type d’événement avec un code QR"></a></div>
                                                                        <div class="item"><a title="Concerts-formations-spectables-foire-séminaire-conférence-cinéma-sport-concourt" href="{{ asset('images/application_pour_publier_vos_événements.png')}}" class="popup-img"><img class="img-fluid" src="{{ asset('images/application_pour_publier_vos_événements.png')}}" loading="lazy" alt="Concerts-formations-spectables-foire-séminaire-conférence-cinéma-sport-concourt"></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title text-center">
                                                                    <h2 class="title">Comment ça marche ? </h2>
                                                                    <p>Simple, rapide et sécurisé, CIBLE allie confort et convivialité.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav nav-tabs row justify-content-center mb-5" id="myTab" role="tablist">
                                                    <li class="nav-item active" id="cp-par" onclick="viewParticulier(this)" role="presentation">
                                                        <button class="nav-link active">Compte particulier</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation" id="cp-entre" onclick="viewParticulier(this)">
                                                        <button class="nav-link">Compte entreprise</button>
                                                    </li>

                                                </ul>


                                                <div class="vc_row wpb_row vc_inner vc_row-fluid" id="cp-par-view">
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box-02 text-center">
                                                                    <div class="iq-icon">
                                                                        <i aria-hidden="true" class="ion ion-ios-cloud-download-outline"></i>
                                                                    </div>
                                                                    <div class="fancy-content">
                                                                        <h6>Allez sur Play Store ou App Store puis téléchargez CIBLE</h6>
                                                                        <!-- <p></p> -->
                                                                        <span class="iq-big-title">01</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box-02 text-center">
                                                                    <div class="iq-icon">
                                                                        <i aria-hidden="true" class="ion ion-ios-albums-outline"></i>
                                                                    </div>
                                                                    <div class="fancy-content">
                                                                        <h6>Consultez gratuitement les évènements autour de vous</h6>
                                                                        <!-- <p>A color scheme is the choice of
																					colors used in design for a range of
																					media.</p>  -->
                                                                        <span class="iq-big-title">02</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="iq-rmt-30 wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box-02 text-center">
                                                                    <div class="iq-icon">
                                                                        <i aria-hidden="true" class="ion ion-ios-person-outline"></i>
                                                                    </div>
                                                                    <div class="fancy-content">
                                                                        <h6>Créez gratuitement un compte pour acheter vos tickets</h6>
                                                                        <!-- <p>The quality of the selection is very
																					high as it takes into the account.
																				</p>  -->
                                                                        <span class="iq-big-title">03</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="iq-rmt-30 wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box-02 text-center">
                                                                    <div class="iq-icon">
                                                                        <i aria-hidden="true" class="ion ion-ios-heart-outline"></i>
                                                                    </div>
                                                                    <div class="fancy-content">
                                                                        <h6> Gagnez de l'argent en recommandant l'application</h6>
                                                                        <!-- <p>The code is clean if it can be
																					understood easily. With
																					maintainability.</p> -->
                                                                        <span class="iq-big-title">04</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- =========================================================================================================================================================================== -->


                                                <div class="vc_row wpb_row vc_inner vc_row-fluid" id="cp-entre-view" style="display: none;">
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box-02 text-center">
                                                                    <div class="iq-icon">
                                                                        <i aria-hidden="true" class="ion ion-ios-cloud-download-outline"></i>
                                                                    </div>
                                                                    <div class="fancy-content">
                                                                        <h6>Allez sur Play Store ou App Store puis téléchargez CIBLE PRO</h6>
                                                                        <!-- <p>An increase in pixel density means
																					that drawing is more precise.</p> -->
                                                                        <span class="iq-big-title">01</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box-02 text-center">
                                                                    <div class="iq-icon">
                                                                        <i aria-hidden="true" class="ion ion-ios-information-outline"></i>
                                                                    </div>
                                                                    <div class="fancy-content">
                                                                        <h6>Consultez gratuitement certaines informations</h6>
                                                                        <!-- <p>A color scheme is the choice of
																					colors used in design for a range of
																					media.</p>  -->
                                                                        <span class="iq-big-title">02</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="iq-rmt-30 wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box-02 text-center">
                                                                    <div class="iq-icon">
                                                                        <i aria-hidden="true" class="ion ion-ios-person-outline"></i>
                                                                    </div>
                                                                    <div class="fancy-content">
                                                                        <h6>Créez gratuitement un compte pour tirer profit de CIBLE</h6>
                                                                        <!-- <p>The quality of the selection is very
																					high as it takes into the account.
																				</p>  -->
                                                                        <span class="iq-big-title">03</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="iq-rmt-30 wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-fancy-box-02 text-center">
                                                                    <div class="iq-icon">
                                                                        <i aria-hidden="true" class="ion ion-ios-pricetag-outline"></i>
                                                                    </div>
                                                                    <div class="fancy-content">
                                                                        <h6>Gagnez de l’argent et du temps</h6>
                                                                        <!-- <p>The code is clean if it can be
																					understood easily. With
																					maintainability.</p> -->
                                                                        <span class="iq-big-title">04</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid iq-loved-customers vc_custom_1548668656196 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title text-center">
                                                                    <h2 class="title">
                                                                        <!-- Nos futurs clients en mode témoignage -->
                                                                        Dites-nous ce qui vous <br> ferait essayer CIBLE
                                                                    </h2>
                                                                    <p>
                                                                        Il n'y a rien de plus gratifiant pour nous qu'un client satisfait.
                                                                        <br>
                                                                        Faites-vous confiance ; faites votre propre expérience de CIBLE.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="col-sm-12">

                                                                    <div class="owl-carousel" data-dots="true" data-nav="true" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                                                                        @foreach($essayers as $essayer)
                                                                        <div class="item">
                                                                            <div class="iq-client white-bg">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="client-img my-auto">
                                                                                        <img alt="Avatar" loading="lazy" class="rounded-circle mt-2" style="width: 4rem!important;height:4rem!important;white-space : nowrap" src="{{ asset('images/cible-app-avatar.png')}}">
                                                                                    </div>
                                                                                    <div class="client-name my-auto ml-0">
                                                                                        <h6 style="white-space : nowrap">
                                                                                            {{ substr($essayer->nom, 0, 20)}}
                                                                                            @if(strlen($essayer->nom) > 20)
                                                                                            ...
                                                                                            @endif
                                                                                        </h6>
                                                                                        <span class="sub-title" style="white-space : nowrap">
                                                                                            <!-- {{$essayer->profession}} -->
                                                                                            {{ substr($essayer->profession, 0, 25)}}
                                                                                            @if(strlen($essayer->profession) > 25)
                                                                                            ...
                                                                                            @endif
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="client-info">

                                                                                    <p style="height: 96px;">
                                                                                        {{ substr($essayer->raison, 0, 100)}}
                                                                                        @if(strlen($essayer->raison) > 100)
                                                                                        ...
                                                                                        @endif
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container d-flex justify-content-center pt-4 pt-lg-5">
                                                    <a class="button text-light" href="#" title="Modal J’essayerai CIBLE" style="cursor:pointer" data-toggle="modal" data-target="#exampleModalCenter1">
                                                        J’essayerai CIBLE
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div id="team" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid iq-team-bg">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title text-center">
                                                                    <h2 class="title">Une équipe formidable à votre service</h2>
                                                                    <p>C'est pour votre satisfaction que nous nous réveillons,
                                                                        et c'est grâce à elle que nous dormons paisiblement.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="owl-carousel pr-0" data-dots="false" data-nav="true" data-autoplay="true" data-loop="true" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                                                                            <div class="item text-center">
                                                                                <div class="team" style="border-right:1px solid #e3e3e3;">
                                                                                    <div class="image mx-auto">
                                                                                        <img loading="lazy" src="{{ asset('images/equipe-cible-la-diva.png')}}" class="img-fluid center-block img-fluid center-block  mx-auto" style="aspect-ratio:1;width:14rem;border-radius:50%" alt="Chargé de la communication digitale">
                                                                                        <h5 class="mt-3">La Diva</h5>
                                                                                        <p class="team-post text-secondary">Chargé de la communication digitale </p>
                                                                                        <p class="team-post text-secondary mt-0">
                                                                                        <p class="m-0" style="font-weight: 400;line-height:1.75rem">
                                                                                            <span class="m-0 mr-2 mt-n3 text-dark" style="font-size:1.75rem;"> &#128630;</span>
                                                                                            Je serai votre meilleure amie chez CIBLE. <br> Je vous raconterai tout….
                                                                                        </p>

                                                                                        </p>
                                                                                        {{-- <p class="mt-3">--}}
                                                                                        {{-- <a href="http://instagram.com" class="h4" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-instagram  text-dark"></i>--}}
                                                                                        {{-- </a>--}}
                                                                                        {{-- <a href="http://" class="h4 ml-3" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-linkedin  text-dark"></i>--}}
                                                                                        {{-- </a>--}}

                                                                                        {{-- </p>--}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item text-center">
                                                                                <div class="team" style="border-right:1px solid #e3e3e3;">
                                                                                    <div class="image mx-auto">
                                                                                        <img loading="lazy" src="{{ asset('images/equipe-cible-le-geek.png')}}" class="img-fluid center-block img-fluid center-block bg-secondary  mx-auto" style="aspect-ratio:1;width:14rem;border-radius:50%" alt="Développeur Front-End">
                                                                                        <h5 class="mt-3">Le Geek</h5>
                                                                                        <p class="team-post text-secondary">Développeur Front-End</p>
                                                                                        <p class="team-post text-secondary mt-0">
                                                                                        <p class="m-0" style="font-weight: 400;line-height:1.75rem">
                                                                                            <span class="m-0 mr-2 mt-n3 text-dark" style="font-size:1.75rem;"> &#128630;</span>
                                                                                            Vous méritez le beau ;<br>
                                                                                            je vous offrirai toujours le plus beau.
                                                                                        </p>

                                                                                        </p>
                                                                                        {{-- <p class="mt-3">--}}
                                                                                        {{-- <a href="http://instagram.com" class="h4" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-instagram  text-dark"></i>--}}
                                                                                        {{-- </a>--}}
                                                                                        {{-- <a href="http://" class="h4 ml-3" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-linkedin  text-dark"></i>--}}
                                                                                        {{-- </a>--}}

                                                                                        {{-- </p>--}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item text-center">
                                                                                <div class="team" style="border-right:1px solid #e3e3e3;">
                                                                                    <div class="image mx-auto">
                                                                                        <img loading="lazy" src="{{ asset('images/equipe-cible-le-saint.png')}}" class="img-fluid center-block img-fluid center-block  mx-auto" style="aspect-ratio:1;width:14rem;border-radius:50%" alt="Développeur Back-End">
                                                                                        <h5 class="mt-3">Le Saint </h5>
                                                                                        <p class="team-post text-secondary"> Développeur Back-End </p>
                                                                                        <p class="team-post text-secondary mt-0">
                                                                                        <p class="m-0" style="font-weight: 400;line-height:1.75rem">
                                                                                            <span class="m-0 mr-2 mt-n3 text-dark" style="font-size:1.75rem;"> &#128630;</span>
                                                                                            Je ne trahirai jamais le design ; <br> je vous garantis zéro bug.
                                                                                        </p>

                                                                                        </p>
                                                                                        {{-- <p class="mt-3">--}}
                                                                                        {{-- <a href="http://instagram.com" class="h4" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-instagram  text-dark"></i>--}}
                                                                                        {{-- </a>--}}
                                                                                        {{-- <a href="http://" class="h4 ml-3" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-linkedin  text-dark"></i>--}}
                                                                                        {{-- </a>--}}

                                                                                        {{-- </p>--}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item text-center">
                                                                                <div class="team" style="border-right:1px solid #e3e3e3;">
                                                                                    <div class="image mx-auto">
                                                                                        <img loading="lazy" src="{{ asset('images/equipe-cible-zeus.png')}}" class="img-fluid center-block img-fluid center-block  mx-auto" style="aspect-ratio:1;width:14rem;border-radius:50%" alt="Chargé de la communication">
                                                                                        <h5 class="mt-3">Zeus</h5>
                                                                                        <p class="team-post text-secondary">Chargé de la communication</p>
                                                                                        <p class="team-post text-secondary mt-0">

                                                                                        <p class="m-0" style="font-weight: 400;line-height:1.75rem">
                                                                                            <span class="m-0 mr-2 mt-n3 text-dark" style="font-size:1.75rem;"> &#128630;</span>
                                                                                            Mon Job ? Vous rendre fiers <br> d’appartenir à la famille CIBLE
                                                                                        </p>
                                                                                        <!-- <span class="font-bold text-dark h2">
                                                                                                "
                                                                                            </span> -->
                                                                                        </p>
                                                                                        {{-- <p class="mt-3">--}}
                                                                                        {{-- <a href="http://instagram.com" class="h4" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-instagram  text-dark"></i>--}}
                                                                                        {{-- </a>--}}
                                                                                        {{-- <a href="http://" class="h4 ml-3" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-linkedin  text-dark"></i>--}}
                                                                                        {{-- </a>--}}

                                                                                        {{-- </p>--}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item text-center">
                                                                                <div class="team" style="border-right:1px solid #e3e3e3;">
                                                                                    <div class="image mx-auto">
                                                                                        <img loading="lazy" src="{{ asset('images/equipe-cible-el-professor.png')}}" class="img-fluid center-block img-fluid center-block  mx-auto" style="aspect-ratio:1;width:14rem;border-radius:50%" alt="Chargé de la Relation Client">
                                                                                        <h5 class="mt-3">El Professor </h5>
                                                                                        <p class="team-post text-secondary">Chargé de la Relation Client </p>
                                                                                        <p class="team-post text-secondary mt-0">

                                                                                        <p class="m-0" style="font-weight: 400;line-height:1.75rem">
                                                                                            <span class="m-0 mr-1 mt-n3 text-dark" style="font-size:1.75rem;"> &#128630;</span>
                                                                                            Pour votre satisfaction, chaque minute <br> compte ; chaque effort est nécessaire.
                                                                                        </p>
                                                                                        </p>
                                                                                        {{-- <p class="mt-3">--}}
                                                                                        {{-- <a href="http://instagram.com" class="h4" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-instagram  text-dark"></i>--}}
                                                                                        {{-- </a>--}}
                                                                                        {{-- <a href="http://" class="h4 ml-3" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-linkedin  text-dark"></i>--}}
                                                                                        {{-- </a>--}}

                                                                                        {{-- </p>--}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item text-center">
                                                                                <div class="team" style="border-right:1px solid #e3e3e3;">
                                                                                    <div class="image mx-auto">
                                                                                        <img loading="lazy" src="{{ asset('images/equipe-cible-aigle.png')}}" class="img-fluid center-block img-fluid center-block  mx-auto" style="aspect-ratio:1;width:14rem;border-radius:50%" alt="Product Owner, Chargé de la stratégie">
                                                                                        <h5 class="mt-3">L’aigle </h5>
                                                                                        <p class="team-post text-secondary">Product Owner, Chargé de la stratégie </p>
                                                                                        <p class="team-post text-secondary mt-0">
                                                                                        <p class="m-0" style="font-weight: 400;line-height:1.75rem">
                                                                                            <span class="m-0 mr-1 mt-n3 text-dark" style="font-size:1.75rem;"> &#128630;</span>
                                                                                            Vous surprendre ; toujours vous surprendre <br> avec de nouvelles fonctionnalités
                                                                                        </p>

                                                                                        </p>
                                                                                        {{-- <p class="mt-3">--}}
                                                                                        {{-- <a href="http://instagram.com" class="h4" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-instagram  text-dark"></i>--}}
                                                                                        {{-- </a>--}}
                                                                                        {{-- <a href="http://" class="h4 ml-3" target="_blank" rel="noopener noreferrer">--}}
                                                                                        {{-- <i class="fa fa-linkedin  text-dark"></i>--}}
                                                                                        {{-- </a>--}}

                                                                                        {{-- </p>--}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="{{ asset('images/Présentation_application_événementielle.jpg')}}" class="vc_row wpb_row vc_row-fluid vc_custom_1549711819014 vc_row-has-fill vc_row-o-content-middle vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="text-center" style='color:#ffffff;'>
                                                                    <div class="counter"> <i class="  ion ion-ios-folder-outline " aria-hidden="true"></i>
                                                                        <span class="timer" data-to="0" data-speed="10000">0</span>
                                                                        <label style='color:#ffffff;'>EVENEMENTS PUBLIES</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="text-center" style='color:#ffffff;'>
                                                                    <div class="counter"> <i class="  ion ion-ios-paper-outline " aria-hidden="true"></i>
                                                                        <span class="timer" data-to="0" data-speed="10000">0</span>
                                                                        <label style='color:#ffffff;'>TICKETS VENDUS</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="text-center" style='color:#ffffff;'>
                                                                    <div class="counter"> <i class="  ion ion-ios-person-outline " aria-hidden="true"></i>
                                                                        <span class="timer" data-to="0" data-speed="10000">0</span>
                                                                        <label style='color:#ffffff;'>UTILISATEURS</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="text-center" style='color:#ffffff;'>
                                                                    <div class="counter"> <i class="  ion ion-ios-star " aria-hidden="true"></i>
                                                                        <span class="timer" data-to="0" data-speed="10000">0</span>
                                                                        <label style='color:#ffffff;'>RECOMMANDATIONS</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="iq-background-overlay" id="overlay_1786363678">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div id="faq" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid iq-faq-block">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title text-center">
                                                                    <h2 class="title">Questions les plus posées
                                                                    </h2>
                                                                    <p>Toutes vos questions comptent pour nous et nous répondrons toujours avec plaisir.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                            <img  width="553" height="600" src="{{ asset('images/faq-1-1.png')}}" class="vc_single_image-img attachment-full" alt="Foire aux question cible" loading="lazy" srcset="{{ asset('images/faq-1-1.png')}} 553w, {{ asset('images/faq-1-1-277x300.png')}} 277w" sizes="100vw" />
                                                                        </div>
                                                                    </figure>
                                                                </div>
                                                                <div class="layer_wrap iq-objects-style-3 " id="object_51857065"><span class="iq-objects-01" data-bottom="transform:translatey(-200px)" data-top="transform:translatex(-0);">
                                                                        <!-- <img src="/b3-1.png"
																					alt="drive02"> -->
                                                                    </span><span class="iq-objects-02" data-bottom="transform:translatey(200px)" data-top="transform:translatex(-0);">
                                                                        <!-- <img src="/b1-1.png"
																					alt="drive02"> -->
                                                                    </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="iq-accordion">
                                                                    <div class="iq-ad-block iq-ad-active"> <span class="iq-ad-title">CIBLE est-elle une application web ou mobile ? </span>
                                                                        <div class="iq-ad-details show" style=display:block>
                                                                            <div class="row">
                                                                                <!-- <div class="col-sm-3">
																							<img alt="#"
																								class="img-fluid"
																								src="{{ asset('images/faq-1-150x150.jpg')}}" />

																						</div> -->
                                                                                <div class="col-sm-12">CIBLE est une application mobile avec une version web qui
                                                                                    sera développée plus tard afin de donner plus de flexibilité aux clients.
                                                                                    Elle est téléchargeable sur Play store pour les utilisateurs d’Android et
                                                                                    App store pour les utilisateurs d’Iphone.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="iq-ad-block "> <span class="iq-ad-title">CIBLE est-elle gratuite ?</span>
                                                                        <div class="iq-ad-details ">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">Oui. Téléchargez et inscrivez-vous gratuitement et profitez
                                                                                    du meilleur de l’événementiel. Nous percevons néanmoins une commission sur
                                                                                    chaque ticket acheté afin de pouvoir continuer à développer pour le bonheur
                                                                                    de nos clients de nouvelles fonctionnalités. </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="iq-ad-block "> <span class="iq-ad-title">Comment avoir un compte CIBLE ? </span>
                                                                        <div class="iq-ad-details ">
                                                                            <div class="row">
                                                                                <!-- <div class="col-sm-3">
																							<img alt="#"
																								class="img-fluid"
																								src="{{ asset('images/faq-1-150x150.jpg')}}" />

																						</div> -->
                                                                                <div class="col-sm-12">
                                                                                    Que vous soyez particulier ou entreprise, téléchargez CIBLE sur Play store ou App
                                                                                    Store, inscrivez-vous en renseignant les informations demandées à chaque étape
                                                                                    puis valider à la fin. Si vous voulez faire partie des premiers utilisateurs de
                                                                                    CIBLE,<a href="#" title="Modal m'informer au lancement de CIBLE" data-toggle="modal" data-target="#exampleModalCenterHeader" href="#screenshots">enregistrez-vous ici.</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="iq-ad-block "> <span class="iq-ad-title">Dans quels pays peut-on utiliser CIBLE ? </span>
                                                                        <div class="iq-ad-details ">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">CIBLE sera disponible en Cote d’Ivoire, au Togo, au Sénégal,
                                                                                    au Cameroun, au Bénin, en RDC et au Burkina au lancement.
                                                                                    Cependant d’autres pays suivront selon la demande. Et avec votre soutien,
                                                                                    CIBLE grandira et touchera d’autres pays d’Afrique et du monde. </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="iq-ad-block "> <span class="iq-ad-title">Peut-on gagner de l’argent en tant que particulier ? </span>
                                                                        <div class="iq-ad-details ">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    Oui. Si les organisateurs d’événements vendent les tickets
                                                                                    pour gagner de l’argent, les particuliers peuvent décrocher des jobs dans
                                                                                    l’événementiel ou recommander l’application pour gagner de l’argent.
                                                                                    Mais l’argent gagné par recommandation est utilisable uniquement pour acheter
                                                                                    sur l’application que ce soient des tickets ou des gadgets. </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a class="button" data-toggle="modal" data-target="#FAQModalCenterHeader" title="Posez une question à l'équipe cible" href="#">Posez votre question </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="{{ asset('images/cible_application_evennementiel.jpg')}}" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title title-white text-center" style="color:#fff">
                                                                    <h2 class="title">Téléchargement gratuit </h2>
                                                                    <p>Tirez profit de chaque événement autour de vous. <br>
                                                                        Téléchargez au lancement l'application CIBLE selon votre profil.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="text-center">
                                                                    <a data-target="#exampleModalCenterHeader" title=" M’informer au lancement de CIBLE" data-toggle="modal" class="button  button-icon " href="#">
                                                                        M’informer au lancement </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="iq-background-overlay" id="overlay_2022314660">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div id="blog" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid iq-faq-block">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title text-center">
                                                                    <h2 class="title">Nos articles récents</h2>
                                                                    <p>Chaque semaine, nous partageons avec vous trois articles
                                                                        autour de l'événementiel.
                                                                        Des trucs & astuces aux bons plans, rien n'est laissé de côté.
                                                                        N’hésitez pas à vous abonner à la newsletter pour ne rien rater.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="appino-recentblog v1">
                                                                    <div class="owl-carousel" data-dots="false" data-nav="false" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                                                                        @foreach($articleRecentFive as $articleRecentFive)
                                                                        <div class="item">
                                                                            <div class="iq-blog-box">
                                                                                <div class="iq-blog-image clearfix mb-3" style="position : relative;height:238px;overflow:hidden">
                                                                                    <img src="{{ asset($articleRecentFive->img)}}" loading="lazy" style="position : absolute;filter: blur(3px);top:0;left:0;transform:scale(1.2)" class="center-block h-100" alt="{{$articleRecentFive->libelle}}">
                                                                                    <img src="{{ asset($articleRecentFive->img)}}" loading="lazy" class="center-block h-100 mx-auto" style="width: auto;" alt="{{$articleRecentFive->libelle}}">
                                                                                </div>
                                                                                <div class="iq-blog-detail">
                                                                                    <div class="iq-blog-meta">
                                                                                        <ul class="list-inline">

                                                                                            <li class="list-inline-item">
                                                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                                <span class="screen-reader-text">Posted
                                                                                                    on</span> <span><time class="entry-date published updated" datetime="{{$articleRecentFive->created_at}}">
                                                                                                        {{$articleRecentFive->created_at}}
                                                                                                    </time></span>
                                                                                            </li>
                                                                                            <li class="list-inline-item">
                                                                                                <span><i class="fa fa-comment-o" aria-hidden="true"></i>
                                                                                                    {{ $articleRecentFive->getCommentairesValidCount() }}</span>
                                                                                            </li>
                                                                                            <li class="list-inline-item">
                                                                                                <span><i class="fa fa-eye" aria-hidden="true"></i>
                                                                                                    {{$articleRecentFive->nbvue}} </span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="blog-title">
                                                                                        <a href="/blog/{{$articleRecentFive->urlTitre}}" title="{{$articleRecentFive->libelle}}">
                                                                                            <h6>
                                                                                                <!-- {{$articleRecentFive->libelle}} -->
                                                                                                {{ substr($articleRecentFive->libelle, 0, 25)}}
                                                                                                @if(strlen($articleRecentFive->libelle) >= 25)
                                                                                                ...
                                                                                                @endif
                                                                                            </h6>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="blog-content">
                                                                                        <p style="height: 65px;">
                                                                                            <!-- {{$articleRecentFive->desc}}. -->
                                                                                            {{ substr($articleRecentFive->desc, 0, 70)}}
                                                                                            @if(strlen($articleRecentFive->desc) > 70)
                                                                                            ...
                                                                                            @endif
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="blog-button"><a title="{{$articleRecentFive->libelle}}" class="button" href="/blog/{{$articleRecentFive->urlTitre}}">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="layer_wrap iq-objects-style-2 " id="object_537255040"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid iq-our-clients vc_custom_1544504470454">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="owl-carousel" data-dots="false" data-nav="true" data-items="4" data-items-laptop="3" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                                                                        <div class="item">
                                                                            <img loading="lazy" class="item partenaire" src="{{ asset('images/cible-app-innov-is.jpg')}}" alt="client0">
                                                                        </div>
                                                                        <div class="item">
                                                                            <img loading="lazy" class="item partenaire" src="{{ asset('images/cible-app-procomdigit.png')}}" alt="client1">
                                                                        </div>
                                                                        <div class="item">
                                                                            <img loading="lazy" class="item partenaire" src="{{ asset('images/cible-app-asta.jpg')}}" alt="client2">
                                                                        </div>
                                                                        <div class="item">
                                                                            <img loading="lazy" class="item partenaire" src="{{ asset('images/cible-app-africa-visual-art.jpg')}}" alt="client3">
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div id="contact" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="{{ asset('images/Présentation_application_événementielle.jpg')}}" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading-title title-white text-center" style="color:#fff">
                                                                    <h2 class="title">Souscrire à notre Newsletter
                                                                    </h2>
                                                                    <p>Ne manquez pas d'être informé sur nos nouvelles fonctionnalités
                                                                        et de recevoir nos meilleurs articles autour de l'événementiel.
                                                                        Soyez dans l’action ; agissez aujourd’hui.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-lg-7">
                                                                        <div class="text-center ">
                                                                            <div class="widget_appino_widget">
                                                                                <form id="appino_subscription">
                                                                                    @csrf
                                                                                    <div class="email-form">
                                                                                        <div class="newsletter-email d-flex" style="position:relative">
                                                                                            <input placeholder="Entrez votre Adresse mail *" style="border-radius : 50px 0 0 50px" type="email" name="sub_email" class="news_text" id="email" required />
                                                                                            <div class="alax-loader" style="position:absolute;left : 485px;top:10%">
                                                                                                <img loading="lazy" alt="chargement" src="{{ asset('images/ajax-loader.gif')}}" style="display:none;" id="loader" class="loading" />
                                                                                            </div>
                                                                                            <input type="submit" class="sub_button bg-dark" style="margin-left:-15%;background:#343a40!important" value="Soumettre">

                                                                                        </div>
                                                                                        <div class="email-subscribe">
                                                                                            <span id="error_email" style="color:#fff!important"></span>

                                                                                        </div>
                                                                                        <div class="subscribe">
                                                                                            <input type="hidden" name="action" value="subscribe" />
                                                                                        </div>
                                                                                        <div class="loading">
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                                <div class="epic_results"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="newsletter-phone iq-mt-50 wow fadeInUp" data-wow-duration="1s">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="iq-background-overlay" id="overlay_873265226"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                            </div><!-- .sf-content -->

                        </div><!-- .container -->
                    </div><!-- .panel-content -->

                </article><!-- #post-## -->


            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- #content -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-0">
                <!-- <div class="modal-header" style="border: none;">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div> -->
                <div class="modal-body text-center py-0 px-0" style="overflow : hidden">
                    <div class="container-fluid p-0 m-0" style="position:relative">
                        <img src="{{ asset('images/clible_app.jpg')}}" class="container-fluid p-0 m-0" alt="" loading="lazy" srcset="{{ asset('images/clible_app.jpg')}}">
                        <div style="position:absolute;top:0;left:0;background: linear-gradient(to bottom, rgba(252, 119, 50, 0.5) 0%, rgba(236, 68, 86, 0.5) 100%);" class="w-100 h-100"></div>
                        <img src="{{ asset("images/logo.png")}}" loading="lazy" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:5rem" alt="cible-app-logo">
                        <button type="button" class="close" style="position:absolute;top:1.5rem;right:1rem;transform:translate(-50%,-50%);" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" style="color:#fff">&times;</span>
                                                        </button>
                    </div>
                    <div class="p-3">
                        <h3 class="modal-title mt-4 h5" id="exampleModalLongTitle" style="font-size: 1.5rem;">Soyez informé au lancement !</h5>
                            <p class="mb-0 pb-0">
                                Votre adresse email ne sera pas publiée.

                            </p>
                            <form id="inform" class="comment-form text-left">
                                @csrf
                                <div class="row my-4">
                                    <div class="col-4 mb-3 pr-0 mr-0">
                                        <select class="" required>
                                            @foreach ($countries as $country)
                                            <option value="{{$country->name}}" id="pays">{{$country->name}} - {{$country->code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-8 mb-3">
                                        <input id="numberI" placeholder="Numéro de téléphone" id="numero" type="number" value="" size="30" maxlength="100" aria-describedby="number-notes" required='required' />
                                    </div>
                                    <div class="col-12">
                                        <input id="emailI" placeholder="Email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes"  />
                                    </div>
                                    <div class="col-12 mt-4 d-flex justify-content-center">
                                        <span id="error_inform"></span>
                                        <input name="submit" type="submit" class="submit w-50 mx-auto" value="Envoyer" />
                                    </div>
                                </div>

                            </form>
                    </div>

                </div>
                <!-- <div class="modal-footer justify-content-center m-0 border-none" style="border: none;">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">D'accord</button>
                                                </div> -->
            </div>
        </div>
    </div>

    <!-- =========================================Header================================================================================= -->
    <div class="modal fade" id="exampleModalCenterHeader" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-0">
                <!-- <div class="modal-header" style="border: none;">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div> -->
                <div class="modal-body text-center py-0 px-0" style="overflow : hidden">
                    <div class="container-fluid p-0 m-0" style="position:relative">
                        <img src="{{ asset('images/clible_app.jpg')}}" class="container-fluid p-0 m-0" loading="lazy" alt="" srcset="{{ asset('images/clible_app.jpg')}}">
                        <div style="position:absolute;top:0;left:0;background: linear-gradient(to bottom, rgba(252, 119, 50, 0.5) 0%, rgba(236, 68, 86, 0.5) 100%);" class="w-100 h-100"></div>
                        <img src="{{ asset("images/logo.png")}}" loading="lazy" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:5rem" alt="cible-app-logo">
                        <button type="button" class="close" style="position:absolute;top:1.5rem;right:1rem;transform:translate(-50%,-50%);" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" style="color:#fff">&times;</span>
                                                        </button>
                    </div>
                    <div class="p-3">
                        <h3 class="modal-title mt-4 h5 fw-600" id="exampleModalLongTitle" style="font-size: 1.5rem;font-weight:900">Soyez informé au lancement !</h5>
                            <p class="mb-0 pb-0">
                                Votre adresse email ne sera pas publiée.

                            </p>
                            <form id="informHeader" class="comment-form text-left">
                                @csrf
                                <div class="row my-4">
                                    <div class="col-4 mb-3 pr-0 mr-0">
                                        <select class="" required >
                                            <option value="" disabled hidden selected>Choix du pays</option>
                                            @foreach ($countries as $country)
                                            <option value="{{$country->name}}" id="paysH">{{$country->name}} - {{$country->code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-8 mb-3">
                                        <input id="numberH" placeholder="Numéro de téléphone" type="number" value="" size="30" maxlength="100" aria-describedby="number-notes" required='required' />
                                    </div>
                                    <div class="col-12">
                                        <input id="emailH" placeholder="Email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes"  />
                                    </div>
                                    <div class="col-12 text-center text-danger mt-3">
                                        <strong> <span id="error_informH" style="color:red!important"></span></strong>
                                    </div>
                                    <div class="col-12 mt-4 d-flex justify-content-center">

                                        <input name="submit" type="submit" class="submit w-50 mx-auto" value="Envoyer" />
                                    </div>
                                </div>

                            </form>
                    </div>

                </div>
                <!-- <div class="modal-footer justify-content-center m-0 border-none" style="border: none;">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">D'accord</button>
                                                </div> -->
            </div>
        </div>
    </div>
    <!-- =========================================Header================================================================================= -->
    <div class="modal fade" id="FAQModalCenterHeader" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-0">
                <!-- <div class="modal-header" style="border: none;">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div> -->
                <div class="modal-body text-center py-0 px-0" style="overflow : hidden">
                    <div class="container-fluid p-0 m-0" style="position:relative">
                        <img src="{{ asset('images/FAQ.jpg')}}" class="container-fluid p-0 m-0" loading="lazy" alt="" srcset="{{ asset('images/FAQ.jpg')}}">
                        <div style="position:absolute;top:0;left:0;background: linear-gradient(to bottom, rgba(252, 119, 50, 0.5) 0%, rgba(236, 68, 86, 0.5) 100%);" class="w-100 h-100"></div>
                        <img src="{{ asset("images/logo.png")}}" loading="lazy" style="position:absolute;top:3rem;left:3rem;transform:translate(-50%,-50%);width:3.5rem" alt="cible-app-logo">
                            <button type="button" class="close" style="position:absolute;top:1.5rem;right:1rem;transform:translate(-50%,-50%);" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" style="color:#fff">&times;</span>
                          </button>
                    </div>
                    <div class="p-3">
                        <h4 class="modal-title mt-4 h5" id="exampleModalLongTitle" style="font-size: 1.5rem;font-weight : 900">Posez votre question !</h5>
                            <p class="mb-0 pb-0">
                                Votre adresse email ne sera pas publiée.

                            </p>
                            <form id="poserQestion" class="comment-form text-left">
                                @csrf
                                <div class="row my-4">
                                    <div class="col-4 mb-3 pr-0 mr-0">
                                        <select class="" id="select_id" required>
                                        <option value="" disabled hidden selected>Choix du pays</option>
                                            @foreach ($countries as $country)
                                            <option value="{{$country->name}}" id="paysQ">{{$country->name}} - {{$country->code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-8 mb-3">
                                        <input id="telQ" placeholder="Numéro de téléphone" type="number" value="" size="30" maxlength="100" aria-describedby="number-notes" required='required' />
                                    </div>
                                    <div class="col-12">
                                        <input id="emailQ" placeholder="Email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" />
                                    </div>
                                    <div class="col-12 my-3 ">
                                        <textarea id="question" placeholder="Votre question " name="raison" type="text" value="" size="30" maxlength="100" aria-describedby="profession-notes" required></textarea>
                                    </div>
                                    <div class="col-12 text-center text-danger mt-3">
                                        <strong> <span id="errorQ" style="color:red!important"></span></strong>
                                    </div>
                                    <div class="col-12 mt-4 d-flex justify-content-center">

                                        <input name="submit" type="submit" class="submit w-50 mx-auto" value="Envoyer" />
                                    </div>
                                </div>

                            </form>
                    </div>

                </div>
                <!-- <div class="modal-footer justify-content-center m-0 border-none" style="border: none;">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">D'accord</button>
                                                </div> -->
            </div>
        </div>
    </div>
    <!-- =========================================Plus qu’une billetterie en ligne================================================================================= -->
    <div class="modal fade" id="exampleModalCenterBilleterie" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-0">
                <!-- <div class="modal-header" style="border: none;">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div> -->
                <div class="modal-body text-center py-0 px-0" style="overflow : hidden">
                    <div class="container-fluid p-0 m-0" style="position:relative">
                        <img src="{{ asset('images/clible_app.jpg')}}" class="container-fluid p-0 m-0" loading="lazy" alt="" srcset="{{ asset('images/clible_app.jpg')}}">
                        <div style="position:absolute;top:0;left:0;background: linear-gradient(to bottom, rgba(252, 119, 50, 0.5) 0%, rgba(236, 68, 86, 0.5) 100%);" class="w-100 h-100"></div>
                        <img src="{{ asset("images/logo.png")}}" loading="lazy" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:5rem" alt="cible-app-logo">
                        <button type="button" class="close" style="position:absolute;top:1.5rem;right:1rem;transform:translate(-50%,-50%);" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" style="color:#fff">&times;</span>
                                                        </button>
                    </div>
                    <div class="p-3">
                        <h5 class="modal-title mt-4" id="exampleModalLongTitle" style="font-size: 1.5rem;">Soyez informé au lancement !</h5>
                        <p class="mb-0 pb-0">
                            Votre adresse email ne sera pas publiée.

                        </p>
                        <form id="informBilleterie" class="comment-form text-left">
                            @csrf
                            <div class="row my-4">
                                <div class="col-4 mb-3 pr-0 mr-0">
                                    <select class="" required>
                                        @foreach ($countries as $country)
                                        <option value="{{$country->name}}" id="paysB">{{$country->name}} - {{$country->code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-8 mb-3">
                                    <input id="numberB" placeholder="Numéro de téléphone" type="number" value="" size="30" maxlength="100" aria-describedby="number-notes" required='required' />
                                </div>
                                <div class="col-12">
                                    <input id="emailB" placeholder="Email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" />
                                </div>
                                <div class="col-12 mt-4 d-flex justify-content-center">
                                    <span id="error_informB"></span>
                                    <input name="submit" type="submit" class="submit w-50 mx-auto" value="Envoyer" />
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
                <!-- <div class="modal-footer justify-content-center m-0 border-none" style="border: none;">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">D'accord</button>
                                                </div> -->
            </div>
        </div>
    </div>


    <!-- =========================================Pourquoi opter pour CIBLE ================================================================================= -->
    <div class="modal fade" id="exampleModalCenterRaison" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-0">
                <!-- <div class="modal-header" style="border: none;">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div> -->
                <div class="modal-body text-center py-0 px-0" style="overflow : hidden">
                    <div class="container-fluid p-0 m-0" style="position:relative">
                        <img src="{{ asset('images/clible_app.jpg')}}" class="container-fluid p-0 m-0" loading="lazy" alt="" srcset="{{ asset('images/clible_app.jpg')}}">
                        <div style="position:absolute;top:0;left:0;background: linear-gradient(to bottom, rgba(252, 119, 50, 0.5) 0%, rgba(236, 68, 86, 0.5) 100%);" class="w-100 h-100"></div>
                        <img src="{{ asset("images/logo.png")}}" loading="lazy" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:5rem" alt="cible-app-logo">
                        <button type="button" class="close" style="position:absolute;top:1.5rem;right:1rem;transform:translate(-50%,-50%);" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" style="color:#fff">&times;</span>
                                                        </button>
                    </div>
                    <div class="p-3">
                        <h5 class="modal-title mt-4" id="exampleModalLongTitle" style="font-size: 1.5rem;">Soyez informé au lancement !</h5>
                        <p class="mb-0 pb-0">
                            Votre adresse email ne sera pas publiée.

                        </p>
                        <form id="informRaison" class="comment-form text-left">
                            @csrf
                            <div class="row my-4">
                                <div class="col-4 mb-3 pr-0 mr-0">
                                    <select class="" required>
                                        @foreach ($countries as $country)
                                        <option value="{{$country->name}}" id="paysR">{{$country->name}} - {{$country->code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-8 mb-3">
                                    <input id="numberR" placeholder="Numéro de téléphone" type="number" value="" size="30" maxlength="100" aria-describedby="number-notes" required='required' />
                                </div>
                                <div class="col-12">
                                    <input id="emailR" placeholder="Email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes"  />
                                </div>
                                <div class="col-12 mt-4 d-flex justify-content-center">
                                    <span id="error_informR"></span>
                                    <input name="submit" type="submit" class="submit w-50 mx-auto" value="Envoyer" />
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- =============================================Soyez informé au lancement !============================================================================== -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-0">

                <div class="modal-body text-center py-0 px-0" style="overflow : hidden">
                    <div class="container-fluid p-0 m-0" style="position:relative">
                        <img loading="lazy" src="{{ asset('images/cible-app-modale-info.png')}}" class="container-fluid p-0 m-0" alt="">
                        <button type="button" class="close" style="position:absolute;top:1.5rem;right:1rem;transform:translate(-50%,-50%);" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" style="color:#fff">&times;</span>
                                                        </button>
                        <div class="p-3">
                            <h5 class="modal-title mt-4" id="exampleModalLongTitle" style="font-size: 1.5rem;">Soyez informé au lancement !</h5>
                            <p class="mb-0 pb-0">
                                Votre adresse email ne sera pas publiée.
                            </p>
                            <form id="Soyerform" class="comment-form text-left">

                                <div class="row my-4">
                                    <div class="col-12 mb-3">
                                        <input id="nomE" placeholder="Nom & prénom(s)" type="text" value="" size="30" maxlength="20" aria-describedby="nom-notes" required='required' />
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input id="emailE" placeholder="Email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes"  />
                                    </div>
                                    <div class="col-12 mb-3 ">

                                        <input id="professionE" placeholder="Profession" name="profession" type="text" value="" size="30" maxlength="25" aria-describedby="profession-notes" required />
                                    </div>
                                    <div class="col-12 mb-3 ">

                                        <textarea id="raisonE" placeholder="Vos motivations" name="raison" type="text" value="" size="30" maxlength="100" aria-describedby="profession-notes" required></textarea>
                                    </div>
                                    <div class="col-sm-4  mb-3 pr-sm-0 mr-sm-0">
                                        <select class="" required id="select_id_e">
                                        <option value="" disabled hidden selected>Choix du pays</option>
                                            @foreach ($countries as $country)
                                            <option value="{{$country->name}}" id="paysE">{{$country->name}} - {{$country->code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-8 mb-3">
                                        <input id="numeroE" placeholder="Numéro de téléphone" name="number" type="number" value="" size="30" maxlength="100" aria-describedby="number-notes" required />
                                    </div>
                                    <div class="col-12 text-center">
                                        <span id="error_informE" class="text-danger"></span>
                                    </div>
                                    <div class="col-12 mt-4 d-flex justify-content-center">

                                        <input name="submit" type="submit" class="submit w-50 mx-auto" value="Envoyer" />
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div><!-- .site-content-contain -->
    <style>
        .tab-content::before {
            display: none;
            visibility: hidden;
            opacity: 0;
        }

        .mfp-figure::after {

            box-shadow: 0 0 8px rgba(0, 0, 0, 0);
            background: rgba(68, 68, 68, 0);

        }

        .vc_custom_1548668011635 {
            background-color: #d4d4d4 !important;
        }

        .no-slider .banner-text .img-one img {
            width: 200%;
            max-width: 150%;
            margin-left: -25%;
        }

        .nav-item.active .nav-link {
            background-color: #da5010 !important;
            color: #fff !important;
            cursor: pointer
        }

        .nav-item .nav-link {
            cursor: pointer
        }

        img.imgBlog {
            height: 12rem
        }

        img.partenaire {
            /* background-color: var(--mibooz-black);
    background-blend-mode: luminosity; */
            height: 4rem;
            width: auto !important;
            /* -webkit-filter: grayscale(100%);
    filter: grayscale(100%) */
        }
    </style>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        setTimeout(() => {
            setCookieValueToInput('email', 'email');
            setCookieValueToInput('nom', 'nomE');
            setCookieValueToInput('numero', 'numberH');
            setCookieValueToInput('email', 'emailH');
            setCookieValueToInput('numero', 'numeroE');
            setCookieValueToInput('email', 'emailE');
            setCookieValueToInput('numero', 'telQ');
            setCookieValueToInput('email', 'emailQ');
            //    console.log(document.cookie)
        }, 10000);

        function viewParticulier(element) {
            console.log(element.classList)
            jQuery("#" + element.id).removeClass("active");
            if (element.id == "cp-par") {

                jQuery("#cp-par-view").show()
                jQuery("#cp-entre-view").hide()
                jQuery("#cp-par").addClass("active");
                jQuery("#cp-entre").removeClass("active");
            }
            if (element.id == "cp-entre") {
                jQuery("#cp-entre-view").show()
                jQuery("#cp-par-view").hide()
                jQuery("#cp-par").removeClass("active");
                jQuery("#cp-entre").addClass("active");
            }
            console.log(element.classList)
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $('#appino_subscription').submit(function(e) {
            e.preventDefault();
            let email = $("#email").val();
            let _token = $("input[name=_token]").val();
            let filter = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

            $.ajax({
                url: "{{route('enregistre')}}",
                type: "POST",
                data: {
                    email: email,
                    _token: _token
                },
                success: function(response) {
                    if (response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Envoyé avec succès',
                            text: "Vos informations ont été prises en compte avec succès",
                            showConfirmButton: true,
                        })
                        $('#appino_subscription')[0].reset();
                        $('#error_email').hide();
                    }
                    setCookie('email', email, 180);
                },
                error: function() {
                    $('#error_email').html('<label> Email existe déjà</label>')
                }

            });
        });
    </script>
    <script>
        $('#inform').submit(function(e) {
            e.preventDefault();
            let pays = $("#pays").val();
            let email = $("#emailI").val();
            let numero = $("#numberI").val();
            let _token = $("input[name=_token]").val();
            console.log(pays, email, numero)

            $.ajax({
                url: "{{route('informer-enregistre')}}",
                type: "POST",
                data: {
                    pays: pays,
                    numero: numero,
                    email: email,
                    _token: _token
                },
                success: function(response) {
                    if (response) {
                        $('#inform')[0].reset();
                        $('#error_inform').hide();
                        $('#inform')[0].hide();
                    }
                },
                error: function() {
                    $('#error_inform').html('<label> Numéro ou Email existe déjà</label>')
                }

            });
        });
    </script>
    <script>
        const formComment = document.querySelector("#informHeader");
        if (formComment) {
            formComment.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(e.target)
                console.log(formData.entries())
                //    e.preventDefault();
                let pays = $("#paysH").val();
                let email = $("#emailH").val();
                let numero = $("#numberH").val();
                let _token = $("input[name=_token]").val();
                console.log(pays, $("#emailH").val(), numero)
                //debugger
                $.ajax({
                    url: "{{route('informer-enregistre')}}",
                    type: "POST",
                    data: {
                        email: email,
                        pays: pays,
                        numero: numero,
                        _token: _token
                    },
                    beforeSend: function() {
                        let timerInterval;
                        Swal.fire({
                            title: 'Envoie en cours ...',
                            html: 'Chargement dans <b></b> milliseconds.',
                            timer: 1000000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })
                        setCookie('numero', numero, 180);
                        setCookie('email', email, 180);
                    },
                    success: function(response) {
                        if (response) {


                            Swal.fire({
                                icon: 'success',
                                title: 'Envoyé avec succès',
                                text: "Vos informations ont été prises en compte avec succès",
                                showConfirmButton: true,
                            })
                            $('#informHeader')[0].reset();
                            $('#error_informH').hide();
                            $('#informHeader')[0].hide();
                        }
                    },
                    error: function() {
                        $('#error_informH').html("<label class='text-danger'> Votre numéro ou email existe déjà </label>")
                        Swal.fire({
                            icon: 'error',
                            title: 'Erreur !',
                            text: 'Le formulaire contient une ou plusieurs erreurs . \n Veuillez revérifier!',
                        })
                    }

                });
            });
        }
    </script>
    <script>
        $('#informBilleterie').submit(function(e) {
            e.preventDefault();
            let pays = $("#paysB").val();
            let email = $("#emailB").val();
            let numero = $("#numberB").val();
            let _token = $("input[name=_token]").val();
            console.log(pays, email, numero)

            $.ajax({
                url: "{{route('informer-enregistre')}}",
                type: "POST",
                data: {
                    pays: pays,
                    numero: numero,
                    email: email,
                    _token: _token
                },
                success: function(response) {
                    if (response) {
                        $('#informBilleterie')[0].reset();
                        $('#error_informB').hide();
                        $('#informBilleterie')[0].hide();
                    }
                },
                error: function() {
                    $('#error_informB').html('<label> Numéro ou Email existe déjà</label>')
                }

            });
        });
    </script>
    <script>
        $('#informRaison').submit(function(e) {
            e.preventDefault();
            let pays = $("#paysR").val();
            let email = $("#emailR").val();
            let numero = $("#numberR").val();
            let _token = $("input[name=_token]").val();
            console.log(pays, email, numero)

            $.ajax({
                url: "{{route('informer-enregistre')}}",
                type: "POST",
                data: {
                    pays: pays,
                    numero: numero,
                    email: email,
                    _token: _token
                },
                success: function(response) {
                    if (response) {
                        $('#informRaison')[0].reset();
                        $('#error_informR').hide();
                        $('#informRaison')[0].hide();
                    }
                },
                error: function() {
                    $('#error_informR').html('<label> Numéro ou Email existe déjà</label>')
                }

            });
        });
    </script>
    <script>
        $('#Soyerform').submit(function(e) {
            e.preventDefault();
            let nom = $("#nomE").val();
            let email = $("#emailE").val();
            let numero = $("#numeroE").val();
            let pays = $("#paysE").val();
            let profession = $("#professionE").val();
            let raison = $("#raisonE").val();
            let _token = $("input[name=_token]").val();
            console.log(nom, pays, email, numero, profession, raison)

            $.ajax({
                url: "{{route('essayer-enregistre')}}",
                type: "POST",
                data: {
                    pays: pays,
                    numero: numero,
                    email: email,
                    profession: profession,
                    raison: raison,
                    nom: nom,
                    _token: _token
                },
                beforeSend: function() {
                    let timerInterval;
                    Swal.fire({
                        title: 'Envoie en cours ...',
                        html: 'Chargement dans <b></b> milliseconds.',
                        timer: 1000000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                    })
                    setCookie('nom', nom, 30);
                    setCookie('numero', numero, 30);
                    setCookie('email', email, 30);
                },
                success: function(response) {
                    if (response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Envoyé avec succès',
                            text: "Vos informations ont été prises en compte avec succès",
                            showConfirmButton: true,
                        })
                        $('#Soyerform')[0].reset();
                        $('#error_informE').hide();
                        $('#Soyerform')[0].hide();
                    }
                },
                error: function() {
                    $('#error_informE').html("<label class='text-danger'> Votre numéro ou email existe déjà </label>")
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur !',
                        text: 'Le formulaire contient une ou plusieurs erreurs . \n Veuillez revérifier!',
                    })
                }

            });
        });
    </script>

    <script>
        const formQues = document.querySelector("#poserQestion");

        if (formQues) {
            let pays_ = "";
            $('#select_id').on('change', function() {
                pays_ = this.value;
                //alert(this.value); //or alert($(this).val());
            });
            formQues.addEventListener('submit', function(e) {
                e.preventDefault();
                // const formData =  new FormData(e.target)
                //console.log(formData.entries())
                //    e.preventDefault();
                let pays = pays_;
                let email = $("#emailQ").val();
                let telQ = $("#telQ").val();
                let question = $("#question").val();
                let _token = $("input[name=_token]").val();

                $.ajax({
                    url: "{{route('storeFaqs')}}",
                    type: "POST",
                    data: {
                        email: email,
                        pays: pays,
                        tel: telQ,
                        question: question,
                        _token: _token
                    },
                    beforeSend: function() {
                        let timerInterval;
                        Swal.fire({
                            title: 'Envoie en cours ...',
                            html: 'Chargement dans <b></b> milliseconds.',
                            timer: 1000000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                //console.log('I was closed by the timer')
                            }
                        })
                    },
                    success: function(response) {
                        if (response) {


                            Swal.fire({
                                icon: 'success',
                                title: 'Envoyé avec succès',
                                text: "Vos informations ont été prises en compte avec succès",
                                showConfirmButton: true,
                            })
                            $('#poserQestion')[0].reset();
                            $('#errorQ').hide();
                            $('#poserQestion')[0].hide();
                        }
                    },
                    error: function() {
                        $('#errorQ').html("<label class='text-danger'> Votre numéro ou email existe déjà </label>")
                        Swal.fire({
                            icon: 'error',
                            title: 'Erreur !',
                            text: 'Le formulaire contient une ou plusieurs erreurs . \n Veuillez revérifier!',
                        })
                    }

                });
            });
        }
    </script>

    @endsection