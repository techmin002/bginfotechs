@extends('frontend.layouts.app')
@section('content')
<main class="site-content">
	<!-- start: Hero Area -->
	<section class="tj-hero-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="hero-left-content" data-sal="slide-up" data-sal-duration="1000"
						data-sal-delay="100">
						<div class="tj-sec-heading">
							<span class="hero-sub-title"> Creative Thinking</span>
							<h1 class="hero-title">
								Strategic Thinking, Tangible <span class="title"> Results for Business!</span>
							</h1>
							<div class="desc">
								<p>
								We are passionate about harnessing this beauty to create transformative solutions that elevate businesses to new heights.
								</p>
							</div>

							<div class="hero-button d-flex">
								<a class="tj-primary-btn" href="contact.html"> Explore Now</a>
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
								It has survived not only five centuries, but also the leap into electronic
								typesetting, remaining essentially unchanged. It was popularised in the 1960s
								with the release
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
					data-sal-delay="100">
					<div class="tj-service-item text-center">
						<div class="service-inner">
							<div class="service-icon">
								<i class="flaticon-design"></i>
								<img class="image-1" src="frontend/images/shape/service-image.svg" alt="Shape" />
								<img class="image-2" src="frontend/images/shape/service-image1.svg" alt="Shape" />
							</div>
							<div class="service-content">
								<h4 class="title-link">
									<a href="service-details.html">Logo Design</a>
								</h4>
								<p>
									look like readable English. Many desktop publishing packages and web page
									editors now use Lorem Ipsum, and a search for
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
					data-sal-delay="200">
					<div class="tj-service-item text-center">
						<div class="service-inner">
							<div class="service-icon">
								<i class="flaticon-graphic-design-1"></i>
								<img class="image-1" src="frontend/images/shape/service-image.svg" alt="Shape" />
								<img class="image-2" src="frontend/images/shape/service-image1.svg" alt="Shape" />
							</div>
							<div class="service-content">
								<h4 class="title-link">
									<a href="service-details.html">Web Design</a>
								</h4>
								<p>
									look like readable English. Many desktop publishing packages and web page
									editors now use Lorem Ipsum, and a search for
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
					data-sal-delay="300">
					<div class="tj-service-item text-center">
						<div class="service-inner">
							<div class="service-icon">
								<i class="flaticon-ui-design"></i>
								<img class="image-1" src="frontend/images/shape/service-image.svg" alt="Shape" />
								<img class="image-2" src="frontend/images/shape/service-image1.svg" alt="Shape" />
							</div>
							<div class="service-image"></div>
							<div class="service-content">
								<h4 class="title-link">
									<a href="service-details.html">Mobile Apps</a>
								</h4>
								<p>
									look like readable English. Many desktop publishing packages and web page
									editors now use Lorem Ipsum, and a search for
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
					data-sal-delay="400">
					<div class="tj-service-item text-center">
						<div class="service-inner">
							<div class="service-icon">
								<i class="flaticon-megaphone"></i>
								<img class="image-1" src="frontend/images/shape/service-image.svg" alt="Shape" />
								<img class="image-2" src="frontend/images/shape/service-image1.svg" alt="Shape" />
							</div>
							<div class="service-content">
								<h4 class="title-link">
									<a href="service-details.html">Digital Marketing</a>
								</h4>
								<p>
									look like readable English. Many desktop publishing packages and web page
									editors now use Lorem Ipsum, and a search for
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="service-button text-center">
					<a href="service-details.html" class="tj-secondary-btn btn-border"><span>View Details</span></a>
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
								It has survived not only five centuries, but also the leap into electronic
								typesetting, remaining essentially unchanged. It was popularised in the 1960s
								with the release
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
					data-sal-delay="100">
					<div class="tj-team-item">
						<div class="team-image">
							<img src="frontend/images/team/team-1.jpg" alt="Team" />
						</div>
						<div class="tj-team-content">
							<div class="team-header">
								<h5 class="title-link"><a href="#">Alex Deitarson</a></h5>
								<span class="sub-title">UI/UX Designer</span>
							</div>
							<div class="team-share">
								<ul class="dot-style">
									<li>
										<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-brands fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-brands fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
					data-sal-delay="200">
					<div class="tj-team-item">
						<div class="team-image">
							<img src="frontend/images/team/team-2.jpg" alt="Team" />
						</div>
						<div class="tj-team-content">
							<div class="team-header">
								<h5 class="title-link"><a href="#">Alex Deitarson</a></h5>
								<span class="sub-title">UI/UX Designer</span>
							</div>
							<div class="team-share">
								<ul class="dot-style">
									<li>
										<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-brands fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-brands fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
					data-sal-delay="300">
					<div class="tj-team-item">
						<div class="team-image">
							<img src="frontend/images/team/team-3.jpg" alt="Team" />
						</div>
						<div class="tj-team-content">
							<div class="team-header">
								<h5 class="title-link"><a href="#">Alex Deitarson</a></h5>
								<span class="sub-title">UI/UX Designer</span>
							</div>
							<div class="team-share">
								<ul class="dot-style">
									<li>
										<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-brands fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-brands fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
					data-sal-delay="400">
					<div class="tj-team-item">
						<div class="team-image">
							<img src="frontend/images/team/team-4.jpg" alt="Team" />
						</div>
						<div class="tj-team-content">
							<div class="team-header">
								<h5 class="title-link"><a href="#">Alex Deitarson</a></h5>
								<span class="sub-title">UI/UX Designer</span>
							</div>
							<div class="team-share">
								<ul class="dot-style">
									<li>
										<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-brands fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-brands fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="team-button text-center">
					<a href="contact.html" class="tj-secondary-btn btn-border"><span>View More</span></a>
				</div>
			</div>
		</div>
		<div class="team-section-shape">
			<div class="team-bg-shape">
				<img src="frontend/images/shape/team-shape1.svg" alt="Team" />
			</div>
			<div class="team-bg-shape1">
				<img src="frontend/images/shape/team-shape2.svg" alt="Team" />
			</div>
			<div class="team-bg-shape2 pulse">
				<img src="frontend/images/shape/shape-16.svg" alt="Team" />
			</div>
		</div>
	</section>
	<!-- end: Team Area -->

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
											<a href="portfolio-details.html"><img
													src="frontend/images/portfolio/portfolio-1.jpg" alt="Image" /></a>
										</div>
										<div class="portfolio-content">
											<h3 class="title-link">
												<a href="portfolio-details.html">Digital Marketing</a>
											</h3>
											<span class="sub-title">Marketing/Solution</span>
										</div>
									</div>
								</div>
								<div class="portfolio-single-item development finance"
									style="position: absolute; left: 66.5833%; top: 0px">
									<div class="portfolio-single">
										<div class="portfolio-image">
											<a href="portfolio-details.html"><img
													src="frontend/images/portfolio/portfolio-2.jpg" alt="Image" /></a>
										</div>
										<div class="portfolio-content">
											<h3 class="title-link">
												<a href="portfolio-details.html">Web Development</a>
											</h3>
											<span class="sub-title">Marketing/Consulting</span>
										</div>
									</div>
								</div>
								<div class="portfolio-single-item capital development"
									style="position: absolute; left: 66.5833%; top: 352px">
									<div class="portfolio-single">
										<div class="portfolio-image">
											<a href="portfolio-details.html"><img
													src="frontend/images/portfolio/portfolio-4.jpg" alt="Image" /></a>
										</div>
										<div class="portfolio-content">
											<h3 class="title-link">
												<a href="portfolio-details.html">UX/UI Design</a>
											</h3>
											<span class="sub-title">Marketing/Solution</span>
										</div>
									</div>
								</div>
								<div class="portfolio-single-item capital seo"
									style="position: absolute; left: 33.25%; top: 459px">
									<div class="portfolio-single">
										<div class="portfolio-image">
											<a href="portfolio-details.html"><img
													src="frontend/images/portfolio/portfolio-3.jpg" alt="Image" /></a>
										</div>
										<div class="portfolio-content">
											<h3 class="title-link">
												<a href="portfolio-details.html"> Branding & SEO </a>
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
						<div class="desc">
							<p>
								All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
								as necessary, making this the first true generator on the Internet. It uses a
								dictionary of over 200 Latin words,
							</p>
						</div>
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
							<img class="group-shape1 shake-y" src="frontend/images/shape/shape-22.svg" alt="Shape" />
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
							<img class="group-shape1 shake-y" src="frontend/images/shape/shape-50.svg" alt="Shape" />
						</div>
					</div>
				</div>
				<div class="col-lg-6" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
					<div class="tj-faq-area">
						<div class="accordion tj-faq-style" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseOne" aria-expanded="true"
										aria-controls="collapseOne">
										What is a Meet With some form digital platform
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show"
									aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<strong>There are many variations of passages of Lorem Ipsum available, but
											the majority have suffered alteration in some form, by injected
											humour.</strong>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button"
										data-bs-toggle="collapse" data-bs-target="#collapseTwo"
										aria-expanded="false" aria-controls="collapseTwo">
										How Can A Digital Platform Helps Your Business Grow?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse"
									aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<strong>There are many variations of passages of Lorem Ipsum available, but
											the majority have suffered alteration in some form, by injected
											humour.</strong>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button"
										data-bs-toggle="collapse" data-bs-target="#collapseThree"
										aria-expanded="false" aria-controls="collapseThree">
										How Do I Book My Slot To Meet With Your Technical Team?
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse"
									aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<strong>There are many variations of passages of Lorem Ipsum available, but
											the majority have suffered alteration in some form, by injected
											humour.</strong>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFour">
									<button class="accordion-button collapsed" type="button"
										data-bs-toggle="collapse" data-bs-target="#collapseFour"
										aria-expanded="false" aria-controls="collapseFour">
										How Many Projects Hove Your Completed So far?
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse"
									aria-labelledby="headingFour" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<strong>There are many variations of passages of Lorem Ipsum available, but
											the majority have suffered alteration in some form, by injected
											humour.</strong>
									</div>
								</div>
							</div>
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
						<div class="desc">
							<p>
								All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
								as necessary, making this the first true generator on the Internet. It uses a
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
							<a href="blog-details.html"><img src="frontend/images/blog/blog-1.jpg" alt="Image" /></a>
						</div>
						<div class="blog-content-area">
							<div class="blog-meta">
								<span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
								<span><i class="flaticon-group"></i>By
									<a href="blog-details.html"> Admin</a></span>
							</div>
							<h4 class="title-link">
								<a href="blog-details.html">Simple Proctives that will help you better every day</a>
							</h4>
							<div class="desc">
								<p>
									Many desktop publishing packages and web page editors now use Lorem Ipsum as
									their default model text, and a search for.
								</p>
							</div>
							<div class="tj-blog-button">
								<a href="blog-details.html" class="tj-secondary-btn btn-border"><span>Read
										More</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
					<div class="tj-blog-item">
						<div class="blog-image">
							<a href="blog-details.html"><img src="frontend/images/blog/blog-2.jpg" alt="Image" /></a>
						</div>
						<div class="blog-content-area">
							<div class="blog-meta">
								<span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
								<span><i class="flaticon-group"></i>By
									<a href="blog-details.html"> Admin</a></span>
							</div>
							<h4 class="title-link">
								<a href="blog-details.html">Frigilla lectus honcus anteom mode vehicul</a>
							</h4>
							<div class="desc">
								<p>
									Many desktop publishing packages and web page editors now use Lorem Ipsum as
									their default model text, and a search for.
								</p>
							</div>
							<div class="tj-blog-button">
								<a href="blog-details.html" class="tj-secondary-btn btn-border"><span>Read
										More</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
					<div class="tj-blog-item">
						<div class="blog-image">
							<a href="blog-details.html"><img src="frontend/images/blog/blog-3.jpg" alt="Image" /></a>
						</div>
						<div class="blog-content-area">
							<div class="blog-meta">
								<span><i class="flaticon-calendar"></i>23 Oct, 2023</span>
								<span><i class="flaticon-group"></i>By
									<a href="blog-details.html">Admin</a></span>
							</div>
							<h4 class="title-link">
								<a href="blog-details.html">Proin mauris risus turpis or nare felis aptent nisl</a>
							</h4>
							<div class="desc">
								<p>
									Many desktop publishing packages and web page editors now use Lorem Ipsum as
									their default model text, and a search for.
								</p>
							</div>
							<div class="tj-blog-button">
								<a href="blog-details.html" class="tj-secondary-btn btn-border"><span>Read
										More</span></a>
							</div>
						</div>
					</div>
				</div>
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

	@include('frontend.contact')

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