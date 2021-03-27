<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraMethods extends Controller
{
    public function validateTripDetails($request)
    {
        
      
        if($request->type=='Visit')
        {
             $request->validate([
                 'arrival_airport'=>'required',
                'visa_apply_country'=>'required',
                
                'type'=>'required',
                'days'=>'required',
                'departure_airport'=>'required',
    
            ]);
        }
        elseif($request->type=='Hajj')
        {
             $request->validate([
                 'arrival_airport'=>'required',
                
                'type'=>'required',
                'departure_airport'=>'required',
    
            ]);
        }elseif($request->type=='Ticket')
        {
             $request->validate([
                 'arrival_airport'=>'required',
                'visa_apply_country'=>'required',
                
                'type'=>'required',
                'departure_airport'=>'required',
    
            ]);
        }elseif($request->type=='Ummrah')
            {
                 $request->validate([
                 'arrival_airport'=>'required',
                    
                    'type'=>'required',
                    'days'=>'required',
                    'departure_airport'=>'required',
        
                ]);
            }
            else{
             $request->validate([
                 'arrival_airport'=>'required',
                'visa_apply_country'=>'required',
                
                'type'=>'required',
    
            ]);
        }
    }
}
