<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Customer;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Ticket;
use App\Models\Visa;
use Illuminate\Http\Request;
use DB,Auth;
class CustomerController extends Controller
{
    
    public function index(){
            $visas=Auth::user()->userable->visas;
            $tickets=DB::table('tickets')->where('customer_id','=',Auth::user()->userable_id)->get();
            return view('customer.dashboard')->with('visas',$visas)->with('tickets',$tickets);
    
    }

 



    public function pay_visa_charges($id)//temparoy payment
    {
        Visa::where('id',$id)->update([
            'status'=>"Paid"
        ]);
        return back();
    } 
    
    public function done_visa($id)//temparoy payment
    {
        Visa::where('id',$id)->update([
            'status'=>"Done"
        ]);
        return back();
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

    public function get_hotels()
    {
        $data['countries']=Country::all();
        $data['hotels']=Hotel::with('rooms')->get();
        return view('customer.hotel.listing',$data);
    }
    public function get_rooms($id)
    {
        $data['countries']=Country::all();
        $data['hotel']=$h=Hotel::where('id',$id)->with('rooms')->first();
       
        // $data['rooms']=$h->rooms;

        //  dd($data['rooms']);
        return view('customer.hotel.room.listing',$data);
    }
}
