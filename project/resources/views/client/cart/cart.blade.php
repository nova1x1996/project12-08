@extends('client.layout.layout')
@section('title', 'product index')
@section('content')
<main id="main" class="">
	
@if(Session::has('cart'))


{{-- Kiểm tra mã giảm giá có chính xác hay không  --}}
@if (session('error'))
<div class="canhbao">
    {{ session('error') }}
</div>
@elseif(session('success'))
<div class="thanhcong">
    {{ session('success') }}
</div>
@endif
	<div id="content" class="content-area page-wrapper" role="main">
		<div class="row row-main">
			<div class="large-12 col">
				<div class="col-inner">					
					<div class="woocommerce">
						<div class="woocommerce-notices-wrapper"></div>
						<div class="woocommerce row row-large row-divided">
							<div class="col large-7 pb-0 ">
								<form class="woocommerce-cart-form" action="http://mauweb.monamedia.net/donghohaitrieu/gio-hang/" method="post">
									<div class="cart-wrapper sm-touch-scroll">
										<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
											<thead>
												<tr>
													<th class="product-name" colspan="3">Sản phẩm</th>
													<th class="product-price">Giá</th>
													<th class="product-quantity">Số lượng</th>
													<th class="product-subtotal">Tổng</th>
												</tr>
											</thead>
											<tbody>
												@foreach($product_cart as $cart)
												<tr class="woocommerce-cart-form__cart-item cart_item">
													<td class="product-remove">
														<a href="{{route('DeleteItem',$cart['item']['id'])}}" class="remove" aria-label="Xóa sản phẩm này" data-product_id="756" data-product_sku="P006-1-1-1">×</a>
													</td>
													<td class="product-thumbnail">
														<a href="{{url('client/infor/'.$cart['item']['id'])}}">
															<img width="300" height="300" src="{{ asset($cart['item']['img'])}}" sizes="(max-width: 300px) 100vw, 300px">
														</a>
													</td>
													<td class="product-name" data-title="Sản phẩm">
														<a href="{{url('client/infor/'.$cart['item']['id'])}}">{{$cart['item']['name']}}</a>
													</td>
													<td class="product-price" data-title="Giá">
														<span class="woocommerce-Price-amount amount">{{number_format($cart['item']['price'], 0, ',', ',')}}&nbsp;
															<span class="woocommerce-Price-currencySymbol">₫</span>
														</span>
													</td>
													<td class="product-quantity" data-title="Số lượng">
														<div class="quantity buttons_added">
															<a id="minus"href="{{route('DeleteOne',$cart['item']['id'])}}"><input type="button" value="-" class="minus button is-form"></a>
															<label class="screen-reader-text" for="quantity_62f5566a263dd">Số lượng</label>
															<input type="number" id="quantity" class="input-text qty text" step="1" min="0" max="9999" name="quantity" value="{{$cart['qty']}}" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="Classico 3 số lượng">
															<a id="minus"href="{{route('PlusOne',$cart['item']['id'])}}">	<input type="button" value="+" class="plus button is-form"></a>
														</div>
													</td>
													<td class="product-subtotal" data-title="Tổng">
														<span class="woocommerce-Price-amount amount">{{number_format($cart['item']['price']*$cart['qty'], 0, ',', ',')}}&nbsp;
															<span class="woocommerce-Price-currencySymbol">₫</span>
														</span>
													</td>
												</tr>
												@endforeach
												<tr>
													<td colspan="6" class="actions clear">
														<div class="continue-shopping pull-left text-left">
    														<a class="button-continue-shopping button primary is-outline" href="{{route('Home')}}">
																← Tiếp tục xem sản phẩm
															</a>
														</div>
														{{-- <button type="submit" class="button primary mt-0 pull-left small" name="update_cart" value="Cập nhật giỏ hàng" disabled="">Cập nhật giỏ hàng</button> --}}
														<input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="f036ae0de8"><input type="hidden" name="_wp_http_referer" value="/donghohaitrieu/gio-hang/">
													</td>
												</tr>

											</tbody>
										</table>
									</div>
								</form>
							</div>
							<div class="cart-collaterals large-5 col pb-0">
								<div class="cart-sidebar col-inner ">
									<div class="cart_totals ">
										<table cellspacing="0">
          									<thead>
												<tr>
													<th class="product-name" colspan="2" style="border-width:3px;">Tổng số lượng</th>
												</tr>
          									</thead>
          								</table>
										<h2>Tổng số lượng</h2>
										<table cellspacing="0" class="shop_table shop_table_responsive">
											<tbody>
												<tr class="cart-subtotal">
													<th>Tổng phụ</th>
													<td data-title="Tổng phụ">
														<span class="woocommerce-Price-amount amount">{{number_format(Session('cart')->totalPrice, 0, ',', ',')}}&nbsp;
															<span class="woocommerce-Price-currencySymbol">₫</span>
														</span>
													</td>
												</tr>		
												<tr class="woocommerce-shipping-totals shipping">
													<td class="shipping__inner" colspan="2">
														<table class="shipping__table ">
															<tbody>
																<tr>
																	<th>Giao hàng</th>
																	<td data-title="Giao hàng">
																		<ul id="shipping_method" class="shipping__list woocommerce-shipping-methods">
																			<li class="shipping__list_item">
																				<input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_free_shipping1" value="free_shipping:1" class="shipping_method">
																				<label class="shipping__list_label" for="shipping_method_0_free_shipping1">Giao hàng miễn phí</label>
																			</li>
																		</ul>
																		<p class="woocommerce-shipping-destination">
																			Ước tính cho <strong>Việt Nam</strong>.
																		</p>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
												<tr class="order-total">
													<th>Tổng</th>
													<td data-title="Tổng">
														<strong>
															<span class="woocommerce-Price-amount amount">{{number_format(Session('cart')->totalPrice, 0, ',', ',')}}&nbsp;
																<span class="woocommerce-Price-currencySymbol">₫</span>
															</span>
														</strong>
													</td>
												</tr>
											</tbody>
										</table>
										<div class="wc-proceed-to-checkout">
											<a href="{{route('OrderClientIndex')}}" class="checkout-button button alt wc-forward">
												Tiến hành thanh toán
											</a>
										</div>
									</div>
									<form class="checkout_coupon mb-0" action="{{ route('discountCart') }}" method="post">
										{{ csrf_field() }}
										<div class="coupon">
											<h3 class="widget-title">
												<i class="icon-tag"></i>
												Phiếu ưu đãi
											</h3>
											<input type="text" name="code" class="input-text" id="coupon_code" value="" placeholder="Mã ưu đãi">
											<input type="submit" class="is-form expand" name="apply_coupon" value="Áp dụng">
								
										</div>
									</form>
									<div class="cart-sidebar-content relative"></div>
								</div>
							</div>
						</div>
						<div class="cart-footer-content after-cart-content relative"></div>
					</div>
				</div><!-- .col-inner -->
			</div><!-- .large-12 -->
		</div><!-- .row -->
	</div>
    @else
	<div id="content" class="content-area page-wrapper" role="main">
		<div class="row row-main">
			<div class="large-12 col">
				<div class="col-inner">							
					<div class="woocommerce">
						<div class="text-center pt pb">
							<div class="woocommerce-notices-wrapper"></div>
							<p class="cart-empty">Chưa có sản phẩm nào trong giỏ hàng.</p>
							<p class="return-to-shop">
								<a class="button primary wc-backward" href="https://mauweb.monamedia.net/donghohaitrieu/cua-hang/">
									Quay trở lại cửa hàng			
								</a>
							</p>
						</div>
					</div>
				</div><!-- .col-inner -->
			</div><!-- .large-12 -->
		</div><!-- .row -->
	</div>
	@endif
	
	</main>

	@endsection