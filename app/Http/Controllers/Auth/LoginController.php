<?php


namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\LoginLog;
use GuzzleHttp\Client;
class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login request
    public function login(Request $request)
    {
       
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            

            $ipAddress = $request->ip();

            // Get the user's location based on the IP address
            $locationData = $this->getLocationByIp($ipAddress);

            // Get the User-Agent string (browser and OS details)
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
                'user_id' => Auth::id(),
                'ip_address' => $ipAddress,
                'location' => json_encode($locationData),
                'user_agent' => json_encode($userAgent),
            ]);
            
            $data=Auth::user();
           
            if($data->type=='admin'){
               return redirect()->intended('/dashboard')->with('success', 'Welcome back!');
            }
            return redirect()->intended('/results')->with('success', 'Welcome back!');
        }

        return back()->withErrors([
                'email' => 'These credentials do not match our records.',
            ])
            ->withInput()
            ->with('error', 'Login failed! Please check your credentials.');
    }

    // Handle logout request
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }




    // start



    private function getLocationByIp($ip)
    {
        
        $ip = '180.151.225.162';
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





}
