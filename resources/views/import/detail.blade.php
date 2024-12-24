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
            <h4>CSV Details</h4>
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
               <li class="breadcrumb-item active">CSV Details</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<!-- Container-fluid starts-->
<div class="container">

			<div class="resulttop-cols">
				<div class="row">

					<div class="col-md-7">
					  <div class="resulttop-left">
						<h2>Kalanamak Rice</h2>
						<div class="result-pic"><img src="{{asset('public/web')}}/images/result-1.jpg" alt=""></div>
					  </div>
					</div>

					<div class="col-md-5">
						<div class="resulttop-right">
							<h2>Result</h2>
							<div class="field-topserach">
								<div class="row">
								  <div class="col-6 col-sm-6"><h4>Particulars</h4><p>V1</p></div>
								  <div class="col-6 col-sm-6"><h4>Variety Code</h4><p>123456001</p></div>
								  <div class="col-12"><h4>State</h4><p>BIHAR, MADHYA PRADESH, UTTAR PRADESH</p></div>
								  <div class="col-6 col-sm-4"><h4>Country</h4><p>India</p></div>
								  <div class="col-6 col-sm-4"><h4>Region</h4><p>South Asia</p></div>
								  <div class="col-6 col-sm-4"><h4>Special Group</h4><p>Aromatic rice</p></div>
								</div>
							  </div>
						</div>
					</div>

				</div>
			</div>

			
			
			<div class="result-tables">
				  <div class="productdt-table">

					<div class="row">

					<div class="col-lg-6">
					  <div class="table-responsive">
						<table class="table table-bordered">
							<thead class="table-light">
							<tr>
								<th colspan="3">Milling Properties</th>
							</tr>
							</thead>
							<tbody>
							
							<tr class="tbl-bold">
								<td>Hulling %</td>
								<td>Milling %</td>
								<td>HRR</td>
							</tr>
							
							<tr>
							  <td>74.80</td>
							  <td>67.80</td>
							  <td>66.30</td>
							</tr>
							
							</tbody>
						</table>
					  </div>
					</div>
  
					<div class="col-lg-6">
					  <div class="table-responsive">
					  <table class="table table-bordered">
						  <thead class="table-light">
						  <tr>
							  <th colspan="4">Physical Properties</th>
						  </tr>
						  </thead>
						  <tbody>
						  
						  <tr class="tbl-bold">
							  <td>Length (mm)</td>
							  <td>Breadth (mm)</td>
							  <td>L/B ratio</td>
							  <td>Av. Chalky (%)</td>
						  </tr>
						  
						  <tr>
							<td>4.08</td>
							<td>1.76</td>
							<td>2.32</td>
							<td>0.55</td>
						  </tr>
						  
						  </tbody>
					  </table>
				  	  </div>
					</div>

					<div class="col-lg-5">
						<div class="table-responsive">
						  <table class="table table-bordered">
							  <thead class="table-light">
							  <tr>
								  <th colspan="3">Chemical Properties</th>
							  </tr>
							  </thead>
							  <tbody>
							  
							  <tr class="tbl-bold">
								  <td>Amylose % (Average)</td>
								  <td>(ASV) AVERAGE</td>
								  <td>Gel Consistency</td>
							  </tr>
							  
							  <tr>
								<td>21.31</td>
								<td>6</td>
								<td>30</td>
							  </tr>
							  
							  </tbody>
						  </table>
						</div>
					  </div>

					  <div class="col-lg-7">
						<div class="table-responsive">
						  <table class="table table-bordered">
							  <thead class="table-light">
							  <tr>
								  <th colspan="7">Texture Analyzer (Mouth Feel)</th>
							  </tr>
							  </thead>
							  <tbody>
							  
							  <tr class="tbl-bold">
								  <td>Hardness</td>
								  <td>Adhesiveness</td>
								  <td>Springiness</td>
								  <td>Cohesiveness</td>
								  <td>Gumminess</td>
								  <td>Chewiness</td>
								  <td>Resilience</td>

							  </tr>
							  
							  <tr>
								<td>1913.964</td>
								<td>-52.079</td>
								<td>0.57</td>
								<td>0.45</td>
								<td>856.974</td>
								<td>490.991</td>
								<td>0.274</td>
							  </tr>
							  
							  </tbody>
						  </table>
						</div>
					  </div>

					  <div class="col-lg-7">
						<div class="table-responsive">
						  <table class="table table-bordered">
							  <thead class="table-light">
							  <tr>
								  <th colspan="7">Pasting properties (RVA analysis)</th>
							  </tr>
							  </thead>
							  <tbody>
							  
							  <tr class="tbl-bold">
								  <td>PEAK VISCOSITY (cP)</td>
								  <td>TROUGH VISCOSITY (cP)</td>
								  <td>BREAKDOWN VISCOSITY (cP)</td>
								  <td>FINAL VISCOSITY (cP)</td>
								  <td>SETBACK VISCOSITY (cP)</td>
								  <td>PEAK TIME (minutes)</td>
								  <td>PASTING TEM.</td>

							  </tr>
							  
							  <tr>
								<td>2232</td>
								<td>1438</td>
								<td>794</td>
								<td>4169</td>
								<td>1937</td>
								<td>6.07</td>
								<td>87.05</td>
							  </tr>
							  
							  </tbody>
						  </table>
						</div>
					  </div>

					  <div class="col-lg-4">
						<div class="table-responsive">
						  <table class="table table-bordered">
							  <thead class="table-light">
							  <tr>
								  <th colspan="3">Cooking Properties</th>
							  </tr>
							  </thead>
							  <tbody>
							  
							  <tr class="tbl-bold">
								  <td>Kernel length after cooking (mm)</td>
								  <td>Kernel breadth after cooking (mm)</td>
								  <td>Elongation Ratio</td>
							  </tr>
							  
							  <tr>
								<td>8.32</td>
								<td>3.81</td>
								<td>2.03</td>
							  </tr>
							  
							  </tbody>
						  </table>
						</div>
					  </div>

					  <div class="col-lg-1">
						<div class="table-responsive">
						  <table class="table table-bordered">
							  <thead class="table-light">
							  <tr>
								  <th>Aroma (ppb)</th>
							  </tr>
							  </thead>
							  <tbody>

								<tr class="tbl-bold">
									<td>&nbsp;</td>
								  </tr>
							  
							  <tr>
								<td>236.46</td>
							  </tr>
							  
							  </tbody>
						  </table>
						</div>
					  </div>

					  <div class="col-lg-12">
						<div class="table-responsive">
						  <table class="table table-bordered">
							  <thead class="table-light">
							  <tr>
								  <th colspan="13">Minerals Data</th>
							  </tr>
							  </thead>
							  <tbody>
							  
							  <tr class="tbl-bold">
								  <td>Mg (ppm, Brown rice)</td>
								  <td>P (ppm, Brown rice)</td>
								  <td>K (ppm, Brown rice)</td>
								  <td>Mn (ppm, Brown rice)</td>
								  <td>Fe (ppm, Brown rice)</td>
								  <td>Co (ppm, Brown rice)</td>
								  <td>Cu (ppm, Brown rice)</td>
								  <td>Zn (ppm, Brown rice)</td>
								  <td>As (ppm, Brown rice)</td>
								  <td>Se (ppm, Brown rice)</td>
								  <td>Mo (ppm, Brown rice)</td>
								  <td>Cd (ppm, Brown rice)</td>
								  <td>Pb (ppm, Brown rice)</td>

							  </tr>
							  
							  <tr>
								<td>1541.74</td>
								  <td>3145.68</td>
								  <td>2692.09</td>
								  <td>12.13</td>
								  <td>11.37</td>
								  <td>0</td>
								  <td>3.4</td>
								  <td>17.34</td>
								  <td>0.06</td>
								  <td>0.23</td>
								  <td>0.97</td>
								  <td>0.09</td>
								  <td>0.03</td>
							  </tr>
							  
							  </tbody>
						  </table>
						</div>
					  </div>

					  <div class="col-lg-6">
						<div class="table-responsive">
						  <table class="table table-bordered">
							  <thead class="table-light">
							  <tr>
								  <th colspan="7">GPC</th>
							  </tr>
							  </thead>
							  <tbody>
							  
							  <tr class="tbl-bold">
								  <td>AM1 (%)</td>
								  <td>AM2 (%)</td>
								  <td>MCAP (%)</td>
								  <td>SCAP (%)</td>
								  <td>SCAP1 (%)</td>
								  <td>SCAP2 (%)</td>
								  <td>SCAP3 (%)</td>

							  </tr>
							  
							  <tr>
								<td>11.90</td>
								<td>5.50</td>
								<td>31.10</td>
								<td>51.40</td>
								<td>26.60</td>
								<td>23.70</td>
								<td>1.10</td>
							  </tr>
							  
							  </tbody>
						  </table>
						</div>
					  </div>

					  <div class="col-lg-3">
						<div class="table-responsive">
						  <table class="table table-bordered">
							  <thead class="table-light">
							  <tr>
								  <th colspan="3">GI</th>
							  </tr>
							  </thead>
							  <tbody>
							  
							  <tr class="tbl-bold">
								  <td>TS (%)</td>
								  <td>TS DWB (%)</td>
								  <td>GI</td>
							  </tr>
							  
							  <tr>
								<td>70.03</td>
								<td>79.85</td>
								<td>56.60</td>
							  </tr>
							  
							  </tbody>
						  </table>
						</div>
					  </div>

					  <div class="col-lg-3">
						<div class="table-responsive">
						  <table class="table table-bordered">
							  <thead class="table-light">
							  <tr>
								  <th colspan="2">Bioactives</th>
							  </tr>
							  </thead>
							  <tbody>
							  
							  <tr class="tbl-bold">
								  <td>Flavonoid (mg/100g)</td>
								  <td>Phenolics (mg/100g)</td>
							  </tr>
							  
							  <tr>
								<td>8.08</td>
								<td>171.85</td>
							  </tr>
							  
							  </tbody>
						  </table>
						</div>
					  </div>


				</div><!--row-->
  
				</div><!--productdt-table-->
			</div><!--result-tables-->

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