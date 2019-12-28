<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
						<li class="active"><?=$productData['title']?></li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title"><?=$productData['title']?></h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<div class="row">
								<div class="col-md-4">
									<!-- pills start -->
									<!-- ================ -->
									<!-- Nav tabs -->
									<ul class="nav nav-pills" role="tablist">
										<li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-5"></i> Photo</a></li>
										<li><a href="#pill-2" role="tab" data-toggle="tab" title="video"><i class="fa fa-video-camera pr-5"></i> Video</a></li>
									</ul>
									<!-- Tab panes -->
									<div class="tab-content clear-style">
										<div class="tab-pane active" id="pill-1">
											<div class="owl-carousel content-slider-with-large-controls">
												<div class="overlay-container overlay-visible">
													<img src="<?=base_url('assets/'.$productData['pic1'])?>" alt="">
													<a href="<?=base_url('assets/'.$productData['pic1'])?>" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
												</div>
												<div class="overlay-container overlay-visible">
													<img src="<?=base_url('assets/'.$productData['pic2'])?>" alt="">
													<a href="<?=base_url('assets/'.$productData['pic2'])?>" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="pill-2">
											<div class="embed-responsive embed-responsive-16by9">
												<iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
												<p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
											</div>
										</div>
									</div>
									<!-- pills end -->
								</div>
								<div class="col-md-8 pv-30">
									<h2>Description</h2>
									<?=$productData['brief']?>
									<hr class="mb-10">
									<div class="clearfix mb-20">
										<span>
											<i class="fa fa-star text-default"></i>
											<i class="fa fa-star text-default"></i>
											<i class="fa fa-star text-default"></i>
											<i class="fa fa-star text-default"></i>
											<i class="fa fa-star"></i>
										</span>
										<a href="#" class="wishlist"><i class="fa fa-heart-o pl-10 pr-5"></i>Wishlist</a>
										<ul class="pl-20 pull-right social-links circle small clearfix margin-clear animated-effect-1">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
                                    </div>
                                    <form method="POST" action="<?=base_url('addcart')?>" role="form" class="clearfix">
									<div class="row grid-space-10">
										
											<div class="col-md-4">
												<div class="form-group">
													<label>Quantity</label>
                                                    <input name="qty" type="text" class="form-control" value="1">
                                                    <input name="product_id" type="hidden"  value="<?=$productData['id']?>">
												</div>
											</div>
											
											
											<div class="col-md-12 text-right">
												
											</div>
										
									</div>
									<div class="light-gray-bg p-20 bordered clearfix">
										<span class="product price"><i class="icon-tag pr-10"></i><?=$productData['price']?></span>
										<div class="product elements-list pull-right clearfix">
											<input type="submit" value="Add to Cart" class="margin-clear btn btn-default">
										</div>
                                    </div>
                                    </form>
								</div>
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<section class="pv-30 light-gray-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs style-4" role="tablist">
								<li class="active"><a href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-files-o pr-5"></i>Specifications</a></li>
								<li><a href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-5"></i>(3) Reviews</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content padding-top-clear padding-bottom-clear">
								<div class="tab-pane fade in active" id="h2tab2">
									<h4 class="space-top">Specifications</h4>
									<hr>
									<dl class="dl-horizontal">
                                    <?=$productData['specifications']?>
									</dl>
									<hr>
								</div>
								<div class="tab-pane fade" id="h2tab3">
									<!-- comments start -->
									<div class="comments margin-clear space-top">
										<!-- comment start -->
										<div class="comment clearfix">
											<div class="comment-avatar">
												<img class="img-circle" src="images/avatar.jpg" alt="avatar">
											</div>
											<header>
												<h3>Amazing!</h3>
												<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 12:31</div>
											</header>
											<div class="comment-content">
												<div class="comment-body clearfix">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
													<a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
												</div>
											</div>
										</div>
										<!-- comment end -->

										<!-- comment start -->
										<div class="comment clearfix">
											<div class="comment-avatar">
												<img class="img-circle" src="images/avatar.jpg" alt="avatar">
											</div>
											<header>
												<h3>Really Nice!</h3>
												<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 10:31</div>
											</header>
											<div class="comment-content">
												<div class="comment-body clearfix">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
													<a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
												</div>
											</div>
										</div>
										<!-- comment end -->

										<!-- comment start -->
										<div class="comment clearfix">
											<div class="comment-avatar">
												<img class="img-circle" src="images/avatar.jpg" alt="avatar">
											</div>
											<header>
												<h3>Worth to Buy!</h3>
												<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 09:31</div>
											</header>
											<div class="comment-content">
												<div class="comment-body clearfix">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
													<a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
												</div>
											</div>
										</div>
										<!-- comment end -->
									</div>
									<!-- comments end -->

									<!-- comments form start -->
									<div class="comments-form">
										<h2 class="title">Add your Review</h2>
										<form role="form" id="comment-form">
											<div class="form-group has-feedback">
												<label for="name4">Name</label>
												<input type="text" class="form-control" id="name4" placeholder="" name="name4" required>
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="subject4">Subject</label>
												<input type="text" class="form-control" id="subject4" placeholder="" name="subject4" required>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<div class="form-group">
												<label>Rating</label>
												<select class="form-control" id="review">
													<option value="five">5</option>
													<option value="four">4</option>
													<option value="three">3</option>
													<option value="two">2</option>
													<option value="one">1</option>
												</select>
											</div>
											<div class="form-group has-feedback">
												<label for="message4">Message</label>
												<textarea class="form-control" rows="8" id="message4" placeholder="" name="message4" required></textarea>
												<i class="fa fa-envelope-o form-control-feedback"></i>
											</div>
											<input type="submit" value="Submit" class="btn btn-default">
										</form>
									</div>
									<!-- comments form end -->
								</div>
							</div>
						</div>

						<!-- sidebar start -->
						<!-- ================ -->
						<aside class="col-md-4 col-lg-3 col-lg-offset-1">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Related Products</h3>
									<div class="separator-2"></div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/product-5.jpg" alt="blog-thumb">
												<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="shop-product.html">Lorem ipsum dolor sit amet</a></h6>
											<p class="margin-clear">
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
											</p>
											<p class="price">$99.00</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/product-6.jpg" alt="blog-thumb">
												<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="shop-product.html">Eum repudiandae ipsam</a></h6>
											<p class="margin-clear">
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star"></i>
											</p>
											<p class="price">$299.00</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/product-7.jpg" alt="blog-thumb">
												<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="shop-product.html">Quia aperiam velit fuga</a></h6>
											<p class="margin-clear">
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star"></i>
											</p>
											<p class="price">$9.99</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/product-8.jpg" alt="blog-thumb">
												<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="shop-product.html">Fugit non natus officiis</a></h6>
											<p class="margin-clear">
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</p>
											<p class="price">$399.00</p>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<section class="section dark-translucent-bg pv-40" style="background-image:url('images/shop-banner.jpg');background-position: 50% 50%;">
				<div class="container">
					<div class="row grid-space-10">
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
								<span class="icon default-bg"><i class="fa fa-diamond"></i></span>
								<h3>Premium &amp; Guaranteed Quality</h3>
								<div class="separator clearfix"></div>
								<p>Voluptatem ad provident non repudiandae beatae cupiditate.</p>
								<a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
								<span class="icon default-bg"><i class="icon-lock"></i></span>
								<h3>Secure &amp; Safe Payment</h3>
								<div class="separator clearfix"></div>
								<p>Iure sequi unde hic. Sapiente quaerat sequi inventore.</p>
								<a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
								<span class="icon default-bg"><i class="icon-globe"></i></span>
								<h3 class="pl-10 pr-10">Free &amp; Fast Shipping</h3>
								<div class="separator clearfix"></div>
								<p>Inventore dolores aut laboriosam cum consequuntur.</p>
								<a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="250">
								<span class="icon default-bg"><i class="icon-thumbs-up"></i></span>
								<h3>24/7 Customer Support</h3>
								<div class="separator clearfix"></div>
								<p>Inventore dolores aut laboriosam cum consequuntur.</p>
								<a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="call-to-action text-center">
								<div class="row">
									<div class="col-md-8 col-md-offset-2">
										<h2 class="title"><strong>Subscribe</strong> To Our Newsletter</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
										<div class="separator"></div>
										<form class="form-inline margin-clear">
											<div class="form-group has-feedback">
												<label class="sr-only" for="subscribe3">Email address</label>
												<input type="email" class="form-control form-control-lg" id="subscribe3" placeholder="Enter email" name="subscribe3" required="">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<button type="submit" class="btn btn-lg btn-gray-transparent btn-animated margin-clear">Submit <i class="fa fa-send"></i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->