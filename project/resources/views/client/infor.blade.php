@extends('client.layout.layout') @section('title', 'product index')
@section('content')
<style>
    .cm-text{
        border: 1px solid #c89979;
        padding:15px;
        margin-bottom:5px;
    }
    .cm-name{
        font-weight: bold;
        font-size:17px;
    }
    .cm-rating{
        margin-left: 15px;
    }
</style>
<main id="main" class="">
    @if (session('success'))
    <div class="thanhcong">
        {{ session('success') }}
    </div>
    @elseif(session('error'))
    <div class="canhbao">
        {{ session('error') }}
    </div>

    @endif
    <div class="shop-container">
        <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
        </div>
        <!-- /.container -->
        <div
            id="product-748"
            class="post-748 product type-product status-publish has-post-thumbnail product_cat-best-seller product_cat-dong-ho-nam first instock shipping-taxable purchasable product-type-simple"
        >
            <div class="product-container">
                <div class="product-main">
                    <div class="row content-row mb-0">
                        <div class="product-gallery large-6 col">
                            <div
                                class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                data-columns="4"
                            >
                                <div
                                    class="badge-container is-larger absolute left top z-1"
                                ></div>
                                <div
                                    class="image-tools absolute top show-on-hover right z-3"
                                >
                                    <div class="wishlist-icon">
                                        <button
                                            class="wishlist-button button is-outline circle icon"
                                            onclick="location.href=`{{route('AddToWishlist',$product->id)}}`"
                                        >
                                            <i class="icon-heart"></i>
                                        </button>
                                        <div class="wishlist-popup dark">
                                            <div
                                                class="yith-wcwl-add-to-wishlist add-to-wishlist-748"
                                            >
                                                <div
                                                    class="yith-wcwl-add-button show"
                                                    style="display: block"
                                                >
                                                    <a
                                                        href="{{url('client/infor/'.$product->id)}}"
                                                        class="add_to_wishlist"
                                                    >
                                                        Thêm yêu thích</a
                                                    >
                                                    <img
                                                        src="{{asset("
                                                        $product-
                                                    />img")}}"
                                                    class="ajax-loading"
                                                    alt="loading" width="16"
                                                    height="16" style="
                                                    visibility: hidden; " />
                                                </div>

                                                <div
                                                    class="yith-wcwl-wishlistaddedbrowse hide"
                                                    style="display: none"
                                                >
                                                    <span class="feedback"
                                                        >Đã thêm yêu thích</span
                                                    >
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                        rel="nofollow"
                                                    >
                                                        Đã thêm yêu thích
                                                    </a>
                                                </div>

                                                <div
                                                    class="yith-wcwl-wishlistexistsbrowse hide"
                                                    style="display: none"
                                                >
                                                    <span class="feedback"
                                                        >The product is already
                                                        in the wishlist!</span
                                                    >
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                        rel="nofollow"
                                                    >
                                                        Đã thêm yêu thích
                                                    </a>
                                                </div>

                                                <div style="clear: both"></div>
                                                <div
                                                    class="yith-wcwl-wishlistaddresponse"
                                                ></div>
                                            </div>

                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>

                                <figure
                                    class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
                                    data-flickity-options='{
                "cellAlign": "center",
                "wrapAround": true,
                "autoPlay": false,
                "prevNextButtons":true,
                "adaptiveHeight": true,
                "imagesLoaded": true,
                "lazyLoad": 1,
                "dragThreshold" : 15,
                "pageDots": false,
                "rightToLeft": false       }'
                                >
                                    <div
                                        class="woocommerce-product-gallery__image slide first"
                                    >
                                        <a
                                            href="{{ asset('img/'.$product->img)}}"
                                        >
                                            <img
                                                width="600"
                                                height="700"
                                                src="{{ asset($product->img)}}"
                                                class="wp-post-image skip-lazy"
                                                alt=""
                                                title="{{$product->id}}"
                                                data-caption=""
                                                data-large_image="{{ asset('img/'.$product->img)}}"
                                                data-large_image_width="600"
                                                data-large_image_height="700"
                                                sizes="(max-width: 600px) 100vw, 600px"
                                        /></a>
                                    </div>
                                    @foreach($productImages as $item)

                                    <div
                                        class="woocommerce-product-gallery__image slide"
                                    >
                                        <a
                                            href="{{ asset('/'.$item->img_product)}}"
                                            ><img
                                                width="600"
                                                height="700"
                                                src="{{ asset('/'.$item->img_product)}}"
                                                class="skip-lazy"
                                                title="product-02"
                                                data-large_image_width="600"
                                                data-large_image_height="700"
                                                sizes="(max-width: 600px) 100vw, 600px"
                                        /></a>
                                    </div>
                                    @endforeach
                                </figure>

                                <div
                                    class="image-tools absolute bottom left z-3"
                                >
                                    <a
                                        href="#product-zoom"
                                        class="zoom-button button is-outline circle icon tooltip hide-for-small"
                                        title="Zoom"
                                    >
                                        <i class="icon-expand"></i>
                                    </a>
                                </div>
                            </div>

                            <div
                                class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4"
                                data-flickity-options='{
									"cellAlign": "left",
									"wrapAround": false,
									"autoPlay": false,
									"prevNextButtons": true,
									"asNavFor": ".product-gallery-slider",
									"percentPosition": true,
									"imagesLoaded": true,
									"pageDots": false,
									"rightToLeft": false,
									"contain": true
								}'
                            >
                                @foreach($productImages as $item)
                                <div class="col is-nav-selected first">
                                    <a>
                                        <img
                                            src="{{ asset('/'.$item->img_product)}}"
                                            alt=""
                                            width="300"
                                            height="300"
                                            class="attachment-woocommerce_thumbnail"
                                        />
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- .product-thumbnails -->
                        <div
                            class="product-info summary col-fit col entry-summary product-summary"
                        >
                            <nav class="woocommerce-breadcrumb breadcrumbs">
                                <a
                                    href="{{route('Home')}}"
                                    >Trang chủ</a
                                >
                                <span class="divider">&#47;</span>
                                <a
                                    href="{{route('WatchMen')}}"
                                    >Đồng hồ nam</a
                                >
                                <span class="divider">&#47;</span>
                                <a
                                    href="{{route('WatchWomen')}}"
                                    >Đồng hồ nữ</a
                                >
                            </nav>
                            <h1 class="product-title product_title entry-title">
                                {{$product->name}}
                            </h1>

                            <div class="is-divider small"></div>
                            <ul
                                class="next-prev-thumbs is-small show-for-medium"
                            >
                                <li class="prod-dropdown has-dropdown">
                                    <a
                                        href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-1/"
                                        rel="next"
                                        class="button icon is-outline circle"
                                    >
                                        <i class="icon-angle-left"></i>
                                    </a>
                                    <div class="nav-dropdown">
                                        <a
                                            title="Classico 1"
                                            href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-1/"
                                        >
                                            <img
                                                width="100"
                                                height="100"
                                                src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png"
                                                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image"
                                                alt=""
                                                srcset="
                                                    http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png 100w,
                                                    http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-150x150.png 150w,
                                                    http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png 300w
                                                "
                                                sizes="(max-width: 100px) 100vw, 100px"
                                        /></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="price-wrapper">
                                <p class="price product-page-price">
                                    <span
                                        class="woocommerce-Price-amount amount"
                                        >{{number_format($product->price)
                                        }}&nbsp;<span
                                            class="woocommerce-Price-currencySymbol"
                                            >&#8363;</span
                                        ></span
                                    >
                                </p>
                            </div>
                            <div class="product-short-description">
                                <p>{!!$product->information!!}</p>
                            </div>

                            <form
                                class="cart"
                                action="{{ route('AddToCart') }}"
                                method="get"
                                enctype="multipart/form-data"
                            >
                                <div class="quantity buttons_added">
                                    <input
                                        type="hidden"
                                        name="id"
                                        value="{{$product->id}}"
                                    />
                                    <input
                                        type="button"
                                        value="-"
                                        class="minus button is-form"
                                    />
                                    <label
                                        class="screen-reader-text"
                                        for="quantity"
                                        >Số lượng</label
                                    >
                                    <input
                                        type="number"
                                        id="quantity"
                                        class="input-text qty text"
                                        step="1"
                                        min="1"
                                        max="9999"
                                        name="quantity"
                                        value="1"
                                        title="SL"
                                        size="4"
                                        pattern="[0-9]*"
                                        inputmode="numeric"
                                        aria-labelledby=""
                                    />
                                    <input
                                        type="button"
                                        value="+"
                                        class="plus button is-form"
                                    />
                                </div>

                                <button
                                    type="submit"
                                    class="single_add_to_cart_button button alt"
                                >
                                    Thêm vào giỏ
                                </button>
                            </form>

                            <div class="clear"></div>
                        </div>
                        <!-- .summary -->

                        <div id="product-sidebar" class="mfp-hide">
                            <div class="sidebar-inner">
                                <div
                                    class="hide-for-off-canvas"
                                    style="width: 100%"
                                >
                                    <ul
                                        class="next-prev-thumbs is-small nav-right text-right"
                                    >
                                        <li class="prod-dropdown has-dropdown">
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-1/"
                                                rel="next"
                                                class="button icon is-outline circle"
                                            >
                                                <i class="icon-angle-left"></i>
                                            </a>
                                            <div class="nav-dropdown">
                                                <a
                                                    title="Classico 1"
                                                    href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-1/"
                                                >
                                                    <img
                                                        width="100"
                                                        height="100"
                                                        src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png"
                                                        class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image"
                                                        alt=""
                                                        srcset="
                                                            http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png 100w,
                                                            http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-150x150.png 150w,
                                                            http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png 300w
                                                        "
                                                        sizes="(max-width: 100px) 100vw, 100px"
                                                /></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <aside
                                    id="woocommerce_products-2"
                                    class="widget woocommerce widget_products"
                                >
                                    <span class="widget-title shop-sidebar"
                                        >Sản phẩm</span
                                    >
                                    <div class="is-divider small"></div>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/dich-vu-tu-van/"
                                            >
                                                <img
                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/woocommerce/assets/images/placeholder.png"
                                                    alt="Nơi nhập dữ liệu"
                                                    width="100"
                                                    class="woocommerce-placeholder wp-post-image"
                                                    height="100"
                                                />
                                                <span class="product-title"
                                                    >Dịch vụ tư vấn</span
                                                >
                                            </a>

                                            <span
                                                class="woocommerce-Price-amount amount"
                                                >300,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol"
                                                    >&#8363;</span
                                                ></span
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-10/"
                                            >
                                                <img
                                                    width="100"
                                                    height="100"
                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16-100x100.jpg"
                                                    class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                                    alt=""
                                                    srcset="
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16-100x100.jpg 100w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16-150x150.jpg 150w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16-300x300.jpg 300w
                                                    "
                                                    sizes="(max-width: 100px) 100vw, 100px"
                                                />
                                                <span class="product-title"
                                                    >Simple 10</span
                                                >
                                            </a>

                                            <span
                                                class="woocommerce-Price-amount amount"
                                                >700,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol"
                                                    >&#8363;</span
                                                ></span
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-9/"
                                            >
                                                <img
                                                    width="100"
                                                    height="100"
                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-100x100.jpg"
                                                    class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                                    alt=""
                                                    srcset="
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-100x100.jpg 100w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-150x150.jpg 150w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-300x300.jpg 300w
                                                    "
                                                    sizes="(max-width: 100px) 100vw, 100px"
                                                />
                                                <span class="product-title"
                                                    >Simple 9</span
                                                >
                                            </a>

                                            <span
                                                class="woocommerce-Price-amount amount"
                                                >700,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol"
                                                    >&#8363;</span
                                                ></span
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-8/"
                                            >
                                                <img
                                                    width="100"
                                                    height="100"
                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13-100x100.jpg"
                                                    class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                                    alt=""
                                                    srcset="
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13-100x100.jpg 100w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13-150x150.jpg 150w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13-300x300.jpg 300w
                                                    "
                                                    sizes="(max-width: 100px) 100vw, 100px"
                                                />
                                                <span class="product-title"
                                                    >Simple 8</span
                                                >
                                            </a>

                                            <span
                                                class="woocommerce-Price-amount amount"
                                                >700,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol"
                                                    >&#8363;</span
                                                ></span
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-7/"
                                            >
                                                <img
                                                    width="100"
                                                    height="100"
                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-100x100.jpg"
                                                    class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                                    alt=""
                                                    srcset="
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-100x100.jpg 100w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-150x150.jpg 150w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-300x300.jpg 300w
                                                    "
                                                    sizes="(max-width: 100px) 100vw, 100px"
                                                />
                                                <span class="product-title"
                                                    >Simple 7</span
                                                >
                                            </a>

                                            <span
                                                class="woocommerce-Price-amount amount"
                                                >700,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol"
                                                    >&#8363;</span
                                                ></span
                                            >
                                        </li>
                                    </ul>
                                </aside>
                                <aside
                                    id="flatsome_recent_posts-3"
                                    class="widget flatsome_recent_posts"
                                >
                                    <span class="widget-title shop-sidebar"
                                        >Bài viết mới nhất</span
                                    >
                                    <div class="is-divider small"></div>
                                    <ul>
                                        <li class="recent-blog-posts-li">
                                            <div
                                                class="flex-row recent-blog-posts align-top pt-half pb-half"
                                            >
                                                <div class="flex-col mr-half">
                                                    <div
                                                        class="badge post-date badge-circle"
                                                    >
                                                        <div
                                                            class="badge-inner bg-fill"
                                                            style="
                                                                background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4-150x150.jpg);
                                                                border: 0;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                                <!-- .flex-col -->
                                                <div class="flex-col flex-grow">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/"
                                                        title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới"
                                                        >Chiếc đồng hồ của những
                                                        CEO quyền lực nhất thế
                                                        giới</a
                                                    >
                                                    <span
                                                        class="post_comments op-7 block is-xsmall"
                                                        ><a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/#respond"
                                                        ></a
                                                    ></span>
                                                </div>
                                            </div>
                                            <!-- .flex-row -->
                                        </li>

                                        <li class="recent-blog-posts-li">
                                            <div
                                                class="flex-row recent-blog-posts align-top pt-half pb-half"
                                            >
                                                <div class="flex-col mr-half">
                                                    <div
                                                        class="badge post-date badge-circle"
                                                    >
                                                        <div
                                                            class="badge-inner bg-fill"
                                                            style="
                                                                background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2-150x150.jpg);
                                                                border: 0;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                                <!-- .flex-col -->
                                                <div class="flex-col flex-grow">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/12-chiec-dong-ho-danh-cho-nu-gioi-dat-gia-nhat-moi-thoi-dai/"
                                                        title="12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại"
                                                        >12 chiếc đồng hồ dành
                                                        cho nữ giới đắt giá nhất
                                                        mọi thời đại</a
                                                    >
                                                    <span
                                                        class="post_comments op-7 block is-xsmall"
                                                        ><a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/12-chiec-dong-ho-danh-cho-nu-gioi-dat-gia-nhat-moi-thoi-dai/#respond"
                                                        ></a
                                                    ></span>
                                                </div>
                                            </div>
                                            <!-- .flex-row -->
                                        </li>

                                        <li class="recent-blog-posts-li">
                                            <div
                                                class="flex-row recent-blog-posts align-top pt-half pb-half"
                                            >
                                                <div class="flex-col mr-half">
                                                    <div
                                                        class="badge post-date badge-circle"
                                                    >
                                                        <div
                                                            class="badge-inner bg-fill"
                                                            style="
                                                                background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3-150x150.jpg);
                                                                border: 0;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                                <!-- .flex-col -->
                                                <div class="flex-col flex-grow">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/10-thuong-hieu-dong-ho-cao-cap-hang-dau-moi-quy-ong-deu-quan-tam-rolex-xep-hang-so-3/"
                                                        title="10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm, Rolex xếp hạng số 3"
                                                        >10 thương hiệu đồng hồ
                                                        cao cấp hàng đầu mọi quý
                                                        ông đều quan tâm, Rolex
                                                        xếp hạng số 3</a
                                                    >
                                                    <span
                                                        class="post_comments op-7 block is-xsmall"
                                                        ><a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/10-thuong-hieu-dong-ho-cao-cap-hang-dau-moi-quy-ong-deu-quan-tam-rolex-xep-hang-so-3/#respond"
                                                        ></a
                                                    ></span>
                                                </div>
                                            </div>
                                            <!-- .flex-row -->
                                        </li>

                                        <li class="recent-blog-posts-li">
                                            <div
                                                class="flex-row recent-blog-posts align-top pt-half pb-half"
                                            >
                                                <div class="flex-col mr-half">
                                                    <div
                                                        class="badge post-date badge-circle"
                                                    >
                                                        <div
                                                            class="badge-inner bg-fill"
                                                            style="
                                                                background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/photo-1-150x150.jpg);
                                                                border: 0;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                                <!-- .flex-col -->
                                                <div class="flex-col flex-grow">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/6-chiec-dong-ho-an-tuong-tai-oscar-2019-tu-nhung-thuong-hieu-dinh-dam-voi-cai-gia-cat-co/"
                                                        title="6 chiếc đồng hồ ấn tượng tại Oscar 2019: Từ những thương hiệu đình đám với cái giá &#8220;cắt cổ&#8221;"
                                                        >6 chiếc đồng hồ ấn
                                                        tượng tại Oscar 2019: Từ
                                                        những thương hiệu đình
                                                        đám với cái giá
                                                        &#8220;cắt cổ&#8221;</a
                                                    >
                                                    <span
                                                        class="post_comments op-7 block is-xsmall"
                                                        ><a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/6-chiec-dong-ho-an-tuong-tai-oscar-2019-tu-nhung-thuong-hieu-dinh-dam-voi-cai-gia-cat-co/#respond"
                                                        ></a
                                                    ></span>
                                                </div>
                                            </div>
                                            <!-- .flex-row -->
                                        </li>

                                        <li class="recent-blog-posts-li">
                                            <div
                                                class="flex-row recent-blog-posts align-top pt-half pb-half"
                                            >
                                                <div class="flex-col mr-half">
                                                    <div
                                                        class="badge post-date badge-circle"
                                                    >
                                                        <div
                                                            class="badge-inner bg-fill"
                                                            style="
                                                                background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/news-1-150x150.jpg);
                                                                border: 0;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                                <!-- .flex-col -->
                                                <div class="flex-col flex-grow">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/casio-se-ra-mat-dong-ho-thong-minh-thuong-hieu-g-shock-de-canh-tranh-voi-apple-watch/"
                                                        title="Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock để cạnh tranh với Apple Watch?"
                                                        >Casio sẽ ra mắt đồng hồ
                                                        thông minh thương hiệu
                                                        G-Shock để cạnh tranh
                                                        với Apple Watch?</a
                                                    >
                                                    <span
                                                        class="post_comments op-7 block is-xsmall"
                                                        ><a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/casio-se-ra-mat-dong-ho-thong-minh-thuong-hieu-g-shock-de-canh-tranh-voi-apple-watch/#respond"
                                                        ></a
                                                    ></span>
                                                </div>
                                            </div>
                                            <!-- .flex-row -->
                                        </li>
                                    </ul>
                                </aside>
                            </div>
                            <!-- .sidebar-inner -->
                        </div>
                    </div>
                    <!-- .row -->
                </div>
                <!-- .product-main -->

                <div class="product-footer">
                    <div class="container">
                        <div class="woocommerce-tabs container tabbed-content">
                            <ul
                                class="product-tabs small-nav-collapse tabs nav nav-uppercase nav-tabs nav-normal nav-left"
                            >
                                <li class="description_tab active">
                                    <a href="#tab-description">Mô tả</a>
                                </li>
                                @if(Auth::guard("client")->check())
                                <li class="reviews_tab">
                                    <a href="#tab-reviews">Đánh giá ({{count($feedback)}})</a>
                                </li>
                                @endif
                            </ul>
                            <div class="tab-panels">
                                {{-- Không đụng vô mục này --}}
                                <div
                                    class="panel entry-content active"
                                    id="tab-description"
                                >
                                    {!!$product->descript!!}
                                </div>
                                {{-- Không đụng vô mục này --}}
                                <div
                                    class="panel entry-content"
                                    id="tab-reviews"
                                > 

                                  @if(Auth::guard("client")->check())
                                
                                  
                             
                              
                                    <div class="row" id="reviews">
                                        <div class="col large-12" id="comments">
                                            <h3 class="normal">Đánh giá</h3>

                                            <p class="woocommerce-noreviews">
                                                @foreach($feedback as $fb)
                                                <div class="cm-text">
                                                    <div class="cm-header" style="display:flex">
                                                        <div class="cm-name">{{$fb->customer->name}}</div>
                                                       
                                                        <div class="cm-rating">
                                                            @for($i = 0; $i < $fb->rating; $i++)
                                                            <i style="color:rgba(237, 237, 18, 0.807)"class="fa fa-star">
                                                            </i>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <div class="cm-content">{{$fb->content}}</div>
                                                </div>
                                                @endforeach
                                            </p>
                                        </div>

                                        <div
                                            id="review_form_wrapper"
                                            class="large-12 col"
                                        >
                                            <div
                                                id="review_form"
                                                class="col-inner"
                                            >
                                                <div
                                                    class="review-form-inner has-border"
                                                >
                                                    <div
                                                        id="respond"
                                                        class="comment-respond"
                                                    >
                                                        <h3
                                                            id="reply-title"
                                                            class="comment-reply-title"
                                                        >Bình luận
                                                            <small
                                                                ><a
                                                                    rel="nofollow"
                                                                    id="cancel-comment-reply-link"
                                                                    href="/donghohaitrieu/san-pham/ornare-sed-consequat/#respond"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                    >Hủy</a
                                                                ></small
                                                            >
                                                        </h3>
                                                        <form
                                                            action="{{route('createCm')}}"
                                                            method="post"   
                                                            id="commentform"
                                                            class="comment-form"
                                                            novalidate
                                                        >
                                                        {{ csrf_field() }}
                                                            <div
                                                                class="comment-form-rating"
                                                            >
                                                            <input style="display:none"type="text" name="product_id" value="{{$product->id}}">
                                                            <input style="display:none"type="text" name="customer_id" value="{{Auth::guard('client')->user()->id}}">
                                                                <label
                                                                    for="rating"
                                                                    >Đánh giá
                                                                    của
                                                                    bạn</label
                                                                ><select
                                                                    name="rating"
                                                                    id="rating"
                                                                    required
                                                                >
                                                                    <option
                                                                        value="5"
                                                                    >
                                                                        Rất tốt
                                                                    </option>
                                                                    
                                                                    <option
                                                                        value="4"
                                                                    >
                                                                        Tốt
                                                                    </option>
                                                                    <option
                                                                        value="3"
                                                                    >
                                                                        Trung
                                                                        bình
                                                                    </option>
                                                                    <option
                                                                        value="2"
                                                                    >
                                                                        Không tệ
                                                                    </option>
                                                                    <option
                                                                        value="1"
                                                                    >
                                                                        Rất tệ
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <p
                                                                class="comment-form-comment"
                                                            >
                                                                <label
                                                                    for="content"
                                                                    >Nhận xét
                                                                    của
                                                                    bạn&nbsp;<span
                                                                        class="required"
                                                                        >*</span
                                                                    ></label
                                                                ><textarea
                                                                    id="comment"
                                                                    name="content"
                                                                    cols="45"
                                                                    rows="8"
                                                                    required
                                                                ></textarea>
                                                            </p>
                                                          
                                                            <p
                                                                class="comment-form-email"
                                                            >
                                                               
                                                                <input
                                                                style="display:none"
                                                                    id="email"
                                                                    name="email"
                                                                    type="email"
                                                                    value="{{Auth::guard("client")->user()->email}}"
                                                                    size="30"
                                                                    readonly
                                                                />
                                                            </p>
                                                            <p
                                                                class="form-submit"
                                                            >
                                                                <input
                                                                    name="submit"
                                                                    type="submit"
                                                                    id="submit"
                                                                    class="submit"
                                                                    value="Gửi đi"
                                                                />
                                                                <input
                                                                    type="hidden"
                                                                    name="comment_post_ID"
                                                                    value="748"
                                                                    id="comment_post_ID"
                                                                />
                                                                <input
                                                                    type="hidden"
                                                                    name="comment_parent"
                                                                    id="comment_parent"
                                                                    value="0"
                                                                />
                                                            </p>
                                                        </form>
                                                    </div>
                                                    <!-- #respond -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- .tab-panels -->
                        </div>
                        <!-- .tabbed-content -->

                        <div
                            class="related related-products-wrapper product-section"
                        >
                            <h3
                                class="product-section-title container-width product-section-title-related pt-half pb-half uppercase"
                            >
                                Sản phẩm tương tự
                            </h3>

                            <div
                                class="row large-columns-5 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"
                                data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'
                            >
                                
                            @foreach($sptuongtu as $item)
                            @if($item->id == $product->id)
                            <?php continue;?>
                            @endif
                                <div
                                    class="product-small col has-hover post-778 product type-product status-publish has-post-thumbnail product_cat-dong-ho-nam product_cat-popular instock shipping-taxable purchasable product-type-simple"
                                >
                                    <div class="col-inner">
                                        <div
                                            class="badge-container absolute left top z-1"
                                        ></div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a
                                                        href="{{ asset($item->img)}}"
                                                    >
                                                        <img
                                                            width="300"
                                                            height="300"
                                                            src="{{ asset($item->img)}}"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt=""                                                                                                   
                                                        />
                                                    </a>
                                                </div>
                                                <div
                                                    class="image-tools is-small top right show-on-hover"
                                                >
                                                    <div class="wishlist-icon">
                                                        		<button class="wishlist-button button is-outline circle icon"  onclick="location.href='{{route('AddToWishlist',$item->id)}}'">

					<i class="icon-heart" ></i>			</button>
                                                        <div
                                                            class="wishlist-popup dark"
                                                        >
                                                            <div
                                                                class="yith-wcwl-add-to-wishlist add-to-wishlist-778"
                                                            >
                                                                <div
                                                                    class="yith-wcwl-add-button show"
                                                                    style="
                                                                        display: block;
                                                                    "
                                                                >
                                                                    <a
                                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add_to_wishlist=778"
                                                                        rel="nofollow"
                                                                        data-product-id="778"
                                                                        data-product-type="simple"
                                                                        class="add_to_wishlist"
                                                                    >
                                                                        Thêm yêu
                                                                        thích</a
                                                                    >
                                                                    <img
                                                                        src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                        class="ajax-loading"
                                                                        alt="loading"
                                                                        width="16"
                                                                        height="16"
                                                                        style="
                                                                            visibility: hidden;
                                                                        "
                                                                    />
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistaddedbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >Đã thêm
                                                                        yêu
                                                                        thích</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistexistsbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >The
                                                                        product
                                                                        is
                                                                        already
                                                                        in the
                                                                        wishlist!</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    style="
                                                                        clear: both;
                                                                    "
                                                                ></div>
                                                                <div
                                                                    class="yith-wcwl-wishlistaddresponse"
                                                                ></div>
                                                            </div>

                                                            <div
                                                                class="clear"
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="image-tools is-small hide-for-small bottom left show-on-hover"
                                                ></div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"
                                                ></div>
                                            </div>
                                            
                                            <!-- box-image -->

                                            <div
                                                class="box-text box-text-products text-center grid-style-2"
                                            >
                                                <div class="title-wrapper">
                                                    <p
                                                        class="name product-title"
                                                    >
                                                        <a
                                                            href="{{url('client/infor/'.$item->id)}}"
                                                            >{{$item->name}}</a
                                                        >
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"
                                                        ><span
                                                            class="woocommerce-Price-amount amount"
                                                            >{{number_format($item->price)}}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol"
                                                                >&#8363;</span
                                                            ></span
                                                        ></span
                                                    >
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a
                                                        href="{{route('PlusOne',$item->id)}}"
                                                        rel="nofollow"
                                                        data-product_id="778"
                                                        class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small"
                                                        >Thêm vào giỏ</a
                                                    >
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
                    <!-- container -->
                </div>
                <!-- product-footer -->
            </div>
            <!-- .product-container -->
        </div>
    </div>
    <!-- shop container -->
</main>

@endsection
