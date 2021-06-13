<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Http\Resources\VisaResource;
use App\Models\Agent;
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
        'agent_id'=>'required',  
        'user_id'=>'required',  
        'user_id'=>'required',     
        'visa_apply_country'=>'required',   
        'days'=>'required',    
        //personal information
        'title'=>'required',   
        'passport_number'=>'required',   
        'date_of_birth'=>'required',   
        'first_name'=>'required',   
        'last_name'=>'required',   
        'gender'=>'required',   
        'status'=>'required',   

        
    ]);
    $request['status']="Submitted";
    $super_agent_id=Agent::find($request->agent_id)->super_agent->id;
    
    $request->super_agent_id=$super_agent_id;

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


$visa=Visa::where('user_id',$id)->get();
// $visa['agent']='fazal hakim';
    return VisaResource::collection(
      $visa
    );
  }

}
