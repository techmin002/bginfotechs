@extends('frontend.layouts.app')
@section('content')
    <link href="{{ asset('frontend/smm/css/brands.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/smm/css/solid.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/smm/css/fancybox.css') }}">

    <!-- owl-slider -->
    <link rel="stylesheet" href="{{ asset('frontend/smm/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/smm/css/owl.theme.default.min.css') }}">

    <!-- aos animation -->
    <link rel="stylesheet" href="{{ asset('frontend/smm/css/animate.min.css') }}">

    <!-- global css -->
    <link rel="stylesheet" href="{{ asset('frontend/smm/css/style.css') }}">


    <script async="" src="{{ asset('frontend/smm/js/gtm.js') }}"></script>
    <script src="{{ asset('frontend/smm/js/api.js') }}" async="" defer=""></script>
    <main class="site-content">
        <script>
            function onSubmit(token) {
                document.getElementById("demo-form").submit();
            }
        </script>


        <style>
            .boosting {
                color: #9C0004;
                font-weight: bold;
            }

            .best-value,
            .l__button--primary {
                background-color: #9C0004 !important;
            }

            .price,
            .asked,
            .cuspkg,
            .turn {
                color: #9C0004 !important;
            }

            .l__button--primary:hover {
                color: #017EB6;
            }

            .call {
                color: #017EB6 !important;
            }

            .fa-chevron-right {
                color: #017EB6 !important;
            }

            .accordion__item.active .accordion__title {
                color: #007bff;
                /* Change this to your desired active color */
                font-weight: bold;
            }

            .accordion__title {
                transition: color 0.3s ease;
            }
        </style>

        <section class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content-area">
                            <div class="breadcrumb-heading">
                                <h1 class="breadcrumb-title wow fadeInUp" data-wow-delay=".3s">Social Media Marketing</h1>
                            </div>
                            <div class="breadcrumb-link wow fadeInUp" data-wow-delay=".5s">
                                <span>
                                    <a href="{{ url('/') }}">
                                        <span>Home</span>
                                    </a>
                                </span>
                                <i class="fa-light fa-angle-right"></i>
                                <span>
                                    <span>Social Media Marketing</span>
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

        <div style="min-height: 50vh">

            <section class="overflow">
                <div class="l__container">
                    <section class="section-packages seo-packages m__tb--b" style="background-size: contain;">

                        <div class="section__title text-center p__tb--b ">
                            <h6>Subscription Plan</h6>
                            <h1 class="title">Social Media Packages</h1>
                        </div>
                        <div class="package smm">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-6">
                                    <div class="package__price">
                                        <div class="package__price--head">
                                            <h2 class="title">Silver</h2>
                                            <h3 class="price">
                                                <sup>Rs</sup>
                                                <span>7,999/ </span>
                                                <!-- <del>1300</del> -->
                                                <small>mon</small>
                                            </h3>
                                            <p class="text">Basic social media management package</p>
                                        </div>
                                        <div class="package__price--body">
                                            <div class="content">
                                                <ul>
                                                    <li>Creative Graphic Design - 14</li>
                                                    <li>Page and Social Media Management</li>
                                                    <li>Creative Content Creation</li>
                                                    <li>Free Festival Post & Birthday Post</li>
                                                    <li>Profile & Cover Image</li>
                                                    <li>Monthly Reporting</li>
                                                    <li>Support 24 Hours</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="package__price--footer">
                                            <div class="text-center">
                                                <button class="l__button l__button--primary" data-bs-toggle="modal"
                                                    data-bs-target="#seoSubscription" data-name="Silver">Select
                                                    Plan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="package__price">
                                        <div class="package__price--head">
                                            <h2 class="title">Gold</h2>
                                            <h3 class="price">
                                                <sup>Rs</sup>
                                                <span>11,999/ </span>
                                                <small>mon</small>
                                            </h3>
                                            <p class="text">Enhanced social media presence</p>
                                        </div>
                                        <div class="package__price--body">
                                            <div class="content">
                                                <ul>
                                                    <li>Creative Graphic Design - 20</li>
                                                    <li>Page and Social Media Management</li>
                                                    <li>Creative Content Creation</li>
                                                    <li>2 Reels/GIF Per Month</li>
                                                    <li>Free Festival Post & Birthday Post</li>
                                                    <li>Profile & Cover Image</li>
                                                    <li>Monthly Reporting</li>
                                                    <li>Support 24 Hours</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="package__price--footer">
                                            <div class="text-center">
                                                <button class="l__button l__button--primary" data-bs-toggle="modal"
                                                    data-bs-target="#seoSubscription" data-name="Gold">Select Plan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                    <div class="package__price package__price--radius mt-5 mt-md-0">
                                        <div class="best-value">
                                            <span class="ms-2">
                                                <img src="{{ asset('frontend/smm/images/star.svg') }}" alt="star">
                                            </span>
                                            <p>best value</p>
                                            <span class="ms-2">
                                                <img src="{{ asset('frontend/smm/images/star.svg') }}" alt="star">
                                            </span>
                                        </div>
                                        <div class="package__price--head">
                                            <h2 class="title">Platinum</h2>
                                            <h3 class="price">
                                                <sup>Rs</sup>
                                                <span>17,999/ </span>
                                                <small>mon</small>
                                            </h3>
                                            <p class="text">Premium package with advanced features</p>
                                        </div>
                                        <div class="package__price--body">
                                            <div class="content">
                                                <ul class="expandible">
                                                    <li>Creative Graphic Design - 25</li>
                                                    <li>Page and Social Media Management</li>
                                                    <li>Creative Content Creation</li>
                                                    <li>2 Reels/GIF Per Month</li>
                                                    <li>1 Ads Video</li>
                                                    <li>Free Festival Post & Birthday Post</li>
                                                    <li>Profile & Cover Image</li>
                                                    <li>Monthly Calendar</li>
                                                    <li>Monthly Reporting</li>
                                                    <li>Support 24 Hours</li>
                                                    <li>Boosting $5</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="package__price--footer">
                                            <div class="text-center">
                                                <button class="l__button l__button--primary" data-bs-toggle="modal"
                                                    data-bs-target="#seoSubscription" data-name="Platinum">Select
                                                    Plan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mt-4">
                                    <div class="package__price">
                                        <div class="package__price--head">
                                            <h2 class="title">Diamond</h2>
                                            <h3 class="price">
                                                <sup>Rs</sup>
                                                <span>24,999/ </span>
                                                <small>mon</small>

                                                <br>
                                            </h3>
                                            <p class="text">Ultimate social media solution</p>
                                        </div>
                                        <div class="package__price--body">
                                            <div class="content">
                                                <ul class="expandible">
                                                    <li>30 Creative Graphic Design</li>
                                                    <li>Page and Social Media Management</li>
                                                    <li>Creative Content Creation</li>
                                                    <li>4 Reels/GIF Per Month</li>
                                                    <li>2 Ads Video</li>
                                                    <li>Free Festival Post & Birthday Post</li>
                                                    <li>Profile & Cover Image</li>
                                                    <li>Monthly Calendar</li>
                                                    <li>Monthly Reporting</li>
                                                    <li>Support 24 Hours</li>
                                                    <li>Boosting $10</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="package__price--footer">
                                            <div class="text-center">
                                                <button class="l__button l__button--primary" data-bs-toggle="modal"
                                                    data-bs-target="#seoSubscription" data-name="Diamond">Select
                                                    Plan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="note mt-4">
                                <p class=""><strong>*Note :</strong> Also Available <span class="boosting">Boosting
                                        Services</span>
                                    <br>
                                    Term & Condition Apply
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </section>

            <section class="package__form p__tb">
                <div class="l__container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__title text-center">
                                <h6>Request for a quotation</h6>
                                <h2>Create Your <span class="cuspkg">Custom Package</span></h2>
                            </div>
                            <form action="{{ route('social.media.marketing.store') }}" class="form" method="POST" id="seofForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form__group mb-4">
                                            <label for="" class="form-label">Name/Business Name
                                                <span>*</span></label>
                                            <input type="text" class="form-control" name="name" required=""
                                                placeholder="Choose your name or business name">
                                        </div>
                                        <div class="form__group mb-4">
                                            <label for="" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter your email">
                                        </div>
                                        <div class="form__group mb-4">
                                            <label for="" class="form-label">No. of Graphics</label>
                                            <select name="no_graphics" required="" class="form-select">
                                                <option value="" selected="">Select no. of Graphics</option>
                                                <option value="1 - 5">1 - 14</option>
                                                <option value="6 - 10">14 - 20</option>
                                                <option value="11 - 15">20 - 25</option>
                                                <option value="More than 15">More than 25</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form__group mb-4">
                                            <label for="" class="form-label">Phone No. <span>*</span></label>
                                            <input type="number" required="" name="phone" id="packagePhone"
                                                class="form-control mobile_code" placeholder="Enter your phone">

                                        </div>
                                        <div class="form__group mb-4">
                                            <label for="" class="form-label">Business Category</label>
                                            <select name="business_category" required="" class="form-select">
                                                <option value="" selected="">Choose a Category</option>

                                                <option value="Consultancy">Consultancy</option>

                                                <option value="Hospitals and
                                                    Healthcare">Hospitals and
                                                    Healthcare</option>

                                                <option value="Travels and Trekking">Travels and Trekking
                                                </option>

                                                <option value="Educational
                                                    Institutional">Educational
                                                    Institutional</option>

                                                <option value="E-Commerce">E-Commerce</option>

                                                <option value="Others">Others</option>

                                            </select>
                                        </div>
                                        <div class="form__group mb-4">
                                            <label for="" class="form-label">No. of Videos/GIFs</label>
                                            <select name="no_videos" required="" class="form-select">
                                                <option value="">Select no. of videos/GIFs</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="More than 3">More than 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="g-recaptcha l__button l__button--primary" type="submit">
                                        <span>Apply Now</span><i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </div>


        <section class="faq p__tb">
            <div class="l__container">
                <div class="row wow fadeInUp animated" data-wow-duration="1s"
                    style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                    <div class="col-md-6">
                        <aside>
                            <div class="section__title">
                                <h5>FAQs</h5>
                                <h2 class="title">Frequently <span class="asked">Asked </span>Questions</h2>
                                <p>Welcome to our FAQ section! Here you'll find quick answers to the most common questions
                                    about
                                    our social media handling packages and services.</p>
                            </div>
                            <img src="{{ asset('frontend/smm/images/faq1.png') }}"
                                class="img-fluid wow zoomIn d-none d-md-block animated" data-wow-duration="1s"
                                alt=""
                                style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                        </aside>
                    </div>
                    <div class="col-md-6">
                        <div class="faq__accordion">
                            <ul class="accordion custom__accordion">

                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <a class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            What's included in your social media handling packages?
                                        </a>
                                        <div class="accordion__content" style="display: none">
                                            <p>Our packages include creative graphic design, page management, content
                                                creation, festival/birthday posts, profile/cover images, monthly reporting,
                                                and 24/7 support. Higher-tier packages include additional features like
                                                drone shoots and ad boosting.</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <a class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            Can I customize my social media package?
                                        </a>
                                        <div class="accordion__content" style="display: none">
                                            <p>Yes, we offer customizable solutions. You can start with one of our standard
                                                packages (Silver, Gold, Platinum, or Diamond) and add specific services as
                                                needed. Fill out our custom package form to discuss your requirements.</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <a class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            What's the difference between the Silver and Diamond packages?
                                        </a>
                                        <div class="accordion__content" style="display: none">
                                            <p>The Silver package includes 14 creative designs and basic management, while
                                                the Diamond package offers unlimited designs, monthly calendars, 2 drone
                                                shoots per year, and $10 ad boosting. The Diamond package provides
                                                comprehensive services for businesses needing full-scale social media
                                                management.</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <a class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            Do you offer ad boosting services?
                                        </a>
                                        <div class="accordion__content" style="display: none">
                                            <p>Yes, we offer ad boosting services. Our Platinum package includes $5 boosting
                                                and Diamond includes $10 boosting. Additional boosting services are
                                                available separately - please contact us for details.</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <a class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            How do I choose the right package for my business?
                                        </a>
                                        <div class="accordion__content" style="display: none">
                                            <p>Consider your business size, social media goals, and budget. Small businesses
                                                may start with Silver or Gold, while established brands typically benefit
                                                from Platinum or Diamond. Our team can help assess your needs and recommend
                                                the best package during a free consultation.</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-lg-12">
                                    <li class="accordion__item">
                                        <a class="accordion__title" href="javascript:void(0)">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            What does the drone shoot service include?
                                        </a>
                                        <div class="accordion__content" style="display: none">
                                            <p>Our drone shoot service provides professional aerial photography/videography
                                                for your business. Platinum includes 1 shoot per year, Diamond includes 2.
                                                This content can be used for social media posts, ads, and promotional
                                                materials.</p>
                                        </div>
                                    </li>
                                </div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script>
            function validateNumber(ref) {
                let regx = /(\+977)?[9][6-9]\d{8}/
                if (!regx.test(ref.value)) {
                    ref.setCustomValidity('Phone number not validated');
                } else {
                    ref.setCustomValidity('');
                }
            }

            function onSubmit() {
                var form = document.getElementById("seofForm")
                if (form.checkValidity()) {
                    form.submit();
                } else {
                    Swal.fire({
                        title: "Please fill up the form correctly!",
                        confirmButtonColor: "#45B34A",
                    })
                }
            }
            document.addEventListener("DOMContentLoaded", () => {
                $("ul.expandible").each(function() {
                    var $ul = $(this),
                        $lis = $ul.find("li:gt(11)"),
                        isExpanded = $ul.hasClass("expanded");
                    $lis[isExpanded ? "show" : "hide"]();

                    if ($lis.length > 0) {
                        $ul.append(
                            $('<span class="showmore">' + (isExpanded ? "See Less" : "See More") +
                                "</span>").click(function(event) {
                                var isExpanded = $ul.hasClass("expanded");
                                event.preventDefault();
                                $(this).html(isExpanded ? "See More" : "See Less");
                                $ul.toggleClass("expanded");
                                $lis.toggle();
                            })
                        );
                    }
                });
                var seoDialCode = "";
                var packageintLinput = $("#packagePhone");


                packageintLinput.intlTelInput({
                    initialCountry: "auto",
                    separateDialCode: true,
                    geoIpLookup: function(success, failure) {
                        fetch("https://ipapi.co/json")
                            .then(function(res) {
                                return res.json();
                            })
                            .then(function(data) {
                                success(data.country_code);
                                seoDialCode = data.country_calling_code;
                            })
                            .catch(function() {
                                failure();
                            });
                    },
                    hiddenInput: 'phone'
                }).on('countrychange', function(e, countryData) {
                    seoDialCode = packageintLinput.intlTelInput("getSelectedCountryData").dialCode;
                    var phNo = packageintLinput.val();
                    if (phNo.startsWith('+')) {
                        phNo = phNo.replace(seoDialCode, `${seoDialCode}-`)
                        $("input[name=phone]").val(`${phNo}`);
                    } else {
                        $("input[name=phone]").val(`+${seoDialCode}-${phNo}`);
                    }
                });
                packageintLinput.on("keyup", (e) => {
                    var phNo = packageintLinput.val();
                    if (phNo.startsWith('+')) {
                        phNo = phNo.replace(seoDialCode, `${seoDialCode}-`)
                        $("input[name=phone]").val(`${phNo}`);
                    } else {
                        $("input[name=phone]").val(`+${seoDialCode}-${phNo}`);
                    }
                })
            })
        </script>



        <section class="cta p__tb overflow">
            <div class="l__container  wow fadeInUp" data-wow-duration="1s">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="cta__wrap mb-4 mb-md-0">
                            <h2 class="heading">Let’s connect and <span class="turn">turn your vision into
                                    reality.</span> </h2>

                            <div class="sub-heading">We are available from 9:00 AM to 6:00 PM, Monday to Friday.</div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5">
                        <div class="cta__wrap--one text-center">
                            <h6 class="">Reach out now!</h6>
                            <p class="call-us"><a href="tel:9801848492" class="call">+977 091-590935</a></p>
                            <div class="contact-us-button mt-20">
                                <button data-bs-toggle="modal" data-id="" data-bs-target="#enquiryModal"
                                    class="l__button l__button--primary">
                                    <span>Let's start conversation</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Modal -->
        <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <section class="banner">
                            <div class="banner__enquiry">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-6">
                                        <div class="banner__enquiry--form">
                                            <div class="section__title">
                                                <span>Have a Project in Mind</span>
                                                <h2>tell us a bit more</h2>
                                            </div>
                                            <form action="{{ route('frontend.contactus.store') }}" method="POST" class="form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form__group">
                                                            <input style="border: 1px solid green" type="text" class="form-control"
                                                                placeholder="Name *" name="full_name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form__group">
                                                            <input style="border: 1px solid green" type="email" class="form-control"
                                                                placeholder="Email *" name="email" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form__group">
                                                            <input style="border: 1px solid green" type="number" class="form-control mobile_code"
                                                                placeholder="Phone Number" id="enqPhone" required="">
                                                        </div>

                                                    </div>
                                                    @php
                                                    $categories = Modules\Service\Entities\ServiceCategory::select(
                                                        'title',
                                                        'id',
                                                    )->get();
                                                @endphp
                                                    <div class="col-md-6">
                                                        <div class="form__group">
                                                            <select name="service" id="service"  required="" style="border: 1px solid green" class="form-select"
                                                                aria-label="Services">
                                                                <option value="" selected="">---Service---
                                                                </option>

                                                                @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form__group">
                                                            <textarea type="text" style="border: 1px solid green" class="form-control" placeholder="Write a Message *" name="message" required=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="l__button l__button--primary"><span>Submit</span><i
                                                                class="fa-solid fa-chevron-right"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1">
                                        <div class="banner__enquiry--info d-none d-lg-block">
                                            <div class="banner__enquiry--info-card">
                                                <div class="section__title">
                                                    <span>We would love to hear from you</span>
                                                    <h2>get in touch</h2>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="{{ asset('frontend/smm/images/call.svg') }}"
                                                                alt="">
                                                        </span>
                                                        <div>
                                                            <h6>Our Phone Number</h6>
                                                            <p>
                                                                <a href="tel:9801848492">9767692420</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="{{ asset('frontend/smm/images/envolove.svg') }}"
                                                                alt="">
                                                        </span>
                                                        <div>
                                                            <h6>Our Email</h6>
                                                            <p>
                                                                <!-- <a href="/cdn-cgi/l/email-protection#a3d0c2cfc6d0e3d0ccc5d7c1c6cdd98dc0ccce"><span class="__cf_email__" data-cfemail="86f5e7eae3f5c6f5e9e0f2e4e3e8fca8e5e9eb">[email protected]</span></a> -->
                                                                <a
                                                                    href="mailto:info@example.com">kathmandu@bginfotechs.com</a>

                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="{{ asset('frontend/smm/images/location.svg') }}"
                                                                alt="">
                                                        </span>
                                                        <div>
                                                            <h6>Office Address</h6>
                                                            <p>Kathmandu-6, Chabahil</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade subscription__form" id="seoSubscription" tabindex="-1"
            aria-labelledby="seoSubscriptionLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content modalbox overflow-hidden">
                    <div class="modal-body modalbody p-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left-side left-side-img d-none d-md-block">
                                    <img src="{{ asset('frontend/smm/images/subs-form.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right-side">
                                    <div class="close-button">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('social.media.marketing.store') }}" method="post">
                                        @csrf
                                        <h4>Subscription Form</h4>
                                        <small>Please Fill Out the Following Details</small>

                                        <div class="form-group mb-3 mt-2">
                                            <input class="form-control" style="border:1px solid black !important" type="text" placeholder="Enter Your Name/Business Name *"
                                                name="name" required="">
                                        </div>

                                        <div class="form-group mb-3">
                                            {{-- <label class="form-label">Phone No. <span>*</span></label> --}}
                                            <input class="form-control" style="border:1px solid black !important" type="number" class="form-control mobile_code" id="phone"
                                                name ="phone" required="" placeholder="Enter your phone">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input class="form-control" style="border:1px solid black !important" type="email" placeholder="Enter Your Email" name="email"
                                                required="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input class="form-control" style="border:1px solid black !important" type="text" class="packages" name="package"
                                                placeholder="Selected Package" value="social-media" required="">
                                        </div>
                                        <button type="submit" class="l__button l__button--primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery -->



        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-QT05GSRJNM"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "G-QT05GSRJNM");
            gtag("config", "AW-792397497");
        </script>

        <!-- Google tag (gtag.js) -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-16650151501"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "AW-16650151501");
        </script>

        <!-- Event snippet for Page view conversion page -->
        <script>
            gtag("event", "conversion", {
                send_to: "AW-792397497/MYxaCOvM7aEDELmN7PkC",
            });
        </script>

        <!-- Google Tag Manager Head Tag -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js",
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-MH73HD2");
        </script>

        <!-- owcarousel -->
        <script src="{{ asset('frontend/smm/js/owl.carousel.min.js') }}"></script>

        <!-- aos animation -->
        <script src="{{ asset('frontend/smm/js/wow.js') }}"></script>

        <!-- main js -->
        <script src="{{ asset('frontend/smm/js/main.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const selectButtons = document.querySelectorAll('.l__button[data-bs-toggle="modal"]');
                const packageInput = document.querySelector('input[name="package"]');

                selectButtons.forEach(button => {
                    button.addEventListener('click', function () {
                        const selectedPackage = this.getAttribute('data-name');
                        packageInput.value = selectedPackage;
                    });
                });
            });
        </script>

    </main>
@endsection
