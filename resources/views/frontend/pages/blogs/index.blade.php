@extends('frontend.layouts.app')
@section('content')
<main class="site-content">
    <!-- start: Breadcrumb Area -->
    <section class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Blog Standard</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="index-2.html">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Blog Standard</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tj-breadcrumb-shape">
            <div class="breadcrumb-shape-one">
                <img src="{{ asset('frontend/images/shape/breadcrumb-1.svg')}}" alt="Shape" />
            </div>
            <div class="breadcrumb-shape-two">
                <img src="{{ asset('frontend/images/shape/breadcrumb-2.svg')}}" alt="Shape" />
            </div>
            <div class="breadcrumb-shape-1 pulse">
                <img src="{{ asset('frontend/images/shape/shape-7.svg')}}" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-2 shake-y">
                <img src="{{ asset('frontend/images/shape/shape-4.svg')}}" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-3 pulse">
                <img src="{{ asset('frontend/images/shape/shape-6.svg')}}" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-4 shake-y">
                <img src="{{ asset('frontend/images/shape/shape-4.svg')}}" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-5 pulse">
                <img src="{{ asset('frontend/images/shape/shape-6.svg')}}" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-6 pulse">
                <img src="{{ asset('frontend/images/shape/shape-51.svg')}}" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-7 shake-y">
                <img src="{{ asset('frontend/images/shape/shape-5.svg')}}" alt="Icon" />
            </div>
            <div class="breadcrumb-shape-8 pulse">
                <img src="{{ asset('frontend/images/shape/shape-6.svg')}}" alt="Icon" />
            </div>
        </div>
    </section>
    <!-- end: Breadcrumb Area -->

    <!-- start: Blog Details Area -->
    <section class="tj-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sidebar-wrapper">
                        <div class="details-item wow fadeInUp" data-wow-delay=".3s">
                            <div class="blog-thumb-image">
                                <a href="{{ route('blog.details') }}"><img src="{{ asset('frontend/images/blog/blog-7.jpg') }}"
                                        alt="Image" /></a>
                            </div>
                            <div class="blog-meta">
                                <span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
                                <span><i class="flaticon-group"></i>By
                                    <a href="{{ route('blog.details') }}"> Admin</a></span>
                                <span><i class="fa-regular fa-comments"></i>Comments</span>
                            </div>
                            <div class="details-title">
                                <h3 class="title">Simple Proctives that will help you get better every day</h3>
                            </div>
                            <p>file:///media/min/New%20Volume/wbency/themejunction.net/html/webency/demo/{{ route('blog.details') }}
                            
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                rerum facilis est et expedita distinctio.
                            </p>
                            <div class="blog-button d-flex">
                                <a href="{{ route('blog.details') }}" class="tj-secondary-btn btn-border"><span>Read
                                        More</span></a>
                            </div>
                        </div>
                        <div class="details-item wow fadeInUp" data-wow-delay=".3s">
                            <div class="blog-thumb-image">
                                <img src="{{ asset('frontend/images/blog/blog-10.jpg') }}" alt="Image" />
                                <div class="video-play">
                                    <a class="venobox popup-videos-button" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=ADmQTw4qqTY">
                                        <i class="fa-sharp fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-meta">
                                <span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
                                <span><i class="flaticon-group"></i>By
                                    <a href="{{ route('blog.details') }}"> Admin</a></span>
                                <span><i class="fa-regular fa-comments"></i>Comments</span>
                            </div>
                            <div class="details-title">
                                <h3 class="title">Simple Proctives that will help you get better every day</h3>
                            </div>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                rerum facilis est et expedita distinctio.
                            </p>
                            <div class="blog-button d-flex">
                                <a href="{{ route('blog.details') }}" class="tj-secondary-btn btn-border"><span>Read
                                        More</span></a>
                            </div>
                        </div>
                        <blockquote class=" wow fadeInUp" data-wow-delay=".3s">
                            <p>
                                ‘’ Embed a little help from our friends from time to time. Although we offer the
                                one-stop convenience of annery integrated range of legal.’’
                            </p>
                            <cite>Johon Smit</cite>
                        </blockquote>
                        <div class="details-item wow fadeInUp" data-wow-delay=".3s">
                            <div class="blog-thumb-image">
                                <a href="{{ route('blog.details') }}"><img src="{{ asset('frontend/images/blog/blog-11.jpg') }}"
                                        alt="Image" /></a>
                            </div>
                            <div class="blog-meta">
                                <span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
                                <span><i class="flaticon-group"></i>By
                                    <a href="{{ route('blog.details') }}"> Admin</a></span>
                                <span><i class="fa-regular fa-comments"></i>Comments</span>
                            </div>
                            <div class="details-title">
                                <h3 class="title">Simple Proctives that will help you get better every day</h3>
                            </div>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                rerum facilis est et expedita distinctio.
                            </p>
                            <div class="blog-button d-flex">
                                <a href="{{ route('blog.details') }}" class="tj-secondary-btn btn-border"><span>Read
                                        More</span></a>
                            </div>
                        </div>
                        <div class="blog-pagination wow fadeInUp" data-wow-delay=".3s">
                            <ul>
                                <li><a class="page-numbers current" href="#">01</a></li>
                                <li><a class="page-numbers" href="#">02</a></li>
                                <li><a class="page-numbers" href="#">03</a></li>
                                <li><a class="page-numbers" href="#">04</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-blog-widget">
                            <div class="sidebar-search">
                                <form action="#">
                                    <input type="text" name="search" id="searchTwo" placeholder="Search Here" />
                                    <button type="submit" value="search">
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Categories</h3>
                            <div class="sidebar-catagory">
                                <ul>
                                    <li>
                                        <a href="#">Business Consulting
                                            <span> <i class="fa-light fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Marketing
                                            <span> <i class="fa-light fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">SEO Optimization
                                            <span> <i class="fa-light fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Designing
                                            <span> <i class="fa-light fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Facebook Marketing
                                            <span> <i class="fa-light fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Web Development
                                            <span> <i class="fa-light fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Recent Post</h3>
                            <div class="sidebar-recent-post">
                                <div class="single-post d-flex align-items-center">
                                    <div class="post-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('frontend/images/blog/post-1.png') }}" alt="Blog" /></a>
                                    </div>
                                    <div class="post-content">
                                        <span class="sub-title"><i class="fa-light fa-calendar-days"></i>May 17,
                                            2023</span>
                                        <h5 class="title-link">
                                            <a href="#">How To Become a Better Solution</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="single-post d-flex align-items-center">
                                    <div class="post-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('frontend/images/blog/post-2.png') }}" alt="Blog" /></a>
                                    </div>
                                    <div class="post-content">
                                        <span class="sub-title"><i class="fa-light fa-calendar-days"></i>Jan 17,
                                            2023</span>
                                        <h5 class="title-link">
                                            <a href="#">How To Search a One page Solution</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="single-post d-flex align-items-center">
                                    <div class="post-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('frontend/images/blog/post-1.png') }}" alt="Blog" /></a>
                                    </div>
                                    <div class="post-content">
                                        <span class="sub-title"><i class="fa-light fa-calendar-days"></i>Nov 17,
                                            2023</span>
                                        <h5 class="title-link">
                                            <a href="#">How To Seo Onpage a Better Solution</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Tages:</h3>
                            <div class="sidebar-tags">
                                <div class="tagcloud">
                                    <a href="#">Marketing</a>
                                    <a href="#">Sco</a>
                                    <a href="#">Digital</a>
                                    <a href="#">Seo Marketing</a>
                                    <a href="#">Corporate</a>
                                    <a href="#"> Saas Software </a>
                                    <a href="#">Digital</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-section-shape">
            <div class="shape-1">
                <img src="{{ asset('frontend/images/blog/shape-1.svg')}}" alt="Shape" />
            </div>
            <div class="shape-2 shake-y">
                <img src="{{ asset('frontend/images/shape/shape-9.svg')}}" alt="Shape" />
            </div>
            <div class="shape-3 pulse">
                <img src="{{ asset('frontend/images/shape/shape-10.svg')}}" alt="Shape" />
            </div>
            <div class="shape-4 shake-y">
                <img src="{{ asset('frontend/images/shape/shape-9.svg')}}" alt="Shape" />
            </div>
            <div class="shape-5 pulse">
                <img src="{{ asset('frontend/images/shape/shape-10.svg')}}" alt="Shape" />
            </div>
        </div>
    </section>
    <!-- end: Blog Details Area -->
</main>
@endsection