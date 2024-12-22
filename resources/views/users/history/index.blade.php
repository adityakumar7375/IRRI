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
					<div class="row">
						<div class="col-sm-6">
							<h4>User search history list</h4>
						</div>
						


                        <div class="table-responsive theme-scrollbar p-3 pb-0 pt-0">
					<!-- <table class="table display" id="assignments-table" style="width:100%"> -->
					<table class="table-striped  " data-toggle="table" data-url="list" data-click-to-select="true" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="false" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="" data-show-export="false" data-page-size="10" data-maintain-selected="true" data-export-types='["txt","excel"]' data-query-params="userQueryParams">
						<thead>
							<tr>
								<th data-field="action">Action</th>
								<th data-field="profileImage">Profile Image</th>
								<th data-field="userID">User ID</th>
								<th data-field="userName">User Name</th>
								<th data-field="userMobile">User Mobile</th>
								<th data-field="userEmail">User Email</th>
								<th data-field="mainWallet">Main Wallet</th>
							</tr>
						</thead>
						<tbody> </tbody>
					</table>
				</div>













					</div>
				</div>
			</div>
		</div>
	</div>
</div> @endsection