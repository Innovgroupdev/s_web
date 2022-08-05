@extends('partials.model')
@section('content')

<section class="iq-breadcrumb overview-block-pb"
			style="">
			<div class="container">

				<div class="row">
					<div class="col-md-6">
						<div class="heading-title iq-breadcrumb-title iq-mtb-100">
							<h2 class="title iq-tw-8 iq-font-white">Catégorie name</h2>
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
                            Catégorie name
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
                                                            @foreach($catArticles as $catArticle)
															<div class="col-lg-4 col-md-6 appino-space-bottom">
																<div class="iq-blog-box">
																	<div class="iq-blog-image clearfix ">
																		<img src="{{ asset("$catArticle->img")}}"
																			class="img-fluid center-block  category"
																			alt="blogimage0">
																	</div>
																	<div class="iq-blog-detail">
																		<div class="iq-blog-meta">
																			<ul class="list-inline">

																				<li class="list-inline-item">
																					<i class="fa fa-calendar"
																						aria-hidden="true"></i>
																					<span
																						class="screen-reader-text">Publié
																						le</span> <a
																						href="{{route('detail')}}"
																						rel="bookmark"><time
																							class="entry-date published updated"
																							datetime="{{$catArticle->created_at}}">
                                                                                            {{$catArticle->created_at}}
                                                                                        </time></a>
																				</li>
																				<li class="list-inline-item">
																					<a
																						href="blog/{{$catArticle->id}}"><i
																							class="fa fa-comment-o"
																							aria-hidden="true"></i>
																						{{$catArticle->nbvue}}</a>
																				</li>
																			</ul>
																		</div>
																		<div class="blog-title">
																			<a
																				href="blog/{{$catArticle->id}}">
																				<h5>{{$catArticle->lib}}</h5>
																			</a>
																		</div>
																		<div class="blog-content">
																			<p>{{$catArticle->desc}}.</p>
																		</div>
																		<div class="blog-button"><a
																				class="button pull-left"
																				href="blog/{{$catArticle->id}}">Voir plus <i class="fa fa-angle-right"
																					aria-hidden="true"></i></a>
																		</div>
																	</div>
																</div>
															</div>
                                                            @endforeach
														</div>
													</div>
													<ul class='page-numbers'>
														<li><span aria-current="page"
																class="page-numbers current">1</span></li>
														<li><a class="page-numbers" href="page/2/index.html">2</a></li>
														<li><a class="next page-numbers" href="page/2/index.html">Next
																page</a></li>
													</ul>
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
    img.category{
        height : 12rem
    }
  </style>
@endsection
