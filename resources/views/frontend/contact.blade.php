@extends('frontend.layouts.app')
@section('content')
<!-- start: Breadcrumb Area -->
<section class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content-area">
                    <div class="breadcrumb-heading">
                        <h1 class="breadcrumb-title">Contact Us</h1>
                    </div>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="index-2.html">
                                <span>Home</span>
                            </a>
                        </span>
                        <i class="fa-light fa-angle-right"></i>
                        <span>
                            <span>Contact Us</span>
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
                                <img src="frontend/images/icon/phone.svg" alt="Icon" />
                            </div>
                            <div class="contact-header">
                                <span class="d-block">For urgent help</span>
                                <a href="tel:+0000123456789">+919867235350</a>
                            </div>
                        </div>
                        <div class="comntact-list">
                            <div class="contact-icon">
                                <img src="frontend/images/icon/mail.svg" alt="Icon" />
                            </div>
                            <div class="contact-header">
                                <span class="d-block">Mail us 24/7</span>
                                <a href="mailto:hello@gmail.com">rotechinnovation@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="{{ route('frontend.contactus.store') }}" class="contact-form-box" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="300">
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
                            <input type="text" class="form__input" minlength="10" maxlength="13" required name="phone" />
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
            <img src="frontend/images/shape/shape-31.svg" alt="Shape" />
        </div>
        <div class="contact-bg-shape1 pulse">
            <img src="frontend/images/shape/shape-32.svg" alt="Shape" />
        </div>
        <div class="contact-bg-shape2 pulse">
            <img src="frontend/images/shape/shape-33.svg" alt="Shape" />
        </div>
        <div class="contact-bg-shape3 shake-y">
            <img src="frontend/images/shape/shape-34.svg" alt="Shape" />
        </div>
    </div>
</section>
<!-- start: Blog Area -->
<section class="tj-blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600">
                <div class="tj-sec-heading text-center">
                    <span class="sub-title">Latest Blog</span>
                    <h2 class="sec-title">Latest Blog Posts</h2>
                    <div class="desc">
                        <p>
                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                            necessary, making this the first true generator on the Internet. It uses a
                            dictionary of over 200 Latin words,
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                <div class="tj-blog-item">
                    <div class="blog-image">
                        <a href="#"><img src="{{ asset('frontend/images/blog/blog-1.jpg')}}" alt="Image" /></a>
                    </div>
                    <div class="blog-content-area">
                        <div class="blog-meta">
                            <span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
                            <span><i class="flaticon-group"></i>By <a href="#"> Admin</a></span>
                        </div>
                        <h4 class="title-link">
                            <a href="#">Simple Proctives that will help you better every day</a>
                        </h4>
                        <div class="desc">
                            <p>
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                their default model text, and a search for.
                            </p>
                        </div>
                        <div class="tj-blog-button">
                            <a href="#" class="tj-secondary-btn btn-border"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                <div class="tj-blog-item">
                    <div class="blog-image">
                        <a href="#"><img src="{{ asset('frontend/images/blog/blog-2.jpg')}}" alt="Image" /></a>
                    </div>
                    <div class="blog-content-area">
                        <div class="blog-meta">
                            <span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
                            <span><i class="flaticon-group"></i>By <a href="#"> Admin</a></span>
                        </div>
                        <h4 class="title-link">
                            <a href="#">Frigilla lectus honcus anteom mode vehicul</a>
                        </h4>
                        <div class="desc">
                            <p>
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                their default model text, and a search for.
                            </p>
                        </div>
                        <div class="tj-blog-button">
                            <a href="#" class="tj-secondary-btn btn-border"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
                <div class="tj-blog-item">
                    <div class="blog-image">
                        <a href="#"><img src="{{ asset('frontend/images/blog/blog-3.jpg')}}" alt="Image" /></a>
                    </div>
                    <div class="blog-content-area">
                        <div class="blog-meta">
                            <span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
                            <span><i class="flaticon-group"></i>By <a href="#">Admin</a></span>
                        </div>
                        <h4 class="title-link">
                            <a href="#">Proin mauris risus turpis or nare felis aptent nisl</a>
                        </h4>
                        <div class="desc">
                            <p>
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                their default model text, and a search for.
                            </p>
                        </div>
                        <div class="tj-blog-button">
                            <a href="#" class="tj-secondary-btn btn-border"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-section-shape">
        <div class="blog-bg-shape">
            <img src="{{ asset('frontend/images/shape/blog-bg-shape.svg')}}" alt="Shape" />
        </div>
        <div class="blog-bg-shape1">
            <img src="{{ asset('frontend/images/shape/blog-bg-shape1.svg')}}" alt="Shape" />
        </div>
    </div>
</section>
<!-- end: Blog Area -->
@endsection
<!-- end: Contact Area -->