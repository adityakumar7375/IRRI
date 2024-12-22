<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\LoginLog;
use Illuminate\Support\Facades\Auth;
use Hash;
class ProfileController extends Controller
{
    public function index()
    {
        $data = LoginLog::where('user_id',Auth::id())->orderBy('id','desc')->paginate(10);
        return view('profile.index', compact('data'));
    }

    public function updatePassword(Request $request)
    {
        // Validate the request
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Check if the old password matches the authenticated user's password
        $user = Auth::user();
        if (!Hash::check($request->old_password, $user->password)) {
            // Return an error message if the old password does not match
            return redirect()->back()->with('error', 'The provided old password is incorrect.');
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Return a success message
        return redirect()->back()->with('status', 'Password updated successfully.');
    }
}
