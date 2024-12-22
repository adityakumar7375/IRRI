
@extends('layout.web')
@section('content')

<div class="banner">
		<div id="banner-slider" class="owl-carousel owl-theme">
			<div class="item">
				<div class="banner_containt">
					<h1 class="yellow-strip"><a href="GQP.html">Welcome to Grain Quality Portal</a></h1>
					<h4>Grain Quality Evaluation of World Rices</h4> </div>
				<div class="banner-pic"><img src="{{asset('public/web')}}/images/banner-1.jpg" alt="" class="img-responsive"></div>
			</div>
			<!--item-->
			<div class="item">
				<div class="banner_containt">
					<h1 class="yellow-strip"><a href="GQP.html">Welcome to Grain Quality Portal</a></h1>
					<h4>Grain Quality Evaluation of World Rices</h4> </div>
				<div class="banner-pic"><img src="{{asset('public/web')}}/images/banner-2.jpg" alt="" class="img-responsive"></div>
			</div>
			<!--item-->
			<div class="item">
				<div class="banner_containt">
					<h1 class="yellow-strip"><a href="GQP.html">Welcome to Grain Quality Portal</a></h1>
					<h4>Grain Quality Evaluation of World Rices</h4> </div>
				<div class="banner-pic"><img src="{{asset('public/web')}}/images/banner-3.jpg" alt="" class="img-responsive"></div>
			</div>
			<!--item-->
		</div>
	</div>
	<!--banner-->
	<div class="homeabout-sec">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="haboutmain-text">
						<div class="rice-ico"><img src="{{asset('public/web')}}/images/rice-icon.png" alt=""></div>
						<div class="small-title">About IRRI</div>
						<h4 class="title">Innovate. Catalyze. Transform.</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				</div>
				<div class="col-md-6 text-center">
					<div class="haboutmain-pic"><img src="{{asset('public/web')}}/images/home-about.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>
	<div class="homesearch-sec">
		<div class="container">
			<div class="innerhome-search">
				<div class="row g-0">
					<div class="col-md-8">
						<div class="homefilter-left">
							<div class="homefilter-pic"><img src="{{asset('public/web')}}/images/home-search.jpg" class="img-responsive" alt=""></div>
							<div class="homefilter-text">
								<h2>Explore GPU Search</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<form action="" class="homefilter-field" name="cform" method="post">
							<div class="title-col text-start mb-2">
								<h2 class="title">Search Filter</h2></div>
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<label for="">Search by Country</label>
										<select class="form-control" aria-label="Default select example">
											<option selected>Select</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="">Search by State</label>
										<select class="form-control" aria-label="Default select example">
											<option selected>Select</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="">Search by Variety</label>
										<input type="text" name="phone" id="phone" class="form-control"> </div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="">Search by Region</label>
										<select class="form-control" aria-label="Default select example">
											<option selected>Select</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="">Search by Special Group</label>
										<input type="text" id="" name="location" class="form-control" required=""> </div>
								</div>
								<div class="col-12 mt-2">
									<div class="form-group">
										<input type="submit" name="submit" class="common-btn" id="submit_btn" value="Get Result" data-bs-toggle="modal" data-bs-target="#searchModal">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="homeGQP-sec">
		<div class="container">
			<div class="title-col">
				<h2 class="title">Grain Quality Portal</h2></div>
			<div class="row">
				<div class="col-lg-4">
					<div class="home-howwork-col">
						<div class="home-howwork-ico"><img src="{{asset('public/web')}}/images/GQP-ico-1.svg" alt=""></div>
						<div class="home-howwork-text">
							<h3>Partner With Us</h3>
							<p>Join a growing movement to expand the reach and impact of nutrient-enriched staple crops in india.</p>
						</div>
						<div class="gpu-link"><a href="#">Contact Our India Team <i class="fa-solid fa-angle-right"></i></a></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="home-howwork-col">
						<div class="home-howwork-ico"><img src="{{asset('public/web')}}/images/GQP-ico-2.svg" alt=""></div>
						<div class="home-howwork-text">
							<h3>Partners</h3>
							<p>We have more than 100 partners in the public, private, NGO and policy engagement sectors who share our mission to improve nutrition and lives of people in india.</p>
						</div>
						<div class="gpu-link"><a href="#">View Partners List <i class="fa-solid fa-angle-right"></i></a></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="home-howwork-col">
						<div class="home-howwork-ico"><img src="{{asset('public/web')}}/images/GQP-ico-3.svg" alt=""></div>
						<div class="home-howwork-text">
							<h3>India Brochure</h3>
							<p>An overview of Harvest Plus activity in india.</p>
						</div>
						<div class="gpu-link"><a href="#">Learn More <i class="fa-solid fa-angle-right"></i></a></div>
					</div>
				</div>
			</div>
			<div class="homequote"> <span>“</span>Rice is not just a crop, it is a lifeline for billions, and advancing research in this field is essential for food security and sustainable development.<span>“</span> </div>
		</div>
</div>


@endsection 