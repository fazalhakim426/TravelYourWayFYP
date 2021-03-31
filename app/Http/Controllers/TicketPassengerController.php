<?php

namespace App\Http\Controllers;

use App\Models\TicketPassenger;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Http\Requests\PassengerRequest;
class TicketPassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PassengerRequest $request)
    {
        $ticket=Ticket::find($request->ticket_id);
        $passenger=new TicketPassenger($request->all());
        $ticket->passengers()->save($passenger);
        return back();
    }

    /**
     * Display the specified res    urce.
     *
     * @param  \App\Models\TicketPassenger  $ticketPassenger
     * @return \Illuminate\Http\Response
     */
    public function show(TicketPassenger $ticketPassenger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketPassenger  $ticketPassenger
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketPassenger $ticketPassenger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TicketPassenger  $ticketPassenger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketPassenger $ticketPassenger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketPassenger  $ticketPassenger
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TicketPassenger::destroy($id);
        return back();
    }
}
