@extends('layouts.app')

@section('content')
        <script>
            $(window).load(function() {
                $('.rxx').removeClass('active');
                $('.rx-services').addClass('active');
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
                                <h2 class="title-head">our <span>services</span></h2>
                                <!-- Title Ends -->
                                <hr>
                                <!-- Breadcrumb Starts -->
                                <ul class="breadcrumb">
                                    <li><a href="{{ route('home') }}"> home</a></li>
                                    <li>services</li>
                                </ul>
                                <!-- Breadcrumb Ends -->
                            </div>
                        </div>
                        <!-- Section Title Ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area Ends -->
        <!-- Section Services Starts -->
        <section class="services">
            <div class="container">
                <div class="row">
                    <!-- Service Box Starts -->
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="download-bitcoin" src="{{ asset('site/images/icons/orange/download-bitcoin.png') }}" alt="download bitcoin">
                            <div class="service-box-content">
                                <h3>Protection & Security</h3>
                                <p>Stop loss and take profit orders will help secure your investment. The system will automatically execute trades gains.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service Box Ends -->
                    <!-- Service Box Starts -->
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="add-bitcoins" src="{{ asset('site/images/icons/orange/add-bitcoins.png') }}" alt="add bitcoins">
                            <div class="service-box-content">
                                <h3>Licensed Exchange </h3>
                                <p>Our customers perform transactions not only in cryptocurrency, but major world currencies supported by the system.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service Box Ends -->
                    <!-- Service Box Starts -->
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="buy-sell-bitcoins" src="{{ asset('site/images/icons/orange/buy-sell-bitcoins.png') }}" alt="buy and sell bitcoins">
                            <div class="service-box-content">
                                <h3>Recurring Buys</h3>
                                <p>Invest in digital currency slowly over time by scheduling buys weekly or monthly, allows a trader to profit from a market move.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service Box Ends -->
                    <!-- Service Box Starts -->
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="strong-security" src="{{ asset('site/images/icons/orange/strong-security.png') }}" alt="strong security" />
                            <div class="service-box-content">
                                <h3>Unlimited Free Transfers</h3>
                                <p>Send any currency to friends, family members or business associates many times as you want, 24 hours a day free.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service Box Ends -->
                    <div class="clearfix"></div>
                    <!-- Service Box Starts -->
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="world-coverage" src="{{ asset('site/images/icons/orange/world-coverage.png') }}" alt="world coverage" />
                            <div class="service-box-content">
                                <h3>Multi Currency Accounts</h3>
                                <p>Support major currencies: USD, EUR, GBP & various Cryptocurrencies. Funds exchanged between currencies rate.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service Box Ends -->
                    <!-- Service Box Starts -->
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="payment-options" src="{{ asset('site/images/icons/orange/payment-options.png') }}" alt="payment options" />
                            <div class="service-box-content">
                                <h3>Blockchain Smart Contracts</h3>
                                <p>The first thing to know about blockchain smart contracts is they're not contracts, smart, nor necessarily on a blockchain.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service Box Ends -->

                </div>
            </div>
        </section>
        <!-- Section Services Ends -->
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
      	
			<!-- Footer Starts -->
			@include('layouts.footer')
        	<!-- Footer Ends -->
        
		  <!-- Back To Top Starts  -->
        <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
        <!-- Back To Top Ends  -->
@endsection