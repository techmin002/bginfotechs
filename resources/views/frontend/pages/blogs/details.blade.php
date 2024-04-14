@extends('frontend.layouts.app')
@section('content')
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=65f90315db40be00131d1c78&product=inline-share-buttons&source=platform" async="async"></script>

<main class="site-content">
    <!-- start: Breadcrumb Area -->
    <section class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">{{ $blog->title }}</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ url('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>{{ $blog->title }}</span>
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
                        <div class="blog-thumb-image">
                            <img src="{{ asset('upload/images/blogs/'.$blog->image) }}" alt="Image" />
                        </div>
                        <div class="blog-meta">
                            <span><i class="flaticon-calendar"></i>{{ $blog->created_at->format('d M, Y') }}</span>
                            <span><i class="flaticon-group"></i>By <a href="#"> Admin</a></span>
                            <span><i class="fa-regular fa-comments"></i>Comments</span>
                        </div>
                        <div class="details-title">
                            <h3 class="title">{{ $blog->title }}</h3>
                        </div>
                        {!! $blog->description !!}
                        <hr>
                        <div class="sharethis-inline-share-buttons"></div>
                        <hr>
                        <div class="tj-comments-wrap">
                            <div class="tj-latest-comment">
                                <h3 class="title">Comments</h3>
                                <div class="comment-content-area">
                                    <div class="comment-auother">
                                        <div class="comment-avatar">
                                            <img src="{{ asset('frontend/images/testimonial/test-5.png') }}" alt="Image" />
                                        </div>
                                        <div class="comment-text">
                                            <div class="auother-header">
                                                <h6 class="title-link">
                                                    <a href="blog-details.html">Jored Smith</a>
                                                </h6>
                                                <span class="date">Mar 12,2023</span>
                                            </div>
                                            <p>
                                                But I must explain to you how all this mistaken idea of
                                                denouncing pleasure and praising pain was born and I will give
                                                you a complete account
                                            </p>
                                        </div>
                                    </div>
                                    <div class="comment-reply">
                                        <a class="reply" href="blog-details.html"> Reply</a>
                                    </div>
                                </div>
                                <div class="comment-content-area">
                                    <div class="comment-auother">
                                        <div class="comment-avatar">
                                            <img src="{{ asset('frontend/images/testimonial/test-6.png') }}" alt="Image" />
                                        </div>
                                        <div class="comment-text">
                                            <div class="auother-header">
                                                <h6 class="title-link">
                                                    <a href="blog-details.html">Jored Smith</a>
                                                </h6>
                                                <span class="date">Jan 18,2023</span>
                                            </div>
                                            <p>
                                                But I must explain to you how all this mistaken idea of
                                                denouncing pleasure and praising pain was born and I will give
                                                you a complete account
                                            </p>
                                        </div>
                                    </div>
                                    <div class="comment-reply">
                                        <a class="reply" href="blog-details.html"> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tj-comment-respond">
                                <div class="comment-header">
                                    <h4 class="title">Leave a Reply</h4>
                                    <p>Your email Address Not Be Published. Requied Fields are Marked</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-input">
                                            <input type="text" id="first" name="name" placeholder="Fast Name"
                                                required="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-input">
                                            <input type="text" id="last" name="name" placeholder="Last Name"
                                                required="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-input">
                                            <input type="email" id="email" name="email" placeholder="Your Email"
                                                required="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-input">
                                            <input type="text" id="website" name="website"
                                                placeholder="Enter Your Website" required="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-input">
                                            <textarea id="comment" name="message"
                                                placeholder="Enter Your Comments"></textarea>
                                        </div>
                                    </div>
                                    <div class="tj-blog-details-button">
                                        <button class="tj-primary-btn" type="submit" value="submit">
                                            Submit Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-blog-widget">
                            <div class="sidebar-search">
                                <form action="#">
                                    <input type="text" name="search" id="searchOne" placeholder="Search Here" />
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
                                    @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('service.show',$category->slug) }}">{{ ucfirst($category->title) }}
                                            <span> <i class="fa-light fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Recent Post</h3>
                            <div class="sidebar-recent-post">
                                @foreach ($blogs as $blo)
                                <div class="single-post d-flex align-items-center">
                                    <div class="post-image">
                                        <a href="{{ route('blog.details',$blo->slug) }}">
                                            <img src="{{ asset('upload/images/blogs/'.$blo->image) }}" alt="Blog" /></a>
                                    </div>
                                    <div class="post-content">
                                        <span class="sub-title"><i class="fa-light fa-calendar-days"></i>{{ $blo->created_at->format('d M, Y') }}</span>
                                        <h5 class="title-link">
                                            <a href="{{ route('blog.details',$blo->slug) }}">{{ $blo->title }}</a>
                                        </h5>
                                    </div>
                                </div>
                                @endforeach
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