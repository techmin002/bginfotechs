<body>
@php
        $category=Modules\Service\Entities\ServiceCategory::all();
        $company = Modules\Setting\Entities\CompanyProfile::first();

@endphp

    <!-- start: Preloader -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="lines">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
                <span class="line line-4"></span>
                <span class="line line-5"></span>
                <span class="line line-6"></span>
                <span class="line line-7"></span>
                <span class="line line-8"></span>
                <span class="line line-9"></span>
            </div>
            <div class="text">Loading</div>
        </div>
        <button class="tj-cancel-btn">Cancel Preloader</button>
    </div>
    <!-- end: Preloader -->

    <!-- start: Mobile Menu -->
    <div id="tj-overlay-bg2" class="tj-overlay-canvas d-lg-none"></div>
    <div class="tj-offcanvas-area d-lg-none">
        <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="logo-area text-center">
                <a href="index.html"><img src="{{ asset('upload/images/settings/'.$company->logo) }}" alt="Bginfotechs Logo" /></a>
            </div>
            <div class="offcanvas-icon">
                <a id="canva_close" href="#">
                    <i class="fa-light fa-xmark"></i>
                </a>
            </div>
        </div>
        <div class="tj-search-box">
            <form action="#">
                <input type="text" name="search" id="search" placeholder="Search" />
                <a href="#"> <i class="fal fa-search"></i></a>
            </form>
        </div>
        <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id="mobile-navbar-menu"></nav>
        <div class="mobile-contact">
            <div class="contact-menu">
                <ul class="dot-style">
                    <li>
                        <span><i class="fa-sharp fa-regular fa-envelope"></i></span>
                        <a href="mailto:info@bginfotechs.com">info@bginfotechs.com</a>
                    </li>
                    <li>
                        <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                        <a href="#">Taranagar 5 Dhangadhi</a>
                    </li>
                    <li>
                        <span><i class="fa-solid fa-phone-volume"></i></span>
                        <a href="tel:+00123456789">091-590935</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mobile-share">
            <ul class="dot-style">
                <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
            </ul>
        </div>
        <div class="header-button">
            <a class="btn tj-black-btn" href="{{ route('contact.index') }}">Contact Us</a>
        </div>
    </div>
    <!-- end: Mobile Menu -->

    <!-- start: Header Area -->
    <header class="tj-header-area header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-content-area">
                        <div class="logo-area">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('upload/images/settings/'.$company->logo) }}" alt="bginfotechs Logo" /></a>
                            </div>
                        </div>
                        <div class="tj-menu-area d-lg-block d-none" id="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="">
                                        <a href="{{ url('/') }}">Home</a>
                                        {{-- <ul class="sub-menu">
                                            <li class="active">
                                                <a class="active" href="index.html">Home One</a>
                                            </li>
                                            <li><a href="index-2.html">Home Two</a></li>
                                            <li><a href="index-3.html">Home Three</a></li>
                                        </ul> --}}
                                    </li>
                                    <li>
                                        <a href="{{ route('aboutus') }}">About Us</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="{{ route('services.list') }}">Services</a>
                                        <ul class="sub-menu">
                                            @foreach($category as $cat)
                                           
                                            <li>
                                            <a href="{{ route('service.show',$cat->slug) }}">{{ $cat->title }}</a>
                                        </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="{{ url('/') }}">Product</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="https://hamrobhet.com/" title="Hamrobhet Matrimonial Site">Hamro Bhet</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('blog.all') }}" title="Blog">Blog</a>
                                        
                                    </li>
                                    <li><a href="{{ route('contact.index') }}" title="Contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-button d-none d-lg-block">
                            
                            @auth
                            @php($role = auth()->user()->role_id)
                            @if($role == 7)
                            <a href="{{ route('sutdents.dashboard') }}" class="btn btn-outline-info rounded"><span>Dashbaord</span></a>
                            @endif
                               @else 
                            
                            <a href="{{ route('student.login') }}" class="btn btn-outline-info rounded"><span>Student Login</span></a>
                            @endauth
                        </div>
                        <div class="header-button d-none d-lg-block">
                            <a href="{{ route('contact.index') }}" class="tj-secondary-btn btn-border"><span>Contact Us</span></a>
                        </div>
                        <div class="tj-canva-icon d-lg-none">
                            <a class="canva_expander nav-menu-link menu-button" href="#">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                                <span class="dot4"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end: Header Area -->