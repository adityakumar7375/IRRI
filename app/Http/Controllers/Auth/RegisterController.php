<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\LoginLog;
use GuzzleHttp\Client;
class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle registration request
    public function register(Request $request)
    {
        
        // Validate the input data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:2|confirmed',
            'captcha' => 'required|captcha',
            ],[
                'captcha.captcha' => 'The captcha is invalid. Please try again.',
                'captcha.required' => 'The captcha field is required.'
            ]);


        // Create a new user and save it to the database
        User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);


        $latid= User::latest()->first()->id;

    
        $ipAddress = $request->ip();
        $ipAddress = '106.221.234.248';
        $locationData = $this->getLocationByIp($ipAddress);
        $userAgent = $request->header('User-Agent');
        $browser = $this->getBrowser($userAgent);
        $os = $this->getOperatingSystem($userAgent);
        $deviceType = $this->getDeviceType($userAgent);
        $userAgent=[
            'browser' => $browser,
            'os' => $os,
            'device_type' => $deviceType,
            'user_agent' => $userAgent
        ];

        // Store the login details (IP, location, and user agent) in the database
        LoginLog::create([
            'user_id' => $latid,
            'ip_address' => $ipAddress,
            'location' => json_encode($locationData),
            'user_agent' => json_encode($userAgent),
        ]);

        $this->sendEmail($data['email'],$latid);

        // Log the user in and redirect to dashboard
        // Auth::loginUsingId(User::latest()->first()->id);
        return redirect('/login');
    }




    
    private function getLocationByIp($ip)
    {
        
        $accessKey = '0b528fe9775073f726eabaad4570e99f';
        $client = new Client();

        $url = "http://api.ipstack.com/{$ip}?access_key={$accessKey}";

        try {
            $response = $client->get($url);
            $location = json_decode($response->getBody()->getContents(), true);
            $locationDetails = [
                'ip' => $location['ip'],               // IP address
                'city' => $location['city'],           // City
                'region' => $location['region_name'],  // Region/State
                'country' => $location['country_name'], // Country
                'zipcode' => $location['zip'],         // Pincode
                'latitude' => $location['latitude'],   // Latitude
                'longitude' => $location['longitude'], // Longitude
            ];

            return  $locationDetails;
        } catch (\Exception $e) {
            return  ['error' => 'Unable to retrieve location data'];
        }




        // 0b528fe9775073f726eabaad4570e99f
        // $client = new Client();

        // // Replace this with your API key if you're using a service like IPStack, etc.
        // $url = "https://ipinfo.io/{$ip}/json"; 

        // try {
        //     $response = $client->get($url);
        //     $location = json_decode($response->getBody()->getContents(), true);
        //     return $location;
        // } catch (\Exception $e) {
        //     // If an error occurs, return null or default data
        //     return null;
        // }
    }






      
    private function getBrowser($userAgent)
    {
        if (strpos($userAgent, 'Firefox') !== false) {
            return "Mozilla Firefox";
        } elseif (strpos($userAgent, 'Chrome') !== false) {
            return "Google Chrome";
        } elseif (strpos($userAgent, 'Safari') !== false) {
            return "Apple Safari";
        } elseif (strpos($userAgent, 'Edge') !== false) {
            return "Microsoft Edge";
        } elseif (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident') !== false) {
            return "Internet Explorer";
        }
        return "Unknown Browser";
    }

    private function getOperatingSystem($userAgent)
    {
        if (strpos($userAgent, 'Windows NT 10.0') !== false) {
            return "Windows 10";
        } elseif (strpos($userAgent, 'Windows NT 6.1') !== false) {
            return "Windows 7";
        } elseif (strpos($userAgent, 'Mac OS X') !== false) {
            return "Mac OS";
        } elseif (strpos($userAgent, 'Linux') !== false) {
            return "Linux";
        } elseif (strpos($userAgent, 'Android') !== false) {
            return "Android";
        } elseif (strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false) {
            return "iOS";
        }
        return "Unknown OS";
    }

    private function getDeviceType($userAgent)
    {
        if (strpos($userAgent, 'Mobile') !== false) {
            return "Mobile Device";
        } elseif (strpos($userAgent, 'Tablet') !== false) {
            return "Tablet";
        }
        return "Desktop";
    }



    private function sendEmail($email,$id='001'){
        $data = ['id' => $id];
        Mail::send('emails.index', $data, function ($message)  use ($email){
            $message->from('poojadesigns38@gmail.com', 'IRRI');
            $message->to($email)->subject('Thankyou for signing up with Us!');
        });
    }




}
