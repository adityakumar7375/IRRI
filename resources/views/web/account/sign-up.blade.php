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
							<h1>Sign Up.</h1> 
						
						@if ($errors->any())
							<div class="alert alert-danger">
								
								@foreach ($errors->all() as $error)
									{{ $error }}
								@endforeach
							
							</div>
						@endif
						</div>


						<form class="login-form" name="cform" method="post" action="{{route('sign-up')}}" method="post">@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>First name</label>
										<input type="text" class="form-control" name="name" id="" value="{{ old('name') }}" required="">
										<div class="form-validate-err">Please enter your email id</div>
										 @error('name')
											<div class="form-validate-err">{{ $message }}</div>
										@enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Last name</label>
										<input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" id="" required="">
										<div class="form-validate-err">Please enter your email id</div>
										@error('last_name')
											<div class="form-validate-err">{{ $message }}</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Email ID</label>
								<input type="email" class="form-control" name="email" id="" value="{{ old('email') }}" required="">
								<div class="form-validate-err">Please enter your correct password</div>
								@error('email')
									<div class="form-validate-err">{{ $message }}</div>
								@enderror
							</div>
							<div class="row mb-2">
								<div class="col-md-6">
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" name="password" id="" required="">
										<div class="form-validate-err">Please enter your email id</div>
										@error('password')
											<div class="form-validate-err">{{ $message }}</div>
										@enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="password" class="form-control" name="password_confirmation" id="" required="">
										<div class="form-validate-err">Please enter your email id</div>
										@error('confirmed')
											<div class="form-validate-err">{{ $message }}</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="common-btn login-btn">Register Now</button>
							</div>
							<div class="formor">or</div>
							<div class="google-account"><a href="https://www.irri.org/">Login with IRRI.org</a></div>
						</form>
						<div class="gosignup-link text-center">Already a User? <a href="login">Log In</a></div>
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