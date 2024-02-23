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
                                <h1 class="breadcrumb-title">{{ $data['category']->title }}</h1>
                            </div>
                            <div class="breadcrumb-link">
                                <span>
                                    <a href="index-2.html">
                                        <span>Home</span>
                                    </a>
                                </span>
                                <i class="fa-light fa-angle-right"></i>
                                <span>
                                    <span>{{ $data['category']->title }}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tj-breadcrumb-shape">
                <div class="breadcrumb-shape-one">
                    <img src="{{ asset('frontend/images/shape/breadcrumb-1.svg') }}" alt="Shape" />
                </div>
                <div class="breadcrumb-shape-two">
                    <img src="{{ asset('frontend/images/shape/breadcrumb-2.svg') }}" alt="Shape" />
                </div>
                <div class="breadcrumb-shape-1 pulse">
                    <img src="{{ asset('frontend/images/shape/shape-7.svg') }}" alt="Icon" />
                </div>
                <div class="breadcrumb-shape-2 shake-y">
                    <img src="{{ asset('frontend/images/shape/shape-4.svg') }}" alt="Icon" />
                </div>
                <div class="breadcrumb-shape-3 pulse">
                    <img src="{{ asset('frontend/images/shape/shape-6.svg') }}" alt="Icon" />
                </div>
                <div class="breadcrumb-shape-4 shake-y">
                    <img src="{{ asset('frontend/images/shape/shape-4.svg') }}" alt="Icon" />
                </div>
                <div class="breadcrumb-shape-5 pulse">
                    <img src="{{ asset('frontend/images/shape/shape-6.svg') }}" alt="Icon" />
                </div>
                <div class="breadcrumb-shape-6 pulse">
                    <img src="{{ asset('frontend/images/shape/shape-51.svg') }}" alt="Icon" />
                </div>
                <div class="breadcrumb-shape-7 shake-y">
                    <img src="{{ asset('frontend/images/shape/shape-5.svg') }}" alt="Icon" />
                </div>
                <div class="breadcrumb-shape-8 pulse">
                    <img src="{{ asset('frontend/images/shape/shape-6.svg') }}" alt="Icon" />
                </div>
            </div>
        </section>
        <!-- end: Breadcrumb Area -->

        <!-- start: Service Area -->
        <section class="tj-service-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sidebar-wrapper service-wrapper">
                            <div class="blog-thumb-image">
                                <img src="{{ asset('frontend/images/service/service-5.jpg') }}" alt="Image">
                            </div>
                            <div class="details-title">
                                <h3 class="title">Digital Marketing</h3>
                            </div>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident, similique sunt in culpa deserunt
                                mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                expedita distinctio.
                            </p>
                            <p>
                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis
                                dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum.
                            </p>
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form, by injected humour, or randomised words which
                                don't look even slightly believable. If you are going to use a passage of Lorem
                                Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                text.
                            </p>
                            <div class="row services-item">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="service-details-item">
                                        <div class="service-icon">
                                            <i class="flaticon-design"></i>
                                        </div>
                                        <div class="service-content">
                                            <h4 class="title">Logo Design</h4>
                                            <p>
                                                look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="service-details-item">
                                        <div class="service-icon">
                                            <i class="flaticon-graphic-design-1"></i>
                                        </div>
                                        <div class="service-content">
                                            <h4 class="title">Web Design</h4>
                                            <p>
                                                look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                    officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                </p>
                            </div>
                            <div class="blog-video-area">
                                <div class="row video-box align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="video-image">
                                            <img src="{{ asset('frontend/images/blog/blog-8.jpg') }}" alt="Image">
                                            <div class="video-play">
                                                <a class="venobox popup-videos-button" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=ADmQTw4qqTY">
                                                    <i class="fa-sharp fa-solid fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="video-content">
                                            <h4 class="title">Digital Marketing</h4>
                                            <p>
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                dolores.
                                            </p>
                                            <div class="check-list">
                                                <ul class="list dot-style">
                                                    <li>
                                                        <i class="fa-light fa-angle-right"></i> Use the latest
                                                        diagnostic equipment.
                                                    </li>
                                                    <li>
                                                        <i class="fa-light fa-angle-right"></i> Automotive services
                                                        for out clients
                                                    </li>
                                                    <li>
                                                        <i class="fa-light fa-angle-right"></i> Quick dedicated
                                                        support team.
                                                    </li>
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
                            <div class="tj-faq-area">
                                <div class="accordion tj-faq-style" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What is a Meet With some form digital platform
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>There are many variations of passages of Lorem Ipsum available,
                                                    but the majority have suffered alteration in some form, by
                                                    injected humour.</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How Can A Digital Platform Helps Your Business Grow?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>There are many variations of passages of Lorem Ipsum available,
                                                    but the majority have suffered alteration in some form, by
                                                    injected humour.</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                How Do I Book My Slot To Meet With Your Technical Team?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>There are many variations of passages of Lorem Ipsum available,
                                                    but the majority have suffered alteration in some form, by
                                                    injected humour.</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                How Many Projects Hove Your Completed So far?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>There are many variations of passages of Lorem Ipsum available,
                                                    but the majority have suffered alteration in some form, by
                                                    injected humour.</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tj-main-sidebar">
                            <div class="tj-services-widget">
                                <h3 class="side-title">All Services</h3>
                                <div class="sidebar-catagory">
                                    <ul class="dot-style">
                                        <li>
                                            <a href="#">Branding &amp; Art
                                                <span> <i class="fa-light fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Digital Marketing
                                                <span> <i class="fa-light fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Design &amp; Development
                                                <span> <i class="fa-light fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">3D Animation
                                                <span> <i class="fa-light fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Branding &amp; Illustration
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
                            <div class="tj-services-widget">
                                <div class="sidebar-contact">
                                    <div class="contact-icon">
                                        <img src="{{ asset('frontend/images/icon/phone3.svg') }}" alt="Icon">
                                    </div>
                                    <div class="contact-link">
                                        <a href="tel:+001234566789">+ 00 123 456 6789</a>
                                    </div>
                                    <span>Monday - Friday: 7:00 am - 8:00pm 24/7 <br>
                                        Emergency Service</span>
                                    <div class="contact-shape">
                                        <img src="{{ asset('frontend/images/icon/service-shape2.svg') }}" alt="Shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tj-services-shape">
                <div class="shape-one">
                    <img src="{{ asset('frontend/images/icon/service-shape.svg') }}" alt="Shape">
                </div>
                <div class="shape-two">
                    <img src="{{ asset('frontend/images/icon/service-shape.svg') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- end: Service Area -->

        <!-- start: Testimonial Area -->
        <section class="tj-testimonial-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-top-area">
                            <div class="tj-sec-heading">
                                <span class="sub-title">Testimonials</span>
                                <h2 class="sec-title">What Our Customer Say About Us</h2>
                            </div>
                            <div class="testimonial-right-content">
                                <p>
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container testimonial-slider">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper tj-testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-top-content">
                                            <div class="testimonial-left-content">
                                                <div class="auother-image">
                                                    <img src="{{ asset('frontend/images/testimonial/test-1.png') }}" alt="Image" />
                                                </div>
                                                <div class="auother-text">
                                                    <h4 class="title">Erika Wagner</h4>
                                                    <span class="sub-title"> Chief lil UX Designer</span>
                                                </div>
                                            </div>
                                            <div class="testimonial-right-content">
                                                <div class="testimonial-rating">
                                                    <ul class="dot-style">
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-regular fa-star-half-stroke"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="testimonial-quote">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="44"
                                                        viewBox="0 0 60 44" fill="none">
                                                        <g opacity="0.3">
                                                            <path
                                                                d="M0.573543 43.6491C0.382362 42.3418 0.238976 40.9878 0.143385 39.5872C0.0477951 38.1865 0 37.1594 0 36.5057C0 30.2495 1.14709 24.3201 3.44126 18.7175C5.73543 13.0215 8.55535 8.21259 11.901 4.29077L26.9565 7.65233C25.1403 11.6675 23.6586 16.1963 22.5116 21.2386C21.4601 26.281 20.9343 31.0899 20.9343 35.6653C20.9343 35.8521 20.9343 36.2723 20.9343 36.9259C20.9343 37.4862 20.9343 38.1865 20.9343 39.0269C21.0299 39.7739 21.0777 40.5676 21.0777 41.408C21.1733 42.2484 21.2689 42.9954 21.3645 43.6491H0.573543Z"
                                                                fill="#DCDEE7" />
                                                            <path
                                                                d="M59.4259 0.0126953C59.6171 1.31997 59.7605 2.67393 59.8561 4.07458C59.9517 5.47523 59.9995 6.50238 59.9995 7.15602C59.9995 13.4123 58.8524 19.3884 56.5582 25.0843C54.2641 30.687 51.4441 35.4492 48.0985 39.371L33.043 36.0094C34.8592 31.9942 36.293 27.4654 37.3445 22.4231C38.4916 17.3808 39.0652 12.5719 39.0652 7.9964C39.0652 7.80965 39.0652 7.43614 39.0652 6.87588C39.0652 6.22224 39.0174 5.52192 38.9218 4.77491C38.9218 3.93451 38.874 3.09412 38.7784 2.25373C38.7784 1.41334 38.7306 0.66633 38.635 0.0126953H59.4259Z"
                                                                fill="#DCDEE7" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="test-title">Customers Review</h4>
                                        <p>
                                            Many desktop publishing web page editors now use Lorem Ipsum as their
                                            default model text, and a search for 'lorem ipsum' will uncover many web
                                            sites still in
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-top-content">
                                            <div class="testimonial-left-content">
                                                <div class="auother-image">
                                                    <img src="{{ asset('frontend/images/testimonial/test-2.png') }}" alt="Image" />
                                                </div>
                                                <div class="auother-text">
                                                    <h4 class="title">Erika Wagner</h4>
                                                    <span class="sub-title"> Chief lil UX Designer</span>
                                                </div>
                                            </div>
                                            <div class="testimonial-right-content">
                                                <div class="testimonial-rating">
                                                    <ul class="dot-style">
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-regular fa-star-half-stroke"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="testimonial-quote">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="44"
                                                        viewBox="0 0 60 44" fill="none">
                                                        <g opacity="0.3">
                                                            <path
                                                                d="M0.573543 43.6491C0.382362 42.3418 0.238976 40.9878 0.143385 39.5872C0.0477951 38.1865 0 37.1594 0 36.5057C0 30.2495 1.14709 24.3201 3.44126 18.7175C5.73543 13.0215 8.55535 8.21259 11.901 4.29077L26.9565 7.65233C25.1403 11.6675 23.6586 16.1963 22.5116 21.2386C21.4601 26.281 20.9343 31.0899 20.9343 35.6653C20.9343 35.8521 20.9343 36.2723 20.9343 36.9259C20.9343 37.4862 20.9343 38.1865 20.9343 39.0269C21.0299 39.7739 21.0777 40.5676 21.0777 41.408C21.1733 42.2484 21.2689 42.9954 21.3645 43.6491H0.573543Z"
                                                                fill="#DCDEE7" />
                                                            <path
                                                                d="M59.4259 0.0126953C59.6171 1.31997 59.7605 2.67393 59.8561 4.07458C59.9517 5.47523 59.9995 6.50238 59.9995 7.15602C59.9995 13.4123 58.8524 19.3884 56.5582 25.0843C54.2641 30.687 51.4441 35.4492 48.0985 39.371L33.043 36.0094C34.8592 31.9942 36.293 27.4654 37.3445 22.4231C38.4916 17.3808 39.0652 12.5719 39.0652 7.9964C39.0652 7.80965 39.0652 7.43614 39.0652 6.87588C39.0652 6.22224 39.0174 5.52192 38.9218 4.77491C38.9218 3.93451 38.874 3.09412 38.7784 2.25373C38.7784 1.41334 38.7306 0.66633 38.635 0.0126953H59.4259Z"
                                                                fill="#DCDEE7" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="test-title">Customers Review</h4>
                                        <p>
                                            Many desktop publishing web page editors now use Lorem Ipsum as their
                                            default model text, and a search for 'lorem ipsum' will uncover many web
                                            sites still in
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-top-content">
                                            <div class="testimonial-left-content">
                                                <div class="auother-image">
                                                    <img src="{{ asset('frontend/images/testimonial/test-3.png') }}" alt="Image" />
                                                </div>
                                                <div class="auother-text">
                                                    <h4 class="title">Erika Wagner</h4>
                                                    <span class="sub-title"> Chief lil UX Designer</span>
                                                </div>
                                            </div>
                                            <div class="testimonial-right-content">
                                                <div class="testimonial-rating">
                                                    <ul class="dot-style">
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-regular fa-star-half-stroke"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="testimonial-quote">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="44"
                                                        viewBox="0 0 60 44" fill="none">
                                                        <g opacity="0.3">
                                                            <path
                                                                d="M0.573543 43.6491C0.382362 42.3418 0.238976 40.9878 0.143385 39.5872C0.0477951 38.1865 0 37.1594 0 36.5057C0 30.2495 1.14709 24.3201 3.44126 18.7175C5.73543 13.0215 8.55535 8.21259 11.901 4.29077L26.9565 7.65233C25.1403 11.6675 23.6586 16.1963 22.5116 21.2386C21.4601 26.281 20.9343 31.0899 20.9343 35.6653C20.9343 35.8521 20.9343 36.2723 20.9343 36.9259C20.9343 37.4862 20.9343 38.1865 20.9343 39.0269C21.0299 39.7739 21.0777 40.5676 21.0777 41.408C21.1733 42.2484 21.2689 42.9954 21.3645 43.6491H0.573543Z"
                                                                fill="#DCDEE7" />
                                                            <path
                                                                d="M59.4259 0.0126953C59.6171 1.31997 59.7605 2.67393 59.8561 4.07458C59.9517 5.47523 59.9995 6.50238 59.9995 7.15602C59.9995 13.4123 58.8524 19.3884 56.5582 25.0843C54.2641 30.687 51.4441 35.4492 48.0985 39.371L33.043 36.0094C34.8592 31.9942 36.293 27.4654 37.3445 22.4231C38.4916 17.3808 39.0652 12.5719 39.0652 7.9964C39.0652 7.80965 39.0652 7.43614 39.0652 6.87588C39.0652 6.22224 39.0174 5.52192 38.9218 4.77491C38.9218 3.93451 38.874 3.09412 38.7784 2.25373C38.7784 1.41334 38.7306 0.66633 38.635 0.0126953H59.4259Z"
                                                                fill="#DCDEE7" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="test-title">Customers Review</h4>
                                        <p>
                                            Many desktop publishing web page editors now use Lorem Ipsum as their
                                            default model text, and a search for 'lorem ipsum' will uncover many web
                                            sites still in
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-section-shape">
                <div class="testmonial-shape1">
                    <img src="{{ asset('frontend/images/shape/shape-17.svg') }}" alt="Shape" />
                </div>
                <div class="testmonial-shape2">
                    <img src="{{ asset('frontend/images/shape/shape-17.svg') }}" alt="Shape" />
                </div>
                <div class="testmonial-shape3 pulse">
                    <img src="{{ asset('frontend/images/shape/shape-17.svg') }}" alt="Shape" />
                </div>
                <div class="testmonial-shape4 pulse">
                    <img src="{{ asset('frontend/images/shape/shape-17.svg') }}" alt="Shape" />
                </div>
            </div>
        </section>
        <!-- end: Testimonial Area -->

        <!-- start: Contact Area -->
        <section class="tj-contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-form-area">
                            <div class="contact-left-content" data-sal="slide-right" data-sal-duration="1000"
                                data-sal-delay="300">
                                <div class="tj-sec-heading">
                                    <span class="sub-title">Get In touch</span>
                                    <h2 class="sec-title">Have any Project Plan In your Mind?</h2>
                                    <div class="desc">
                                        <p>
                                            All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                            chunks as necessary, making this the first true generator on the
                                            Internet. It uses a dictionary of over 200 Latin words,
                                        </p>
                                    </div>
                                </div>
                                <div class="comntact-list">
                                    <div class="contact-icon">
                                        <img src="assets/images/icon/phone.svg" alt="Icon" />
                                    </div>
                                    <div class="contact-header">
                                        <span class="d-block">For urgent help</span>
                                        <a href="tel:+0000123456789">+ 0000 123-456-789</a>
                                    </div>
                                </div>
                                <div class="comntact-list">
                                    <div class="contact-icon">
                                        <img src="assets/images/icon/mail.svg" alt="Icon" />
                                    </div>
                                    <div class="contact-header">
                                        <span class="d-block">Mail us 24/7</span>
                                        <a href="mailto:hello@gmail.com">hello@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                            <form id="contact-form" class="contact-form-box" data-sal="slide-left"
                                data-sal-duration="1000" data-sal-delay="300">
                                <div class="form-input">
                                    <label>Your Name</label>
                                    <input type="text" class="form__input" name="conName" />
                                </div>
                                <div class="form-input">
                                    <label>Email Address</label>
                                    <input type="email" class="form__input" name="conEmail" />
                                </div>
                                <div class="form-textarea">
                                    <label>How can help you?</label>
                                    <textarea id="message" name="conMessage"></textarea>
                                </div>
                                <div class="tj-contact-button">
                                    <button class="btn tj-primary-btn" type="submit">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-section-shape">
                <div class="contact-bg-shape shake-y">
                    <img src="{{ asset('frontend/images/shape/shape-31.svg') }}" alt="Shape" />
                </div>
                <div class="contact-bg-shape1 pulse">
                    <img src="{{ asset('frontend/images/shape/shape-31.svg') }}" alt="Shape" />
                </div>
                <div class="contact-bg-shape2 pulse">
                    <img src="{{ asset('frontend/images/shape/shape-31.svg') }}" alt="Shape" />
                </div>
                <div class="contact-bg-shape3 shake-y">
                    <img src="{{ asset('frontend/images/shape/shape-31.svg') }}" alt="Shape" />
                </div>
            </div>
        </section>
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
