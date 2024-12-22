
@extends('layout.web')
@section('content')


<div class="userprofile-top">
	<div class="container"><h1 class="title">Hello, {{Auth::user()->name.' '.Auth::user()->last_name}}</h1></div>
</div>

<div class="inner-page">
  <div class="container">

  <div class="userprofile-pg">
	<div class="row">

		<div class="col-md-3">
			<div class="userprofile-left">
				<ul>
					<li class="active"><a href="my-profile"><i class="fa-solid fa-user"></i> My Profile</a></li>
					<li><a href="change-password"><i class="fa-solid fa-lock"></i> Change Password</a></li>
					<li><a href="return:false" onclick="logout()"><i class="fa-solid fa-power-off"></i> Logout</a></li>
				  </ul>
			</div>
		</div>

		<div class="col-md-9">
			<div class="userprofile-right">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Error Message -->
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
				<div class="title-col text-start mb-2"><h2 class="title">My Profile</h2></div>

				<form method="post" class="profile-form" method="post" action="update/user/account"> @csrf
                    <div class="row">
                    <div class="col-lg-4 col-md-4">
                      <div class="form-group">                                    
                        <label for="">First Name</label>
                        <input type="text" id="firstn" name="name" class="form-control" value="{{Auth::user()->name}}">
                      </div>                               
                    </div>
                    <div class="col-lg-4 col-md-4">                               
                      <div class="form-group">
                        <label for="">Last Name</label>                                    
                        <input type="text" id="lastn" name="last_name" class="form-control" value="{{Auth::user()->last_name}}">
                      </div>                                
                    </div>
                    <div class="col-lg-4 col-md-4">                               
                      <div class="form-group">   
                        <label for="">Phone No.</label>                                
                        <input type="text" id="" name="mobile" class="form-control"  value="{{Auth::user()->mobile}}">
                      </div>
                    </div>			
        
                    <div class="col-lg-4 col-md-4">                               
                      <div class="form-group">
                        <label for="">Email Address</label>                                    
                        <input type="text" id=""   class="form-control" value="{{Auth::user()->email}}" disabled>
                      </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4">                               
                        <div class="form-group">
                          <label for="">Country</label>                                    
                          <input type="text" id="" name="country" class="form-control"  value="{{Auth::user()->country}}">
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-4">                               
                        <div class="form-group">
                          <label for="">State</label>                                    
                          <input type="text" id="" name="state" class="form-control"  value="{{Auth::user()->state}}">
                        </div>
                      </div>
                    
                    <div class="col-md-8">
                      <div class="form-group"><button class="common-btn w-auto">Update Now</button></div>                             
                    </div>

                    </div>
                  
                </form>
			</div>
		</div>

	</div>
  </div>

  </div>
</div>


@endsection