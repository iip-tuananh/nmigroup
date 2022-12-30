
<!DOCTYPE html>
<html class="thankyou-page">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="NMIGROUP - Cảm ơn" />
	<title>NMIGROUP - Cảm ơn</title>

	<script>
		(function () {
			function asyncLoad() {
				var urls = [] || [];
				for (var i = 0; i < urls.length; i++) {
					var s = document.createElement('script');
					s.type = 'text/javascript';
					s.async = true;
					s.src = urls[i];
					var x = document.getElementsByTagName('script')[0];
					x.parentNode.insertBefore(s, x);
				}
			};
			window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
		})();
	</script>
    <link rel="shortcut icon" href="{{url(''.$setting->favicon)}}}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
	<link rel="stylesheet" href="{{asset('frontend/css/checkout.min.css')}}">

<!-- Begin checkout custom css -->
<style>
	
a,
.radio__label__icon,
.payment-due__price,
.spinner--active,
.icon-print,
.alert--info,
.order-summary-toggle__total-recap {
	color: #000000;
}
.input-checkbox:checked, .input-radio:checked {
	-webkit-box-shadow: 0 0 0 10px #000000 inset;
	box-shadow: 0 0 0 10px #000000 inset;
}
.product-thumbnail__quantity {
	background-color: #000000;
}
a:hover, a:focus,
.icon-print:hover {
	color: #000000;
}
.field__input:focus,
.select2-selection:focus, .select2-search__field:focus
{
	border-color: #000000;
	box-shadow: 0 0 0 1px #000000;
}
.select2-container--default .select2-results__option--highlighted.select2-results__option--selectable
{
	background-color: #000000;
}
.btn {
	background-color: #000000;
	border-color: #000000;
}
.btn:focus {
	outline-color:#000000;
}
.btn.disabled {
	background-color: #3F3F3F;
	border-color: #3F3F3F;
}
.btn:hover {
	background-color: #000000;
	border-color: #000000;
}
.btn, .btn:hover, .btn:focus {
	color: #FFFFFF;
}
.product-thumbnail__quantity {
	color: #FFFFFF;
}
</style>
<!-- End checkout custom css -->

<script src="//bizweb.dktcdn.net/assets/themes_support/libphonenumber-v3.2.30.min.js?1664359653669"></script>
<script src="{{ asset('frontend/js/checkout.vendor.min.js') }}"></script>
<script src="{{ asset('frontend/js/checkout.min.js') }}"></script>
</head>

<body data-no-turbolink>

	<header class="banner">
		<div class="wrap">
			<div class="logo logo--center">
	
		<a href="/">
			<img class="logo__image  logo__image--medium " alt="NMIGROUP" src="{{$setting->logo}}" />
		</a>
	
</div>
		</div>
	</header>
	<div class="content">
		<form>
			<div class="wrap wrap--mobile-fluid">
				<main class="main main--nosidebar">
					<header class="main__header">
						<div class="logo logo--center">
	
		<a href="/">
			<img class="logo__image  logo__image--medium " alt="NMIGROUP" src="{{$setting->logo}}" />
		</a>
	
</div>
					</header>
					<div class="main__content">
						<article class="row">
							<div class="col col--primary">
								<section class="section section--icon-heading">
									<div class="section__icon unprintable">
										<svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
											<g fill="none" stroke="#8EC343" stroke-width="2">
												<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
												<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
											</g>
										</svg>
									</div>
									<div class="thankyou-message-container">
										<h2 class="section__title">Cảm ơn bạn đã đặt hàng</h2>
										
										<p class="section__text">
											Đơn hàng của quý khách đã được cập nhật. <br />
                                            Chúng tôi sẽ sớm liên hệ với quý khách để bàn giao sản phẩm.<br/>
                                            Cảm ơn quý khách đã tin tưởng và sử dụng dịch vụ của chúng tôi.
										</p>
										
										
									</div>
								</section>
							</div>
							<div class="col col--secondary">
								<aside class="order-summary order-summary--bordered order-summary--is-collapsed" id="order-summary">
									<div class="order-summary__header">
										<div class="order-summary__title">
											Đơn hàng #{{$bill->code_bill}}
											<span class="unprintable">(1)</span>
										</div>
										<div class="order-summary__action hide-on-desktop unprintable">
											<a data-toggle="#order-summary" data-toggle-class="order-summary--is-collapsed" class="expandable">
												Xem chi tiết
											</a>
										</div>
									</div>
									<div class="order-summary__sections">
										<div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
											<table class="product-table">
												<tbody>
                                                    @php
                                                        $totalPrice = 0;
                                                    @endphp
													@foreach ($billdetail as $item)
                                                    @php
                                                        $totalPrice += $item->discount * $item->qty;
                                                    @endphp
													<tr class="product">
														<td class="product__image">
															<div class="product-thumbnail">
																<div class="product-thumbnail__wrapper">
																	<img src="{{$item->images}}" alt="" class="product-thumbnail__image" />
																</div>
																<span class="product-thumbnail__quantity unprintable">{{$item->qty}}</span>
															</div>
														</td>
														<th class="product__description">
															<span class="product__description__name">{{$item->name}}</span>
															
															
														</th>
														<td class="product__quantity printable-only">
															x {{$item->qty}}
														</td>
														<td class="product__price">
															
																{{number_format($item->discount, 0, '', '.')}}₫
															
														</td>
													</tr>
                                                    @endforeach
													
												</tbody>
											</table>
										</div>
										<div class="order-summary__section">
											<table class="total-line-table">
												<tbody class="total-line-table__tbody">
													
													
													<tr class="total-line total-line--subtotal">
														<th class="total-line__name">Tạm tính</th>
														<td class="total-line__price">{{number_format($totalPrice, 0, '', '.')}}₫</td>
													</tr>
													
													<tr class="total-line total-line--shipping-fee">
														<th class="total-line__name">Phí vận chuyển</th>
														<td class="total-line__price">
															
															30.000₫
															
														</td>
													</tr>
													
												</tbody>
											</table>
										</div>
										<div class="order-summary__section">
											<table class="total-line-table">
												<tbody class="total-line-table__tbody">
													<tr class="total-line payment-due">
														<th class="total-line__name">
															<span class="payment-due__label-total">Tổng cộng</span>
														</th>
														<td class="total-line__price">
															<span class="payment-due__price">{{number_format($totalPrice + 30000, 0, '', '.')}}₫</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</aside>
							</div>
							<div class="col col--primary">
								<section class="section">
									<div class="section__content section__content--bordered">
										
										<div class="row">
											
											<div class="col col--md-two">
												<h2>Thông tin mua hàng</h2>
												<p>{{$bill->cus_name}}</p>
												<p>{{$bill->cus_phone}}</p>
												<p>{{$bill->cus_email}}</p>
											</div>
											
											<div class="col col--md-two">
												<h2>Địa chỉ nhận hàng</h2>
												<p>{{$bill->cus_name}}</p>
												<p>{{$bill->cus_address}}</p>
											</div>
										</div>
										<div class="row">
											<div class="col col--md-two">
												<h2>Phương thức thanh toán</h2>
												<p>Thanh toán khi giao hàng (COD)</p>
											</div>
											<div class="col col--md-two">
												<h2>Phương thức vận chuyển</h2>
												<p>Giao hàng tận nơi</p>
											</div>
										</div>
										
									</div>
								</section>
								<section class="section unprintable">
									<div class="field__input-btn-wrapper field__input-btn-wrapper--floating">
										<a href="{{route('home')}}" class="btn btn--large">Tiếp tục mua hàng</a>
									</div>
								</section>
							</div>
						</article>
					</div>
					
				</main>
			</div>
		</form>
	</div>
</body>
</html>