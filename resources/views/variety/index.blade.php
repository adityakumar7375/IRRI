@extends('layout.app') @section('content') 
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
                <div class="card">
                  <div class="card-header">
                    <h4>Variety code</h4>
                    </div>
                  <div class="card-body">
                  <form class="row g-3 needs-validation custom-input submitForm" action="{{ route('variety.store') }}" method="post" enctype="multipart/form-data"> @csrf
                      <div class="col-md-4 position-relative">
                        <label class="form-label" for="validationTooltip01">Variety Name</label>
                        <input class="form-control" name="name" type="text" placeholder="Variety Name" required="">
                        <div class="valid-tooltip">Looks good!</div>
                      </div>
                      
                     
                      <div class="col-md-4">
                        <label class="form-label" for="validationCustom05">Variety code</label>
                        <input class="form-control"name="variety_code" placeholder="Variety code"type="text" required="">
                        <div class="valid-tooltip">Looks good!</div>
                        
                      </div>



                      <div class="col-md-4"> 
                        <label class="form-label" for="formFile">Image</label>
                        <input class="form-control" id="formFile"name="img" type="file" required>
                        <div class="valid-tooltip">Looks good!</div>
                      </div>
                     
                      
                      


                      <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
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
                    <h4>Variety code</h4>
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
                                 <td><img class="img-thumbnail" src="{{asset('storage/'.$list->img)}}" width="200"></td>
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