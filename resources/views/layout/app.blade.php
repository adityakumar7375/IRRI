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
	<title>Admin -Panal</title>
	<!-- Google font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/font-awesome.css"> -->
	<!-- ico-font-->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/icofont.css"> -->
	<!-- Themify icon-->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/themify.css"> -->
	<!-- Flag icon-->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/flag-icon.css"> -->
	<!-- Feather icon-->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/feather-icon.css"> -->
	<!-- Plugins css start-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/slick.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/scrollbar.css">
	 <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/animate.css">
	<!-- Range slider css-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/rangeslider/rSlider.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/animate.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/prism.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/fullcalender.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/photoswipe.css">
	<!-- Plugins css Ends-->
	<!-- Bootstrap css-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/bootstrap.css">
	<!-- App css-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/style.css">
	<link id="color" rel="stylesheet" href="{{asset('public/admin')}}/assets/css/color-1.css" media="screen">
	<!-- Responsive css-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/responsive.css"> 
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/dropzone.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/filepond.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/vendors/filepond-plugin-image-preview.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin')}}/assets/css/responsive.css"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.5/dist/bootstrap-table.min.css">

		<style>
			.img-thumbnail {
				padding: 0.25rem;
				background-color: var(--bs-body-bg);
				border: var(--bs-border-width) solid var(--bs-border-color);
				border-radius: var(--bs-border-radius);
				max-width: 100%;
				height: 200px;
				object-fit: cover;
			}
			*{
				font-family: "Poppins", serif;
  				font-style: normal;
			}
			.parsley-required {
					color: red;
				}
			.social-profile {
				text-align: center;
				background-image: url("{{asset('public/admin')}}/assets/images/dashboard-3/profile-bg.png");
				background-repeat: no-repeat;
				background-size: cover;
			}
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
				z-index: 9999;
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
			.page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper {
    position: fixed;
    top: 0;
    z-index: 9;
    height: 100%;
    line-height: inherit;
    /* background: #216438; */
    width: 265px;
    text-align: left;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    -webkit-box-shadow: 0 0 21px 0 rgba(89, 102, 122, 0.1);
    box-shadow: 0 0 21px 0 rgba(89, 102, 122, 0.1);
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}
 
  /* Add this to your app's CSS file */
.pagination-container {
    text-align: center;
    /* margin-top: 20px; */
}

.pagination {
    display: inline-flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
    text-align: center;
    /* padding: 10px; */
    margin: auto;
}

.pagination a,
.pagination span {
    padding: 10px 15px;
    margin: 0 5px;
    border: 1px solid #ddd;
    color: #007bff;
    text-decoration: none;
}

.pagination a:hover,
.pagination span:hover {
    background-color: #f1f1f1;
}

.pagination .active {
    /* background-color: #007bff; */
    color: white;
}

.pagination .disabled {
    color: #ccc;
    pointer-events: none;
}

</style>

</head>

<body>
	<!-- loader starts-->
	<div class="loader-wrapper">
		<div class="loader">
			<div class="loader4"></div>
		</div>
	</div>
	<div class="loader-wrapper-1 wait" id="wait" style="display:none">
		<div class="loader">
			<div class="loader4"></div>
		</div>
	</div>
	<!-- loader ends-->
	<!-- tap on top starts-->
	<div class="tap-top"><i data-feather="chevrons-up"></i></div>
	<!-- tap on tap ends-->
	<!-- page-wrapper Start-->
	<div class="page-wrapper compact-wrapper" id="pageWrapper">
		<!-- Page Header Start-->
		<div class="page-header">
			<div class="header-wrapper row m-0">
				<form class="form-inline search-full col" action="#" method="get">
					<div class="form-group w-100">
						<div class="Typeahead Typeahead--twitterUsers">
							<div class="u-posRelative">
								<input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Riho .." name="q" title="" autofocus>
								<div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading... </span></div><i class="close-search" data-feather="x"></i> </div>
							<div class="Typeahead-menu"> </div>
						</div>
					</div>
				</form>
				<div class="header-logo-wrapper col-auto p-0">
					<div class="logo-wrapper">
						<a href="{{route('dashboard')}}">
							<img class="img-fluid for-light" src="{{asset('public/web/images/IRRI-logo.png')}}" style="height:50px" alt="logo-light">
							<img class="img-fluid for-dark" src="{{asset('public/web/images/IRRI-logo.png')}}" style="height:50px" alt="logo-dark">
						</a>
					</div>
					<div class="toggle-sidebar"> <i class="fa fa-list" data-feather="align-center"></i></div>
				</div>
				<div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
					<div>
						<a class="toggle-sidebar" href="#"> <i class="iconly-Category icli"> </i></a>
						<div class="d-flex align-items-center gap-2 ">
							<h4 class="f-w-600">Welcome - {{Auth::user()->email}}</h4><img class="mt-0" src="{{asset('public/admin')}}/assets/images/hand.gif" alt="hand-gif"> </div>
					</div>
					<div class="welcome-content d-xl-block d-none"><span class="text-truncate col-12">Here’s what’s happening with your store today. </span></div>
				</div>
				<div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
					<ul class="nav-menus">
						
					
						
						<li>
							<div class="mode"><i class="moon" data-feather="moon"> </i></div>
						</li>
						
						<li class="profile-nav onhover-dropdown">
							<div class="media profile-media"><img class="b-r-10" src="{{asset('public/web/images/user.jpg')}}" alt="">
								<div class="media-body d-xxl-block d-none box-col-none">
									<div class="d-flex align-items-center gap-2"> <span>{{auth()->user()->name}} </span><i class="middle fa fa-angle-down"> </i></div>
									<p class="mb-0 font-roboto">{{auth()->user()->name}}</p>
								</div>
							</div>
							<ul class="profile-dropdown onhover-show-div">
								<li><a href="{{ route('profile') }}"><i class="fa fa-user"></i> <span> My Profile</span></a></li>
								<li> <a href="{{ route('profile') }}"> <i class="fa fa-cog"></i> <span> Settings</span></a></li>
								<li><a  onclick="LogOut()" ><i class="fa fa-sign-out"></i> Log Out</a></li>
								<!-- <li><a href="{{ route('profile') }}"><i data-feather="user"></i><span>My Profile</span></a></li>
								
								<li><a class="btn btn-pill btn-outline-primary btn-sm" href="return:false" onclick="LogOut()">Log Out</a></li> -->
							</ul>
						</li>
					</ul>
				</div>
				<script class="result-template" type="text/x-handlebars-template">
					<div class="ProfileCard u-cf">
						<div class="ProfileCard-avatar">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0">
								<path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
								<polygon points="12 15 17 21 7 21 12 15"></polygon>
							</svg>
						</div>
						<div class="ProfileCard-details">
							<div class="ProfileCard-realName"> </div>
						</div>
					</div>
				</script>
				<script class="empty-template" type="text/x-handlebars-template">
					<div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
				</script>
			</div>
		</div>
		<!-- Page Header Ends                              -->
		<!-- Page Body Start-->
		<div class="page-body-wrapper">
			<!-- Page Sidebar Start-->
			<div class="sidebar-wrapper" data-layout="stroke-svg">
				<div class="logo-wrapper">
					<a href="{{route('dashboard')}}"><img class="img-fluid" src="{{asset('public/web/images/IRRI-logo.png')}}" style="height:50px" alt=""></a>
					<div class="back-btn"><i class="fa fa-angle-left"> </i></div>
					<div class="toggle-sidebar"><i class="fa fa-list text-white" data-feather="grid"> </i></div>
				</div>
				<div class="logo-icon-wrapper">
					<a href="{{route('dashboard')}}"><img class="img-fluid" src="{{asset('public/web/images/IRRI-logo.png')}}" style="height:50px" alt=""></a>
				</div>
				<nav class="sidebar-main">
					<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
					<div id="sidebar-menu">
						<ul class="sidebar-links" id="simple-bar">
							<li class="back-btn">
								<a href="{{route('dashboard')}}"><img class="img-fluid" src="{{asset('public/web/images/IRRI-logo.png')}}" style="height:50px"alt=""></a>
								<div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
							</li>
							<li class="pin-title sidebar-main-title">
								<div>
									<h6>Pinned</h6> </div>
							</li>
							<li class="sidebar-main-title">
								<div>
									<h6 class="lan-1">General</h6> </div>
							</li>
							

							<li class="sidebar-list mb-3"><i class="fa fa-thumb-tack"></i>
								<a class="sidebar-link sidebar-title link-nav" href="{{route('dashboard')}}">
									<svg class="stroke-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#stroke-home"></use>
									</svg>
									<svg class="fill-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-home"></use>
									</svg><span>Dashboard</span></a>
							</li>



						
						
							<li class="sidebar-main-title">
								<div>
									<h6 class="lan-8">Applications</h6> </div>
							</li>
							<!--<li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
								<a class="sidebar-link sidebar-title" href="#">
									<svg class="stroke-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#stroke-project"></use>
									</svg>
									<svg class="fill-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-project"></use>
									</svg><span>Project           </span></a>
								<ul class="sidebar-submenu">
									<li><a href="projects.html">Project List</a></li>
									<li><a href="projectcreate.html">Create new</a></li>
								</ul>
							</li>-->							
							
							<li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
								<a class="sidebar-link sidebar-title link-nav" href="{{route('location')}}">
									<svg class="stroke-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#stroke-file"></use>
									</svg>
									<svg class="fill-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-file"></use>
									</svg><span>Locations</span>
								</a>
							</li>


							<li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
								<a class="sidebar-link sidebar-title link-nav" href="{{route('gallery.index')}}">
									<svg class="stroke-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#stroke-gallery"></use>
									</svg>
									<svg class="fill-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-gallery"></use>
									</svg><span>Gallery</span>
								</a>
							</li>


							<li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
								<a class="sidebar-link sidebar-title link-nav" href="{{route('user.list')}}">
									<svg class="stroke-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#stroke-user"></use>
									</svg>
									<svg class="fill-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-user"></use>e>
									</svg><span>User List</span>
								</a>
							</li>



							<li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
								<a class="sidebar-link sidebar-title link-nav" href="{{route('track.user')}}">
									<svg class="stroke-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#stroke-user"></use>
									</svg>
									<svg class="fill-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-user"></use>e>
									</svg><span>Track Users</span>
								</a>
							</li>




							<li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
								<a class="sidebar-link sidebar-title link-nav" href="{{route('history.list')}}">
									<svg class="stroke-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#stroke-user"></use>
									</svg>
									<svg class="fill-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-user"></use>e>
									</svg><span>History List</span>
								</a>
							</li>








							<li class="sidebar-list mb-3"><i class="fa fa-thumb-tack"></i>
								<a class="sidebar-link sidebar-title link-nav" href="{{route('upload-excle')}}">
									<svg class="stroke-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#stroke-board"></use>
									</svg>
									<svg class="fill-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-board"></use>
									</svg><span>Upload Data</span></a>
							</li>

							




							<li class="sidebar-main-title">
								<div>
									<h6 class="lan-0">Account </h6> 
								</div>
							</li>
							<li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
								<a class="sidebar-link sidebar-title link-nav" href="{{route('profile')}}">
									<svg class="stroke-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#stroke-user"></use>
									</svg>
									<svg class="fill-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-user"></use>
									</svg><span>Profile</span>
								</a>
							</li>
							

							<li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
								<a class="sidebar-link sidebar-title link-nav" href="return:false" onclick="LogOut()">
									<svg class="stroke-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#stroke-file"></use>
									</svg>
									<svg class="fill-icon">
										<use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-file"></use>
									</svg><span>Log Out</span>
								</a>
							</li>
							
							
						</ul>
						<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
					</div>
				</nav>
			</div>
			<!-- Page Sidebar Ends-->
			<div class="page-body">
				
				<!-- Container-fluid starts-->
				<div class="container-fluid">
                @yield('content')
				</div>
				<!-- Container-fluid Ends-->
			</div>
			<!-- footer start-->
			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 footer-copyright text-center">
							<p class="mb-0">Copyright 2024 © IRRI </p>
						</div>
					</div>
				</div>
			</footer>

			<div class="modal fade" id="LogOut" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
				aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content ">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Logout Account</h5>
							<button type="button" onclick="modalHide()" class="btn btn-sm btn-danger" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-center">
							<h4 class="text-danger mb-5">Are you sure to logout?</h4>
							<a href="return:false"> <button type="button" class="btn btn-info text-white"
									onclick="modalHide()">Close</button></a>
							<a href="{{route('logout')}}"><button type="button" class="btn btn-danger">Yes logout</button></a>
						</div>

					</div>
				</div>
			</div>






			@yield('model')




		</div>
	</div>
	<!-- latest jquery-->
	 
	<script src="{{asset('public/admin')}}/assets/js/jquery.min.js"></script>
	<!-- Bootstrap js-->
	<script src="{{asset('public/admin')}}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
	<!-- feather icon js-->
	<!-- <script src="{{asset('public/admin')}}/assets/js/icons/feather-icon/feather.min.js"></script>
	<script src="{{asset('public/admin')}}/assets/js/icons/feather-icon/feather-icon.js"></script> -->
	<!-- scrollbar js-->
	<script src="{{asset('public/admin')}}/assets/js/scrollbar/simplebar.js"></script>
	<script src="{{asset('public/admin')}}/assets/js/scrollbar/custom.js"></script>
	<!-- Sidebar jquery-->
	<!-- <script src="{{asset('public/admin')}}/assets/js/config.js"></script> -->
	<!-- Plugins JS start-->
	<script src="{{asset('public/admin')}}/assets/js/sidebar-menu.js"></script>
	<script src="{{asset('public/admin')}}/assets/js/sidebar-pin.js"></script>
	<script src="{{asset('public/admin')}}/assets/js/slick/slick.min.js"></script>
	<script src="{{asset('public/admin')}}/assets/js/slick/slick.js"></script>
	<script src="{{asset('public/admin')}}/assets/js/header-slick.js"></script>
	<!-- <script src="{{asset('public/admin')}}/assets/js/chart/apex-chart/apex-chart.js"></script> -->
	<!-- <script src="{{asset('public/admin')}}/assets/js/chart/apex-chart/stock-prices.js"></script> -->
	<!-- Range Slider js-->
	<!-- <script src="{{asset('public/admin')}}/assets/js/range-slider/rSlider.min.js"></script> -->
	<!-- <script src="{{asset('public/admin')}}/assets/js/rangeslider/rangeslider.js"></script> -->
	<script src="{{asset('public/admin')}}/assets/js/prism/prism.min.js"></script>
	<script src="{{asset('public/admin')}}/assets/js/clipboard/clipboard.min.js"></script>
	<script src="{{asset('public/admin')}}/assets/js/counter/jquery.waypoints.min.js"></script>
	<script src="{{asset('public/admin')}}/assets/js/counter/jquery.counterup.min.js"></script>
	<script src="{{asset('public/admin')}}/assets/js/counter/counter-custom.js"></script>
	<script src="{{asset('public/admin')}}/assets/js/custom-card/custom-card.js"></script>

	<script src="{{asset('public/admin')}}/assets/js/photoswipe/photoswipe.min.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/photoswipe/photoswipe.js"></script>
	<!-- calendar js-->
	<!-- <script src="{{asset('public/admin')}}/assets/js/calendar/fullcalender.js"></script> -->
	<!-- <script src="{{asset('public/admin')}}/assets/js/calendar/custom-calendar.js"></script> -->
	<!-- <script src="{{asset('public/admin')}}/assets/js/dashboard/dashboard_2.js"></script> -->
	<script src="{{asset('public/admin')}}/assets/js/animation/wow/wow.min.js"></script>
	<!-- Plugins JS Ends-->
 <!-- Plugins JS start-->
 	<script src="{{asset('public/admin')}}/assets/js/sidebar-menu.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/sidebar-pin.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/slick/slick.min.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/slick/slick.js"></script>

    <script src="{{asset('public/admin')}}/assets/js/modalpage/validation-modal.js"></script>
	<!-- Theme js-->
	
	<script src="{{asset('public/admin')}}/assets/js/dropzone/dropzone.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/dropzone/dropzone-script.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/filepond/filepond-plugin-image-preview.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/filepond/filepond-plugin-file-rename.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/filepond/filepond-plugin-image-transform.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/filepond/filepond.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/filepond/custom-filepond.js"></script>


	 
	
    <script src="{{asset('public/admin')}}/assets/js/height-equal.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/tooltip-init.js"></script>


	
	<script src="{{asset('public/admin')}}/assets/js/script.js"></script>
	 <script src="{{asset('public/admin')}}/assets/js/script1.js"></script>


	<script src="{{asset('public/admin')}}/extra/parsley.min.js"></script>
	<script src="{{asset('public/admin')}}/extra/iziToast.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.5/dist/bootstrap-table.min.js"></script>

  

	
	<script>
		 $(document).ready(function() {
			$('form').parsley();
		});
		

		function LogOut() {
			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: "btn btn-success",
					cancelButton: "btn btn-danger"
				},
				buttonsStyling: false
				});
				swalWithBootstrapButtons.fire({
				title: "Are you sure?",
				text: "You won't be able to revert this!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonText: "Yes, Logout!",
				cancelButtonText: "No, cancel!",
				reverseButtons: true
				}).then((result) => {
				if (result.isConfirmed) {
					location.href="{{route('logout')}}";
				} else if (
					/* Read more about handling dismissals below */
					result.dismiss === Swal.DismissReason.cancel
				) {
					swalWithBootstrapButtons.fire({
					title: "Cancelled",
					text: "Your imaginary file is safe :)",
					icon: "error"
					});
				}
			});
		}


	// form -data 

	
	$(".submitForm").on('submit', function(e) {
        e.preventDefault();
        var mdid=$(this).attr('data-custom');
        var data = new FormData(this);
        if ($(this).parsley().isValid()) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(".wait").show();
            $.ajax({
               url: $(this).attr('action'),
               type: $(this).attr('method'),
               data: data,
               cache: false,
               contentType: false,
               processData: false,
               success: function(response) {
                  console.log(response);
                  $(".wait").hide();
                  $('.submitForm')[0].reset();
                  if (response.error == 200) {
                  $('#'+mdid).modal('hide');
                  Swal.fire({
                     title: "Success",
                     text: response.msg,
                     icon: "success"
                  });
                  }
                  if (response.error == 201) {
                     Swal.fire({
                        title: "Warning",
                        text: response.msg,
                        icon: "error"
                     });
                  }
                  if (response.url != '') {
                     window.setTimeout(function() {
                        window.location.href = response.url;
                     }, 3000);
                  }
               },
               error: function() {
               Swal.fire({
                  title: "Warning",
                  text: 'Server Error',
                  icon: "error"
               });
                  $(".wait").hide();
               }
        	});

      	} else {
       	  return false;
       } 
  	});

	</script>
	 @yield('js')
</body>

</html>