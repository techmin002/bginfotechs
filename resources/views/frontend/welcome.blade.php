@extends('frontend.layouts.app')
@section('content')
    <main class="site-content">
        <!-- start: Hero Area -->
        <section class="tj-hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-left-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                            <div class="tj-sec-heading">
                                <span class="hero-sub-title"> Creative Thinking</span>
                                <h1 class="hero-title">
                                    Strategic Thinking, Tangible <span class="title"> Results for Business!</span>
                                </h1>
                                <div class="desc">
                                    <p>
                                        We are passionate about harnessing this beauty to create transformative solutions
                                        that elevate businesses to new heights.
                                    </p>
                                </div>

                                <div class="hero-button d-flex">
                                    <a class="tj-primary-btn" href="{{ route('contact.index') }}"> Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-image-group">
                            <div class="group-image1 shake-y">
                                <img class="image" src="frontend/images/hero/hero-1.png" alt="Image" />
                            </div>
                            <div class="group-image2 pulse">
                                <img data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100"
                                    src="frontend/images/hero/hero-2.png" alt="Image" />
                            </div>
                            <img class="group-image3" src="frontend/images/shape/shape-5.svg" alt="Image" />
                            <img class="group-image4 pulse" src="frontend/images/shape/shape-6.svg" alt="Image" />
                            <img class="group-image5 pulse" src="frontend/images/shape/shape-7.svg" alt="Image" />
                            <img class="group-image6 pulse" src="frontend/images/shape/shape-8.svg" alt="Image" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shape">
                <img src="frontend/images/shape/shape-1.svg" alt="Shape" />
            </div>
            <div class="hero-shape1">
                <img src="frontend/images/shape/shape-2.svg" alt="Shape" />
            </div>
            <div class="hero-shape2 pulse">
                <img src="frontend/images/shape/shape-3.svg" alt="Shape" />
            </div>
            <div class="hero-shape3 shake-y">
                <img src="frontend/images/shape/shape-4.svg" alt="Shape" />
            </div>
            <div class="hero-scroll">
                <img src="frontend/images/icon/scroll-bg.svg" alt="Bg" />
                <div class="scroll-icon jump">
                    <a href="#scroll-bottom"><img src="frontend/images/icon/scroll.svg" alt="Icon" /></a>
                </div>
            </div>
        </section>
        <!-- end: Hero Area -->

        <!-- start: About Area -->
        <section id="scroll-bottom" class="tj-about-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-12">
                        <div class="about-image-group">
                            <div class="about-circle-box">
                                <img class="circle-one" src="frontend/images/shape/ab-shape.svg" alt="Shape" />
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
                                <img src="frontend/images/about/about-1.png" alt="Image" />
                            </div>
                            <div class="about-image2 pulse">
                                <img src="frontend/images/about/about-2.png" alt="Image" />
                            </div>
                            <div class="about-image3 pulse">
                                <img src="frontend/images/about/about-3.png" alt="Image" />
                            </div>
                            <div class="about-image4 pulse">
                                <img src="frontend/images/about/about-4.png" alt="Image" />
                            </div>
                            <div class="about-shape1 shake-y">
                                <img src="frontend/images/shape/shape-9.svg" alt="Shape" />
                            </div>
                            <div class="about-shape2 pulse">
                                <img src="frontend/images/shape/shape-10.svg" alt="Shape" />
                            </div>
                            <div class="about-shape3 pulse">
                                <img src="frontend/images/shape/shape-13.svg" alt="Shape" />
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
                                        At BG Infotechs Pvt Ltd, we specialize in providing comprehensive IT solutions
                                        and training services to empower businesses to thrive in the digital age.
                                        Our team is dedicated to delivering high-quality services tailored to your specific
                                        needs, ensuring that your business stands out in today's competitive market.
                                    </p>
                                    <p>
                                        We take a holistic approach to IT solutions, covering everything from web and mobile
                                        development to digital marketing and support.
                                        Our goal is to provide you with the tools and knowledge you need to succeed in the
                                        digital landscape.
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
                <img src="frontend/images/shape/shape-37.svg" alt="Shape" />
            </div>
        </section>
        <!-- end: About Area -->

        <!-- start: Counter Area -->
        <!-- <section class="tj-counter-section">
          <div class="container">
           <div class="row">
            <div class="col-lg-12">
             <div class="counter-content-area">
              <div class="counter-item" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
               <div class="tj-count"><span class="odometer" data-count="254">0</span>+</div>
               <span class="sub-title">Project Complete</span>
              </div>
              <div class="counter-item" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
               <div class="tj-count"><span class="odometer" data-count="164">0</span>+</div>
               <span class="sub-title">Quality Team Member</span>
              </div>
              <div class="counter-item" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
               <div class="tj-count"><span class="odometer" data-count="433">0</span>+</div>
               <span class="sub-title">Awards Winning</span>
              </div>
              <div class="counter-item" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
               <div class="tj-count"><span class="odometer" data-count="30">0</span>+</div>
               <span class="sub-title">Years Of Experience</span>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="counter-section-shape">
           <div class="counter_shape">
            <img src="frontend/images/shape/counter-shape.svg" alt="Shape" />
           </div>
           <div class="counter_shape1">
            <img src="frontend/images/shape/counter-shape1.svg" alt="Shape" />
           </div>
          </div>
         </section> -->
        <!-- end: Counter Area -->

        <!-- start: Service Area -->
        <section class="tj-service-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-sec-heading text-center" data-sal="slide-up" data-sal-duration="1000"
                            data-sal-delay="600">
                            <span class="sub-title"> Our Services</span>
                            <h2 class="sec-title">Service We Provide</h2>
                            <div class="desc">
                                <p>
                                    encapsulates the array of tailored solutions and expertise we offer to meet your unique
                                    needs.
                                    It highlights our commitment to delivering value and excellence in every service,
                                    ensuring your satisfaction and success
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($data['categories']->take(4) as $service)
                    <div class="col-lg-3 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
                        data-sal-delay="100">
                        <div class="tj-service-item text-center">
                            <div class="service-inner">
                                <div class="service-icon">
                                    <i class="{{ $service->icon }}"></i>
                                    <img class="image-1" src="frontend/images/shape/service-image.svg" alt="Shape" />
                                    <img class="image-2" src="frontend/images/shape/service-image1.svg" alt="Shape" />
                                </div>
                                <div class="service-content">
                                    <h4 class="title-link">
                                        <a href="{{ route('service.show',$service->slug) }}">{{ $service->title }}</a>
                                    </h4>
                                    <p>
                                        {!! $service->short_description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="service-button text-center">
                        <a href="{{ route('services.list') }}" class="tj-secondary-btn btn-border"><span>View
                                Details</span></a>
                    </div>
                </div>
            </div>
            <div class="service-section-shape">
                <div class="service-bg-shape pulse">
                    <img src="frontend/images/shape/shape-14.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape1">
                    <img src="frontend/images/shape/shape-15.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape2">
                    <img src="frontend/images/shape/shape-14.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape3 pulse">
                    <img src="frontend/images/shape/shape-15.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape4 pulse">
                    <img src="frontend/images/shape/shape-16.svg" alt="Shape" />
                </div>
            </div>
        </section>
        <!-- end: Service Area -->

        
@include('frontend.testimonial')
      

        <!-- Start: Portfolio Area -->
        <section class="tj-portfolio-section inc-colum default-padding">
            <div class="container">
                <div class="row align-items-end portfolio-header">
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                        <div class="tj-sec-heading">
                            <span class="white-sub-title">Portfolio</span>
                            <h2 class="sec-title">Our Latest Work For Our Best Customer</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="filter-menu">
                            <button class="filter active" data-filter="*">All</button>
                            <button class="filter" data-filter=".development">Web Design</button>
                            <button class="filter" data-filter=".marketing">Digital Marketing</button>
                            <button class="filter" data-filter=".seo">SEO</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="portfolio-items-area">
                    <div class="row">
                        <div class="col-md-12 portfolio-content">
                            <div class="portfolio-gallery masonary">
                                <div id="portfolio-grid" class="portfolio-items colums-3"
                                    style="position: relative; height: 812.468px">
                                    <div class="portfolio-single-item marketing finance"
                                        style="position: absolute; left: 0%; top: 352px">
                                        <div class="portfolio-single">
                                            <div class="portfolio-image">
                                                <a href="{{ url('/service/digital-marketing') }}"><img
                                                        src="frontend/images/portfolio/portfolio-1.jpg"
                                                        alt="Image" /></a>
                                            </div>
                                            <div class="portfolio-content">
                                                <h3 class="title-link">
                                                    <a href="{{ url('/service/digital-marketing') }}">Digital Marketing</a>
                                                </h3>
                                                <span class="sub-title">Marketing/Solution</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-single-item development finance"
                                        style="position: absolute; left: 66.5833%; top: 0px">
                                        <div class="portfolio-single">
                                            <div class="portfolio-image">
                                                <a href="{{ url('/service/web-development') }}"><img
                                                        src="frontend/images/portfolio/portfolio-2.jpg"
                                                        alt="Image" /></a>
                                            </div>
                                            <div class="portfolio-content">
                                                <h3 class="title-link">
                                                    <a href="{{ url('/service/web-development') }}">Web Development</a>
                                                </h3>
                                                <span class="sub-title">Marketing/Consulting</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-single-item capital development"
                                        style="position: absolute; left: 66.5833%; top: 352px">
                                        <div class="portfolio-single">
                                            <div class="portfolio-image">
                                                <a href="{{ url('/service/it-training') }}"><img
                                                        src="frontend/images/portfolio/portfolio-4.jpg"
                                                        alt="Image" /></a>
                                            </div>
                                            <div class="portfolio-content">
                                                <h3 class="title-link">
                                                    <a href="{{ url('/service/it-training') }}">UX/ UI Design</a>
                                                </h3>
                                                <span class="sub-title">Marketing/Solution</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-single-item capital seo"
                                        style="position: absolute; left: 33.25%; top: 459px">
                                        <div class="portfolio-single">
                                            <div class="portfolio-image">
                                                <a href="{{ url('/service/it-training') }}"><img
                                                        src="frontend/images/portfolio/portfolio-3.jpg"
                                                        alt="Image" /></a>
                                            </div>
                                            <div class="portfolio-content">
                                                <h3 class="title-link">
                                                    <a href="{{ url('/service/it-training') }}">IT Training</a>
                                                </h3>
                                                <span class="sub-title">Marketing/ Desing Solution</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-section-shape">
                <div class="portfolio-bg-shape">
                    <img src="frontend/images/shape/portfolio-shape.svg" alt="Shape" />
                </div>
                <div class="portfolio-bg-shape1">
                    <img src="frontend/images/shape/portfolio-shape1.svg" alt="Shape" />
                </div>
                <div class="portfolio-bg-shape2 shake-y">
                    <img src="frontend/images/shape/shape-19.svg" alt="Shape" />
                </div>
                <div class="portfolio-bg-shape3 pulse">
                    <img src="frontend/images/shape/shape-20.svg" alt="Shape" />
                </div>
                <div class="portfolio-bg-shape4 shake-y">
                    <img src="frontend/images/shape/shape-19.svg" alt="Shape" />
                </div>
                <div class="portfolio-bg-shape5 pulse">
                    <img src="frontend/images/shape/shape-23.svg" alt="Shape" />
                </div>
                <div class="portfolio-bg-shape6 pulse">
                    <img src="frontend/images/shape/shape-38.svg" alt="Shape" />
                </div>
            </div>
        </section>
        <!-- end: Portfolio Area -->

        <!-- start: FAQ Area -->
        <section class="tj-faq-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-sec-heading" data-sal="slide-right" data-sal-duration="1000"
                            data-sal-delay="100">
                            <span class="sub-title">F,A,Q</span>
                            <h2 class="sec-title">Our Expert Answers</h2>
                           
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-image-group">
                            <div class="faq-image1">
                                <div class="group-image pulse">
                                    <img src="frontend/images/about/about-1.png" alt="Image" />
                                </div>
                                <img class="group-shape pulse" src="frontend/images/shape/shape-21.svg" alt="Shape" />
                                <img class="group-shape1 shake-y" src="frontend/images/shape/shape-22.svg"
                                    alt="Shape" />
                                <img class="group-shape2 pulse" src="frontend/images/about/about-4.png" alt="Image" />
                            </div>
                            <div class="faq-image3 pulse">
                                <img src="frontend/images/about/about-3.png" alt="Image" />
                            </div>
                            <div class="faq-image2 pulse">
                                <div class="group-image">
                                    <img src="frontend/images/about/about-2.png" alt="Image" />
                                </div>
                                <img class="group-shape pulse" src="frontend/images/shape/shape-24.svg" alt="Shape" />
                                <img class="group-shape1 shake-y" src="frontend/images/shape/shape-50.svg"
                                    alt="Shape" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                        <div class="tj-faq-area">
                            <div class="accordion tj-faq-style" id="accordionExample">
                                @foreach ($data['faqs'] as $key => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{$key}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                                            {{$faq->question}}
                                        </button>
                                    </h2>
                                    <div id="collapse{{$key}}" class="accordion-collapse collapse" aria-labelledby="heading{{$key}}"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>{!! $faq->answer !!}</strong>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="accordion-shape">
                                <img src="frontend/images/shape/shape-26.svg" alt="Shape" />
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="faq-section-shape">
                <div class="faq-bg-shape pulse">
                    <img src="frontend/images/shape/faq-shape.svg" alt="Shape" />
                </div>
            </div>
        </section>
        <!-- end: FAQ Area -->

        <!-- start: Blog Area -->
        <section class="tj-blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <div class="tj-sec-heading text-center">
                            <span class="sub-title">Latest Blog</span>
                            <h2 class="sec-title">Latest Blog Posts</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($data['blogs'] as $blog)
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <div class="tj-blog-item">
                            <div class="blog-image">
                                <a href="{{ route('blog.details',$blog->slug) }}"><img src="{{ asset('upload/images/blogs/'.$blog->image) }}"
                                        alt="Image" /></a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-meta">
                                    <span><i class="flaticon-calendar"></i>{{ $blog->created_at->format('d M, Y') }}</span>
                                    <span><i class="flaticon-group"></i>By
                                        <a href="{{ route('blog.details',$blog->slug) }}"> Admin</a></span>
                                </div>
                                <h4 class="title-link">
                                    <a href="{{ route('blog.details',$blog->slug) }}">{{ $blog->title }}</a>
                                </h4>
                                <div class="desc">
                                    {{-- {!! $blog->description !!} --}}
                                    {!! substr($blog->description, 0, 400) !!}....

                                </div>
                                <div class="tj-blog-button">
                                    <a href="{{ route('blog.details',$blog->slug) }}" class="tj-secondary-btn btn-border"><span>Read
                                            More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="blog-section-shape">
                <div class="blog-bg-shape">
                    <img src="frontend/images/shape/blog-bg-shape.svg" alt="Shape" />
                </div>
                <div class="blog-bg-shape1">
                    <img src="frontend/images/shape/blog-bg-shape1.svg" alt="Shape" />
                </div>
            </div>
        </section>
        <!-- end: Blog Area -->

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
                                        <a href="tel:+0000123456789">+977 091-590935</a>
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
