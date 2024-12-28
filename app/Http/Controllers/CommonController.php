<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\State;
use App\Models\Region;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\SearchHistory;
use GuzzleHttp\Client;
use App\Models\RiceData;

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
    // map_search_result



    public function map_search_result(Request $request){
        if(empty($request->country)){
            $data['data'] = 'Not found';
            
            //  $data['data']=RiceData::select('id','state')->first();
            return response()->json($data);
        }else{
            // $data['data']=RiceData::select('id','state')->first();
            $query = RiceData::query();

            if ($request->has('country') && !empty($request->country)) {
                $query->whereRaw('UPPER(country) = ?', [strtoupper($request->country)]);
            }
            
            if ($request->has('state') && !empty($request->state)) {
                $states = explode(',', strtoupper($request->state)); // Split if multiple states are provided
                foreach ($states as $state) {
                    $query->whereRaw("FIND_IN_SET(UPPER(?), UPPER(state))", [trim($state)]);
                }
            }
            
            if ($request->has('variety') && !empty($request->variety)) {
                $query->whereRaw('UPPER(variety_code) = ?', [strtoupper($request->variety)]);
            }

            if ($request->has('region') && !empty($request->region)) {
                $query->whereRaw('UPPER(region) = ?', [strtoupper($request->region)]);
            }

            if ($request->has('location') && !empty($request->location)) {
                $query->where('special_group', $request->location);
            }
            
            // Get the filtered data
            $results = $query->get();
            $statesArray = $results->pluck('state')->toArray();

            // Flatten the array if the states are stored as comma-separated values
            $mergedStates = [];
            foreach ($statesArray as $stateList) {
                $stateItems = explode(',', $stateList);
                $mergedStates = array_merge($mergedStates, array_map('trim', $stateItems));
            }

            $uniqueStates = array_unique($mergedStates);

            // If you want to reset the array keys (optional)
            $uniqueStates = array_values($uniqueStates);

            $data['data'] = $uniqueStates;
            
            //  $data['data']=RiceData::select('id','state')->first();
            return response()->json($data);
            
        }
    }




    // search_result
    public function search_result(Request $request){

        $all=$request->all();

        $ipAddress = $request->ip();
        $locationData = $this->getLocationByIp($ipAddress);
        $userAgent = $request->header('User-Agent');
        $browser = $this->getBrowser($userAgent);
        $os = $this->getOperatingSystem($userAgent);
        $deviceType = $this->getDeviceType($userAgent);
        $userAgent=[
            'browser' => $browser,
            'os' => $os,
            'device_type' => $deviceType,
            'user_agent' => $userAgent
        ];

        SearchHistory::create([
            'search_by' => Auth::user()->id??$ipAddress,
            'search' => json_encode($all),
            'location' => json_encode($locationData),
            'system' => json_encode($userAgent),
        ]);






        $html='
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
                        </div>';
                        if(!empty(Auth::user()->id)){
                            $html.='<div class="popupmsg mt-2"><a href="results" class="common-btn">View full details</a></div>';
                        }else{
                            $html.='<div class="popupmsg mt-2"><a href="login" class="common-btn">Login to more info</a></div>';
                        }
                        
                       
                    $html.='</div>
                </div>
                <div class="col-md-6">
                    <div class="popup-image"><img src="http://localhost/noida/v2/public/web/images/popup-image.jpg" class="img-responsive" alt=""></div>
                </div>
            </div>
        </div>
        ';

        echo $html;
    }





    

    private function getLocationByIp($ip)
    {
        
        $ip = '180.151.225.162';
        $accessKey = '0b528fe9775073f726eabaad4570e99f';
        $client = new Client();

        $url = "http://api.ipstack.com/{$ip}?access_key={$accessKey}";

        try {
            $response = $client->get($url);
            $location = json_decode($response->getBody()->getContents(), true);
            $locationDetails = [
                'ip' => $location['ip'],               // IP address
                'city' => $location['city'],           // City
                'region' => $location['region_name'],  // Region/State
                'country' => $location['country_name'], // Country
                'zipcode' => $location['zip'],         // Pincode
                'latitude' => $location['latitude'],   // Latitude
                'longitude' => $location['longitude'], // Longitude
            ];

            return  $locationDetails;
        } catch (\Exception $e) {
            return  ['error' => 'Unable to retrieve location data'];
        }




        // 0b528fe9775073f726eabaad4570e99f
        // $client = new Client();

        // // Replace this with your API key if you're using a service like IPStack, etc.
        // $url = "https://ipinfo.io/{$ip}/json"; 

        // try {
        //     $response = $client->get($url);
        //     $location = json_decode($response->getBody()->getContents(), true);
        //     return $location;
        // } catch (\Exception $e) {
        //     // If an error occurs, return null or default data
        //     return null;
        // }
    }





        
    private function getBrowser($userAgent)
    {
        if (strpos($userAgent, 'Firefox') !== false) {
            return "Mozilla Firefox";
        } elseif (strpos($userAgent, 'Chrome') !== false) {
            return "Google Chrome";
        } elseif (strpos($userAgent, 'Safari') !== false) {
            return "Apple Safari";
        } elseif (strpos($userAgent, 'Edge') !== false) {
            return "Microsoft Edge";
        } elseif (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident') !== false) {
            return "Internet Explorer";
        }
        return "Unknown Browser";
    }

    private function getOperatingSystem($userAgent)
    {
        if (strpos($userAgent, 'Windows NT 10.0') !== false) {
            return "Windows 10";
        } elseif (strpos($userAgent, 'Windows NT 6.1') !== false) {
            return "Windows 7";
        } elseif (strpos($userAgent, 'Mac OS X') !== false) {
            return "Mac OS";
        } elseif (strpos($userAgent, 'Linux') !== false) {
            return "Linux";
        } elseif (strpos($userAgent, 'Android') !== false) {
            return "Android";
        } elseif (strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false) {
            return "iOS";
        }
        return "Unknown OS";
    }

    private function getDeviceType($userAgent)
    {
        if (strpos($userAgent, 'Mobile') !== false) {
            return "Mobile Device";
        } elseif (strpos($userAgent, 'Tablet') !== false) {
            return "Tablet";
        }
        return "Desktop";
    }




}
