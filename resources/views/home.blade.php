@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@if (session()->has('success'))
   <script>
      $.notify("Gửi đơn hàng thành công!", "success");
   </script>
@endif
@endsection
@section('content')
<section class="awe-section-1">
   <section class="home-slider swiper-container gallery-top">
         <div class="swiper-wrapper">
            @foreach ($banners as $banner)
            <div class="swiper-slide">
               <a href="{{$banner->link}}" class="clearfix" title="{{$banner->title}}">
                  <picture>
                        <source 
                        media="(min-width: 1200px)"
                        srcset="{{$banner->image}}">
                        <source 
                        media="(min-width: 992px)"
                        srcset="{{$banner->image}}">
                        <source 
                        media="(min-width: 569px)"
                        srcset="{{$banner->image}}">
                        <source 
                        media="(max-width: 567px)"
                        srcset="{{$banner->image}}">
                        <img src="{{$banner->image}}" alt="{{$banner->title}}" class="img-responsive center-block d-block mx-auto" loading="lazy" />
                  </picture>
               </a>
            </div>
            @endforeach
         </div>
         <div class="swiper-pagination"></div>
         <div class="swiper-button-prev"></div>
         <div class="swiper-button-next"></div>
   </section>
   <script>
         var swiper = new Swiper('.home-slider', {
            autoplay: true,
            pagination: {
               el: '.home-slider .swiper-pagination',
               clickable: true,
            },
            navigation: {
               nextEl: ".swiper-button-next",
               prevEl: ".swiper-button-prev",
            },
         });
   </script>
</section>
<section class="awe-section-2">
   <section class="section_category">
         <div class="container">
         <div class="cate-list">
            <div class="swiper-container">
               <div class="swiper-wrapper">
                     <div class="swiper-slide">
                     <div class="cate-item">
                        <a class="image" href="#" title="BẢO HÀNG 1 ĐỔI 1">
                        <img class="image_cate_thumb lazy" width="100" height="100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{url('frontend/images/shield.png')}}" alt="BẢO HÀNG 1 ĐỔI 1"/>
                        </a>
                        <h4 class="title_cate_">BẢO HÀNG 1 ĐỔI 1<br>Trong 30 ngày</h4>
                     </div>
                     </div>
                     <div class="swiper-slide">
                     <div class="cate-item">
                        <a class="image" href="#" title="MUA HÀNG GIÁ SỈ, GIÁ TỐT">
                        <img class="image_cate_thumb lazy" width="100" height="100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{url('frontend/images/dollar.png')}}" alt="MUA HÀNG GIÁ SỈ, GIÁ TỐT"/>
                        </a>
                        <h4 class="title_cate_">MUA HÀNG GIÁ SỈ, GIÁ TỐT<br>Hàng chuẩn, ship nhanh</h4>
                     </div>
                     </div>
                     <div class="swiper-slide">
                     <div class="cate-item">
                        <a class="image" href="#" title="KIỂM TRA HÀNG">
                        <img class="image_cate_thumb lazy" width="100" height="100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{url('frontend/images/search.png')}}" alt="KIỂM TRA HÀNG"/>
                        </a>
                        <h4 class="title_cate_">KIỂM TRA HÀNG<br>Trước khi nhận hàng</h4>
                     </div>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </section>
   <script>
         /*cate*/
         window.addEventListener('DOMContentLoaded', (event) => {
            var swipercate = new Swiper('.cate-list .swiper-container', {
               slidesPerView: 6,
               //centeredSlides: true,
               loop: false,
               grabCursor: true,
               spaceBetween: 15,
               roundLengths: true,
               slideToClickedSlide: false,
               autoplay: false,
               breakpoints: {
                     300: {
                        slidesPerView: 2,
                        spaceBetween: 5
                     },
                     375: {
                        slidesPerView: 2,
                        spaceBetween: 5
                     },
                     500: {
                        slidesPerView: 2,
                        spaceBetween: 5
                     },
                     640: {
                        slidesPerView: 2,
                        spaceBetween: 5
                     },
                     768: {
                        slidesPerView: 3,
                        spaceBetween: 10
                     },
                     992: {
                        slidesPerView: 3,
                        spaceBetween: 15
                     }
               }
            });
            
         });
   </script>
</section>
<section class="awe-section-8">
   <section class="section_tab_product section_flash_sale section_product_tab_1">
         <div class="container">
         <div class="row">
            <div class="col-xl-12 col-12">
               <div class="not-dqtab e-tabs ajax-tab-1 ajax" data-section="ajax-tab-1">
                     <div class="title_modules clearfix">
                     <h2 class="title_tab">
                        Flash sale
                     </h2>
                     <div class="flashsale__countdown-wrapper d-block">
                        <span class="flashsale__countdown-label">Kết thúc trong</span>
                        <div class="flashsale__countdown">
                           <p></p>
                        </div>
                     </div>
                     </div>
                     <div class="tab-container">
                        <div class="tab-item tab-content tab-1 current">
                           <div class="contentfill">
                              <div class="swiper-container">
                                    <div class="swipertab swiper-tab-top swiper-first">
                                    <div class="swiper-wrapper">
                                       @foreach ($homeProductSale as $product)
                                       <div class="swiper-slide ajax-carousel">
                                             @include('layouts.product.item', ['product'=>$product])
                                       </div>
                                       @endforeach
                                    </div>
                                    </div>
                              </div>
                              <div class="swiper-button-prev"></div>
                              <div class="swiper-button-next"></div>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </section>
</section>
<section class="awe-section-6">
   <section class="section_3banner_only">
         <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-12">
               <div class="block-title">
                     <h2>
                     DANH MỤC SẢN PHẨM
                     </h2>
               </div>
               <div class="swiper-container swiper_3banner">
                     <div class="swiper-wrapper">
                        @foreach ($categoryhome as $cate)
                           <div class="swiper-slide">
                              <a class="banner_top_top" href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">
                              <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$cate->avatar}}" alt="{{languageName($cate->name)}}" loading="lazy"/>
                              </a>
                           </div>
                        @endforeach
                     </div>
                     <div class="swiper-button-prev" style="color: #96908f"></div>
                     <div class="swiper-button-next" style="color: #96908f"></div>
               </div>
            </div>
         </div>
         </div>
   </section>
   <script>
         /*cate*/
         window.addEventListener('DOMContentLoaded', (event) => {
            var swipercate = new Swiper('.swiper_3banner', {
               slidesPerView: 3,
               //centeredSlides: true,
               navigation: {
               nextEl: ".swiper-button-next",
               prevEl: ".swiper-button-prev",
               },
               loop: false,
               grabCursor: true,
               spaceBetween: 20,
               roundLengths: true,
               slideToClickedSlide: false,
               autoplay: true,
               breakpoints: {
                     300: {
                        slidesPerView: 1,
                        spaceBetween: 20
                     },
                     375: {
                        slidesPerView: 1,
                        spaceBetween: 20
                     },
                     500: {
                        slidesPerView: 1,
                        spaceBetween: 20
                     },
                     640: {
                        slidesPerView: 1,
                        spaceBetween: 20
                     },
                     768: {
                        slidesPerView: 2,
                        spaceBetween: 20
                     },
                     992: {
                        slidesPerView: 3,
                        spaceBetween: 20
                     }
               }
            });
         
         });
   </script>
</section>
@foreach ($categoryhome as $cate)
@if (count($cate->product) > 0)
   <section class="awe-section-3">
      <section class="section_product_hot module_product">
            <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-12">
                  <div class="heading">
                        <h2>
                        <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="Top {{languageName($cate->name)}} bán chạy nhất" class="text-uppercase">
                        TOP {{languageName($cate->name)}} BÁN CHẠY NHẤT
                        </a>
                        </h2>
                  </div>
                  <div class="row">
                     <div class="swiper-container swiper-product-cate">
                        <div class="swiper-wrapper">
                           @foreach ($cate->product as $product)
                              <div class="swiper-slide">
                                 @include('layouts.product.item', ['product'=>$product])
                              </div>
                           @endforeach

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </div>
      </section>
   </section>
@endif
@endforeach
<script>
   /*cate*/
   window.addEventListener('DOMContentLoaded', (event) => {
      var swipercate = new Swiper('.swiper-product-cate', {
         slidesPerView: 4,
         //centeredSlides: true,
         loop: false,
         grabCursor: true,
         spaceBetween: 20,
         roundLengths: true,
         slideToClickedSlide: false,
         autoplay: true,
         breakpoints: {
               300: {
                  slidesPerView: 2,
                  spaceBetween: 20
               },
               375: {
                  slidesPerView: 2,
                  spaceBetween: 20
               },
               500: {
                  slidesPerView: 2,
                  spaceBetween: 20
               },
               640: {
                  slidesPerView: 2,
                  spaceBetween: 20
               },
               768: {
                  slidesPerView: 3,
                  spaceBetween: 20
               },
               992: {
                  slidesPerView: 4,
                  spaceBetween: 20
               }
         }
      });
   
   });
</script>
<section class="awe-section-6">
   <section class="section_3banner_only">
         <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-12">
               <div class="block-title">
                     <h2>
                     THƯƠNG HIỆU NỔI BẬT
                     </h2>
               </div>
               <div class="swiper-container swiper_brands">
                     <div class="swiper-wrapper">
                        @foreach ($brandProduct as $brand)
                           <div class="swiper-slide">
                              <a class="banner_top_top" href="{{route('listProductBrand', ['slug'=>$brand->slug])}}" title="{{$brand->name}}">
                              <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$brand->image}}" alt="{{$brand->name}}" loading="lazy"/>
                              </a>
                           </div>
                        @endforeach
                     </div>
               </div>
            </div>
         </div>
         </div>
   </section>
   <script>
         /*cate*/
         window.addEventListener('DOMContentLoaded', (event) => {
            var swipercate = new Swiper('.swiper_brands', {
               slidesPerView: 3,
               //centeredSlides: true,
               loop: false,
               grabCursor: true,
               spaceBetween: 20,
               roundLengths: true,
               slideToClickedSlide: false,
               autoplay: true,
               breakpoints: {
                     300: {
                        slidesPerView: 3,
                        spaceBetween: 20
                     },
                     375: {
                        slidesPerView: 3,
                        spaceBetween: 20
                     },
                     500: {
                        slidesPerView: 6,
                        spaceBetween: 20
                     },
                     640: {
                        slidesPerView: 6,
                        spaceBetween: 20
                     },
                     768: {
                        slidesPerView: 8,
                        spaceBetween: 20
                     },
                     992: {
                        slidesPerView: 8,
                        spaceBetween: 20
                     }
               }
            });
         
         });
   </script>
</section>
{{-- <section class="awe-section-4">
   <section class="section_info_banner">
         <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
               <div class="content_left">
                     <h3>
                     Làm đẹp chuẩn spa <br class="d-none d-lg-block">Tự tin bước qua mùa dịch
                     </h3>
                     <p>
                     Freeship trong ngày nội thành HN, HCM
                     </p>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
               <a class="image" href="#" title="Banner lớn">
               <img class="lazy" width="595" height="230" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/100/445/219/themes/846932/assets/banner_big.jpg?1664359653669" alt="Banner lớn"/>
               </a>
            </div>
         </div>
         </div>
   </section>
</section> --}}
<section class="awe-section-9">
   <section class="section_blog_tab">
         <div class="container">
         <div class="title_module_main heading">
            <h2 class="h2">
               <span>TIN TỨC & SỰ KIỆN</span>
            </h2>
         </div>
         <div class="tab_project">
            <ul class="navtab">
               @foreach ($blogCate as $key=>$cate)
                  @if ($key == 0)
                     <li class="li-tab active loaded" data-id="{{$cate->id}}" data-url="{{route('getTabBlog')}}">
                        {{languageName($cate->name)}}
                     </li>
                  @else
                     <li class="li-tab " data-id="{{$cate->id}}" data-url="{{route('getTabBlog')}}">
                        {{languageName($cate->name)}}
                     </li>
                  @endif
               @endforeach
            </ul>
            <div class="content-tab">
               @foreach ($blogCate as $key=>$cate)
               @if ($key == 0)
                  <div id="tabindex-{{$cate->id}}" class="tab-item  active clearfix">
                     <div class="swiper-container">
                        <div class="swipertab swiper-tab-top swiper_blog_first">
                           <div class="swiper-wrapper">
                              @foreach ($cate->listBlog as $blog)
                                 <div class="swiper-slide">
                                       <div class="item_blog_base">
                                       <a class="thumb" href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                                       <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$blog->image}}" alt="{{languageName($blog->title)}}" class="lazy img-responsive" loading="lazy" />
                                       </a>
                                       <div class="content_blog clearfix">
                                          <div class="time-post">
                                             {{date('d/m/Y', strtotime($blog->created_at))}}
                                          </div>
                                          <h3><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}" class="a-title">{{languageName($blog->title)}}</a></h3>
                                          <p>
                                             {{languageName($blog->description)}}
                                          </p>
                                       </div>
                                       </div>
                                 </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                     <a class="view_all" href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="Tất cả bài viết">
                     Tất cả bài viết
                     </a>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>
                  </div>
               @else
                  <div id="tabindex-{{$cate->id}}" class="tab-item clearfix">
                  </div>
               @endif
               @endforeach
            </div>
         </div>
         </div>
   </section>
   <script>
         var swipertab = new Swiper('.swiper_blog_first', {
            slidesPerView: 3,
            //centeredSlides: true,
            loop: false,
            grabCursor: true,
            spaceBetween: 20,
            roundLengths: true,
            slideToClickedSlide: false,
            autoplay: false,
            navigation: {
               nextEl: '.section_blog_tab .swiper-button-next',
               prevEl: '.section_blog_tab .swiper-button-prev',
            },
            breakpoints: {
               300: {
                     slidesPerView: 1,
                     spaceBetween: 20
               },
               640: {
                     slidesPerView: 1,
                     spaceBetween: 20
               },
               768: {
                     slidesPerView: 1,
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
   </script>
</section>
<section class="awe-section-10">
   <section class="section_follow_ins">
         <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-12">
               <div class="block-title">
                     <h2>
                     FEEDBACK KHÁCH HÀNG
                     </h2>
               </div>
            </div>
            @foreach ($reviewCus as $item)
               <div class="col-xl-3 col-lg-3 col-6 item">
                  <div class="item_ins" title="{{languageName($item->name)}}">
                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->avatar}}" alt="{{languageName($item->name)}}" loading="lazy" style="width: 100%;" />
                        <div class="hover_item">
                           <div class="icon">
                              <span>{!!languageName($item->content)!!}</span>
                           </div>
                        </div>
                  </div>
               </div>
            @endforeach
         </div>
         </div>
   </section>
</section>
@endsection