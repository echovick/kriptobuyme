@extends('layouts.app')

@section('content')
<script>
	$(window).load(function() {
			$('.rxx').removeClass('active');
			$('.rx-about').addClass('active');
	});
</script>
<!-- Banner Area Starts -->
<section class="banner-area">
	<div class="banner-overlay">
			<div class="banner-text text-center">
				<div class="container">
					<!-- Section Title Starts -->
					<div class="row text-center">
							<div class="col-xs-12">
								<!-- Title Starts -->
								<h2 class="title-head">About <span>Us</span></h2>
								<!-- Title Ends -->
								<hr>
								<!-- Breadcrumb Starts -->
								<ul class="breadcrumb">
									<li><a href="{{ route('home') }}"> home</a></li>
									<li>About</li>
								</ul>
								<!-- Breadcrumb Ends -->
							</div>
					</div>
					<!-- Section Title Ends -->
				</div>
			</div>
	</div>
</section>
<!-- Banner Area Starts -->
<!-- About Section Starts -->
<section class="about-page">
	<div class="container">
			<!-- Section Content Starts -->
			<div class="row about-content">
				<!-- Image Starts -->
				<div class="col-sm-12 col-md-5 col-lg-6 text-center">
					<img id="about-us" class="img-responsive img-about-us" src="{{ asset('site/images/about-us.png') }}" alt="about us">
				</div>
				<!-- Image Ends -->
				<!-- Content Starts -->
				<div class="col-sm-12 col-md-7 col-lg-6">
					<div class="feature-about">
							<h3 class="title-about">WE ARE kripto Büyüme</h3>
							<p>kripto Büyüme, is a profitable company in the crypto currency trading and mining industry incorporated by a group of professionals in banking, business law, trading and market analysis (stocks, bonds, futures, currencies and
								commodities). Members of our team share a deep experience honed over the years across different professional networks and industries. We have a stellar track record of accurate digital asset trend predictions. Our best
								is put forward to achieve a consistent increase in investment performance for our clients. We appreciate our clients’ loyalty and value/nurture the relationships on an individual level. Regardless of the statutes in your
								country, our professional managers will help you chose the investment packages that are best suited to your needs.</p>
					</div>
					<div class="feature-about">
							<h3 class="title-about risk-title"><i class="fa fa-warning"></i> What to know</h3>
							<p>kripto Büyüme operates in accordance with state laws and regulations and are fully transparent in our operations with clients and regulatory authorities. We are heavy on corporate social responsibility and philanthropic activities:
								we donate a certain percentage of our profit margins annually to the less privileged as well as support a number of charity organizations. Our goal is to provide our clients and affiliates with consistent and reliable alternative
								income that ultimately guarantees their financial security.</p>
					</div>
					<a class="btn btn-primary btn-services" href="{{ route('services') }}">Our services</a>
				</div>
				<!-- Content Ends -->

			</div>
			<!-- Section Content Ends -->
	</div>
	<!--/ Content row end -->
</section>
<!-- About Section Ends -->
<!-- Facts Section Starts -->
<section class="facts">
	<!-- Container Starts -->
	<div class="container">
			<!-- Fact Badges Starts -->
			<div class="row text-center facts-content">
				<div class="text-center heading-facts">
					<h2 style="font-size : 2em;">Take Your First Steps to Becoming a <span> Bitcoiner</span> Today!</h2>
					<br /><br />
					<p style="color : white;">
							Now you can start trading Bitcoin, Ethereum and many cryptocurrencies fast, easily and safely from where ever you are. With great margin trading leverage and short sell options available with quick deposit & withdrawal capability, you can start trading
							with us in seconds. Cryptocurrencies have become established investment commodities among major financial institutions, and have even been adopted by countries such as Australia and Japan.
					</p>
				</div>

				<!-- Fact Badge Item Ends -->
				<div class="col-xs-12 buttons">
					<a class="btn btn-primary btn-pricing" href="{{ route('home') }}#pricing">See Plans</a>
					<span class="or"> or </span>
					<a class="btn btn-primary btn-register" href="{{ route('register') }}">Register Now</a>
				</div>
			</div>
			<!-- Fact Badges Ends -->
	</div>
	<!-- Container Ends -->
</section>
<!-- facts Section Ends -->
<!-- About Section Starts -->
<section class="about-page">
	<div class="container">
			<!-- Section Content Starts -->
			<div class="row about-content">
				<!-- Image Starts -->
				<div class="col-sm-12 col-md-5 col-lg-6 text-center">
					<img id="about-us" class="img-responsive img-about-us" src="{{ asset('site/images/about-us.png') }}" alt="about us">
				</div>
				<!-- Image Ends -->
				<!-- Content Starts -->
				<div class="col-sm-12 col-md-7 col-lg-6">
					<div class="feature-about">
							<h3 class="title-about">Discover Thousands of Trading & Investment Opportunities. </h3>
							<p>Now you can start trading Bitcoin, Ethereum and many cryptocurrencies fast, easily and safely from where ever you are. With great margin trading leverage and short sell options available with quick deposit & withdrawal capability,
								you can start trading with us in seconds.</p>
					</div>
					<div class="feature-about">
							<p>Cryptocurrencies have become established investment commodities among major financial institutions, and have even been adopted by countries such as Australia and Japan. However, as with any investment there are risks linked
								to market movements!</p>
					</div>
					<a class="btn btn-primary btn-services" href="{{ route('services') }}">Our services</a>
				</div>
				<!-- Content Ends -->

			</div>
			<!-- Section Content Ends -->
	</div>
	<!--/ Content row end -->
</section>
<!-- About Section Ends -->
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
							<p class="action-btn"><a class="btn btn-primary" href="{{ route('register') }}">Register Now</a></p>
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

@include('layouts.footer')

<!-- Back To Top Starts  -->
<a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
<!-- Back To Top Ends  -->
@endsection