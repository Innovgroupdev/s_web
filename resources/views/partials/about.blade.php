@extends('partials.model')

@section('ref')
    <title>A propos - CIBLE</title>
    <meta name="description"
    content="Découvrez Cible, l'application d'événementiel qui simplifie la planification et l'organisation de vos événements. Notre mission est de vous offrir une expérience d'utilisation simple et intuitive, tout en vous proposant des fonctionnalités de pointe pour la gestion de vos événements. Nous nous engageons à offrir un service de qualité à nos utilisateurs et à les accompagner dans toutes les étapes de l'organisation de leurs événements. Consultez notre section À propos pour en savoir plus sur notre histoire, notre équipe et notre vision pour l'avenir chez Cible.">
    <link rel="canonical" href="{{ url('/about') }}" />
    <meta name="keywords"
        content="l’événementiel,cible,cible-app,fêtes,Concerts,festivals,formations,séminaires,cinéma,conférences,salons,foires,congrès,concours,affaires,comédie,Opportunités,Annonces,Conseils">
    <meta name="author" content="DIGITAL INNOV GROUP">
    <meta property="og:title" content="A propos - CIBLE">
    <meta property="og:site_name" content="CIBLE">
    <meta property="og:url" content="{{ url('/about') }}">
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
            "url": "{{url('/about')}}",
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

    <div class="row bg-white">
        <div class="container col-12 col-lg-7 pl-2  pt-0 pt-xl-5 px-4 px-sm-6">

            <div class="col-10 col-md-8 mx-auto d-block d-lg-none mt-3 mb-5">
                <img src="{{ url('images/about.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="A propos de agnassan"
                    style="width:100%">
            </div>
            <p style="line-height:200%;">
                CIBLE est une solution digitale 3 en 1 développée par DIG (DIGITAL INNOV GROUP) dans le cadre de son projet
                de digitalisation des activités événementielles. La mission principale de CIBLE est de faire de chaque
                événement une opportunité pour tous (participants et organisateurs). Avec pour slogan « Ayez une longueur
                d’avance », être utilisateur de CIBLE, ce n’est pas seulement pouvoir acheter les tickets pour tout type
                d’événement dans son pays, mais c’est intégrer une communauté qui innove, qui sort de l’ordinaire, qui
                propose ce qu’elle désire pour l’amélioration des fonctionnalités de CIBLE.<br />
                C comme <strong>Champions</strong>: Nous prenons plaisir à servir les champions que vous êtes.<br />
                I comme <strong>Internet</strong>: Nous vous faisons tirer le plus profit d’internet pour vos
                événements<br />
                B comme <strong>Beauté</strong>: Vous offrir une application avec le meilleur design, c’est une priorité
                pour nous<br />
                L comme <strong>Liberté</strong>: Libérez vous des contraintes des tickets physiques, optez pour la
                liberté.<br />
                E comme <strong>Evénementiel</strong>: Ne dites plus événementiel, dites CIBLE ; pensez écologie<br />
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
        <div class="col-4 d-none d-lg-block  pt-0 pr-5 pt-xl-5 pt-xl-0">
            <img src="{{ url('images/about.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="A propos de cible"
                style="width:100%">
        </div>
    </div>
@endsection
