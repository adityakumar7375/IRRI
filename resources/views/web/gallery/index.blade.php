
@extends('layout.web')
@section('content')
<style>
  /* Add this to your app's CSS file */
.pagination-container {
    text-align: center;
    margin-top: 20px;
}

.pagination {
    display: inline-flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
    text-align: center;
    padding: 10px;
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
<div class="inner-banner">
  <div class="innerbanner-pic"><img src="{{asset('public/web')}}/images/gallery-banner.jpg" class="img-responsive" alt=""></div>
  <div class="innerbanner-text">
      <h1 class="title">IRRI Gallery</h1>
  </div>
</div>

<div class="inner-page">
  <div class="container">

	<div class="row gallery">
		@foreach ($images as $image)
		<div class="col-sm-6 text-center col-md-3 wow zoomInUp">
      <div class="card">
        <a href="{{asset('storage/'.$image->img)}}">
        <img src="{{asset('storage/'.$image->img)}}" alt="">
      </a>
      <h6>{{$image->title}}</h6>
      </div>
    </div>
		@endforeach
		<!-- <div class="col-sm-6 col-md-3 wow zoomInUp"><a href="{{asset('public/web')}}/images/gallery-2.jpg"><img src="{{asset('public/web')}}/images/gallery-2.jpg" alt=""></a></div>
		
		<div class="col-sm-6 col-md-3 wow zoomInUp"><a href="{{asset('public/web')}}/images/gallery-3.jpg"><img src="{{asset('public/web')}}/images/gallery-3.jpg" alt=""></a></div> 
		
		<div class="col-sm-6 col-md-3 wow zoomInUp"><a href="{{asset('public/web')}}/images/gallery-4.jpg"><img src="{{asset('public/web')}}/images/gallery-4.jpg" alt=""></a></div> 
		
		<div class="col-sm-6 col-md-3 wow zoomInUp"><a href="{{asset('public/web')}}/images/gallery-5.jpg"><img src="{{asset('public/web')}}/images/gallery-5.jpg" alt=""></a></div>
		
		<div class="col-sm-6 col-md-3 wow zoomInUp"><a href="{{asset('public/web')}}/images/gallery-6.jpg"><img src="{{asset('public/web')}}/images/gallery-6.jpg" alt=""></a></div>  	
			
		<div class="col-sm-6 col-md-3 wow zoomInUp"><a href="{{asset('public/web')}}/images/gallery-7.jpg"><img src="{{asset('public/web')}}/images/gallery-7.jpg" alt=""></a></div>
		
		<div class="col-sm-6 col-md-3 wow zoomInUp"><a href="{{asset('public/web')}}/images/gallery-8.jpg"><img src="{{asset('public/web')}}/images/gallery-8.jpg" alt=""></a></div>  	    
		 -->
		</div>

		<div class="col-sm-12 text-center mx-auto">
			<div class="pagination">
				<div class="pagination-container">
					{{ $images->links('pagination::bootstrap-4') }}
				</div>
        	</div>
		</div>

  </div>
</div>

@endsection 