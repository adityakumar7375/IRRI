@extends('layout.app')
@section('content')
<div class="container-fluid">
   <div class="page-title">
      <div class="row">
         <div class="col-6">
            <h4> Dashboard </h4>
         </div>
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
               <li class="breadcrumb-item active">Index</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="row size-column">
   <div class="col-xxl-12 box-col-12">
      <div class="row">
         <div class="col-xl-2 col-sm-4">
            <div class="card o-hidden small-widget">
               <a href="{{route('location')}}">
                  <div class="card-body total-project border-b-danger border-2">
                     <span class="f-light f-w-500 f-14">Country</span>
                     <div class="project-details">
                        <div class="project-counter">
                           <h2 class="f-w-600">@php
                              $count=App\Models\Country::where('is_status','1')->get()->count();
                              @endphp {{$count}}
                           </h2>
                           <span class="f-12 f-w-400">(Total)</span> 
                        </div>
                        <div class="product-sub bg-danger-light">
							<div class="invoice-icon">
                           		<i class="fa fa-area-chart"></i>
						   </div>
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
               </a>
            </div>
         </div>
         <div class="col-xl-2 col-sm-4">
            <div class="card o-hidden small-widget">
               <a href="{{route('location')}}">
                  <div class="card-body total-project border-b-primary border-2">
                     <span class="f-light f-w-500 f-14">State</span>
                     <div class="project-details">
                        <div class="project-counter">
                           <h2 class="f-w-600">@php
                              $count=App\Models\State::where('is_status','1')->get()->count();
                              @endphp {{$count}}
                           </h2>
                           <span class="f-12 f-w-400">(Total)</span> 
                        </div>
                        <div class="product-sub bg-primary-light">
						<div class="invoice-icon">
                           <i class="fa fa-file"></i>
						</div> 
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
               </a>
            </div>
         </div>
         <div class="col-xl-2 col-sm-4">
            <div class="card o-hidden small-widget">
               <a href="{{route('region')}}">
                  <div class="card-body total-Progress border-b-warning border-2">
                     <span class="f-light f-w-500 f-14">Region</span>
                     <div class="project-details">
                        <div class="project-counter">
                           <h2 class="f-w-600">@php
                              $count=App\Models\Region::where('is_status','1')->get()->count();
                              @endphp {{$count}}
                           </h2>
                           <span class="f-12 f-w-400">(Total) </span> 
                        </div>
                        <div class="product-sub bg-warning-light">
                           <i class="fa fa-asterisk"></i>
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
               </a>
            </div>
         </div>
         <div class="col-xl-2 col-sm-4">
            <div class="card o-hidden small-widget">
               <a href="{{route('variety.code')}}">
                  <div class="card-body total-Complete border-b-secondary border-2">
                     <span class="f-light f-w-500 f-14">Variety Code</span>
                     <div class="project-details">
                        <div class="project-counter">
                           <h2 class="f-w-600">@php
                              $count=App\Models\VarietyCode::where('is_status','1')->get()->count();
                              @endphp {{$count}}
                           </h2>
                           <span class="f-12 f-w-400">(Total) </span> 
                        </div>
                        <div class="product-sub bg-secondary-light">
                           <i class="fa fa-file"></i>
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
               </a>
            </div>
         </div>
         <div class="col-xl-2 col-sm-4">
            <div class="card o-hidden small-widget">
               <a href="{{route('gallery.index')}}">
                  <div class="card-body total-upcoming">
                     <span class="f-light f-w-500 f-14">Gallery</span>
                     <div class="project-details">
                        <div class="project-counter">
                           <h2 class="f-w-600">@php
                              $count=App\Models\Gallery::where('is_status','1')->get()->count();
                              @endphp {{$count}}
                           </h2>
                           <span class="f-12 f-w-400">(Total) </span> 
                        </div>
                        <div class="product-sub bg-success-light">
                           <i class="fa fa-file"></i>
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
               </a>
            </div>
         </div>

		 <div class="col-xl-3"> 
                  <div class="card"> 
					<a href="{{route('user.list')}}">
                    <div class="card-body new-product">
                      <div class="product-cost">
                        <div class="add-product">
                          <div class="product-icon bg-light-primary">
                            <svg>
                              <use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-user"></use>
                            </svg>
                          </div>
                          <h6>User List</h6>
                        </div>
                        <div class="product-icon">
                          <svg>
                            <use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#arrow-down"></use>
                          </svg>
                        </div>
                      </div>
                    </div>
					</a>
                  </div>
        	</div>

		<div class="col-xl-3"> 
                  <div class="card">
					<a href="{{route('track.user')}}">
                    <div class="card-body new-product">
                      <div class="product-cost">
                        <div class="add-product">
                          <div class="product-icon bg-light-primary">
                            <svg>
                              <use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-user"></use>
                            </svg>
                          </div>
                          <h6>Track User </h6>
                        </div>
                        <div class="product-icon">
                          <svg> 
                            <use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#arrow-down"> </use>
                          </svg>
                        </div>
                      </div>
                    </div>
					</a>
                  </div>
        </div>
		
		

		<div class="col-xl-3"> 
                  <div class="card">
					<a href="{{route('history.list')}}">
                    <div class="card-body new-product">
                      <div class="product-cost">
                        <div class="add-product">
                          <div class="product-icon bg-light-primary">
                            <svg>
                              <use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#fill-search"></use>
                            </svg>
                          </div>
                          <h6>History List </h6>
                        </div>
                        <div class="product-icon">
                          <svg> 
                            <use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#arrow-down"> </use>
                          </svg>
                        </div>
                      </div>
                    </div>
					</a>
                  </div>
        </div>	



		<div class="col-xl-3"> 
                  <div class="card">
					<a href="{{route('upload-excle')}}">
                    <div class="card-body new-product">
                      <div class="product-cost">
                        <div class="add-product">
                          <div class="product-icon bg-light-primary">
                            <svg>
                              <use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#receipt-disscount"></use>
                            </svg>
                          </div>
                          <h6>Uploade Data </h6>
                        </div>
                        <div class="product-icon">
                          <svg> 
                            <use href="{{asset('public/admin')}}/assets/svg/icon-sprite.svg#arrow-down"> </use>
                          </svg>
                        </div>
                      </div>
                    </div>
					</a>
                  </div>
        </div>	

		 
      </div>
   </div>
   <!--<div class="col-xxl-3 d-xxl-block d-none activity-group box-col-none">
      <div class="card add-project-link">
         <div class="categories"> </div>
         <div class="categories-content"> <span class="text-truncate col-8 f-12 d-block mb-2">Let’s add work to your space</span><a href="projectcreate.html">+Add Project </a></div>
      </div>
   </div>-->
</div>
@endsection