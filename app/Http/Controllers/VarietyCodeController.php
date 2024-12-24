<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\VarietyCode;

class VarietyCodeController extends Controller
{
    public function index()
    {
        $data['variety']=VarietyCode::where('is_status',1)->get();
        return view('variety.index',$data);
    }

    
    public function store(Request $request)
    {
        
        if ($request->isMethod('post')) {
            $data = $request->only(['name','variety_code','img']);
            $validator = Validator::make($data, [
                'name' => 'required',
                'variety_code' => 'required',
                'img' => 'required',
            ]);
    
            
            if ($validator->fails()) {
                return response()->json([
                    'error' => 201,
                    'msg' => 'Please fill in all fields.',
                ]);
            }

            if (VarietyCode::where('variety_code', strtoupper($request->variety_code))->exists()) {
                return response()->json([
                    'error' => 201,
                    'msg' => 'The variety code already exists.',
                ]);
            }
    
            $imgurl = '';
            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $imgurl = $file->store('variety', 'public');
            }
            VarietyCode::create([
                'name' =>strtoupper($request->name),
                'variety_code' => strtoupper($request->variety_code),
                'img' => 'app/public/'.$imgurl,
                'status' => true,
                'is_status' => true,
            ]);
    
            // Return success response
            return response()->json([
                'error' => 200,
                'url' => route('variety.code'),
                'msg' => 'Created Successfully',
            ]);
        }
    
        
        return response()->json([
            'error' => 201,
            'msg' => 'Only POST method is allowed',
        ]);
    }






}
