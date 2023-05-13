@extends('partials.model')

@section('ref')
    <title>Fonctionnement - CIBLE</title>
    <meta name="description"
        content="Découvrez les fonctionnalités uniques de Cible, l'application d'événementiel qui simplifie l'organisation de vos événements. Planifiez facilement vos événements, gérez vos invités et suivez toutes les étapes de l'organisation grâce à notre interface intuitive. Essayez dès maintenant Cible et organisez des événements réussis en toute simplicité.">
    <link rel="canonical" href="{{ url('/les-fonctionnalites-de-cible') }}" />
    <meta name="keywords"
        content="l’événementiel,cible,cible-app,fêtes,Concerts,festivals,formations,séminaires,cinéma,conférences,salons,foires,congrès,concours,affaires,comédie,Opportunités,Annonces,Conseils">
    <meta name="author" content="DIGITAL INNOV GROUP">
    <meta property="og:title" content="Fonctionnement - CIBLE">
    <meta property="og:site_name" content="CIBLE">
    <meta property="og:url" content="{{ url('/les-fonctionnalites-de-cible') }}">
    <meta property="og:description"
        content="Découvrez les fonctionnalités uniques de Cible, l'application d'événementiel qui simplifie l'organisation de vos événements. Planifiez facilement vos événements, gérez vos invités et suivez toutes les étapes de l'organisation grâce à notre interface intuitive. Essayez dès maintenant Cible et organisez des événements réussis en toute simplicité.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/logo-cible.jpg') }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@CIBLE">
    <meta name="twitter:title" content="Fonctionnement - CIBLE">
    <meta name="twitter:image" content="{{ asset('images/logo-cible.jpg') }}">
    <meta name="twitter:description"
        content="Découvrez les fonctionnalités uniques de Cible, l'application d'événementiel qui simplifie l'organisation de vos événements. Planifiez facilement vos événements, gérez vos invités et suivez toutes les étapes de l'organisation grâce à notre interface intuitive. Essayez dès maintenant Cible et organisez des événements réussis en toute simplicité.">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "CIBLE",
        "alternateName": "CIBLE-APP",
        "url": "{{url('/les-fonctionnalites-de-cible')}}",
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
                        <h1 class="title iq-tw-8 iq-font-white">Fonctionnalités</h1>
                        <div class="white"></div>

                    </div>

                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" title="Page d'acceuil  de CIBLE"><i
                                    class="fa fa-home" aria-hidden="true"></i>CIBLE</a></li>
                        <li class="breadcrumb-item active">les-fonctionnalites-de-cible</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <div class="container">
        <div class="row mt-- py-2 px-0 px-sm-2">
            <div class="container col-12 col-lg-8 pl-0 px-4 px-sm-6">
                <h3 class="text-lg-left text-uppercase titre2" style="font-weight: bold!important">
                    <br><strong style="font-weight: bold!important">Annonce et consultation des événements
                    </strong>
                </h3><br>
                <div class="col-10 col-md-8 mx-auto d-block d-lg-none mt-3 mb-5">
                    <img src="{{ url('images/annonce.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                        style="width:100%" />
                </div>
                <div style="line-height:200%;" class="text-left">
                    <p class="h6">
                        Les organisateurs d’événements, une fois téléchargé l’application mobile CIBLE PRO
                        <a href=""> (Téléchargement CIBLE PRO)</a> créent leurs comptes professionnels qui
                        est
                        validé par
                        l’administration de CIBLE. Une fois le compte validé, l’organisateur est autorisé à pouvoir
                        publier en quelques clic ces événements (liste des événements) en renseignant un formulaire
                        étape par étape. Une fois l’événement publié, l’administration vérifie son authenticité puis
                        le
                        valide pour qu’il soit affiché au grand public sur l’application mobile CIBLE <a
                            href="">téléchargeable
                            gratuitement</a>. Une fois l’événement publié, l’organisateur peut modifier les
                        informations
                        de son
                        événement et les participants seront notifiés. Il peut reporter ou annuler l’événement. En
                        cas
                        de report, une possibilité est donnée aux participants d’annuler leurs achats. En cas
                        d’annulation, tous les participants sont automatiquement remboursés.<br />
                        Toute personne ayant installé l’application CIBLE peut donc <a href="">consulter les
                            événements</a> publiés
                        dans son pays et peut définir ses événements favoris pour acheter les tickets plus tard. Les
                        événements sont affichés suivant chaque pays avec une possibilité de changer de pays pour
                        découvrir les événements dans ledit pays sélectionné.

                    </p>

                </div>
            </div>
            <div class="col-4 d-none d-lg-block pt-md-5 pt-xl-0 align-self-center">
                <img src="{{ url('images/annonce.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                    style="width:100%" />
            </div>
        </div>

        <div class="row mt-5 py-2 px-0 px-sm-2">
            <div class="col-4 d-none d-lg-block pt-md-5 pt-xl-0 align-self-center">
                <img src="{{ url('images/deal.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                    style="width:100%" />
            </div>
            <div class="container col-12 col-lg-8 pl-0 px-4 px-sm-6">
                <h3 class="text-lg-right text-uppercase titre2" style="font-weight: bold!important">
                    <br><strong style="font-weight: bold!important">Vente et Achat de tickets événementiels
                    </strong>
                </h3><br>
                <div class="col-10 col-md-8 mx-auto d-block d-lg-none mt-3 mb-5">
                    <img src="{{ url('images/deal.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                        style="width:100%" />
                </div>
                <div style="line-height:200%;" class="text-left">
                    <p class="h6" style="line-height:200%;">
                        Une fois que l’organisateur publie son événement, la possibilité est donnée à tous les
                        internautes sur <a href="">l’application CIBLE</a> de pourvoir acheter le type de
                        ticket
                        qu’ils désirent. Au
                        moment de la création de l’événement sur <a href="">CIBLE PRO</a>, il est demandé les
                        types de tickets
                        disponibles, les quantités disponibles pour chaque type. L’organisateur peut donc suivre
                        depuis
                        son compte l’évolution des ventes de tickets et les statistiques liées aux ventes. A la
                        création
                        du compte par l’organisateur, il lui est demandé de renseigner le compte (compte bancaire,
                        compte mobile money) sur lequel nous allons lui reverser l’argent de ses ventes. <br />
                        Pour acheter un ticket pour un événement, il faut au préalable recharger son portefeuille
                        depuis
                        son <a href="">compte CIBLE</a> puis il suffira de choisir le type et la quantité
                        depuis
                        la page qui présente
                        l’événement. Une facture est générée avec le total à payer. Une fois validée, votre
                        portefeuille
                        est décompté et vous pouvez voir ce qui vous reste sur votre portefeuille.<br />
                        Pour les organisateurs, une facture est générée pour servir de justificatif comptable des
                        ventes
                        de tickets réalisés et pour les participants de l’événement, des tickets électroniques (PDF)
                        leurs sont envoyés sur leur compte ainsi que des factures.
                    </p>
                </div>
            </div>
        </div>



        <div class="row mt-- py-2 px-0 px-sm-2">
            <div class="container col-12 col-lg-8 pl-0 px-4 px-sm-6">
                <h3 class="text-lg-left text-uppercase titre2" style="font-weight: bold!important">
                    <br><strong style="font-weight: bold!important">Recharge de portefeuille
                    </strong>
                </h3><br>
                <div class="col-10 col-md-8 mx-auto d-block d-lg-none mt-3 mb-5">
                    <img src="{{ url('images/wallet.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                        style="width:100%" />
                </div>
                <div style="line-height:200%;" class="text-left">
                    <p class="h6" style="line-height:200%;">
                        Cette fonctionnalité est disponible sur <a href="">l’application CIBLE</a>. Pour
                        acheter
                        les tickets en toute
                        tranquillité et ne pas avoir à renseigner leurs moyens de paiement à chaque fois, nous avons
                        développé une fonctionnalité pour permettre à nos utilisateurs de charger une fois un
                        montant de
                        leur choix. Ainsi, pour tous les tickets qu’ils achètent, nous décomptons leur portefeuille
                        jusqu’à ce que celui-ci soit épuisé. Une fois le portefeuille épuisé, l’utilisateur recharge
                        de
                        nouveau le montant de son choix et ainsi de suite. Vous avez la possibilité de recharger
                        votre
                        portefeuille par carte bancaire ou mobile money disponible dans votre pays. <br />
                        Si votre portefeuille n’est pas chargé au moment de l’achat de ticket, nous vous redirigeons
                        vers notre partenaire CinetPay pour la recharge afin que le paiement soit opérationnel.

                    </p>
                </div>
            </div>
            <div class="col-4 d-none d-lg-block pt-md-5 pt-xl-0 align-self-center">
                <img src="{{ url('images/wallet.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                    style="width:100%" />
            </div>
        </div>

        <div class="row mt-- py-2 px-0 px-sm-2">
            <div class="col-4 d-none d-lg-block pt-md-5 pt-xl-0 align-self-center">
                <img src="{{ url('images/gift.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                    style="width:100%" />
            </div>
            <div class="container col-12 col-lg-8 pl-0 px-4 px-sm-6">

                <h3 class="text-lg-right text-uppercase titre2" style="font-weight: bold!important">
                    <br><strong style="font-weight: bold!important">Commande des gadgets souvenirs pour vos
                        événements
                        coup de cœur
                    </strong>
                </h3><br>
                <div class="col-10 col-md-8 mx-auto d-block d-lg-none mt-3 mb-5">
                    <img src="{{ url('images/gift.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                        style="width:100%" />
                </div>
                <div style="line-height:200%;" class="text-left">
                    <p class="h6" style="line-height:200%;">
                        Une fois que vous achetez votre ticket pour un événement, il vous est demandé si vous
                        aimeriez
                        obtenir un gadget souvenir pour immortaliser votre participation à l’événement… Si vous êtes
                        intéressé, on vous propose donc les gadgets (liste des gadgets) disponibles pour votre
                        événement
                        et vous choisissez ceux que vous voulez et la quantité de votre choix. Notez que les gadgets
                        ne
                        seront pas disponibles pour tous les événements. <br />
                        Des frais symboliques des gadgets seront ajoutés à votre facture des tickets puis le total
                        sera
                        prélevé à votre portefeuille CIBLE. Vous recevrez le jour de l’événement vos gadgets pour
                        souvenir

                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-- py-2 px-0 px-sm-2">
            <div class="container col-12 col-lg-8 pl-0 px-4 px-sm-6">
                <h3 class="text-lg-left text-uppercase titre2" style="font-weight: bold!important">
                    <br><strong style="font-weight: bold!important">Participation aux enquêtes de satisfaction
                        après
                        chaque événement
                    </strong>
                </h3><br>
                <div class="col-10 col-md-8 mx-auto d-block d-lg-none mt-3 mb-5">
                    <img src="{{ url('images/survey.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                        style="width:100%" />
                </div>
                <div style="line-height:200%;" class="text-left">
                    <p class="h6" style="line-height:200%;">
                        Vous avez acheté votre ticket sur CIBLE pour participer à un événement ; une fois
                        l’événement
                        passé, nous générons une enquête de satisfaction de voir ce que vous avez aimé et ce que
                        vous
                        n’avez pas aimé. Vous aurez donc des options de réponses pour chaque question et vous aurez
                        juste à cocher les réponses qui vous conviennent. Cela nous permettra de donner les
                        meilleures
                        recommandations aux organisateurs d’événements afin que ceux-ci fassent de chaque événement
                        à
                        venir un succès et une meilleure expérience à tous les participants. Nous croyons que c’est
                        ensemble que nous pouvons aider nos organisateurs d’événements et exiger d’eux de meilleures
                        organisations pour tous les événements. L’enquête de satisfaction ne prend pas plus de 5
                        minutes.
                    </p>
                </div>
            </div>
            <div class="col-4 d-none d-lg-block pt-md-5 pt-xl-0 align-self-center">
                <img src="{{ url('images/survey.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                    style="width:100%" />
            </div>
        </div>

        <div class="row mt-- py-2 px-0 px-sm-2">
            <div class="col-4 d-none d-lg-block pt-md-5 pt-xl-0 align-self-center">
                <img src="{{ url('images/control.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                    style="width:100%" />
            </div>
            <div class="container col-12 col-lg-8 pl-0 px-4 px-sm-6">

                <h3 class="text-lg-right text-uppercase titre2" style="font-weight: bold!important">
                    <br><strong style="font-weight: bold!important">Scan de tickets événementiels
                    </strong>
                </h3><br>
                <div class="col-10 col-md-8 mx-auto d-block d-lg-none mt-3 mb-5">
                    <img src="{{ url('images/control.svg') }}" class="my-auto mt-md-5 mt-xl-0" alt="functionnality"
                        style="width:100%" />
                </div>
                <div style="line-height:200%;" class="text-left">
                    <p class="h6" style="line-height:200%;">
                        Une application <a href="">CIBLE SCAN</a> est aussi disponible pour permettre de
                        scanner
                        les tickets achetés
                        sur CIBLE. Pour éviter la fraude, tous les tickets générés par scan sont reconnus par
                        l’application CIBLE SCAN qui est le scanner des tickets achetés sur <a href="">l’application
                            CIBLE</a>. Cette
                        application de scan a pour objectif de vérifier que le ticket présenté à l’entrée par le
                        participant a été réellement acheté sur CIBLE. Si le ticket a été acheté sur l’application
                        CIBLE, alors, le ticket est validé et accepté et si le ticket n’est pas reconnu, alors il
                        est
                        rejeté. A la création de l’événement, un code scan est généré pour l’organisateur. Ce code
                        permet de connecter à CIBLE SCAN pour pouvoir scanner les tickets dudit événement.
                        L’organisateur pourra donc communiquer le code à ceux qui sont chargés de vérifier la
                        véracité
                        des tickets à l’entrée. Les statistiques de scan des tickets sont affichées à l’organisateur
                        afin qu’il ait une idée des tentatives de fraude lors de son événement et le nombre de
                        personnes
                        ayant scanné les tickets pour son événement.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        nav>.nav.nav-tabs {

            border: none;
            color: black !important;
            background: #fff;
            border-radius: 50px;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #DF7132;

        }

        nav>div a.nav-item.nav-link {
            border: none;
            padding: 18px 3px;
            color: #DF7132;

            border-radius: 0;

        }

        nav>div a.nav-item.nav-link.active {
            border: none;
            padding: 18px 3px;
            color: #E7661B;
            background: #F6D1BC !important;
            border-radius: 50px;
            font-weight: 600 ! important;
        }


        .tab-content {

            line-height: 200%;
            border-radius: 50px;
            width: 100%;
        }

        nav>div a.nav-item.nav-link:hover,
        nav>div a.nav-item.nav-link:focus {


            font-weight: 600 !important;

            transition: background 0.50s linear;
        }

        .tab-pane {
            width: 100%;
        }

        nav {
            background: transparent !important;
        }

        p {
            line-height: 200% !important;
        }
    </style>
@endsection
