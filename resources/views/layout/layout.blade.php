<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Riho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
      <meta name="keywords" content="admin template, Riho admin template, dashboard template, flat admin template, responsive admin template, web app">
      <meta name="author" content="pixelstrap">
      <link rel="icon" href="{{asset('public/admin')}}/assets/images/favicon.png" type="image/x-icon">
      <link rel="shortcut icon" href="{{asset('public/admin')}}/assets/images/favicon.png" type="image/x-icon">
      <title> Admin-Login</title>
      <!-- Google font-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/font-awesome.css">
      <!-- ico-font-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/icofont.css">
      <!-- Themify icon-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/themify.css">
      <!-- Flag icon-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/flag-icon.css">
      <!-- Feather icon-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/feather-icon.css">
      <!-- Plugins css start-->
      <!-- Bootstrap css-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/bootstrap.css">
      <!-- App css-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/style.css">
      <link id="color" rel="stylesheet" href="{{asset('public/admin')}}/assets/css/color-1.css" media="screen">
      <!-- Responsive css-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/responsive.css">
	  <style>
		.loader-wrapper-1 {
			height: 100%;
			width: 100%;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
				-ms-flex-align: center;
					align-items: center;
			-webkit-box-pack: center;
				-ms-flex-pack: center;
					justify-content: center;
			position: fixed;
			background-color: #fff;
			z-index: 11;
			top: 0;
		}
		.loader-wrapper-1 .loader4 {
			position: relative;
			color: var(--theme-deafult);
			font-size: 50px;
			text-indent: -9999em;
			width: 1em;
			height: 1em;
			border-radius: 50%;
			-webkit-transform: translateZ(0);
					transform: translateZ(0);
			-webkit-animation: loader4 1.7s infinite ease, loader4Round 1.7s infinite ease;
					animation: loader4 1.7s infinite ease, loader4Round 1.7s infinite ease;
			overflow: hidden;
		}
		.parsley-required{
			color:red;
		}	
		.login-card .login-main {	
			border: 1px dashed;
		}

	  </style>
   </head>
   <body>
		<div class="loader-wrapper-1" id="wait" style="display:none">
			<div class="loader">
				<div class="loader4"></div>
			</div>
		</div>
      <!-- login page start-->
      <div class="container-fluid p-0">
         @yield('content')
         <!-- latest jquery-->
         <script src="{{asset('public/admin')}}/assets/js/jquery.min.js"></script>
         <!-- Bootstrap js-->
         <script src="{{asset('public/admin')}}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
         <!-- feather icon js-->
         <script src="{{asset('public/admin')}}/assets/js/icons/feather-icon/feather.min.js"></script>
         <script src="{{asset('public/admin')}}/assets/js/icons/feather-icon/feather-icon.js"></script>
         <!-- scrollbar js-->
         <!-- Sidebar jquery-->
         <script src="{{asset('public/admin')}}/assets/js/config.js"></script>
         <!-- Plugins JS start-->
         <!-- Theme js-->
         <script src="{{asset('public/admin')}}/assets/js/script.js"></script>
		 <script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
		 <script>
			$(document).ready(function() {
				$('#loginForm').parsley();
			});
			$('#loginForm').submit(function (e) {

				e.preventDefault();
        		if ($(this).parsley().isValid()) {
					$('#wait').show();
					this.submit();
				}else{
					return false;
				}

			});
		 </script>
      </div>
   </body>
</html>
