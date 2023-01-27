@extends('client.layout.layout')
@section('title', 'product index')
@section('content')
<main id="main" class="">
	<div class="row category-page-row">
			<div class="col large-3 hide-for-medium ">
				<div id="shop-sidebar" class="sidebar-inner col-inner">
					<aside id="nav_menu-2" class="widget widget_nav_menu"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span><div class="is-divider small"></div>
						<form class="menu-danh-muc-san-pham-vertical-menu-container" action="{{ url('search/filter') }}" method="get">
							
							<ul id="menu-danh-muc-san-pham-vertical-menu" class="menu">
								<div class="div">
									<strong>Lọc theo thương hiệu</strong>
									@foreach($suppliers as $sup)
									<div class="form-check">
										<input class="form-check-input" name="name[]" type="checkbox" value="{{$sup->id}}" id="flexCheckDefault">
											{{$sup->name}}
									  </div>
									 @endforeach
								</div>
								
						
							
							{{-- Lọc theo giá --}}
							<div class="div">
								<strong>Lọc theo giá</strong>
								<label class="container">
									<input type="radio" checked="checked" class="btn-check" value="0" name="price">
									<span class="checkmark">0 - 200.000.000 ₫</span>
								  </label>
								  <label class="container">
									<input type="radio" name="price" value="1" >
									<span class="checkmark">1.000.000 ₫ - 10.000.000 ₫</span>
								  </label>
								  <label class="container" >
									<input type="radio" name="price" value="2" >
									<span class="checkmark">10.000.000 ₫ - 20.000.000 ₫</span>
								  </label>
								  <label class="container" >
									<input type="radio" name="price" value="3" >
									<span class="checkmark">20.000.000 ₫ - 50.000.000 ₫</span>
								  </label>
								  <label class="container">
									<input type="radio" name="price" value="4" >
									<span class="checkmark">50.000.000 ₫ - 100.000.000 ₫</span>
								  </label>
								  <label class="container">
									<input type="radio" name="price" value="5" >
									<span class="checkmark">100.000.000 ₫ - 200.000.000 ₫</span>
								  </label>
							</div>
							
							<button type="submit" class="btn btn-primary">Tìm kiếm	</button>
	</ul></form></aside>
				<aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts">		<span class="widget-title shop-sidebar">Bài viết mới nhất</span><div class="is-divider small"></div>	
		<ul>		
			@foreach($blogall as $item)
			<li class="recent-blog-posts-li">
				<div class="flex-row recent-blog-posts align-top pt-half pb-half">
					<div class="flex-col mr-half">
						<div class="badge post-date  badge-circle">
								<div class="badge-inner bg-fill" style="background: url({{asset($item->img)}}); border:0;">
																</div>
						</div>
					</div><!-- .flex-col -->
					<div class="flex-col flex-grow">
						
						  <a href="{{url('blog/content/'.$item->id)}}" title="{{$item->title}}">{{$item->title}}</a>
							
					</div>
				</div><!-- .flex-row -->
			</li>
			@endforeach
			
		   
					</ul>	</aside>			</div><!-- .sidebar-inner -->
			</div><!-- #shop-sidebar -->
	
			<div class="col large-9">
			<div class="shop-container">
			
			<div class="woocommerce-notices-wrapper"></div>	<div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 has-shadow row-box-shadow-1 row-box-shadow-2-hover">
		@foreach($products as $item)
	<div class="product-small col has-hover post-748 product type-product status-publish has-post-thumbnail product_cat-best-seller product_cat-dong-ho-nam first instock shipping-taxable purchasable product-type-simple">
		<div class="col-inner">
		
	<div class="badge-container absolute left top z-1">
	</div>
		<div class="product-small box ">
			<div class="box-image">
				<div class="image-fade_in_back">
					<a href="{{url('client/infor/'.$item->id)}}">
						<img width="300" height="300" src="{{ asset($item->img)}}" />				</a>
				</div>
				<div class="image-tools is-small top right show-on-hover">
							<div class="wishlist-icon">
								<button class="wishlist-button button is-outline circle icon"  onclick="location.href='{{route('AddToWishlist',$item->id)}}'">

									<i class="icon-heart" ></i>			</button>
				<div class="wishlist-popup dark">
					
	<div class="yith-wcwl-add-to-wishlist add-to-wishlist-748">
				<div class="yith-wcwl-add-button show" style="display:block">
	
				
	<a href="/donghohaitrieu/danh-muc/dong-ho-nam/?add_to_wishlist=748" rel="nofollow" data-product-id="748" data-product-type="simple" class="add_to_wishlist" >
			Thêm yêu thích</a>
	<img src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
			</div>
	
			<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
				<span class="feedback">Đã thêm yêu thích</span>
				<a href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/" rel="nofollow">
					Đã thêm yêu thích	        </a>
			</div>
	
			<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
				<span class="feedback">The product is already in the wishlist!</span>
				<a href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/" rel="nofollow">
					Đã thêm yêu thích	        </a>
			</div>
	
			<div style="clear:both"></div>
			<div class="yith-wcwl-wishlistaddresponse"></div>
		
	</div>
	
	<div class="clear"></div>			</div>
			</div>
						</div>
				<div class="image-tools is-small hide-for-small bottom left show-on-hover">
								</div>
				<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
								</div>
						</div><!-- box-image -->
	
			<div class="box-text box-text-products text-center grid-style-2">
				<div class="title-wrapper"><p class="name product-title"><a href="">{{$item->name}}</a></p></div><div class="price-wrapper">
		<span class="price"><span class="woocommerce-Price-amount amount">{{number_format($item->price)}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
	</div><div class="add-to-cart-button"><a href="{{route('PlusOne',$item->id)}}" rel="nofollow" data-product_id="748" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
		</div><!-- box -->
			</div><!-- .col-inner -->
	</div><!-- col -->
	@endforeach
	
	
	
	</main>

	@endsection