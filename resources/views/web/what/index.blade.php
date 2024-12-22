
@extends('layout.web')
@section('content')

<div class="inner-banner">
  <div class="innerbanner-pic"><img src="{{asset('public/web')}}/images/whatdo-banner.jpg" class="img-responsive" alt=""></div>
  <div class="innerbanner-text">
      <h1 class="title">What We Do</h1>
  </div>
</div>

<div class="inner-page">
  <div class="container">

    <div class="whatdo-page">

		<div class="whatdo-para">
			<h3>What is Lorem Ipsum?</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		  </div>

		<div class="whatdo-sec2">
			<div class="row">
                
				<div class="col-lg-4">
					<div class="goals-col">
						<div class="goals-pic"><img src="{{asset('public/web')}}/images/whatdo-1.jpg" class="img-responsive" alt=""></div>
						<div class="goals-content">
							<div class="whatdo-ico"><img src="{{asset('public/web')}}/images/whatdo-ico-1.png" alt=""></div>
							<h3>Climate Change & Sustainability</h3>
							<p>Rice production is both a victim and a contributor to climate change.</p>
						</div>
				  </div>	
				</div>

				<div class="col-lg-4">
					<div class="goals-col">
						<div class="goals-pic"><img src="{{asset('public/web')}}/images/whatdo-2.jpg" class="img-responsive" alt=""></div>
						<div class="goals-content">
							<div class="whatdo-ico"><img src="{{asset('public/web')}}/images/whatdo-ico-2.png" alt=""></div>
							<h3>Prosperity</h3>
							<p>80% of the global rice supply is grown on farms that are less than 2 hectares in size.</p>
						</div>
				  </div>	
				</div>

				<div class="col-lg-4">
					<div class="goals-col">
						<div class="goals-pic"><img src="{{asset('public/web')}}/images/whatdo-3.jpg" class="img-responsive" alt=""></div>
						<div class="goals-content">
							<div class="whatdo-ico"><img src="{{asset('public/web')}}/images/whatdo-ico-3.png" alt=""></div>
							<h3>Social Equity</h3>
							<p>Roughly half of the world’s smallholder farmers are women, and women and girls make up 60-80% of the entire labor force in food processing and agri-food systems.</p>
						</div>
				  </div>	
				</div>

				<div class="col-lg-4">
					<div class="goals-col">
						<div class="goals-pic"><img src="{{asset('public/web')}}/images/whatdo-4.jpg" class="img-responsive" alt=""></div>
						<div class="goals-content">
							<div class="whatdo-ico"><img src="{{asset('public/web')}}/images/whatdo-ico-4.png" alt=""></div>
							<h3>Environment</h3>
							<p>By 2050 the demand for water will increase by 50% globally. Rice farmers will compete with growing demand from manufacturing, electricity, and domestic use for this natural resource. Meanwhile, land degradation, pollution, and urban encroachment is constantly diminishing the amount of land suitable for farming. </p>
						</div>
				  </div>	
				</div>

				<div class="col-lg-4">
					<div class="goals-col">
						<div class="goals-pic"><img src="{{asset('public/web')}}/images/whatdo-5.jpg" class="img-responsive" alt=""></div>
						<div class="goals-content">
							<div class="whatdo-ico"><img src="{{asset('public/web')}}/images/whatdo-ico-5.png" alt=""></div>
							<h3>Nutrition & Food Security</h3>
							<p>Food security goes beyond hunger – it stretches to include regular access to safe, nutritious, and affordable food.</p>
						</div>
				  </div>	
				</div>
		  
			  
			</div>
		</div>


	</div>

  </div>
</div>

@endsection 