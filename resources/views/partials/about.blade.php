@extends('partials.model')

@section('ref')
    <title>A propos - CIBLE</title>
    <meta name="description"
        content="Découvrez Cible, l'application d'événementiel qui simplifie la planification et l'organisation de vos événements. Notre mission est de vous offrir une expérience d'utilisation simple et intuitive, tout en vous proposant des fonctionnalités de pointe pour la gestion de vos événements. Nous nous engageons à offrir un service de qualité à nos utilisateurs et à les accompagner dans toutes les étapes de l'organisation de leurs événements. Consultez notre section À propos pour en savoir plus sur notre histoire, notre équipe et notre vision pour l'avenir chez Cible.">
    <link rel="canonical" href="{{ url('/a-propos-de-cible') }}" />
    <meta name="keywords"
        content="l’événementiel,cible,cible-app,fêtes,Concerts,festivals,formations,séminaires,cinéma,conférences,salons,foires,congrès,concours,affaires,comédie,Opportunités,Annonces,Conseils">
    <meta name="author" content="DIGITAL INNOV GROUP">
    <meta property="og:title" content="A propos - CIBLE">
    <meta property="og:site_name" content="CIBLE">
    <meta property="og:url" content="{{ url('/a-propos-de-cible') }}">
    <meta property="og:description"
        content="Découvrez Cible, l'application d'événementiel qui simplifie la planification et l'organisation de vos événements. Notre mission est de vous offrir une expérience d'utilisation simple et intuitive, tout en vous proposant des fonctionnalités de pointe pour la gestion de vos événements. Nous nous engageons à offrir un service de qualité à nos utilisateurs et à les accompagner dans toutes les étapes de l'organisation de leurs événements. Consultez notre section À propos pour en savoir plus sur notre histoire, notre équipe et notre vision pour l'avenir chez Cible.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/logo-cible.jpg') }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@CIBLE">
    <meta name="twitter:title" content="A propos - CIBLE">
    <meta name="twitter:image" content="{{ asset('images/logo-cible.jpg') }}">
    <meta name="twitter:description"
        content="Découvrez Cible, l'application d'événementiel qui simplifie la planification et l'organisation de vos événements. Notre mission est de vous offrir une expérience d'utilisation simple et intuitive, tout en vous proposant des fonctionnalités de pointe pour la gestion de vos événements. Nous nous engageons à offrir un service de qualité à nos utilisateurs et à les accompagner dans toutes les étapes de l'organisation de leurs événements. Consultez notre section À propos pour en savoir plus sur notre histoire, notre équipe et notre vision pour l'avenir chez Cible.">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Event",
            "name": "CIBLE",
            "alternateName": "CIBLE-APP",
            "url": "{{url('/a-propos-de-cible')}}",
            "logo": "{{ asset("
            images / logo-cible.jpg ")}}",
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
@endsection

@section('content')
    <section class="iq-breadcrumb overview-block-pb">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="heading-title iq-breadcrumb-title iq-mtb-100">
                        <h1 class="title iq-tw-8 iq-font-white">A propos</h1>
                        <div class="white"></div>

                    </div>

                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" title="Page d'acceuil  de CIBLE"><i
                                    class="fa fa-home" aria-hidden="true"></i>CIBLE</a></li>
                        <li class="breadcrumb-item active">about</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row"></div>

        <div class="row bg-white">
            <div class="col-12  pt-0 pt-xl-5">
                {{-- <div class="col-10 col-md-8 mx-auto d-block d-lg-none mt-3 mb-5">
                    <img src="{{ url('images/about.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="A propos de agnassan"
                        style="width:100%">
                </div> --}}
                <p style="line-height:200%;">
                    CIBLE est une solution digitale 3 en 1 développée par DIG (DIGITAL INNOV GROUP) dans le cadre de son
                    projet
                    de digitalisation des activités événementielles. La mission principale de CIBLE est de faire de chaque
                    événement une opportunité pour tous (participants et organisateurs). Avec pour slogan « Ayez une
                    longueur
                    d’avance », être utilisateur de CIBLE, ce n’est pas seulement pouvoir acheter les tickets pour tout type
                    d’événement dans son pays, mais c’est intégrer une communauté qui innove, qui sort de l’ordinaire, qui
                    propose ce qu’elle désire pour l’amélioration des fonctionnalités de CIBLE.<br /><br />
                    C comme <strong>Champions</strong>: Nous prenons plaisir à servir les champions que vous êtes.<br />
                    I comme <strong>Internet</strong>: Nous vous faisons tirer le plus profit d’internet pour vos
                    événements<br />
                    B comme <strong>Beauté</strong>: Vous offrir une application avec le meilleur design, c’est une priorité
                    pour nous<br />
                    L comme <strong>Liberté</strong>: Libérez vous des contraintes des tickets physiques, optez pour la
                    liberté.<br />
                    E comme <strong>Evénementiel</strong>: Ne dites plus événementiel, dites CIBLE ; pensez
                    écologie<br /><br />
                    CIBLE, c’est trois valeurs clés qui nous unissent :<br />
                    <strong>Originalité</strong>: Nos fonctionnalités sont pensées pour apporter une approche nouvelle en
                    résolvant les
                    problèmes non résolus par les solutions existantes avec toujours une innovation dans nos concepts.<br />
                    <strong>Gain</strong>: Oui, faire gagner encore et encore tous nos utilisateurs en créant des
                    fonctionnalités dans ce sens<br />
                    <strong>Partage</strong> : Une fois qu’on gagne, CIBLE prône le partage et l’entraide à tous ses
                    utilisateurs.
                </p>
            </div>
            {{-- <div class="col-5 d-none d-lg-block  pt-0 pt-xl-5 pt-xl-0">
                <img src="{{ url('images/about.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="A propos de cible"
                    style="width:100%">
            </div> --}}
        </div>

        <div class="row bg-white">
            <div class="col-4 d-none d-lg-block  pt-0  pt-xl-5 pt-xl-0">
                <img src="{{ url('images/application_de_vente_de_tickets.png') }}" class="my-auto mt-md-5 mt-xl-0"
                    alt="A propos de cible" style="width:100%">
            </div>
            <div class="col-12 col-lg-8  pt-0 pt-xl-5 align-self-center">
                <div class="col-10 col-md-8 mx-auto d-block d-lg-none mt-3 mb-5">
                    <img src="{{ url('images/application_de_vente_de_tickets.png') }}" class="my-auto mt-md-5 mt-xl-0"
                        alt="A propos de agnassan" style="width:100%">
                </div>
                <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                    CIBLE : l’application CIBLE pour les particuliers (participants d’événements)
                </h3>
                <p style="line-height:200%;">

                    Cette application mobile est celle qui affiche les événements publiés par les organisateurs. Pour
                    consulter
                    les événements dans votre pays peu importe leurs catégories ou acheter vos tickets, installez cette
                    application. Elle vous permettra d’obtenir également vos gadgets souvenirs et de donner vos avis sur les
                    événements auxquelles vous participez. Vous disposez d’une version pour Android et pour IPhone.<br />

                </p>
                <div class="d-flex gap-3 w-100 justify-content-around">
                    <a href="">Téléchargement sur Play Store (Android)</a>
                    <a href="">Téléchargement sur App Store (IPhone)</a>
                </div>
                {{-- <div class="d-flex gap-3 w-100 justify-content-between">
                    <a href="">
                        <img src="{{ url('images/google-play.png') }}" class="my-auto" alt="Google Play" />
                    </a>
                    <a href="">
                        <img src="{{ url('images/app-store.png') }}" class="my-auto" alt="App Store" />
                    </a>
                </div> --}}
            </div>

        </div>

        <div class="row bg-white">
            <div class="col-12 col-lg-9 pt-0 pt-xl-5 align-self-center">
                <div class="col-10 col-md-8 mx-auto d-block d-lg-none mt-3 mb-5">
                    <img src="{{ url('images/application_pour_publier_vos_événements.png') }}"
                        class="my-auto mt-md-5 mt-xl-0" alt="A propos de agnassan" style="width:100%">
                </div>
                <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                    CIBLE PRO : L’application CIBLE pour les professionnels de l’événementiel
                    (organisateurs)
                </h3>
                <p style="line-height:200%;">

                    Cette application est destinée aux organisateurs d’événements. C’est via cette application qu’ils
                    publient
                    leurs événements et suivent la vente de leurs tickets en direct ainsi que le rapport de scan des tickets
                    pour contrôler les accès à la salle de l’événement. C’est également grâce à elle qu’ils accèdent à leurs
                    facteurs et aux résultats des enquêtes de satisfaction. Vous disposez d’une version pour Android et pour
                    IPhone.<br />
                    Téléchargement sur Play Store (Android) Téléchargement sur App Store (IPhone)
                </p>
                <div class="d-flex gap-3 w-100 justify-content-around">
                    <a href="">Téléchargement sur Play Store (Android)</a>
                    <a href="">Téléchargement sur App Store (IPhone)</a>
                </div>
            </div>
            <div class="col-3 d-none d-lg-block  pt-0 pr-5 pt-xl-5 pt-xl-0">
                <img src="{{ url('images/application_pour_publier_vos_événements.png') }}" class="my-auto mt-md-5 mt-xl-0 "
                    alt="A propos de cible" style="width:100%">
            </div>
        </div>

        <div class="row bg-white">
            <div class="col-3 d-none d-lg-block  pt-0 pr-5 pt-xl-5 pt-xl-0">
                <img src="{{ url('images/scanner_ticket_événementiel_CIBLE.png') }}" class="my-auto mt-md-5 mt-xl-0"
                    alt="A propos de cible" style="width:100%">
            </div>
            <div class="col-12 col-lg-9  pt-0 pt-xl-5 align-self-center">
                <div class="col-10 col-md-8 mx-auto d-block d-lg-none mt-3 mb-5">
                    <img src="{{ url('images/scanner_ticket_événementiel_CIBLE.png') }}" class="my-auto mt-md-5 mt-xl-0"
                        alt="A propos de agnassan" style="width:100%">
                </div>
                <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                    CIBLE SCAN : L’application CIBLE pour scanner et vérifier l’authenticité des tickets
                </h3>
                <p style="line-height:200%;">
                    Cette application est utilisée par les contrôleurs à l’entrée de la salle d’événement pour s’assurer que
                    les
                    tickets présentés sont réellement achetés sur CIBLE. Une fois installé, le contrôleur qui a reçu au
                    préalable le code scan de l’événement auprès de l’organisateur va sélectionner son événement puis entrer
                    le
                    code. Vous disposez d’une version pour Android et pour IPhone.<br />
                    Téléchargement sur Play Store (Android) Téléchargement sur App Store (IPhone)
                </p>
                <div class="d-flex gap-3 w-100 justify-content-around">
                    <a href="">Téléchargement sur Play Store (Android)</a>
                    <a href="">Téléchargement sur App Store (IPhone)</a>
                </div>
            </div>
        </div>
    </div>
@endsection
