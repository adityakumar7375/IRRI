<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Hash;
class UserController extends Controller
{
    
    public function login(){

        if(!empty(Auth::user()->id)){
             return redirect()->route('my-profile');
        }
        return view('web.account.login');

    }

    public function change_password(){

        if(!empty(Auth::user()->id)){
            return view('web.account.change-password');
        }
         return redirect()->route('login');

    }


    public function update_password(Request $request){

        if(empty(Auth::user()->id)){
             return redirect()->route('login');
        }
        
        $validated = $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',  // Ensure the new password matches confirmation
        ]);

        // Check if the current password is correct
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the password
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        // Return success message
        return back()->with('success', 'Password updated successfully!');


    }







    public function my_profile(){

        if(!empty(Auth::user()->id)){
            return view('web.account.my-profile');
        }
         return redirect()->route('login');

    }
    public function update_account(Request $request){

        if(empty(Auth::user()->id)){
            return redirect()->route('login');
        }


        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'nullable|string|max:15',  // Adjust validation rules as per your need
            'country' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
        ]);

        
        $user = Auth::user();
        $user->name = $validated['name'];
        $user->last_name = $validated['last_name'];
        $user->mobile = $validated['mobile'];
        $user->country = $validated['country'];
        $user->state = $validated['state'];
        $user->save();

        return back()->with('success', 'Profile updated successfully!');


    }




    public function forgot_password(){

        return view('web.account.forgot-password');

    }



    public function sign_up(){
        if(!empty(Auth::user()->id)){
            
        }
        return view('web.account.sign-up');

    }

    // forgot_password_validate

    public function sendResetLink(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.exists' => 'This email is not registered.',
        ]);
        
        // Generate a new password
        $new_password = Str::random(8);

        // Fetch the user and update the password securely
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($new_password); // Hash the password before saving
        $user->save();

        // Prepare email data
        $email = $user->email;
        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'new_password' => $new_password, // Include the new password in the email
        ];

        // Send the reset email
        Mail::send('emails.forget', $data, function ($message) use ($email) {
            $message->from('poojadesigns38@gmail.com', 'IRRI');
            $message->to($email)->subject('Your Password Has Been Reset');
        });
        
        return back()->with('success', 'New password generated and sent successfully.');
    }


    
    



}
