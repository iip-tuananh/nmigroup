<footer class="footer index">
   <div class="top_footer">
         <div class="section_malchip">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-12">
                     <h4>
                     Nhận thông tin khuyến mãi từ chúng tôi
                     </h4>
               </div>
               <div class="col-xl-6 col-lg-6 col-12">
                     <div class="mail_footer subscribe">
                     <form action="{{route('search_result')}}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                        @csrf
                        <input type="email" class="form-control" value="" placeholder="Nhập địa chỉ email" name="email" id="mail">
                        <span class="input-group-append subscribe">
                        <button class="btn btn-default" type="submit" aria-label="Đăng ký ngay" name="subscribe">Gửi</button>
                        </span>
                     </form>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
   {{-- <div class="mid_footer_category">
         <div class="container">
         <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
               <div class="col-item">
                     <div class="info">
                     <h3>Trang điểm</h3>
                     <ul>
                        <li><a href="/collections/all">Mắt</a><span>,</span></li>
                        <li><a href="/">Mặt</a><span>,</span></li>
                        <li><a href="/">Môi</a><span>,</span></li>
                        <li><a href="/">Chân mày</a><span>,</span></li>
                        <li><a href="/">Set trang điểm</a><span>,</span></li>
                        <li><a href="/">Sản phẩm mới nhất</a><span>,</span></li>
                     </ul>
                     </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
               <div class="col-item">
                     <div class="info">
                     <h3>Chăm sóc da</h3>
                     <ul>
                        <li><a href="/">Làm sạch</a><span>,</span></li>
                        <li><a href="/">Chăm sóc da khác</a><span>,</span></li>
                        <li><a href="/">Dưỡng da</a><span>,</span></li>
                        <li><a href="/">Chăm sóc chuyên sâu</a><span>,</span></li>
                        <li><a href="/">Mặt nạ</a><span>,</span></li>
                     </ul>
                     </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
               <div class="col-item">
                     <div class="info">
                     <h3>Chăm sóc cơ thể</h3>
                     <ul>
                        <li><a href="/">Dưỡng móng tay</a><span>,</span></li>
                        <li><a href="/">Đặc trị cơ thể</a><span>,</span></li>
                        <li><a href="/">Chăm sóc răng miệng</a><span>,</span></li>
                        <li><a href="/">Làm sạch</a><span>,</span></li>
                        <li><a href="/">Dưỡng thể</a><span>,</span></li>
                     </ul>
                     </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
               <div class="col-item">
                     <div class="info">
                     <h3>Dụng cụ làm đẹp</h3>
                     <ul>
                        <li><a href="/">Chăm sóc móng</a><span>,</span></li>
                        <li><a href="/">Dành cho mặt</a><span>,</span></li>
                        <li><a href="/">Cọ trang điểm</a><span>,</span></li>
                        <li><a href="/">Dụng cụ trang điểm</a><span>,</span></li>
                     </ul>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div> --}}
   <div class="first-footer d-flex">
         <div class="container">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mr-991 col-contact-footer footer-click">
               <h4>
                     <span>
                     Thông tin liên hệ
                     </span>
               </h4>
               <ul>
                     <li>
                        Địa chỉ: 
                     {{$setting->address1}}
                     </li>
                     @if ($setting->address2)
                        <li>Địa chỉ 2: 
                           {{$setting->address2}}
                        </li>
                     @endif
                     <li>Hotline: 
                     <a class="fone" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a>
                     </li>
                     @if ($setting->phone2)
                     <li>Chăm sóc khách hàng: 
                        <a class="fone" href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a>
                        </li>
                     @endif
                     <li>Email: 
                        <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                     </li>
               </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 footer-click">
               <h4>
                     <span>
                     Về chúng tôi
                     </span>
               </h4>
               <div class="footer-menu toggle-mn-none">
                  @foreach ($aboutUs as $item)
                     <a href="{{route('pagecontent', ['slug'=>$item->slug])}}" title="{{$item->title}}" rel="nofollow">{{$item->title}}</a>
                  @endforeach
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 footer-click">
               <h4>
                     <span>
                     Hỗ trợ khách hàng
                     </span>
               </h4>
               <div class="footer-menu toggle-mn-none">
                  @foreach ($helpCustomer as $item)
                     <a href="{{route('pagecontent', ['slug'=>$item->slug])}}" title="{{$item->title}}" rel="nofollow">{{$item->title}}</a>
                  @endforeach
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 footer-click">
               <h4>
                     <span>
                     Fanpage 
                     </span>
               </h4>
               <div class="footer-menu toggle-mn-none">
                  <div class="fb-page" 
                  data-href="{{$setting->facebook}}"
                  data-width="360" 
                  data-hide-cover="false"
                  data-show-facepile="false"></div>
               </div>
            </div>
            
         </div>
         </div>
   </div>
   <div class="copyright d-flex">
         <div class="container">
         <div class="inner">
            <div id="copyright">
               <div class="wsp">
                     © Bản quyền thuộc về {{$setting->company}}
                     <span class="d-sm-inline-block d-none"> | </span>
                     <span class="opacity1">
                     Cung cấp bởi 
                     <a href="https://sbtsoftware.vn/" rel="noopener" title="SBT" target="_blank">SBT</a> 
                     </span>
               </div>
            </div>
         </div>
         <div class="social_fixed">
            <a href="{{$setting->facebook}}" class="social-button facebook" title="Theo dõi trên Facebook">
               <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                     <path d="M18.0015 3.00293C9.71849 3.00293 3.00299 9.71843 3.00299 18.0014C3.00299 25.4864 8.48699 31.6904 15.6585 32.8199V22.3379H11.8485V18.0014H15.6585V14.6969C15.6585 10.9349 17.898 8.86043 21.3225 8.86043C22.9635 8.86043 24.6825 9.15293 24.6825 9.15293V12.8414H22.7865C20.9265 12.8414 20.3445 13.9994 20.3445 15.1859V17.9984H24.501L23.8365 22.3349H20.3445V32.8169C27.516 31.6934 33 25.4879 33 18.0014C33 9.71843 26.2845 3.00293 18.0015 3.00293Z" fill="#333333"/>
               </svg>
            </a>
            <a href="{{$setting->fbPixel}}" class="social-button youtube" title="Theo dõi trên Youtube">
               <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                     <path d="M32.3895 11.4713C32.0445 10.1843 31.032 9.16876 29.7465 8.82226C27.3975 8.17726 18 8.16676 18 8.16676C18 8.16676 8.60401 8.15626 6.25351 8.77276C4.99351 9.11626 3.95251 10.1543 3.60451 11.4398C2.98501 13.7888 2.97901 18.6608 2.97901 18.6608C2.97901 18.6608 2.97301 23.5568 3.58801 25.8818C3.93301 27.1673 4.94551 28.1828 6.23251 28.5293C8.60551 29.1743 17.9775 29.1848 17.9775 29.1848C17.9775 29.1848 27.375 29.1953 29.724 28.5803C31.008 28.2353 32.025 27.2213 32.3745 25.9358C32.9955 23.5883 33 18.7178 33 18.7178C33 18.7178 33.03 13.8203 32.3895 11.4713ZM14.994 23.1743L15.0015 14.1743L22.812 18.6818L14.994 23.1743Z" fill="#333333"/>
               </svg>
            </a>
            <a href="{{$setting->GA}}" class="social-button instagram" title="Theo dõi trên Instagram">
               <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                     <path d="M17.9883 10.6167C13.7336 10.6167 10.2868 14.0651 10.2868 18.3183C10.2868 22.573 13.7336 26.0215 17.9883 26.0215C22.2398 26.0215 25.6899 22.573 25.6899 18.3183C25.6899 14.0651 22.2398 10.6167 17.9883 10.6167ZM17.9883 23.3227C15.2246 23.3227 12.9839 21.082 12.9839 18.3199C12.9839 15.5562 15.2246 13.3171 17.9883 13.3171C20.7521 13.3171 22.9895 15.5562 22.9895 18.3199C22.9895 21.082 20.7521 23.3227 17.9883 23.3227Z" fill="#333333"/>
                     <path d="M25.9964 12.1293C26.9883 12.1293 27.7923 11.3253 27.7923 10.3335C27.7923 9.34164 26.9883 8.53761 25.9964 8.53761C25.0046 8.53761 24.2006 9.34164 24.2006 10.3335C24.2006 11.3253 25.0046 12.1293 25.9964 12.1293Z" fill="#333333"/>
                     <path d="M32.2054 8.50762C31.424 6.49351 29.8331 4.90089 27.819 4.1229C26.6545 3.68476 25.4234 3.44987 24.1773 3.42321C22.573 3.35324 22.0649 3.33325 17.9967 3.33325C13.9285 3.33325 13.407 3.33325 11.8161 3.42321C10.5733 3.4482 9.34218 3.6831 8.1777 4.1229C6.16193 4.90089 4.57097 6.49351 3.79131 8.50762C3.35318 9.67377 3.11828 10.9032 3.09329 12.1493C3.02166 13.752 3 14.2601 3 18.3299C3 22.3981 3 22.9162 3.09329 24.5105C3.11828 25.7566 3.35318 26.9861 3.79131 28.1539C4.57263 30.1663 6.16359 31.7589 8.17937 32.5386C9.33885 32.9917 10.57 33.2483 11.8194 33.2883C13.4237 33.3582 13.9318 33.3799 18 33.3799C22.0682 33.3799 22.5896 33.3799 24.1806 33.2883C25.425 33.2633 26.6562 33.0267 27.8223 32.5903C29.8364 31.8089 31.4274 30.218 32.2087 28.2039C32.6468 27.0377 32.8817 25.8083 32.9067 24.5622C32.9783 22.9595 33 22.4514 33 18.3816C33 14.3117 33 13.7953 32.9067 12.201C32.8851 10.9382 32.6518 9.68709 32.2054 8.50762ZM30.1763 24.3872C30.1646 25.3468 29.9913 26.298 29.6582 27.1993C29.15 28.5104 28.1155 29.5466 26.8061 30.0497C25.9148 30.3812 24.9752 30.5545 24.024 30.5678C22.4414 30.6411 21.9949 30.6594 17.9367 30.6594C13.8752 30.6594 13.4604 30.6594 11.8477 30.5678C10.8998 30.5562 9.95691 30.3812 9.0673 30.0497C7.75289 29.5483 6.71168 28.5121 6.20358 27.1993C5.87706 26.3097 5.70047 25.3685 5.68547 24.4189C5.61384 22.8363 5.59718 22.3898 5.59718 18.3316C5.59718 14.2717 5.59718 13.8569 5.68547 12.2426C5.69713 11.2831 5.87039 10.3335 6.20358 9.43221C6.71168 8.11779 7.75289 7.08325 9.0673 6.58014C9.95691 6.25029 10.8998 6.07537 11.8477 6.06204C13.432 5.9904 13.8768 5.97041 17.9367 5.97041C21.9966 5.97041 22.413 5.97041 24.024 6.06204C24.9752 6.0737 25.9148 6.24862 26.8061 6.58014C28.1155 7.08492 29.15 8.12112 29.6582 9.43221C29.9847 10.3218 30.1613 11.2631 30.1763 12.2126C30.2479 13.7969 30.2662 14.2417 30.2662 18.3016C30.2662 22.3598 30.2662 22.7963 30.1946 24.3889H30.1763V24.3872Z" fill="#333333"/>
               </svg>
            </a>
            <a href="{{$setting->google}}" class="social-button shopee" title="Theo dõi trên Shopee">
               <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                     <g clip-path="url(#clip0_11_232)">
                     <path d="M22.6935 24.1377C22.954 22.0314 21.5791 20.6879 17.95 19.5449C16.1922 18.953 15.3642 18.178 15.3835 17.1095C15.4569 15.9267 16.5737 15.064 18.0547 15.0351C19.0812 15.0554 20.2215 15.3028 21.3303 16.0328C21.4621 16.1147 21.5548 16.1019 21.6297 15.9901C21.7324 15.827 21.9871 15.4358 22.0728 15.2955C22.1308 15.2039 22.142 15.0856 21.9952 14.98C21.785 14.8261 21.1955 14.5146 20.8791 14.3839C20.0192 14.0287 19.0542 13.805 18.0251 13.807C15.8571 13.816 14.1487 15.1695 14.0062 16.9758C13.9129 18.2792 14.5668 19.338 15.9707 20.1451C16.2681 20.3162 17.8787 20.9483 18.5192 21.1451C20.5343 21.7643 21.5806 22.8742 21.3344 24.1683C21.1109 25.3425 19.8592 26.1007 18.1338 26.1238C16.7658 26.0723 15.5348 25.522 14.5802 24.7892C14.556 24.7714 14.4361 24.6797 14.4198 24.6674C14.3018 24.5762 14.173 24.5821 14.0946 24.7001C14.0365 24.7869 13.6676 25.3127 13.5745 25.4508C13.487 25.5723 13.5338 25.6392 13.6247 25.7137C14.0236 26.0418 14.5527 26.4007 14.9136 26.5823C15.9051 27.0812 16.9813 27.3546 18.1262 27.3975C18.8625 27.4468 19.7912 27.2906 20.4841 27.0004C21.7289 26.479 22.5327 25.4375 22.6935 24.1377ZM18.2152 5.5712C15.8661 5.5712 13.9513 7.75618 13.8617 10.4912H22.5687C22.479 7.75618 20.5642 5.5712 18.2152 5.5712ZM27.1334 30.9028L27.0435 30.9036L9.11368 30.9009H9.11327C7.89371 30.8559 6.99692 29.8804 6.87457 28.6692L6.86258 28.451L6.06088 11.0453L6.06099 11.0452C6.05986 11.0321 6.05945 11.0188 6.05945 11.0054C6.05945 10.7246 6.28754 10.4963 6.57086 10.4913L12.2225 10.4912C12.3611 6.87984 14.9911 4.00024 18.2152 4.00024C21.4393 4.00024 24.0693 6.87984 24.2079 10.4912H29.8433H29.8513C30.1392 10.4912 30.3725 10.7213 30.3725 11.0054C30.3725 11.0143 30.3723 11.0231 30.3718 11.0319V11.0322L29.4934 28.5064L29.4854 28.6544C29.3793 29.8806 28.3742 30.8697 27.1334 30.9028Z" fill="#FF835B"/>
                     </g>
                     <defs>
                     <clipPath id="clip0_11_232">
                        <rect width="24.3871" height="27" fill="white" transform="translate(6 4)"/>
                     </clipPath>
                     </defs>
               </svg>
            </a>
            <a href="#"  class="backtop"  title="Lên đầu trang">
               <svg width="15px" height="15px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.5 3L15 11H0L7.5 3Z" fill="black"/>
               </svg>
            </a>
         </div>
         </div>
   </div>
</footer>