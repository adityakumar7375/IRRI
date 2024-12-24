@extends('layout.app') 
@section('css')
<style>
   .h4{
   font-size:10px !important;
   }
</style>
@endsection
@section('content') 
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
               <li class="breadcrumb-item active"> Details</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <!-- Top Section (Left side Image and Right side Details) -->
        <div class="col-12">
            <div class="card p-3">
                <div class="row">
                    <div class="col-md-7">
                        <div class="resulttop-left">
                            <h2>Kalanamak Rice</h2>
                            <hr>
                            <div class="result-pic">
                                <img src="http://localhost/noida/v2/public/web/images/result-1.jpg" class="img-fluid" alt="Rice Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="resulttop-right">
                            <h2>Result</h2>
                            <hr>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Particulars</th>
                                        <td>V1</td>
                                    </tr>
                                    <tr>
                                        <th>Variety Code</th>
                                        <td>123456001</td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td>BIHAR, MADHYA PRADESH, UTTAR PRADESH</td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <th>Region</th>
                                        <td>South Asia</td>
                                    </tr>
                                    <tr>
                                        <th>Special Group</th>
                                        <td>Aromatic rice</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Milling Properties Section -->
        <div class="col-12">
            <div class="card p-3">
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
                </div>
            </div>
        </div>

        <!-- Texture Analyzer (Mouth Feel) Section -->
        <div class="col-12">
            <div class="card p-3">
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
        </div>

        <!-- Pasting Properties (RVA Analysis) Section -->
        <div class="col-12">
            <div class="card p-3">
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
        </div>

        <!-- Cooking Properties Section -->
        <div class="col-lg-6 mt-5">
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

        <!-- Chemical Properties Section -->
        <div class="col-lg-6 mt-5">
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

        <!-- Minerals Data Section -->
        <div class="col-12 mt-5">
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

        <!-- GPC and Aroma Data Section -->
        <div class="col-12 mt-5">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th colspan="9">GPC and Aroma Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tbl-bold">
                            <td>GPC (mg/g, Brown Rice)</td>
                            <td>Aroma (ppm, Brown Rice)</td>
                            <td>Mass GPC in Aromatic Rice (mg/g)</td>
                            <td>Ratio</td>
                        </tr>
                        <tr>
                            <td>12.93</td>
                            <td>5.17</td>
                            <td>17.47</td>
                            <td>2.3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection