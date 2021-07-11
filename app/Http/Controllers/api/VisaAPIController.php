<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Http\Resources\VisaResource;
use App\Models\Agent;
use App\Models\User;
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
        'customer_id'=>'required',  
        'agent_id'=>'required',   
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
        
        'passport_front_image'=>'required',
        'passport_back_image'=>'required',
        'cnic_front_image'=>'required',
        'cnic_back_image'=>'required',
        

        
    ]);
    // dd($request->all());
    $request['status']="Submitted";
   

    if ($validator->fails()) {
      return response()->json([
        'success' => false,
        'message' => $validator->errors(),
      ], 401);
    }
    $super_agent_id=Agent::find($request->agent_id)->super_agent->id;

    $request->super_agent_id=$super_agent_id;
    $visa=new Visa();
    
  //   if($request->cnic_back_image!=null){
  //     $cnic_back_image =time().'.'.$request->cnic_back_image->extension();  

  //     $request->cnic_back_image->move(
  //       public_path('/storage/visa_ticket/images/'), $cnic_back_image
  //     );

  //     $visa->cnic_back_image=$cnic_back_image;
  //  }

  

  //  if($request->cnic_front_image!=null){
  //     $cnic_front_image =time().'.'.$request->cnic_front_image->extension();  

  //     $request->cnic_front_image->move(
  //       public_path('/storage/visa_ticket/images/'), $cnic_front_image
  //     ); 
  //     $visa->cnic_front_image=$cnic_front_image;
  //  }
   





  if ($request->hasFile('passport_back_image')) {
    $path = $request->file('passport_back_image')->store('images');
    $visa->passport_back_image=$path;
    // dd($path);
   }
  //  dd($visa->cnic_front_image);

   if ($request->hasFile('passport_front_image')) {
    $path = $request->file('passport_front_image')->store('images');
    $visa->passport_front_image=$path;
   }

   if ($request->hasFile('cnic_back_image')) {
    $path = $request->file('cnic_back_image')->store('images');
    $visa->cnic_back_image=$path;
    // dd($path);
   }
  //  dd($visa->cnic_front_image);

   if ($request->hasFile('cnic_front_image')) {
    $path = $request->file('cnic_front_image')->store('images');
    $visa->cnic_front_image=$path;
   }



   if ($request->hasFile('passport_back_image')) {
    $path = $request->file('passport_back_image')->store('images');
    $visa->passport__image=$path;
   }

   if ($request->hasFile('passport_back_image')) {
    $path = $request->file('passport_back_image')->store('images');
    $visa->passport_back_image=$path;
   }



  //  if($request->passport_back_image!=null){
  //     $passport_back_image=time().'.'.$request->passport_back_image->extension();  

  //     $request->passport_back_image->move(
  //       public_path('/storage/visa_ticket/images/'),
  //        $passport_back_image);

  //  }

   
   if($visa->passport_front_image==null||$request->passport_front_image){

    if ($request->hasFile('passport_front_image')) {
      $path = $request->file('passport_front_image')->store('images');
      $visa->passport_front_image=$path;
     }

      // $passport_front_image =time().'.'.$request->passport_front_image->extension();  

      // $request->passport_front_image->move(
      //   public_path('/storage/visa_ticket/images/'), 
      //   $passport_front_image);
     
      //   $visa->passport_front_image=$passport_front_image;



   }


    $visa_id=Visa::create($request->all())->id;
   $updated= Visa::find($visa_id)->update([
    'super_agent_id'=>$super_agent_id,
    'cnic_back_image'=>$visa->cnic_front_image,
    'cnic_front_image'=>$visa->passport_front_image,
    'passport_back_image'=>$visa->passport_back_image,
    'passport_front_image'=>$visa->passport_front_image,
   ]);
  //  dd(Visa::find($visa_id)->get());
    if($updated!=null){
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
        'customer_id'=>'required',     
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

      $visa=Visa::where('customer_id',$id)->get();
          return VisaResource::collection($visa);
        }

}
