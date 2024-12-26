@extends('layout.app') @section('content')
<div class="container-fluid">
	<div class="page-title">
		<div class="row">
			<div class="col-6">
				<h4>User search history</h4> </div>
			<div class="col-6">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.html">
							<svg class="stroke-icon">
								<use href="{{asset('admin')}}/assets/svg/icon-sprite.svg#stroke-home"></use>
							</svg>
						</a>
					</li>
					<li class="breadcrumb-item">dashboard</li>
					<li class="breadcrumb-item active">User search history</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- Container-fluid starts-->

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4>Data List</h4>
					<hr>
					<form method="GET" action="{{ route('history.list') }}" >
						<!-- Search field -->
						<div class="row">
							<div class="col-sm-4">
								<input type="text" name="search" value="{{ request('search') }}" placeholder="Search by Name, Mobile, or Email" class="form-control">
							</div>
							<!-- Submit button -->
							<div class="col-sm-4">
									<button type="submit" class="btn btn-primary">Search</button>

								<a href="{{ route('history.list') }}"  rel="noopener noreferrer"><button type="button" class="btn btn-danger">Clear</button></a>
								
							</div>
						</div>
					</form>
				</div>




					<div class="card-body">
						<table class="table table-bordered">
                        <thead>
                           <tr class="border-bottom-primary">
                              <th scope="col">Id</th>
                              <th scope="col">User</th>
                              <th scope="col">Search</th>
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
							    $user=App\Models\User::where('id',$list->search_by)->first();
							  	$use=json_decode($list->location);
							  	$sys=json_decode($list->system);
							  	$se=json_decode($list->search);
							  @endphp
                              <tr class="border-bottom-secondary">
                                 <th scope="row">{{$i++}}</th>
								 @if($user)
                                 <td>{{$user->name}}<br>{{$user->email}}<br>{{$user->mobile}}</td>
								@else
								<td>{{$list->search_by}}</td>
								@endif
                                 <td>{{@$se->country??'-'}} <br>{{@$se->city??'-'}}<br>{{@$se->region??'-'}} <br>{{@$se->variety??'-'}}</td>
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

					<div class="card-footer text-center mx-auto">
						<div class="pagination">
							<div class="pagination-container">
								{{ $data->links('pagination::bootstrap-4') }} {{-- For Bootstrap 4 --}}
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</div>


@endsection