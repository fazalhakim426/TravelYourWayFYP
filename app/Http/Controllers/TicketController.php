<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\AirlineRequest;
use App\Http\Requests\TicketTripDetailRequest;
use App\Models\Agent;
use App\Notifications\TicketNotification;
use Auth;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket=Ticket::where('user_id','=',Auth::user()->id)->where('status','=','Incomplete')->first();
       
        return view('customer.ticket.airline')->with('ticket',$ticket);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ticketIncomplete(AirlineRequest $request)
    {

        $ticket=Ticket::where('id',$request->id)->first();
             
           $ticket->fill($request->all())->save();
        //    dd($request->all());
        return redirect('/ticketTripDetailIndex');//goto ticketTripDetailIndex
    }

    public function ticketTripDetailIndex(){

        $ticket=Ticket::where('user_id','=',Auth::user()->id)->where('status','=','Incomplete')->first();
// dd($ticket);
        return view('customer.ticket.trip_detail')->with('ticket',$ticket);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AirlineRequest $request)
    {
        
        $request['user_id']=Auth::user()->id;
        $request['status']="Incomplete";
        // $t=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('status','=','incomplete')->first();
    //    dd($t);
        // if($t==null){
        if(Ticket::create($request->all()))
        {
            return redirect('/ticketTripDetailIndex');
        }
        else
        {
            return "Data Not Saving";
        }

    // }
    return redirect('/ticketTripDetailIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function ticketTripDetailStore(TicketTripDetailRequest $request)
    {
        $ticket=Ticket::where('id',$request->id)->first();
        $ticket->fill($request->all())->save();
     return redirect('/ticketPassengerIndex');//goto ticketTripDetailIndex
    }



    public function ticketPassengerIndex(){
        // $ticket=Ticket::where('user_id','=',Auth::user()->id)->where('status','=','Incomplete')->first();
        $ticket=Auth::user()->ticket()->where('status','=','Incomplete')->first();
        $ps=$ticket->passengers()->get();
        return view('customer.ticket.passenger')->with('ps',$ps)->with('ticket',$ticket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function ticketSelectAgent(Request $request)
    {
        $t= Ticket::where('id', $request->id)->first();
        $agent=Agent::get();
        return view('customer.ticket.agent')->with('ticket',$t)->with('agents',$agent);
    }

    public function ticketStoreAgent(Request $request)
    {
        $agent=Agent::find($request->agent_id);
        
        $ticket=Ticket::where('id', $request->id)->update([
            'agent_id'=>$agent->id,
            'super_agent_id'=>$agent->super_agent->id,
            'status'=>"Submitted",
        ]);
        $agent->user->notify(new TicketNotification());
        
        
        return redirect('/customer/dashboard');
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    } 
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        Ticket::destroy($id);
            
            return back();
    }
}
