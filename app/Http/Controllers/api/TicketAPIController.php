<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\TicketResource;
use App\Models\Ticket;
use Validator;
class TicketAPIController extends Controller
{
  
      
    // public function index()
    // {
    //     return TicketResource::collection(Ticket::get());
    // }
     
    public function store(Request $request)
    {
     $validator = Validator::make($request->all(), [
         'booking_source'=>'required',     
         'user_id'=>'required',     
         'journey_type'=>'required',   
         'issuing_airline'=>'required',    
         'departure_airport'=>'required',    
         'arrival_airport'=>'required',    
         'departure_date'=>'required',    
         'class'=>'required',    
         'issuing_airline'=>'required',    
         
     ]);
     $request['status']="Submitted";
     
     if ($validator->fails()) {
       return response()->json([
         'success' => false,
         'message' => $validator->errors(),
       ], 401);
     }
 
 
     if(Ticket::create($request->all())!=null){
 
     
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
        'booking_source'=>'required',     
         'user_id'=>'required',     
         'journey_type'=>'required',   
         'issuing_airline'=>'required',    
         'departure_airport'=>'required',    
         'arrival_airport'=>'required',    
         'departure_date'=>'required',    
         'class'=>'required',    
         'issuing_airline'=>'required',
         
     ]);
     $request['status']="Submitted";
     
     if ($validator->fails()) {
       return response()->json([
         'success' => false,
         'message' => $validator->errors(),
       ], 401);
     }
     
     $input = $request->all();
     $ticket=Ticket::find($id);
     $ticket->fill($input)->save();
       return ['status'=>true,
               'message'=>'updated'
               ];
 
     // if(Ticket::create($request->all())!=null){
 
     
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
     return new TicketResource(Ticket::findOrFail($id));
          }   
 
 public function getAll($id) {
     return TicketResource::collection(Ticket::where('user_id',$id)->get());
  }
 }
 