<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Qvrenti Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/photobox.css" rel="stylesheet" type="text/css">
<link href="css/revolution-slider.css" rel="stylesheet" type="text/css">
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
	<div class="container">
		<div class="navigation clearfix">
			<div class="logo"><a href="index.html"><img src="images/logo-img.jpg" alt="#" /> </a></div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar first"></span> <span class="icon-bar middle"></span> <span class="icon-bar last"></span> </button>
			</div>
			<div class="menu">
				<nav class="navbar navbar-default">
					<div id="navbar" class="navbar-collapse collapse pull-right">
						<ul class="nav navbar-nav">
							<li class="active"><a aria-expanded="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">HOME</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="index.html">HOME 1</a></li>
									<li><a href="home-2.html">HOME 2</a></li>
								</ul>
							</li>
							<li><a href="#">FEATURES</a></li>
							<li><a aria-expanded="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">PROPERTIES</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="properties-list.html">PROPERTIES LIST</a></li>
									<li><a href="properties-list-2.html">PROPERTIES LIST 2</a></li>
									<li><a href="properties-right-bar.html">PROPERTIES RIGHT SIDEBAR</a></li>
									<li><a href="properties-right-bar-2.html">PROPERTIES RIGHT SIDEBAR 2</a></li>
									<li><a href="property-single.html">PROPERTY SINGLE</a></li>
									<li><a href="property-single-2.html">PROPERTY SINGLE 2</a></li>
									<li><a href="property-single-side-bar.html">PROPERTY SINGLE SIDEBAR</a></li>
								</ul>
							</li>
							<li><a href="agents.html">AGENTS</a></li>
							<li><a aria-expanded="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">BLOG</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="blog-single-post.html">Blog Single Post</a></li>
									<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
								</ul>
							</li>
							<li><a aria-expanded="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">PAGES</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="service-page.html">SERVICE PAGE</a></li>
									<li><a href="service-list.html">SERVICE LIST</a></li>
									<li><a href="pricing.html">PRICING</a></li>
									<li><a href="booking-page.html">BOOKING</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="shortcodes.html">SHORTCODES</a></li>
								</ul>
							</li>
							<li><a aria-expanded="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">CONTACT US</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="contact.html">CONTACT 1</a></li>
									<li><a href="contact-2.html">CONTACT 2</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>

@yield('content')

<footer class="bg-color">
	<div class="container">
		<div class="upper-footer clearfix">
			<div class="widgets">
				<div class="col-md-3">
					<div class="about-widget"> <img src="images/footer-logo.png" class="img-responsive" alt="#" />
						<p>Alternatively if you have a specific service or question in mind please don’t hesitate to contact us to discuss this using the contact details on the Contact Us page of the site.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="widget-heading mrgb4x">
						<h4>OUR SERVICELIST</h4>
					</div>
					<ul class="widget-area service-list">
						<li><a href="#"><i class="fa fa-play-circle"></i><span>Hotel Stars Checking / Validation</span></a></li>
						<li><a href="#"><i class="fa fa-play-circle"></i><span>Vacation for wedding or holiday</span></a></li>
						<li><a href="#"><i class="fa fa-play-circle"></i><span>Rent a living room or a house</span></a></li>
						<li><a href="#"><i class="fa fa-play-circle"></i><span>Appartements for sale</span></a></li>
						<li><a href="#"><i class="fa fa-play-circle"></i><span>Buy your dream house and more</span></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<div class="widget-heading mrgb4x ">
						<h4>TWITTER FEED</h4>
					</div>
					<ul class="widget-area tweet">
						<li><a href="#"><i class="fa fa-twitter"></i><span>@envato  Creating a new theme for the real estate section</span> <span class="active-time"># 2 hours ago</span></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i><span>@envato  We create awesome PSD templates for multi-pupose</span> <span class="active-time"># 8 hours ago</span></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<div class="widget-heading mrgb4x ">
						<h4>GET IN TOUCH WITH US</h4>
					</div>
					<ul class="widget-area contact clearfix">
						<li> <a href="#"><i class="icon-location10"></i><span>147 Sixth Avenue San Francisco, CA</span></a></li>
						<li> <a href="#"><i class="icon-earth"></i><span class="link-style">http://www.qvrenti-real-estate.com</span></a></li>
						<li> <a href="#"><i class="fa fa-phone"></i><span>+49 123 456 798</span></a></li>
						<li> <a href="#"><i class="icon-email4"></i><span>qvrenti-support@email.com</span></a></li>
					</ul>
					<ul class="footer-social-media">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-google"></i></a></li>
						<li><a href="#"><i class="icon-pinterest-p"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="lower-footer">
		<p>Made with<span><i class="fa fa-heart-o"></i></span>by <a href="http://themeforest.net/user/Template-Geek">Template-Geek</a> | Copyright 2015</p>
	</div>
</footer>
<script src="js/jquery.js" type="text/javascript"></script> 
<script src="js/jquery-ui.js" type="text/javascript"></script> 
<script src="js/bootstrap.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.appear.js"></script> 
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.photobox.js"></script> 
<script src="js/jquery.themepunch.revolution.js" type="text/javascript"></script> 
<script src="js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
