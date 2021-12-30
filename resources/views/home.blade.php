@extends('layouts.app')

@section('content')
<style type="text/css">
	/*@media only screen and (min-width: 600px) {
#image-new {
position: absolute; 
top : -14px; 
left :140px; 
max-height : 100px;
}
}
@media (min-width: 900px) {
#image-new {
position: absolute; 
top : -14px; 
left :180px; 
max-height : 100px;
}
}*/
	
	#image-new {
		 position: absolute;
		 max-height: 100px;
		 z-index: 9999;
		 left: 197px;
		 top: -14px;
	}
	
	@media (max-width: 1024px) {
		 #image-new {
			  position: absolute;
			  top: -14px;
			  left: 150px;
			  max-height: 100px;
		 }
	}
</style>
<script>
	var width = window.innerWidth;
	var height = window.screen.availHeight;
	//alert(width);
</script>
<!-- Slider Starts -->
<div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">
	<!-- Indicators Starts -->
	<ol class="carousel-indicators visible-lg visible-md">
		 <li data-target="#main-slide" data-slide-to="0" class="active"></li>
		 <li data-target="#main-slide" data-slide-to="1"></li>
		 <li data-target="#main-slide" data-slide-to="2"></li>
	</ol>
	<!-- Indicators Ends -->
	<!-- Carousel Inner Starts -->
	<div class="carousel-inner">
		 <!-- Carousel Item Starts -->
		 <div class="item active bg-parallax item-1">
			  <div class="slider-content">
					<div class="container">
						 <div class="slider-text text-center">
							  <h3 class="slide-title" style="font-size: 3.18em;"><span>Start</span> Trading the <span>World's</span> most <br/>popular <span>Cryptocurrencies.</span></h3>
							  <p>
									<a href="register" class="slider btn btn-primary"><i class="fa fa-user-plus"></i> Sign up</a>
							  </p>
						 </div>
					</div>
			  </div>
		 </div>
		 <!-- Carousel Item Ends -->
		 <!-- Carousel Item Starts -->
		 <div class="item bg-parallax item-2">
			  <div class="slider-content">
					<div class="col-md-12">
						 <div class="container">
							  <div class="slider-text text-center">
									<h3 class="slide-title" style="font-size: 3.18em;"><span>Welcome to </span> Real Stock FX... <br/>Cryptos, ICO & Blockchain <span>Investors</span> </h3>
									<p>
										 <a href="#pricing" class="slider btn btn-primary">our plans</a>
									</p>
							  </div>
						 </div>
					</div>
			  </div>
		 </div>
		 <!-- Carousel Item Ends -->
	</div>
	<!-- Carousel Inner Ends -->
	<!-- Carousel Controlers Starts -->
	<a class="left carousel-control" href="home.html#main-slide" data-slide="prev">
		 <span><i class="fa fa-angle-left"></i></span>
	</a>
	<a class="right carousel-control" href="home.html#main-slide" data-slide="next">
		 <span><i class="fa fa-angle-right"></i></span>
	</a>
	<!-- Carousel Controlers Ends -->
</div>
<!-- Slider Ends -->
<!-- Features Section Starts -->
<section class="features">
	<div class="container">
		 <div class="row features-row">
			  <!-- Feature Box Starts -->
			  <div class="feature-box col-md-4 col-sm-12">
					<span class="feature-icon">
				<img id="download-bitcoin" src="{{ asset('site/images/icons/orange/strong-security.png') }}" alt="download bitcoin">
			</span>
					<div class="feature-box-content">
						 <h3>Sign Up For Free</h3>
						 <p>Create a digital currency wallet for free, where you can securely store all your digital currencies.</p>
					</div>
			  </div>
			  <!-- Feature Box Ends -->
			  <!-- Feature Box Starts -->
			  <div class="feature-box two col-md-4 col-sm-12">
					<span class="feature-icon">
				<img id="add-bitcoins" src="{{ asset('site/images/icons/orange/add-bitcoins.png') }}" alt="add bitcoins">
			</span>
					<div class="feature-box-content">
						 <h3>Credit/Fund You Account</h3>
						 <p>Bitcoin is received and stored in your RealstockFX account.</p>
					</div>
			  </div>
			  <!-- Feature Box Ends -->
			  <!-- Feature Box Starts -->
			  <div class="feature-box three col-md-4 col-sm-12">
					<span class="feature-icon">
				<img id="buy-sell-bitcoins" src="{{ asset('site/images/icons/orange/payment-options.png') }}" alt="buy and sell bitcoins">
			</span>
					<div class="feature-box-content">
						 <h3>Relax & Earn</h3>
						 <p>Take a chill pill while our experienced brokers do the job.</p>
					</div>
			  </div>
			  <!-- Feature Box Ends -->
		 </div>
	</div>
</section>
<!-- Features Section Ends -->
<!-- Features and Video Section Starts -->
<section class="image-block">
	<div class="container-fluid">
		 <div class="row">
			  <!-- Features Starts -->
			  <div class="col-md-8 ts-padding img-block-left">
					<div class="gap-20"></div>
					<div class="row">
						 <!-- Feature Starts -->
						 <div class="col-sm-6 col-md-6 col-xs-12">
							  <div class="feature text-center">
									<span class="feature-icon">
							<img id="strong-security" src="{{ asset('site/images/icons/orange/strong-security.png') }}" alt="strong security"/>
						</span>
									<h3 class="feature-title">Protection & Security</h3>
									<p>Stop loss and take profit orders will help secure your investment. The system will automatically execute trades gains.</p>
							  </div>
						 </div>
						 <!-- Feature Ends -->
						 <div class="gap-20-mobile"></div>
						 <!-- Feature Starts -->
						 <div class="col-sm-6 col-md-6 col-xs-12">
							  <div class="feature text-center">
									<span class="feature-icon">
							<img id="world-coverage" src="{{ asset('site/images/icons/orange/world-coverage.png') }}" alt="world coverage"/>
						</span>
									<h3 class="feature-title">Licensed Exchange</h3>
									<p>Our customers perform transactions not only in cryptocurrency, but major world currencies supported by the system.</p>
							  </div>
						 </div>
						 <!-- Feature Ends -->
					</div>
					<div class="gap-20"></div>
					<div class="row">
						 <!-- Feature Starts -->
						 <div class="col-sm-6 col-md-6 col-xs-12">
							  <div class="feature text-center">
									<span class="feature-icon">
							<img id="payment-options" src="{{ asset('site/images/icons/orange/payment-options.png') }}" alt="payment options"/>
						</span>
									<h3 class="feature-title">Unlimited Free Transfers</h3>
									<p>Send any currency to friends, family members or business associates many times as you want, 24 hours a day free.</p>
							  </div>
						 </div>
						 <!-- Feature Ends -->
						 <div class="gap-20-mobile"></div>
						 <!-- Feature Starts -->
						 <div class="col-sm-6 col-md-6 col-xs-12">
							  <div class="feature text-center">
									<span class="feature-icon">
							<img id="mobile-app" src="{{ asset('site/images/icons/orange/mobile-app.png') }}" alt="mobile app"/>
						</span>
									<h3 class="feature-title">Multi Currency Accounts</h3>
									<p>Support major currencies: USD, EUR, GBP & various Cryptocurrencies. Funds exchanged between currencies rate.</p>
							  </div>
						 </div>
						 <!-- Feature Ends -->
					</div>
			  </div>
			  <!-- Features Ends -->
			  <!-- Video Starts -->
			  <div class="col-md-4 ts-padding bg-image-1">
					<div>
						 <div class="text-center">
							  <a class="button-video mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a>
						 </div>
					</div>
			  </div>
			  <!-- Video Ends -->
		 </div>
	</div>
</section>
<!-- Features and Video Section Ends -->

<section class="trade">
	<div class="container">
		 <div class="row text-center">
			  <h2 class="title-head">Available <span>Assets</span></h2>
			  <div class="title-head-subtitle">
					<p> Register an account and trade any of these assets</p>
			  </div>
		 </div>
		 <div class="row team-content team-members">
			  <div class="col-lg-12">
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						 <div class="team-member">
							  <img src="{{ asset('site/images/bitcoin.jpg') }}" style="min-height : 190px; max-height : 300px;" class="img-responsive" alt="team member">
							  <div class="team-member-caption social-icons">
									<h4>Bitcoin</h4>
									<p></p>
									<ul class="list list-inline social">
										 <li>
											  <a href="#" class="fa fa-facebook"></a>
										 </li>
										 <li>
											  <a href="#" class="fa fa-twitter"></a>
										 </li>
										 <li>
											  <a href="#" class="fa fa-google-plus"></a>
										 </li>
									</ul>
							  </div>
						 </div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						 <div class="team-member">
							  <img src="{{ asset('site/images/crude.jpg') }}" style="max-height : 300px;" class="img-responsive" alt="team member">
							  <div class="team-member-caption social-icons">
									<h4>Crude Oil</h4>
									<p></p>
									<ul class="list list-inline social">
										 <li>
											  <a href="#" class="fa fa-facebook"></a>
										 </li>
										 <li>
											  <a href="#" class="fa fa-twitter"></a>
										 </li>
										 <li>
											  <a href="#" class="fa fa-google-plus"></a>
										 </li>
									</ul>
							  </div>
						 </div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						 <div class="team-member">
							  <img src="{{ asset('site/images/gold.jpg') }}" style="max-height : 300px;" class="img-responsive" alt="team member">
							  <div class="team-member-caption social-icons">
									<h4>Gold </h4>
									<p></p>
									<ul class="list list-inline social">
										 <li>
											  <a href="#" class="fa fa-facebook"></a>
										 </li>
										 <li>
											  <a href="#" class="fa fa-twitter"></a>
										 </li>
										 <li>
											  <a href="#" class="fa fa-google-plus"></a>
										 </li>
									</ul>
							  </div>
						 </div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						 <div class="team-member">
							  <img src="{{ asset('site/images/diamond.jpg') }}" style="max-height : 300px;" class="img-responsive" alt="team member">
							  <div class="team-member-caption social-icons">
									<h4>Diamond </h4>
									<p></p>
									<ul class="list list-inline social">
										 <li>
											  <a href="#" class="fa fa-facebook"></a>
										 </li>
										 <li>
											  <a href="#" class="fa fa-twitter"></a>
										 </li>
										 <li>
											  <a href="#" class="fa fa-google-plus"></a>
										 </li>
									</ul>
							  </div>
						 </div>
					</div>
			  </div>
		 </div>
</section>

<!-- Pricing Starts -->
<section class="pricing" id="pricing">
	<div class="container">
		 <!-- Section Title Starts -->
		 <div class="row text-center">
			  <h2 class="title-head">Our <span>Plans</span></h2>
			  <div class="title-head-subtitle">
					<p>Purchase bitcoin using a credit card or with your linked bitcoin account</p>
			  </div>
		 </div>
		 <!-- Section Title Ends -->
		 <!-- Section Content Starts -->
		 <div class="row pricing-tables-content">
			  <div class="pricing-container">
					<!-- Pricing Switcher Starts -->
					<div class="pricing-switcher">
						 <p>
							  <input onclick="location.href = 'login/#crypto'" type="radio" name="switch" value="buy" id="buy-1" checked>
							  <label for="buy-1">LOGIN</label>
							  <input onclick="location.href = 'register#crypto'" type="radio" name="switch" value="sell" id="sell-1">
							  <label for="sell-1">REGISTER</label>
							  <span class="switch"></span>
						 </p>
					</div>
					<!-- Pricing Switcher Ends -->
					<!-- Pricing Tables Starts -->
					<ul class="pricing-list bounce-invert">
						 <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							  <span id="image-new"><img src="{{ asset('site/images/new-banner.png') }}" style="max-height : 100px;"  /></span>
							  <ul class="pricing-wrapper">
									<!-- Buy Pricing Table #1 Starts -->
									<li data-type="buy" class="is-visible">
										 <header class="pricing-header">

											  <span class="feature-icon">
									<img id="strong-security" src="{{ asset('site/images/icons/orange/strong-security.png') }}" alt="strong security"/>
								</span>
											  <h2>Starter</h2>
											  <div class="price">
													<span class="value" style="font-size : 2.4em;">$100</span>
													<br /><br />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">15% Deposit Bonus</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Earn $250+</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">No Training</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Junior Level Broker</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">24/7 Customer Support</span>
											  </div>
										 </header>
										 <footer class="pricing-footer">
											  <a href="register5a6b.html?invest=true" class="btn btn-primary">INVEST NOW</a>
										 </footer>
									</li>
									<!-- Buy Pricing Table #1 Ends -->
							  </ul>
						 </li>
						 <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							  <span id="image-new"><img src="{{ asset('site/images/new-banner.png') }}" style="max-height : 100px;"  /></span>
							  <ul class="pricing-wrapper">
									<!-- Buy Pricing Table #1 Starts -->
									<li data-type="buy" class="is-visible">
										 <header class="pricing-header">

											  <span class="feature-icon">
									<img id="strong-security" src="{{ asset('site/images/icons/orange/strong-security.png') }}" alt="strong security"/>
								</span>
											  <h2>Basic</h2>
											  <div class="price">
													<span class="value" style="font-size : 2.4em;">$500</span>
													<br /><br />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">15% Deposit Bonus</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Earn $1,150+</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">No Training</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Junior Level Broker</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">24/7 Customer Support</span>
											  </div>
										 </header>
										 <footer class="pricing-footer">
											  <a href="register5a6b.html?invest=true" class="btn btn-primary">INVEST NOW</a>
										 </footer>
									</li>
									<!-- Buy Pricing Table #1 Ends -->
							  </ul>
						 </li>
						 <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							  <ul class="pricing-wrapper">
									<!-- Buy Pricing Table #1 Starts -->
									<li data-type="buy" class="is-visible">
										 <header class="pricing-header">
											  <span class="feature-icon">
									<img id="strong-security" src="{{ asset('site/images/icons/orange/strong-security.png') }}" alt="strong security"/>
								</span>
											  <h2>Advance</h2>
											  <div class="price">
													<span class="value" style="font-size : 2.4em;">$1,000</span>
													<br /><br />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">20% Deposit Bonus</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Earn $2,250+</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Free Training</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Senior Level Broker</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">24/7 Customer Support</span>
											  </div>
										 </header>
										 <footer class="pricing-footer">
											  <a href="register5a6b.html?invest=true" class="btn btn-primary">INVEST NOW</a>
										 </footer>
									</li>
									<!-- Buy Pricing Table #1 Ends -->
							  </ul>
						 </li>
						 <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							  <ul class="pricing-wrapper">
									<!-- Buy Pricing Table #1 Starts -->
									<li data-type="buy" class="is-visible">
										 <header class="pricing-header">
											  <span class="feature-icon">
									<img id="strong-security" src="{{ asset('site/images/icons/orange/strong-security.png') }}" alt="strong security"/>
								</span>
											  <h2>Pro</h2>
											  <div class="price">
													<span class="value" style="font-size : 2.4em;">$5,000</span>
													<br /><br />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">25% Deposit Bonus</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Earn $11,500+</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Free Training</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Expert Broker</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">24/7 Customer Support</span>
											  </div>
										 </header>
										 <footer class="pricing-footer">
											  <a href="register5a6b.html?invest=true" class="btn btn-primary">INVEST NOW</a>
										 </footer>
									</li>
									<!-- Buy Pricing Table #1 Ends -->
							  </ul>
						 </li>
						 <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							  <ul class="pricing-wrapper">
									<!-- Buy Pricing Table #1 Starts -->
									<li data-type="buy" class="is-visible">
										 <header class="pricing-header">
											  <span class="feature-icon">
									<img id="strong-security" src="{{ asset('site/images/icons/orange/strong-security.png') }}" alt="strong security"/>
								</span>
											  <h2>Executive</h2>
											  <div class="price">
													<span class="value" style="font-size : 2.4em;">$10,000</span>
													<br /><br />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">30% Deposit Bonus</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Earn $22,500+</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Free Training</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">Expert Broker</span>
													<hr class="marg-10" />
													<span class="value" style="font-weight : normal; font-size: 0.95em;">24/7 Customer Support</span>
											  </div>
										 </header>
										 <footer class="pricing-footer">
											  <a href="register5a6b.html?invest=true" class="btn btn-primary">INVEST NOW</a>
										 </footer>
									</li>
									<!-- Buy Pricing Table #1 Ends -->
							  </ul>
						 </li>
					</ul>
			  </div>
		 </div>
	</div>
</section>
<!-- Pricing Ends -->
<!-- Bitcoin Calculator Section Starts -->
<section class="bitcoin-calculator-section">
	<div class="container">
		 <div class="row">
			  <!-- Section Heading Starts -->
			  <div class="col-md-12">
					<h2 class="title-head text-center"><span>Bitcoin</span> Calculator</h2>
					<p class="message text-center">Find out the current Bitcoin value with our easy-to-use converter</p>
			  </div>
			  <!-- Section Heading Ends -->
			  <!-- Bitcoin Calculator Form Starts -->
			  <div class="col-md-12 text-center">
					<form class="bitcoin-calculator" id="bitcoin-calculator">
						 <!-- Input #1 Starts -->
						 <input class="form-input" name="btc-calculator-value" value="1">
						 <!-- Input #1 Ends -->
						 <div class="form-info"><i class="fa fa-bitcoin"></i></div>
						 <div class="form-equal">=</div>
						 <!-- Input/Result Starts -->
						 <input class="form-input form-input-result" name="btc-calculator-result">
						 <!-- Input/Result Ends -->
						 <!-- Select Currency Starts -->
						 <div class="form-wrap">
							  <select id="currency-select" class="form-input select-currency select-primary" name="btc-calculator-currency" data-dropdown-class="select-primary-dropdown"></select>
						 </div>
						 <!-- Select Currency Ends -->
					</form>
					<p class="info"><i>* Data updated every 15 minutes</i></p>
			  </div>
			  <!-- Bitcoin Calculator Form Ends -->
		 </div>
	</div>
</section>



<!-- Bitcoin Calculator Section Ends -->
<!-- Team Section Starts -->
<section class="team">
	<div class="container">
		 <!-- Section Title Starts -->
		 <div class="row text-center">
			  <h2 class="title-head">our <span>experts</span></h2>
			  <div class="title-head-subtitle">
					<p> A talented team of Cryptocurrency experts</p>
			  </div>
		 </div>
		 <!-- Section Title Ends -->
		 <!-- Team Members Starts -->
		 <div class="row team-content team-members">
			  <!-- Team Member Starts -->
			  <div class="col-lg-12">
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						 <div class="team-member">
							  <!-- Team Member Picture Starts -->
							  <img src="{{ asset('site/images/ceo.jpeg') }}" class="img-responsive" alt="team member">
							  <!-- Team Member Picture Ends -->
							  <!-- Team Member Details Starts -->
							  <div class="team-member-caption social-icons">
									<h4>Bae Gary</h4>
									<p>Ceo Founder</p>
									<ul class="list list-inline social">
										 <li>
											  <a href="#" class="fa fa-facebook"></a>
										 </li>
										 <li>
											  <a href="#" class="fa fa-twitter"></a>
										 </li>
										 <li>
											  <a href="#" class="fa fa-google-plus"></a>
										 </li>
									</ul>
							  </div>
							  <!-- Team Member Details Ends -->
						 </div>
					</div>
					<!-- Team Member Ends -->
					<!-- Team Member Starts -->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						 <div class="team-member">
							  <!-- Team Member Picture Starts -->
							  <img src="{{ asset('site/images/director.jpeg') }}" class="img-responsive" alt="team member">
							  <!-- Team Member Picture Ends -->
							  <!-- Team Member Details Starts -->
							  <div class="team-member-caption social-icons">
									<h4>Ivan Stephen</h4>
									<p>Director</p>

							  </div>
							  <!-- Team Member Details Ends -->
						 </div>
					</div>
					<!-- Team Member Ends -->
					<!-- Team Member Starts -->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						 <div class="team-member">
							  <!-- Team Member Picture Starts -->
							  <img src="{{ asset('site/images/markt.jpeg') }}" class="img-responsive" alt="team member">
							  <!-- Team Member Picture Ends -->
							  <!-- Team Member Details Starts -->
							  <div class="team-member-caption social-icons">
									<h4>Emily Shirley</h4>
									<p>Marketer</p>

							  </div>
							  <!-- Team Member Details Ends -->
						 </div>
					</div>
					<!-- Team Member Ends -->
					<!-- Team Member Starts -->
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						 <div class="team-member">
							  <!-- Team Member Picture Starts -->
							  <img src="{{ asset('site/images/invest.png') }}" class="img-responsive" alt="team member" style="max-height : 260px">
							  <!-- Team Member Picture Ends -->
							  <!-- Team Member Details Starts -->
							  <div class="team-member-caption social-icons">
									<h4>Francisca mccaleb</h4>
									<p>Investment Analyst</p>

							  </div>
							  <!-- Team Member Details Ends -->
						 </div>
					</div>
					<!-- Team Member Ends -->
			  </div>
		 </div>
</section>
<!-- Team Section Ends -->
<!-- Quote and Chart Section Starts -->
<section class="image-block2">
	<div class="container-fluid">
		 <div class="row">
			  <!-- Quote Starts -->
			  <div class="col-md-4 img-block-quote bg-image-2">
					<blockquote>
						 <p>Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money with anyone else, anywhere on the planet, conveniently and without restriction.
							  It’s the dawn of a better, more free world.</p>
						 <footer><img src="{{ asset('site/images/ceo.jpeg') }}" alt="ceo" /> <span>Bae Gary</span> - CEO</footer>
					</blockquote>
			  </div>
			  <!-- Quote Ends -->
			  <!-- Chart Starts -->
			  <div class="col-md-8 bg-grey-chart">
					<div class="chart-widget dark-chart chart-1">
						 <div>
							  <div class="btcwdgt-chart" data-bw-theme="dark"></div>
						 </div>
					</div>
					<div class="chart-widget light-chart chart-2">
						 <div>
							  <div class="btcwdgt-chart" bw-theme="light"></div>
						 </div>
					</div>
			  </div>
			  <!-- Chart Ends -->
		 </div>
	</div>
</section>
<!-- Quote and Chart Section Ends -->

<!-- Call To Action Section Starts -->
<section class="call-action-all">
	<div class="call-action-all-overlay">
		 <div class="container">
			  <div class="row">
					<div class="col-xs-12">
						 <!-- Call To Action Text Starts -->
						 <div class="action-text">
							  <h2>Get Started Today With Bitcoin</h2>
							  <p class="lead">Open account for free and start trading Bitcoins!</p>
						 </div>
						 <!-- Call To Action Text Ends -->
						 <!-- Call To Action Button Starts -->
						 <p class="action-btn"><a class="btn btn-primary" href="register">Register Now</a></p>
						 <!-- Call To Action Button Ends -->
					</div>
			  </div>
		 </div>
	</div>
</section>
<!-- Call To Action Section Ends -->
<script>
	$(window).load(function() {
		 $('#lang').click();
	});

	function saveLang() {
		 $.ajax({
			  url: "ajax/main.php",
			  data: {
					lang: true
			  }
		 });

		 $('#squarespaceModal').modal('hide');
	}
</script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
	.center {
		 margin-top: 50px;
	}
	
	.modal-header {
		 padding-bottom: 5px;
	}
	
	.modal-footer {
		 padding: 0;
	}
	
	.modal-footer .btn-group button {
		 height: 40px;
		 border-top-left-radius: 0;
		 border-top-right-radius: 0;
		 border: none;
		 border-right: 1px solid #ddd;
	}
	
	.modal-footer .btn-group:last-child>button {
		 border-right: 0;
	}
</style>

<div class="center"><button data-toggle="modal" data-target="#squarespaceModal" id="lang" style="display : none;" class="btn btn-primary center-block">Click Me</button></div>


<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		 <div class="modal-content">
			  <div class="modal-header">
					<!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
-->
					<h3 class="modal-title" id="lineModalLabel">Please select your preferred language:</h3>
			  </div>
			  <div class="modal-body">

					<!-- content goes here -->
					<label>Default Language : English</label>

					<div id="google_translate_element">

					</div>
			  </div>
			  <div class="modal-footer">
					<div class="btn-group btn-group-justified" role="group" aria-label="group button">
						 <div class="btn-group" role="group">
							  <button type="button" onclick="saveLang()" class="btn btn-primary btn-block">Continue</button>
						 </div>
					</div>
			  </div>
		 </div>
	</div>
</div>

<div class="container">
	<!-- line modal -->
	<div class="modal fade" id="payment_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
		 <div class="modal-dialog">
			  <div class="modal-content">
					<div class="modal-header">
						 <span>Payment Details <i class="fa fa-money"></i></span> <img src="{{ asset('site/images/mastercard.html') }}" style="max-width : 100px" class="pull-right" />
					</div>
					<div class="modal-body">
					</div>
			  </div>
		 </div>
	</div>
</div>
<!-- Footer Starts -->
<footer class="footer">
	<!-- Footer Top Area Starts -->
	<div class="top-footer">
		 <div class="container">
			  <div class="row">
					<!-- Footer Widget Starts -->
					<div class="col-sm-4 col-md-2">
						 <h4>Quick Links</h4>
						 <div class="menu">
							  <ul>
									<li><a href="home.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="contact.html">Contact</a></li>
							  </ul>
						 </div>
					</div>
					<!-- Footer Widget Ends -->
					<!-- Footer Widget Starts -->
					<div class="col-sm-4 col-md-2">
						 <h4>Help & Support</h4>
						 <div class="menu">
							  <ul>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="terms-of-services.html">Terms of Services</a></li>
									<li><a href="register">Register</a></li>
									<li><a href="login/">Login</a></li>
							  </ul>
						 </div>
					</div>
					<!-- Footer Widget Ends -->
					<!-- Footer Widget Starts -->
					<div class="col-sm-4 col-md-3">
						 <h4>Contact Us </h4>
						 <div class="contacts">
							  <div>
									<span style="font-size: 0.85em;">support@easterninvestmentfx.com</span>
							  </div>
							  <div>
									<span>+1 703-682-8234</span>
							  </div>
							  <div>
									<span>Texas, TX 40055, United States.</span>
							  </div>
							  <div>
									<span>mon-sat 08am &#x21FE; 05pm</span>
							  </div>
						 </div>
						 <!-- Social Media Profiles Starts -->
						 <div class="social-footer">
							  <ul>
									<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							  </ul>
						 </div>
						 <!-- Social Media Profiles Ends -->
					</div>
					<!-- Footer Widget Ends -->
					<!-- Footer Widget Starts -->
					<div class="col-sm-12 col-md-5">
						 <h4><img src="{{ asset('site/images/logo.png') }}" height="20px;" alt="Bitcoin logo"> easternInvestmentFX</h4>
						 <!-- Facts Starts -->
						 <div class="facts-footer">
							  Eastern Invesment FX holds a Financial Services Licence which authorizes us to issue and act as a responsible entity to registered managed investment schemes and to act as trustee to wholesale unregistered investment schemes worldwide. kripto Büyüme is
							  a member of the National Futures Association.
							  <span class="feature-icon">
						
							<img src="{{ asset('site/images/certificate.jpeg') }}" alt="Snow" style="width:100%;max-width:300px">
							<!-- The Modal -->
<div id="myModal" class="modal">

<!-- The Close Button -->
<span class="close">&times;</span>

							  <!-- Modal Content (The Image) -->
							  <img class="modal-content" id="img01">

							  <!-- Modal Caption (Image Text) -->
							  <div id="caption"></div>
						 </div>
						 </span>
					</div>
					<!-- Facts Ends -->
					<hr>
					<!-- Supported Payment Cards Logo Starts -->
					<div class="payment-logos">
						 <h4 class="payment-title">supported payment methods</h4>
						 <img src="{{ asset('site/images/icons/orange/add-bitcoins.png') }}" alt="american-express">
						 <img src="{{ asset('site/images/icons/payment/american-express.png') }}" alt="american-express">
						 <img src="{{ asset('site/images/icons/payment/mastercard.png') }}" alt="mastercard">
						 <img src="{{ asset('site/images/icons/payment/visa.png') }}" alt="visa">
						 <img src="{{ asset('site/images/icons/payment/paypal.png') }}" alt="paypal">
						 <img class="last" src="{{ asset('site/images/icons/payment/maestro.png') }}" alt="maestro">
					</div>
					<!-- Supported Payment Cards Logo Ends -->
			  </div>
			  <!-- Footer Widget Ends -->
		 </div>
	</div>
	</div>
	<!-- Footer Top Area Ends -->
	<!-- Footer Bottom Area Starts -->
	<div class="bottom-footer">
		 <div class="container">
			  <div class="row">
					<div class="col-xs-12">
						 <!-- Copyright Text Starts -->
						 <p class="text-center">Copyright © 2021 kripto Büyüme | All Rights Reserved</p>
						 <!-- Copyright Text Ends -->
					</div>
			  </div>
		 </div>
	</div>
	<!-- Footer Bottom Area Ends -->
</footer>
<!-- Footer Ends -->
<!-- Back To Top Starts  -->
<a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
<!-- Back To Top Ends  -->
@endsection