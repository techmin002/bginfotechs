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
                            "Working with Rotech Innovation Pvt Ltd has been a game-changer for us.
                            Their team's expertise and dedication have helped us achieve our goals and
                            grow our business exponentially."
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
                        @php
                            $data['testimonials'] = Modules\Testimonial\Entities\Testimonial::where('status','on')->get();
                        @endphp
                        @foreach ($data['testimonials'] as $testimonial)
                            <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="testimonial-top-content">
                                    <div class="testimonial-left-content">
                                        <div class="auother-image">
                                            <!-- <img src="frontend/images/testimonial/test-1.png" alt="Image" /> -->
                                            <img src="{{ asset('upload/images/testimonials/'.$testimonial->image) }}" alt="Image" />
                                        </div>
                                        <div class="auother-text">
                                            <h4 class="title">{{ $testimonial->name }}</h4>
                                            <strong class="sub-title">BG Infotechs Clients </strong>
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
                                <h4 class="test-title">Customers Review</h4> <br>
                                {!! $testimonial->message !!}
                            </div>
                        </div>
                        @endforeach
                        
                        
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-section-shape">
        <div class="testmonial-shape1">
            <img src="frontend/images/shape/shape-17.svg" alt="Shape" />
        </div>
        
    </div>
</section>
<!-- end: Testimonial Area -->