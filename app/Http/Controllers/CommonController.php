<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\State;
use App\Models\Region;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function delete($id,$table){
        try {
            // Use DB facade to dynamically target the table
            $deleted = DB::table($table)->where('id', $id)->update(['is_status'=>false]);

            if ($deleted) {
                return redirect()->back()->with('success', "Data deleted successfully.");
            } else {
                return redirect()->back()->with('error', "Record not found.");
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "An error occurred while deleting the data. Please try again. " );
        }
    }
    public function update($id,$table,$status){
        try {
            $status=$status=='true'?true:false;

            // Use DB facade to dynamically target the table
            $deleted = DB::table($table)->where('id', $id)->update(['status'=>$status]);

            if ($deleted) {
                return redirect()->back()->with('success', "Status Update successfully.");
            } else {
                return redirect()->back()->with('error', "Record not found.");
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "An error occurred while deleting the data. Please try again. " );
        }
    }
    // get filter
    public function getStates($country_id)
    {
        $states = State::where('country', $country_id)->where('is_status',true)->get();
        return response()->json($states);
    }
    public function getVariety($state_id)
    {
        $variety = Region::where('state', $state_id)->where('is_status',true)->get();
        return response()->json($variety);
    }
    // search_result
    public function search_result(Request $request){
        $all=$request->all();
        echo $html='
        <div class="searchpopup-sec">
            <div class="row">
                <div class="col-md-6">
                    <div class="popup-content">
                        <div class="field-topserach">
                            <div class="row">
                                <div class="col-6 col-sm-3">
                                    <h4>Particulars</h4>
                                    <p>V1</p>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <h4>Variety Code</h4>
                                    <p>123456001</p>
                                </div>
                                <div class="col-6 col-sm-5">
                                    <h4>State</h4>
                                    <p>BIHAR, MADHYA PRADESH, UTTAR PRADESH</p>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <h4>Country</h4>
                                    <p>India</p>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <h4>Region</h4>
                                    <p>South Asia</p>
                                </div>
                                <div class="col-6 col-sm-5">
                                    <h4>Special Group</h4>
                                    <p>Aromatic rice</p>
                                </div>
                            </div>
                        </div>
                        <div class="productdt-table">
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
                        <div class="popupmsg mt-2"><a href="login.html" class="common-btn">Login to more info</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="popup-image"><img src="http://localhost/noida/v2/public/web/images/popup-image.jpg" class="img-responsive" alt=""></div>
                </div>
            </div>
        </div>
        ';
    }
}
