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

    public function index(Request $request,$id='')
    {


        $data['country']=Country::where('is_status',1)->get();
        // $data['state']=State::where('is_status',1)->get();
        
        if(!empty($id)){
            $data['update']=Region::where('id',$id)->first();
            $data['state']=State::where('country',$data['update']->country)->get();
        }
         
        // echo "<pre>";
        // var_dump($data);
        // die;
       
        $search = $request->input('search'); // Get search term from input

        $data['region'] = Region::where('is_status', 1)
            ->when($search, function ($query, $search) {
                $query->where('state', 'like', "%$search%")
                    ->orWhere('country', 'like', "%$search%")
                    ->orWhere('name', 'like', "%$search%");
            })
            ->orderBy('id', 'desc')
            ->paginate(50);


        return view('region.index',$data);

    }

    
    public function store(Request $request) 
    {
        if ($request->isMethod('post')) {
            $data = $request->only(['id','name','state','country']);
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
            
            if(!empty($data['id'])){
                $region = Region::find($data['id']);
                if ($region) {
                    $region->update([
                        'name' => strtoupper($data['name']),
                        'country' => strtoupper($data['country']),
                        'state' => strtoupper($data['state']),
                    ]);
                    return response()->json([
                        'error' => 200,
                        'url'=>url('region'),
                        'msg'=>'Update Successfully',
                    ]);
                } else {
                    return response()->json([
                        'error' => 201,
                        'url'=>'',
                        'msg'=>'Invalid Id',
                    ]);
                }
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
                'url'=>url('region'),
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
