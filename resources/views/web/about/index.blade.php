
@extends('layout.web')
@section('content')

<div class="inner-banner">
  <div class="innerbanner-pic"><img src="{{asset('public/web')}}/images/about-banner.jpg" class="img-responsive" alt=""></div>
  <div class="innerbanner-text">
      <h1 class="title">About Us</h1>
  </div>
</div>

<div class="inner-page">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-lg-6">
            	<div class="about-img"><img src="{{asset('public/web')}}/images/about-1.jpg" alt="" class="img-responsive"></div>
            </div>
            <div class="col-lg-6">
              <div class="who-text">
                <div class="title-col text-start"><h2 class="title">Our Mission</h2></div>
                <p>IRRI is dedicated to abolishing poverty and hunger among people and populations that depend on rice-based agri-food systems. Through our work and partnerships, we aim to improve the health and welfare of rice farmers and consumers; promote environmental sustainability in a world challenged by climate change; and support the empowerment of women and the youth in the rice industry.</p>

                <p>Our research for development is characterized by its collaborative nature: from alliances with advanced research institutes; through strong collaborations and capacity development with governments and national agricultural research and extension systems; to partnerships with the development sector and our ability to broker novel delivery channels through the private sector. IRRI’s work is supported by a diverse network of investors aligned to common goals.</p>
            </div>
				  </div>
        </div>
    </div>

<div class="aboutpg-sec2">
  <div class="container">

    <div class="title-col"><h2 class="title">Our Goals</h2> <h4 class="green-color">Innovate. Catalyze. Transform.</h4></div>

    <div class="row">
                
      <div class="col-lg-4">
          <div class="goals-col">
              <div class="goals-pic"><img src="{{asset('public/web')}}/images/about-2.jpg" class="img-responsive" alt=""></div>
              <div class="goals-content">
                  <h3>Innovation leadership for the global rice sector</h3>
                  <p>Be the linchpin of scientific innovation and thought leadership solving complex problems with deep research.</p>
              </div>
        </div>	
      </div>

      <div class="col-lg-4">
        <div class="goals-col">
            <div class="goals-pic"><img src="{{asset('public/web')}}/images/about-3.jpg" class="img-responsive" alt=""></div>
            <div class="goals-content">
                <h3>Catalyze impact at scale for people and planet</h3>
                <p>Create and support catalytic networks driving widespread adoption of high-impact innovations and technologies.</p>
            </div>
      </div>	
    </div>

    <div class="col-lg-4">
      <div class="goals-col">
          <div class="goals-pic"><img src="{{asset('public/web')}}/images/about-4.jpg" class="img-responsive" alt=""></div>
          <div class="goals-content">
              <h3>Transform rice-based agri-food systems</h3>
              <p>Establish a track record of delivering successful policy interventions and institutional capacity building programs that underpin the development of equitable and sustainable rice sectors globally.</p>
          </div>
    </div>	
  </div>
    
      

    

  </div>

  </div>
</div>

<div class="aboutpg-sec3">
  <div class="container">

    <div class="inner-aboutsec3">
        <div class="row g-0 align-items-center">
           <div class="col-md-6"><div class="report-pic"><img src="{{asset('public/web')}}/images/about-5.jpg" class="img-responsive" alt=""></div></div>
           <div class="col-md-6">
             <div class="report-content">
                <h3>IRRI Annual Report 2023</h3>
                <h2>Discover the progress of rice research</h2>
                <div class="common-box"><a href="#" class="common-btn">View Report</a></div>
             </div>
           </div>
        </div>
    </div>

  </div>  
</div>

</div>

@endsection