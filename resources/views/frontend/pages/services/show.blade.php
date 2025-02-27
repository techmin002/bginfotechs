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
                                @if (!$data['category']->image)
                                <img src="{{ asset('frontend/images/service/service-5.jpg') }}" alt="Image">

                                    @else
                                    <img src="{{ asset('upload/images/category/'.$data['category']->image) }}" alt="Image">

                                @endif
                            </div>
                            <div class="details-title">
                                <h3 class="title">{{ $data['category']->title }}</h3>
                            </div>
                            {!! $data['category']->description !!}
                            <div class="row services-item">
                                @foreach ($data['services']->take(2) as $service )
                                    
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="service-details-item">
                                        <div class="service-icon">
                                            <i class="flaticon-design"></i>
                                        </div>
                                        <div class="service-content">
                                            <h4 class="title">{{ $service->title }}</h4>
                                            {!! $service->short_description !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="blog-video-area">
                                <div class="row video-box align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="video-image">
                                            <img src="{{ asset('frontend/images/blog/blog-8.jpg') }}" alt="Image">
                                            <div class="video-play">
                                                <a class="venobox popup-videos-button" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=htmAUvEJ5H4">
                                                    <i class="fa-sharp fa-solid fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="video-content">
                                            <h4 class="title">{{ $data['category']->title }}</h4>
                                            {!! $data['category']->short_description !!}
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
                                {!! $data['category']->description !!}
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
                                            <a href="#">Web Development
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
                                            <a href="#">Branding &amp; Advertise
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
                                        <a href="tel:+9779805672203">+977 091-590935</a>
                                    </div>
                                    <span>Sunday - Saturday: 10:00 am - 6:00pm 24/7 <br>
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
                                        Feel free to reach out to us to discuss further details and how BG Infotechs can assist you." 
                                        This way, you're inviting them to contact you for more information while also asking about their project plans.
                                        </p>
                                    </div>
                                </div>
                                <div class="comntact-list">
                                    <div class="contact-icon">
                                        <img src="assets/images/icon/phone.svg" alt="Icon" />
                                    </div>
                                    <div class="contact-header">
                                        <span class="d-block">For urgent help</span>
                                        <a href="tel:+0000123456789">+977 91-590935</a>
                                    </div>
                                </div>
                                <div class="comntact-list">
                                    <div class="contact-icon">
                                        <img src="assets/images/icon/mail.svg" alt="Icon" />
                                    </div>
                                    <div class="contact-header">
                                        <span class="d-block">Mail us 24/7</span>
                                        <a href="mailto:hello@gmail.com">info@bginfotechs</a>
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
