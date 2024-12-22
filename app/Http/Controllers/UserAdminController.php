<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAdminController extends Controller
{
    public function index(Request $request){

        // $users = User::where('type','user')->orderBy('id','desc')->paginate(50);
        $query = User::where('type', 'user')->orderBy('id', 'desc');
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function($query) use ($searchTerm) {
                $query->where('name', 'like', "%$searchTerm%")
                    ->orWhere('mobile', 'like', "%$searchTerm%")
                    ->orWhere('email', 'like', "%$searchTerm%");
            });
        }
        $users = $query->paginate(50);
        return view('users.user.index',compact('users'));

    }
}
