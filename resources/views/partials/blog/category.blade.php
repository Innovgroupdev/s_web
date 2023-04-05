@extends('partials.model')

@section('ref')
<title> les Meilleurs Articles Tendances sur {{$categorie->lib}}</title>
<meta name="description" content="Vous voulez tout savoir sur {{$categorie->lib}} ? Visitez cette page et retrouvez plusieurs articles qui vont vous intéresser. Des articles écrits avec humour, faciles à lire, et riches en informations pertinentes vous attendent.">
<link rel="canonical" href="{{url('/')}}/categorie/{{$categorie->urlTitre}}" />
<meta name="keywords" content="{{$categorie->lib}},{{$categorie->desc}}">
<meta name="author" content="DIGITAL INNOV GROUP">
<meta property="og:title" content="les Meilleurs Articles Tendances sur {{$categorie->lib}}">
<meta property="og:site_name" content="CIBLE">
<meta property="og:url" content="{{url('/')}}/categorie/{{$categorie->urlTitre}}">
<meta property="og:description" content="Vous voulez tout savoir sur {{$categorie->lib}} ? Visitez cette page et retrouvez plusieurs articles qui vont vous intéresser. Des articles écrits avec humour, faciles à lire, et riches en informations pertinentes vous attendent.">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset("images/logo-cible.jpg")}}">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@CIBLE">
<meta name="twitter:title" content="les Meilleurs Articles Tendances sur {{$categorie->lib}}">
<meta name="twitter:image" content="{{ asset("images/logo-cible.jpg")}}">
<meta name="twitter:description" content="Vous voulez tout savoir sur {{$categorie->lib}} ? Visitez cette page et retrouvez plusieurs articles qui vont vous intéresser. Des articles écrits avec humour, faciles à lire, et riches en informations pertinentes vous attendent.">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "CIBLE",
        "alternateName": "CIBLE-APP",
        "url": "{{url('/')}}/categorie/{{$categorie->urlTitre}}",
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
@endsection
@section('content')

<section class="iq-breadcrumb overview-block-pb">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="heading-title iq-breadcrumb-title iq-mtb-100">
                    <h1 class="title iq-tw-8 iq-font-white">{{$categorie->lib}}</h1>
                    <div class="white"></div>
                </div>

            </div>
            <div class="col-md-6 align-self-center">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" title="Page d'acceuil CIBLE"><i class="fa fa-home" aria-hidden="true"></i>CIBLE</a></li>
                    <li class="breadcrumb-item active">
                        <a href="{{route('blog')}}" title="blog CIBLE">BLOG</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{$categorie->lib}}
                    </li>

                </ul>
            </div>
        </div>

    </div>

</section>
<div class="site-content-contain">
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container">

                    <article id="post-1369" class="post-1369 page type-page status-publish hentry">
                        <div class="sf-content">
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1548676965548">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="appino-recentblog v3">
                                                <div class="row">
                                                    @foreach($catArticles as $categorie)
                                                    <div class="item col-12 col-md-6 col-lg-4">
                                                        <div class="iq-blog-box">

                                                            <div class="iq-blog-image clearfix mb-3" style="position : relative;height:220px;overflow:hidden">
                                                                <img src="{{ asset($categorie->img)}}" style="position : absolute;filter: blur(3px);top:0;left:0;z-index:0;transform:scale(1.2);height:auto!important" class="mx-auto w-100" alt="{{$categorie->libelle}}">
                                                                <img src="{{ asset($categorie->img)}}" class="h-100 mx-auto" style="z-index:1;position:relative;width:auto!important" alt="{{$categorie->libelle}}">
                                                            </div>
                                                            <div class="iq-blog-detail">
                                                                <div class="iq-blog-meta">
                                                                    <ul class="list-inline">

                                                                        <li class="list-inline-item">
                                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                            <span class="screen-reader-text">Posted
                                                                                on</span> <span><time class="entry-date published updated" datetime="{{$categorie->created_at}}">
                                                                                    {{$categorie->created_at}}
                                                                                </time></span>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <span><i class="fa fa-comment-o" aria-hidden="true"></i>
                                                                                {{ $categorie->getCommentairesValidCount() }}</span>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <span><i class="fa fa-eye" aria-hidden="true"></i>
                                                                                {{$categorie->nbvue}} </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <a href="/blog/{{$categorie->urlTitre}}" title="{{$categorie->libelle}}">
                                                                        <h2 class="h6">
                                                                            {{ substr($categorie->libelle, 0, 29)}}
                                                                            @if(strlen($categorie->libelle) >= 29)
                                                                            ...
                                                                            @endif
                                                                        </h2>
                                                                    </a>
                                                                </div>
                                                                <div class="blog-content">
                                                                    <p style="height: 65px;">
                                                                        <!-- {{$categorie->desc}}. -->
                                                                        {{ substr($categorie->desc, 0, 70)}}
                                                                        @if(strlen($categorie->desc) > 70)
                                                                        ...
                                                                        @endif
                                                                    </p>
                                                                </div>
                                                                <div class="blog-button"><a class="button" title="{{$categorie->libelle}}" href="/blog/{{$categorie->urlTitre}}">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
                        </div><!-- .sf-content -->
                    </article><!-- #post-## -->
                </div><!-- .container -->
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- #content -->

</div><!-- .site-content-contain -->
<style>
    img.category {
        height: 12rem
    }

    .iq-blog-detail .blog-title h2 {
        font-size: 22px;
        margin-bottom: 5px;
        color: #3d4b51;
    }

    h6 {
        font-size: 1em;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h6,
    .h5 {
        font-family: 'Roboto', sans-serif;
        font-weight: normal;
        color: #3d4b51;
        margin: 0;
        margin-bottom: 0px;
        -ms-word-wrap: break-word;
        word-wrap: break-word;
        line-height: 1.5em;
        font-weight: 600;
    }
</style>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EYBQCCQPFS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EYBQCCQPFS');
</script>
@endsection
