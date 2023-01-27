@extends('client.layout.layout')
@section('title', 'product index')
@section('content')
<main id="main" class="">

    <div id="content" class="blog-wrapper blog-single page-wrapper">
        
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
            
           
                    </ul>		</aside></div><!-- #secondary -->
        </div><!-- .post-sidebar -->
    
        <div class="large-9 col medium-col-first">
            
    
    
    <article id="post-832" class="post-832 post type-post status-publish format-standard has-post-thumbnail hentry category-blogs">
        <div class="article-inner has-shadow box-shadow-1 box-shadow-2-hover">
            <header class="entry-header">
        <div class="entry-header-text entry-header-text-top text-left">
            <h6 class="entry-category is-xsmall">
        <a href="{{route('Blog')}}" rel="category tag">Blogs</a></h6>
    
    <h1 class="entry-title">{{$blog->title}}</h1>
    <div class="entry-divider is-divider small"></div>
    
        </div><!-- .entry-header -->
    
                            <div class="entry-image relative">
                    <a href="#">
        <img width="1020" height="396" src="{{asset($blog->img)}}" class="attachment-large size-large wp-post-image" alt="" sizes="(max-width: 1020px) 100vw, 1020px" /></a>
                    <div class="badge absolute top post-date badge-circle">
        <div class="badge-inner">
            <span class="post-date-day">05</span><br>
            <span class="post-date-month is-small">Th7</span>
        </div>
    </div>			</div><!-- .entry-image -->
                </header><!-- post-header -->
            <div class="entry-content single-page">
                {!!$blog->blogcontent!!}
        </div><!-- .entry-content2 -->
    
    
    
          
    
            </div><!-- .article-inner -->
    </article><!-- #-832 -->
    
    
    
    
        </div> <!-- .large-9 -->
    
    </div><!-- .row -->
    
    </div><!-- #content .page-wrapper -->
    
    
    </main>
    @endsection