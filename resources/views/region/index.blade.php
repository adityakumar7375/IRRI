@extends('layout.app') @section('content') 
<div class="container-fluid">
   <div class="page-title">
      <div class="row">
         <div class="col-6">
            <h4>Region</h4>
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
               <li class="breadcrumb-item active">Region</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         @if (session('success'))
            <div class="alert alert-success">
               {{ session('success') }}
            </div>
         @endif

         @if (session('error'))
            <div class="alert alert-danger">
               {{ session('error') }}
            </div>
         @endif
      </div>
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h4> {{@$update->id==''?'Create New':'Update Details'}}</h4>
            </div>
            <div class="card-body">
               <form class="row g-3   custom-input submitForm" action="{{ route('region.store') }}" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{$update->id??''}}">
                  <div class="col-md-4 position-relative">
                     <label class="form-label" for="validationTooltip04">Country</label>
                     <select class="form-select" id="country" name="country" required>
                        <option selected disabled value="">Choose...</option>
                        @foreach($country as $list)
                        <option @if(@$update->country==$list->name) selected @endif value="{{ $list->name }}">{{ $list->name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="col-md-4 position-relative">
                     <label class="form-label" for="validationTooltip04">State</label>
                     <select class="form-select" id="state" name="state" required>
                        <option selected disabled value="">Choose...</option>
                        @if(!empty($update->id))
                           @foreach($state as $name)
                              <option @if(@$update->state==@$name->state) selected @endif  value="{{$name->state}}">{{$name->state}}</option>
                           @endforeach
                        @endif
                    </select>
                  </div>
                  <div class="col-md-4 position-relative">
                     <label class="form-label" for="validationTooltip01">Region</label>
                     <input class="form-control" name="name" type="text" value="{{@$update->name}}" placeholder="Region Name" required="">
                  </div>
                  <div class="col-12">
                     <button class="btn btn-primary" type="submit">{{@$update->id==''?'Submit':'Update'}}</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h4>Data List</h4>
               <hr>
						<form method="GET" action="{{ route('region') }}" >
							<!-- Search field -->
                     
							<div class="row">
								<div class="col-sm-4">
									<input type="text" name="search" value="{{ request('search') }}" placeholder="Search..." class="form-control">
								</div>
								<!-- Submit button -->
								<div class="col-sm-4">
									    <button type="submit" class="btn btn-primary">Search</button>

									<a href="{{ route('region') }}"  rel="noopener noreferrer"><button type="button" class="btn btn-danger">Clear</button></a>
									
								</div>
							</div>
						</form>
            </div>
            <div class="card-body">
               <div class="col-sm-12 col-lg-12 col-xl-12">
                  <div class="table-responsive custom-scrollbar">
                     <table class="table">
                        <thead>
                           <tr class="border-bottom-primary">
                              <th scope="col">Id</th>
                              <th scope="col">Region Name</th>
                              <th scope="col">Country</th>
                              <th scope="col">State</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php $i=1; @endphp
                           @if(count($region)>0)
                           @foreach($region as $list)
                           <tr class="border-bottom-secondary">
                              <th scope="row">{{$i++}}</th>
                              <td>{{$list->name}}</td>
                              <td>{{$list->country}}</td>
                              <td>{{$list->state}}</td>
                              <td>@if($list->status==1)<span class="badge badge-light-success" onclick="ActiveFunction('{{$list->id}}','regions')">Active</span>@else<span class="badge badge-light-danger" onclick="DeactiveFunction('{{$list->id}}','regions')">Deactive</span>@endif</td>
                              <td class="text-left">
                                 <a href="{{route('region.update',['id' => $list->id])}}"><button class="btn btn-outline-info btn-square btn-xs"><i class="fa fa-pencil-alt  "></i></button></a>
                                 <a href="#" onclick="DeleteFunction('{{$list->id}}','regions')"><button  class="btn btn-outline-danger btn-square btn-xs"><i class="fa fa-trash"></i></button></a>
                              </td>
                           </tr>
                           @endforeach
                           @else
                           <tr>
                              <td colspan="6" class="text-center">Data not found</td>
                           </tr>
                           @endif
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="card-footer mx-auto text-center">
              <div class="pagination">
                  <div class="pagination-container">
                      {{ $region->links('pagination::bootstrap-4') }} {{-- For Bootstrap 4 --}}
                  </div>
              </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('js')
<script>
   
  function DeleteFunction(id,table){
      DeleteMyData(id,table);
   }
   function ActiveFunction(id,table){
      UpdateMyData(id,table,false);
   }
   function DeactiveFunction(id,table){
      UpdateMyData(id,table,true);
   }

   $(document).ready(function() {
      $('#country').on('change', function() {
          var countryId = $(this).val();
          if (countryId) {
              $.ajax({
                  url: "{{url('get-states')}}/" + countryId,
                  type: 'GET',
                  success: function(data) {
                      $('#state').empty();
                      $('#state').append('<option selected disabled value="">Choose...</option>');
                      $.each(data, function(key, value) {
                          $('#state').append('<option value="' + value.state + '">' + value.state + '</option>');
                      });
                  }
              });
          } else {
              $('#state').empty();
              $('#state').append('<option selected disabled value="">Choose...</option>');
          }
      });
    });
</script>
@endsection