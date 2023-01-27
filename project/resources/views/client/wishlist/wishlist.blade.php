@extends('client.layout.layout')
@section('title', 'product index')
@section('content')
<main id="main" class="">
	<div id="content" class="content-area page-wrapper" role="main">
		<div class="row row-main">
			<div class="large-12 col">
				<div class="col-inner">
					
					
															
							<div id="yith-wcwl-messages"></div>
	
	
	
	<form id="yith-wcwl-form" action="https://mauweb.monamedia.net/donghohaitrieu/wishlist/view/" method="post" class="woocommerce">
	
		<input type="hidden" id="yith_wcwl_form_nonce" name="yith_wcwl_form_nonce" value="a613c8a14a" /><input type="hidden" name="_wp_http_referer" value="/donghohaitrieu/wishlist/" />
		<!-- TITLE -->
		
		<!-- WISHLIST TABLE -->
		<table class="shop_table cart wishlist_table" data-pagination="no" data-per-page="5" data-page="1" data-id="" data-token="">
	
			
			<thead>
			<tr>
				
								<th class="product-remove"></th>
				
				<th class="product-thumbnail"></th>
	
				<th class="product-name">
					<span class="nobr">Product Name</span>
				</th>
	
				
					<th class="product-price">
						<span class="nobr">
							Unit Price                    </span>
					</th>
	
				
				
					<th class="product-stock-status">
						<span class="nobr">
							Stock Status                    </span>
					</th>
	
				
				
					<th class="product-add-to-cart"></th>
	
						</tr>
			</thead>
	
			<tbody>
				@if($wishlist->count() > 0 )
				@foreach($wishlist as $item)
					<tr id="yith-wcwl-row-748" data-row-id="748">
						<td class="product-remove">
							<div>
								<a href="{{route('RemoveFromWishlist',$item->product->id)}}" class="remove" title="Remove this product">×</a>
							</div>
						</td>
						<td class="product-thumbnail">
							<a href="/client/infor/{{$item->product->id}}">
								<img width="300" height="300" src="{{ asset('/'.$item->product->img)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 300px) 100vw, 300px">                            </a>
						</td>
						<td class="product-name">
							<a href="">{{$item->product->name}}</a>
						</td>
						<td class="product-price"><span class="woocommerce-Price-amount amount">{{number_format($item->product->price)}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>                            </td>
						<td class="product-stock-status"><span class="wishlist-in-stock">{{$item->product->state}}</span>                            </td>
						<td class="product-add-to-cart">
							<a href="{{route('PlusOne',$item->product->id)}}" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart button alt" data-product_id="748" data-product_sku="P006" aria-label="Thêm “Classico” vào giỏ hàng" rel="nofollow"> Add to Cart</a>                            
						</td>
					</tr>
				@endforeach
				@else
					<tr>
						<td colspan="6" class="wishlist-empty">No products were added to the wishlist</td>
					</tr>
				@endif
			</tbody>
	
			<tfoot>
			<tr>
				<td colspan="6">
					
					
								</td>
			</tr>
			</tfoot>
	
		</table>
	
		<input type="hidden" id="yith_wcwl_edit_wishlist" name="yith_wcwl_edit_wishlist" value="7f86624cdd" /><input type="hidden" name="_wp_http_referer" value="/donghohaitrieu/wishlist/" />
				<input type="hidden" value="" name="wishlist_id" id="wishlist_id">
		
		
	</form>
	
	
	
	
							
													</div><!-- .col-inner -->
			</div><!-- .large-12 -->
		</div><!-- .row -->
	</div>
	
	
	</main>

	@endsection