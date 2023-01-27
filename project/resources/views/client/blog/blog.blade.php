@extends('client.layout.layout')
@section('title', 'product index')
@section('content')

<main id="main" class="">

	<div id="content" class="blog-wrapper blog-archive page-wrapper">
			<header class="archive-page-header">
		<div class="row">
		<div class="large-12 text-center col">
		<h1 class="page-title is-large uppercase">
			<span>Blogs</span>	</h1>
			</div>
		</div>
	</header><!-- .page-header -->
	
	<div class="row row-large row-divided ">
	
		<div class="post-sidebar large-3 col">
			<div id="secondary" class="widget-area " role="complementary">
			{{-- <aside id="search-2" class="widget widget_search"><form method="get" class="searchform" action="https://mauweb.monamedia.net/donghohaitrieu/" role="search">
			<div class="flex-row relative">
				<div class="flex-col flex-grow">
				  <input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Tìm kiếm&hellip;" />
				</div><!-- .flex-col -->
				<div class="flex-col">
					<button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
						<i class="icon-search" ></i>				</button>
				</div><!-- .flex-col -->
			</div><!-- .flex-row -->
		<div class="live-search-results text-left z-top"></div>
	</form>
	</aside>		 --}}
	<aside id="flatsome_recent_posts-4" class="widget flatsome_recent_posts">		<span class="widget-title "><span>Bài viết mới</span></span><div class="is-divider small"></div>		<ul>		
		@foreach($blogall as $item)
		<li class="recent-blog-posts-li">
			<div class="flex-row	 recent-blog-posts align-top pt-half pb-half">
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
		
	   
				</ul>			</aside></div><!-- #secondary -->
		</div><!-- .post-sidebar -->
	
		<div class="large-9 col medium-col-first">
			
	
	
	  
		<div id="row-256483560" class="row large-columns-3 medium-columns- small-columns-1 has-shadow row-box-shadow-1 row-box-shadow-2-hover row-masonry" data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>
			
			
			
			@foreach ($blogs as $item)		
			
				<div class="col post-item" >
					<div class="col-inner">
					<a href="{{url('blog/content/'.$item->id)}}" class="plain">
						<div class="box box-text-bottom box-blog-post has-hover">
										<div class="box-image" >
								<div class="image-cover" style="padding-top:56%;">
									<img width="300" height="205" src="{{$item->img}}" class="attachment-medium size-medium wp-post-image" alt="" srcset="{{$item->img}} 300w, {{$item->img}} 600w, {{$item->img}} 650w" sizes="(max-width: 300px) 100vw, 300px" />  							  							  						</div>
														</div><!-- .box-image -->
									<div class="box-text text-left" >
							<div class="box-text-inner blog-post-inner">
		
							
												<h5 class="post-title is-large ">{{$item->title}}</h5>
												<div class="is-divider"></div>
											
												
							
							
							</div><!-- .box-text-inner -->
							</div><!-- .box-text -->
																		<div class="badge absolute top post-date badge-circle">
									<div class="badge-inner">
										<span class="post-date-day">05</span><br>
										<span class="post-date-month is-xsmall">Th7</span>
									</div>
								</div>
											</div><!-- .box -->
						</a><!-- .link -->
					</div><!-- .col-inner -->
				</div><!-- .col -->
			@endforeach
		</div>
	
		</div> <!-- .large-9 -->
	
	</div><!-- .row -->
	
	</div><!-- .page-wrapper .blog-wrapper -->
	
	
	</main>

	@endsection