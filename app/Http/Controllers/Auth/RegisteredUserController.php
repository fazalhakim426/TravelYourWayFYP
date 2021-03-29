<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
        return view('auth.register2');
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
       
        $request->validate([            
            'name' => 'required|string|min:3|max:25',
            'phone_number' => 'required|string|min:10|max:15',
            'city' => 'required|string|min:2|max:30',
            'country' => 'required|string|min:2|max:30',
            'state' => 'required|string|min:2|max:20',
            'membership' => 'required',
            
        ]);

        // $userprofile = Auth::user();
        User::where('email', Auth::user()->email)
       ->update([
        'phone_number' => $request->phone_number,
        'name' => $request->name,
        'city' => $request->city,
        'state' => $request->state,
        'country' => $request->country,
        'membership' => $request->membership,
        ]);

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
}
