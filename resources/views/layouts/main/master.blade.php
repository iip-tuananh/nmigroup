<!DOCTYPE html>
<html lang="vi">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>@yield('title')</title>
   <meta name="description" content="">
   <meta name="keywords" content="@yield('title')"/>
   <meta name="robots" content="noodp,index,follow" />
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <meta name="description" content="@yield('description')" />
   <link rel="canonical" href="{{url()->current()}}" />
   <meta property="og:locale" content="vi_VN" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="@yield('title')" />
   <meta property="og:description" content="@yield('description')" />
   <meta property="og:url" content="{{url()->current()}}" />
   <meta property="og:site_name" content="ahometh.vn" />
   <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
   <meta property="og:image" content="@yield('image')" />
   <meta property="og:image:secure_url" content="@yield('image')" />
   <meta property="og:image:width" content="598" />
   <meta property="og:image:height" content="333" />
   <meta property="og:image:alt" content="ahome-noi-that" />
   <meta property="og:image:type" content="image/jpeg" />
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="@yield('title')" />
   <meta name="twitter:description" content="@yield('description')" />
   <meta name="twitter:image" content="@yield('image')" />
   <!-- Fav Icon -->
   <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
   <link rel="preload" as='style' type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
   <link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}"/>
   <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
   <link rel="preload" as='style' href="{{asset('frontend/css/main.scss.css')}}" />
   <link href="{{asset('frontend/css/main.scss.css')}}" rel="stylesheet" type="text/css" />
   <link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/index.scss.css')}}" />
   <link href="{{asset('frontend/css/index.scss.css')}}" rel="stylesheet" type="text/css" />
   <link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/swiper.scss.css')}}" />
   <link href="{{asset('frontend/css/swiper.scss.css')}}" rel="stylesheet" type="text/css" />
   @yield('css')
   <script src="{{asset('frontend/js/jquery.js')}}" type="text/javascript"></script>
   <script>
      $(document).ready(function ($) {
            awe_lazyloadImage();
      });
      function awe_lazyloadImage() {
            var ll = new LazyLoad({
               elements_selector: ".lazy",
               load_delay: 200,
               threshold: 0
            });
      } window.awe_lazyloadImage=awe_lazyloadImage;
   </script>
</head>
<body class="index">
   <div class="opacity_menu"></div>
   @include('layouts.header.index')
   @yield('content')
   @include('layouts.footer.index')
   <link href="{{asset('frontend/css/bpr-products-module.css')}}" rel="stylesheet" type="text/css" />
   <div class="sapo-product-reviews-module"></div>
   <div class="backdrop__body-backdrop___1rvky"></div>
   <script src="{{asset('frontend/js/index-js.js')}}" type="text/javascript"></script>
   <link rel="preload" as="style" href="{{asset('frontend/css/ajaxcart.scss.css')}}"  type="text/css">
   <link href="{{asset('frontend/css/ajaxcart.scss.css')}}" rel="stylesheet" type="text/css" />
   <script>
      $('.nd-header-cart').click(function(){
      $('.cart-sidebar, .backdrop__body-backdrop___1rvky').addClass('active');
      });
      
      $(document).on('click','.backdrop__body-backdrop___1rvky, .cart_btn-close', function() {   
      $('.backdrop__body-backdrop___1rvky, .cart-sidebar, #popup-cart-desktop, .popup-cart-mobile').removeClass('active');
      return false;
      })
   </script>
   <div id="CartDrawer" class="cart-sidebar">
      <div class="clearfix cart_heading">
            <h4 class="cart_title">Giỏ hàng</h4>
            <div class="cart_btn-close" title="Đóng giỏ hàng">
            <svg class="Icon Icon--close" viewBox="0 0 16 14">
               <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
            </svg>
            </div>
      </div>
      <div class="drawer__inner">
         <div id="CartContainer" class="CartSideContainer">
            @if (count($cartcontent) > 0)
               <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items" data-url="{{route('removeCart')}}">
                  <div class="ajaxcart__row" data-url="{{route('updateCart')}}">
                  @php
                     $totalPrice = 0;
                  @endphp
                  @foreach ($cartcontent as $cart)
                  @php
                     $discountPrice = $cart['price'] - $cart['price'] * ($cart['discount'] / 100);
                     $totalPrice += $discountPrice * $cart['quantity'];
                  @endphp
                     <div class="ajaxcart__product cart_product" data-line="1">
                        <a href="#" class="ajaxcart__product-image cart_image">
                           <img width="80" height="80" src="{{$cart['image']}}">
                        </a>
                        <div class="grid__item cart_info">
                           <div class="ajaxcart__product-name-wrapper cart_name">
                              <a href="#" class="ajaxcart__product-name h4">{{languageName($cart['name'])}}</a>
                              @if ($cart['color'] != null || $cart['size'] != null)
                              <span class="ajaxcart__product-meta variant-title">{{$cart['size']}} / {{$cart['color']}}</span>  
                              @endif
                           </div>
                           <div class="grid">
                              <div class="grid__item one-half cart_select cart_item_name">
                                 <label class="cart_quantity">Số lượng</label>
                                 <div class="ajaxcart__qty input-group-btn">
                                    <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="" data-qty="0" data-line="1" aria-label="-" onclick="btnMinusDes({{$cart['id']}})">
                                    -
                                    </button>
                                    <input type="text" id="qtyItem{{$cart['id']}}" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="{{$cart['quantity']}}" min="0" data-id="" data-line="1" aria-label="quantity" pattern="[0-9]*">
                                    <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="" data-line="1" data-qty="2" aria-label="+" onclick="btnPlusDes({{$cart['id']}})">
                                    +							
                                    </button>
                                 </div>
                              </div>
                              <div class="grid__item one-half text-right cart_prices">
                                 <span class="cart-price">{{number_format($discountPrice,0,'','.')}}₫</span>
                                 <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="1" onclick="removeItem({{$cart['id']}})">Xóa</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                  <div class="ajaxcart__subtotal">
                     <div class="cart__subtotal">
                        <div class="cart__col-6">Tổng tiền:</div>
                        <div class="text-right cart__totle"><span class="total-price">{{number_format($totalPrice, 0, '', '.')}}₫</span></div>
                     </div>
                  </div>
                  <div class="cart__btn-proceed-checkout-dt">
                     <button onclick="location.href='{{route('checkout')}}'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
                  </div>
               </div>
            @else
            <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
               <div class="ajaxcart__row">
                  <div class="cart--empty-message">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 201.387 201.387" style="enable-background:new 0 0 201.387 201.387;" xml:space="preserve">
                        <g>
                           <g>
                              <path d="M129.413,24.885C127.389,10.699,115.041,0,100.692,0C91.464,0,82.7,4.453,77.251,11.916    c-1.113,1.522-0.78,3.657,0.742,4.77c1.517,1.109,3.657,0.78,4.768-0.744c4.171-5.707,10.873-9.115,17.93-9.115    c10.974,0,20.415,8.178,21.963,19.021c0.244,1.703,1.705,2.932,3.376,2.932c0.159,0,0.323-0.012,0.486-0.034    C128.382,28.479,129.679,26.75,129.413,24.885z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M178.712,63.096l-10.24-17.067c-0.616-1.029-1.727-1.657-2.927-1.657h-9.813c-1.884,0-3.413,1.529-3.413,3.413    s1.529,3.413,3.413,3.413h7.881l6.144,10.24H31.626l6.144-10.24h3.615c1.884,0,3.413-1.529,3.413-3.413s-1.529-3.413-3.413-3.413    h-5.547c-1.2,0-2.311,0.628-2.927,1.657l-10.24,17.067c-0.633,1.056-0.648,2.369-0.043,3.439s1.739,1.732,2.97,1.732h150.187    c1.231,0,2.364-0.662,2.97-1.732S179.345,64.15,178.712,63.096z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M161.698,31.623c-0.478-0.771-1.241-1.318-2.123-1.524l-46.531-10.883c-0.881-0.207-1.809-0.053-2.579,0.423    c-0.768,0.478-1.316,1.241-1.522,2.123l-3.509,15c-0.43,1.835,0.71,3.671,2.546,4.099c1.835,0.43,3.673-0.71,4.101-2.546    l2.732-11.675l39.883,9.329l-6.267,26.795c-0.43,1.835,0.71,3.671,2.546,4.099c0.263,0.061,0.524,0.09,0.782,0.09    c1.55,0,2.953-1.062,3.318-2.635l7.045-30.118C162.328,33.319,162.176,32.391,161.698,31.623z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M102.497,39.692l-3.11-26.305c-0.106-0.899-0.565-1.72-1.277-2.28c-0.712-0.56-1.611-0.816-2.514-0.71l-57.09,6.748    c-1.871,0.222-3.209,1.918-2.988,3.791l5.185,43.873c0.206,1.737,1.679,3.014,3.386,3.014c0.133,0,0.27-0.009,0.406-0.024    c1.87-0.222,3.208-1.918,2.988-3.791l-4.785-40.486l50.311-5.946l2.708,22.915c0.222,1.872,1.91,3.202,3.791,2.99    C101.379,43.261,102.717,41.564,102.497,39.692z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M129.492,63.556l-6.775-28.174c-0.212-0.879-0.765-1.64-1.536-2.113c-0.771-0.469-1.696-0.616-2.581-0.406L63.613,46.087    c-1.833,0.44-2.961,2.284-2.521,4.117l3.386,14.082c0.44,1.835,2.284,2.964,4.116,2.521c1.833-0.44,2.961-2.284,2.521-4.117    l-2.589-10.764l48.35-11.626l5.977,24.854c0.375,1.565,1.775,2.615,3.316,2.615c0.265,0,0.533-0.031,0.802-0.096    C128.804,67.232,129.932,65.389,129.492,63.556z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M179.197,64.679c-0.094-1.814-1.592-3.238-3.41-3.238H25.6c-1.818,0-3.316,1.423-3.41,3.238l-6.827,133.12    c-0.048,0.934,0.29,1.848,0.934,2.526c0.645,0.677,1.539,1.062,2.475,1.062h163.84c0.935,0,1.83-0.384,2.478-1.062    c0.643-0.678,0.981-1.591,0.934-2.526L179.197,64.679z M22.364,194.56l6.477-126.293h143.701l6.477,126.293H22.364z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M126.292,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C136.532,79.686,131.939,75.093,126.292,75.093z M126.292,88.747c-1.883,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    c1.882,0,3.413,1.531,3.413,3.413S128.174,88.747,126.292,88.747z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M75.092,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C85.332,79.686,80.739,75.093,75.092,75.093z M75.092,88.747c-1.882,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    s3.413,1.531,3.413,3.413S76.974,88.747,75.092,88.747z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M126.292,85.333h-0.263c-1.884,0-3.413,1.529-3.413,3.413c0,0.466,0.092,0.911,0.263,1.316v17.457    c0,12.233-9.953,22.187-22.187,22.187s-22.187-9.953-22.187-22.187V88.747c0-1.884-1.529-3.413-3.413-3.413    s-3.413,1.529-3.413,3.413v18.773c0,15.998,13.015,29.013,29.013,29.013s29.013-13.015,29.013-29.013V88.747    C129.705,86.863,128.176,85.333,126.292,85.333z"></path>
                           </g>
                        </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                     </svg>
                     <p>Không có sản phẩm nào trong giỏ hàng của bạn</p>
                  </div>
               </div>
            </div>
            <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
            </div>
            @endif
         </div>
      </div>
   </div>
   <link rel="preload" as='style' type="text/css" href="{{asset('frontend/css/animate.scss.css')}}">
   <link href="{{asset('frontend/css/animate.scss.css')}}" rel="stylesheet" type="text/css" />
   <link rel="preload" as="script" href="{{asset('frontend/js/main.js')}}" />
   <script src="{{asset('frontend/js/main.js')}}" type="text/javascript"></script>
   @yield('js')
   <div id="fb-root"></div>
   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="zW87aZjL"></script>
   <div id="popupCartModal" class="modal fade" role="dialog">
   </div>
   <script>
      //countdown flashsale
      setInterval(function time(){
      var d = new Date();
      var hours = 23 - d.getHours();
      var min = 59 - d.getMinutes();
      if((min + '').length == 1){
         min = '0' + min;
      }
      var sec = 59 - d.getSeconds();
      if((sec + '').length == 1){
            sec = '0' + sec;
      }
      jQuery('.flashsale__countdown p').html('<span style="width: 30px;">'+hours+'</span> : <span style="width: 40px;">'+min+'</span> : <span style="width: 40px;">'+sec+'</span>')
      }, 1000);
   </script>
   <script>
      $('.li-tab').click(function() {
         $('.li-tab').removeClass('active loaded');
         $('.tab-item').removeClass('active');
         $(this).addClass('active loaded');
         let id = $(this).data('id');
         let url = $(this).data('url');
         $('#tabindex-'+id).addClass('active');
         $.ajax({
            type: 'post',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: url,
            data: {id:id},
            success: function(data) {
               $('#tabindex-'+id).html(data.hm);
               var swipertab = new Swiper('.swiper_blog_two', {
                  slidesPerView: 3,
                  //centeredSlides: true,
                  loop: false,
                  grabCursor: true,
                  spaceBetween: 20,
                  roundLengths: true,
                  observer: true,
                  observeParents: true,
                  parallax:true,
                  slideToClickedSlide: false,
                  autoplay: false,
                  navigation: {
                        nextEl: '.section_blog_tab .swiper-button-next',
                        prevEl: '.section_blog_tab .swiper-button-prev',
                  },
                  breakpoints: {
                        300: {
                           slidesPerView: 2,
                           spaceBetween: 20
                        },
                        640: {
                           slidesPerView: 2,
                           spaceBetween: 20
                        },
                        768: {
                           slidesPerView: 2,
                           spaceBetween: 20
                        },
                        991: {
                           slidesPerView: 2,
                           spaceBetween: 20
                        },
                        1024: {
                           slidesPerView: 3,
                           spaceBetween: 20
                        },
                        1199: {
                           slidesPerView: 3,
                           spaceBetween: 20
                        }
                  }
               });
            },
            error: function(data) {
               console.log('lỗi');
            }
         })
      })
   </script>
   <script>
      //add-to-cart
      function formatNumber(num) {
         return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
      }
      $('.add_to_cart, .btn-buy-now').click(function(e) {
         e.preventDefault();
         let url = $(this).data('url');
         let id = $(this).parent().find('input[name=product_id]').val();
         let quantity = $('input[name=quantity]').val();
         let color = $('input[name=color]:checked').val();
         let size = $('input[name=size]:checked').val();
         $.ajax({
            type: 'post',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: url,
            data: {
               id:id,
               quantity: quantity,
               color: color,
               size: size
            },
            success: function(data){
               let cart = data;
               let totalPrice = 0;
               let countCart = Object.keys(data).length;
               let html = '';
               $.each(cart , function (index, value){
                  discountPrice = value.price - value.price * (value.discount / 100);
                  html += '<div class="ajaxcart__product cart_product">';
                  html += '<a href="#" class="ajaxcart__product-image cart_image">';
                  html += '<img width="80" height="80" src="'+value.image+'">';
                  html += '</a>';
                  html += '<div class="grid__item cart_info">';
                  html += '<div class="ajaxcart__product-name-wrapper cart_name">';
                  html += '<a href="#" class="ajaxcart__product-name h4">'+JSON.parse(value.name)[0].content+'</a>';
                  if (value.size != null || value.color != null) {
                     html += '<span class="ajaxcart__product-meta variant-title">'+value.size+' / '+value.color+'</span>';
                  }
                  html += '</div>';
                  html += '<div class="grid">';
                  html += '<div class="grid__item one-half cart_select cart_item_name">';
                  html += '<label class="cart_quantity">Số lượng</label>';
                  html += '<div class="ajaxcart__qty input-group-btn">';
                  html += '<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="" data-qty="0" data-line="1" aria-label="-" onclick="btnMinusDes('+value.id+')">-</button>';
                  html += '<input type="text" id="qtyItem'+value.id+'" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="'+value.quantity+'" min="0" data-id="" data-line="1" aria-label="quantity" pattern="[0-9]*">';
                  html += '<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="" data-line="1" data-qty="2" aria-label="+" onclick="btnPlusDes('+value.id+')">+</button>';
                  html += '</div>';
                  html += '</div>';
                  html += '<div class="grid__item one-half text-right cart_prices">';
                  html += '<span class="cart-price">';
                  html += formatNumber(discountPrice);
                  html += '₫</span>';
                  html += '<a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="1" onclick="removeItem('+value.id+')">Xóa</a>';
                  html += '</div>';
                  html += '</div>';
                  html += '</div>';
                  html += '</div>';
                  totalPrice += (value.price - value.price * (value.discount / 100)) * value.quantity;
               })
               total = formatNumber(totalPrice);
               $('#CartContainer .cart_body .ajaxcart__row').html(html);
               $('#CartContainer .total-price').html(total+'₫');
               $('.cart-drop .count_item_pr').html(countCart);
               $('.backdrop__body-backdrop___1rvky, .cart-sidebar').addClass('active');
            }
         })
      })
      // update cart
      function btnMinusDes(e) {
         var id = e;
         var result = document.getElementById('qtyItem'+id); var qty = result.value; if( !isNaN( qty ) && qty > 1 ) result.value--;
         var url = $('.ajaxcart__row').data('url');
         let quantityPc = result.value;
         $.ajax({
            type: 'get',
            url :url,
            data: {id:id, quantity:quantityPc},
            success: function(data) {
               let cart = data;
               let html = '';
               let totalPrice = 0;
               $.each(cart , function (index, value){
                  totalPrice += (value.price - value.price * (value.discount / 100)) * value.quantity;
               })
               total = formatNumber(totalPrice);
               $('#CartContainer .total-price').html(total+'₫');
            }
         })
      }
      function btnPlusDes(e) {
         var id = e;
         var result = document.getElementById('qtyItem'+id); var qty = result.value; if( !isNaN( qty )) result.value++;
         var url = $('.ajaxcart__row').data('url');
         let quantityPc = result.value;
         $.ajax({
            type: 'get',
            url :url,
            data: {id:id, quantity:quantityPc},
            success: function(data) {
               let cart = data;
               let html = '';
               let totalPrice = 0;
               $.each(cart , function (index, value){
                  totalPrice += (value.price - value.price * (value.discount / 100)) * value.quantity;
               })
               total = formatNumber(totalPrice);
               $('#CartContainer .total-price').html(total+'₫');
            }
         })
      }
      //remove cart
      function removeItem(e) {
               var id = e;
               var url = $('#CartContainer .cart_body').data('url');
               $.ajax({
                  type: 'get',
                  url: url,
                  data: {id :id},
                  success: function(data) {
                     let cart = data;
                     let totalPrice = 0;
                     let countCart = Object.keys(data).length;
                     let html = '';
                     $.each(cart , function (index, value){
                        discountPrice = value.price - value.price * (value.discount / 100);
                        html += '<div class="ajaxcart__product cart_product">';
                        html += '<a href="#" class="ajaxcart__product-image cart_image">';
                        html += '<img width="80" height="80" src="'+value.image+'">';
                        html += '</a>';
                        html += '<div class="grid__item cart_info">';
                        html += '<div class="ajaxcart__product-name-wrapper cart_name">';
                        html += '<a href="#" class="ajaxcart__product-name h4">'+JSON.parse(value.name)[0].content+'</a>';
                        html += '<span class="ajaxcart__product-meta variant-title">'+value.size+' / '+value.color+'</span>';
                        html += '</div>';
                        html += '<div class="grid">';
                        html += '<div class="grid__item one-half cart_select cart_item_name">';
                        html += '<label class="cart_quantity">Số lượng</label>';
                        html += '<div class="ajaxcart__qty input-group-btn">';
                        html += '<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="" data-qty="0" data-line="1" aria-label="-" onclick="btnMinusDes('+value.id+')">-</button>';
                        html += '<input type="text" id="qtyItem'+value.id+'" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="'+value.quantity+'" min="0" data-id="" data-line="1" aria-label="quantity" pattern="[0-9]*">';
                        html += '<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="" data-line="1" data-qty="2" aria-label="+" onclick="btnPlusDes('+value.id+')">+</button>';
                        html += '</div>';
                        html += '</div>';
                        html += '<div class="grid__item one-half text-right cart_prices">';
                        html += '<span class="cart-price">';
                        html += formatNumber(discountPrice);
                        html += '₫</span>';
                        html += '<a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="1" onclick="removeItem('+value.id+')">Xóa</a>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                        totalPrice += (value.price - value.price * (value.discount / 100)) * value.quantity;
                     })
                     total = formatNumber(totalPrice);
                     $('#CartContainer .cart_body .ajaxcart__row').html(html);
                     $('#CartContainer .total-price').html(total+'₫');
                     $('.cart-drop .count_item_pr').html(countCart);
                     $('.backdrop__body-backdrop___1rvky, .cart-sidebar').addClass('active');
                  },
               })
            }
   </script>
</body>
</html>