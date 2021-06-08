<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Ticket;
use App\Models\Visa;
use Illuminate\Http\Request;
use DB,Auth;
class CustomerController extends Controller
{
    
    public function index()
    {
           $visas=DB::table('visas')->where('user_id','=',Auth::user()->id)->get();
        $tickets=DB::table('tickets')->where('user_id','=',Auth::user()->id)->get();
        return view('customer.dashboard')->with('visas',$visas)->with('tickets',$tickets);
    
    }

 



    public function pay_visa_charges($id)//temparoy payment
    {
        Visa::where('id',$id)->update([
            'status'=>"Paid"
        ]);
        return back();
        //
    } 
    
    public function done_visa($id)//temparoy payment
    {
        Visa::where('id',$id)->update([
            'status'=>"Done"
        ]);
        return back();
        //
    }


    public function pay_ticket_charges($id)//temparoy payment
    {
        Ticket::where('id',$id)->update([
            'status'=>"Paid"
        ]);
        return back();
        //
    } 
    
    public function done_ticket($id)//temparoy payment
    {
        Ticket::where('id',$id)->update([
            'status'=>"Done"
        ]);
        return back();
        //
    }
}
