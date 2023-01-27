<!DOCTYPE html>
<!--[if IE 9]> <html lang="vi" class="ie9 loading-site no-js"> <![endif]-->
<!--[if IE 8]> <html lang="vi" class="ie8 loading-site no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="vi" class="loading-site no-js">
<!--<![endif]-->

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Đồng Hồ Mona</title>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="#" />
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<script src="{{
                asset('assets/library/js/jquery.countimator.min.js')
            }}"></script>
	<!-- Counter -->
	<script>
		$(function () {
			$(".counter").countimator();
		});
	</script>
	<script>
		document.documentElement.className =
			document.documentElement.className + " yes-js js_active js";
	</script>
	<script>
		(function (html) {
			html.className = html.className.replace(/\bno-js\b/, "js");
		})(document.documentElement);
	</script>

	<style>
		  table img{
        width: 55px;
        height: 55px;
      }
      form img{
        width: 60px;
        height: 60px;
      }
		.span-alert{
        display: none;
        margin-left: 15px;
       color: red;
       font-size: 13px;
    }
	.canhbao{
		text-align:center;
		color: #664d03;
		padding:10px;
		font-weight: bold;
		border: 1px solid #ffecb5;
		background-color: #fff3cd;
	}
	.thanhcong{
		text-align:center;
		color: #084298;
		padding:10px;
		font-weight: bold;
		border: 1px solid #b6d4fe;
		background-color: #cfe2ff;
	}


		.wishlist_table .add_to_cart,
		a.add_to_wishlist.button.alt {
			border-radius: 16px;
			-moz-border-radius: 16px;
			-webkit-border-radius: 16px;
		}
		/* CSS Ô tìm kiếm */
  .flex-row .search11{	
    max-width: 70%;
height: 3em;
border-top-left-radius: 5px;
border-bottom-left-radius: 5px;
float: right;
}
/* Css Danh Mục Sản Phẩm  */
.menu-danh-muc-san-pham-vertical-menu-container .form-check{

		font-size:16px;
		margin: 5px 0px;
	
}
.menu-danh-muc-san-pham-vertical-menu-container strong{
	font-size:17px;

}
.menu-danh-muc-san-pham-vertical-menu-container .checkmark{
	font-size: 15px;
	font-weight: normal;
}
.menu-danh-muc-san-pham-vertical-menu-container .btn-primary{
	border-color: #c89979;
	
}

		
			</style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="dns-prefetch" href="//mauweb.monamedia.net" />
	<link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
	<link rel="dns-prefetch" href="//s.w.org" />
	<link rel="alternate" type="application/rss+xml" title="Dòng thông tin Đồng Hồ Hải Triều &raquo;"
		href="https://mauweb.monamedia.net/donghohaitrieu/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Đồng Hồ Hải Triều &raquo;"
		href="https://mauweb.monamedia.net/donghohaitrieu/comments/feed/" />
	<script type="text/javascript">
		window._wpemojiSettings = {
			baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
			ext: ".png",
			svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
			svgExt: ".svg",
			source: {
				concatemoji:
					"http:\/\/mauweb.monamedia.net\/donghohaitrieu\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.15",
			},
		};
		!(function (a, b, c) {
			function d(a, b) {
				var c = String.fromCharCode;
				l.clearRect(0, 0, k.width, k.height),
					l.fillText(c.apply(this, a), 0, 0);
				var d = k.toDataURL();
				l.clearRect(0, 0, k.width, k.height),
					l.fillText(c.apply(this, b), 0, 0);
				var e = k.toDataURL();
				return d === e;
			}
			function e(a) {
				var b;
				if (!l || !l.fillText) return !1;
				switch (
				((l.textBaseline = "top"),
					(l.font = "600 32px Arial"),
					a)
				) {
					case "flag":
						return (
							!(b = d(
								[55356, 56826, 55356, 56819],
								[55356, 56826, 8203, 55356, 56819]
							)) &&
							((b = d(
								[
									55356, 57332, 56128, 56423, 56128,
									56418, 56128, 56421, 56128, 56430,
									56128, 56423, 56128, 56447,
								],
								[
									55356, 57332, 8203, 56128, 56423, 8203,
									56128, 56418, 8203, 56128, 56421, 8203,
									56128, 56430, 8203, 56128, 56423, 8203,
									56128, 56447,
								]
							)),
								!b)
						);
					case "emoji":
						return (
							(b = d(
								[55358, 56760, 9792, 65039],
								[55358, 56760, 8203, 9792, 65039]
							)),
							!b
						);
				}
				return !1;
			}
			function f(a) {
				var c = b.createElement("script");
				(c.src = a),
					(c.defer = c.type = "text/javascript"),
					b.getElementsByTagName("head")[0].appendChild(c);
			}
			var g,
				h,
				i,
				j,
				k = b.createElement("canvas"),
				l = k.getContext && k.getContext("2d");
			for (
				j = Array("flag", "emoji"),
				c.supports = {
					everything: !0,
					everythingExceptFlag: !0,
				},
				i = 0;
				i < j.length;
				i++
			)
				(c.supports[j[i]] = e(j[i])),
					(c.supports.everything =
						c.supports.everything && c.supports[j[i]]),
					"flag" !== j[i] &&
					(c.supports.everythingExceptFlag =
						c.supports.everythingExceptFlag &&
						c.supports[j[i]]);
			(c.supports.everythingExceptFlag =
				c.supports.everythingExceptFlag && !c.supports.flag),
				(c.DOMReady = !1),
				(c.readyCallback = function () {
					c.DOMReady = !0;
				}),
				c.supports.everything ||
				((h = function () {
					c.readyCallback();
				}),
					b.addEventListener
						? (b.addEventListener("DOMContentLoaded", h, !1),
							a.addEventListener("load", h, !1))
						: (a.attachEvent("onload", h),
							b.attachEvent("onreadystatechange", function () {
								"complete" === b.readyState &&
									c.readyCallback();
							})),
					(g = c.source || {}),
					g.concatemoji
						? f(g.concatemoji)
						: g.wpemoji &&
						g.twemoji &&
						(f(g.twemoji), f(g.wpemoji)));
		})(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="dashicons-css" href="{{
                asset('assets/library/css/dashicons.min.css?ver=4.9.15')
            }}" type="text/css" media="all" />
	<style id="dashicons-inline-css" type="text/css">
		[data-font="Dashicons"]:before {
			font-family: "Dashicons" !important;
			content: attr(data-icon) !important;
			speak: none !important;
			font-weight: normal !important;
			font-variant: normal !important;
			text-transform: none !important;
			line-height: 1 !important;
			font-style: normal !important;
			-webkit-font-smoothing: antialiased !important;
			-moz-osx-font-smoothing: grayscale !important;
		}
	</style>
	<link rel="stylesheet" id="menu-icons-extra-css" href="{{ asset('assets/library/css/extra.min.css?ver=0.10.2') }}"
		type="text/css" media="all" />
	<link rel="stylesheet" id="hrw-css" href="{{ asset('assets/library/css/extra.min.css?ver=0.10.2') }}"
		type="text/css" media="" />
	<link rel="stylesheet" id="contact-form-7-css" href="{{ asset('assets/library/css/styles.css?ver=5.0.5') }}"
		type="text/css" media="all" />
	<link rel="stylesheet" id="ot-vertical-menu-css" href="{{
                asset('assets/library/css/ot-vertical-menu.css?ver=1.1.0')
            }}" type="text/css" media="all" />
	<style id="woocommerce-inline-inline-css" type="text/css">
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel="stylesheet" id="jquery-selectBox-css" href="{{
                asset('assets/library/css/ot-vertical-menu.css?ver=1.1.0')
            }}" type="text/css" media="all" />
	<link rel="stylesheet" id="flatsome-icons-css" href="{{ asset('assets/library/css/fl-icons.css?ver=3.3') }}"
		type="text/css" media="all" />
	<link rel="stylesheet" id="flatsome-woocommerce-wishlist-css"
		href="{{ asset('assets/library/css/wishlist.css?ver=3.4') }}" type="text/css" media="all" />
	<link rel="stylesheet" id="easy-social-share-buttons-css" href="{{
                asset(
                    'assets/library/css/easy-social-share-buttons.css?ver=3.7.3'
                )
            }}" type="text/css" media="all" />
	<link rel="stylesheet" id="essb-cct-style-css" href="{{ asset('assets/library/css/style.css?ver=3.7.3') }}"
		type="text/css" media="all" />
	<link rel="stylesheet" id="bfa-font-awesome-css"
		href="//cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css?ver=4.7.0" type="text/css" media="all" />
	<link rel="stylesheet" id="flatsome-main-css" href="{{ asset('assets/library/css/flatsome.css?ver=3.8.1') }}"
		type="text/css" media="all" />
	<link rel="stylesheet" id="flatsome-shop-css" href="{{ asset('assets/library/css/flatsome-shop.css?ver=3.8.1') }}"
		type="text/css" media="all" />
	<link rel="stylesheet" id="flatsome-style-css" href="{{
                asset('assets/library/css/flatsome-child/style.css?ver=3.0')
            }}" type="text/css" media="all" />

	<script type="text/javascript" src="{{ asset('assets/library/js/jquery.js?ver=1.12.4') }}"></script>
	<script type="text/javascript" src="{{
                asset('assets/library/js/jquery-migrate.min.js?ver=1.4.1')
            }}"></script>

	<!-- Call Now Icon Animate Mobile 0.1.1 by Alan Tien (alantien.com) -->
	<style>
		.mypage-alo-ph-circle {
			border-color: #cc9a00;
		}

		.mypage-alo-ph-circle-fill {
			background-color: #cc9a00;
		}

		.mypage-alo-ph-img-circle {
			background-color: #cc9a00;
		}

		.mypage-alo-phone:hover .mypage-alo-ph-circle {
			border-color: #43b91e;
		}

		.mypage-alo-phone:hover .mypage-alo-ph-circle-fill {
			background-color: #43b91e;
		}

		.mypage-alo-phone:hover .mypage-alo-ph-img-circle {
			background-color: #43b91e;
		}
	</style>
	<style>
		.bg {
			opacity: 0;
			transition: opacity 1s;
			-webkit-transition: opacity 1s;
		}

		.bg-loaded {
			opacity: 1;
		}
	</style>
	<!--[if IE
            ]><link
                rel="stylesheet"
                type="text/css"
                href="http://mauweb.monamedia.net/donghohaitrieu/wp-content/themes/flatsome/assets/css/ie-fallback.css" />
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
            <script>
                var head = document.getElementsByTagName("head")[0],
                    style = document.createElement("style");
                style.type = "text/css";
                style.styleSheet.cssText =
                    ":before,:after{content:none !important";
                head.appendChild(style);
                setTimeout(function () {
                    head.removeChild(style);
                }, 0);
            </script>
            <script src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script
        ><![endif]-->
	<script type="text/javascript">
		WebFontConfig = {
			google: {
				families: [
					"Roboto:regular,700",
					"Roboto:regular,regular",
					"Roboto:regular,700",
					"Dancing+Script",
				],
			},
		};
		(function () {
			var wf = document.createElement("script");
			wf.src =
				"https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";
			wf.type = "text/javascript";
			wf.async = "true";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>
	<noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<style type="text/css">
		.essb_links_list li.essb_totalcount_item .essb_t_l_big .essb_t_nb:after,
		.essb_links_list li.essb_totalcount_item .essb_t_r_big .essb_t_nb:after {
			color: #777777;
			content: "shares";
			display: block;
			font-size: 11px;
			font-weight: normal;
			text-align: center;
			text-transform: uppercase;
			margin-top: -5px;
		}

		.essb_links_list li.essb_totalcount_item .essb_t_l_big,
		.essb_links_list li.essb_totalcount_item .essb_t_r_big {
			text-align: center;
		}

		.essb_displayed_sidebar .essb_links_list li.essb_totalcount_item .essb_t_l_big .essb_t_nb:after,
		.essb_displayed_sidebar .essb_links_list li.essb_totalcount_item .essb_t_r_big .essb_t_nb:after {
			margin-top: 0px;
		}

		.essb_displayed_sidebar_right .essb_links_list li.essb_totalcount_item .essb_t_l_big .essb_t_nb:after,
		.essb_displayed_sidebar_right .essb_links_list li.essb_totalcount_item .essb_t_r_big .essb_t_nb:after {
			margin-top: 0px;
		}

		.essb_totalcount_item_before,
		.essb_totalcount_item_after {
			display: block !important;
		}

		.essb_totalcount_item_before .essb_totalcount,
		.essb_totalcount_item_after .essb_totalcount {
			border: 0px !important;
		}

		.essb_counter_insidebeforename {
			margin-right: 5px;
			font-weight: bold;
		}

		.essb_width_columns_1 li {
			width: 100%;
		}

		.essb_width_columns_1 li a {
			width: 92%;
		}

		.essb_width_columns_2 li {
			width: 49%;
		}

		.essb_width_columns_2 li a {
			width: 86%;
		}

		.essb_width_columns_3 li {
			width: 32%;
		}

		.essb_width_columns_3 li a {
			width: 80%;
		}

		.essb_width_columns_4 li {
			width: 24%;
		}

		.essb_width_columns_4 li a {
			width: 70%;
		}

		.essb_width_columns_5 li {
			width: 19.5%;
		}

		.essb_width_columns_5 li a {
			width: 60%;
		}

		.essb_width_columns_6 li {
			width: 16%;
		}

		.essb_width_columns_6 li a {
			width: 55%;
		}

		.essb_links li.essb_totalcount_item_before,
		.essb_width_columns_1 li.essb_totalcount_item_after {
			width: 100%;
			text-align: left;
		}

		.essb_network_align_center a {
			text-align: center;
		}

		.essb_network_align_right .essb_network_name {
			float: right;
		}
	</style>
	<script type="text/javascript">
		var essb_settings = {
			ajax_url:
				"http:\/\/mauweb.monamedia.net\/donghohaitrieu\/wp-admin\/admin-ajax.php",
			essb3_nonce: "a7f1a0d83f",
			essb3_plugin_url:
				"http:\/\/mauweb.monamedia.net\/donghohaitrieu\/wp-content\/plugins\/easy-social-share-buttons3",
			essb3_facebook_total: true,
			essb3_admin_ajax: false,
			essb3_internal_counter: false,
			essb3_stats: false,
			essb3_ga: false,
			essb3_ga_mode: "simple",
			essb3_counter_button_min: 0,
			essb3_counter_total_min: 0,
			blog_url: "http:\/\/mauweb.monamedia.net\/donghohaitrieu\/",
			ajax_type: "wp",
			essb3_postfloat_stay: false,
			essb3_no_counter_mailprint: false,
			essb3_single_ajax: false,
			twitter_counter: "self",
			post_id: 16,
		};
	</script>
	<style id="custom-css" type="text/css">
		:root {
			--primary-color: #c89979;
		}

		.full-width .ubermenu-nav,
		.container,
		.row {
			max-width: 1230px;
		}

		.row.row-collapse {
			max-width: 1200px;
		}

		.row.row-small {
			max-width: 1222.5px;
		}

		.row.row-large {
			max-width: 1260px;
		}

		body.framed,
		body.framed header,
		body.framed .header-wrapper,
		body.boxed,
		body.boxed header,
		body.boxed .header-wrapper,
		body.boxed .is-sticky-section {
			max-width: 1260px;
		}

		.header-main {
			height: 100px;
		}

		#logo img {
			max-height: 100px;
		}

		#logo {
			width: 200px;
		}

		.header-bottom {
			min-height: 55px;
		}

		.header-top {
			min-height: 40px;
		}

		.has-transparent+.page-title:first-of-type,
		.has-transparent+#main>.page-title,
		.has-transparent+#main>div>.page-title,
		.has-transparent+#main .page-header-wrapper:first-of-type .page-title {
			padding-top: 180px;
		}

		.header.show-on-scroll,
		.stuck .header-main {
			height: 70px !important;
		}

		.stuck #logo img {
			max-height: 70px !important;
		}

		.search-form {
			width: 70%;
		}

		.header-bg-color,
		.header-wrapper {
			background-color: #333333;
		}

		.header-bottom {
			background-color: #333333;
		}

		.header-main .nav>li>a {
			line-height: 16px;
		}

		.header-bottom-nav>li>a {
			line-height: 16px;
		}

		@media (max-width: 549px) {
			.header-main {
				height: 70px;
			}

			#logo img {
				max-height: 70px;
			}
		}

		.nav-dropdown {
			border-radius: 3px;
		}

		.nav-dropdown {
			font-size: 100%;
		}

		.header-top {
			background-color: #333333 !important;
		}

		/* Color */
		.accordion-title.active,
		.has-icon-bg .icon .icon-inner,
		.logo a,
		.primary.is-underline,
		.primary.is-link,
		.badge-outline .badge-inner,
		.nav-outline>li.active>a,
		.nav-outline>li.active>a,
		.cart-icon strong,
		[data-color="primary"],
		.is-outline.primary {
			color: #c89979;
		}

		/* Color !important */
		[data-text-color="primary"] {
			color: #c89979 !important;
		}

		/* Background Color */
		[data-text-bg="primary"] {
			background-color: #c89979;
		}

		/* Background */
		.scroll-to-bullets a,
		.featured-title,
		.label-new.menu-item>a:after,
		.nav-pagination>li>.current,
		.nav-pagination>li>span:hover,
		.nav-pagination>li>a:hover,
		.has-hover:hover .badge-outline .badge-inner,
		button[type="submit"],
		.button.wc-forward:not(.checkout):not(.checkout-button),
		.button.submit-button,
		.button.primary:not(.is-outline),
		.featured-table .title,
		.is-outline:hover,
		.has-icon:hover .icon-label,
		.nav-dropdown-bold .nav-column li>a:hover,
		.nav-dropdown.nav-dropdown-bold>li>a:hover,
		.nav-dropdown-bold.dark .nav-column li>a:hover,
		.nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
		.is-outline:hover,
		.tagcloud a:hover,
		.grid-tools a,
		input[type="submit"]:not(.is-form),
		.box-badge:hover .box-text,
		input.button.alt,
		.nav-box>li>a:hover,
		.nav-box>li.active>a,
		.nav-pills>li.active>a,
		.current-dropdown .cart-icon strong,
		.cart-icon:hover strong,
		.nav-line-bottom>li>a:before,
		.nav-line-grow>li>a:before,
		.nav-line>li>a:before,
		.banner,
		.header-top,
		.slider-nav-circle .flickity-prev-next-button:hover svg,
		.slider-nav-circle .flickity-prev-next-button:hover .arrow,
		.primary.is-outline:hover,
		.button.primary:not(.is-outline),
		input[type="submit"].primary,
		input[type="submit"].primary,
		input[type="reset"].button,
		input[type="button"].primary,
		.badge-inner {
			background-color: #c89979;
		}

		/* Border */
		.nav-vertical.nav-tabs>li.active>a,
		.scroll-to-bullets a.active,
		.nav-pagination>li>.current,
		.nav-pagination>li>span:hover,
		.nav-pagination>li>a:hover,
		.has-hover:hover .badge-outline .badge-inner,
		.accordion-title.active,
		.featured-table,
		.is-outline:hover,
		.tagcloud a:hover,
		blockquote,
		.has-border,
		.cart-icon strong:after,
		.cart-icon strong,
		.blockUI:before,
		.processing:before,
		.loading-spin,
		.slider-nav-circle .flickity-prev-next-button:hover svg,
		.slider-nav-circle .flickity-prev-next-button:hover .arrow,
		.primary.is-outline:hover {
			border-color: #c89979;
		}

		.nav-tabs>li.active>a {
			border-top-color: #c89979;
		}

		.widget_shopping_cart_content .blockUI.blockOverlay:before {
			border-left-color: #c89979;
		}

		.woocommerce-checkout-review-order .blockUI.blockOverlay:before {
			border-left-color: #c89979;
		}

		/* Fill */
		.slider .flickity-prev-next-button:hover svg,
		.slider .flickity-prev-next-button:hover .arrow {
			fill: #c89979;
		}

		@media screen and (max-width: 549px) {
			body {
				font-size: 100%;
			}
		}

		body {
			font-family: "Roboto", sans-serif;
		}

		body {
			font-weight: 0;
		}

		body {
			color: #353535;
		}

		.nav>li>a {
			font-family: "Roboto", sans-serif;
		}

		.nav>li>a {
			font-weight: 700;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.heading-font,
		.off-canvas-center .nav-sidebar.nav-vertical>li>a {
			font-family: "Roboto", sans-serif;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.heading-font,
		.banner h1,
		.banner h2 {
			font-weight: 700;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.heading-font {
			color: #1c1c1c;
		}

		.alt-font {
			font-family: "Dancing Script", sans-serif;
		}

		.header:not(.transparent) .header-nav.nav>li>a {
			color: #ffffff;
		}

		.header:not(.transparent) .header-bottom-nav.nav>li>a {
			color: #ffffff;
		}

		.header:not(.transparent) .header-bottom-nav.nav>li>a:hover,
		.header:not(.transparent) .header-bottom-nav.nav>li.active>a,
		.header:not(.transparent) .header-bottom-nav.nav>li.current>a,
		.header:not(.transparent) .header-bottom-nav.nav>li>a.active,
		.header:not(.transparent) .header-bottom-nav.nav>li>a.current {
			color: #c89979;
		}

		.header-bottom-nav.nav-line-bottom>li>a:before,
		.header-bottom-nav.nav-line-grow>li>a:before,
		.header-bottom-nav.nav-line>li>a:before,
		.header-bottom-nav.nav-box>li>a:hover,
		.header-bottom-nav.nav-box>li.active>a,
		.header-bottom-nav.nav-pills>li>a:hover,
		.header-bottom-nav.nav-pills>li.active>a {
			color: #fff !important;
			background-color: #c89979;
		}

		@media screen and (min-width: 550px) {
			.products .box-vertical .box-image {
				min-width: 300px !important;
				width: 300px !important;
			}
		}

		.footer-2 {
			background-color: #777777;
		}

		.absolute-footer,
		html {
			background-color: #333333;
		}

		.label-new.menu-item>a:after {
			content: "New";
		}

		.label-hot.menu-item>a:after {
			content: "Hot";
		}

		.label-sale.menu-item>a:after {
			content: "Sale";
		}

		.label-popular.menu-item>a:after {
			content: "Popular";
		}
	</style>
</head>

<body
	class="home page-template page-template-page-blank page-template-page-blank-php page page-id-16 woocommerce-no-js lightbox nav-dropdown-has-arrow">
	<a class="skip-link screen-reader-text" href="#main">Skip to content</a>
	@include('client.layout.header')
	<div id="wrapper">
		@yield('content')
		<!-- #main -->
	</div>
	@include('client.layout.footer')

	<!-- Mobile Sidebar -->
	<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
		<div class="sidebar-menu no-scrollbar">
			<ul class="nav nav-sidebar nav-vertical nav-uppercase">
				<li class="header-search-form search-form html relative has-icon">
					<div class="header-search-form-wrapper">
						<div class="searchform-wrapper ux-search-box relative is-normal">
							<form role="search" method="get" class="searchform"
								action="https://mauweb.monamedia.net/donghohaitrieu/">
								<div class="flex-row relative">
									<div class="flex-col flex-grow">
										<input type="search" class="search-field mb-0" name="s" value=""
											placeholder="Tìm kiếm&hellip;" />
										<input type="hidden" name="post_type" value="product" />
									</div>
									<!-- .flex-col -->
									<div class="flex-col">
										<button type="submit"
											class="ux-search-submit submit-button secondary button icon mb-0">
											<i class="icon-search"></i>
										</button>
									</div>
									<!-- .flex-col -->
								</div>
								<!-- .flex-row -->
								<div class="live-search-results text-left z-top"></div>
							</form>
						</div>
					</div>
				</li>
				<li
					class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-16 current_page_item menu-item-24">
					<a href="https://mauweb.monamedia.net/donghohaitrieu/" class="nav-top-link">Trang chủ</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22">
					<a href="https://mauweb.monamedia.net/donghohaitrieu/gioi-thieu/" class="nav-top-link">Giới
						thiệu</a>
				</li>
				<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-916">
					<a href="https://mauweb.monamedia.net/donghohaitrieu/danh-muc/dong-ho-nam/"
						class="nav-top-link">Đồng hồ nam</a>
				</li>
				<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-917">
					<a href="https://mauweb.monamedia.net/donghohaitrieu/danh-muc/dong-ho-nu/" class="nav-top-link">Đồng
						hồ nữ</a>
				</li>
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-918">
					<a href="https://mauweb.monamedia.net/donghohaitrieu/category/blogs/" class="nav-top-link">Blogs</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
					<a href="https://mauweb.monamedia.net/donghohaitrieu/lien-he/" class="nav-top-link">Liên hệ</a>
				</li>
				<li class="account-item has-icon menu-item">
					<a href="https://mauweb.monamedia.net/donghohaitrieu/tai-khoan/"
						class="nav-top-link nav-top-not-logged-in">
						<span class="header-account-title">
							Đăng nhập
						</span> </a><!-- .account-login-link -->
				</li>
				<li class="html header-social-icons ml-0">
					<div class="social-icons follow-icons">
						<a href="http://url" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow"
							class="icon plain facebook tooltip" title="Follow on Facebook"><i
								class="icon-facebook"></i></a><a href="http://url" target="_blank"
							rel="noopener noreferrer nofollow" data-label="Instagram"
							class="icon plain instagram tooltip" title="Follow on Instagram"><i
								class="icon-instagram"></i></a><a href="http://url" target="_blank" data-label="Twitter"
							rel="noopener noreferrer nofollow" class="icon plain twitter tooltip"
							title="Follow on Twitter"><i class="icon-twitter"></i></a>
					</div>
				</li>
			</ul>
		</div>
		<!-- inner -->
	</div>
	<!-- #mobile-menu -->
	<a href="tel:0769220162" class="hotlinemp" rel="nofollow">
		<div class="mypage-alo-phone" style="">
			<div class="animated infinite zoomIn mypage-alo-ph-circle"></div>
			<div class="animated infinite pulse mypage-alo-ph-circle-fill"></div>
			<div class="animated infinite tada mypage-alo-ph-img-circle"></div>
		</div>
	</a>
	<div id="login-form-popup" class="lightbox-content mfp-hide">
		<div class="woocommerce-notices-wrapper"></div>
		<div class="account-container lightbox-inner">
			<div class="account-login-inner">
				<h3 class="uppercase">Đăng nhập</h3>

				<form class="woocommerce-form woocommerce-form-login login" method="post">
					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="username">Tên tài khoản hoặc địa chỉ email&nbsp;<span
								class="required">*</span></label>
						<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
							id="username" autocomplete="username" value="" />
					</p>
					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
						<input class="woocommerce-Input woocommerce-Input--text input-text" type="password"
							name="password" id="password" autocomplete="current-password" />
					</p>

					<p class="form-row">
						<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
							value="a9c7d7c36d" /><input type="hidden" name="_wp_http_referer"
							value="/donghohaitrieu/" />
						<button type="submit" class="woocommerce-Button button" name="login" value="Đăng nhập">
							Đăng nhập
						</button>
						<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
							<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme"
								type="checkbox" id="rememberme" value="forever" />
							<span>Ghi nhớ mật khẩu</span>
						</label>
					</p>
					<p class="woocommerce-LostPassword lost_password">
						<a href="https://mauweb.monamedia.net/donghohaitrieu/tai-khoan/lost-password/">Quên mật
							khẩu?</a>
					</p>
				</form>
			</div>
			<!-- .login-inner -->
		</div>
		<!-- .account-login-container -->
	</div>
	
	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, "woocommerce-js");
		document.body.className = c;
	</script>
	<script type="text/javascript">
		/* <![CDATA[ */
		var wpcf7 = {
			apiSettings: {
				root: "http:\/\/mauweb.monamedia.net\/donghohaitrieu\/wp-json\/contact-form-7\/v1",
				namespace: "contact-form-7\/v1",
			},
			recaptcha: {
				messages: {
					empty: "H\u00e3y x\u00e1c nh\u1eadn r\u1eb1ng b\u1ea1n kh\u00f4ng ph\u1ea3i l\u00e0 robot.",
				},
			},
		};
            /* ]]> */
	</script>
	
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.5"></script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/ot-flatsome-vertical-menu/assets/js/ot-vertical-menu.js?ver=1.1.0"></script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70"></script>
	
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.5.1"></script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4"></script>
	
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.5.1"></script>
	
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.5.1"></script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0"></script>
	<script type="text/javascript">
		/* <![CDATA[ */
		var yith_wcwl_l10n = {
			ajax_url: "\/donghohaitrieu\/wp-admin\/admin-ajax.php",
			redirect_to_cart: "no",
			multi_wishlist: "",
			hide_add_button: "1",
			is_user_logged_in: "",
			ajax_loader_url:
				"http:\/\/mauweb.monamedia.net\/donghohaitrieu\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif",
			remove_from_wishlist_after_add_to_cart: "yes",
			labels: {
				cookie_disabled:
					"We are sorry, but this feature is available only if cookies are enabled on your browser.",
				added_to_cart_message:
					'<div class="woocommerce-message">Product correctly added to cart<\/div>',
			},
			actions: {
				add_to_wishlist_action: "add_to_wishlist",
				remove_from_wishlist_action: "remove_from_wishlist",
				move_to_another_wishlist_action: "move_to_another_wishlsit",
				reload_wishlist_and_adding_elem_action:
					"reload_wishlist_and_adding_elem",
			},
		};
            /* ]]> */
	</script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=2.2.5"></script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-includes/js/hoverIntent.min.js?ver=1.8.1"></script>
	<script type="text/javascript">
		/* <![CDATA[ */
		var flatsomeVars = {
			ajaxurl:
				"http:\/\/mauweb.monamedia.net\/donghohaitrieu\/wp-admin\/admin-ajax.php",
			rtl: "",
			sticky_height: "70",
			user: { can_edit_pages: false },
		};
            /* ]]> */
	</script>
	
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/themes/flatsome/assets/js/flatsome.js?ver=3.8.1"></script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/themes/flatsome/inc/integrations/wc-yith-wishlist/wishlist.js?ver=3.4"></script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search.js?ver=3.8.1"></script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/themes/flatsome/assets/js/woocommerce.js?ver=3.8.1"></script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-includes/js/wp-embed.min.js?ver=4.9.15"></script>
	<script type="text/javascript">
		/* <![CDATA[ */
		var _zxcvbnSettings = {
			src: "http:\/\/mauweb.monamedia.net\/donghohaitrieu\/wp-includes\/js\/zxcvbn.min.js",
		};
            /* ]]> */
	</script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-includes/js/zxcvbn-async.min.js?ver=1.0"></script>
	<script type="text/javascript">
		/* <![CDATA[ */
		var pwsL10n = {
			unknown:
				"M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh",
			short: "R\u1ea5t y\u1ebfu",
			bad: "Y\u1ebfu",
			good: "Trung b\u00ecnh",
			strong: "M\u1ea1nh",
			mismatch: "M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp",
		};
            /* ]]> */
	</script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-admin/js/password-strength-meter.min.js?ver=4.9.15"></script>
	<script type="text/javascript">
		/* <![CDATA[ */
		var wc_password_strength_meter_params = {
			min_password_strength: "3",
			i18n_password_error:
				"Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.",
			i18n_password_hint:
				'G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! " ? $ % ^ & ).',
		};
            /* ]]> */
	</script>
	<script type="text/javascript"
		src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=3.5.1"></script>
	<style type="text/css"></style>
	<script type="text/javascript">
		var essb_clicked_lovethis = false;
		var essb_love_you_message_thanks = "Thank you for loving this.";
		var essb_love_you_message_loved = "You already love this today.";
		var essb_lovethis = function (oInstance) {
			if (essb_clicked_lovethis) {
				alert(essb_love_you_message_loved);
				return;
			}
			var element = jQuery(".essb_" + oInstance);
			if (!element.length) {
				return;
			}
			var instance_post_id =
				jQuery(element).attr("data-essb-postid") || "";
			var cookie_set = essb_get_lovecookie(
				"essb_love_" + instance_post_id
			);
			if (cookie_set) {
				alert(essb_love_you_message_loved);
				return;
			}
			if (typeof essb_settings != "undefined") {
				jQuery.post(
					essb_settings.ajax_url,
					{
						action: "essb_love_action",
						post_id: instance_post_id,
						service: "love",
						nonce: essb_settings.essb3_nonce,
					},
					function (data) {
						if (data) {
							alert(essb_love_you_message_thanks);
						}
					},
					"json"
				);
			}
			essb_tracking_only("", "love", oInstance, true);
		};
		var essb_get_lovecookie = function (name) {
			var value = "; " + document.cookie;
			var parts = value.split("; " + name + "=");
			if (parts.length == 2) return parts.pop().split(";").shift();
		};
		var essb_window = function (oUrl, oService, oInstance) {
			var element = jQuery(".essb_" + oInstance);
			var instance_post_id =
				jQuery(element).attr("data-essb-postid") || "";
			var instance_position =
				jQuery(element).attr("data-essb-position") || "";
			var wnd;
			var w = 800;
			var h = 500;
			if (oService == "twitter") {
				w = 500;
				h = 300;
			}
			var left = screen.width / 2 - w / 2;
			var top = screen.height / 2 - h / 2;
			if (oService == "twitter") {
				wnd = window.open(
					oUrl,
					"essb_share_window",
					"height=300,width=500,resizable=1,scrollbars=yes,top=" +
					top +
					",left=" +
					left
				);
			} else {
				wnd = window.open(
					oUrl,
					"essb_share_window",
					"height=500,width=800,resizable=1,scrollbars=yes,top=" +
					top +
					",left=" +
					left
				);
			}
			if (typeof essb_settings != "undefined") {
				if (essb_settings.essb3_stats) {
					if (typeof essb_handle_stats != "undefined") {
						essb_handle_stats(
							oService,
							instance_post_id,
							oInstance
						);
					}
				}
				if (essb_settings.essb3_ga) {
					essb_ga_tracking(oService, oUrl, instance_position);
				}
			}
			essb_self_postcount(oService, instance_post_id);
			var pollTimer = window.setInterval(function () {
				if (wnd.closed !== false) {
					window.clearInterval(pollTimer);
					essb_smart_onclose_events(oService, instance_post_id);
				}
			}, 200);
		};
		var essb_self_postcount = function (oService, oCountID) {
			if (typeof essb_settings != "undefined") {
				oCountID = String(oCountID);
				jQuery.post(
					essb_settings.ajax_url,
					{
						action: "essb_self_postcount",
						post_id: oCountID,
						service: oService,
						nonce: essb_settings.essb3_nonce,
					},
					function (data) {
						if (data) {
						}
					},
					"json"
				);
			}
		};
		var essb_smart_onclose_events = function (oService, oPostID) {
			if (typeof essbasc_popup_show == "function") {
				essbasc_popup_show();
			}
			if (typeof essb_acs_code == "function") {
				essb_acs_code(oService, oPostID);
			}
		};
		var essb_tracking_only = function (
			oUrl,
			oService,
			oInstance,
			oAfterShare
		) {
			var element = jQuery(".essb_" + oInstance);
			if (oUrl == "") {
				oUrl = document.URL;
			}
			var instance_post_id =
				jQuery(element).attr("data-essb-postid") || "";
			var instance_position =
				jQuery(element).attr("data-essb-position") || "";
			if (typeof essb_settings != "undefined") {
				if (essb_settings.essb3_stats) {
					if (typeof essb_handle_stats != "undefined") {
						essb_handle_stats(
							oService,
							instance_post_id,
							oInstance
						);
					}
				}
				if (essb_settings.essb3_ga) {
					essb_ga_tracking(oService, oUrl, instance_position);
				}
			}
			essb_self_postcount(oService, instance_post_id);
			if (oAfterShare) {
				essb_smart_onclose_events(oService, instance_post_id);
			}
		};
		var essb_pinterest_picker = function (oInstance) {
			essb_tracking_only("", "pinterest", oInstance);
			var e = document.createElement("script");
			e.setAttribute("type", "text/javascript");
			e.setAttribute("charset", "UTF-8");
			e.setAttribute(
				"src",
				"//assets.pinterest.com/js/pinmarklet.js?r=" +
				Math.random() * 99999999
			);
			document.body.appendChild(e);
		};
	</script>
	
</body>

</html>