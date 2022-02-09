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
					<div class="slide swiper-slide">
						<div class="simpleTextBox">
							<h4>Digital Technology is</h4>
							<h2>Our Passion!</h2>
							<p class="roboto-light">
								Stunning Websites and Apps Customized Specifically for your Business.
							</p>
							<div class="buttonContainer">
								<a href="javascript:;" class="ctaButtonContainer ctaButton" buttonVal="Get Started">Get Started</a>
							</div>
						</div>
					</div>
					<div class="slide swiper-slide">
						<div class="simpleTextBox">
							<h4>Digital Marketing is in</h4>
							<h2>Our Blood! </h2>
							<p class="roboto-light">Connect with your Audience, Build Relationships, and Grow your Business.  </p>
							<div class="buttonContainer">
								<a href="javascript:;" class="ctaButtonContainer ctaButton" buttonVal="Get Started">Build your website</a>
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
						<div class="col-12 col-md-12 col-lg-3">
							<div class="aboutImageBanner" style="background-image: url('https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80)"></div>
						</div>
						<div class="col-12 col-md-12 col-lg-9">
							<div class="aboutContentSlider overflow-hidden" id="aboutContentSlider">
								<div class="aboutContentBox swiper-slide">
									<div class="__sub d-flex flex-column justify-content-center">
										<p class="whoWeAreText mb-4 text-dark font-roboto text-uppercase">who we are</p>
										<h4 class="text-white mb-3">We Are a Digital Agency with an </h4>
										<h2 class="text-white text-shadow mb-3">Entrepreneurial Spirit</h2>
										<p class="text-white roboto-light">
											Founded by Business and Marketing Leadership Experts – EvoBlocs Brings Industry Specific, Unique, and Effective Design, Development, and Marketing Solutions to Our Partners World-Wide.
										</p>
										<a href="about.php" class="ctaButtonContainer ct whiteButton mt-4" buttonval="Know More">Know More</a>
									</div>
								</div>
								<div class="aboutContentBox swiper-slide">
									<div class="__sub d-flex flex-column justify-content-center">
										<p class="whoWeAreText mb-4 text-dark font-roboto text-uppercase">who we are</p>
										<h4 class="text-white mb-3">Growing is Great Evolving is</h4>
										<h2 class="text-white text-shadow mb-3">Better</h2>
										<p class="text-white roboto-light">
											EvoBlocs Helps Organizations of All Sizes Develop and Succeed with Expert Strategy, Award-Winning Websites, Applications, and Powerful Creatives – Providing Ease and Excellence of the Overall Digital Experience, no matter which side you’re on. 
										</p>
										<a href="services.php" class="ctaButtonContainer whiteButton mt-4" buttonval="Know More">Know More</a>
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
				<div class="offset-sm-3 col-md-9 col-mm-9 p-0">
					<h2 class="mb-4">
						<span class="text-light">Big</span> 
						<span class="primary-color">Ideas</span> - 
						<span class="text-light">Bold</span> 
						<span class="secondary-color">Results</span>
					</h2>
					<div class="text-columns roboto-light fz-16">
						<p>
							We augment business outcomes and growth velocity with first-class strategies, nurturing them from idea to launch. 
						</p>
						<p>
							Combining the creative inspiration of an artist with the analytical expertise of a scientist - EvoBlocs is smart, agile, and result-oriented. We provide businesses with their unique blend of strategy and execution - Identifying and Capitalizing on Opportunities Timely to Achieve Sustainable, Consistent Growth, Irrespective of Scale. 
						</p>
						<p>
							With solid expertise in all fields of Digital Tech - from Development to Paid Advertising, Content Writing to Search Engine Optimization - Our Strategists, Growth Hackers, and Creative Heads do it all - And do it well!
						</p>
						<p>
							We position you directly in front of your respective audience while communicating your unique value. Together we will build a solid foundation of future growth for years to come. 
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
					<div class="col-12 offset-md-3 col-md-9 p-sm-0">
						<div class="sectionHeading d-flex justify-content-between align-items-center pb-5">
							<div class="headingText width-70">
								<p class="smallText text-uppercase roboto-light">Services</p>
								<h2>
									<span class="lightText">Our</span> 
									<span class="primaryColor">Expertise</span>
									<span class="lightText">in</span>
								</h2>
							</div>
							<a href="services.php" class="ctaButtonContainer mt-5" style="margin-right: -25px;" buttonval="Explore Our Services">Explore Our Services</a>
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
						<li id="service-tab-6" class="tab">
							<span class="icon">
								<?php include('images/icons/webDesign_white.svg') ?>
							</span>
							<h4 class="mb-0">Mobile App Development</h4>
						</li>
						<li id="service-tab-2" class="tab">
							<span class="icon">
								<?php include('images/icons/seo_white.svg') ?>
							</span>
							<h4 class="mb-0">Search Engine Optimization (SEO)</h4>
						</li>
						<li id="service-tab-3" class="tab">
							<span class="icon">
								<?php include('images/icons/socialMedia_white.svg') ?>
							</span>
							<h4 class="mb-0">Social Media Makerting</h4>
						</li>
						<li id="service-tab-4" class="tab">
							<span class="icon">
								<?php include('images/icons/paid_promotion_white.svg') ?>
							</span>
							<h4 class="mb-0">Paid Promotion / Advertising</h4>
						</li>
						<li id="service-tab-5" class="tab">
							<span class="icon">
								<?php include('images/icons/contentManagement_white.svg') ?>
							</span>
							<h4 class="mb-0">Content Writting</h4>
						</li>
					</ul>
				</div>
				<div class="tabDataContainer d-flex">
					<div id="data-service-tab-1" class="servicetabData tabData active">
						<div class="topContent d-flex flex-column">
							<p class="roboto-light">
								Let your business shine across all digital assets. We design responsive websites and applications guided by research, focused on the end-user, and engineered to meet your business goals. Our team of experienced developers build scalable front-end and back-end solutions that are innovative and functional ensuring increased traffic - generating more revenue while continuously improving the efficiency of your asset per your business goals and industry standards.
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
									<a href="web-development.php" class="ctaButtonContainer secondaryButton" buttonval="Explore Now">Explore Now</a>
								</div>
							</div>
						</div>
					</div>
					<div id="data-service-tab-6" class="servicetabData tabData">
						<div class="topContent d-flex flex-column">
							<p class="roboto-light">
								With a vast array of experience in mobile technology, functionality, and API integrations, our end-to-end mobile app development team focuses on seeking a deep understanding of your target audience and creating a superior user design experience. We specialize in multiple technologies to ensure we can make use of the best technology solution for each project.
							</p>
							<p class="roboto-medium">We serve you through:</p>
							<div class="weServeThrough pt-3">
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/webDesign_white1.svg') ?>
									</div>
									<h5>Custom Strategy</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/googleFriendly_white1.svg') ?>
									</div>
									<h5>UI and UX Design</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/socialMedia_white1.svg') ?>
									</div>
									<h5>Mock Up Creation</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/ssl_white1.svg') ?>
									</div>
									<h5>Backend & Frontend Development</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/domainHosting_white1.svg') ?>
									</div>
									<h5>Q/A Testing</h5>
								</div>
								<div class="_block _knowMoreBlock">
									<p class="roboto-light text-italic">and much more ...</p>
									<a href="mobile-app-development.php" class="ctaButtonContainer secondaryButton" buttonval="Explore Now">Explore Now</a>
								</div>
							</div>
						</div>
					</div>
					<div id="data-service-tab-2" class="servicetabData tabData">
						<div class="topContent d-flex flex-column">
							<p class="roboto-light">
								Search engine optimization is all about making sure that a website and by extension the brand, gains traction and visibility. It is the continuous process of improving the ranking of a website on search engines, which is crucial for ensuring that consumers find your business when they are on the lookout for your brand, products, or services on search engines such as Google, Yahoo! and Bing. 
							</p>
							<p class="roboto-medium">We serve you through:</p>
							<div class="weServeThrough pt-3">
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/one-page-seo.svg') ?>
									</div>
									<h5>On-Page SEO</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/keyword-search.svg') ?>
									</div>
									<h5>Keyword Research & Strategy</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/link-building.svg') ?>
									</div>
									<h5>Link Building</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/seo-audit.svg') ?>
									</div>
									<h5>SEO Audit</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/technichal-seo.svg') ?>
									</div>
									<h5>Technical SEO</h5>
								</div>
								<div class="_block _knowMoreBlock">
									<p class="roboto-light text-italic">and much more ...</p>
									<a href="search-engine-optimization.php" class="ctaButtonContainer secondaryButton" buttonval="Explore Now">Explore Now</a>
								</div>
							</div>
						</div>
					</div>
					<div id="data-service-tab-3" class="servicetabData tabData">
						<div class="topContent d-flex flex-column">
							<p class="roboto-light">
								Share your story and grow your brand. With a Social Media Strategy that defines a target audience and solidifies a brand mission and voice, we reach out with paid and organic posts, allowing users to easily join your community, visit your website or make a purchase, increasing engagement across the entire consumer acquisition flow. We will work with you to uncover the right platforms and content creation for the right audience. 
							</p>
							<p class="roboto-medium">We serve you through:</p>
							<div class="weServeThrough pt-3">
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/roadmap.svg') ?>
									</div>
									<h5>Strategy & Roadmap</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/content-development.svg') ?>
									</div>
									<h5>Content Development & Implementation</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/promotion.svg') ?>
									</div>
									<h5>Advertising & Promotion</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/ideation.svg') ?>
									</div>
									<h5>Community Development & Management</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/supoort.svg') ?>
									</div>
									<h5>Hosting & Domain</h5>
								</div>
								<div class="_block _knowMoreBlock">
									<p class="roboto-light text-italic">and much more ...</p>
									<a href="social-media-marketing.php" class="ctaButtonContainer secondaryButton" buttonval="Explore Now">Explore Now</a>
								</div>
							</div>
						</div>
					</div>
					<div id="data-service-tab-4" class="servicetabData tabData">
						<div class="topContent d-flex flex-column">
							<p class="roboto-light">
								Drive serious engagement for your business with well-placed advertising campaigns. We help you run effective ads - our experts target the right keywords for your audiences at the right points in their purchasing journey, driving traffic to your storefront from multiple carefully selected sources. We reach your potential customers with buying intent and continually drive more quality leads through campaign optimization. 
							</p>
							<p class="roboto-medium">We serve you through:</p>
							<div class="weServeThrough pt-3">
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/webDesign_white1.svg') ?>
									</div>
									<h5>Search Ads</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/googleFriendly_white1.svg') ?>
									</div>
									<h5>Display Ads</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/socialMedia_white1.svg') ?>
									</div>
									<h5>Social Media Ads</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/ssl_white1.svg') ?>
									</div>
									<h5>Remarketing Ads</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/domainHosting_white1.svg') ?>
									</div>
									<h5>Google Shopping Ads</h5>
								</div>
								<div class="_block _knowMoreBlock">
									<p class="roboto-light text-italic">and much more ...</p>
									<a href="paid-promotion.php" class="ctaButtonContainer secondaryButton" buttonval="Explore Now">Explore Now</a>
								</div>
							</div>
						</div>
					</div>
					<div id="data-service-tab-5" class="servicetabData tabData">
						<div class="topContent d-flex flex-column">
							<p class="roboto-light">
								Cut through all the noise and drive results with content marketing campaigns that are fueled by industry-leading content creation, strategy, and distribution teams. We take your prospects and make them long-term partners. 
							</p>
							<p class="roboto-medium">We serve you through:</p>
							<div class="weServeThrough pt-3">
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/analysis.svg') ?>
									</div>
									<h5>Analysis</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/seo-search.svg') ?>
									</div>
									<h5>SEO Research</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/ideation.svg') ?>
									</div>
									<h5>Ideation</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/writting.svg') ?>
									</div>
									<h5>Writing</h5>
								</div>
								<div class="_block">
									<div class="icon">
										<?php include('images/icons/editing.svg') ?>
									</div>
									<h5>Editing</h5>
								</div>
								<div class="_block _knowMoreBlock">
									<p class="roboto-light text-italic">and much more ...</p>
									<a href="content-marketing-development.php" class="ctaButtonContainer secondaryButton" buttonval="Explore Now">Explore Now</a>
								</div>
							</div>
						</div>
					</div>
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
				<div class="sectionHeading d-flex justify-content-between align-items-center p-0 mb-4">
					<div class="headingText width-70">
						<p class="smallText text-uppercase roboto-light">Our portfolio</p>
						<h2>
							<span class="lightText">Our</span> 
							<span class="primaryColor">Work</span>
						</h2>
					</div>
					<a href="portfolio.php" class="ctaButtonContainer mt-5" style="margin-right: -25px;" buttonval="Explore Our Work">Explore Our Work</a>
				</div>
			</div>
		</div>
		<div class="homProtfolioWorks">
			<div class="homProtfolioWorkContainer _slide my-4 px-0 d-flex">
				<div class="container p-0 d-flex flex-wrap">
					<div class="porfolioImageBlock w-75">
						<div class="subWrapper">
							<div class="_header">
								<div class="_dots">
									<span></span>
									<span></span>
									<span></span>
								</div>
								<div class="_url">
									<a href="javascript:;" target="_blank" title="https://www.xyz.com">
										<span>https://www.xyz.com</span>
										<i class="fas fa-arrow-right"></i>
									</a>
								</div>
							</div>
							<div class="_thumbnailContainer">
								<img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
							</div>
						</div>
					</div>
					<div class="porfolioContent w-25">
						<h3 class="highlighted recoleta-semiBold">EvoBlocs</h3>
						<h3 class="primaryColor">Website Re-design</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...
						</p>
						<a href="javascript:;" class="ctaButtonContainer ctaButton" buttonval="Discover More">Discover More</a>
					</div>
				</div>
			</div>
			<div class="homProtfolioWorkContainer _slide my-4 px-0 d-flex">
				<div class="container p-0 d-flex flex-wrap">
					<div class="porfolioImageBlock w-75">
						<div class="subWrapper">
							<div class="_header">
								<div class="_dots">
									<span></span>
									<span></span>
									<span></span>
								</div>
								<div class="_url">
									<a href="javascript:;" target="_blank" title="https://www.xyz.com">
										<span>https://www.xyz.com</span>
										<i class="fas fa-arrow-right"></i>
									</a>
								</div>
							</div>
							<div class="_thumbnailContainer">
								<img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
							</div>
						</div>
					</div>
					<div class="porfolioContent w-25">
						<h3 class="highlighted recoleta-semiBold">EvoBlocs</h3>
						<h3 class="primaryColor">Website Re-design</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...
						</p>
						<a href="javascript:;" class="ctaButtonContainer ctaButton" buttonval="Discover More">Discover More</a>
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
				<div class="col-12 col-md-12 col-lg-6 px-0">
					<div class="homeTestimonialsContainer">
						<div class="homeTestimonialsWrapper testimonialSlider">
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
				<div class="col-12 col-md-12 col-lg-6 p-0">
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
						<button type="button" class="ctaButtonContainer ctaButton whiteButton" buttonval="Let's get started">Let's get started</button>
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

<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<!-- footer begin -->
<script>
	
</script>
<?php include('includes/footer.php') ?>
<!-- footer End -->