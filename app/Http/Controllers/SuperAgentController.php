<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\SuperAgent;
use App\Models\User;
use Illuminate\Http\Request;
use Auth,DB;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;

class SuperAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $data['sub_active']='Dashboard';
        $data['user']=Auth::user();
        return view('super_agent.dashboard')->with($data);
    }

    public function get_tickets()
    {
     
        $data['sub_active']='Tickets';
        $data['user']=Auth::user();
        return view('super_agent.ticket')->with($data);
    }


    public function get_agents()
    {

        
        $data['user']=Auth::user();

        $data['sub_active']='Agents';
       
        $data['agents'] =Auth::user()->userable->agents;
        // dd($data);
        return view('super_agent.agents.list',$data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_agent(Request $request)
    {
       
        $request->validate([
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);


        $user = User::create([
            'name' => $request->first_name." ".$request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $agent=Agent::create(['user_id'=>$user->id, 
                              'super_agent_id'=>Auth::user()->userable_id]);
              
                $agent->user()->save($user);


       return redirect('super-agent/agents');
    }

    public function delete_agent(Agent $agent)
    {
        $agent->user->delete();
        $agent->delete();
       
        return redirect('super-agent/agents');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuperAgent  $superAgent
     * @return \Illuminate\Http\Response
     */
    public function show(SuperAgent $superAgent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuperAgent  $superAgent
     * @return \Illuminate\Http\Response
     */
    public function edit(SuperAgent $superAgent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuperAgent  $superAgent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuperAgent $superAgent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuperAgent  $superAgent
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuperAgent $superAgent)
    {
        //
    }


    
    public function getImmigration()
    {
    // $data['visas']=Visa::where('agent_id','=',Auth::user()->userable_id)->orderBy('status')->get(); 
    // dd($data);
    $data['user'] =Auth::user();
    $data['sub_active'] ='Immigration';
    $data['i'] =0;
    return view('super_agent.visa_type',$data); 
    }
    public function getHajjs()
    {
    // $data['visas']=Visa::where('agent_id','=',Auth::user()->userable_id)->orderBy('status')->get(); 
    // dd($data);
    $data['user'] =Auth::user();
    $data['sub_active'] ='Hajj';
    $data['i'] =0;
    return view('super_agent.visa_type',$data); 
    }
    public function getUmmrahs()
    {
    // $data['visas']=Visa::where('agent_id','=',Auth::user()->userable_id)->orderBy('status')->get(); 
    // dd($data);
    $data['user'] =Auth::user();
    $data['sub_active'] ='Ummrah';
    $data['i'] =0;
    return view('super_agent.visa_type',$data); 
    }
    public function getVisits()
    {
  
    $data['user'] =Auth::user();
    $data['sub_active'] ='Visit';
    $data['i'] =0;
    return view('super_agent.visa_type',$data); 
    }
}
