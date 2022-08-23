@extends('partials.model')


@section('ref')
<title> {{$articles->libelle}}</title>
<meta name="description" content="{{$articles->desc}}">
<link rel="canonical" href="{{url('/')}}/blog/{{$articles->urlTitre}}" />
<meta name="keywords" content="Vous voulez tout savoir sur {{$articles->libelle}} ? Visitez cette page et retrouvez plusieurs articles qui vont vous intéresser. Des articles écrits avec humour, faciles à lire, et riches en informations pertinentes vous attendent.">
<meta name="author" content="DIGITAL INNOV GROUP">
<meta property="og:title" content="{{$articles->libelle}}">
<meta property="og:site_name" content="CIBLE">
<meta property="og:url" content="{{url('/')}}/blog/{{$articles->urlTitre}}">
<meta property="og:description" content="{{$articles->desc}}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset($articles->img)}}">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@CIBLE">
<meta name="twitter:title" content="{{$articles->libelle}}">
<meta name="twitter:image" content="{{ asset($articles->img)}}">
<meta name="twitter:description" content="{{$articles->desc}}">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "CIBLE",
        "alternateName": "CIBLE-APP",
        "url": "{{url('/')}}/blog/{{$articles->urlTitre}}",
        "logo": "{{ asset($articles->img)}}",
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<section class="iq-breadcrumb overview-block-pb">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="heading-title iq-breadcrumb-title iq-mtb-100">
                    <h2 class="title iq-tw-8 iq-font-white">{{$articles->libelle}}</h2>
                    <div class="white"></div>
                </div>

            </div>
            <div class="col-md-6 align-self-center">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" title="Page d'acceuil de CIBLE"><i class="fa fa-home" aria-hidden="true"></i>CIBLE</a></li>
                    <li class="breadcrumb-item active">
                        <a href="{{route('blog')}}" title="Blog de CIBLE">BLOG</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{$articles->categorie->lib}}
                    </li>
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
                        <div class="col-md-8 col-sm-12">

                            <article id="post-882" class="post-882 post type-post status-publish format-image has-post-thumbnail hentry category-technology tag-security post_format-post-format-image">
                                <div class="iq-page-blog">
                                    <div class="iq-blog-box">

                                        <!-- <div class="iq-blog-image">
                                                    <img width="1200" height="550"
                                                    style="max-height:600px"
                                                        src="{{asset($articles->img)}}"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="{{$articles->libelle}}" loading="lazy"
                                                        sizes="100vw" />
                                                </div> -->
                                        <div class="iq-blog-image clearfix mb-3" style="position : relative;height:600px;overflow:hidden">
                                            <img src="{{ asset($articles->img)}}" style="position : absolute;filter: blur(3px);top:0;left:0;z-index:0;transform:scale(1.2);height:auto!important" class="mx-auto w-100" alt="{{$articles->libelle}}">
                                            <img src="{{ asset($articles->img)}}" class="h-100 mx-auto" style="z-index:1;position:relative;width:auto!important" alt="{{$articles->libelle}}">
                                        </div>

                                        <div class="iq-blog-detail mt-4">

                                            <div class="iq-blog-meta">
                                                <ul class="list-inline">
                                                    <!-- <li class="list-inline-item">
																<a href="../author/admin/index.html" class="iq-user">
																	<i class="fa fa-user-circle" aria-hidden="true"></i>
																	admin </a>
															</li> -->
                                                    <li class="list-inline-item">

                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span class="screen-reader-text">Posted on</span> <span><time class="entry-date published updated" datetime="{{$articles->created_at}}">{{$articles->created_at}}</time></span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span><i class="fa fa-comment-o" aria-hidden="true"></i>
                                                            @php
                                                            $j = 0;
                                                            @endphp

                                                            @foreach($articleCommentaires as $articleCommentaire)
                                                            @if($articleCommentaire->is_valid)
                                                            @php
                                                            $j ++;
                                                            @endphp
                                                            @endif
                                                            @endforeach
                                                            {{ $j }}
                                                        </span>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <span href=""><i class="fa fa-eye" aria-hidden="true"></i>
                                                            {{$articles->nbvue}} </span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- <div class="blog-content mt-4">
                                                        <strong>{{$articles->desc}}</strong>
                                                    </div> -->

                                            <div class="blog-content mt-4" style="overflow:auto">
                                                {!!$articles->contenu !!}
                                            </div>

                                           

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex  justify-content-end pt-3 pb-3">
                          
                            <div class="px-3 py-2  mr-3 my-auto share1" style="border-radius:50%;background-color:#1E83C7;width:max-content">
                                <a href="https://twitter.com/intent/tweet?url={{url('/')}}/blog/{{$articles->urlTitre}}" target="blank" title=" Partager sur Twitter">
                                    <i class="fa fa-twitter my-auto" style="color:#fff;font-size:1.2em"></i>
                                </a>
                            </div>
                            <div class="px-3 py-2 mr-3 my-auto share1" style="border-radius:50%;background-color:#06047E;width:max-content">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/blog/{{$articles->urlTitre}}"  target="blank" title=" Partager sur Facebook">
                                    <i class="fa fa-facebook-f my-auto " style="color:#fff;font-size:1.2em"></i>
                                </a>
                            </div>
                            <div class="px-3 py-2  mr-3 my-auto share1" style="border-radius:50%;background-color:#068317;width:max-content">
                                <a href="https://api.whatsapp.com/send?text={{url('/')}}/blog/{{$articles->urlTitre}} " data-action="share/whatsapp/share" target="blank" title="Partager sur Whatsapp">
                                    <i class="fa fa-whatsapp my-auto " style="color:#fff;font-size:1.2em"></i>
                                </a>
                            </div>
                            <div class="px-3 py-2 mr-3 my-auto share1" style="border-radius:50%;background-color:#0D5D92;width:max-content">

                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{url('/')}}/blog/{{$articles->urlTitre}}" target="blank" title=" Partager sur Linkedin">
                                    <i class="fa fa-linkedin my-auto " style="color:#fff;font-size:1.2em"></i>
                                </a>
                            </div>

                        </div>
                                <!-- Comments areas -->
                                <div class="container-fluid">
                                    @if($articleCommentaires->count() > 0)
                                    @php
                                    $i = 0;
                                    @endphp

                                    @foreach($articleCommentaires as $articleCommentaire)

                                    @if( $i != 0)
                                    <hr>
                                    @endif


                                    @php
                                    $i ++;
                                    @endphp
                                    @if($articleCommentaire->is_valid)
                                    <div style="position:absolute;margin-top:-6rem;" id="c{{$articleCommentaire->id}}"></div>
                                    <div class="item-comment-area comtainer-fluid mt-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="{{asset('images/cible-app-avatar.png')}}" style="border-radius:50%" alt="" width="50" height="50">
                                                </div>
                                                <div class="name ml-3 mt-2">
                                                    <h5 class="mb-0 pb-0" style="line-height: 1rem"> {{$articleCommentaire->name}}</h3>
                                                        <!-- <span class="small mt-0" style="line-height: .5rem">{{$articleCommentaire->email}}</span> -->
                                                </div>
                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                        <div class="comment-text">
                                            <p class="text-secondary mt-3 ">
                                                <span class="m-0 me-2 text-info" style="font-size:1.75rem;color:gray"> &#128630;</span>
                                                {{$articleCommentaire->description}}
                                            </p>
                                            <p class="small text-right text-secondary">
                                                {{$articleCommentaire->created_at}}
                                            </p>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endif
                                </div>
                                <!-- End Comments areas -->
                                <div id="comments" class="comments-area">
                                    <div id="respond" class="comment-respond">
                                        <h3 id="reply-title" class="comment-reply-title">Laisser un commentaire </h3>

                                        <form id="formComment">
                                            @csrf
                                            <p class="comment-notes"><span id="email-notes">
                                                    Votre adresse email ne sera pas publiée.
                                                </span> ( Les champs requis sont indiqués <span class="required">*</span>)
                                            </p>
                                            <p class="comment-form-comment"><label for="comment">Commentaire</label>
                                                <textarea id="desc" name="desc" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                                            </p>
                                            <p class="comment-form-author w-50 mx-0 pr-2">
                                                <label for="author">Nom & prénoms <span class="required">*</span></label>
                                                <input id="name" type="text" name="name" value="" size="30" maxlength="245" required='required' />
                                            </p>
                                            <p class="comment-form-email w-50 mx-0">
                                                <label for="email">Email <span class="required">*</span>
                                                </label>
                                                <input id="email" name="email" type="email" value="" size="30" maxlength="100" required='required' />
                                            </p>
                                            <span id="error_comment"></span>
                                            <input value="{{$articles->id}}" type="hidden" id="num" />
                                            <input type="submit" class="submit w-50 mx-auto" value="Poster mon commentaire" />
                                            <span id="saveSuccess"></span>
                                        </form>
                                    </div><!-- #respond -->
                                </div><!-- #comments -->

                            </article><!-- #post-## -->
                            <!-- Button trigger modal -->


                            <!-- Modal -->

                        </div>

                        <div class="col-md-4 col-sm-12">
                            @include('partials.blog.aside')
                        </div>
                    </div>
                </div><!-- #primary -->
            </main><!-- #main -->
        </div><!-- .container -->
    </div><!-- #content -->
    <style>
         .share1:hover{
            position:relative;
            top:-.5rem
        }
        .share1{
            transition:1s ease-in-out
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        setTimeout(() => {
            setCookieValueToInput('nom', 'name');
            setCookieValueToInput('email', 'email');
        }, 10000);
        const formComment = document.querySelector("#formComment");

        if (formComment) {
            formComment.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(e.target)
                console.log(formData.entries())

                let num = $("#num").val();
                let name = $("#name").val();
                let email = $("#email").val();
                let description = $("#desc").val();
                let _token = $("input[name=_token]").val();

                console.log(name, email, description, num)
                //debugger
                $.ajax({
                    url: "{{route('commentaire-enregistre')}}",
                    type: "POST",
                    data: {
                        email: email,
                        name: name,
                        description: description,
                        article_id: num,
                        _token: _token
                    },
                    beforeSend: function() {
                        let timerInterval
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

                        setCookie('nom', name, 180);
                        setCookie('email', email, 180);

                    },
                    success: function(response) {
                        if (response) {
                            // $('#formComment')[0].reset();
                            $("#desc").val("");

                            Swal.fire({
                                icon: 'success',
                                title: 'Commentaire publié avec succès',
                                text: "Votre commentaire sera prise en compte après validation de l'administration",
                                showConfirmButton: true,
                            })
                            $('#error_comment').hide();
                            $('#formComment')[0].hide();
                            $('#saveSuccess').html('<label> Commentaire enregistré avec succès</label>')

                        }
                    },
                    error: function() {
                        $('#error_comment').html('<label> Veuillez revoir les données saisies</label>')
                        Swal.fire({
                            icon: 'error',
                            title: 'Erreur !',
                            text: 'Le formulaire contient une ou plusieurs erreurs . \n Veuillez revérifier!',
                        })
                    }

                });
            })
        }
    </script>

    <script>


    </script>
    @endsection