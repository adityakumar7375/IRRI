<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{asset('public/web')}}/{{asset('public/web')}}/images/favicon.png">
	<title>International Rice Research Institute</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="{{asset('public/web')}}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('public/web')}}/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{asset('public/web')}}/css/custom.css" type="text/css" /> </head>
	
<body>
	<div class="topbar">
		<div class="container-fluid">
			<div class="header-top-action">
				<ul>
					<li><a href="tel:++63285805600"><i class="fa-solid fa-phone"></i> +63 2 8580 5600</a></li>
					<li><a href="mailto:info@irri.org"><i class="fa-solid fa-envelope"></i> info@irri.org</a></li>
				</ul>
			</div>
			<div class="topright-col">
				<div class="top-call">
					<a href="https://www.facebook.com/IRRI.Official/" target="_blank"> <i class="fa-brands fa-facebook-f"></i></a>
					<a href="https://twitter.com/irri" target="_blank"> <i class="fa-brands fa-x-twitter"></i></a>
					<a href="https://www.flickr.com/photos/ricephotos/collections/" target="_blank"> <i class="fa-brands fa-flickr"></i></a>
					<a href="https://www.youtube.com/user/irrivideo/featured" target="_blank"> <i class="fa-brands fa-youtube"></i></a>
					<a href="https://www.linkedin.com/school/international-rice-research-institute/?originalSubdomain=ph" target="_blank"> <i class="fa-brands fa-linkedin-in"></i></a>
				</div>
			</div>
		</div>
	</div>
	<header class="main-header">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg p-0 align-items-end">
				<a class="navbar-brand" href="{{route('index')}}">
					<div class="logo"><span class="irri-toplogo"><img src="{{asset('public/web')}}/images/IRRI-logo.png" alt=""></span> <span class="cgiar-toplogo"><img src="{{asset('public/web')}}/images/cgiar.png" alt=""></span> </div>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="fa-solid fa-bars"></span></button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
					<ul class="navbar-nav align-items-center">
						<li class="nav-item active">
							<a class="nav-link" href="{{route('index')}}"> <i class="fa-solid fa-house"></i></a>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('whatwedo')}}">What We Do</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('results')}}">Result</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('biofortification')}}">BioFortification Hub</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('interative-map')}}">Interactive Map</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('gallery')}}">Gallery</a></li>
						
						@if(empty(Auth::user()->id))
						<li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
						@else
						<div class="top-user-profile">
							<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('public/web')}}/images/user.jpg" alt="">
							</a>
					
							<ul class="dropdown-menu">
								<li><a href="my-profile"><i class="fa-solid fa-user"></i> My Profile</a></li>
								<li><a href="change-password"><i class="fa-solid fa-lock"></i> Change Password</a></li>
								<!-- <li><a href="login"><i class="fa-solid fa-power-off"></i> Logout</a></li> -->
								<li><a href="return:false" onclick="logout()"><i class="fa-solid fa-power-off"></i> Logout</a></li>
							</ul>	
						</div>
						@endif
					</ul>
				</div>
			</nav>
		</div>
	</header>

	
	<!--banner-->
    @yield('content')


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-about">
						<div class="footer-logo"><span class="irri-toplogo"><img src="{{asset('public/web')}}/images/IRRI-logo.png" alt=""></span> <span class="cgiar-toplogo"><img src="{{asset('public/web')}}/images/cgiar.png" alt=""></span> </div>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="contact-conten">
						<h3 class="footer-title">Contact Us</h3>
						<p><strong><img src="{{asset('public/web')}}/images/location-icon.svg" alt=""></strong> <span>Pili Drive, Los Baños, Laguna 4031, Philippines</span></p>
						<p><strong><img src="{{asset('public/web')}}/images/phone-icon.svg" alt=""></strong> <a href="tel:+63 2 8580 5600">+63 2 8580 5600</a> <span class="me-1 ms-1">,</span> <a href="tel:+63 2 8845 0563">+63 2 8845 0563</a></p>
						<p><strong><img src="{{asset('public/web')}}/images/mail-icon.svg" alt=""></strong> <a href="mailto:info@irri.org">info@irri.org</a></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<div class="footer-links">
						<h3 class="footer-title">Main Links</h3>
						<p><a href="biofortification.html">Biofortification Hub</a></p>
						<p><a href="interative-map.html">Interactive Map</a></p>
						<p><a href="GQP.html">Grain Quality Portal</a></p>
						<p><a href="workwithus.html">Work With Us</a></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<div class="footer-social">
						<h3 class="footer-title">Follow IRRI</h3>
						<p>
							<a href="https://www.facebook.com/IRRI.Official/" target="_blank"> <i class="fa-brands fa-facebook-f"></i> <span>Facebook</span></a>
						</p>
						<p>
							<a href="https://twitter.com/irri" target="_blank"> <i class="fa-brands fa-x-twitter"></i> <span>X - Happening now</span></a>
						</p>
						<p>
							<a href="https://www.youtube.com/user/irrivideo/featured" target="_blank"> <i class="fa-brands fa-youtube"></i> <span>YouTube</span></a>
						</p>
						<p>
							<a href="https://www.linkedin.com/school/international-rice-research-institute/?originalSubdomain=ph" target="_blank"> <i class="fa-brands fa-linkedin-in"></i> <span>LinkedIn</span></a>
						</p>
					</div>
				</div>
			</div>
			<div class="copyright">Copyright © 2024 Irri.org | All Rights Reserved. <span>Proudly Created By <a href="https://pixabulousdesigns.com/" target="_blank">Pixabulous Designs</a></span></div>
		</div>
	</footer>
	<!----- Modal ----->
	<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title" id="searchModalLabel">Kalanamak Rice</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="searchpopup-sec">
						<div class="row">
							<div class="col-md-6">
								<div class="popup-content">
									<div class="field-topserach">
										<div class="row">
											<div class="col-6 col-sm-3">
												<h4>Particulars</h4>
												<p>V1</p>
											</div>
											<div class="col-6 col-sm-4">
												<h4>Variety Code</h4>
												<p>123456001</p>
											</div>
											<div class="col-6 col-sm-5">
												<h4>State</h4>
												<p>BIHAR, MADHYA PRADESH, UTTAR PRADESH</p>
											</div>
											<div class="col-6 col-sm-3">
												<h4>Country</h4>
												<p>India</p>
											</div>
											<div class="col-6 col-sm-4">
												<h4>Region</h4>
												<p>South Asia</p>
											</div>
											<div class="col-6 col-sm-5">
												<h4>Special Group</h4>
												<p>Aromatic rice</p>
											</div>
										</div>
									</div>
									<div class="productdt-table">
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead class="table-light">
													<tr>
														<th colspan="3">Milling Properties</th>
													</tr>
												</thead>
												<tbody>
													<tr class="tbl-bold">
														<td>Hulling %</td>
														<td>Milling %</td>
														<td>HRR</td>
													</tr>
													<tr>
														<td>74.80</td>
														<td>67.80</td>
														<td>66.30</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead class="table-light">
													<tr>
														<th colspan="4">Physical Properties</th>
													</tr>
												</thead>
												<tbody>
													<tr class="tbl-bold">
														<td>Length (mm)</td>
														<td>Breadth (mm)</td>
														<td>L/B ratio</td>
														<td>Av. Chalky (%)</td>
													</tr>
													<tr>
														<td>4.08</td>
														<td>1.76</td>
														<td>2.32</td>
														<td>0.55</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="popupmsg mt-2"><a href="login.html" class="common-btn">Login to more info</a></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="popup-image"><img src="{{asset('public/web')}}/images/popup-image.jpg" class="img-responsive" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
	<script src="{{asset('public/web')}}/js/owl.carousel.js"></script>
	<script src="{{asset('public/web')}}/js/custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		function logout(){
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
					location.href="logout";
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
		
	</script>
	@yield('js')
</body>

</html>