<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\VarietyCode;

class VarietyCodeController extends Controller
{
    public function index(Request $request,$id='')
    {

        if(!empty($id)){
            $data['update']=VarietyCode::where('id',$id)->first();
        }
       $search = $request->input('search'); // Get the search input from the request

        $data['variety'] = VarietyCode::where('is_status', 1)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'LIKE', '%' . $search . '%')
                            ->orWhere('variety_code', 'LIKE', '%' . $search . '%');
            })
            ->get();

        return view('variety.index',$data);
    }

    
    public function store(Request $request)
    {
        
        if ($request->isMethod('post')) {
            $data = $request->only(['id','name','variety_code','img']);
            $validator = Validator::make($data, [
                'name' => 'required',
                'variety_code' => 'required',
                // 'img' => 'required',
            ]);
    
            
            if ($validator->fails()) {
                return response()->json([
                    'error' => 201,
                    'msg' => 'Please fill in all fields.',
                ]);
            }

    
            $imgurl = '';
            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $imgurl = $file->store('variety', 'public');
            }

            if (!empty($data['id'])) {
                
                $variety = VarietyCode::find($data['id']);

                if ($variety) {
                    $variety->update([
                        'name' => strtoupper($data['name']),
                        'variety_code' => strtoupper($request->variety_code),
                        'img' => $imgurl ? 'app/public/' . $imgurl : $variety->img,
                    ]);
                    return response()->json([
                        'error' => 200,
                        'url'=>url('variety/code'),
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

            
            if (VarietyCode::where('variety_code', strtoupper($request->variety_code))->exists()) {
                return response()->json([
                    'error' => 201,
                    'msg' => 'The variety code already exists.',
                ]);
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
