<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Muhurto - Log In</title>
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



		<!--

				<header>
					<nav class="navbar navbar-fixed-top">
						<div class="main-menu-cover">
							<div class="container-fluid">

								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								   <i class="fa fa-bars"></i>
								  </button>
								  <div class="logo-cover">
									<a class="" href="#"><img src="{{ asset('/') }}front-end/img/logo.png" alt=""/></a>
								  </div>


								</div>


								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav navbar-right main-menu">
									<li><a href="#">Home</a></li>
									<li><a href="#">Service</a></li>
									<li><a href="#">Terms</a></li>
									<li><a href="#"><i class="fa fa-edit"></i>Narayangonj</a></li>
									<li><a href="#" class="btn-login">Login<i class="fa fa-user"></i></a></li>
								  </ul>
								</div>
							</div>
						</div>
					</nav>
				</header>
			-->








		<section class="log-reg-body">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="logo-cover">
							<a href="index.html"><img src="{{ asset('/') }}front-end/img/logo2.png" alt="logo" class="img-responsive"/></a>
						</div>

						<div class="log-reg-wrapper">
							<h3>Log In</h3>
                            <p>Log in to your account to discover more</p>


                            <form method="POST" action="{{ route('login') }}">
                                @csrf

								<div class="form-group ">
									<input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Username or email address" required autofocus />
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                   @endif
                                </div>
								<div class="form-group">
                                    <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required/>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>

                            </form>




							<a href="registration.html" class="reg-link">Create A New Account</a>
						</div>
					</div>
				</div>
			</div>
		</section>





























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
		<script type="text/javascript" src="js/mapInitialize.js"></script>
		<script src="{{ asset('/') }}front-end/js/plugins.js"></script>
    </body>
</html>

