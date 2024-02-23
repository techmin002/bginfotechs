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
                                <h1 class="breadcrumb-title">Our Services</h1>
                            </div>
                            <div class="breadcrumb-link">
                                <span>
                                    <a href="index-2.html">
                                        <span>Home</span>
                                    </a>
                                </span>
                                <i class="fa-light fa-angle-right"></i>
                                <span>
                                    <span>Our Services</span>
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
        <section class="tj-service-section service-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-sec-heading text-center" data-sal="slide-up" data-sal-duration="1000"
                            data-sal-delay="600">
                            <span class="sub-title"> Our Services</span>
                            <h2 class="sec-title">Service We Provide</h2>
                            <div class="desc">
                                <p>
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($data['categories'] as $cat)
                    <div class="col-lg-3 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
                        data-sal-delay="100">
                        <div class="tj-service-item text-center">
                            <div class="service-inner">
                                <div class="service-icon">
                                    <i class="flaticon-design"></i>
                                    <img class="image-1" src="{{ asset('frontend/images/shape/service-image.svg') }}"
                                        alt="Shape" />
                                    <img class="image-2" src="{{ asset('frontend/images/shape/service-image1.svg') }}"
                                        alt="Shape" />
                                </div>
                                <div class="service-content">
                                    <h4 class="title-link">
                                        <a href="{{ route('service.show',$cat->slug) }}">{{ $cat->title }}</a>
                                    </h4>
                                    <p>
                                        look like readable English. Many desktop publishing packages and web page
                                        editors now use Lorem Ipsum, and a search for
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="service-section-shape">
                <div class="service-bg-shape pulse">
                    <img src="{{ asset('frontend/images/shape/shape-14.svg')}}" alt="Shape" />
                </div>
                <div class="service-bg-shape1">
                    <img src="{{ asset('frontend/images/shape/shape-15.svg')}}" alt="Shape" />
                </div>
                <div class="service-bg-shape2">
                    <img src="{{ asset('frontend/images/shape/shape-14.svg')}}" alt="Shape" />
                </div>
                <div class="service-bg-shape3 pulse">
                    <img src="{{ asset('frontend/images/shape/shape-15.svg')}}" alt="Shape" />
                </div>
                <div class="service-bg-shape4 pulse">
                    <img src="{{ asset('frontend/images/shape/shape-16.svg')}}" alt="Shape" />
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
