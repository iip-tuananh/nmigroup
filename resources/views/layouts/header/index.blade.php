<header class="header">
   <div class="top_header">
         <h1 class="text_top_header text-white" style="font-size: 14px; margin-bottom: 0">Chào mừng bạn đến với {{$setting->company}} <span>|</span> <a class="d-xs-none" target="_blank" href="https://www.google.com/maps/place/{{$setting->address1}}" title="{{$setting->address1}}">{{$setting->address1}}</a></h1>
   </div>
   <div class="middle-header">
         <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-2 col-lg-2 d-lg-block d-none block-logo">
               <a href="{{route('home')}}" class="logo">	
               <img src="{{$setting->logo}}" alt="{{$setting->company}}">	
               </a>
            </div>
            <div class="col-xl-7 col-lg-8 block-search">
               <div class="nd-header-search nd-searchs">
                     <form action="{{route('search_result')}}" method="post" class="nd-header-search-form" role="search">
                        @csrf
                     <input type="text" name="keyword" class="search-auto form-control" placeholder="Tìm kiếm..." autocomplete="off" />
                     <button class="btn btn-default" type="submit" aria-label="Tìm kiếm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4057 12.4769C16.0756 10.1337 15.8595 6.85958 13.7572 4.75736C11.4141 2.41421 7.61509 2.41421 5.27195 4.75736C2.9288 7.1005 2.9288 10.8995 5.27195 13.2426C7.37417 15.3449 10.6483 15.561 12.9915 13.8911L18.707 19.6066L20.1212 18.1924L14.4057 12.4769ZM12.343 6.17157C13.9051 7.73367 13.9051 10.2663 12.343 11.8284C10.7809 13.3905 8.24826 13.3905 6.68616 11.8284C5.12406 10.2663 5.12406 7.73367 6.68616 6.17157C8.24826 4.60948 10.7809 4.60948 12.343 6.17157Z" fill="#333333"/>
                        </svg>
                     </button>
                     </form>
               </div>
            </div>
            <div class="col-xl-3 col-lg-2 d-lg-flex header-right">
               <div class="header-page-link">
                     <ul class="group-account">
                     <li class="block-wish">
                        <div class="icon d-lg-none">
                           <a href="tel:{{$setting->phone1}}" title="Hotline: {{$setting->phone1}}" rel="nofollow">
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              width="33.834px" height="33.834px" viewBox="0 0 33.834 33.834" style="enable-background:new 0 0 33.834 33.834;"
                              xml:space="preserve">
                              <g>
                                 <path d="M32.253,29.334v4.5H1.581v-4.501c0-2.125,1.832-4.741,4.07-5.804l4.98-2.366l3.457,7.204l1.77-4.799
                                    c0.349,0.066,0.695,0.154,1.059,0.154s0.709-0.088,1.059-0.154l1.68,4.563l3.389-7.048l5.141,2.445
                                    C30.421,24.591,32.253,27.207,32.253,29.334z M6.105,13.562v-3.25c0-0.551,0.287-1.034,0.72-1.312c0.581-5.058,4.883-9,10.094-9
                                    s9.514,3.942,10.096,9c0.432,0.278,0.719,0.761,0.719,1.312v3.25c0,0.863-0.699,1.563-1.563,1.563s-1.563-0.7-1.563-1.563v-0.683
                                    c-0.846,4.255-3.961,8.205-7.688,8.205c-3.727,0-6.842-3.95-7.688-8.205v0.683c0,0.7-0.465,1.286-1.1,1.485
                                    c0.622,2.117,2.002,3.946,3.908,5.146c0.352-0.116,0.796-0.094,1.227,0.13c0.692,0.36,1.045,1.06,0.783,1.56
                                    c-0.261,0.5-1.033,0.612-1.729,0.251c-0.508-0.265-0.83-0.71-0.864-1.126c-2.183-1.396-3.731-3.533-4.37-5.998
                                    C6.513,14.78,6.105,14.22,6.105,13.562z M7.89,8.635c0.047,0.003,0.092,0.004,0.137,0.021C8.14,8.698,8.222,8.779,8.279,8.874
                                    c0.339,0.144,0.609,0.407,0.775,0.733C9.515,5.286,12.855,3,16.917,3c4.062,0,7.402,2.286,7.863,6.607
                                    c0.229-0.449,0.664-0.77,1.185-0.837c-0.676-4.393-4.47-7.771-9.048-7.771C12.386,1,8.622,4.309,7.89,8.635z"/>
                              </g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                              <g></g>
                           </svg>
                           </a>
                        </div>
                        <div class="icon hotline">
                           <a href="tel:0837600533" title="Hotline: 0837600533" rel="nofollow">
                              <img src="https://lapari.vn/frontend/images/hotline.png" alt="" loading="lazy">
                              <p>0837600533</p>
                           </a>
                        </div>
                        <style>
                           @media  only screen and (max-width: 991px) {
                              .group-account .hotline{
                                 display: none;
                              }
                           }
                           .group-account .hotline img {
                              width: 170px;
                           }
                           .group-account .hotline p {
                              position: absolute;
                              top: 66%;
                              left: 60%;
                              transform: translate(-50%, -50%);
                              color: #fb0301;
                              font-size: 18px;
                              margin: 0;
                           }
                        </style>
                     </li>
                     <li class="cart-drop">
                        <div class="icon">
                           <a href="javascript:;" class="nd-header-cart" aria-label="Xem giỏ hàng" title="Giỏ hàng">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="22" viewBox="0 0 18 22" fill="none">
                                 <path d="M17.5373 17.4929L16.6053 6.23836C16.5473 5.51328 15.9074 4.94527 15.1486 4.94527H13.3077V4.86598C13.3077 2.73426 11.498 1 9.27364 1C7.04924 1 5.23958 2.73426 5.23958 4.86598V4.94527H3.39869C2.63989 4.94527 1.99998 5.51324 1.94206 6.23684L1.00986 17.4944C0.937715 18.3958 1.26397 19.2932 1.90501 19.9564C2.54598 20.6196 3.45462 21 4.39803 21H14.1493C15.0926 21 16.0013 20.6196 16.6423 19.9564C17.2834 19.2932 17.6096 18.3958 17.5373 17.4929ZM6.46199 4.86598C6.46199 3.38023 7.7233 2.17148 9.27364 2.17148C10.824 2.17148 12.0853 3.38027 12.0853 4.86598V4.94527H6.46199V4.86598ZM15.7454 19.1604C15.329 19.5912 14.7621 19.8285 14.1493 19.8285H4.39803C3.78515 19.8285 3.21829 19.5912 2.80183 19.1603C2.38534 18.7295 2.18182 18.1696 2.22861 17.5855L3.16081 6.32797C3.17027 6.20953 3.27482 6.11676 3.39873 6.11676H5.23962V7.55953C5.23962 7.88301 5.51329 8.14527 5.85083 8.14527C6.18837 8.14527 6.46204 7.88301 6.46204 7.55953V6.11676H12.0854V7.55953C12.0854 7.88301 12.359 8.14527 12.6966 8.14527C13.0341 8.14527 13.3078 7.88301 13.3078 7.55953V6.11676H15.1486C15.2725 6.11676 15.377 6.20953 15.3867 6.32949L16.3187 17.584C16.3655 18.1696 16.1619 18.7294 15.7454 19.1604Z" fill="#333333"/>
                                 <path d="M17.5373 17.4929L17.7865 17.473L17.7865 17.4723L17.5373 17.4929ZM16.6053 6.23836L16.3561 6.25832L16.3562 6.25899L16.6053 6.23836ZM13.3077 4.94527H13.0577V5.19527H13.3077V4.94527ZM13.3077 4.86598H13.5577H13.3077ZM5.23958 4.94527V5.19527H5.48958V4.94527H5.23958ZM1.94206 6.23684L2.19121 6.25747L2.19127 6.25678L1.94206 6.23684ZM1.00986 17.4944L0.760714 17.4738L0.760659 17.4745L1.00986 17.4944ZM1.90501 19.9564L2.08478 19.7826L2.08477 19.7826L1.90501 19.9564ZM12.0853 4.94527V5.19527H12.3353V4.94527H12.0853ZM6.46199 4.94527H6.21199V5.19527H6.46199V4.94527ZM15.7454 19.1604L15.9252 19.3341L15.9252 19.3341L15.7454 19.1604ZM2.80183 19.1603L2.9816 18.9866L2.98158 18.9866L2.80183 19.1603ZM2.22861 17.5855L1.97946 17.5649L1.97941 17.5656L2.22861 17.5855ZM3.16081 6.32797L3.40996 6.3486L3.41002 6.34787L3.16081 6.32797ZM5.23962 6.11676H5.48962V5.86676H5.23962V6.11676ZM6.46204 6.11676V5.86676H6.21204V6.11676H6.46204ZM12.0854 6.11676H12.3354V5.86676H12.0854V6.11676ZM13.3078 6.11676V5.86676H13.0578V6.11676H13.3078ZM15.3867 6.32949L15.1375 6.34948L15.1375 6.35012L15.3867 6.32949ZM16.3187 17.584L16.5679 17.5641L16.5678 17.5634L16.3187 17.584ZM17.7865 17.4723L16.8545 6.21773L16.3562 6.25899L17.2882 17.5135L17.7865 17.4723ZM16.8545 6.2184C16.7853 5.35469 16.0288 4.69527 15.1486 4.69527V5.19527C15.786 5.19527 16.3092 5.67187 16.3561 6.25832L16.8545 6.2184ZM15.1486 4.69527H13.3077V5.19527H15.1486V4.69527ZM13.5577 4.94527V4.86598H13.0577V4.94527H13.5577ZM13.5577 4.86598C13.5577 2.58626 11.626 0.75 9.27364 0.75V1.25C11.3701 1.25 13.0577 2.88225 13.0577 4.86598H13.5577ZM9.27364 0.75C6.9213 0.75 4.98958 2.58627 4.98958 4.86598H5.48958C5.48958 2.88225 7.17717 1.25 9.27364 1.25V0.75ZM4.98958 4.86598V4.94527H5.48958V4.86598H4.98958ZM5.23958 4.69527H3.39869V5.19527H5.23958V4.69527ZM3.39869 4.69527C2.51868 4.69527 1.76189 5.35447 1.69286 6.21689L2.19127 6.25678C2.23808 5.67201 2.7611 5.19527 3.39869 5.19527V4.69527ZM1.69292 6.21621L0.760715 17.4738L1.25901 17.515L2.19121 6.25747L1.69292 6.21621ZM0.760659 17.4745C0.682657 18.449 1.03547 19.4165 1.72526 20.1301L2.08477 19.7826C1.49246 19.1698 1.19277 18.3426 1.25906 17.5144L0.760659 17.4745ZM1.72524 20.1301C2.41451 20.8433 3.38857 21.25 4.39803 21.25V20.75C3.52066 20.75 2.67744 20.3959 2.08478 19.7826L1.72524 20.1301ZM4.39803 21.25H14.1493V20.75H4.39803V21.25ZM14.1493 21.25C15.1587 21.25 16.1328 20.8433 16.8221 20.1302L16.4626 19.7827C15.8698 20.3959 15.0266 20.75 14.1493 20.75V21.25ZM16.8221 20.1302C17.5119 19.4165 17.8646 18.4489 17.7865 17.473L17.2881 17.5128C17.3545 18.3426 17.0548 19.1699 16.4626 19.7827L16.8221 20.1302ZM6.71199 4.86598C6.71199 3.52823 7.85124 2.42148 9.27364 2.42148V1.92148C7.59536 1.92148 6.21199 3.23224 6.21199 4.86598H6.71199ZM9.27364 2.42148C10.6961 2.42148 11.8353 3.52827 11.8353 4.86598H12.3353C12.3353 3.23228 10.952 1.92148 9.27364 1.92148V2.42148ZM11.8353 4.86598V4.94527H12.3353V4.86598H11.8353ZM12.0853 4.69527H6.46199V5.19527H12.0853V4.69527ZM6.71199 4.94527V4.86598H6.21199V4.94527H6.71199ZM15.5657 18.9866C15.1975 19.3675 14.6961 19.5785 14.1493 19.5785V20.0785C14.8282 20.0785 15.4604 19.815 15.9252 19.3341L15.5657 18.9866ZM14.1493 19.5785H4.39803V20.0785H14.1493V19.5785ZM4.39803 19.5785C3.85119 19.5785 3.34975 19.3675 2.9816 18.9866L2.62207 19.334C3.08682 19.8149 3.7191 20.0785 4.39803 20.0785V19.5785ZM2.98158 18.9866C2.61376 18.6061 2.43689 18.1163 2.47781 17.6055L1.97941 17.5656C1.92675 18.2229 2.15691 18.8528 2.62208 19.3341L2.98158 18.9866ZM2.47776 17.6062L3.40996 6.3486L2.91167 6.30734L1.97946 17.5649L2.47776 17.6062ZM3.41002 6.34787C3.40923 6.3578 3.40455 6.36337 3.40281 6.36492C3.40117 6.36638 3.39965 6.36676 3.39873 6.36676V5.86676C3.15347 5.86676 2.93214 6.05091 2.91161 6.30807L3.41002 6.34787ZM3.39873 6.36676H5.23962V5.86676H3.39873V6.36676ZM4.98962 6.11676V7.55953H5.48962V6.11676H4.98962ZM4.98962 7.55953C4.98962 8.031 5.38535 8.39527 5.85083 8.39527V7.89527C5.64122 7.89527 5.48962 7.73502 5.48962 7.55953H4.98962ZM5.85083 8.39527C6.3163 8.39527 6.71204 8.031 6.71204 7.55953H6.21204C6.21204 7.73502 6.06043 7.89527 5.85083 7.89527V8.39527ZM6.71204 7.55953V6.11676H6.21204V7.55953H6.71204ZM6.46204 6.36676H12.0854V5.86676H6.46204V6.36676ZM11.8354 6.11676V7.55953H12.3354V6.11676H11.8354ZM11.8354 7.55953C11.8354 8.031 12.2311 8.39527 12.6966 8.39527V7.89527C12.487 7.89527 12.3354 7.73502 12.3354 7.55953H11.8354ZM12.6966 8.39527C13.1621 8.39527 13.5578 8.031 13.5578 7.55953H13.0578C13.0578 7.73502 12.9062 7.89527 12.6966 7.89527V8.39527ZM13.5578 7.55953V6.11676H13.0578V7.55953H13.5578ZM13.3078 6.36676H15.1486V5.86676H13.3078V6.36676ZM15.1486 6.36676C15.1476 6.36676 15.1459 6.36632 15.1441 6.36472C15.1421 6.36296 15.1381 6.35778 15.1375 6.34948L15.6359 6.30951C15.6152 6.05199 15.395 5.86676 15.1486 5.86676V6.36676ZM15.1375 6.35012L16.0695 17.6046L16.5678 17.5634L15.6358 6.30886L15.1375 6.35012ZM16.0695 17.6039C16.1104 18.1164 15.9334 18.6061 15.5657 18.9866L15.9252 19.3341C16.3904 18.8527 16.6206 18.2228 16.5679 17.5641L16.0695 17.6039Z" fill="#333333"/>
                                 </svg>
                                 <span class="count_item_pr">{{count($cartcontent) > 0 ? count($cartcontent) : 0}}</span>
                           </a>
                        </div>
                     </li>
                     <li class="d-lg-none d-inline-block">
                        <div class="category-action">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12" fill="none">
                                 <path d="M6 2V0H18V2H6Z" fill="#333333"/>
                                 <path d="M0 7H18V5H0V7Z" fill="#333333"/>
                                 <path d="M6 12H18V10H6V12Z" fill="#333333"/>
                           </svg>
                        </div>
                     </li>
                     </ul>
               </div>
            </div>
         </div>
         </div>
   </div>
   <div class="site-nav">
         <div class="container">
         <div class="inner">
            <div class="heade_menunavs">
               <div class="close-menu d-lg-none d-block">
                     <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-times-circle fa-w-16">
                     <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 464c-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216 0 118.7-96.1 216-216 216zm94.8-285.3L281.5 256l69.3 69.3c4.7 4.7 4.7 12.3 0 17l-8.5 8.5c-4.7 4.7-12.3 4.7-17 0L256 281.5l-69.3 69.3c-4.7 4.7-12.3 4.7-17 0l-8.5-8.5c-4.7-4.7-4.7-12.3 0-17l69.3-69.3-69.3-69.3c-4.7-4.7-4.7-12.3 0-17l8.5-8.5c4.7-4.7 12.3-4.7 17 0l69.3 69.3 69.3-69.3c4.7-4.7 12.3-4.7 17 0l8.5 8.5c4.6 4.7 4.6 12.3 0 17z" class=""></path>
                     </svg>
               </div>
               <div class="wrap_main">
                     <div class="bg-header-nav ">
                     <nav class="header-nav">
                        <ul class="item_big">
                           <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">				
                                 <a class="a-img" href="{{route('home')}}" title="Trang chủ">
                                 Trang chủ
                                 </a>
                           </li>
                           <li class="nav-item {{ Route::currentRouteName() == 'listSale' ? 'active' : '' }}">				
                                 <a class="a-img" href="{{route('listSale')}}" title="Sale">
                                 Sale
                                 </a>
                           </li>
                           <li class="nav-item {{ Route::currentRouteName() == 'allProduct' || Route::currentRouteName() == 'allListProCate' || Route::currentRouteName() == 'allListProType' ? 'active' : '' }} has-mega">
                                 <a class="a-img caret-down" href="{{route('allProduct')}}" title="Sản phẩm">
                                 Sản phẩm
                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14">
                                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" class=""></path>
                                 </svg>
                                 </a>
                                 <i class="fa fa-caret-down d-block d-sm-block d-lg-none d-xl-none"></i>
                                 <div class="mega-content d-lg-block d-none">
                                 <div class="level0-wrapper2 row">
                                    <div class="col-xl-3 col-lg-3 col-12">
                                       <div class="nav-width nav-block nav-block-center">
                                             <ul class="level0">
                                                @foreach ($categoryhome as $cate)
                                                <li class="level1 parent item">
                                                   <h2 class="h4"><a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}"><span>{{languageName($cate->name)}}</span></a></h2>
                                                   @if (count($cate->typeCate) > 0)
                                                      <ul class="level2">
                                                         @foreach ($cate->typeCate as $type)
                                                         <li class="level2"> <a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}" title="{{languageName($type->name)}}"><span>{{languageName($type->name)}}</span></a> </li>
                                                         @endforeach
                                                      </ul>
                                                   @endif
                                                </li>
                                                @endforeach
                                             </ul>
                                       </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-12">
                                       <div class="block-image-menu row">
                                             <div class="col-xl-5 col-xl-5-fixmega col-lg-6">
                                             <div class="image-defaut-menu">
                                                <a href="{{isset($bannerAds[0]) ? $bannerAds[0]->name : ''}}"><img alt="Banner mega menu 1" src="{{isset($bannerAds[0]) ? $bannerAds[0]->image : ''}}" loading="lazy"/></a>
                                             </div>
                                             </div>
                                             <div class="col-xl-7 col-xl-7-fixmega col-lg-6">
                                             <div class="row">
                                                <div class="col-xl-12 col-lg-12">
                                                   <div class="image-defaut-menu margin-bottom-20">
                                                         <a href="{{isset($bannerAds[1]) ? $bannerAds[1]->name : ''}}"><img alt="Banner mega menu 2" src="{{isset($bannerAds[1]) ? $bannerAds[1]->image : ''}}" loading="lazy"/></a>
                                                   </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                   <div class="image-defaut-menu">
                                                         <a href="{{isset($bannerAds[2]) ? $bannerAds[2]->name : ''}}"><img alt="Banner mega menu 3" src="{{isset($bannerAds[2]) ? $bannerAds[2]->image : ''}}" loading="lazy"/></a>
                                                   </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                   <div class="image-defaut-menu">
                                                         <a href="{{isset($bannerAds[3]) ? $bannerAds[3]->name : ''}}"><img alt="Banner mega menu 4" src="{{isset($bannerAds[3]) ? $bannerAds[3]->image : ''}}" loading="lazy"/></a>
                                                   </div>
                                                </div>
                                             </div>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                                 </div>
                                 <ul class="item_small d-lg-none">
                                    @foreach ($categoryhome as $cate)
                                    <li>
                                       <a class="caret-down" href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">
                                       {{languageName($cate->name)}} 
                                       </a>
                                       @if (count($cate->typeCate) > 0)
                                          <i class="fa fa-caret-down"></i>
                                          <ul>
                                             @foreach ($cate->typeCate as $type)
                                                <li>
                                                      <a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}" title="{{languageName($type->name)}}" class="a3">{{languageName($type->name)}}</a>
                                                </li>
                                             @endforeach
                                          </ul>
                                       @endif
                                    </li>
                                    @endforeach
                                 </ul>
                           </li>
                           <li class="nav-item {{ Route::currentRouteName() == 'allListBlog' || Route::currentRouteName() == 'listCateBlog' || Route::currentRouteName() == 'listTypeBlog' ? 'active' : '' }}">
                                 <a class="a-img caret-down" href="{{route('allListBlog')}}" title="Tin tức">
                                 Tin tức
                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14">
                                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" class=""></path>
                                 </svg>
                                 </a>
                                 <i class="fa fa-caret-down d-block d-sm-block d-lg-none d-xl-none"></i>
                                 <ul class="item_small">
                                    @foreach ($blogCate as $cate)
                                       <li>
                                          <a class="caret-down" href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">
                                          {{languageName($cate->name)}} 
                                          </a>
                                          @if (count($cate->typeCate) > 0)
                                             <i class="fa fa-caret-down"></i>
                                             <ul>
                                                @foreach ($cate->typeCate as $type)
                                                   <li>
                                                      <a href="{{route('listTypeBlog', ['slug'=>$type->slug])}}" title="{{languageName($type->name)}}" class="a3">{{languageName($type->name)}}</a>
                                                   </li>
                                                @endforeach
                                             </ul>
                                          @endif
                                       </li>
                                    @endforeach
                                 </ul>
                           </li>
                           <li class="nav-item {{ Route::currentRouteName() == 'lienHe' ? 'active' : '' }}">				
                                 <a class="a-img" href="{{route('lienHe')}}" title="Liên hệ">
                                 Liên hệ
                                 </a>
                           </li>
                        </ul>
                     </nav>
                     </div>
               </div>
            </div>
            <div class="d-lg-none d-block block-logo-mb">
               <a href="{{route('home')}}" class="logo-mb">	
               <img src="{{$setting->logo}}" alt="{{$setting->company}}">	
               </a>
            </div>
         </div>
         </div>
   </div>
</header>
<style>
   .block-logo-mb .logo-mb img{
      height: 36px;
   }
</style>