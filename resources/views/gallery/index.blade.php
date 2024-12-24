@extends('layout.app') @section('content') 

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h4>Gallery</h4>
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
          <li class="breadcrumb-item">Gallery</li>
          <li class="breadcrumb-item active">Gallery</li>
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
              <h4>IMAGE GALLERY</h4>
            </div>
            <div class="col-sm-6 text-end">
              <a href="return:false" data-bs-toggle="modal" data-bs-target="#GalleryModel">
                <button class="btn btn-square btn-info-gradien" type="button" title="btn btn-square btn-info-gradien">Add Gallery</button>
              </a>
            </div>
          </div>
        </div>
        <div class="gallery my-gallery card-body row" itemscope="">
          
        
           @foreach ($images as $image)
          <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia" itemscope="">
            <a href="{{asset('storage/'.$image->img)}}" itemprop="contentUrl" data-size="1600x950"  class="image-link">
              <img class="img-thumbnail" src="{{asset('storage/'.$image->img)}}" itemprop="thumbnail" alt="Image description">
            </a>
            <!-- <figcaption itemprop="caption description">Image caption 1</figcaption> -->
          </figure>
           @endforeach

          
        </div>
        <!-- Root element of PhotoSwipe. Must have class pswp.-->
       
           <!-- Display pagination links -->
        <div class="pagination">
          
            <div class="pagination-container">
    {{ $images->links('pagination::bootstrap-4') }} {{-- For Bootstrap 4 --}}
</div>
        </div>
        <!-- </div> -->
      </div>
    </div>
  </div>
</div> @endsection @section('model') <div class="modal fade" id="GalleryModel" tabindex="-1" role="dialog" aria-labelledby="exampleModallogin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content dark-sign-up">
      <div class="modal-body social-profile text-start">
        <div class="modal-toggle-wrapper">
          <h4 class="mb-2">IMAGE GALLERY</h4>
          <p> Fill in your information below to continue.</p>
          <form class="row g-3  submitForm" action="{{ route('store') }}" method="post" data-custom="GalleryModel" enctype="multipart/form-data"> @csrf 
            
            <div class="col-md-12 mt-3">
              <label class="form-label" for="inputEmailEnter">Title</label>
              <input class="form-control" required name="title" type="text" placeholder="Enter Title">
            </div>

            <div class="col-md-12 mt-3 mb-4">
              <label class="form-label" for="inputEmailEnter">Enter Image</label>
              <input class="form-control" required name="img" type="file" placeholder="Enter Image">
            </div>




            <div class="col-12 mt-2 mb-3 text-center">
              <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
              <button class="btn btn-primary" type="submit">Submit </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> 

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