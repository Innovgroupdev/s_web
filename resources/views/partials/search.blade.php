@extends('partials.model')
@section('content')

<section class="iq-breadcrumb overview-block-pb">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="heading-title iq-breadcrumb-title iq-mtb-100">
                    <h2 class="title iq-tw-8 iq-font-white">Résultat de : {{$search}}</h2>
                    <div class="white"></div>
                </div>

            </div>
            <div class="col-md-6 align-self-center">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/blog')}}"><i class="fa fa-home" aria-hidden="true"></i>Tous les articles</a></li>

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
                                                @if($articles->count()> 0)
                                                <div class="row">
                                                    @foreach($articles as $article)
                                                    <div class="item col-12 col-md-6 col-lg-4">
                                                        <div class="iq-blog-box">
                                                            <div class="iq-blog-image clearfix">
                                                                <img src="{{ asset($article->img)}}" class="img-fluid center-block imgBlog" alt="blogimage0">
                                                            </div>
                                                            <div class="iq-blog-detail">
                                                                <div class="iq-blog-meta">
                                                                    <ul class="list-inline">

                                                                        <li class="list-inline-item">
                                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                            <span class="screen-reader-text">Posted
                                                                                on</span> <a href="blog/{{$article->id}}" rel="bookmark"><time class="entry-date published updated" datetime="{{$article->created_at}}">
                                                                                    {{$article->created_at}}
                                                                                </time></a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                                                                {{$article->commentaires()->count()}}</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href=""><i class="fa fa-eye" aria-hidden="true"></i>
                                                                                {{$article->nbvue}}</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <a href="/blog/{{$article->urlTitre}}">
                                                                        <h6>
                                                                            {{ substr($article->libelle, 0, 29)}}
                                                                            @if(strlen($article->libelle) >= 29)
                                                                            ...
                                                                            @endif
                                                                        </h6>
                                                                    </a>
                                                                </div>
                                                                <div class="blog-content">
                                                                    <p style="height: 65px;">
                                                                        <!-- {{$article->desc}}. -->
                                                                        {{ substr($article->desc, 0, 70)}}
                                                                        @if(strlen($article->desc) > 70)
                                                                        ...
                                                                        @endif
                                                                    </p>
                                                                </div>
                                                                <div class="blog-button">
                                                                    <a class="button" href="/blog/{{$article->urlTitre}}">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                @else
                                                <div class="row justify-content-center" style="min-height : 300px">
                                                    <h2 style="text-align: center">Aucun article trouvé</h2>
                                                </div>
                                                @endif
                                            </div>
                                            {{$articles->links()}}
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
</style>
@endsection