
<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{asset('public/web')}}/images/favicon.png">
	<title>International Rice Research Institute</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="{{asset('public/web')}}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('public/web')}}/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{asset('public/web')}}/css/custom.css" type="text/css" /> </head>

<body>
	<section class="login-wrapper">
		<div class="login-logo">
			<div class="logo"><span class="irri-toplogo"><a href="index"><img src="{{asset('public/web')}}/images/IRRI-logo.png" alt=""></a></span> <span class="cgiar-toplogo"><img src="{{asset('public/web')}}/images/cgiar.png" alt=""></span> </div>
		</div>
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="login-leftside">
						<div class="login-lefttop-txt">
							<h3>What is Lorem Ipsum, Why do we use it</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						<div class="loginscanqr-col"><img src="{{asset('public/web')}}/images/login-vector.png" alt=""></div>
					</div>
				</div>
				<!--col-lg-6-->
				<div class="col-lg-6">
					<div class="login-form-col">
						<div class="login-headcontet">
							<h1>Log in.</h1> 
						@if(session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif

						<!-- Error Message -->
						@if(session('error'))
							<div class="alert alert-danger">
								{{ session('error') }}
							</div>
						@endif

						<!-- Validation Errors -->
						@if ($errors->any())
							<div class="alert alert-danger">
								@foreach ($errors->all() as $error)
									{{ $error }}
								@endforeach
							</div>
						@endif
						</div>
						<form class="login-form" name="cform" method="post" method="post" action="{{asset('login')}}">@csrf
							<div class="form-group">
								<label>Email address</label>
								<input type="text" class="form-control" name="email" value="{{ old('email') }}" id="userid" required="">
								<div class="login-user-ico"><i class="fa-solid fa-user"></i></div>
								<div class="form-validate-err">Please enter your email id</div>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password" id="password" required="">
								<div class="login-user-ico"><i class="fa-solid fa-eye-slash"></i></div>
								<div class="form-validate-err">Please enter your correct password</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-6">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
											<label class="form-check-label" for="check1">Remember Me</label>
										</div>
									</div>
									<div class="col-6 forgot-txt"><a href="{{route('forgot-password')}}">Forgot password?</a></div>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="common-btn login-btn">Submit</button>
							</div>
							<div class="formor">or</div>
							<div class="google-account"><a href="https://www.irri.org/">Login with IRRI.org</a></div>
						</form>
						<div class="gosignup-link text-center">Don't have an account yet? <a href="{{route('sign-up')}}">Sign Up</a></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
	<script src="{{asset('public/web')}}/js/owl.carousel.js"></script>
	<script src="{{asset('public/web')}}/js/custom.js"></script>
</body>

</html>