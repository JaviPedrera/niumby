@extends('layout.default')

@section('content')

@if (Session::has('success_register'))
	<h3>{{ Session::get('success_register') }}</h3>
@endif
{{ $apartments }}
<div id="mainslider">
	<div class="slider">
		<div class="fullscreen-container">
			<div class="fullscreenbanner">
				<ul>
					<li data-transition="slide" data-slotamount="10"> <img class="img-responsive" alt="" src="images/sliderimg-1.png"/>
						<div class="caption sfb" 
								data-x="center" 
								data-y="160" 
								data-speed="1000" 
								data-start="1000" 
								data-easing="easeOutExpo">
						</div>
					</li>
					<li data-transition="slide" data-slotamount="10"> <img class="img-responsive" alt="" src="images/sliderimg-2.png"/>
						<div class="caption sfb" 
								data-x="center" 
								data-y="center" 
								data-speed="1000" 
								data-start="1000" 
								data-easing="easeOutExpo">
						</div>
					</li>
					<li data-transition="slide" data-slotamount="10"> <img class="img-responsive" alt="" src="images/sliderimg-3.png"/>
						<div class="caption sfb" 
								data-x="center" 
								data-y="center" 
								data-speed="1000" 
								data-start="1000" 
								data-easing="easeOutExpo">
							<div class="slider-text clearfix">
								<div class="text-box">
									<h2>Luxurious Hotel Suite</h2>
									<p>Whether you’re looking to sell or let your home or want to buy or rent a</p>
									<p> home, we really are the people for you to come to.</p>
								</div>
								<div class="slider-button">
									<div class="view-btn"> <a href="">VIEW DETAILS</a> </div>
									<div class="signup-btn"> <a href="#">SIGNUP NOW</a> </div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="top-tabs">
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#properties" aria-expanded="true"><i class="icon-home10"></i> Properties</a></li>
			<li><a data-toggle="tab" href="#flights" aria-expanded="true"><i class="icon-aircraft"></i>Flights</a></li>
			<li><a data-toggle="tab" href="#vacations" aria-expanded="true"><i class="icon-calendar9"></i>Vacations</a></li>
		</ul>
		<div class="tab-content clearfix">
			<div id="properties" class="tab-pane fade in active">
				<div class="search-options">
					<div class="search-form">
						<form id="property-search" name="propertysearch" method="post">
							<div class="form-inner">
								<div class="left-options col-md-6">
									<div class="form-section col-md-6">
										<label>Propert ID</label>
										<input class="form-control" placeholder="ANY">
									</div>
									<div class="form-section col-md-6">
										<label>Property Location</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="ANY">ANY</option>
											</select>
										</div>
									</div>
									<div class="form-section col-md-6">
										<label>Rooms</label>
										<input class="form-control" placeholder="1">
									</div>
									<div class="form-section col-md-6">
										<label>Number of Guests</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="5">5</option>
											</select>
										</div>
									</div>
								</div>
								<div class="right-options col-md-6">
									<div class="form-section col-md-6">
										<label>Property Status</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="ANY">ANY</option>
											</select>
										</div>
									</div>
									<div class="form-section col-md-6">
										<label>Property Type</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="Choose">CHOOSE</option>
											</select>
										</div>
									</div>
									<div class="form-section col-md-6">
										<p>
											<label for="amount">Define a price</label>
											<input type="text" id="amount" readonly style="border:0; color:#fa8526; font-weight:bold;">
										</p>
										<div id="slider-range"><span class="minvalue">MIN</span><span class="maxvalue">MAX</span></div>
									</div>
									<div class="form-section col-md-6">
										<div class="search-btn"> <a href="#">SEARCH FOR IT</a> </div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="flights" class="tab-pane fade">
				<div class="search-options">
					<div class="search-form">
						<form id="flight-search" name="propertysearch" method="post">
							<div class="form-inner">
								<div class="left-options col-md-6">
									<div class="form-section col-md-6">
										<label>Propert ID</label>
										<input class="form-control" placeholder="ANY">
									</div>
									<div class="form-section col-md-6">
										<label>Property Location</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="ANY">ANY</option>
											</select>
										</div>
									</div>
									<div class="form-section col-md-6">
										<label>Rooms</label>
										<input class="form-control" placeholder="1">
									</div>
									<div class="form-section col-md-6">
										<label>Number of Guests</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="5">5</option>
											</select>
										</div>
									</div>
								</div>
								<div class="right-options col-md-6">
									<div class="form-section col-md-6">
										<label>Property Status</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="ANY">ANY</option>
											</select>
										</div>
									</div>
									<div class="form-section col-md-6">
										<label>Property Type</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="Choose">CHOOSE</option>
											</select>
										</div>
									</div>
									<div class="form-section col-md-6">
										<p>
											<label for="amount">Define a price</label>
											<input type="text" id="amount2" readonly style="border:0; color:#fa8526; font-weight:bold;">
										</p>
										<div id="slider-range2"><span class="minvalue">MIN</span><span class="maxvalue">MAX</span></div>
									</div>
									<div class="form-section col-md-6">
										<div class="search-btn"> <a href="#">SEARCH FOR IT</a> </div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="vacations" class="tab-pane fade">
				<div class="search-options">
					<div class="search-form">
						<form id="vacation-search" name="propertysearch" method="post">
							<div class="form-inner">
								<div class="left-options col-md-6">
									<div class="form-section col-md-6">
										<label>Propert ID</label>
										<input class="form-control" placeholder="ANY">
									</div>
									<div class="form-section col-md-6">
										<label>Property Location</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="ANY">ANY</option>
											</select>
										</div>
									</div>
									<div class="form-section col-md-6">
										<label>Rooms</label>
										<input class="form-control" placeholder="1">
									</div>
									<div class="form-section col-md-6">
										<label>Number of Guests</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="5">5</option>
											</select>
										</div>
									</div>
								</div>
								<div class="right-options col-md-6">
									<div class="form-section col-md-6">
										<label>Property Status</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="ANY">ANY</option>
											</select>
										</div>
									</div>
									<div class="form-section col-md-6">
										<label>Property Type</label>
										<div class="select-box">
											<select class="form-control" name="dropdown">
												<option value="Choose">CHOOSE</option>
											</select>
										</div>
									</div>
									<div class="form-section col-md-6">
										<p>
											<label for="amount">Define a price</label>
											<input type="text" id="amount3" readonly style="border:0; color:#fa8526; font-weight:bold;">
										</p>
										<div id="slider-range3"><span class="minvalue">MIN</span><span class="maxvalue">MAX</span></div>
									</div>
									<div class="form-section col-md-6">
										<div class="search-btn"> <a href="#">SEARCH FOR IT</a> </div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<section>
	<div class="container">
		<div class="featured-properties animated out" data-delay="0" data-animation="fadeInUp">
			<div class="section-heading mrgt7x mrgb7x">
				<h3><span>OUR FEATURED PROPERTIES</span></h3>
			</div>
			<div class="section-detail">
				<div class="col-md-4 col-sm-6 animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-box border-hover">
						<div class="appartment-img"><img src="images/propertyimg-1.jpg" class="img-responsive" alt="#" />
							<div class="detail-btn"> <a href="#" class="more-detail"><i class="fa fa-angle-right"></i>VIEW</a> </div>
						</div>
						<div class="property-text">
							<div class="appartment-name">
								<h4>Los Angeles Appartement</h4>
								<p>We are one of the few agents in the area that genuinely are specialists in both sales and lettings. </p>
								<div class="post-meta"> <a href="#"><i class="fa fa-heart"></i>214</a> </div>
							</div>
							<div class="property-price">
								<h1><span><sup>$</sup>450</span></h1>
							</div>
							<ul class="appartment-detail">
								<li>1 Room</li>
								<li>2 Beds</li>
								<li>1 Bath</li>
								<li>84 SQ FT</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-box border-hover">
						<div class="appartment-img"><img src="images/propertyimg-2.jpg" class="img-responsive" alt="#" />
							<div class="detail-btn"> <a href="#" class="more-detail"><i class="fa fa-angle-right"></i>VIEW</a> </div>
						</div>
						<div class="property-text">
							<div class="appartment-name">
								<h4>New York City Loft</h4>
								<p>If you’re a home owner looking to move on, we will come and carry out a free, no-obligation valuation on your property. </p>
								<div class="post-meta"> <a href="#"><i class="fa fa-heart"></i>132</a> </div>
							</div>
							<div class="property-price">
								<h1><span><sup>$</sup>610</span></h1>
							</div>
							<ul class="appartment-detail">
								<li>2 Room</li>
								<li>4 Beds</li>
								<li>2 Bath</li>
								<li>134 SQ FT</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-box border-hover">
						<div class="appartment-img"><img src="images/propertyimg-3.jpg" class="img-responsive" alt="#" />
							<div class="detail-btn"> <a href="#" class="more-detail"><i class="fa fa-angle-right"></i>VIEW</a> </div>
						</div>
						<div class="property-text">
							<div class="appartment-name">
								<h4>San Diego Hotel Room</h4>
								<p>We do market all our properties on the big property websites and our own site but we may have something new on our books. </p>
								<div class="post-meta"> <a href="#"><i class="fa fa-heart"></i>88</a> </div>
							</div>
							<div class="property-price">
								<h1><span><sup>$</sup>390</span></h1>
							</div>
							<ul class="appartment-detail">
								<li>1 Room</li>
								<li>2 Beds</li>
								<li>1 Bath</li>
								<li>64 SQ FT</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="mrgt9x">
	<div class="container">
		<div class="properties-listing animated out" data-delay="0" data-animation="fadeInUp">
			<ul class="listing-name mrgb5x">
				<li class="filter" data-filter="all"><a href="javascript:;">Properties</a></li>
				<li class="filter" data-filter="hotels"><a href="javascript:;">Hotels</a></li>
				<li class="filter" data-filter="vacations"><a href="javascript:;">Vacations</a></li>
				<li class="filter" data-filter="flights"><a href="javascript:;">Flights</a></li>
			</ul>
			<ul class="filter-list">
				<li class="mix hotels col-md-3 animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-detail">
						<div class="property-image"> <img src="images/listingimg-1.jpg" class="img-responsive" alt="#" />
							<div class="zoom-img"> <a href="images/listingimg-1.jpg"><i class="fa fa-plus"></i></a> <a href="images/listingimg-2.jpg"></a> <a href="images/listingimg-3.jpg"></a> </div>
						</div>
						<ul class="clearfix">
							<li>
								<h4>city appartment</h4>
							</li>
							<li><span>Timesquare 14 London, UK</span></li>
							<li class="property-price"><span><sup>$</sup>450</span></li>
							<li><a href="#" class="detail"><span>DETAILS</span></a></li>
						</ul>
					</div>
				</li>
				<li class="mix hotels col-md-3 animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-detail">
						<div class="property-image"> <img src="images/listingimg-2.jpg" class="img-responsive" alt="#" />
							<div class="zoom-img"> <a href="images/listingimg-2.jpg"><i class="fa fa-plus"></i></a> <a href="images/listingimg-3.jpg"></a> <a href="images/listingimg-4.jpg"></a> </div>
						</div>
						<ul class="clearfix">
							<li>
								<h4>Hotel Suite</h4>
							</li>
							<li><span>Timesquare 14 London, UK</span></li>
							<li class="property-price"><span><sup>$</sup>690</span></li>
							<li><a href="#" class="detail"><span>DETAILS</span></a></li>
						</ul>
					</div>
				</li>
				<li class="mix hotels col-md-3 animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-detail">
						<div class="property-image"> <img src="images/listingimg-3.jpg" class="img-responsive" alt="#" />
							<div class="zoom-img"> <a href="images/listingimg-3.jpg"><i class="fa fa-plus"></i></a> <a href="images/listingimg-4.jpg"></a> <a href="images/listingimg-5.jpg"></a> </div>
						</div>
						<ul class="clearfix">
							<li>
								<h4>Luxury Penthouse</h4>
							</li>
							<li><span>Timesquare 14 London, UK</span></li>
							<li class="property-price"><span><sup>$</sup>740</span></li>
							<li><a href="#" class="detail"><span>DETAILS</span></a></li>
						</ul>
					</div>
				</li>
				<li class="mix hotels col-md-3 animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-detail">
						<div class="property-image"> <img src="images/listingimg-4.jpg" class="img-responsive" alt="#" />
							<div class="zoom-img"> <a href="images/listingimg-4.jpg"><i class="fa fa-plus"></i></a> <a href="images/listingimg-5.jpg"></a> <a href="images/listingimg-6.jpg"></a> </div>
						</div>
						<ul class="clearfix">
							<li>
								<h4>Luxury Appartement</h4>
							</li>
							<li><span>Timesquare 14 London, UK</span></li>
							<li class="property-price"><span><sup>$</sup>390</span></li>
							<li><a href="#" class="detail"><span>DETAILS</span></a></li>
						</ul>
					</div>
				</li>
				<li class="mix vacations col-md-3 animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-detail">
						<div class="property-image"> <img src="images/listingimg-5.jpg" class="img-responsive" alt="#" />
							<div class="zoom-img"> <a href="images/listingimg-5.jpg"><i class="fa fa-plus"></i></a> <a href="images/listingimg-6.jpg"></a> <a href="images/listingimg-7.jpg"></a> </div>
						</div>
						<ul class="clearfix">
							<li>
								<h4>Hotel Suite</h4>
							</li>
							<li><span>Timesquare 14 London, UK</span></li>
							<li class="property-price"><span><sup>$</sup>520</span></li>
							<li><a href="#" class="detail"><span>DETAILS</span></a></li>
						</ul>
					</div>
				</li>
				<li class="mix vacations col-md-3 animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-detail">
						<div class="property-image"> <img src="images/listingimg-6.jpg" class="img-responsive" alt="#" />
							<div class="zoom-img"> <a href="images/listingimg-6.jpg"><i class="fa fa-plus"></i></a> <a href="images/listingimg-7.jpg"></a> <a href="images/listingimg-8.jpg"></a> </div>
						</div>
						<ul class="clearfix">
							<li>
								<h4>City Appartement</h4>
							</li>
							<li><span>Timesquare 14 London, UK</span></li>
							<li class="property-price"><span><sup>$</sup>630</span></li>
							<li><a href="#" class="detail"><span>DETAILS</span></a></li>
						</ul>
					</div>
				</li>
				<li class="mix flights col-md-3 animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-detail">
						<div class="property-image"> <img src="images/listingimg-7.jpg" class="img-responsive" alt="#" />
							<div class="zoom-img"> <a href="images/listingimg-7.jpg"><i class="fa fa-plus"></i></a> <a href="images/listingimg-8.jpg"></a> <a href="images/listingimg-1.jpg"></a> </div>
						</div>
						<ul class="clearfix">
							<li>
								<h4>Hotel Room</h4>
							</li>
							<li><span>Timesquare 14 London, UK</span></li>
							<li class="property-price"><span><sup>$</sup>470</span></li>
							<li><a href="#" class="detail"><span>DETAILS</span></a></li>
						</ul>
					</div>
				</li>
				<li class="mix flights col-md-3 animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-detail">
						<div class="property-image"> <img src="images/listingimg-8.jpg" class="img-responsive" alt="#" />
							<div class="zoom-img"> <a href="images/listingimg-8.jpg"><i class="fa fa-plus"></i></a> <a href="images/listingimg-1.jpg"></a> <a href="images/listingimg-2.jpg"></a> </div>
						</div>
						<ul class="clearfix">
							<li>
								<h4>Luxury Boutique</h4>
							</li>
							<li><span>Timesquare 14 London, UK</span></li>
							<li class="property-price"><span><sup>$</sup>899</span></li>
							<li><a href="#" class="detail"><span>DETAILS</span></a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<section>
	<!-- <div class="container">
		<div class="meet-client animated out" data-delay="0" data-animation="fadeInUp">
			<div class="section-heading mrgb6x">
				<h3><span>MEET OUR CLIENTS</span></h3>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-4 mrgb8x animated out" data-delay="0" data-animation="fadeInUp">
					<div class="agent-profile">
						<div class="agent-img"><img src="images/agent-1.jpg" class="img-responsive" alt="#" />
							<div class="img-hover"> <a href="images/agent-1.jpg" class="plus-link"></a></div>
						</div>
						<div class="agent-detail">
							<div class="agent-name">
								<h5>Jonathan Doe</h5>
								<span class="vaction">vaction</span> </div>
							<ul class="agent-contact">
								<li><i class="fa fa-phone"></i></li>
								<li><span>Mobile</span></li>
								<li class="contact-info"><a href="#">+49 123 456 789</a></li>
							</ul>
							<ul class="agent-mail">
								<li><i class="icon-email4"></i></li>
								<li><span>E-mail</span></li>
								<li class="contact-info"><a href="#"> johndoe@email.com</a></li>
							</ul>
							<ul class="social-profile">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
							</ul>
							<div class="full-profile-btn"> <a href="#" class="see-more">see full profile</a> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 mrgb8x animated out" data-delay="0" data-animation="fadeInUp">
					<div class="agent-profile">
						<div class="agent-img"> <img src="images/agent-2.jpg" class="img-responsive" alt="#" />
							<div class="img-hover"> <a href="images/agent-2.jpg" class="plus-link"></a></div>
						</div>
						<div class="agent-detail">
							<div class="agent-name">
								<h5>Susan Withersoon</h5>
								<span class="estate">estate</span> </div>
							<ul class="agent-contact">
								<li><i class="fa fa-phone"></i></li>
								<li><span>Mobile</span></li>
								<li class="contact-info"><a href="#">+49 123 456 789</a></li>
							</ul>
							<ul class="agent-mail">
								<li><i class="icon-email4"></i></li>
								<li><span>E-mail</span></li>
								<li class="contact-info"><a href="#"> johndoe@email.com</a></li>
							</ul>
							<ul class="social-profile">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
							</ul>
							<div class="full-profile-btn"> <a href="#" class="see-more">see full profile</a> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 mrgb8x animated out" data-delay="0" data-animation="fadeInUp">
					<div class="agent-profile">
						<div class="agent-img"> <img src="images/agent-3.jpg" class="img-responsive" alt="#" />
							<div class="img-hover"> <a href="images/agent-3.jpg" class="plus-link"></a></div>
						</div>
						<div class="agent-detail">
							<div class="agent-name">
								<h5>Steven Abraham</h5>
								<span class="vaction">vaction</span> </div>
							<ul class="agent-contact">
								<li><i class="fa fa-phone"></i></li>
								<li><span>Mobile</span></li>
								<li class="contact-info"><a href="#">+49 123 456 789</a></li>
							</ul>
							<ul class="agent-mail">
								<li><i class="icon-email4"></i></li>
								<li><span>E-mail</span></li>
								<li class="contact-info"><a href="#"> johndoe@email.com</a></li>
							</ul>
							<ul class="social-profile">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
							</ul>
							<div class="full-profile-btn"> <a href="#" class="see-more">see full profile</a> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 mrgb8x animated out" data-delay="0" data-animation="fadeInUp">
					<div class="agent-profile">
						<div class="agent-img"> <img src="images/agent-4.jpg" class="img-responsive" alt="#" />
							<div class="img-hover"> <a href="images/agent-4.jpg" class="plus-link"></a></div>
						</div>
						<div class="agent-detail">
							<div class="agent-name">
								<h5>Lucas Bernie </h5>
								<span class="financial">financial</span> </div>
							<ul class="agent-contact">
								<li><i class="fa fa-phone"></i></li>
								<li><span>Mobile</span></li>
								<li class="contact-info"><a href="#">+49 123 456 789</a></li>
							</ul>
							<ul class="agent-mail">
								<li><i class="icon-email4"></i></li>
								<li><span>E-mail</span></li>
								<li class="contact-info"><a href="#"> johndoe@email.com</a></li>
							</ul>
							<ul class="social-profile">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
							</ul>
							<div class="full-profile-btn"> <a href="#" class="see-more">see full profile</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</section>

<section>
	<div class="container">
		<div class="testimonial animated out" data-delay="0" data-animation="fadeInUp">
			<div class="col-md-6">
				<div class="section-heading mrgb4x">
					<h3>What did your clients say</h3>
				</div>
				<div class="section-detail">
					<div class="testi-carousel owl-carousel">
						<div class="item">
							<div class="testimonial-box">
								<div class="client-img"> <img src="images/testimonial-img.jpg" class="img-responsive" alt="#" /> </div>
								<div class="client-name">
									<h4>Jessica P.</h4>
								</div>
								<div class="rating"> <span>13 July, 2014</span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
								<div class="client-review">
									<p>The best lunch ever. I really liked this hotel, as it was just perfect. We had some fun with the animations and the rooms were very clean. We can create a brand that stands out and truly reflects your business.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-box">
								<div class="client-img"> <img src="images/testimonial-img.jpg" class="img-responsive" alt="#" /> </div>
								<div class="client-name">
									<h4>Jessica P.</h4>
								</div>
								<div class="rating"> <span>13 July, 2014</span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
								<div class="client-review">
									<p>The best lunch ever. I really liked this hotel, as it was just perfect. We had some fun with the animations and the rooms were very clean. We can create a brand that stands out and truly reflects your business.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-box">
								<div class="client-img"> <img src="images/testimonial-img.jpg" class="img-responsive" alt="#" /> </div>
								<div class="client-name">
									<h4>Jessica P.</h4>
								</div>
								<div class="rating"> <span>13 July, 2014</span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
								<div class="client-review">
									<p>The best lunch ever. I really liked this hotel, as it was just perfect. We had some fun with the animations and the rooms were very clean. We can create a brand that stands out and truly reflects your business.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="latest-news animated out" data-delay="0" data-animation="fadeInUp">
			<div class="col-md-6 mrgb3x">
				<div class="section-heading mrgb4x">
					<h3>Latest News from our Blog</h3>
				</div>
				<div class="section-detail">
					<div class="blog clearfix">
						<div class="blog-img"><img src="images/blogimg-1.jpg" class="img-responsive" alt="#" /></div>
						<div class="blog-text">
							<h4>Resources that we thought you may find useful </h4>
							<ul class="time">
								<li><a href="#"><i class="icon-access-time"></i>28 Aprli, 2014</a></li>
								<li><a href="#"><i class="icon-user13"></i>Jackson Matins</a></li>
							</ul>
							<p>Alternatively if you have a specific service or question in mind please don’t hesitate to contact us to discuss ...</p>
							<a href="#" class="more-btn"><span>MORE</span></a> </div>
					</div>
					<div class="blog">
						<div class="blog-img"><img src="images/blogimg-2.jpg" class="img-responsive" alt="#" /></div>
						<div class="blog-text">
							<h4>What about your next vaction?</h4>
							<ul class="time">
								<li><a href="#"><i class="icon-access-time"></i>28 Aprli, 2014</a></li>
								<li><a href="#"><i class="icon-user13"></i>Jackson Matins</a></li>
							</ul>
							<p>Alternatively if you have a specific service or question in mind please don’t hesitate to contact us to discuss ...</p>
							<a href="#" class="more-btn"><span>MORE</span></a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="partners mrgt7x mrgb8x animated out" data-delay="0" data-animation="fadeInUp">
			<div class="partner-carousel owl-carousel">
				<div class="item"> <a href="#"> <img src="images/partner-1.jpg" class="img-responsive" alt="#" /> </a> </div>
				<div class="item"> <a href="#"><img src="images/partner-2.jpg" class="img-responsive" alt="#" /></a> </div>
				<div class="item"> <a href="#"> <img src="images/partner-3.jpg" class="img-responsive" alt="#" /></a> </div>
				<div class="item"> <a href="#"> <img src="images/partner-4.jpg" class="img-responsive" alt="#" /></a> </div>
				<div class="item"> <a href="#"> <img src="images/partner-5.jpg" class="img-responsive" alt="#" /></a> </div>
				<div class="item"> <a href="#"><img src="images/partner-2.jpg" class="img-responsive" alt="#" /></a> </div>
				<div class="item"> <a href="#"> <img src="images/partner-3.jpg" class="img-responsive" alt="#" /></a> </div>
				<div class="item"> <a href="#"> <img src="images/partner-4.jpg" class="img-responsive" alt="#" /></a> </div>
				<div class="item"> <a href="#"> <img src="images/partner-5.jpg" class="img-responsive" alt="#" /></a> </div>
				<div class="item"> <a href="#"> <img src="images/partner-1.jpg" class="img-responsive" alt="#" /> </a> </div>
			</div>
		</div>
	</div>
</section>
@endsection