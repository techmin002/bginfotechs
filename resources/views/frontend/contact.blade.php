@extends('frontend.layouts.app')
@section('content')
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --success-color: #28a745;
            --info-color: #17a2b8;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --light-bg: #f0f2f5;
            /* Lighter, modern background */
            --white-bg: #ffffff;
            --text-color: #343a40;
            --light-text-color: #6c757d;
            --card-border: #e0e0e0;
            --shadow-light: rgba(0, 0, 0, 0.08);
            --shadow-hover: rgba(0, 0, 0, 0.15);
        }

        body {
            background-color: var(--light-bg);
            font-family: 'Poppins', sans-serif;
            /* Modern font */
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
        }

        .branch-heading {
            color: var(--text-color);
            font-weight: 700;
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 40px !important;
            font-size: 2.5rem;
        }

        .branch-heading::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 100px;
            /* Wider underline */
            height: 5px;
            /* Thicker underline */
            background-color: var(--primary-color);
            border-radius: 3px;
        }

        .branch-card {
            background-color: var(--white-bg);
            border-radius: 15px;
            /* More rounded corners */
            box-shadow: 0 10px 30px var(--shadow-light);
            /* More pronounced shadow */
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border: none;
            /* Remove default border */
            overflow: hidden;
            /* Ensures content respects border-radius */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .branch-card:hover {
            transform: translateY(-8px);
            /* More noticeable lift */
            box-shadow: 0 15px 35px var(--shadow-hover);
            /* Stronger shadow on hover */
        }

        .branch-card h2 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .branch-card h2 .branch-icon {
            font-size: 2rem;
            /* Larger icon */
            margin-right: 12px;
            color: inherit;
            /* Icon color matches heading color */
        }

        .branch-card .lead {
            font-size: 1.1rem;
            color: var(--light-text-color);
            margin-bottom: 20px;
        }

        .branch-card hr {
            border-top: 1px solid var(--card-border);
            margin-top: 1rem;
            margin-bottom: 1.5rem;
        }

        .map-container {
            border: 3px solid var(--card-border);
            border-radius: 12px;
            /* Consistent rounded corners */
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }

        .map-container iframe {
            border-radius: 9px;
            transition: transform 0.3s ease-in-out;
            filter: grayscale(10%);
            /* Slightly desaturate map */
        }

        .map-container iframe:hover {
            transform: scale(1.02);
            /* More prominent zoom effect */
            filter: grayscale(0%);
            /* Full color on hover */
        }

        .branch-info-list li,
        .activity-list li,
        .course-list li,
        .service-list li {
            padding: 10px 0;
            /* More padding */
            border-bottom: 1px dashed var(--card-border);
            font-size: 1rem;
            /* Slightly larger font */
            color: var(--text-color);
            display: flex;
            align-items: center;
        }

        .branch-info-list li:last-child,
        .activity-list li:last-child,
        .course-list li:last-child,
        .service-list li:last-child {
            border-bottom: none;
        }

        .branch-info-list i,
        .activity-list i,
        .course-list i,
        .service-list i {
            color: var(--primary-color);
            /* Default icon color */
            width: 30px;
            /* Fixed width for icons */
            text-align: center;
            font-size: 1.1rem;
            /* Larger icons */
            margin-right: 10px;
        }

        /* Specific icon colors for branch info */
        .branch-info-list .fa-phone-alt {
            color: var(--success-color);
        }

        .branch-info-list .fa-envelope {
            color: var(--danger-color);
        }

        .branch-info-list .fa-clock {
            color: var(--warning-color);
        }

        /* Specific icon colors for activities/courses/services */
        .activity-list .fa-desktop {
            color: #20c997;
        }

        /* Teal */
        .activity-list .fa-code {
            color: #fd7e14;
        }

        /* Orange */
        .activity-list .fa-cogs {
            color: #6f42c1;
        }

        /* Purple */
        .activity-list .fa-users-cog {
            color: #d63384;
        }

        /* Pink */

        .course-list .fa-laptop-code {
            color: #0dcaf0;
        }

        /* Cyan */
        .course-list .fa-palette {
            color: #6610f2;
        }

        /* Indigo */
        .course-list .fa-mobile-alt {
            color: #e83e8c;
        }

        /* Crimson */
        .course-list .fa-database {
            color: #20c997;
        }

        /* Teal */
        .course-list .fa-robot {
            color: #6f42c1;
        }

        /* Purple */

        .service-list .fa-project-diagram {
            color: #fd7e14;
        }

        /* Orange */
        .service-list .fa-bullhorn {
            color: #198754;
        }

        /* Dark Green */
        .service-list .fa-cloud {
            color: #0dcaf0;
        }

        /* Cyan */
        .service-list .fa-users-class {
            color: #d63384;
        }

        /* Pink */

        .alert {
            border-radius: 10px;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            padding: 15px;
            margin-top: auto;
            /* Push alert to bottom */
            border-left: 5px solid;
            /* Emphasize alert border */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .alert-info {
            background-color: #e0f7fa;
            /* Lighter info background */
            color: #007bb6;
            /* Darker info text */
            border-color: var(--info-color);
        }

        .alert i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 991.98px) {
            .branch-heading {
                font-size: 2rem;
            }

            .branch-heading::after {
                width: 80px;
            }

            .branch-card {
                margin-bottom: 30px;
                /* Add more space between cards on smaller screens */
            }
        }

        @media (max-width: 575.98px) {
            .branch-heading {
                font-size: 1.8rem;
            }

            .branch-heading::after {
                width: 60px;
                height: 3px;
            }

            .branch-card h2 {
                font-size: 1.5rem;
            }

            .branch-card h2 .branch-icon {
                font-size: 1.8rem;
            }
        }
    </style>
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
    <div class="container my-5">
        <h1 class="text-center mb-5 branch-heading">Our Branches</h1>

        <div class="row g-4">


            <div class="col-lg-6 col-md-12">
                <div class="branch-card p-4 h-100">
                    <div>
                        <h2 class="text-success"><i class="fas fa-building branch-icon"></i> Dhangadhi Head Office</h2>
                        <p class="lead">Dhangadhi, Kailali, Nepal</p>
                        <hr>
                        <h4 class="mb-3"><i class="fas fa-map-marked-alt me-2"></i> Location Map</h4>
                        <div class="map-container mb-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.3322971856815!2d80.58067917479721!3d28.70961368057735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa13e527e18e84e77%3A0xb449ff1e9cf625a0!2sBG%20Infotechs!5e0!3m2!1sen!2snp!4v1748606843404!5m2!1sen!2snp"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <h4 class="mb-3"><i class="fas fa-info-circle me-2"></i> Branch Information</h4>
                        <ul class="list-unstyled branch-info-list">
                            <li><i class="fas fa-phone-alt"></i> Phone: +091-590935, 9842251119, 9805672203</li>
                            <li><i class="fas fa-envelope"></i> Email: dhangadhi@bginfotechs.com</li>
                            <li><i class="fas fa-clock"></i> Working Hours: Sun-Fri, 9:00 AM - 6:00 PM</li>
                        </ul>

                        <h4 class="mt-4 mb-3"><i class="fas fa-graduation-cap me-2"></i> IT Training Offered</h4>
                        <p class="text-muted">Our Dhangadhi head office is a hub for learning and offers a variety of
                            trainings:</p>
                        <ul class="list-unstyled course-list">
                            <li><i class="fas fa-laptop-code"></i> Full Stack Web Development (MERN/MEAN)</li>
                            <li><i class="fas fa-palette"></i> Advanced Graphic Design & UI/UX</li>
                            <li><i class="fas fa-mobile-alt"></i> Mobile App Development (Android/iOS)</li>
                            <li><i class="fas fa-database"></i> Database Management & SQL</li>
                            <li><i class="fas fa-robot"></i> Basic AI & Machine Learning Concepts</li>
                        </ul>

                        <h4 class="mt-4 mb-3"><i class="fas fa-handshake me-2"></i> Other Services</h4>
                        <p class="text-muted">In addition to courses, we provide:</p>
                        <ul class="list-unstyled service-list">
                            <li><i class="fas fa-project-diagram"></i> Software Development Solutions</li>
                            <li><i class="fas fa-bullhorn"></i> Digital Marketing & SEO Services</li>
                            <li><i class="fas fa-cloud"></i> Cloud Hosting & IT Support</li>
                            <li><i class="fas fa-users-class"></i> Corporate Training Programs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="branch-card p-4 h-100">
                    <div>
                        <h2 class="text-primary"><i class="fas fa-city branch-icon"></i> Kathmandu Office</h2>
                        <p class="lead">Chabahil, Kathmandu, Nepal</p>
                        <hr>
                        <h4 class="mb-3"><i class="fas fa-map-marked-alt me-2"></i> Location Map</h4>
                        <div class="map-container mb-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.8294699187495!2d85.3465396747597!3d27.722551024822003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190052492fc9%3A0x9a27c692659f67b0!2sBG%20Infotechs!5e0!3m2!1sen!2snp!4v1748606893715!5m2!1sen!2snp"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <h4 class="mb-3"><i class="fas fa-info-circle me-2"></i> Branch Information</h4>
                        <ul class="list-unstyled branch-info-list">
                            <li><i class="fas fa-phone-alt"></i> Phone: +01-5925935, 9767692420, 9801655989</li>
                            <li><i class="fas fa-envelope"></i> Email: kathmandu@bginfotechs.com</li>
                            <li><i class="fas fa-clock"></i> Working Hours: Sun-Fri, 9:00 AM - 6:00 PM</li>
                        </ul>

                        <h4 class="mt-4 mb-3"><i class="fas fa-briefcase me-2"></i> Core Activities</h4>
                        <p class="text-muted">This office primarily serves as our operational hub for:</p>
                        <ul class="list-unstyled activity-list">
                            <li><i class="fas fa-desktop"></i> Graphic Designing Projects</li>
                            <li><i class="fas fa-code"></i> Web Development Projects</li>
                            <li><i class="fas fa-cogs"></i> Administrative & Strategic Planning</li>
                            <li><i class="fas fa-users-cog"></i> Client Meetings & Consultations</li>
                        </ul>
                    </div>
                    <div class="alert alert-info mt-4" role="alert">
                        <i class="fas fa-exclamation-circle"></i>
                        **Note:** This branch is currently focused on operational work and does not offer IT Trainings.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start: Contact Area -->
    <section class="tj-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-area">
                        <div class="contact-left-content col-6" data-sal="slide-right" data-sal-duration="1000"
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
                                    <img src="{{ 'frontend/images/icon/phone.svg' }}" alt="Icon" />
                                </div>
                                <div class="contact-header">
                                    <span class="d-block">For urgent help</span>
                                    <a href="tel:+0000123456789">+977 091-590935</a>
                                </div>
                            </div>
                            <div class="comntact-list">
                                <div class="contact-icon">
                                    <img src="{{ asset('frontend/images/icon/mail.svg') }}" alt="Icon" />
                                </div>
                                <div class="contact-header">
                                    <span class="d-block">Mail us 24/7</span>
                                    <a href="mailto:hello@gmail.com">info@bginfotechs.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">


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
                                    $categories = Modules\Service\Entities\ServiceCategory::select(
                                        'title',
                                        'id',
                                    )->get();
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

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                    <div class="tj-blog-item">
                        <div class="blog-image">
                            <a href="#"><img src="{{ asset('frontend/images/blog/blog-1.jpg') }}"
                                    alt="Image" /></a>
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
                            <a href="#"><img src="{{ asset('frontend/images/blog/blog-2.jpg') }}"
                                    alt="Image" /></a>
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
                            <a href="#"><img src="{{ asset('frontend/images/blog/blog-3.jpg') }}"
                                    alt="Image" /></a>
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
                <img src="{{ asset('frontend/images/shape/blog-bg-shape.svg') }}" alt="Shape" />
            </div>
            <div class="blog-bg-shape1">
                <img src="{{ asset('frontend/images/shape/blog-bg-shape1.svg') }}" alt="Shape" />
            </div>
        </div>
    </section>
    <!-- end: Blog Area -->
@endsection
<!-- end: Contact Area -->
