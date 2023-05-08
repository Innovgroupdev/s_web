@extends('partials.model')

@section('ref')
    <title>Politique de Confidentialité - CIBLE</title>
    <meta name="description"
    content="Découvrez la politique de confidentialité de Cible, l'application d'événementiel qui place la protection de vos données personnelles au cœur de ses préoccupations. Nous nous engageons à respecter la confidentialité de vos informations et à les protéger conformément aux normes en vigueur. Consultez notre politique de confidentialité pour en savoir plus sur les données que nous collectons, comment nous les utilisons et comment nous les protégeons. Soyez assuré que votre vie privée est notre priorité chez Cible.">
    <link rel="canonical" href="{{ url('/policy') }}" />
    <meta name="keywords"
        content="l’événementiel,cible,cible-app,fêtes,Concerts,festivals,formations,séminaires,cinéma,conférences,salons,foires,congrès,concours,affaires,comédie,Opportunités,Annonces,Conseils">
    <meta name="author" content="DIGITAL INNOV GROUP">
    <meta property="og:title" content="Politique de Confidentialité - CIBLE">
    <meta property="og:site_name" content="CIBLE">
    <meta property="og:url" content="{{ url('/policy') }}">
    <meta property="og:description"
        content="Découvrez la politique de confidentialité de Cible, l'application d'événementiel qui place la protection de vos données personnelles au cœur de ses préoccupations. Nous nous engageons à respecter la confidentialité de vos informations et à les protéger conformément aux normes en vigueur. Consultez notre politique de confidentialité pour en savoir plus sur les données que nous collectons, comment nous les utilisons et comment nous les protégeons. Soyez assuré que votre vie privée est notre priorité chez Cible.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/logo-cible.jpg') }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@CIBLE">
    <meta name="twitter:title" content="Politique de Confidentialité - CIBLE">
    <meta name="twitter:image" content="{{ asset('images/logo-cible.jpg') }}">
    <meta name="twitter:description"
        content="Découvrez la politique de confidentialité de Cible, l'application d'événementiel qui place la protection de vos données personnelles au cœur de ses préoccupations. Nous nous engageons à respecter la confidentialité de vos informations et à les protéger conformément aux normes en vigueur. Consultez notre politique de confidentialité pour en savoir plus sur les données que nous collectons, comment nous les utilisons et comment nous les protégeons. Soyez assuré que votre vie privée est notre priorité chez Cible.">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Event",
            "name": "CIBLE",
            "alternateName": "CIBLE-APP",
            "url": "{{url('/policy')}}",
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
                        <h1 class="title iq-tw-8 iq-font-white">Politique de Confidentialité</h1>
                        <div class="white"></div>

                    </div>

                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" title="Page d'acceuil  de CIBLE"><i
                                    class="fa fa-home" aria-hidden="true"></i>CIBLE</a></li>
                        <li class="breadcrumb-item active">policy</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <div class="tab-content py-5 px-0  shadow-lg" id="nav-tabContent">
        <div class="tab-pane fade text-dark show active " id="nav-apprenant" role="tabpanel"
            aria-labelledby="nav-apprenant-tab">

            <div class="row pt-3 px-0 px-sm-2">
                <div class="container col-12 col-lg-7 pl-0 px-4 px-sm-6">
                    <div style="line-height:200%;" class="">
                        <p class="m-0">
                            Nous respectons la vie privée de nos utilisateurs ainsi que celle des visiteurs de notre site
                            Web. Nous traitons donc vos données personnelles avec soin. Par le biais de cette politique de
                            confidentialité, nous tenons à vous informer comment nous traitons vos données personnelles
                            lorsque vous utilisez cette application ou visitez le site web.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row py-0 px-0 px-sm-2">
                <div class="container col-12 col-lg-7 pl-0 px-4 px-sm-6">
                    <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                        <br><strong style="font-weight: bold!important">Préambule
                        </strong>
                    </h3><br>

                    <div style="line-height:200%;" class="">
                        <p>
                            Cette politique de confidentialité s'applique au site web www.cible-app.com et aux applications
                            CIBLE, CIBLE PRO et CIBLE SCAN
                            La présente politique de confidentialité a pour but d'exposer aux utilisateurs :
                            -La manière dont sont collectées et traitées leurs données à caractère personnel
                            -Les droits des utilisateurs concernant leurs données
                            -A qui ces données sont transmises
                            -La politique du site en matière de fichiers "cookies"
                            Cette politique de confidentialité complète les mentions légales et les Conditions générales
                            d'utilisation que les utilisateurs peuvent consulter à l'adresse ci-après :
                            <a href="https://www.cible-app.com/cgu">www.cible-app.com/cgu</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row py-2 px-0 px-sm-2">
                <div class="container col-12 col-lg-7 pl-0 px-4 px-sm-6">
                    <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                        <br><strong style="font-weight: bold!important">1. Collecte de l’information
                        </strong>
                    </h3><br>
                    <div style="line-height:200%;" class="">
                        <p>
                            Nous recueillons des informations lorsque vous vous inscrivez sur notre application, lorsque
                            vous vous connectez à votre compte, faites un achat, participez à un jeu de tirage au sort ou
                            tout autre type de jeu ou lorsque vous vous déconnectez. Les informations recueillies incluent
                            votre nom, votre adresse e-mail, numéro de téléphone, votre adresse, votre genre, votre date de
                            naissance pour les comptes particuliers et incluent la raison sociale, le numéro RCCM, le NIF,
                            la date de création de l’entreprise, la personne physique responsable de l’entreprise et ses
                            coordonnées, et des documents justificatifs. En outre, nous recevons et enregistrons
                            automatiquement des informations à partir de votre ordinateur/téléphone et navigateur, y compris
                            votre adresse IP et les pages que vous demandez.
                            Le responsable du traitement conservera dans les systèmes informatiques de l’application et dans
                            des conditions raisonnables de sécurité l'ensemble des données collectées pour une durée de 5
                            ans renouvelable automatiquement si vous ne manifestez votre intérêt à ce que vos données ne
                            soient pas conservées.

                        </p>
                    </div>
                </div>
            </div>

            <div class="row py-2 px-0 px-sm-2">
                <div class="container col-12 col-lg-7 pl-0 px-4 px-sm-6">
                    <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                        <br><strong style="font-weight: bold!important">2. Utilisation des informations
                        </strong>
                    </h3><br>
                    <div style="line-height:200%;" class="">
                        <p>
                            Toutes les informations que nous recueillons auprès de vous peuvent être utilisées pour :
                        </p>
                        <ul>
                            <li>Personnaliser votre expérience utilisateur et répondre à vos besoins individuels</li>
                            <li>Améliorer notre application et notre site web pour continuellement s’adapter à vos attentes
                            </li>
                            <li>Améliorer le service client et vos besoins de prise en charge</li>
                            <li>Vous contacter par e-mail ou sms pour passer un message dans l’intérêt des deux parties</li>
                            <li>Administrer un jeu, une promotion, ou une enquête de satisfaction</li>
                            <li>Vous notifier de ce qui vous concerne ou peut vous intéresser</li>
                            <li>Régler les litiges entre acteurs utilisant l’application</li>
                            <li>Assurer la modération sur l’application</li>
                            <li>Vérifier la véracité et la conformité des comptes utilisateurs sur l’application</li>
                            <li>Permettre aux professionnels qui offrent des services et vendent des articles de proposer le
                                meilleur service et les meilleurs produits aux particuliers</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row py-2 px-0 px-sm-2">
                <div class="container col-12 col-lg-7 pl-0 px-4 px-sm-6">
                    <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                        <br><strong style="font-weight: bold!important">3. Confidentialité du commerce en ligne
                        </strong>
                    </h3><br>
                    <div style="line-height:200%;" class="">
                        <p>
                            Nous sommes les seuls propriétaires des informations recueillies sur ce site. Vos informations
                            personnelles ne seront pas vendues, échangées, transférées, ou données à une autre société pour
                            n’importe quelle raison, sans votre consentement, en dehors de ce qui est nécessaire pour
                            répondre à une demande et / ou une transaction, comme par exemple pour expédier une commande.
                            Les données bancaires ou mobiles money ne sont pas traitées par nous directement ; mais par
                            notre partenaire CinetPay dont nous utilisons l’API.

                        </p>
                    </div>
                </div>
            </div>

            <div class="row py-2 px-0 px-sm-2">
                <div class="container col-12 col-lg-7 pl-0 px-4 px-sm-6">
                    <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                        <br><strong style="font-weight: bold!important">4. Divulgation à des tiers
                        </strong>
                    </h3><br>
                    <div style="line-height:200%;" class="">
                        <p>
                            Nous ne vendons, n’échangeons et ne transférons pas vos informations personnelles identifiables
                            à des tiers. Cela ne comprend pas les tierce parties de confiance qui nous aident à exploiter
                            notre site Web ou à mener nos affaires, tant que ces parties conviennent de garder ces
                            informations confidentielles.
                            Nous pensons qu’il est nécessaire de partager des informations afin d’enquêter, de prévenir ou
                            de prendre des mesures concernant des activités illégales, fraudes présumées, situations
                            impliquant des menaces potentielles à la sécurité physique de toute personne, violations de nos
                            conditions d’utilisation, ou quand la loi nous y contraint.
                            Les informations non-privées, cependant, peuvent être fournies à d’autres parties pour le
                            marketing, la publicité, ou d’autres utilisations.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row py-2 px-0 px-sm-2">
                <div class="container col-12 col-lg-7 pl-0 px-4 px-sm-6">
                    <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                        <br><strong style="font-weight: bold!important">5. Protection des informations
                        </strong>
                    </h3><br>
                    <div style="line-height:200%;" class="">
                        <p>
                            Nous mettons en œuvre une variété de mesures de sécurité pour préserver la sécurité de vos
                            informations personnelles. Nous utilisons un cryptage à la pointe de la technologie pour
                            protéger les informations sensibles transmises en ligne. Nous protégeons également vos
                            informations hors ligne. Seuls les employés qui ont besoin d’effectuer un travail spécifique
                            (par exemple, la facturation ou le service à la clientèle) ont accès aux informations
                            personnelles identifiables. Les ordinateurs et serveurs utilisés pour stocker des informations
                            personnelles identifiables sont conservés dans un environnement sécurisé.
                            L’application web www.cible-app.com est hébergée par : PlanetHoster, dont le siège est situé à
                            l'adresse ci-après : PlanetHoster 4416 Louis-B.-Mayer Laval, Québec Canada H7P 0G1. L'hébergeur
                            peut être contacté au numéro de téléphone suivant : CA: +1 855 774-4678 / FR: +33 1 76 60 41 43.
                            Les données collectées et traitées par le site sont hébergées entre les Datalefts dans les pays
                            suivant(s) : Canada, France. L’application mobile est hébergée sur Play store et App Store.
                        </p>
                        <h6>Est-ce que nous utilisons des cookies ?</h6>
                        <p>Nos cookies améliorent l’accès à notre site et identifient les visiteurs réguliers. En outre, nos
                            cookies améliorent l’expérience d’utilisateur grâce au suivi et au ciblage de ses intérêts.
                            Cependant, cette utilisation des cookies n’est en aucune façon liée à des informations
                            personnelles identifiables sur notre site.</p>
                    </div>
                </div>
            </div>

            <div class="row py-2 px-0 px-sm-2">
                <div class="container col-12 col-lg-7 pl-0 px-4 px-sm-6">
                    <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                        <br><strong style="font-weight: bold!important">6. Se désabonner / Supprimer son compte
                        </strong>
                    </h3><br>
                    <div style="line-height:200%;" class="">
                        <p>
                            Nous utilisons l’adresse e-mail que vous fournissez pour vous envoyer des informations et mises
                            à jour relatives à votre commande, des nouvelles de l’entreprise de façon occasionnelle, des
                            informations sur des produits liés, etc. Si à n’importe quel moment vous souhaitez-vous
                            désinscrire et ne plus recevoir d’e-mails, des instructions de désabonnement détaillées sont
                            incluses en bas de chaque e-mail.
                            Vous pouvez aussi à tout moment supprimer votre compte depuis votre espace utilisateur. La
                            suppression des comptes prend effet à l’instant et ne nous donne plus accès à vos informations.
                            Vos données sont donc supprimées de la base de données également.
                        </p>
                    </div>
                </div>
            </div>



            <div class="row py-2 px-0 px-sm-2">
                <div class="container col-12 col-lg-7 pl-0 px-4 px-sm-6">
                    <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                        <br><strong style="font-weight: bold!important">7. Consentement
                        </strong>
                    </h3><br>
                    <div style="line-height:200%;" class="">
                        <p>
                            En utilisant notre site web et notre application, vous consentez à notre politique de
                            confidentialité.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row py-2 px-0 px-sm-2">
                <div class="container col-12 col-lg-7 pl-0 px-4 px-sm-6">
                    <h3 class=" text-uppercase titre2" style="font-weight: bold!important">
                        <br><strong style="font-weight: bold!important">8. Conditions de modification de la politique de
                            confidentialité
                        </strong>
                    </h3><br>
                    <div style="line-height:200%;" class="">
                        <p>
                            La présente politique de confidentialité peut être consultée à tout moment à l'adresse ci-après
                            indiquée : <a href="https://www.cible-app.com/policy">https://www.cible-app.com/policy</a> .
                            L'éditeur du site se réserve le droit de la modifier afin de garantir sa conformité avec le
                            droit en vigueur. Par conséquent, l'utilisateur est invité à venir consulter régulièrement cette
                            politique de confidentialité afin de se tenir informé des derniers changements qui lui seront
                            apportés.
                            Toutefois, en cas de modification substantielle de cette politique, l'utilisateur en sera
                            informé de la manière suivante : par mail à l'adresse communiquée par l'utilisateur.
                            Il est porté à la connaissance de l'utilisateur que la dernière mise à jour de la présente
                            politique de confidentialité est intervenue le 13 Avril 2023.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
