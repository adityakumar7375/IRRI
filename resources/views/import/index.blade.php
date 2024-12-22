@extends('layout.app')

@section('content')

<div class="container-fluid">
   <div class="page-title">
      <div class="row">
         <div class="col-6">
            <h4>Upload Data</h4>
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
               <li class="breadcrumb-item active">Upload data</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid ">
   <div class="row">
      <div class="col-sm-12 mx-auto">
         <form action="{{ route('upload.bulk.data') }}" id="upload" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
               <div class="card-header">
                  <div class="row">
                     <div class="col-4"><h4>CSV File Upload</h4>
                     </div>
                     <div class="col-8 text-end">
                        <button class="btn btn-primary mx-auto" type="submit" >Upload </button>
                     </div>
                  </div>
                  <!-- <p class="f-m-light mt-1">We use the create method to turn a<code> &lt;input type="file"&gt;</code> into a FilePond drop area.<code>[https://pqina.nl/filepond/]</code></p> -->
               </div>
               <div class="card-body">
                  <input class="no-preview-- form-control" type="file" accept=".xlsx" required name="bulkData" > 
               </div>
               <div class="card-footer">
                  @if (session('success'))
                     <div class="alert alert-success">
                        {{ session('success') }}
                     </div>
                  @elseif (session('error'))
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
            </div>
         </form>
      </div>


      
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h4>GQ Data</h4>
               <hr>
           
            
               <form method="GET" action="{{ route('upload-excle') }}" >
                  <!-- Search field -->
                  <div class="row">
                     <div class="col-sm-4">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by Particulars, Variety Code, State, Country" class="form-control">
                     </div>
                     <!-- Submit button -->
                     <div class="col-sm-4">
                        
                        <a href="{{ route('upload-excle') }}"  rel="noopener noreferrer"><button type="button" class="btn btn-danger">Clear</button></a>
                        
                     </div>
                  </div>
               </form>
                </div>
            <div class="card-body">
               <div class="col-sm-12 mx-auto">
                  <div class="table-responsive custom-scrollbar">
                     <table class="table table-bordered">
                        <thead>
                           <tr class="border-bottom-primary">
                              <th scope="col">Id</th>
                              <th scope="col">particulars</th>
                              <th scope="col">variety_code</th>
                              <th scope="col">State</th>
                              <th scope="col">country</th>
                              <th scope="col">region</th>
                              <th scope="col">special_group</th>
                           </tr>
                        </thead>
                        <tbody>

                           @php $i=1; @endphp
                           @if(count($riceData)>0)
                           @foreach($riceData as $list)
                              <tr class="border-bottom-secondary">
                                 <th scope="row">{{$i++}}</th>
                                 <td>{{$list->particulars}}</td>
                                 <td>{{$list->variety_code}}</td>
                                 <td>{{$list->state}}</td>
                                 <td>{{$list->country}}</td>
                                 <td>{{$list->region}}</td>
                                 <td>{{$list->special_group}}</td>
                                 
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
            <div class="card-footer-- text-center mx-auto">
               <div class="pagination">
                  <div class="pagination-container">
                     {{ $riceData->links('pagination::bootstrap-4') }} {{-- For Bootstrap 4 --}}
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

