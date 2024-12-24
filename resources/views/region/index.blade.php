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
                <div class="card">
                  <div class="card-header">
                    <h4>Region</h4>
                    </div>
                  <div class="card-body">
                  <form class="row g-3 needs-validation custom-input submitForm" action="{{ route('region.store') }}" method="post"> @csrf
                     
                      
                      <div class="col-md-4 position-relative">
                        <label class="form-label" for="validationTooltip04">Country</label>
                        
                    <select class="form-select" id="" name="country" required="">
                        <option selected="" disabled="" value="">Choose...</option>
                          @foreach($country as $list)
                          <option>{{$list->name}}</option>
                          @endforeach
                     </select>

                        <div class="invalid-tooltip">Please select a valid Country.</div>
                      </div>


                      <div class="col-md-4 position-relative">
                        <label class="form-label" for="validationTooltip04">State</label>
                        <select class="form-select" name="state" required="">
                          <option selected="" disabled="" value="">Choose...</option>
                          @foreach($state as $list)
                          <option>{{$list->state}}</option>
                          @endforeach
                        </select>
                        <div class="invalid-tooltip">Please select a valid state.</div>
                      </div>
                     
                      <div class="col-md-4 position-relative">
                        <label class="form-label" for="validationTooltip01">Region</label>
                        <input class="form-control" name="name" type="text" placeholder="Region Name" required="">
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