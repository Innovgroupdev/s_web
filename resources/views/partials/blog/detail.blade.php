@extends('partials.model')
@section('content')
<section class="iq-breadcrumb overview-block-pb"
            style="">
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
						    	<li class="breadcrumb-item"><a href="{{url('/')}}"><i
										class="fa fa-home" aria-hidden="true"></i>CIBLE</a></li>
							<li class="breadcrumb-item active">
                                <a href="{{route('blog')}}">BLOG</a></li>
                            <li class="breadcrumb-item active">
                                Categorie </li>
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

                                    <article id="post-882"
                                        class="post-882 post type-post status-publish format-image has-post-thumbnail hentry category-technology tag-security post_format-post-format-image">
                                        <div class="iq-page-blog">
                                            <div class="iq-blog-box">

                                                <div class="iq-blog-image">
                                                    <img width="1200" height="550"
                                                        src="{{asset($articles->img)}}"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="" loading="lazy"
                                                        sizes="100vw" />
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
																<span class="screen-reader-text">Posted on</span> <a

																	rel="bookmark"><time
																		class="entry-date published updated"
																		datetime="{{$articles->created_at}}">{{$articles->created_at}}</time></a>
															</li>
															<li class="list-inline-item">
																<a href="javascript:void(0)"><i class="fa fa-comment-o"
																		aria-hidden="true"></i>
																	0 </a>
															</li>

															<li class="list-inline-item">
																<a href=""><i class="fa fa-eye"
																		aria-hidden="true"></i>
																	0 </a>
															</li>
														</ul>
                                                    </div>

                                                    <div class="blog-content mt-4">
                                                        <p>{{$articles->desc}}</p>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                        <div id="comments" class="comments-area">
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">Laisser un commentaire <small><a
                                                            rel="nofollow" id="cancel-comment-reply-link"
                                                            href="index.html#respond" style="display:none;">Cancel
                                                            reply</a></small></h3>

                                                {!! Form::open(['route' => 'commentaires.store']) !!}

                                                    <p class="comment-notes"><span id="email-notes">
                                                        Votre adresse email ne sera pas publiée.
                                                        </span> ( Les champs requis sont indiqués <span class="required">*</span>)
                                                        </p>
                                                    <p class="comment-form-comment"><label for="comment">Commentaire</label>
                                                        <textarea id="comment" name="desc" cols="45" rows="8"
                                                            maxlength="65525" required="required">

                                                        </textarea>
                                                    </p>
                                                    <p class="comment-form-author w-50 mx-0 pr-2">
                                                        <label for="author">Nom & prénoms <span
                                                                class="required">*</span></label>
                                                        <input id="author"
                                                            name="name" type="text" value="" size="30" maxlength="245"
                                                            required='required' />
                                                    </p>
                                                    <p class="comment-form-email w-50 mx-0">
                                                        <label for="email">Email <span
                                                                class="required">*</span>
                                                        </label>
                                                        <input id="email"
                                                            name="email" type="email" value="" size="30" maxlength="100"
                                                            aria-describedby="email-notes" required='required' />
                                                    </p>
                                                        <input name="submit" type="submit"
                                                               id="submit" class="submit" value="Poster mon commentaire" />
                                                    <input type="hidden" id="ak_js" name="ak_js"
                                                        value="18" />
                                                    <textarea name="ak_hp_textarea" cols="45" rows="8"
                                                        maxlength="100" style="display: none !important;">
                                                    </textarea>
                                                {!! Form::close() !!}
                                            </div><!-- #respond -->
                                        </div><!-- #comments -->
                                    </article><!-- #post-## -->
                                    <!-- Button trigger modal -->


                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="border: none;">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body text-center pb-0 ">
                                                    <div class="mx-auto my-3 text-center d-flex justify-content-center align-items-center" style="border: 2px solid orangered;width : 100px;height:100px;border-radius: 50%;align-items: center;">
                                                        <p style="font-weight:600;font-size:3rem;color : orangered" class="m-0">
                                                            !
                                                        </p>
                                                    </div>
                                                <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 1.5rem;">Votre Commentaire à été envoyé !</h5>
                                                <p class="mb-0 pb-0">
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam a ex blanditiis, magnam nihil atque in quo doloribus aut esse.
                                                </p>
                                                </div>
                                                <div class="modal-footer justify-content-center m-0 border-none" style="border: none;">
                                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                                <button type="button" class="btn btn-primary">D'accord</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                @include('partials.blog.aside')
                                </div>
                            </div>
                        </div><!-- #primary -->
                    </main><!-- #main -->
                </div><!-- .container -->
            </div><!-- #content -->

@endsection
