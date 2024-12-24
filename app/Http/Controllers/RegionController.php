<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Region;
use App\Models\State;
use App\Models\Country;

class RegionController extends Controller
{
    //region

    public function index()
    {
        $data['country']=Country::where('is_status',1)->get();
        $data['state']=State::where('is_status',1)->get();
        $data['region']=Region::where('is_status',1)->get();
        return view('region.index',$data);
    }

    
    public function store(Request $request) 
    {
        if ($request->isMethod('post')) {
            $data = $request->only(['name','state','country']);
            $validator = Validator::make($data, [
                'name' => 'required',
                'country' => 'required',
                'state' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'error' => 201,
                    'url'=>'',
                    'msg'=>'Invalid Data ',
                    'errors' => $validator->errors()
                ]);
            }
            Region::create([
                'name' => strtoupper($data['name']),
                'country' => strtoupper($data['country']),
                'state' => strtoupper($data['state']),
                'status' => true,
                'is_status' => true,
            ]);
            return response()->json([
                'error' => 200,
                'url'=>'region',
                'msg'=>'Create Successfully',
            ]);
        }
        return response()->json([
            'error' => 201,
            'url'=>'',
            'msg'=>'Only Post Method allow',
        ]);
    }
   


}
