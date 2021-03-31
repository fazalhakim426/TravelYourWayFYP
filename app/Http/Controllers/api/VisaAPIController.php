<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Http\Resources\VisaResource;
use App\Models\Visa;

class VisaAPIController extends Controller
{
      
  //  public function index()
  //  {
  //      return VisaResource::collection(Visa::get());
  //  }
    
   public function store(Request $request)
   {
    $validator = Validator::make($request->all(), [
        'type'=>'required',     
        'user_id'=>'required',     
        'visa_apply_country'=>'required',   
        'days'=>'required',    
        
    ]);
    $request['status']="Submitted";
    
    if ($validator->fails()) {
      return response()->json([
        'success' => false,
        'message' => $validator->errors(),
      ], 401);
    }


    if(Visa::create($request->all())!=null){

    
        return response()->json([
            'success' => true,
            'message' => "Successfully Submitted",
          ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => " Some Error",
              ], 200);
        }



        
   }



       
   public function update(Request $request,$id)
   {
   
    $validator = Validator::make($request->all(), [
        'type'=>'required',     
        'user_id'=>'required',     
        'visa_apply_country'=>'required',   
        'days'=>'required',    
        
    ]);
    $request['status']="Submitted";
    
    if ($validator->fails()) {
      return response()->json([
        'success' => false,
        'message' => $validator->errors(),
      ], 401);
    }

    $input = $request->all();
    $visa=Visa::find($id);
    $visa->fill($input)->save();
      return ['status'=>true,
              'message'=>'updated'
              ];

    // if(Visa::create($request->all())!=null){

    
    //     return response()->json([
    //         'success' => true,
    //         'message' => "Successfully Submitted",
    //       ], 200);
    //     }
    //     else{
    //         return response()->json([
    //             'success' => false,
    //             'message' => " Some Error",
    //           ], 200);
    //     }



        
   }


   public function show($id) {
    return new VisaResource(Visa::findOrFail($id));
         }   

public function getAll($id) {
    return VisaResource::collection(Visa::where('user_id',$id)->get());
 }
}
