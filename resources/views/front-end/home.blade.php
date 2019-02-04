<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Currency Converter - Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/') }}front-end/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}front-end/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}front-end/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ asset('/') }}front-end/css/owl.theme.css">
        <link rel="stylesheet" href="{{ asset('/') }}front-end/css/owl.transitions.css">
		<link rel="stylesheet" href="{{ asset('/') }}front-end/css/animate.css"/>
        <link rel="stylesheet" href="{{ asset('/') }}front-end/css/style.css">
    </head>

    <body>



	<!--header start-->
	<header>
		<nav class="navbar navbar-fixed-top">
			<div class="main-menu-cover">
				<div class="container-fluid">
					<div class="row">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						   <i class="fa fa-bars"></i>
						  </button>
						  <div class="logo-cover">
							<a class="" href="#"><img src="{{ asset('/') }}front-end/img/logo2.png" alt=""/></a>
						  </div>
						</div>



						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav navbar-right main-menu">
							<li><a href="#">BUY SELL</a></li>
							<li><a href="#">TESTIMONIALS</a></li>
							<li><a href="#">PAYMENT PROOF</a></li>
							<li><a href="#">CONTACT</a></li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  <i class="fa fa-flag"></i>English
								</a>
								<div class="dropdown-menu notification" aria-labelledby="navbarDropdown">
									<ul>
										<li><a class="dropdown-item" href="#">Bengali</a></li>
										<li><a class="dropdown-item" href="#">Hindi</a></li>
										<li><a class="dropdown-item" href="#">Rassian</a></li>
										<li><a class="dropdown-item" href="#">Chinese</a></li>
										<li><a class="dropdown-item" href="#">Telegu</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  <i class="fa fa-user"></i>Admin
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<ul>
										<li><a class="dropdown-item" href="#">Account Setting</a></li>
										<li><a class="dropdown-item" href="#">Profile</a></li>
										<li><a class="dropdown-item" href="#">Terms & Conditions</a></li>
										<li><a class="dropdown-item" href="#">Logout</a></li>
									</ul>
								</div>
							</li>
							<li><a href="login.html" class="btn-login">LOGIN</a></li>
						  </ul>
						</div><!-- /.navbar-collapse -->
					</div>
					<!-- Brand and toggle get grouped for better mobile display -->
					<!-- Collect the nav links, forms, and other content for toggling -->
				</div><!-- /.container-->
			</div>
		</nav>
	</header>
	<!--header close-->




	<section class="content-body">
		<div class="container">
			<div class="row">
			<!-- left side -->
				<div class="col-md-9">
					<section class="send-receive">
						<div class="row">
						<h3>Send & Receive</h3>
							<form action="" method="">
								<div class="col-md-6">
										<div class="input-cover">
											<p>Send Your Currency</p>
											<select>
												<option>Bitcoin USD</option>
												<option>Bkash AGENT</option>
												<option>Neteller USD</option>
												<option>Litecoin USD</option>
												<option>Paypal Agent</option>
												<option>Webmoney. USD</option>
												<option>Perfect Money</option>
												<option>Payeer USD</option>
											</select>
										</div>

								</div>
								<div class="col-md-6">
									<div class="input-cover">
											<p>Receive Your Currency</p>
											<select>
												<option>Bitcoin USD</option>
												<option>Bkash AGENT</option>
												<option>Neteller USD</option>
												<option>Litecoin USD</option>
												<option>Paypal Agent</option>
												<option>Webmoney. USD</option>
												<option>Perfect Money</option>
												<option>Payeer USD</option>
											</select>
										</div>
								</div>
								<div class="col-md-6">
									<div class="input-cover">
										<p>Send Amount</p>
										<input type="text" name="send-amount" placeholder="Type Amount Here..."/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-cover">
										<p>Receive Amount</p>
										<input type="text" name="receive-amount" value="444" disabled/>
									</div>
								</div>
							</form>
						</div>
					</section>


					<section class="client-say">
						<div class="headtag-cover">
							<h3>Skrill minimum Buy or Sale $10</h3>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="right-client-comment-wrapper" id="client-carousel">
								<div class="single-comment-bucket-loop">
									<div class="row comment-cover">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="client-say-cover">
												<div class="img-cover">
													<img src="{{ asset('/') }}front-end/img/cm1.jpg" class="img-responsive" alt=""/>
												</div>
												<div class="client-name-cover">
													<h3>Prakib201</h3>
												</div>
												<p>I am so pleased to have the payment within so much short time.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="single-comment-bucket-loop">
									<div class="row comment-cover">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="client-say-cover">
												<div class="img-cover">
													<img src="{{ asset('/') }}front-end/img/cm2.jpg" class="img-responsive" alt=""/>
												</div>
												<div class="client-name-cover">
													<h3>Yasin01</h3>
												</div>
												<p>I am so pleased to have the payment within so much short time.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="single-comment-bucket-loop">
									<div class="row comment-cover">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="client-say-cover">
												<div class="img-cover">
													<img src="{{ asset('/') }}front-end/img/cm3.jpg" class="img-responsive" alt=""/>
												</div>
												<div class="client-name-cover">
													<h3>Asha</h3>
												</div>
												<p>I am so pleased to have the payment within so much short time.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="single-comment-bucket-loop">
									<div class="row comment-cover">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="client-say-cover">
												<div class="img-cover">
													<img src="{{ asset('/') }}front-end/img/cm1.jpg" class="img-responsive" alt=""/>
												</div>
												<div class="client-name-cover">
													<h3>Prakib201</h3>
												</div>
												<p>I am so pleased to have the payment within so much short time.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="single-comment-bucket-loop">
									<div class="row comment-cover">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="client-say-cover">
												<div class="img-cover">
													<img src="{{ asset('/') }}front-end/img/cm2.jpg" class="img-responsive" alt=""/>
												</div>
												<div class="client-name-cover">
													<h3>Yasin01</h3>
												</div>
												<p>I am so pleased to have the payment within so much short time.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="single-comment-bucket-loop">
									<div class="row comment-cover">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="client-say-cover">
												<div class="img-cover">
													<img src="{{ asset('/') }}front-end/img/cm3.jpg" class="img-responsive" alt=""/>
												</div>
												<div class="client-name-cover">
													<h3>Asha</h3>
												</div>
												<p>I am so pleased to have the payment within so much short time.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>



					<div class="table-section">
						<div class="header">
							<h3>Pending Offer</h3>
							<div class="splash"></div>
						</div>
						<div class="table-wrapper">
							<table class="table">
								<thead>
									<th>USERNAME</th>
									<th>SENT</th>
									<th>RECEIVE</th>
									<th>AMOUNT</th>
									<th>STATUS</th>
								</thead>
								<tbody>
									<tr>
										<td>amimoinul</td>
										<td>BKASH AGENT</td>
										<td>SKRILL. USD</td>
										<td>9500 (100.00 USD)</td>
										<td><span class="processing">Processed</span></td>
									</tr>
									<tr>
										<td>amimoinul</td>
										<td>BKASH AGENT</td>
										<td>SKRILL. USD</td>
										<td>9500 (100.00 USD)</td>
										<td><span class="processing">Processed</span></td>
									</tr>
									<tr>
										<td>amimoinul</td>
										<td>BKASH AGENT</td>
										<td>SKRILL. USD</td>
										<td>9500 (100.00 USD)</td>
										<td><span class="processing">Processed</span></td>
									</tr>
									<tr>
										<td>amimoinul</td>
										<td>BKASH AGENT</td>
										<td>SKRILL. USD</td>
										<td>9500 (100.00 USD)</td>
										<td><span class="processing">Processed</span></td>
									</tr>
									<tr>
										<td>amimoinul</td>
										<td>BKASH AGENT</td>
										<td>SKRILL. USD</td>
										<td>9500 (100.00 USD)</td>
										<td><span class="processing">Processed</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>


					<div class="table-section">
						<div class="header">
							<h3>Completed Exchange</h3>
							<div class="splash"></div>
						</div>
						<div class="table-wrapper">
							<table class="table">
								<thead>
									<th>USERNAME</th>
									<th>SENT</th>
									<th>RECEIVE</th>
									<th>AMOUNT</th>
									<th>STATUS</th>
								</thead>
								<tbody>
									<tr>
										<td>amimoinul</td>
										<td>BKASH AGENT</td>
										<td>SKRILL. USD</td>
										<td>9500 (100.00 USD)</td>
										<td><span class="processed">Processed</span></td>
									</tr>
									<tr>
										<td>amimoinul</td>
										<td>BKASH AGENT</td>
										<td>SKRILL. USD</td>
										<td>9500 (100.00 USD)</td>
										<td><span class="denied">Processed</span></td>
									</tr>
									<tr>
										<td>amimoinul</td>
										<td>BKASH AGENT</td>
										<td>SKRILL. USD</td>
										<td>9500 (100.00 USD)</td>
										<td><span class="processed">Processed</span></td>
									</tr>
									<tr>
										<td>amimoinul</td>
										<td>BKASH AGENT</td>
										<td>SKRILL. USD</td>
										<td>9500 (100.00 USD)</td>
										<td><span class="processed">Processed</span></td>
									</tr>
									<tr>
										<td>amimoinul</td>
										<td>BKASH AGENT</td>
										<td>SKRILL. USD</td>
										<td>9500 (100.00 USD)</td>
										<td><span class="denied">Processed</span></td>
									</tr>
									<tr>
										<td>amimoinul</td>
										<td>BKASH AGENT</td>
										<td>SKRILL. USD</td>
										<td>9500 (100.00 USD)</td>
										<td><span class="denied">Processed</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>






				<!-- right side -->
				<div class="col-md-3">
					<div class="reserve">
						<div class="header">
							<h3>Our Reserve</h3>
						</div>
						<div class="single-reserve">
							<div class="row">
								<div class="col-md-4">
									<div class="img-cover">
										<img src="{{ asset('/') }}front-end/img/neteller.png"/>
									</div>
								</div>
								<div class="col-md-8">
									<div class="info-cover">
										<h4>NETELLER AGENT</h4>
										<p>324000</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single-reserve">
							<div class="row">
								<div class="col-md-4">
									<div class="img-cover">
										<img src="{{ asset('/') }}front-end/img/skrill.png"/>
									</div>
								</div>
								<div class="col-md-8">
									<div class="info-cover">
										<h4>SKRILL AGENT</h4>
										<p>324000</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single-reserve">
							<div class="row">
								<div class="col-md-4">
									<div class="img-cover">
										<img src="{{ asset('/') }}front-end/img/Payza.png"/>
									</div>
								</div>
								<div class="col-md-8">
									<div class="info-cover">
										<h4>PAYZA AGENT</h4>
										<p>324000</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single-reserve">
							<div class="row">
								<div class="col-md-4">
									<div class="img-cover">
										<img src="{{ asset('/') }}front-end/img/neteller.png"/>
									</div>
								</div>
								<div class="col-md-8">
									<div class="info-cover">
										<h4>NETELLER AGENT</h4>
										<p>324000</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single-reserve">
							<div class="row">
								<div class="col-md-4">
									<div class="img-cover">
										<img src="{{ asset('/') }}front-end/img/paypal.png"/>
									</div>
								</div>
								<div class="col-md-8">
									<div class="info-cover">
										<h4>PAYPAL AGENT</h4>
										<p>324000</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single-reserve">
							<div class="row">
								<div class="col-md-4">
									<div class="img-cover">
										<img src="{{ asset('/') }}front-end/img/bet.png"/>
									</div>
								</div>
								<div class="col-md-8">
									<div class="info-cover">
										<h4>BET AGENT</h4>
										<p>324000</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single-reserve">
							<div class="row">
								<div class="col-md-4">
									<div class="img-cover">
										<img src="{{ asset('/') }}front-end/img/paypal.png"/>
									</div>
								</div>
								<div class="col-md-8">
									<div class="info-cover">
										<h4>PAYPAL AGENT</h4>
										<p>324000</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single-reserve">
							<div class="row">
								<div class="col-md-4">
									<div class="img-cover">
										<img src="{{ asset('/') }}front-end/img/dbbl.png"/>
									</div>
								</div>
								<div class="col-md-8">
									<div class="info-cover">
										<h4>DBBL AGENT</h4>
										<p>324000</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single-reserve">
							<div class="row">
								<div class="col-md-4">
									<div class="img-cover">
										<img src="{{ asset('/') }}front-end/img/paypal.png"/>
									</div>
								</div>
								<div class="col-md-8">
									<div class="info-cover">
										<h4>PAYPAL AGENT</h4>
										<p>324000</p>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="buy-sale-rate">
						<div class="header">
							<h3>Todays Buy-Sale Rate</h3>
						</div>
						<div class="table-wrapper">
							<table class="table">
								<thead>
									<th>We Accept</th>
									<th>We Buy</th>
									<th>We Sale</th>
								</thead>
								<tbody>
									<tr>
										<td>BTC, LTC, ETH</td>
										<td>83 Tk</td>
										<td>90 Tk</td>
									</tr>
									<tr>
										<td>NETELLER</td>
										<td>83 Tk</td>
										<td>90 Tk</td>
									</tr>
									<tr>
										<td>ADCASH</td>
										<td>83 Tk</td>
										<td>90 Tk</td>
									</tr>
									<tr>
										<td>PAYEER</td>
										<td>83 Tk</td>
										<td>90 Tk</td>
									</tr>
									<tr>
										<td>WEBMONEY</td>
										<td>83 Tk</td>
										<td>90 Tk</td>
									</tr>
									<tr>
										<td>ADCASH</td>
										<td>83 Tk</td>
										<td>90 Tk</td>
									</tr>
									<tr>
										<td>PAYEER</td>
										<td>83 Tk</td>
										<td>90 Tk</td>
									</tr>
									<tr>
										<td>ADCASH</td>
										<td>83 Tk</td>
										<td>90 Tk</td>
									</tr>
									<tr>
										<td>PAYEER</td>
										<td>83 Tk</td>
										<td>90 Tk</td>
									</tr>
									<tr>
										<td>BTC, LTC, ETH</td>
										<td>83 Tk</td>
										<td>90 Tk</td>
									</tr>
									<tr>
										<td>NETELLER</td>
										<td>83 Tk</td>
										<td>90 Tk</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>


					<div class="latest-update">
						<div class="header">
							<h3>Latest Update</h3>
						</div>
						<div class="right-client-comment-wrapper" id="latest-update">
							<div class="single-comment-bucket-loop">
								<div class="row comment-cover">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="info-cover">
											<p>i have previewed your job description and i want to do this job.i am expert in html5.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="single-comment-bucket-loop">
								<div class="row comment-cover">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="info-cover">
											<p>i have previewed your job description and i want to do this job.i am expert in html5.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>




















		<!--------------company logos section start-------------->
		<!------------------------------------------------------->
		<!--------------company logos section start-------------->

		<section class="company-logos-section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="headline-cover">
								<h2>Buy Verify Account</h2>
								<div class="splash"></div>
								<p>It is a long established fact that a reader will be distracted by the readable</p>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="company-logos-wrapper" id="company-logo-cover-called">
								<div class="single-company-wrapper">
									<img src="{{ asset('/') }}front-end/img/paypal.png" class="img-responsive" alt=""/>
									<div class="info-cover">
										<div class="shadowed-btn-cover">
											<a href="#" class="loc-btn">BUY</a>
										</div>
										<h4>Paypal Account</h4>
										<p>1000 BDT<span class="pull-right"><i class="fa fa-heart"></i>250 Sales</span></p>
										<div class="address-link">
											<a href="#"><i class="fa fa-bitbucket"></i>2,050 In Stock</a>
										</div>
									</div>

								</div>
								<div class="single-company-wrapper">
									<img src="{{ asset('/') }}front-end/img/payza.png" class="img-responsive" alt=""/>
									<div class="info-cover">
										<div class="shadowed-btn-cover">
											<a href="#" class="loc-btn">BUY</a>
										</div>
										<h4>Payza Account</h4>
										<p>2000 BDT<span class="pull-right"><i class="fa fa-heart"></i>250 Sales</span></p>
										<div class="address-link">
											<a href="#"><i class="fa fa-bitbucket"></i>2,050 In Stock</a>
										</div>
									</div>
								</div>
								<div class="single-company-wrapper">
									<img src="{{ asset('/') }}front-end/img/skrill.png" class="img-responsive" alt=""/>
									<div class="info-cover">
										<div class="shadowed-btn-cover">
											<a href="#" class="loc-btn">BUY</a>
										</div>
										<h4>Skrill Account</h4>
										<p>2000 BDT<span class="pull-right"><i class="fa fa-heart"></i>250 Sales</span></p>
										<div class="address-link">
											<a href="#"><i class="fa fa-bitbucket"></i>2,050 In Stock</a>
										</div>
									</div>
								</div>
								<div class="single-company-wrapper">
									<img src="{{ asset('/') }}front-end/img/neteller.png" class="img-responsive" alt=""/>
									<div class="info-cover">
										<div class="shadowed-btn-cover">
											<a href="#" class="loc-btn">BUY</a>
										</div>
										<h4>Neteller Account</h4>
										<p>2000 BDT<span class="pull-right"><i class="fa fa-heart"></i>250 Sales</span></p>
										<div class="address-link">
											<a href="#"><i class="fa fa-bitbucket"></i>2,050 In Stock</a>
										</div>
									</div>
								</div>
								<div class="single-company-wrapper">
									<img src="{{ asset('/') }}front-end/img/bet.png" class="img-responsive" alt=""/>
									<div class="info-cover">
										<div class="shadowed-btn-cover">
											<a href="#" class="loc-btn">BUY</a>
										</div>
										<h4>Bet365 Account</h4>
										<p>1000 BDT<span class="pull-right"><i class="fa fa-heart"></i>250 Sales</span></p>
										<div class="address-link">
											<a href="#"><i class="fa fa-bitbucket"></i>2,050 In Stock</a>
										</div>
									</div>
								</div>
								<div class="single-company-wrapper">
									<img src="{{ asset('/') }}front-end/img/skrill.png" class="img-responsive" alt=""/>
									<div class="info-cover">
										<div class="shadowed-btn-cover">
											<a href="#" class="loc-btn">BUY</a>
										</div>
										<h4>Skrill Account</h4>
										<p>2000 BDT<span class="pull-right"><i class="fa fa-heart"></i>250 Sales</span></p>
										<div class="address-link">
											<a href="#"><i class="fa fa-bitbucket"></i>2,050 In Stock</a>
										</div>
									</div>
								</div>
								<div class="single-company-wrapper">
									<img src="{{ asset('/') }}front-end/img/neteller.png" class="img-responsive" alt=""/>
									<div class="info-cover">
										<div class="shadowed-btn-cover">
											<a href="#" class="loc-btn">BUY</a>
										</div>
										<h4>Neteller Account</h4>
										<p>2000 BDT<span class="pull-right"><i class="fa fa-heart"></i>250 Sales</span></p>
										<div class="address-link">
											<a href="#"><i class="fa fa-bitbucket"></i>2,050 In Stock</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

		</section>

		<!--------------company logos section close-------------->
		<!------------------------------------------------------->
		<!--------------company logos section close-------------->






		<!--------------footer section 1 start-------------->
		<!-------------------------------------------------->
		<!--------------footer section 1 start-------------->
		<section class="footer-section-1">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h4>Quick Links</h4>
						<ul class="quick-link">
							<li><a href="#">Services</a></li>
							<li><a href="#">Portfolios</a></li>
							<li><a href="#">Clients</a></li>
							<li><a href="#">Get a Quote</a></li>
						</ul>
						<h4>Terms & Support</h4>
						<ul class="quick-link">
							<li><a href="#">News</a></li>
							<li><a href="#">Updates & Releases</a></li>
							<li><a href="#">Events</a></li>
							<li><a href="#">Activities</a></li>
						</ul>
					</div>
					 <div class="col-md-3">
						<h4>Follow us on</h4>
						<ul class="quick-link">
							<li><a href="#">Website Development</a></li>
							<li><a href="#">Web Design</a></li>
							<li><a href="#">Apps development</a></li>
							<li><a href="#">Graphic design</a></li>
							<li><a href="#">Digital Marketing</a></li>
							<li><a href="#">UI & UX</a></li>
							<li><a href="#">Mobile Design</a></li>
							<li><a href="#">Video / Media</a></li>
							<li><a href="#">SEO Services</a></li>
							<li><a href="#">Corporate Identity</a></li>
							<li><a href="#">API</a></li>

						</ul>
					</div>
					<div class="col-md-3">
						<h4>Language</h4>
						<ul class="quick-link">
							<li><a href="#">Newsletter</a></li>
							<li><a href="#">Support Forum</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Live Chat</a></li>
						</ul>

						<h4>Widgets</h4>
						<ul class="quick-link">
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Copyright Notice</a></li>
							<li><a href="#">Google Analytics</a></li>
							<li><a href="#">Terms of Use</a></li>
						</ul>
					</div>
					 <div class="col-md-3">
						<h4>Privacy Policy</h4>
						<p>House No 00,Road 000, Block 0</p>
						<p>Banani, Dhaka</p>
						<p>Bangladesh</p>

						<h4>Newsletter</h4>
						<p>The mohoorto Newsletter is a monthly digest of the latest highlights from our products and programs across Web, Android and iOS. Subscribe to stay updated and get news from us directly in your inbox</p>
						<h4>Get Social</h4>
						<div class="social-link-cover">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-youtube-play"></i></a>
						</div>
					</div>
				</div>
			</div>
        </section>
        <!--------------footer section 1 close-------------->
		<!-------------------------------------------------->
		<!--------------footer section 1 close-------------->


		<!--------------footer section 2 start-------------->
		<!-------------------------------------------------->
		<!--------------footer section 2 start-------------->
		<section class="footer-section-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<span class="pull-left">Copyright & Copy; 2017-2019</span><span class="pull-right">Powered By currency-converter</span>
					</div>
				</div>
			</div>
		</section>
		<!--------------footer section 2 close-------------->
		<!-------------------------------------------------->
		<!--------------footer section 2 close-------------->



        <!--scripts-->
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<script src="{{ asset('/') }}front-end/js/particles.min.js"></script>
		<script src="{{ asset('/') }}front-end/js/app.js"></script>
		<script src="{{ asset('/') }}front-end/js/vendor/jquery-1.11.2.min.js"></script>
		<script src="{{ asset('/') }}front-end/js/jquery.counterup.min.js"></script>
		<script src="{{ asset('/') }}front-end/js/main.js"></script>
		<script src="{{ asset('/') }}front-end/js/plugins.js"></script>
        <script src="{{ asset('/') }}front-end/js/bootstrap.min.js"></script>
        <script src="{{ asset('/') }}front-end/js/owl.carousel.min.js"></script>
        <script src="{{ asset('/') }}front-end/js/isotope.pkgd.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="{{ asset('/') }}front-end/js/mapInitialize.js"></script>
		<script src="{{ asset('/') }}front-end/js/plugins.js"></script>
    </body>
</html>

