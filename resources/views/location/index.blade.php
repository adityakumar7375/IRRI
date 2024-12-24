@extends('layout.app')
@section('content')
<div class="container-fluid">
   <div class="page-title">
      <div class="row">
         <div class="col-6">
            <h4>Manage Location</h4>
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
               <li class="breadcrumb-item active">Manage Location</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid ">
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
      <div class="col-sm-5">
         <div class="card">
            <div class="card-header">
               <div class="row">
                  <div class="col-sm-6">Country</div>
                  <div class="col-sm-6 text-end"><a href="return:false"  data-bs-toggle="modal" data-bs-target="#CountryModel">
                  <button class="btn btn-square btn-info-gradien" type="button" title="btn btn-square btn-info-gradien">Add New</button>
                  </a></div>
               </div>
            </div>
            <div class="card-block row">
               <div class="col-sm-12 col-lg-12 col-xl-12">
                  <div class="table-responsive custom-scrollbar">
                     <table class="table">
                        <thead>
                           <tr class="border-bottom-primary">
                              <th scope="col">Id</th>
                              <th scope="col">Name</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php $i=1; @endphp
                           @if(count($country)>0)
                           @foreach($country as $list)
                              <tr class="border-bottom-secondary">
                                 <th scope="row">{{$i++}}</th>
                                 <td>{{$list->name}}</td>
                                 <td>@if($list->status==1)<span class="badge badge-light-success" onclick="ActiveFunction('{{$list->id}}','countries')">Active</span>@else<span class="badge badge-light-danger" onclick="DeactiveFunction('{{$list->id}}','countries')">Deactive</span>@endif</td>
                                 <td class="text-left">
                                 <a href="#"><button class="btn btn-outline-info btn-square btn-xs"><i class="fa fa-pencil-alt  "></i></button></a>
                                 <a href="#" onclick="DeleteFunction('{{$list->id}}','countries')"><button  class="btn btn-outline-danger btn-square btn-xs"><i class="fa fa-trash"></i></button></a>
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
      <div class="col-sm-7">
         <div class="card">
            <div class="card-header">
               <div class="row">
                  <div class="col-sm-6">State</div>
                  <div class="col-sm-6 text-end"><a href="return:false"  data-bs-toggle="modal" data-bs-target="#StateModel">
                     <!-- <button class="btn btn-primary-gradien" type="button" title="btn btn-primary-gradien">Add</button> -->
                     <button class="btn btn-square btn-info-gradien" type="button" title="btn btn-square btn-info-gradien">Add New</button>
                  </a></div>
               </div>
            </div>
            <div class="card-block row">
               <div class="col-sm-12 col-lg-12 col-xl-12">
                  <div class="table-responsive custom-scrollbar">
                     <table class="table">
                        <thead>
                           <tr class="border-bottom-primary">
                              <th scope="col">Id</th>
                              <th scope="col">Country</th>
                              <th scope="col">State</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>

                           @php $i=1; @endphp
                           @if(count($state)>0)
                           @foreach($state as $list)
                              <tr class="border-bottom-secondary">
                                 <th scope="row">{{$i++}}</th>
                                 <td>{{$list->country}}</td>
                                 <td>{{$list->state}}</td>
                                 <td>@if($list->status==1)<span class="badge badge-light-success" onclick="ActiveFunction('{{$list->id}}','states')">Active</span>@else<span class="badge badge-light-danger" onclick="DeactiveFunction('{{$list->id}}','states')">Deactive</span>@endif</td>
                                 <td class="text-left">
                                 <a href="#"><button class="btn btn-outline-info btn-square btn-xs"><i class="fa fa-pencil-alt  "></i></button></a>
                                 <a href="#" onclick="DeleteFunction('{{$list->id}}','states')"><button  class="btn btn-outline-danger btn-square btn-xs"><i class="fa fa-trash"></i></button></a>
                                 </td>
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
         </div>
      </div>
   </div>
</div>
@endsection  
@section('model')
<div class="modal fade" id="StateModel" tabindex="-1" role="dialog" aria-labelledby="exampleModallogin" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content dark-sign-up">
         <div class="modal-body social-profile text-start">
           
            <div class="modal-toggle-wrapper">
               <h3>State</h3>
               <p> Fill in your information below to continue.</p>
               <form class="row g-3  submitForm" action="{{ route('state') }}" method="post"  data-custom="StateModel"> @csrf
                  <div class="col-md-12 mt-4 mb-2">
                     <label class="form-label" for="">Select Country</label>
                     <select class="form-select" id="" name="country" required="">
                          <option selected=""  value="">Select Country</option>
                          @foreach($country as $list)
                          <option>{{$list->name}}</option>
                          @endforeach
                     </select>
                  </div>
                  <div class="col-md-12 mt-3 mb-4">
                     <label class="form-label" for="inputEmailEnter">Enter State Name</label>
                     <input class="form-control" required name="state" type="text" placeholder="Enter State Name">
                  </div>
                  
                  <div class="col-12 mt-2 mb-3 text-center">
                     <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                     <button class="btn btn-primary" type="submit" >Submit </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="CountryModel" tabindex="-1" role="dialog" aria-labelledby="exampleModallogin" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content dark-sign-up">
         <div class="modal-body social-profile text-start">
            <div class="modal-toggle-wrapper">
               <h3>Country</h3>
               <p> Fill in your information below to continue.</p>
               <form class="row g-3  submitForm" action="{{ route('country') }}" method="post" id="CountryForm" data-custom="CountryModel"> @csrf
                  <div class="col-md-12 mt-3 mb-4">
                     <label class="form-label" for="inputEmailEnter">Enter Country Name</label>
                     <input class="form-control" id="inputEmailEnter" required name="name" type="text" placeholder="Enter Country Name">
                  </div>
                  
                  <div class="col-12 mt-5 mb-3 text-center">
                     <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                     <button class="btn btn-primary" type="submit" >Submit </button>
                  </div>
               </form>
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
</script>
@endsection