<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery;
use App\Models\State;
use App\Models\Country;
use App\Models\Region;
use App\Models\VarietyCode;

class WebController extends Controller
{
    public function index(){
        $data['variety']=VarietyCode::where('is_status',1)->get();
        $data['country']=Country::where('is_status',1)->get();
        return view('web.home.index',$data);

    }
    public function about(){

        return view('web.about.index');

    }

    public function whatwedo(){

        return view('web.what.index');

    }

    public function results(){

         if(empty(Auth::user()->id)){
             return redirect()->route('login');
        }
        return view('web.results.index');

    }

    public function biofortification(){

        return view('web.bio.index');

    }

    public function interative_map(){

        $data['country']=Country::where('is_status',1)->get();
        $data['state']=State::where('is_status',1)->get();
        return view('web.interative.index',$data);

    }

    public function getStates(Request $request)
    {
        $countryId = $request->input('country_id');
        $states = State::where('country', $countryId)->get();

        return response()->json(['states' => $states]);
    }

    public function gallery(){

        $images = Gallery::paginate(50);
        return view('web.gallery.index', compact('images'));
        // return view('web.gallery.index');

    }




}
