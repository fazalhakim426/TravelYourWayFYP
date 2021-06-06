<?php

namespace App\Http\Controllers;

use App\Models\AgentSuperAgent;
use App\Models\SuperAgent;
use App\Models\Visa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    // public function getAllSuperAgents()
    // {
    //     $data['user']=Auth::user();
    //     $data['sub_active']='All Super Agents';

    //     foreach(SuperAgent::get() as $index=>$agent)
    //     {
    //         $data['agents'][$index] = $agent->user;
    //     }
    //     return view('agent.all_super_agent',$data);


    // }
    
    // public function getMySuperAgents()
    // {

    //     $data['user']=Auth::user();
    //     $agent=$data['user']->userable;

    //     $data['sub_active']='My Super Agents';
    //     // dd($agent->super_agents );
    //     // foreach($agent->super_agents as $index=>$agent)
    //     // {
    //     //     $data['agents'][$index] = $agent->user;
    //     // }
    //     return view('agent.my_super_agent',$data);


     
    // }

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
    $data['i'] =0;
    return view('agent.dashboard',$data); 
    }

    public function getImmigration()
    {
    // $data['visas']=Visa::where('agent_id','=',Auth::user()->userable_id)->orderBy('status')->get(); 
    // dd($data);
    $data['user'] =Auth::user();
    $data['sub_active'] ='Immigration';
    $data['i'] =0;
    return view('agent.visa_type',$data); 
    }
    public function getHajjs()
    {
    // $data['visas']=Visa::where('agent_id','=',Auth::user()->userable_id)->orderBy('status')->get(); 
    // dd($data);
    $data['user'] =Auth::user();
    $data['sub_active'] ='Hajj';
    $data['i'] =0;
    return view('agent.visa_type',$data); 
    }
    public function getUmmrahs()
    {
    // $data['visas']=Visa::where('agent_id','=',Auth::user()->userable_id)->orderBy('status')->get(); 
    // dd($data);
    $data['user'] =Auth::user();
    $data['sub_active'] ='Ummrah';
    $data['i'] =0;
    return view('agent.visa_type',$data); 
    }
    public function getVisits()
    {
    // $data['visas']=Visa::where('agent_id','=',Auth::user()->userable_id)->orderBy('status')->get(); 
    // dd($data);
    $data['user'] =Auth::user();
    $data['sub_active'] ='Visit';
    $data['i'] =0;
    return view('agent.visa_type',$data); 
    }
}
