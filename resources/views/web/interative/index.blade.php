
@extends('layout.web')
@section('content')
<div class="intermap-filter">
    <div class="container">
        <!-- <form action="" class="mapfilter-field" name="cform" method="post"> -->
      <form action="" class="mapfilter-field" name="" method="post" id="ResultForm">
            <div class="row g-1 align-items-end">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
              <div class="form-group">                                    
                <label for="">Search by Country</label>
                <select class="form-control" aria-label="Default select example" name="country" id="countrySelect">
                  <option value="" >Select</option>
                  @foreach($country as $list)
                  <option>{{$list->name}}</option>
                  @endforeach
                </select>
              </div>                               
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">                               
              <div class="form-group">
                <label for="">Search by State</label>                                    
                <select class="form-control" aria-label="Default select example" name="state" id="stateSelect">
                  <option value=""  >Select</option>
                </select>
              </div>                                
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">                               
              <div class="form-group">   
                <label for="">Search by Variety</label>                                
                <!-- <input type="text" name="phone" id="phone" class="form-control"> -->
                 <select class="form-control" id="country" name="variety"  aria-label="Default select example">
											<option  value="">Select</option>
											@foreach($variety as $list)
											<option value="{{ $list->variety_code }}">{{ $list->name }}</option>
											@endforeach
									</select>
              </div>
            </div>		
    
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
              <div class="form-group">
                <label for="">Search by Region</label>                                    
                <select class="form-control" name="region" id="region"  aria-label="Default select example">
                  <option value="" selected="">Select</option>
                  <!-- <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option> -->
                </select>
              </div>                               
            </div>
    
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
              <div class="form-group">
                <label for="">Search by Special Group</label>                                    
                <input type="text" value="" id="" name="location" class="form-control" >
              </div>                               
            </div>
            
            
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
              <div class="form-group">
                <input type="submit" name="submit" class="btn common-btn ms-1" id="submit_btn" value="Get Result"></div>                             
            </div>
    
            </div>
          
        </form>
    </div>
</div>

<div class="intermap-livemap">

    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d57346486.09699869!2d70.9714001048296!3d28.685107200000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1732731641922!5m2!1sen!2sin"  height="500" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
      <div id="map" style="height:900px;width:100%"></div>
    

</div>

@endsection 
@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVY2Nm3XIh-_UbGpit53X_nY7LIuI9nwo&callback=initMap&libraries=&v=weekly" async defer></script>
  
<script>
      // Initialize the map
      






      // state

      $(document).ready(function() {
        // When country is changed
        $('#countrySelect').change(function() {
            var countryId = $(this).val();
            
            // Check if a valid country is selected
            if(countryId) {
                $.ajax({
                    url: "{{url('get-states')}}",
                    method: 'GET',
                    data: { country_id: countryId },
                    success: function(data) {
                        // Clear the previous options
                        $('#stateSelect').html('<option selected="">Select</option>');
                        
                        // Populate the states dropdown with the new options
                        $.each(data.states, function(key, value) {
                            $('#stateSelect').append('<option value="'+ value.state +'">'+ value.state +'</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching states:', error);
                    }
                });
            } else {
                // If no country is selected, reset the states dropdown
                $('#stateSelect').html('<option selected="">Select</option>');
            }
        });
    });

    $('#stateSelect').on('change', function() {
          var stateId = $(this).val();
          if (stateId) {
              $.ajax({
                  url: "{{url('get-variety')}}/" + stateId,
                  type: 'GET',
                  success: function(data) {
                      $('#region').empty();
                      $('#region').append('<option selected disabled value="">Choose...</option>');
                      $.each(data, function(key, value) {
                          $('#region').append('<option value="' + value.name + '">' + value.name + '</option>');
                      });
                  }
              });
          } else {
              $('#region').empty();
              $('#region').append('<option selected disabled value="">Choose...</option>');
          }
      });

      document.getElementById('ResultForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const form = e.target;
        const formData = new FormData(this);
        
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

        $.ajax({
          url: "{{ url('map-search-result') }}",
          method: "POST",
          data: formData,
          processData: false,
          contentType: false,
          success: function (response) {
            // response.data && response.data.state
            console.log(response.data);
            // const states = response.data.state.split(',');
            renderStates(response.data);
          },
          error: function (xhr, status, error) {
            $("#searchModal .modal-body").html('Invalid');
          },
        });
        
      });





    //  renderStates

    let map;

    function initMap() {
        const initialZoom = 5; // Initial zoom level

        // Create a new map centered on India
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 20.5937, lng: 78.9629 }, // Center on India
            zoom: initialZoom, // Apply the initial zoom level
            minZoom: 4,
        });
    }

    function getRandomColor() {
        // Generate a random hex color
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    function renderStates(states) {
        
        const stateColors = {};
        states.forEach(state => {
            stateColors[state] = getRandomColor();
        });
        
        fetch('Storage/app/private/Indian_States')
            .then(response => response.json())
            .then(data => {
                const stateLayer = new google.maps.Data();
                if (window.stateLayer) {
                    window.stateLayer.setMap(null);
                }
                // Add the GeoJSON data to the map
                stateLayer.addGeoJson(data);

                // Style the polygons based on the state name
                stateLayer.setStyle(function(feature) {
                    // Log the feature to check its structure
                    const stateName = feature.getProperty('NAME_1');  // Assuming the name of the state is under the property 'NAME_1'
                    // console.log('State Name:', stateName);  // Log the state name for debugging
                    const normalizedStateName = stateName.toUpperCase();
                    // Apply color based on state name, default to gray if not found in the color map
                    const color = stateColors[normalizedStateName] || '#f2f2f2';  

                    return {
                        fillColor: color,
                        fillOpacity: 0.4,
                        strokeColor: 'black',
                        strokeWeight: 2
                    };
                });

                // Set the map to display the state boundaries
                stateLayer.setMap(map);
                window.stateLayer = stateLayer;
            })
            .catch(error => {
                console.error("Error fetching GeoJSON data: ", error);
            });
    }

    </script>
@endsection 