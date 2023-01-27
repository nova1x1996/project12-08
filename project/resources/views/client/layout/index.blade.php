@extends('client.layout.layout')
@section('title', 'product index')
@section('content')
@if (session('success'))
<div class="thanhcong">
    {{ session('success') }}
</div>
@endif
<main id="main" class="">
	<div id="content" role="main" class="content-area">
		<section class="section sec_slide" id="section_1537960667">
			<div class="bg section-bg fill bg-fill bg-loaded"></div>
			<!-- .section-bg -->

			<div class="section-content relative">
				<div class="slider-wrapper relative" id="slider-1500774585">
					<div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
						data-flickity-options='{
	"cellAlign": "center",
	"imagesLoaded": true,
	"lazyLoad": 1,
	"freeScroll": false,
	"wrapAround": true,
	"autoPlay": 6000,
	"pauseAutoPlayOnHover" : true,
	"prevNextButtons": true,
	"contain" : true,
	"adaptiveHeight" : true,
	"dragThreshold" : 10,
	"percentPosition": true,
	"pageDots": false,
	"rightToLeft": false,
	"draggable": true,
	"selectedAttraction": 0.1,
	"parallax" : 0,
	"friction": 0.6        }'>
						<div class="banner has-hover" id="banner-555175568">
							<div class="banner-inner fill">
								<div class="banner-bg fill">
									<div class="bg fill bg-fill"></div>
									<div class="overlay"></div>
								</div>
								<!-- bg-layers -->
								<div class="banner-layers container">
									<div class="fill banner-link"></div>
									<div id="text-box-695116956"
										class="text-box banner-layer x5 md-x5 lg-x5 y50 md-y50 lg-y50 res-text">
										<div data-animate="fadeInRight">
											<div class="text dark">
												<div class="text-inner text-left">
													<h4>
														Mona Watch
													</h4>
													<h1>
														Đồng hồ
														Classico
													</h1>
													<p>
														Cùng với sự
														phát triển
														không ngừng
														của thời
														trang thế
														giới, rất
														nhiều thương
														hiệu cho ra
														đời những
														mẫu đồng hồ
														nam chính
														hãng đa dạng
														về phong
														cách, kiểu
														dáng, màu
														sắc, kích
														cỡ&#8230;
													</p>
													<a class="button white is-outline" style="
																border-radius: 5px;
															" href="{{route('WatchMen')}}">
														<span>Xem sản
															phẩm</span>
													</a>
												</div>
											</div>
											<!-- text-box-inner -->
										</div>
										<style scope="scope">
											#text-box-695116956 {
												width: 85%;
											}

											#text-box-695116956 .text {
												font-size: 100%;
											}

											@media (min-width: 550px) {
												#text-box-695116956 {
													width: 65%;
												}
											}

											@media (min-width: 850px) {
												#text-box-695116956 {
													width: 45%;
												}
											}
										</style>
									</div>
									<!-- text-box -->
								</div>
								<!-- .banner-layers -->
							</div>
							<!-- .banner-inner -->

							<style scope="scope">
								#banner-555175568 {
									padding-top: 300px;
								}

								#banner-555175568 .bg.bg-loaded {
									background-image: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/slide-bg-1.jpg);
								}

								#banner-555175568 .overlay {
									background-color: rgba(0,
											0,
											0,
											0.4);
								}

								#banner-555175568 .bg {
									background-position: 100% 0%;
								}

								@media (min-width: 550px) {
									#banner-555175568 {
										padding-top: 450px;
									}

									#banner-555175568 .overlay {
										background-color: rgba(0,
												0,
												0,
												0.4);
									}
								}

								@media (min-width: 850px) {
									#banner-555175568 {
										padding-top: 600px;
									}

									#banner-555175568 .overlay {
										background-color: rgba(0,
												0,
												0,
												0);
									}
								}
							</style>
						</div>
						<!-- .banner -->

						<div class="banner has-hover" id="banner-227298770">
							<div class="banner-inner fill">
								<div class="banner-bg fill">
									<div class="bg fill bg-fill"></div>
									<div class="overlay"></div>
								</div>
								<!-- bg-layers -->
								<div class="banner-layers container">
									<div class="fill banner-link"></div>
									<div id="text-box-1595129115"
										class="text-box banner-layer x5 md-x5 lg-x5 y50 md-y50 lg-y50 res-text">
										<div data-animate="fadeInRight">
											<div class="text dark">
												<div class="text-inner text-left">
													<h4>
														Mona Watch
													</h4>
													<h1>
														Đồng hồ
														Classico
													</h1>
													<p>
														Cùng với sự
														phát triển
														không ngừng
														của thời
														trang thế
														giới, rất
														nhiều thương
														hiệu cho ra
														đời những
														mẫu đồng hồ
														nam chính
														hãng đa dạng
														về phong
														cách, kiểu
														dáng, màu
														sắc, kích
														cỡ&#8230;
													</p>
													<a class="button white is-outline" style="
																border-radius: 5px;
															" href="{{route('WatchMen')}}">
														<span>Xem sản
															phẩm</span>
													</a>
												</div>
											</div>
											<!-- text-box-inner -->
										</div>
										<style scope="scope">
											#text-box-1595129115 {
												width: 85%;
											}

											#text-box-1595129115 .text {
												font-size: 100%;
											}

											@media (min-width: 550px) {
												#text-box-1595129115 {
													width: 65%;
												}
											}

											@media (min-width: 850px) {
												#text-box-1595129115 {
													width: 45%;
												}
											}
										</style>
									</div>
									<!-- text-box -->
								</div>
								<!-- .banner-layers -->
							</div>
							<!-- .banner-inner -->

							<style scope="scope">
								#banner-227298770 {
									padding-top: 300px;
								}

								#banner-227298770 .bg.bg-loaded {
									background-image: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/slide-bg-2.jpg);
								}

								#banner-227298770 .overlay {
									background-color: rgba(0,
											0,
											0,
											0.4);
								}

								#banner-227298770 .bg {
									background-position: 78% 0%;
								}

								@media (min-width: 550px) {
									#banner-227298770 {
										padding-top: 450px;
									}

									#banner-227298770 .overlay {
										background-color: rgba(0,
												0,
												0,
												0.4);
									}
								}

								@media (min-width: 850px) {
									#banner-227298770 {
										padding-top: 600px;
									}

									#banner-227298770 .overlay {
										background-color: rgba(0,
												0,
												0,
												0);
									}
								}
							</style>
						</div>
						<!-- .banner -->
					</div>

					<div class="loading-spin dark large centered"></div>

					<style scope="scope"></style>
				</div>
				<!-- .ux-slider-wrapper -->
			</div>
			<!-- .section-content -->

			<style scope="scope">
				#section_1537960667 {
					padding-top: 0px;
					padding-bottom: 0px;
				}
			</style>
		</section>

		<section class="section sec_trend" id="section_359185157">
			<div class="bg section-bg fill bg-fill bg-loaded"></div>
			<!-- .section-bg -->

			<div class="section-content relative">
				<div class="gap-element clearfix" style="
							display: block;
							height: auto;
							padding-top: 60px;
						"></div>
				<div class="row" id="row-1836544294">
					<div class="col medium-6 small-12 large-6" data-animate="fadeInDown">
						<div class="col-inner">
							<div class="banner has-hover bg-zoom" id="banner-619883797">
								<div class="banner-inner fill">
									<div class="banner-bg fill">
										<div class="bg fill bg-fill"></div>
										<div class="overlay"></div>
									</div>
									<!-- bg-layers -->
									<div class="banner-layers container">
										<a class="fill"
											href="{{route('WatchMen')}}">
											<div class="fill banner-link"></div>
										</a>
										<div id="text-box-297277500"
											class="text-box banner-layer x5 md-x5 lg-x5 y50 md-y50 lg-y50 res-text">
											<div class="text dark">
												<div class="text-inner text-left">
													<h3>
														Xu hướng
														2019
													</h3>
													<div class="is-divider divider clearfix" style="
																margin-top: 1.5em;
																margin-bottom: 1.5em;
																max-width: 50px;
																height: 1px;
																background-color: rgb(
																	200,
																	153,
																	121
																);
															"></div>
													<!-- .divider -->
													<h2 class="title">
														ĐỒNG HỒ NAM
													</h2>
												</div>
											</div>
											<!-- text-box-inner -->

											<style scope="scope">
												#text-box-297277500 {
													width: 95%;
												}

												#text-box-297277500 .text {
													font-size: 150%;
												}

												@media (min-width: 550px) {
													#text-box-297277500 {
														width: 80%;
													}
												}

												@media (min-width: 850px) {
													#text-box-297277500 {
														width: 60%;
													}

													#text-box-297277500 .text {
														font-size: 100%;
													}
												}
											</style>
										</div>
										<!-- text-box -->
									</div>
									<!-- .banner-layers -->
								</div>
								<!-- .banner-inner -->

								<style scope="scope">
									#banner-619883797 {
										padding-top: 250px;
									}

									#banner-619883797 .bg.bg-loaded {
										background-image: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-1.jpg);
									}

									#banner-619883797 .overlay {
										background-color: rgba(0,
												0,
												0,
												0.4);
									}

									#banner-619883797 .bg {
										background-position: 88% 0%;
									}

									@media (min-width: 550px) {
										#banner-619883797 .overlay {
											background-color: rgba(0,
													0,
													0,
													0.4);
										}
									}

									@media (min-width: 850px) {
										#banner-619883797 {
											padding-top: 300px;
										}

										#banner-619883797 .overlay {
											background-color: rgba(0,
													0,
													0,
													0);
										}
									}
								</style>
							</div>
							<!-- .banner -->
						</div>
					</div>
					<div class="col medium-6 small-12 large-6" data-animate="fadeInDown">
						<div class="col-inner">
							<div class="banner has-hover bg-zoom" id="banner-322608441">
								<div class="banner-inner fill">
									<div class="banner-bg fill">
										<div class="bg fill bg-fill"></div>
										<div class="overlay"></div>
									</div>
									<!-- bg-layers -->
									<div class="banner-layers container">
										<a class="fill"
											href="{{route('WatchWomen')}}">
											<div class="fill banner-link"></div>
										</a>
										<div id="text-box-2081092844"
											class="text-box banner-layer x5 md-x5 lg-x5 y50 md-y50 lg-y50 res-text">
											<div class="text dark">
												<div class="text-inner text-left">
													<h3>
														Xu hướng
														2019
													</h3>
													<div class="is-divider divider clearfix" style="
																margin-top: 1.5em;
																margin-bottom: 1.5em;
																max-width: 50px;
																height: 1px;
																background-color: rgb(
																	200,
																	153,
																	121
																);
															"></div>
													<!-- .divider -->
													<h2 class="title">
														ĐỒNG HỒ NỮ
													</h2>
												</div>
											</div>
											<!-- text-box-inner -->

											<style scope="scope">
												#text-box-2081092844 {
													width: 95%;
												}

												#text-box-2081092844 .text {
													font-size: 150%;
												}

												@media (min-width: 550px) {
													#text-box-2081092844 {
														width: 80%;
													}
												}

												@media (min-width: 850px) {
													#text-box-2081092844 {
														width: 60%;
													}

													#text-box-2081092844 .text {
														font-size: 100%;
													}
												}
											</style>
										</div>
										<!-- text-box -->
									</div>
									<!-- .banner-layers -->
								</div>
								<!-- .banner-inner -->

								<style scope="scope">
									#banner-322608441 {
										padding-top: 250px;
									}

									#banner-322608441 .bg.bg-loaded {
										background-image: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2.jpg);
									}

									#banner-322608441 .overlay {
										background-color: rgba(0,
												0,
												0,
												0.4);
									}

									#banner-322608441 .bg {
										background-position: 66% 4%;
									}

									@media (min-width: 550px) {
										#banner-322608441 .overlay {
											background-color: rgba(0,
													0,
													0,
													0.4);
										}
									}

									@media (min-width: 850px) {
										#banner-322608441 {
											padding-top: 300px;
										}

										#banner-322608441 .overlay {
											background-color: rgba(0,
													0,
													0,
													0);
										}
									}
								</style>
							</div>
							<!-- .banner -->
						</div>
					</div>
				</div>
			</div>
			<!-- .section-content -->

			<style scope="scope">
				#section_359185157 {
					padding-top: 0px;
					padding-bottom: 0px;
				}
			</style>
		</section>

		<section class="section sec_best_seller" id="section_1811222823">
			<div class="bg section-bg fill bg-fill bg-loaded"></div>
			<!-- .section-bg -->

			<div class="section-content relative">
				<div class="gap-element clearfix" style="
							display: block;
							height: auto;
							padding-top: 60px;
						"></div>
				<div class="row" id="row-784809327">
					<div class="col small-12 large-12" data-animate="bounceInRight">
						<div class="col-inner">
							<h2>Sản phẩm bán chạy</h2>

							<div class="row large-columns-4 medium-columns-3 small-columns-2 row-normal slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
								data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>

								{{-- Nếu chưa có 4 sản phẩm được mua thì  --}}
								
								<?php
								
								if($spbc->count() < 4){
									$spbc = $products;
								} 
								?>
								@foreach($spbc as $item)
								
								<div class="col">
									<div class="col-inner">
					
										<div class="product-small box has-hover box-normal box-text-bottom">
											<div class="box-image">
												<div class="">
													<a href="{{url('client/infor/'.$item->id)}}">
														<img
															width="400" height="400"
															src="{{asset($item->img)}}"
														sizes="(max-width: 600px) 100vw, 600px" />
													</a>
												</div>
												<div class="image-tools top right show-on-hover">
													<div class="wishlist-icon">
														<button
															class="wishlist-button button is-outline circle icon" onclick="location.href='{{route('AddToWishlist',$item->id)}}'">
															<i class="icon-heart"></i>
														</button>
														<div class="wishlist-popup dark">
															<div
																class="yith-wcwl-add-to-wishlist add-to-wishlist-757">
																<div class="yith-wcwl-add-button show" style="
																			display: block;
																		">
																	<a href="{{url('client/infor/'.$item->id)}}"
																		rel="nofollow" data-product-id="757"
																		data-product-type="simple"
																		class="add_to_wishlist">
																		Thêm
																		yêu
																		thích</a>
																	<img src="{{asset("$item->img")}}"
																		class="ajax-loading" alt="loading"
																		width="16" height="16" style="
																				visibility: hidden;
																			" />
																</div>

																<div class="yith-wcwl-wishlistaddedbrowse hide"
																	style="
																			display: none;
																		">
																	<span class="feedback">Đã
																		thêm
																		yêu
																		thích</span>
																	<a href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
																		rel="nofollow">
																		Đã
																		thêm
																		yêu
																		thích
																	</a>
																</div>

																<div class="yith-wcwl-wishlistexistsbrowse hide"
																	style="
																			display: none;
																		">
																	<span class="feedback">The
																		product
																		is
																		already
																		in
																		the
																		wishlist!</span>
																	<a href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
																		rel="nofollow">
																		Đã
																		thêm
																		yêu
																		thích
																	</a>
																</div>

																<div style="
																			clear: both;
																		"></div>
																<div class="yith-wcwl-wishlistaddresponse">
																</div>
															</div>

															<div class="clear"></div>
														</div>
													</div>
												</div>
												<div
													class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
												</div>
											</div>
											<!-- box-image -->

											<div class="box-text text-center">
												<div class="title-wrapper">
													<p class="name product-title">
														<a
															href="{{url('client/infor/'.$item->id)}}">{{$item->name}}</a>
													</p>
												</div>
												<div class="price-wrapper">
													<span class="price">
														<ins><span
																class="woocommerce-Price-amount amount">{{number_format($item->price)}}&nbsp;<span
																	class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
												</div>
												<div class="add-to-cart-button">
													<a href="{{route('PlusOne',$item->id)}}" rel="nofollow"
														data-product_id="757"
														class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm
														vào
														giỏ</a>
												</div>
											</div>
											<!-- box-text -->
										</div>
										<!-- box -->
									</div>
									<!-- .col-inner -->
								</div>
								@endforeach
								<!-- col -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .section-content -->

			<style scope="scope">
				#section_1811222823 {
					padding-top: 0px;
					padding-bottom: 0px;
				}
			</style>
		</section>

		<section class="section sec_trend" id="section_53081607">
			<div class="bg section-bg fill bg-fill bg-loaded"></div>
			<!-- .section-bg -->

			<div class="section-content relative">
				<div class="gap-element clearfix" style="
							display: block;
							height: auto;
							padding-top: 60px;
						"></div>
				<div class="row" id="row-947623155">
					<div class="col medium-6 small-12 large-6" data-animate="fadeInUp">
						<div class="col-inner">
							<div class="banner has-hover co-dien bg-zoom" id="banner-83033404">
								<div class="banner-inner fill">
									<div class="banner-bg fill">
										<div class="bg fill bg-fill"></div>
										<div class="overlay"></div>
									</div>
									<!-- bg-layers -->
									<div class="banner-layers container">
										<div class="fill banner-link"></div>
										<div id="text-box-1019824633"
											class="text-box banner-layer x5 md-x5 lg-x5 y50 md-y50 lg-y15 res-text">
											<div class="text dark">
												<div class="text-inner text-left">
													<h2 class="title">
														CỔ ĐIỂN
													</h2>
													<h3>
														Đa dạng về
														phong cách,
														kiểu dáng,
														màu sắc,
														kích
														cỡ&#8230;
													</h3>
												</div>
											</div>
											<!-- text-box-inner -->

											<style scope="scope">
												#text-box-1019824633 {
													width: 85%;
												}

												#text-box-1019824633 .text {
													font-size: 150%;
												}

												@media (min-width: 550px) {
													#text-box-1019824633 {
														width: 85%;
													}
												}

												@media (min-width: 850px) {
													#text-box-1019824633 {
														width: 45%;
													}

													#text-box-1019824633 .text {
														font-size: 100%;
													}
												}
											</style>
										</div>
										<!-- text-box -->
									</div>
									<!-- .banner-layers -->
								</div>
								<!-- .banner-inner -->

								<style scope="scope">
									#banner-83033404 {
										padding-top: 250px;
									}

									#banner-83033404 .bg.bg-loaded {
										background-image: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/banner-03.jpg);
									}

									#banner-83033404 .overlay {
										background-color: rgba(0,
												0,
												0,
												0.4);
									}

									#banner-83033404 .bg {
										background-position: 0% 0%;
									}

									@media (min-width: 550px) {
										#banner-83033404 .overlay {
											background-color: rgba(0,
													0,
													0,
													0.4);
										}
									}

									@media (min-width: 850px) {
										#banner-83033404 .overlay {
											background-color: rgba(0,
													0,
													0,
													0);
										}
									}
								</style>
							</div>
							<!-- .banner -->
						</div>
					</div>
					<div class="col medium-6 small-12 large-6" data-animate="fadeInDown">
						<div class="col-inner">
							<div class="banner has-hover smartwatch bg-zoom" id="banner-937495029">
								<div class="banner-inner fill">
									<div class="banner-bg fill">
										<div class="bg fill bg-fill"></div>
										<div class="overlay"></div>
									</div>
									<!-- bg-layers -->
									<div class="banner-layers container">
										<div class="fill banner-link"></div>
										<div id="text-box-124902557"
											class="text-box banner-layer x5 md-x5 lg-x5 y50 md-y50 lg-y90 res-text">
											<div class="text dark">
												<div class="text-inner text-left">
													<h2 class="title">
														SMART WATCH
													</h2>
													<h3>
														Đa dạng về
														phong cách,
														kiểu dáng,
														màu sắc,
														kích
														cỡ&#8230;
													</h3>
												</div>
											</div>
											<!-- text-box-inner -->

											<style scope="scope">
												#text-box-124902557 {
													width: 85%;
												}

												#text-box-124902557 .text {
													font-size: 150%;
												}

												@media (min-width: 550px) {
													#text-box-124902557 {
														width: 85%;
													}
												}

												@media (min-width: 850px) {
													#text-box-124902557 {
														width: 50%;
													}

													#text-box-124902557 .text {
														font-size: 100%;
													}
												}
											</style>
										</div>
										<!-- text-box -->
									</div>
									<!-- .banner-layers -->
								</div>
								<!-- .banner-inner -->

								<style scope="scope">
									#banner-937495029 {
										padding-top: 250px;
									}

									#banner-937495029 .bg.bg-loaded {
										background-image: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/banner-04.jpg);
									}

									#banner-937495029 .overlay {
										background-color: rgba(0,
												0,
												0,
												0.4);
									}

									#banner-937495029 .bg {
										background-position: 0% 0%;
									}

									@media (min-width: 550px) {
										#banner-937495029 .overlay {
											background-color: rgba(0,
													0,
													0,
													0.4);
										}
									}

									@media (min-width: 850px) {
										#banner-937495029 .overlay {
											background-color: rgba(0,
													0,
													0,
													0);
										}
									}
								</style>
							</div>
							<!-- .banner -->
						</div>
					</div>
				</div>
				<div class="gap-element clearfix" style="
							display: block;
							height: auto;
							padding-top: 30px;
						"></div>
			</div>
			<!-- .section-content -->

			<style scope="scope">
				#section_53081607 {
					padding-top: 0px;
					padding-bottom: 0px;
				}
			</style>
		</section>

		<section class="section sec_all_products" id="section_1603474644">
			<div class="bg section-bg fill bg-fill bg-loaded"></div>
			<!-- .section-bg -->

			<div class="section-content relative">
				<div class="gap-element clearfix" style="
							display: block;
							height: auto;
							padding-top: 50px;
						"></div>
				<div class="row" id="row-748517382">
					<div class="col small-12 large-12" data-animate="bounceInRight">
						<div class="col-inner">
							<div class="tabbed-content">
								<ul class="nav nav-simple nav-normal nav-size-normal nav-left">
									<li class="tab has-icon">
										<a href="#p"><span>Sản phẩm mới</span></a>
									</li>				
								</ul>
								<div class="tab-panels">
									<div class="panel active entry-content" id="tab_sản-phẩm-phổ-biến">
										<div
											class="row large-columns-5 medium-columns-3 small-columns-2 row-normal">
											@foreach($spm as $item)
											<div class="col">
												<div class="col-inner">
													<div class="badge-container absolute left top z-1"></div>
													<div
														class="product-small box has-hover box-normal box-text-bottom">
														<div class="box-image">
															<div class="">
																<a
																	href="{{url('client/infor/'.$item->id)}}">
																	<img width="300" height="300"
																		src="{{asset($item->img)}}"
																		sizes="(max-width: 300px) 100vw, 300px" />
																</a>
															</div>
															<div class="image-tools top right show-on-hover">
																<div class="wishlist-icon">
																	<button
																		class="wishlist-button button is-outline circle icon" onclick="location.href='{{route('AddToWishlist',$item->id)}}'">
																		<i class="icon-heart"></i>
																	</button>
																	<div class="wishlist-popup dark">
																		<div
																			class="yith-wcwl-add-to-wishlist add-to-wishlist-784">
																			<div class="yith-wcwl-add-button show"
																				style="
																						display: block;
																					">
																				<a href="{{url('client/infor/'.$item->id)}}"
																					rel="nofollow"
																					data-product-id="784"
																					data-product-type="simple"
																					class="add_to_wishlist">
																					Thêm
																					yêu
																					thích</a>
																				<img src="{{asset("$item->img")}}"
																					class="ajax-loading"
																					alt="loading" width="16"
																					height="16" style="
																							visibility: hidden;
																						" />
																			</div>

																			<div class="yith-wcwl-wishlistaddedbrowse hide"
																				style="
																						display: none;
																					">
																				<span class="feedback">Đã
																					thêm
																					yêu
																					thích</span>
																				<a href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
																					rel="nofollow">
																					Đã
																					thêm
																					yêu
																					thích
																				</a>
																			</div>

																			<div class="yith-wcwl-wishlistexistsbrowse hide"
																				style="
																						display: none;
																					">
																				<span class="feedback">The
																					product
																					is
																					already
																					in
																					the
																					wishlist!</span>
																				<a href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
																					rel="nofollow">
																					Đã
																					thêm
																					yêu
																					thích
																				</a>
																			</div>

																			<div style="
																						clear: both;
																					"></div>
																			<div
																				class="yith-wcwl-wishlistaddresponse">
																			</div>
																		</div>

																		<div class="clear"></div>
																	</div>
																</div>
															</div>
															<div
																class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
															</div>
														</div>
														<!-- box-image -->

														<div class="box-text text-center">
															<div class="title-wrapper">
																<p class="name product-title">
																	<a
																		href="{{url('client/infor/'.$item->id)}}">{{$item->name}}</a>
																</p>
															</div>
															<div class="price-wrapper">
																<span class="price"><span
																		class="woocommerce-Price-amount amount">{{number_format($item->price)}}&nbsp;<span
																			class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
															</div>
															<div class="add-to-cart-button">
																<a href="{{route('PlusOne',$item->id)}}"
																	rel="nofollow" data-product_id="784"
																	class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm
																	vào
																	giỏ</a>
															</div>
														</div>
														<!-- box-text -->
													</div>
													<!-- box -->
												</div>
												<!-- .col-inner -->
											</div>
											<!-- col -->

											@endforeach
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .section-content -->

			<style scope="scope">
				#section_1603474644 {
					padding-top: 0px;
					padding-bottom: 0px;
				}
			</style>
		</section>

		<section class="section sec_blog" id="section_1986765764">
			<div class="bg section-bg fill bg-fill bg-loaded"></div>
			<!-- .section-bg -->

			<div class="section-content relative">
				<div class="gap-element clearfix" style="
							display: block;
							height: auto;
							padding-top: 50px;
						"></div>
				<div class="row" id="row-839868368">
					<div class="col small-12 large-12" data-animate="fadeInDown">
						<div class="col-inner">
							<div class="row large-columns-3 medium-columns-3 small-columns-1">
								@foreach($blogall as $item)
								<div class="col post-item">
									<div class="col-inner">
										<a href="{{url('blog/content/'.$item->id)}}"
											class="plain">
											<div class="box box-normal box-text-bottom box-blog-post has-hover">
												<div class="box-image">
													<div class="image-zoom image-cover" style="
																padding-top: 56.25%;
															">
														<img width="650" height="445"
															src="{{asset($item->img)}}"
															class=""sizes="(max-width: 650px) 100vw, 650px" />
													</div>
												</div>
												<!-- .box-image -->
												<div class="box-text text-left">
													<div class="box-text-inner blog-post-inner">
														<h5 class="post-title is-larger">
															{{$item->title}}
														</h5>
														<div class="is-divider"></div>
														
													</div>
													<!-- .box-text-inner -->
												</div>
												<!-- .box-text -->
											</div>
											<!-- .box -->
										</a><!-- .link -->
									</div>
									<!-- .col-inner -->
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .section-content -->

			<style scope="scope">
				#section_1986765764 {
					padding-top: 0px;
					padding-bottom: 0px;
				}
			</style>
		</section>
	</div>
</main>

@endsection