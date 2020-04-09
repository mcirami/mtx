<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>MTX Systems Engineering</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
	<link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="/css/main.css">
	<script type="text/javascript" src="/js/jquery-2.2.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/built.min.js"></script>
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />

</head>
<body>
<div class="full_width">
	<div class="my_container">
		<div class="page_wrap full_width">

			<header>

				<nav class="navbar navbar-expand-md px-0">
					<div class="logo navbar-brand">
						<a href="/"><img class="float-left" src="/images/logo.png" alt=""></a>
					</div>
                    <div class="download_text">
                        <p>Downloadable Brochure:</p>
                        <a target="_blank" href="http://www.mtxse.com/Design&SystemStudies-web.pdf">Design & System Studies</a>
                    </div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="mobile_menu_icon navbar-toggler-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav">
<!--							<li class="nav-item dropdown">
								<a id="navbarAboutDropdown" role="button" class="nav-link dropdown-toggle <?php if (isset($group) && $group == 'about') {echo "active"; }?>" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
								<div class="dropdown-menu py-3 border-0" aria-labelledby="navbarAboutDropdown">
									<a class="dropdown-item nav-link px-5 py-4 border-bottom <?php if ($page == 'about') {echo "active"; }?>" href="/about">About</a>
									<a class="dropdown-item nav-link px-5 py-4 border-bottom <?php if ($page == 'services') {echo "active"; }?>" href="/services">Services</a>
									<a class="dropdown-item nav-link px-5 pt-4 <?php if ($page == 'marketsegments') {echo "active"; }?>" href="/market-segments">Market Segments</a>
								</div>
							</li>  -->
							<li class="nav-item">
								<a class="nav-link <?php if ($page == 'about') {echo "active"; }?>" href="/about">About</a>
							</li>

							<li class="nav-item">
								<a class="nav-link <?php if ($page == 'services') {echo "active"; }?>" href="/services">Services</a>
							</li>

							<li class="nav-item">
								<a class="nav-link <?php if ($page == 'marketsegments') {echo "active"; }?>" href="/marketsegments">Market Segments</a>
							</li>

							<li class="nav-item">
								<a class="nav-link <?php if ($page == 'team') {echo "active"; }?>" href="/team">Team</a>
							</li>
							<li class="nav-item dropdown">
								<a id="navbarDropdown" role="button" class="nav-link dropdown-toggle <?php if (isset($group) && $group == 'projects') {echo "active"; }?>" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
								<div class="dropdown-menu py-3 border-0" aria-labelledby="navbarDropdown">
									<a class="dropdown-item nav-link px-5 py-4 border-bottom <?php if ($page == 'oilgas') {echo "active"; }?>" href="/projects/oil-and-gas">Oil & Gas</a>
									<a class="dropdown-item nav-link px-5 py-4 border-bottom <?php if ($page == 'commercial') {echo "active"; }?>" href="/projects/commercial">Commercial</a>
									<a class="dropdown-item nav-link px-5 pt-4 <?php if ($page == 'healthcare') {echo "active"; }?>" href="/projects/healthcare">Healthcare</a>
								</div>
							</li>
							<li class="nav-item pr-0">
								<a class="nav-link pr-0 <?php if ($page == 'contact') {echo "active"; }?>" href="/contact">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>


			<div class="common full_width">

				<?php if ($page === 'home') : ?>
					<div class="full_width slider_section">

						<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleFade" data-slide-to="1"></li>
								<li data-target="#carouselExampleFade" data-slide-to="2"></li>
								<li data-target="#carouselExampleFade" data-slide-to="3"></li>
								<li data-target="#carouselExampleFade" data-slide-to="4"></li>
								<li data-target="#carouselExampleFade" data-slide-to="5"></li>
								<li data-target="#carouselExampleFade" data-slide-to="6"></li>
								<li data-target="#carouselExampleFade" data-slide-to="7"></li>
								<li data-target="#carouselExampleFade" data-slide-to="8"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="/images/slide1.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="/images/slide2.jpg" alt="Second slide">
									<!-- 	<div class="carousel-caption d-none d-md-block">
											<h3>POWER SYSTEMS ANALYSIS</h3>
											<div class="quote full_width">
												<img class="float-left mb-2" src="images/quotes-left.png" alt="">
												<h4>Full service analysis of power grids and systems.</h4>
												<img class="mt-2" src="images/quotes-right.png" alt="">
											</div>
											<p class="full_width">John Franklin - CEO</p>
										</div>  -->
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="/images/slide3.jpg" alt="Third slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="/images/slide4.jpg" alt="Fourth slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="/images/slide5.jpg" alt="Fifth slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="/images/slide6.jpg" alt="Sixth slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="/images/slide7.jpg" alt="Seventh slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="/images/slide8.jpg" alt="Eighth slide">
									<!-- 	<div class="carousel-caption d-none d-md-block">
											<h3>INDUSTRIAL CENTER ANALYSIS</h3>
											<div class="quote full_width">
												<img class="float-left mb-2" src="images/quotes-left.png" alt="">
												<h4>Short circuit, ArcFlash and all electrical safety analysis.</h4>
												<img class="mt-2" src="images/quotes-right.png" alt="">
											</div>

											<p class="full_width">Jack Hevner - OWNER</p>
										</div> -->
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div><!-- slider_section -->

				<?php endif; ?>

				<div class="full_width title_bar home">

				</div>


