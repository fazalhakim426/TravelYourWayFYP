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
        $customer=Auth::user()->userable;


            $visas=Auth::user()->userable->visas()->paginate(5);
            // dd($visas);
            $data['tickets']=$customer->ticket;
            // dd($data['tickets']);
            $data['count']=$customer->count_status_plus();
            return view('customer.dashboard',$data)->with('visas',$visas);
    
    }


    public function view_visa($id)
    {
        
    $data['user'] =Auth::user();
    $data['visa'] =Visa::find($id);
    $data['sub_active'] =$data['visa']->type;

    return view('customer.visa.detail',$data); 
    }

    public function view_ticket($id)
    {
        
    $data['user'] =Auth::user();
    $data['ticket'] =Ticket::find($id);
    $data['sub_active'] ='Ticket';
    
    return view('customer.ticket.detail',$data); 
    }



    public function show_visa_payment($id)
    {
        $data['visa']=Visa::find(decrypt($id));
        return view('customer.visa.payment',$data);
    }

    public function show_ticket_payment($id)
    {
        $data['ticket']=Ticket::find(decrypt($id));
        return view('customer.ticket.payment',$data);
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


        
        $customer=Auth::user()->userable;


            $visas=Auth::user()->userable->visas()->paginate(5);
            // dd($visas);
            $data['tickets']=$customer->ticket;
            // dd($data['tickets']);
            $data['count']=$customer->count_status_plus();
            $data['bookings']=$customer->booking;


            
        return view('customer.hotel.listing',$data);
    }
    public function get_rooms($id)
    {
        $data['countries']=Country::all();
        $data['hotel']=$h=Hotel::where('id',$id)->with('rooms')->first();
        $data['rooms']=[] ;
       
        // $data['rooms']=$h->rooms;

        //  dd($data['rooms']);
        return view('customer.hotel.room.listing',$data);
    }
}
