<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Customer;
use App\Models\SuperAgent;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DateTime;
use Laravel\Socialite\Facades\Socialite;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    public function create2(){
       
           $data['user']=Auth::user();
      
         
        return view('auth.register2',$data);
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        
        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }




    public function store2(Request $request)
    {
        
        $user = Auth::user();
       
        if($request->profile_image){
            $request->validate([
                'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName =time().'.'.$request->profile_image->extension();  
     
        $request->profile_image->move(public_path('profile_images'), $imageName);
       
        User::where('email',$user->email)->update([
        'profile_image'=>$imageName,
        ]);
      
        }
        
        $request->validate([            
            'name' => 'required|string|min:3|max:25',
            'phone_number' => 'required|string|min:10|max:15',
            'city' => 'required|string|min:2|max:30',
            'country' => 'required|string|min:2|max:30',
            'state' => 'required|string|min:2|max:20',
        ]);
        
        User::where('email',$user->email)->update([
        'phone_number' => $request->phone_number,
        'name' => $request->name,
        'city' => $request->city,
        'state' => $request->state,
        'country' => $request->country,
        ]);
        
        if($user->userable==null){
           
            if($request->membership=="Super Agent")
            {
                $super_agent=SuperAgent::create(['user_id'=>$user->id]);
              
                $super_agent->user()->save($user);
    
            }
            else if($request->membership=="Agent")
            {
                
                $agent=Agent::create(['user_id'=>$user->id]);
              
                $agent->user()->save($user);

            }
            else
            {

                $customer=Customer::create(['user_id'=>$user->id]);
              
                $customer->user()->save($user);
            }
        }
        

       
        return redirect('/dashboard');
       

}

    public function storeGoogleUser(){
        try {
            
            $googleUser = Socialite::driver('google')->stateless()->user();
    
            $existUser = User::where('email',$googleUser->email)->first();
            if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                  $user = new User;
                  $user->name = $googleUser->name;
                  $user->email = $googleUser->email;
                  $user->password = md5(rand(1,10000));
                  $user->email_verified_at=new DateTime('now');
                  $user->provider="Google";
                  $user->provider_id=$googleUser->id;
                  $user->save();
                  Auth::loginUsingId($user->id);
            }
            return redirect()->to('/dashboard');
        } 
        catch (Exception $e) {
            // return 'error';
            return redirect()->to('/');
        }
    }


        public function storeFacebookUser(){
        try{
        $facebookUser = Socialite::driver('facebook')->stateless()->user();
        $existUser = User::where('email',$facebookUser->email)->first();
        

        if($existUser) {
            Auth::loginUsingId($existUser->id);
        }
        else {
            $user = new User;
            $user->name = $facebookUser->name;
            $user->email = $facebookUser->email;
            $user->password = md5(rand(1,10000));
            $user->email_verified_at=new DateTime('now');
            $user->provider="facebook";
            $user->provider_id=$facebookUser->id;
            $user->save();
            Auth::loginUsingId($user->id);
        }
        return redirect()->to('/dashboard');
    } 
    catch (Exception $e) {
        // return 'error';
        return redirect()->to('/');
    }
    }
    public function deleteMembership()
    {
        Auth::user()->userable()->delete();
        return redirect()->back();
    }
}
