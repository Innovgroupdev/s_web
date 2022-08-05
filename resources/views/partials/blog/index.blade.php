@extends('partials.model')
@section('content')

<section class="iq-breadcrumb overview-block-pb" style="">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="heading-title iq-breadcrumb-title iq-mtb-100">
                    <h2 class="title iq-tw-8 iq-font-white">Blog</h2>
                    <div class="white"></div>

                </div>

            </div>
            <div class="col-md-6 align-self-center">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i>CIBLE</a></li>
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
                                @foreach($articles as $articles)
                                <div class="iq-page-blog">
                                    <div class="iq-blog-box">

                                        <div class="iq-blog-image">
                                            <img width="1200" height="550" style="max-height:600px" src="{{asset($articles->img)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
                                        </div>

                                        <div class="iq-blog-detail">

                                            <div class="iq-blog-meta">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">

                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span class="screen-reader-text">Posted on</span> <a href="../2018/12/31/construction-industry-3/index.html" rel="bookmark"><time class="entry-date published updated" datetime="{{$articles->created_at}}">{{$articles->created_at}}</time></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                                            0 </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href=""><i class="fa fa-eye" aria-hidden="true"></i>
                                                            {{$articles->nbvue}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-title">
                                                <h5 class="entry-title">
                                                    <a href="#">
                                                        {{$articles->libelle}} </a>
                                                </h5>
                                            </div>

                                            <div class="blog-content">
                                                <p>{{$articles->desc}}</p>
                                            </div>

                                            <div class="blog-button">
                                                <a class="button pull-left" href="blog/{{$articles->id}}">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </article><!-- #post-## -->
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
<!-- === back-to-top === -->
<div id="back-to-top">
    <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
</div>
<!-- === back-to-top End === -->


@endsection
