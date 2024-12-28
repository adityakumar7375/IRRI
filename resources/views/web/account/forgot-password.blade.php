
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
	
<link rel="stylesheet" href="{{asset('public/web')}}/css/custom.css" type="text/css" />
	
	
</head>

<body>

    <section class="login-wrapper">

		<div class="login-logo"><div class="logo"><span class="irri-toplogo"><a href="index"><img src="{{asset('public/web')}}/images/IRRI-logo.png" alt=""></a></span> <span class="cgiar-toplogo"><img src="{{asset('public/web')}}/images/cgiar.png" alt=""></span> </div></div>
		
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
			 </div><!--col-lg-6-->
			 
			 <div class="col-lg-6">

                <div class="login-form-col">
                  @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                    <div class="login-headcontet"> 
                     <h1>Forgot password.</h1>
                     <p>Your password was emailed to you when the account was created.</p>	
                    </div>
                       
                    <form class="login-form" action="{{route('forget-password.email')}}"  name="cform" method="post">@csrf

                    
                        <div class="form-group">
                        <label>Email address</label>	
                        <input type="email"  value="{{ old('email') }}"  class="form-control" name="email" id="userid" required="">
                        <div class="login-user-ico"><i class="las la-user"></i></div>
                          @if ($errors->has('email'))
                              <div class="form-validate-err">{{ $errors->first('email') }}</div>
                          @endif	
                        </div>
        
                
                        <div class="form-group">
                        <button type="submit" class="common-btn login-btn">Submit</button>
                        </div>
                            
                    </form>   
                       
                       
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
