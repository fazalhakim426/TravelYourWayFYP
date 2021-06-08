<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use App\Models\Visa;
use App\Notifications\SendPaymentNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{



    public function applycharges(Request $request){
        User::find($request->user_id)->notify(new SendPaymentNotification);
        $request->validate(
            [
                'charges'=>'required|numeric|gt:1000',
            ]
            );
       
        Visa::where('id',$request->id)->update([
            'status'=>"Payment Request",
            'charges'=>$request->charges,
        ]);
        return back();
    }

    public function ticket_applay_charges(Request $request){
        User::find($request->user_id)->notify(new SendPaymentNotification);
        $request->validate(
            [
                'total_payable'=>'required|numeric|gt:1000',
            ]
            );
       
        Ticket::where('id',$request->id)->update([
            'status'=>"Payment Request",
            'total_payable'=>$request->total_payable,
        ]);
        return back();
    }
    public function addSuperAgents(Request $r)
    {


        $agent=Auth::user()->userable;
        $agent->super_agents()->attach($r->super_agent_id, ['status'=>1,'a' => $r->a,'b' => $r->b,'c' => $r->c,'d' => $r->d,'e' => $r->e]);
        return redirect('/agent/all_super_agents');
        // $user
    }
    public function index()
    {
    $data['visas']=Visa::where('agent_id','=',Auth::user()->userable_id)->orderBy('status')->get(); 
    $data['user'] =Auth::user();
    $data['sub_active'] ='Dashboard';
    return view('agent.dashboard',$data); 
    }

    public function getImmigration()
    {

    $data['user'] =Auth::user();
    $data['sub_active'] ='Immigration';

    return view('agent.visa_type',$data); 
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
   
    return view('agent.ticket_type',$data); 
    }



    public function cancel_visa(Request $request)
    {
        $visa=Visa::where('id',$request->id)->update([
              'status'=>"Cancel",
              'charges'=>""
        ]);
        
        return back();
    }
    public function revoke_visa(Request $request)
    {
        $visa=Visa::where('id',$request->id)->update([
            'status'=>"Submitted",
            'charges'=>""
        ]);
        
        return back();
    }


    public function cancel_ticket(Request $request)
    {
        Ticket::where('id',$request->id)->update([
              'status'=>"Cancel",
              'total_payable'=>""
        ]);
        
        return back();
    }
    public function revoke_ticket(Request $request)
    {
        Ticket::where('id',$request->id)->update([
            'status'=>"Submitted",
            'total_payable'=>""
        ]);
        
        return back();
    }

}
