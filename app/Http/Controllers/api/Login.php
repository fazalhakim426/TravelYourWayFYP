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

  public function edit_profile(Request $request)
  {
    
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|min:3|max:25',
      'phone_number' => 'required|string|min:10|max:15',
      'city' => 'required|string|min:2|max:30',
      'country' => 'required|string|min:2|max:30',
      'state' => 'required|string|min:2|max:20',
      'user_id' => 'required',
  ]);
  if ($validator->fails()) {
    return response()->json([
      'success' => false,
      'message' => $validator->errors(),
    ], 401);
  }
   
        $user =User::find($request->user_id);
       
        if ($request->hasFile('profile_image')) {
            
          $path = $request->file('profile_image')->store('images');

          // storage_path()

          // $image->url = $path;
           
        User::where('email',$user->email)->update([
          'profile_image'=>$path,
          ]);
        
         }



        // if($request->profile_image){

        //   $validator = Validator::make($request->all(), [
        //         // 'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // if ($validator->fails()) {
        //   return response()->json([
        //     'success' => false,
        //     'message' => $validator->errors(),
        //   ], 401);
        // }

        //     $imageName =time().'.'.$request->profile_image->extension();  
     
        // $request->profile_image->move(public_path('profile_images'), $imageName);
      
        // }
        
     
        
        User::where('email',$user->email)->update([
        'phone_number' => $request->phone_number,
        'name' => $request->name,
        'city' => $request->city,
        'state' => $request->state,
        'country' => $request->country,
        ]);
        
        return response()->json([
          'success' => true,
          'user' => $user
      ]);
       


  }

  public function get_user_detail($id)
  {
    $user=User::find($id);
    if($user)
    return response()->json([
      'success' => true,
      'user' => $user
  ]);
  else
  return response()->json([
    'success' => false,
    'user' => null
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
