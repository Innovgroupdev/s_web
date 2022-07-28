@extends('partials.model')
@section('content')

		<section class="iq-breadcrumb overview-block-pb"
			style="">
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
							<li class="breadcrumb-item"><a href="{{url('/')}}"><i
										class="fa fa-home" aria-hidden="true"></i>CIBLE</a></li>
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
									<article id="post-882"
										class="post-882 post type-post status-publish format-image has-post-thumbnail hentry category-technology tag-security post_format-post-format-image">
										<div class="iq-page-blog">
											<div class="iq-blog-box">

												<div class="iq-blog-image">
													<img width="1200" height="550"
														src="{{asset('wp-content/uploads/sites/9/2018/12/blog-1-26-1.jpg')}}"
														class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
														alt="" loading="lazy"
														sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
												</div>

												<div class="iq-blog-detail">

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
																	href="../2018/12/31/life-lack-meaning-3/index.html"
																	rel="bookmark"><time
																		class="entry-date published updated"
																		datetime="2018-12-31T06:46:02+00:00">December
																		31, 2018</time></a>
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
													<div class="blog-title">
														<h5 class="entry-title">
															<a href="{{route('detail')}}">
																Life Lack Meaning </a>
														</h5>
													</div>

													<div class="blog-content">
														<p>Lorem Ipsum is simply dummy text of the printing and
															typesetting industry.</p>
													</div>


													<div class="blog-button">
														<a class="button pull-left"
															href="{{route('detail')}}">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
													</div>


												</div>
											</div>
										</div>
									</article><!-- #post-## -->
									<article id="post-879"
										class="post-879 post type-post status-publish format-image has-post-thumbnail hentry category-photography tag-picture post_format-post-format-image">
										<div class="iq-page-blog">
											<div class="iq-blog-box">

												<div class="iq-blog-image">
													<img width="1200" height="550"
														src="../wp-content/uploads/sites/9/2018/12/blog-2-26-1.jpg"
														class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
														alt="" loading="lazy"
														srcset="https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-2-26-1.jpg 1200w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-2-26-1-300x138.jpg 300w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-2-26-1-1024x469.jpg 1024w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-2-26-1-768x352.jpg 768w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-2-26-1-600x275.jpg 600w"
														sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
												</div>

												<div class="iq-blog-detail">

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
																	href="../2018/12/31/construction-industry-3/index.html"
																	rel="bookmark"><time
																		class="entry-date published updated"
																		datetime="2018-12-31T06:44:49+00:00">December
																		31, 2018</time></a>
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
													<div class="blog-title">
														<h5 class="entry-title">
															<a href="./detailArticle.html">
																Construction industry </a>
														</h5>
													</div>

													<div class="blog-content">
														<p>Lorem Ipsum is simply dummy text of the printing and
															typesetting industry.</p>
													</div>


													<div class="blog-button">
														<a class="button pull-left"
															href="../2018/12/31/construction-industry-3/index.html">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
													</div>


												</div>
											</div>
										</div>
									</article><!-- #post-## -->
									<article id="post-876"
										class="post-876 post type-post status-publish format-image has-post-thumbnail hentry category-fashion tag-style post_format-post-format-image">
										<div class="iq-page-blog">
											<div class="iq-blog-box">

												<div class="iq-blog-image">
													<img width="1200" height="550"
														src="../wp-content/uploads/sites/9/2018/12/blog-3-26-1.jpg"
														class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
														alt="" loading="lazy"
														srcset="https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-3-26-1.jpg 1200w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-3-26-1-300x138.jpg 300w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-3-26-1-1024x469.jpg 1024w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-3-26-1-768x352.jpg 768w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-3-26-1-600x275.jpg 600w"
														sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
												</div>

												<div class="iq-blog-detail">

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
																	href="../2018/12/31/build-construction-industry-2/index.html"
																	rel="bookmark"><time
																		class="entry-date published updated"
																		datetime="2018-12-31T06:43:56+00:00">December
																		31, 2018</time></a>
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
													<div class="blog-title">
														<h5 class="entry-title">
															<a
																href="../2018/12/31/build-construction-industry-2/index.html">
																Build Construction </a>
														</h5>
													</div>

													<div class="blog-content">
														<p>Lorem Ipsum is simply dummy text of the printing and
															typesetting industry.</p>
													</div>


													<div class="blog-button">
														<a class="button pull-left"
															href="../2018/12/31/build-construction-industry-2/index.html">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
													</div>


												</div>
											</div>
										</div>
									</article><!-- #post-## -->
									<article id="post-1640"
										class="post-1640 post type-post status-publish format-image has-post-thumbnail hentry category-builder tag-building post_format-post-format-image">
										<div class="iq-page-blog">
											<div class="iq-blog-box">

												<div class="iq-blog-image">
													<img width="1200" height="550"
														src="../wp-content/uploads/sites/9/2018/12/blog-4-26-1.jpg"
														class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
														alt="" loading="lazy"
														srcset="https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-4-26-1.jpg 1200w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-4-26-1-300x138.jpg 300w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-4-26-1-1024x469.jpg 1024w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-4-26-1-768x352.jpg 768w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-4-26-1-600x275.jpg 600w"
														sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
												</div>

												<div class="iq-blog-detail">

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
																	href="../2018/12/08/construction-industry-2/index.html"
																	rel="bookmark"><time
																		class="entry-date published updated"
																		datetime="2018-12-08T11:21:41+00:00">December 8,
																		2018</time></a>
															</li>
															<li class="list-inline-item">
																<a
																	href="../2018/12/08/construction-industry-2/index.html#comments"><i
																		class="fa fa-comment-o" aria-hidden="true"></i>
																	3 </a>
															</li>
														</ul>
													</div>
													<div class="blog-title">
														<h5 class="entry-title">
															<a href="../2018/12/08/construction-industry-2/index.html">
																Construction industry </a>
														</h5>
													</div>

													<div class="blog-content">
														<p>Lorem Ipsum is simply dummy text of the printing and
															typesetting industry.</p>
													</div>


													<div class="blog-button">
														<a class="button pull-left"
															href="../2018/12/08/construction-industry-2/index.html">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
													</div>


												</div>
											</div>
										</div>
									</article><!-- #post-## -->
									<article id="post-1624"
										class="post-1624 post type-post status-publish format-image has-post-thumbnail hentry category-bricks tag-doors post_format-post-format-image">
										<div class="iq-page-blog">
											<div class="iq-blog-box">

												<div class="iq-blog-image">
													<img width="1200" height="550"
														src="../wp-content/uploads/sites/9/2018/12/blog-5-26-1.jpg"
														class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
														alt="" loading="lazy"
														srcset="https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-5-26-1.jpg 1200w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-5-26-1-300x138.jpg 300w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-5-26-1-1024x469.jpg 1024w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-5-26-1-768x352.jpg 768w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-5-26-1-600x275.jpg 600w"
														sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
												</div>

												<div class="iq-blog-detail">

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
																	href="../2018/12/08/life-lack-meaning-2/index.html"
																	rel="bookmark"><time
																		class="entry-date published updated"
																		datetime="2018-12-08T11:20:30+00:00">December 8,
																		2018</time></a>
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
													<div class="blog-title">
														<h5 class="entry-title">
															<a href="../2018/12/08/life-lack-meaning-2/index.html">
																Life Lack Meaning </a>
														</h5>
													</div>

													<div class="blog-content">
														<p>Lorem Ipsum is simply dummy text of the printing and
															typesetting industry.</p>
													</div>


													<div class="blog-button">
														<a class="button pull-left"
															href="../2018/12/08/life-lack-meaning-2/index.html">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
													</div>


												</div>
											</div>
										</div>
									</article><!-- #post-## -->
									<article id="post-1623"
										class="post-1623 post type-post status-publish format-image has-post-thumbnail hentry category-html tag-html5 post_format-post-format-image">
										<div class="iq-page-blog">
											<div class="iq-blog-box">

												<div class="iq-blog-image">
													<img width="1200" height="550"
														src="../wp-content/uploads/sites/9/2018/12/blog-6-3-1.jpg"
														class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
														alt="" loading="lazy"
														srcset="https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-6-3-1.jpg 1200w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-6-3-1-300x138.jpg 300w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-6-3-1-1024x469.jpg 1024w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-6-3-1-768x352.jpg 768w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-6-3-1-600x275.jpg 600w"
														sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
												</div>

												<div class="iq-blog-detail">

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
																	href="../2018/12/08/life-lack-meaning/index.html"
																	rel="bookmark"><time
																		class="entry-date published updated"
																		datetime="2018-12-08T11:19:45+00:00">December 8,
																		2018</time></a>
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
													<div class="blog-title">
														<h5 class="entry-title">
															<a href="../2018/12/08/life-lack-meaning/index.html">
																Life Lack Meaning </a>
														</h5>
													</div>

													<div class="blog-content">
														<p>Lorem Ipsum is simply dummy text of the printing and
															typesetting industry.</p>
													</div>


													<div class="blog-button">
														<a class="button pull-left"
															href="../2018/12/08/life-lack-meaning/index.html">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
													</div>


												</div>
											</div>
										</div>
									</article><!-- #post-## -->
									<article id="post-1622"
										class="post-1622 post type-post status-publish format-image has-post-thumbnail hentry category-business tag-carpentry post_format-post-format-image">
										<div class="iq-page-blog">
											<div class="iq-blog-box">

												<div class="iq-blog-image">
													<img width="1200" height="550"
														src="../wp-content/uploads/sites/9/2018/12/blog-1-26-1.jpg"
														class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
														alt="" loading="lazy"
														srcset="https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-1-26-1.jpg 1200w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-1-26-1-300x138.jpg 300w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-1-26-1-1024x469.jpg 1024w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-1-26-1-768x352.jpg 768w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-1-26-1-600x275.jpg 600w"
														sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
												</div>

												<div class="iq-blog-detail">

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
																	href="../2018/12/08/construction-industry/index.html"
																	rel="bookmark"><time
																		class="entry-date published updated"
																		datetime="2018-12-08T11:18:10+00:00">December 8,
																		2018</time></a>
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
													<div class="blog-title">
														<h5 class="entry-title">
															<a href="../2018/12/08/construction-industry/index.html">
																Construction industry </a>
														</h5>
													</div>

													<div class="blog-content">
														<p>Lorem Ipsum is simply dummy text of the printing and
															typesetting industry.</p>
													</div>


													<div class="blog-button">
														<a class="button pull-left"
															href="../2018/12/08/construction-industry/index.html">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
													</div>


												</div>
											</div>
										</div>
									</article><!-- #post-## -->
									<article id="post-1621"
										class="post-1621 post type-post status-publish format-image has-post-thumbnail hentry category-creative tag-jquery post_format-post-format-image">
										<div class="iq-page-blog">
											<div class="iq-blog-box">

												<div class="iq-blog-image">
													<img width="1200" height="550"
														src="../wp-content/uploads/sites/9/2018/12/blog-2-26-1.jpg"
														class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
														alt="" loading="lazy"
														srcset="https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-2-26-1.jpg 1200w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-2-26-1-300x138.jpg 300w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-2-26-1-1024x469.jpg 1024w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-2-26-1-768x352.jpg 768w, https://wordpress.iqonic.design/appino/particles-3/wp-content/uploads/sites/9/2018/12/blog-2-26-1-600x275.jpg 600w"
														sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
												</div>

												<div class="iq-blog-detail">

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
																	href="../2018/12/08/build-construction-industry/index.html"
																	rel="bookmark"><time
																		class="entry-date published updated"
																		datetime="2018-12-08T11:17:04+00:00">December 8,
																		2018</time></a>
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
													<div class="blog-title">
														<h5 class="entry-title">
															<a
																href="../2018/12/08/build-construction-industry/index.html">
																Build Construction </a>
														</h5>
													</div>

													<div class="blog-content">
														<p>Lorem Ipsum is simply dummy text of the printing and
															typesetting industry.</p>
													</div>


													<div class="blog-button">
														<a class="button pull-left"
															href="../2018/12/08/build-construction-industry/index.html">Voir plus<i class="fa fa-angle-right" aria-hidden="true"></i></a>
													</div>


												</div>
											</div>
										</div>
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