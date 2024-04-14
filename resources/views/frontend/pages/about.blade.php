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
                            <h1 class="breadcrumb-title wow fadeInUp" data-wow-delay=".3s">About Us</h1>
                        </div>
                        <div class="breadcrumb-link wow fadeInUp" data-wow-delay=".5s">
                            <span>
                                <a href="{{ url('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>About Us</span>
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

    <!-- start: About Area -->
    <section class="tj-about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12">
                    <div class="about-image-group">
                        <div class="about-circle-box">
                            <img class="circle-one" src="{{ asset('frontend/images/shape/ab-shape.svg')}}" alt="Shape" />
                            <div class="ab-circle">
                                <svg class="shape-1" viewBox="0 0 100 100" width="100" height="100">
                                    <defs>
                                        <path id="circle" d="
                                              M 50, 50
                                              m -37, 0
                                              a 37,37 0 1,1 74,0
                                              a 37,37 0 1,1 -74,0" />
                                    </defs>
                                    <text font-size="15">
                                        <textPath xlink:href="#circle" class="shape-1">
                                            Creative Minds_, Creative Minds_
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                        <div class="about-image1 pulse">
                            <img src="{{ asset('frontend/images/about/about-1.png')}}" alt="Image" />
                        </div>
                        <div class="about-image2 pulse">
                            <img src="{{ asset('frontend/images/about/about-2.png')}}" alt="Image" />
                        </div>
                        <div class="about-image3 pulse">
                            <img src="{{ asset('frontend/images/about/about-3.png')}}" alt="Image" />
                        </div>
                        <div class="about-image4 pulse">
                            <img src="{{ asset('frontend/images/about/about-4.png')}}" alt="Image" />
                        </div>
                        <div class="about-shape1 shake-y">
                            <img src="{{ asset('frontend/images/shape/shape-9.svg')}}" alt="Shape" />
                        </div>
                        <div class="about-shape2 pulse">
                            <img src="{{ asset('frontend/images/shape/shape-10.svg')}}" alt="Shape" />
                        </div>
                        <div class="about-shape3 pulse">
                            <img src="{{ asset('frontend/images/shape/shape-13.svg')}}" alt="Shape" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="about-content-one" data-sal="slide-left" data-sal-duration="1000"
                        data-sal-delay="600">
                        <div class="tj-sec-heading">
                            <span class="sub-title"> About Us</span>
                            <h2 class="sec-title">Making Your Business More Unique</h2>
                            <div class="desc">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable.
                                </p>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form,
                                </p>
                                <p>
                                    by injected humour, or randomised words which don't look even slightly
                                    believable.
                                </p>
                            </div>
                            <div class="about-button d-flex">
                                <a href="about-us.html" class="tj-secondary-btn btn-border"><span>Read
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-section-shape pulse">
            <img src="{{ asset('frontend/images/shape/shape-37.svg') }}" alt="Shape" />
        </div>
    </section>
    <!-- end: About Area -->

    @include('frontend.testimonial')

    <!-- start: Contact Area -->
      <!-- start: Team Area -->
      <section class="tj-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading text-center" data-sal="slide-up" data-sal-duration="1000"
                        data-sal-delay="600">
                        <span class="sub-title">How We Work</span>
                        <h2 class="sec-title">Meet Our Team</h2>
                        <div class="desc">
                            <p>
                                Meet the talented individuals who drive our software company's innovation.
                                Discover the diverse skills and expertise that make our team exceptional.
                                From creative developers to meticulous testers, each member plays a crucial role in our
                                success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
                    data-sal-delay="100">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="{{ asset('upload/images/teams/'.$team->image) }}" alt="Team" />
                        </div>
                        <div class="tj-team-content">
                            <div class="team-header">
                                <h5 class="title-link"><a href="#">{{ $team->name }}</a></h5>
                                <span class="sub-title">{{ $team->designation }}</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style">
                                    <li>
                                        <a href="https://www.facebook.com/er.sandeshbogati420" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/sandesh-bogati-71973a1a6/"
                                            target="_blank"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/sandyuv_bogati" target="_blank"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="team-button text-center">
                    <a href="contact.html" class="tj-secondary-btn btn-border"><span>View More</span></a>
                </div>
            </div>
        </div>
        <div class="team-section-shape">
            <div class="team-bg-shape">
                <img src="{{ asset('frontend/images/shape/team-shape1.svg')}}" alt="Team" />
            </div>
            <div class="team-bg-shape1">
                <img src="{{ asset('frontend/images/shape/team-shape2.svg')}}" alt="Team" />
            </div>
            <div class="team-bg-shape2 pulse">
                <img src="{{ asset('frontend/images/shape/shape-16.svg')}}" alt="Team" />
            </div>
        </div>
    </section>
    <!-- end: Team Area -->
    <!-- end: Contact Area -->


    <!-- BEGIN: Contact Form Success Modal Message -->
    <div class="modal" id="message_sent" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header alert alert-success">
                    <h5 class="modal-title">Message Sent Successfully</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Thank you for contacting us. We will get back to you shortly.<br>Have a great day!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Contact Form Success Modal Message -->


    <!-- BEGIN: Contact Form Fail Modal Message -->
    <div class="modal" id="message_fail" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header alert alert-danger">
                    <h5 class="modal-title">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Oops! Something went wrong, please try again.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Contact Form Fail Modal Message End -->

</main>
@endsection