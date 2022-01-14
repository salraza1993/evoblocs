<?php include('includes/top-html.php') ?>
  
	<title>Welcome to Eveblocs | Home Page</title>

	<?php include("includes/css.php") ?>
</head>
<body>
<!-- Header Begin -->
	<?php include('includes/header.php') ?>
<!-- Header End -->

<!-- Home Slider section Begin -->
	<section class="sliderSection">
		<div class="particals_container"><div id="particles-js"></div></div>
		<?php include('includes/lineContainer.php') ?>
		<!-- simple text slider Begins -->
		<div class="sliderContainer">
				<div class="swiper simpleTextSlider" id="simpleTextSlider">
					<div class="swiper-wrapper">
						<div class="slide swiper-slide">
							<div class="simpleTextBox">
								<h4>Building website is in</h4>
								<h2>Our Passion!</h2>
								<p class="roboto-light">
									Stunning Websites are make by 
									Stunning Web Design Team
								</p>
								<div class="buttonContainer">
									<a href="javascript:;" class="ctaButtonContainer" buttonVal="Build your website">Build your website</a>
								</div>
							</div>
						</div>
						<div class="slide swiper-slide">
							<div class="simpleTextBox">
								<h4>Search Engine Optimization</h4>
								<h2>SEO</h2>
								<p class="roboto-light">Make sure your customers can find you on the web</p>
								<div class="buttonContainer">
									<a href="javascript:;" class="ctaButtonContainer" buttonVal="Build your website">Build your website</a>
								</div>
							</div>
						</div>						
					</div>						
				</div>
		</div>
		<!-- simple text slider Ends -->
	</section>
<!-- Home Slider section End -->

<!-- Home About section Begin -->
	<section class="homeAboutSection">
		<?php include('includes/lineContainer.php') ?>
		<div class="container">
			<div class="row">
				<div class="whoWeAreSection">
					<div class="row">
						<div class="col-3">
							<div class="aboutImageBanner" style="background-image: url('https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80)"></div>
						</div>
						<div class="col-9">
							<div class="aboutContentSlider overflow-hidden" id="aboutContentSlider">
								<div class="swiper-wrapper">
									<div class="aboutContentBox swiper-slide">
										<p class="whoWeAreText mb-4 text-dark font-roboto text-uppercase">who we are</p>
										<h4 class="text-white mb-3">We Are a Digital Agency with an</h4>
										<h2 class="text-white text-shadow mb-3">Entrepreneurial Sprite</h2>
										<p class="text-white roboto-light">
											Founded by Business and Marketing Leadership Experts - EvoBlocs Strives to Deliver Uniquely Effective Design, Development and Marketing Solutions.
										</p>
										<a href="javascript:;" class="ctaButtonContainer whiteButton mt-4" buttonval="Know More">Know More</a>
									</div>
									<div class="aboutContentBox swiper-slide">
										<p class="whoWeAreText mb-4 text-dark font-roboto text-uppercase">who we are</p>
										<h4 class="text-white mb-3">Growing is Great Evolving is</h4>
										<h2 class="text-white text-shadow mb-3">Better</h2>
										<p class="text-white roboto-light">
											EvoBlocs Helps Organizations of all Sizes Compete and Win with Expert Strategy, Powerful Creatives, Award-Winning Websites, Applications, and Digital Experiences
										</p>
										<a href="javascript:;" class="ctaButtonContainer whiteButton mt-4" buttonval="Know More">Know More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="boldIdeaBoldResult">
		<?php include('includes/lineContainer.php') ?>
		<div class="container">
			<div class="row">
				<div class="offset-3 col-9 p-0">
					<h2 class="mb-4">
						<span class="text-light">Big</span> 
						<span class="primary-color">Ideas</span> - 
						<span class="text-light">Bold</span> 
						<span class="secondary-color">Results</span>
					</h2>
					<div class="text-columns roboto-light fz-16">
						<p>
							We augment business outcomes and growth velocity with <u>first-class strategies</u>, nurturing them from idea to launch.
						</p>
						<p>
							Combining the creative inspiration of an artist with the analytical expertise of a scientist, EvoBlocs is a smart, agile and result-oriented agency. We provide businesses with a unique blend of strategy and execution. We identify and capitalise on opportunities quickly, which helps them achieve sustainable, consistent growth, irrespective of scale.
						</p>
						<p>
							With solid expertise in all forms of digital solutions - from Development to Paid Advertising, Content Writing to Search Engine Optimization, our growth hackers, creative heads and strategists do it all - And do it well!
						</p>
						<p>
							Positioning our clients for the right audience, we ensure that we communicate their unique value. We find and capitalise upon market opportunities, laying a solid foundation for growth for years to come.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Home About section End -->

<!-- Home Services section Begin -->
	<section class="homeServicesSection">
		<div class="sectionHeader">
			<?php include('includes/lineContainer.php') ?>
			<div class="container">
				<div class="row">
					<div class="offset-3 col-9 p-0">
						<div class="sectionHeading d-flex justify-content-between align-items-center pb-5">
							<div class="headingText width-70">
								<p class="smallText text-uppercase roboto-light">Services</p>
								<h2>
									<span class="lightText">Our</span> 
									<span class="primaryColor">Expertise</span>
									<span class="lightText">in</span>
								</h2>
							</div>
							<a href="javascript:;" class="ctaButtonContainer mt-5" style="margin-right: -25px;" buttonval="Explore All Services">Explore All Services</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="servicesTabContainer tabMainContainer">
				<div class="tabListContainer">
					<ul class="tabLists">
						<li id="service-tab-1" class="tab active">
							<span class="icon">
								<?php include('images/icons/webDesign_white.svg') ?>
							</span>
							<h4 class="mb-0">Web Development</h4>
						</li>
						<li id="service-tab-2" class="tab">
							<span class="icon">
								<?php include('images/icons/seo_white.svg') ?>
							</span>
							<h4 class="mb-0">Search Engine Optimization (SEO)</h4>
						</li>
						<li id="service-tab-3" class="tab">
							<span class="icon">
								<?php include('images/icons/webDesign_white.svg') ?>
							</span>
							<h4 class="mb-0">Social Media Makerting</h4>
						</li>
						<li id="service-tab-4" class="tab">
							<span class="icon">
								<?php include('images/icons/webDesign_white.svg') ?>
							</span>
							<h4 class="mb-0">Paid Promotion / Advertising</h4>
						</li>
						<li id="service-tab-5" class="tab">
							<span class="icon">
								<?php include('images/icons/webDesign_white.svg') ?>
							</span>
							<h4 class="mb-0">Content Writting</h4>
						</li>
						<li id="service-tab-6" class="tab">
							<span class="icon">
								<?php include('images/icons/webDesign_white.svg') ?>
							</span>
							<h4 class="mb-0">Mobile App Development</h4>
						</li>
					</ul>
				</div>
				<div class="tabDataContainer d-flex">
					<div id="data-service-tab-1" class="servicetabData tabData active">
						<div class="topContent d-flex flex-column">
							<p class="roboto-light">
								Let your business shine across all digital assets. We design responsive websites and applications that are guided by research, focused on the end-user and engineered to meet business goals. Our team of experienced developers build scalable front-end and back-end solutions that are innovative and functional. We’ll help you tell a story with a stunning digital asset and ensure that the traffic generates more revenue while also improving efficiency for your business.
							</p>
							<p class="roboto-medium">We serve you through:</p>
							<div class="weServeThrough pt-3">
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/webDesign_white1.svg') ?>
									</div>
									<h5>Mobile Responsive</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/googleFriendly_white1.svg') ?>
									</div>
									<h5>Google Friendly</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/socialMedia_white1.svg') ?>
									</div>
									<h5>Social Media Integrated</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/ssl_white1.svg') ?>
									</div>
									<h5>Secure Website (SSL)</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/domainHosting_white1.svg') ?>
									</div>
									<h5>Hosting & Domain</h5>
								</div>
								<div class="_block _knowMoreBlock">
									<p class="roboto-light text-italic">and much more ...</p>
									<a href="javascript:;" class="ctaButtonContainer secondaryButton" buttonval="Explore All Now">Explore All Now</a>
								</div>
							</div>
						</div>
					</div>
					<div id="data-service-tab-2" class="servicetabData tabData">Search Engine Optimization (SEO</div>
					<div id="data-service-tab-3" class="servicetabData tabData">Social Media Marketing (SMM)</div>
					<div id="data-service-tab-4" class="servicetabData tabData">Paid Promotion / Advertising</div>
					<div id="data-service-tab-5" class="servicetabData tabData">Content Writting</div>
					<div id="data-service-tab-6" class="servicetabData tabData">Mobile App Development</div>
				</div>
			</div>
		</div>
	</section>
<!-- Home Services section End -->

<!-- Home Latest Technologies section Begin -->
	<section class="latestTechnoSection py-5">
  	<?php include('includes/lineContainer.php') ?>
		<div class="container">
			<div class="row ">
				<?php include('includes/latestTechnologies.php') ?>
			</div>
		</div>
	</section>
<!-- Home Latest Technologies section End -->

<!-- Home Portfolio section Begin -->
	<section class="homePortfolioSection py-3">
		<?php include('includes/lineContainer.php') ?>
		<div class="container">
			<div class="row">
				<div class="sectionHeading d-flex justify-content-between align-items-center p-0">
					<div class="headingText width-70">
						<p class="smallText text-uppercase roboto-light">Our portfolio</p>
						<h2>
							<span class="lightText">Our</span> 
							<span class="primaryColor">Works</span>
							<span class="lightText">so far</span>
						</h2>
					</div>
					<a href="javascript:;" class="ctaButtonContainer mt-5" style="margin-right: -25px;" buttonval="Explore All Works">Explore All Works</a>
				</div>
				<div class="homProtfolioWorkContainer my-4 px-0">
					<div class="porfolioImageBlock">
						<div class="_header">
							<div class="_dots"></div>
							<div class="_url">
								<a href="javascript:;">
									<span>https://www.xyz.com</span>
									<i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Home Portfolio section End -->

<!-- Home Testimonials section Begin -->
	<section class="homeTestimonialSection py-5">
		<?php include('includes/lineContainer.php') ?>
		<div class="container">
			<div class="row">
				<div class="sectionHeading d-flex justify-content-between align-items-center p-0 mb-5">
					<div class="headingText width-70">
						<p class="smallText text-uppercase roboto-light">what our clients say</p>
						<h2>
							<span class="lightText">About</span> 
							<span class="primaryColor">Us</span>
						</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-6 px-0">
					<div class="homeTestimonialsContainer">
						<div class="homeTestimonialsWrapper">
							<div class="homeTestimonials">
								<div class="profileImage">
									<img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
								</div>
								<div class="comment">
									<p>
										Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit accusantium laboriosam minus voluptates ab. Corrupti nesciunt officia ipsam aliquam autem. Architecto incidunt, cumque provident consectetur voluptas molestiae nobis quisquam tenetur?
									</p>
								</div>
								<div class="profileDetail">
									<h3 class="primaryColor recoleta-medium">Austin Distel</h3>
									<p>Founder of company name, USA</p>
									<div class="reviews">
										<i class="fas fa-star" style="color: orange;"></i>
										<i class="fas fa-star" style="color: orange;"></i>
										<i class="fas fa-star" style="color: orange;"></i>
										<i class="fas fa-star" style="color: orange;"></i>
										<i class="far fa-star" style="color: gray;"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6 p-0">
					<div class="ctaSection">
						<h3>
							<span class="recoleta-light">Let’s create</span>
							<span class="recoleta-semiBold">Your Success Story </span>
							<span class="recoleta-light">together</span>
						</h3>
						<ul class="list">
							<li><span class="star">*</span> Digital solutions and development are in our blood. </li>
							<li><span class="star">*</span> We revolutionize brands and generate demand. </li>
							<li><span class="star">*</span> Choosing us will be your best decision.</li>
						</ul>
						<a href="javascript:;" class="ctaButtonContainer whiteButton" buttonval="Let's get started">Let's get started</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Home Testimonials section End -->

<!-- Client's Section Begin -->
	<section class="homeClientSection py-5">
		<?php include('includes/lineContainer.php') ?>
		<div class="container">
			<div class="row">
				<div class="sectionHeading d-flex justify-content-between align-items-center p-0 mb-5">
					<div class="headingText width-70">
						<p class="smallText text-uppercase roboto-light">Take a look at</p>
						<h2>
							<span class="lightText">Our</span> 
							<span class="primaryColor">Clients</span>
						</h2>
					</div>
					<a href="javascript:;" class="ctaButtonContainer mt-5" style="margin-right: -25px;" buttonval="Get Listed with Us">Get Listed with Us</a>
				</div>
				<div class="clientsContainer p-0">
					<ul class="clientsBoxContainer">
						<li><img src="https://skyje.com/wp-content/uploads/2019/04/3-1-800x515.png" alt=""></li>
						<li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMM8gpKs1eYLbgie2MTJx-JGfmSfpErVBjkw&usqp=CAU" alt=""></li>
						<li>Client's Logo</li>
						<li>Client's Logo</li>
						<li>Client's Logo</li>
						<li>Client's Logo</li>
						<li>Client's Logo</li>
						<li>Client's Logo</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- Client's Section Begin -->

	<!-- <div class="moreMenuAnimativeBox"></div>
	<section class="moreMenuOverlay"></section> -->

	<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<!-- footer begin -->
<?php include('includes/footer.php') ?>
<!-- footer End -->