@extends('layout.app') @section('content') 
<div class="container-fluid">
   <div class="page-title">
      <div class="row">
         <div class="col-6">
            <h4>Variety code</h4>
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
               <li class="breadcrumb-item active">Variety code</li>
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

        @if ($errors->any())
            <div class="alert alert-danger">
                
              @foreach ($errors->all() as $error)
                {{ $error }}
              @endforeach
          
            </div>
        @endif

        </div>
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h4>Create New</h4>
            </div>
            <div class="card-body">
               <form class="row g-3 needs-validation custom-input submitForm" action="{{ route('variety.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-4 position-relative">
                     <label class="form-label" for="validationTooltip01">Variety Name</label>
                     <input class="form-control" name="name" type="text" placeholder="Variety Name" required="">
                     <!-- <div class="valid-tooltip">Looks good!</div> -->
                  </div>
                  <div class="col-md-4">
                     <label class="form-label" for="validationCustom05">Variety code</label>
                     <input class="form-control"name="variety_code" placeholder="Variety code"type="text" required="">
                     <!-- <div class="valid-tooltip">Looks good!</div> -->
                  </div>
                  <div class="col-md-4">
                     <label class="form-label" for="formFile">Image</label>
                     <input class="form-control" id="formFile" name="img" type="file"  accept=".jpg,.png,.gif" required>
                     <!-- <div class="valid-tooltip">Looks good!</div> -->
                  </div>
                  <div class="col-12">
                     <button class="btn btn-primary" type="submit">Submit</button>
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
            </div>
            <div class="card-body">
               <div class="col-sm-12 col-lg-12 col-xl-12">
                  <div class="table-responsive custom-scrollbar">
                     <table class="table">
                        <thead>
                           <tr class="border-bottom-primary">
                              <th scope="col">Id</th>
                              <th scope="col">Variety Name</th>
                              <th scope="col">Variety Code</th>
                              <th scope="col">Image</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php $i=1; @endphp
                           @if(count($variety)>0)
                           @foreach($variety as $list)
                           <tr class="border-bottom-secondary">
                              <th scope="row">{{$i++}}</th>
                              <td>{{$list->name}}</td>
                              <td>{{$list->variety_code}}</td>
                              <td>
                                <a href="{{asset('storage/'.$list->img)}}" itemprop="contentUrl" data-size="1600x950"  class="image-link">
                                  <img class="img-thumbnail" src="{{asset('storage/'.$list->img)}}" itemprop="thumbnail" style="height:50px;width:50px" alt="Image description">
                                </a>
                              </td>
                              <td>@if($list->status==1)<span class="badge badge-light-success">Active</span>@else<span class="badge badge-light-danger">Deactive</span>@endif</td>
                              <td class="text-center">
                                 <a href="#"><i class="fa fa-pencil-alt"></i></a>
                              </td>
                           </tr>
                           @endforeach
                           @else
                           <tr>
                              <td colspan="4" class="text-center">Data not found</td>
                           </tr>
                           @endif
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('model')
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <img src="" id="modalImage" class="img-fluid" alt="Modal Image">
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
   // JavaScript to handle modal opening and image change
   document.querySelectorAll('.image-link').forEach(function (link) {
       link.addEventListener('click', function (e) {
           e.preventDefault();  // Prevent the default action (navigation)
           
           // Get the full-size image URL from the href attribute
           var fullImageUrl = this.getAttribute('href');
           
           // Set the src of the modal image
           document.getElementById('modalImage').src = fullImageUrl;
           
           // Show the modal
           $('#imageModal').modal('show');
       });
   });
</script>
@endsection