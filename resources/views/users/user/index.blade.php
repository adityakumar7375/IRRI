@extends('layout.app') 
@section('content')
<div class="container-fluid">
	<div class="page-title">
		<div class="row">
			<div class="col-6">
				<h4>Users </h4> </div>
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
					<li class="breadcrumb-item active">Users</li>
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
					<div class="card-header">
						<h4>Data List</h4>
						<hr>
						<form method="GET" action="{{ route('user.list') }}" >
							<!-- Search field -->
							<div class="row">
								<div class="col-sm-4">
									<input type="text" name="search" value="{{ request('search') }}" placeholder="Search by Name, Mobile, or Email" class="form-control">
								</div>
								<!-- Submit button -->
								<div class="col-sm-4">
									    <button type="submit" class="btn btn-primary">Search</button>

									<a href="{{ route('user.list') }}"  rel="noopener noreferrer"><button type="button" class="btn btn-danger">Clear</button></a>
									
								</div>
							</div>
						</form>
                	</div>
				</div>
				<div class="card-body">
					
					<div class="table-responsive theme-scrollbar p-3 pb-0 pt-0">
						<table class="table table-bordered" id="assignments-table" style="width:100%">
						<!-- <table data-toggle="table"> -->
							<thead>
								<tr>
									<th data-field="action">Sno</th>
									<!-- <th data-field="profileImage">Profile Image</th> -->
									<!-- <th data-field="userID">User ID</th> -->
									<th data-field="userName">Name</th>
									<th data-field="userMobile">Mobile</th>
									<th data-field="userEmail">Email</th>
									<th data-field="mainWallet">Country</th>
									<th data-field="mainWallet">State</th>
									<th data-field="mainWallet">Action</th>
								</tr>
							</thead>
							<tbody>
								@php $i=1; @endphp
								@if(count($users)>0)
								@foreach($users as $list)
									<tr class="border-bottom-secondary">
										<th scope="row">{{$i++}}</th>
										<td>{{$list->name}}</td>
										<td>{{$list->mobile}}</td>
										<td>{{$list->email}}</td>
										<td>{{$list->country}}</td>
										<td>{{$list->state}}</td>
										<td><a href="{{route('track.user')}}?search={{$list->mobile}}" target="_blank" rel="noopener noreferrer">Track</a></td>
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
								{{ $users->links('pagination::bootstrap-4') }} {{-- For Bootstrap 4 --}}
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div> @endsection