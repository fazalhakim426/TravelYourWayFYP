<?php

namespace App\Http\Controllers;

use App\Jobs\SendTicketApplyJob;
use App\Models\Ticket;
use App\Models\Visa;
use App\Notifications\SendPaymentNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{



 
    public function index()
    {
return redirect('agent/immigrations');
    // $data['visas']=Visa::where('agent_id','=',Auth::user()->userable_id)->orderBy('status')->get(); 
    // $data['user'] =Auth::user();
    // $data['sub_active'] ='Dashboard';
    // return view('agent.dashboard',$data); 
    }

    public function getImmigration()
    {

    $data['user'] =Auth::user();
    $data['sub_active'] ='Immigration';

    return view('agent.visa_type',$data); 
    }
    public function view_visa($id)
    {
        
    $data['user'] =Auth::user();
    $data['visa'] =Visa::find($id);
    $data['sub_active'] =$data['visa']->type;

    return view('agent.visa_type_detail',$data); 
    }

    public function view_ticket($id)
    {
        
    $data['user'] =Auth::user();
    $data['ticket'] =Ticket::find($id);
    $data['sub_active'] ='Ticket';

    return view('agent.ticket_detail',$data); 
    }
    public function getHajjs()
    {
    // $data['visas']=Visa::where('agent_id','=',Auth::user()->userable_id)->orderBy('status')->get(); 
    // dd($data);
    $data['user'] =Auth::user();
    $data['sub_active'] ='Hajj';
   
    return view('agent.visa_type',$data); 
    }
    public function getUmmrahs()
    {
    // $data['visas']=Visa::where('agent_id','=',Auth::user()->userable_id)->orderBy('status')->get(); 
    // dd($data);
    $data['user'] =Auth::user();
    $data['sub_active'] ='Ummrah';
   
    return view('agent.visa_type',$data); 
    }
    public function getVisits()
    {
  
    $data['user'] =Auth::user();
    $data['sub_active'] ='Visit';
   
    return view('agent.visa_type',$data); 
    }    
    
    public function tickets()
    {
  
    $data['user'] =Auth::user();
    $data['sub_active'] ='Ticket';
   
    return view('agent.tickets',$data); 
    }



    public function cancel_visa(Request $request)
    {
        $visa=Visa::where('id',$request->id)->update([
              'status'=>"Cancel",
        ]);
        
        return back()->with('success','Visa Cancel Successfully');
    }
    public function revoke_visa(Request $request)
    {
        $visa=Visa::where('id',$request->id)->update([
            'status'=>"Submitted",
        ]);
        
        return back()->with('success','Visa Revoke Successfully!');
    }


    public function cancel_ticket(Request $request)
    {
        Ticket::where('id',$request->id)->update([
              'status'=>"Cancel",
        ]);
        
        return back()->with('success','Ticket Cancel Successfully');
    }
    public function revoke_ticket(Request $request)
    {
        Ticket::where('id',$request->id)->update([
            'status'=>"Submitted",
        ]);
        
        return back()->with('success','Ticket revoke!');
    }

}
