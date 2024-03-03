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
                            <img src="{{ asset('frontend/images/blog/blog-7.jpg') }}" alt="Image" />
                        </div>
                        <div class="blog-meta">
                            <span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
                            <span><i class="flaticon-group"></i>By <a href="#"> Admin</a></span>
                            <span><i class="fa-regular fa-comments"></i>Comments</span>
                        </div>
                        <div class="details-title">
                            <h3 class="title">{{ $blog->title }}</h3>
                        </div>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                            officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                            rerum facilis est et expedita distinctio.
                        </p>
                        <div class="blog-video-area">
                            <div class="video-title">
                                <h3 class="title">Proinmauris risus turpos or nare filis aptent nisl</h3>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas.
                                </p>
                            </div>
                            <div class="row video-box">
                                <div class="col-lg-6">
                                    <div class="video-image">
                                        <img src="{{ asset('frontend/images/blog/blog-8.jpg') }}" alt="Image" />
                                        <div class="video-play">
                                            <a class="venobox popup-videos-button" data-autoplay="true"
                                                data-vbtype="video"
                                                href="https://www.youtube.com/watch?v=ADmQTw4qqTY">
                                                <i class="fa-sharp fa-solid fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="video-content">
                                        <h4 class="title">
                                            Roise Capital Faster & Segoticite On Your Own Trems
                                        </h4>
                                        <p>
                                            At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                            blanditiis praesentium voluptatum deleniti atque corrupti quos
                                            dolores et quas.
                                        </p>
                                        <div class="check-list">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-angle-right"></i> 100% Better Result
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-angle-right"></i> Budget Friend
                                                    Service
                                                </li>
                                                <li><i class="fa-light fa-angle-right"></i> Happy Customers</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>
                                "On the other hand, we denounce with righteous indignation and dislike men who
                                are so beguiled and demoralized by the charms of pleasure of the moment, so
                                blinded by desire, that they cannot foresee the pain and trouble that are bound
                                to ensue; and equal blame belongs to those who fail in their duty through
                                weakness of will, which is the same as saying through shrinking from toil and
                                pain. These cases are perfectly simple and easy to distinguish.
                            </p>
                        </div>
                        <div class="tj-tags-post">
                            <div class="tagcloud">
                                <span>Tags:</span>
                                <a href="#">Marketing</a>
                                <a href="#">Digital</a>
                                <a href="#">Corporate</a>
                                <a href="#">Seo Marketing</a>
                            </div>
                            <div class="post-share">
                                <ul class="dot-style">
                                    <li>
                                        <span>Share:</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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