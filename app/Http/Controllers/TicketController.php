<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\AirlineRequest;
use App\Http\Requests\TicketTripDetailRequest;
use App\Jobs\SendTicketApplyJob;
use App\Models\Agent;
use App\Models\Country;
use App\Notifications\TicketNotification;
use Auth;
use Response;
use Carbon\Carbon;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket=Ticket::where('customer_id','=',Auth::user()->userable_id)->where('status','=','Incomplete')->first();
       
        return view('customer.ticket.airline')->with('ticket',$ticket);
    }


    public function applyTicketCharges(Request $request){
        // dd($request);
        // User::find($request->customer_id)->notify(new SendPaymentNotification);
        $request->validate([
                'total_payable'=>'required|numeric|gt:1000',
                'instructions'=>'required',
            ]);
       
        $ticket=Ticket::find($request->id);

        $ticket->update([
            'status'=>"Payment Request",
            'total_payable'=>$request->total_payable,
            'instructions'=>$request->instructions,
            
        ]);

        $job = (new SendTicketApplyJob($ticket))->delay(Carbon::now()->addSeconds(3));
      
        dispatch($job);

        return back()->with('success','Ticket payment notification send!');
    }

    public function ticketUploadDocuments(Request $request)
    {
        $request->validate([
            'documents' => 'required|mimes:jpeg,png,pdf,jpg,gif,svg|max:2048',
            
         ]);

        $ticket=Ticket::find($request->id);
        $documents=time().'.'.$request->documents->extension();
    //   dd($docu);
        $request->documents->move(public_path('/storage/visa_ticket/documents/'),$documents);
          $ticket->update([
           'documents'=>$documents,
           'status'=>'Done'
          ]);
        //  dd($visa);
        return redirect()->back()->with('success','Document Uploaded!');

    }

    public function downloadVisaDocument($id){

    $id=decrypt($id);
    $ticket=Ticket::find($id);
    $file = public_path()."/storage/visa_ticket/documents/".$ticket->documents;
  
    $headers = array('Content-Type: application/pdf',);
    return Response::download($file, $ticket->documents,$headers);

    


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

        $data['ticket']=Ticket::where('customer_id','=',Auth::user()->userable_id)->where('status','=','Incomplete')->first();
        // dd($ticket);
       $data['countries']=Country::get();
        return view('customer.ticket.trip_detail',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AirlineRequest $request)
    {
        
        $request['customer_id']=Auth::user()->userable_id;
        $request['status']="Incomplete";
        // $t=DB::table('visas')->where('customer_id','=',Auth::user()->userable_id)->where('status','=','incomplete')->first();
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
        $ticket=Ticket::where('customer_id','=',Auth::user()->userable_id)->where('status','=','Incomplete')->first();
        // $ticket=Auth::user()->userable()->ticket()->where('status','=','Incomplete')->first();
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
        
        Ticket::where('id', $request->id)->update([
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
        Ticket::find($id)->update(['status'=>'Incomplete']);

        return redirect('/customer/tickets');
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
