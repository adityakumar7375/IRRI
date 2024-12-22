<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::paginate(10);
        return view('gallery.index', compact('images'));
    }

    

    public function store(Request $request)
    {
        
        if ($request->isMethod('post')) {
            $data = $request->only(['img']);
            $validator = Validator::make($data, [
                'img' => 'required',
            ]);
    
            
            if ($validator->fails()) {
                return response()->json([
                    'error' => 401,
                    'msg' => 'Please fill in all fields.',
                    'errors' => $validator->errors()
                ]);
            }
    
            $imgurl = '';
            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $imgurl = $file->store('gallery', 'public');
            }
            Gallery::create([
                'img' => 'app/public/'.$imgurl,
                'status' => true,
                'is_status' => true,
            ]);
    
            // Return success response
            return response()->json([
                'error' => 200,
                'url' => route('gallery.index'),
                'msg' => 'Created Successfully',
            ]);
        }
    
        
        return response()->json([
            'error' => 401,
            'msg' => 'Only POST method is allowed',
        ]);
    }














}
