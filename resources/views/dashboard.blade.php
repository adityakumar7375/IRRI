@extends('layout.app')

@section('content')




<div class="container-fluid">
					<div class="page-title">
						<div class="row">
							<div class="col-6">
								<h4>
                                    Project Management </h4> </div>
							<div class="col-6">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.html">
											<svg class="stroke-icon">
												<use href="{{asset('admin')}}/assets/svg/icon-sprite.svg#stroke-home"></use>
											</svg>
										</a>
									</li>
									<li class="breadcrumb-item">Dashboard</li>
									<li class="breadcrumb-item active">Project-Management</li>
								</ol>
							</div>
						</div>
					</div>
				</div>

<div class="row size-column">
						<div class="col-xxl-9 box-col-12">
							<div class="row">
								<div class="col-xl-3 col-sm-6">
									<div class="card o-hidden small-widget">
										<div class="card-body total-project border-b-primary border-2"><span class="f-light f-w-500 f-14">Total Project</span>
											<div class="project-details">
												<div class="project-counter">
													<h2 class="f-w-600">1,523</h2><span class="f-12 f-w-400">(This month)</span> </div>
												<div class="product-sub bg-primary-light">
													<svg class="invoice-icon">
														<use href="{{asset('admin')}}/assets/svg/icon-sprite.svg#color-swatch"></use>
													</svg>
												</div>
											</div>
											<ul class="bubbles">
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6">
									<div class="card o-hidden small-widget">
										<div class="card-body total-Progress border-b-warning border-2"> <span class="f-light f-w-500 f-14">In Progress</span>
											<div class="project-details">
												<div class="project-counter">
													<h2 class="f-w-600">836</h2><span class="f-12 f-w-400">(This month) </span> </div>
												<div class="product-sub bg-warning-light">
													<svg class="invoice-icon">
														<use href="{{asset('admin')}}/assets/svg/icon-sprite.svg#tick-circle"></use>
													</svg>
												</div>
											</div>
											<ul class="bubbles">
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6">
									<div class="card o-hidden small-widget">
										<div class="card-body total-Complete border-b-secondary border-2"><span class="f-light f-w-500 f-14">Complete</span>
											<div class="project-details">
												<div class="project-counter">
													<h2 class="f-w-600">475</h2><span class="f-12 f-w-400">(This month) </span> </div>
												<div class="product-sub bg-secondary-light">
													<svg class="invoice-icon">
														<use href="{{asset('admin')}}/assets/svg/icon-sprite.svg#add-square"></use>
													</svg>
												</div>
											</div>
											<ul class="bubbles">
												<li class="bubble"> </li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"> </li>
												<li class="bubble"></li>
												<li class="bubble"> </li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"> </li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6">
									<div class="card o-hidden small-widget">
										<div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Upcoming</span>
											<div class="project-details">
												<div class="project-counter">
													<h2 class="f-w-600">189</h2><span class="f-12 f-w-400">(This month) </span> </div>
												<div class="product-sub bg-light-light">
													<svg class="invoice-icon">
														<use href="{{asset('admin')}}/assets/svg/icon-sprite.svg#edit-2"></use>
													</svg>
												</div>
											</div>
											<ul class="bubbles">
												<li class="bubble"> </li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
												<li class="bubble"></li>
											</ul>
										</div>
									</div>
								</div>
								
								
								
							</div>
						</div>
						<!--<div class="col-xxl-3 d-xxl-block d-none activity-group box-col-none" hidden>
							<div class="card add-project-link">
								<div class="categories"> </div>
								<div class="categories-content"> <span class="text-truncate col-8 f-12 d-block mb-2">Let’s add work to your space</span><a href="projectcreate.html">+Add Project </a></div>
							</div>
							
						</div>-->
					</div>


                    @endsection                       