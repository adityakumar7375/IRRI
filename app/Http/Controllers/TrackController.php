<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\LoginLog;
use Auth;
class TrackController extends Controller
{
    public function index(Request $request){
        //  $data = LoginLog::where('user_id','!=',Auth::id())->orderBy('id','desc')->paginate(10);
        $query = LoginLog::where('user_id', '!=', Auth::id())
                    ->join('users', 'login_logs.user_id', '=', 'users.id')
                    ->select('login_logs.*', 'users.name', 'users.email','users.mobile')
                    ->orderBy('login_logs.id', 'desc');
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function($query) use ($searchTerm) {
                $query->where('users.name', 'like', "%$searchTerm%")
                    ->orWhere('users.mobile', 'like', "%$searchTerm%")
                    ->orWhere('users.email', 'like', "%$searchTerm%");
            });
        }
        $data = $query->paginate(50);
        return view('users.track.index',compact('data'));

    }
}
