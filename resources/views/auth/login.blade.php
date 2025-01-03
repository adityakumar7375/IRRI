@extends('layout.layout')
@section('content')
<div class="row m-0">
   <div class="col-12 p-0">
      <div class="login-card login-dark">
         <div>
           
			<!-- Success Message -->
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
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

            <div class="login-main">
                <div>
               <a class="logo" href="index">
               <img class="img-fluid for-dark" src="{{asset('public/web/images/IRRI-logo.png')}}" style="height:50px" alt="looginpage">
               <img class="img-fluid for-light" src="{{asset('public/web/images/IRRI-logo.png')}}" style="height:50px" alt="looginpage">
            </a>
            </div>
               <form class="theme-form" method="POST" action="{{ route('login') }}" id="loginForm">
                  @csrf
                  <h4>Sign in to account </h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                     <label class="col-form-label">Email Address</label>
                     <input class="form-control" type="email"  name="email" value="{{ old('email') }}"  required="" id="email" placeholder="Test@gmail.com"> 
                  </div>
                  <div class="form-group">
                     <label class="col-form-label">Password </label>
                     <div class="form-input position-relative">
                        <input class="form-control" type="password" name="password" required="" id="password" placeholder="*********">
                     </div>
                  </div>
                  <div class="form-group mb-0">
                     <div class="checkbox p-0">
                        <input id="checkbox1" type="checkbox">
                        <label class="text-muted" for="checkbox1">Remember password</label>
                     </div>
                     <a class="link" href="forget-password.html">Forgot password?</a>
                     <div class="text-end mt-3">
                        <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                     </div>
                  </div>
                  <!-- <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                     <div class="social mt-4">
                     	<div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                     </div> -->
                  <!-- <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p> -->
               </form>
              
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
