<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;


use Illuminate\Auth\Events\Registered;
use App\models\User;


use Validator;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Illuminate\Support\Facades\Hash;
class Login extends Controller
{
    
  public function login()
  {
  
      if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
          $user = Auth::user();
          $user->profile_image=asset('/profile_images/'.$user->profile_image);
        //  $user->likes=explode(',',$user->likes);
          return response()->json([
            'success' => true,
            'user' => $user
        ]);
      } else {
     //if authentication is unsuccessfull, notice how I return json parameters
        return response()->json([
          'success' => false,
          'message' => 'Invalid Email or Password',
      ], 401);
      }
  }
  





  public function register(Request $request)
  {
      $validator = Validator::make($request->all(), [
          'name' => 'required',
          'email' => 'required|email|unique:users',
          'password' => 'required',
      ]);
      if ($validator->fails()) {
        return response()->json([
          'success' => false,
          'message' => $validator->errors(),
        ], 401);
      }
      $request['membership']="Customer";
      $input = $request->all();
      


      $input['password'] = bcrypt($input['password']);
      $user = User::create($input);

      event(new Registered($user));

      return response()->json([
        'success' => true,
        'user' => $user
    ]);
  }

  










   /**
     * Register api.
     *
     * @return \Illuminate\Http\Response
     */

   
                            








    public function logout(Request $res)
    {
      if (Auth::user()) {
        $user = Auth::user()->token();
        $user->revoke();

        return response()->json([
          'success' => true,
          'message' => 'Logout successfully'
      ]);
      }else {
        return response()->json([
          'success' => false,
          'message' => 'Unable to Logout'
        ]);
      }
     }
}
