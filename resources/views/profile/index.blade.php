@extends('layout.app') @section('content') <div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h4>Edit Profile</h4>
      </div>
      <div class="col-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">
              <svg class="stroke-icon">
                <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg>
            </a>
          </li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active"> Edit Profile</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="edit-profile">
  <div class="row">
    <div class="col-xl-4">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title mb-0"> Profile</h4>
          <div class="card-options">
            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
              <i class="fe fe-chevron-up"></i>
            </a>
            <a class="card-options-remove" href="#" data-bs-toggle="card-remove">
              <i class="fe fe-x"></i>
            </a>
          </div>
        </div>
        <div class="card-body">
          <form>
            
           
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input class="form-control" placeholder="" readonly value="{{Auth::user()->name}}">
            </div>
            
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input class="form-control" readonly  value="{{Auth::user()->email}}">
            </div>
            <div class="form-footer">
              <!-- <button class="btn btn-primary btn-block">Save</button> -->
            </div>
          </form>
        </div>
      </div>


	  <div class="card">
        <div class="card-header">
          <h4 class="card-title mb-0"> Password</h4>
          <div class="card-options">
            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
              <i class="fe fe-chevron-up"></i>
            </a>
            <a class="card-options-remove" href="#" data-bs-toggle="card-remove">
              <i class="fe fe-x"></i>
            </a>
          </div>
        </div>
        <div class="card-body">
			@if ($errors->any())
                     <div class="alert alert-danger">
                        
                        @foreach ($errors->all() as $error)
                           {{ $error }}
                        @endforeach
                  
                     </div>
                  @endif
			@if(session('status'))
				<div class="alert alert-success mt-3">
					{{ session('status') }}
				</div>
			@endif

			@if(session('error'))
				<div class="alert alert-danger mt-3">
					{{ session('error') }}
				</div>
			@endif
          <form method="POST" action="{{ route('profile') }}" id="upload">
				@csrf
				<div class="mb-3">
					<label class="form-label">Old Password</label>
					<input type="password" name="old_password" class="form-control" placeholder="Enter old password" required>
				</div>

				<div class="mb-3">
					<label class="form-label">New Password</label>
					<input type="password" name="new_password" class="form-control" placeholder="Enter new password" required>
				</div>

				<div class="mb-3">
					<label class="form-label">Confirm New Password</label>
					<input type="password" name="new_password_confirmation" class="form-control" placeholder="Confirm new password" required>
				</div>

				<div class="form-footer">
					<button type="submit" class="btn btn-primary btn-block">Update</button>
				</div>
			</form>
			 
        </div>
      </div>
    </div>
    <div class="col-xl-8">
      	<div class="card">
            <div class="card-header">
               <h4>Login History</h4>
            </div>
            <div class="card-body">
               <div class="col-sm-12 mx-auto">
                  <div class="table-responsive custom-scrollbar">
                     <table class="table table-bordered">
                        <thead>
                           <tr class="border-bottom-primary">
                              <th scope="col">Id</th>
                              <th scope="col">IP</th>
                              <th scope="col">Location</th>
                              <th scope="col">System</th>
                              <th scope="col">Date/Time</th>
                           </tr>
                        </thead>
                        <tbody>

                           @php $i=1; @endphp
                           @if(count($data)>0)
                           @foreach($data as $list)
						   	  @php 
							  	$use=json_decode($list->location);
							  	$sys=json_decode($list->user_agent);
							  	
							  @endphp
                              <tr class="border-bottom-secondary">
                                 <th scope="row">{{$i++}}</th>
                                 <td>{{$list->ip_address}}</td>
                                 <td>{{@$use->hostname}}<br>{{@$use->city}}<br>{{@$use->region}}<br>{{@$use->country}}<br>{{@$use->postal."\n"}}</td>
                                 <td>{{@$sys->browser}}<br>{{@$sys->os}}<br>{{@$sys->device_type}}</td>
                                
                                 <td>{{$list->created_at}}</td>
                              </tr>
                           @endforeach
                           @else
                           <tr>
                              <td colspan="5" class="text-center">Data not found</td>
                           </tr>
                           @endif


                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="card-footer text-center mx-auto">
               <div class="pagination">
                  <div class="pagination-container">
                     {{ $data->links('pagination::bootstrap-4') }}
                  </div>
               </div>
            </div>
        </div>
    </div>
  </div>
</div> @endsection

@section('js')
<script>
      $('#upload').submit(function (e) {

         e.preventDefault();
         if ($(this).parsley().isValid()) {
            $('#wait').show();
            this.submit();
         }else{
            return false;
         }

      });
</script>  
@endsection  
