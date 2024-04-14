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
                                    <a href="{{ url('/') }}">
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
                                    <i class="{{ $cat->icon }}"></i>
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
                                        {!! $cat->short_description !!}
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

        @include('frontend.testimonial')

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
                                            Do you have a project in mind that you're itching to bring to life? We'd love to
                                            hear about it!
                                            Whether it's a sleek website, a cutting-edge mobile app, or a bold marketing
                                            campaign,
                                            we're here to turn your vision into reality. Get in touch with us today to
                                            explore the possibilities!
                                        </p>
                                    </div>
                                </div>
                                <div class="comntact-list">
                                    <div class="contact-icon">
                                        <img src="{{asset('frontend/images/icon/phone.svg')}}" alt="Icon" />
                                    </div>
                                    <div class="contact-header">
                                        <span class="d-block">For urgent help</span>
                                        <a href="tel:+0000123456789">+977 9805672203</a>
                                    </div>
                                </div>
                                <div class="comntact-list">
                                    <div class="contact-icon">
                                        <img src="{{asset('frontend/images/icon/mail.svg')}}" alt="Icon" />
                                    </div>
                                    <div class="contact-header">
                                        <span class="d-block">Mail us 24/7</span>
                                        <a href="mailto:hello@gmail.com">info@bginfotechs.com</a>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="{{ route('frontend.contactus.store') }}"
                                class="contact-form-box" data-sal="slide-left" data-sal-duration="1000"
                                data-sal-delay="300">
                                @csrf
                                <div class="form-input">
                                    <label>Your Name</label>
                                    <input type="text" class="form__input" required name="Name" />
                                </div>
                                <div class="form-input">
                                    <label>Email Address</label>
                                    <input type="email" class="form__input" required name="conEmail" />
                                </div>
                                <div class="form-input">
                                    <label>Contact Number</label>
                                    <input type="text" class="form__input" minlength="10" maxlength="13" required
                                        name="phone" />
                                </div>
                                @php
                                    $categories = Modules\Service\Entities\ServiceCategory::select('title', 'id')->get();
                                @endphp
                                <div class="form-input">
                                    <label for="service">Services</label>
                                    <select required name="service" id="service" class="form-control">
                                        <option value="" selected disabled>Select Service</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                        <option value="0">Others</option>
                                    </select>
                                </div>
                                <div class="form-textarea">
                                    <label>How can we help you?</label>
                                    <textarea id="message" required name="conMessage"></textarea>
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
