<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\State;
use App\Models\Country;

class LocationController extends Controller
{
    //

    public function index()
    {
        
        $data['country']=Country::where('is_status',1)->get();
        $data['state']=State::where('is_status',1)->get();
        return view('location.index',$data);
    }

    

    public function country(Request $request) 
    {
        if ($request->isMethod('post')) {
            $data = $request->only(['name',]);
            $validator = Validator::make($data, [
                'name' => ['required', 'regex:/^[a-zA-Z\s\'-]+$/'],
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'error' => 201,
                    'url'=>'',
                    'msg'=>'Please fill in all fields.'. $validator->errors(),
                    'errors' => $validator->errors()
                ]);
            }

            Country::create([
                'name' => strtoupper($request->name),
                'status' => true,
                'is_status' => true,
            ]);


            return response()->json([
                'error' => 200,
                'url'=>'location',
                'msg'=>'Create Successfully',
            ]);

        }
        return response()->json([
            'error' => 201,
            'url'=>'',
            'msg'=>'Only Post Method allow',
        ]);
    }


    public function state(Request $request) 
    {
        if ($request->isMethod('post')) {
            $data = $request->only(['state','country']);
            $validator = Validator::make($data, [
                'country' => ['required', 'regex:/^[a-zA-Z\s\'-]+$/'],
                'state' => ['required', 'regex:/^[a-zA-Z\s\'-]+$/'],
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'error' => 201,
                    'url'=>'',
                    'msg'=>'Invalid Data ',
                    'errors' => $validator->errors()
                ]);
            }
            State::create([
                'country' => strtoupper($data['country']),
                'state' => strtoupper($data['state']),
                'status' => true,
                'is_status' => true,
            ]);
            return response()->json([
                'error' => 200,
                'url'=>'location',
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
