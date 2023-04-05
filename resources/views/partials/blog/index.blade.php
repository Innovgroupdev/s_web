@extends('partials.model')

@section('ref')
<title> Meilleurs Blog Evénementiel : Opportunités – Annonces – Conseils</title>
<meta name="description" content="Trouvez les articles sur vos artistes préférés, les célébrités tendances. Des partages d’astuces événementielles, des annonces d’événements gratuits, des articles sur les lieux (meilleurs endroits) à visiter dans chaque pays, les opportunités dans l’événementiel en Afrique. Les lieux pour organiser son événement et les organisateurs ou agences événementielles à contacter.">
<link rel="canonical" href="{{url('/blog')}}" />
<meta name="keywords" content="l’événementiel,cible,cible-app,fêtes,Concerts,festivals,formations,séminaires,cinéma,conférences,salons,foires,congrès,concours,affaires,comédie,Opportunités,Annonces,Conseils">
<meta name="author" content="DIGITAL INNOV GROUP">
<meta property="og:title" content="Meilleurs Blog Evénementiel : Opportunités – Annonces – Conseils">
<meta property="og:site_name" content="CIBLE">
<meta property="og:url" content="{{url('/blog')}}">
<meta property="og:description" content="Trouvez les articles sur vos artistes préférés, les célébrités tendances. Des partages d’astuces événementielles, des annonces d’événements gratuits, des articles sur les lieux (meilleurs endroits) à visiter dans chaque pays, les opportunités dans l’événementiel en Afrique. Les lieux pour organiser son événement et les organisateurs ou agences événementielles à contacter.">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset("images/logo-cible.jpg")}}">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@CIBLE">
<meta name="twitter:title" content="Meilleurs Blog Evénementiel : Opportunités – Annonces – Conseils">
<meta name="twitter:image" content="{{ asset("images/logo-cible.jpg")}}">
<meta name="twitter:description" content="Trouvez les articles sur vos artistes préférés, les célébrités tendances. Des partages d’astuces événementielles, des annonces d’événements gratuits, des articles sur les lieux (meilleurs endroits) à visiter dans chaque pays, les opportunités dans l’événementiel en Afrique. Les lieux pour organiser son événement et les organisateurs ou agences événementielles à contacter.">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "CIBLE",
        "alternateName": "CIBLE-APP",
        "url": "{{url('/blog')}}",
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
                    <h1 class="title iq-tw-8 iq-font-white">Blog</h1>
                    <div class="white"></div>

                </div>

            </div>
            <div class="col-md-6 align-self-center">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" title="Page d'acceuil  de CIBLE"><i class="fa fa-home" aria-hidden="true"></i>CIBLE</a></li>
                    <li class="breadcrumb-item active">BLOG</li>
                </ul>
            </div>
        </div>

    </div>

</section>
<div class="site-content-contain blog">
    <div id="content" class="site-content">

        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-12">
                            <article id="post-879" class="post-879 post type-post status-publish format-image has-post-thumbnail hentry category-photography tag-picture post_format-post-format-image">
                                @foreach($articles as $article)
                                <div class="iq-page-blog">
                                    <div class="iq-blog-box">

                                        <!-- <div class="iq-blog-image">
                                            <img width="1200" height="550" style="max-height:600px" src="{{asset($article->img)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
                                        </div> -->

                                        <div class="iq-blog-image clearfix mb-3" style="position : relative;height:400px;overflow:hidden">
                                            <img src="{{ asset($article->img)}}" style="position : absolute;filter: blur(3px);top:0;left:0;z-index:0;transform:scale(1.2);min-height : 100%" class="center-block w-100" alt="{{$article->libelle}}">
                                            <img src="{{ asset($article->img)}}" class="center-block h-100 mx-auto" style="width: auto;z-index:1;position:relative" alt="{{$article->libelle}}">
                                        </div>
                                        <div class="iq-blog-detail">

                                            <div class="iq-blog-meta">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">

                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span class="screen-reader-text">Posted on</span> <span><time class="entry-date published updated" datetime="{{$article->created_at}}">{{$article->created_at}}</time></span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span><i class="fa fa-comment-o" aria-hidden="true"></i>

                                                            {{ $article->getCommentairesValidCount() }}
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i>
                                                            {{$article->nbvue}}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-title">
                                                <h5 class="entry-title">
                                                    <a href="/blog/{{$article->urlTitre}}" title="{{$article->libelle}}">
                                                        {{$article->libelle}} </a>
                                                </h5>
                                            </div>

                                            <div class="blog-content">
                                                <p>
                                                    {{ substr($article->desc, 0, 250)}}
                                                    @if(strlen($article->desc) > 250)
                                                    ...
                                                    @endif
                                                </p>
                                            </div>

                                            <div class="blog-button">
                                                <a class="button pull-left" title="{{$article->libelle}}" href="/blog/{{$article->urlTitre}}">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </article><!-- #post-## -->
                            {{$articles->links()}}

                        </div>

                        <div class="col-lg-4 col-md-5 col-sm-12">
                            @include('partials.blog.aside')
                        </div>
                    </div><!-- #row -->


                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- #content -->

</div><!-- .site-content-contain -->
</div><!-- #page -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EYBQCCQPFS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EYBQCCQPFS');
</script>
@endsection