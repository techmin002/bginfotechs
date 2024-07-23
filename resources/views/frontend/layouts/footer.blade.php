<!-- start: Footer Area -->
@php
    $company = Modules\Setting\Entities\CompanyProfile::first();
@endphp
<footer class="tj-footer-area">
    <div class="footer-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-widget footer1-col-1">
                        <div class="footer-content-info">
                            <div class="footer-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('upload/images/settings/'.$company->footer_logo) }}" title="bginfotechs logo" alt="bginfotechs logo" />
                                </a>
                            </div>
                            <p class="">
                                {!! $company->introduction !!}
                            </p>
                            
                            <div class="footer-share">
                                <ul class="dot-style">
                                    <li>
                                        <a href="{{ $company->instagram }}"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $company->youtube }}">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </li>
                                  <li>
                                   <a href="https://wa.me/%2B9779767692420" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                                   </li>
                                    <li>
                                        <a href="{{ $company->facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                            $category=Modules\Service\Entities\ServiceCategory::all();
                    @endphp
                
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget footer1-col-3">
                        <h4 class="footer_title">Services</h4>
                        <div class="widget_nav_menu">
                            <div class="footer-menu">
                                <ul>
                                     @foreach($category as $cat)
                                    <li><a href="{{ route('service.show',$cat->slug) }}" title="{{ $cat->title }}">{{ $cat->title }}</a></li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget footer1-col-5">
                        <h4 class="footer_title">Company</h4>
                        <div class="widget_nav_menu">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ route('aboutus') }}">About us</a></li>
                                    <li><a href="{{ route('services.list') }}">Services</a></li>
                                    <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                                    <li><a href="{{ route('aboutus') }}">Out Team</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget footer1-col-2">
                        <h4 class="footer_title">Products</h4>
                        <div class="widget_nav_menu">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="https://hamrobhet.com/">Hamrobhet</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget footer1-col-6">
                        <h4 class="footer_title">Contact Us</h4>
                        <div class="widget_contact_menu">
                            <div class="footer-menu">
                                <ul>
                                    <li>
                                        <span><i class="fa-sharp fa-regular fa-envelope"></i></span>
                                        <a href="mailto:info@bginfotechs.com">Info@bginfotechs.com</a>
                                    </li>
                                    <li>
                                        <span><i class="fa-solid fa-globe"></i></span><a
                                            href="https://bginfotechs.com/">www.bginfotechs.com</a>
                                    </li>
                                    <li>
                                        <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                        <a href="https://bginfotechs.com/">Taranagar 5, Dhangadhi, Kailali, Nepal</a>
                                    </li>
                                    <li>
                                        <span><i class="fa-solid fa-phone-volume"></i></span>
                                        <a href="tel:+977 984 225 111">+ 091 590935</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <section>
        <div class="footer-bottom">
            <div class="container text-center">
               <u><h3 style="color: white;">Our Partner</h3></u> 
                           <a href="https://gravityweb.in/" target="_blank"><img style="height:50px" alt="bg infotechs logo" title="bginfotechs logo" src="{{ asset('frontend/images/logo/gravity_logo.webp') }}" title="Gravity Web"></a> 
            </div>
        </div>
    </section>
    <hr>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-content-area">
                        <div class="copyright-left-content">
                            <p>
                                Copyright © 2023 <a href="https://bginfotechs.com/" target="_blank"> BG Infotechs. </a> All Rights
                                Reserved.
                            </p>
                        </div>
                        <div class="copyright-menu">
                            <ul>
                                <li><a href="{{ route('contact.index') }}">Support ?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-section-shape">
        <div class="footer-bg-shape">
            <img src="{{ asset('frontend/images/banner-bg/footer-bg-shape.svg')}}" alt="Shape" />
        </div>
        <div class="footer-bg-shape1">
            <img src="{{ asset('frontend/images/banner-bg/footer-bg-shape1.svg')}}" alt="Shape" />
        </div>
        <div class="footer-bg-shape2 shake-y">
            <img src="{{ asset('frontend/images/shape/shape-35.svg')}}" alt="Shape" />
        </div>
        <div class="footer-bg-shape3 pulse">
            <img src="{{ asset('frontend/images/shape/shape-36.svg')}}" alt="Shape" />
        </div>
    </div>
</footer>
<!-- end: Footer Area -->

<!-- start: Scroll Area -->
<div class="webency-scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
                    transition: stroke-dashoffset 10ms linear 0s;
                    stroke-dasharray: 307.919px, 307.919px;
                    stroke-dashoffset: 71.1186px;
                "></path>
    </svg>
    <div class="webency-scroll-top-icon">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
            viewBox="0 0 24 24" data-icon="mdi:arrow-up" class="iconify iconify--mdi">
            <path fill="currentColor" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z">
            </path>
        </svg>
    </div>
</div>
<!-- end: Scroll Area -->

<!-- JS here -->
<script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('frontend/js/meanmenu.js')}}"></script>
<script src="{{ asset('frontend/js/swiper.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.appear.min.js')}}"></script>
<script src="{{ asset('frontend/js/sal.js')}}"></script>
<script src="{{ asset('frontend/js/odometer.min.js')}}"></script>
<script src="{{ asset('frontend/js/imagesloaded-pkgd.js')}}"></script>
<script src="{{ asset('frontend/js/magnific-popup.js')}}"></script>
<script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('frontend/js/validate.min.js')}}"></script>

<script src="{{ asset('frontend/js/main.js')}}"></script>
</body>
</html>