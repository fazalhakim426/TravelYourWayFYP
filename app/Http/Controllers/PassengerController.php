<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Http\Requests\PassengerRequest;
class PassengerController extends Controller
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
    public function store_ticket_passenger(PassengerRequest $request)
    {
        $ticket=Ticket::find($request->ticket_id);
        $passenger=new Passenger($request->all());
        $ticket->passengers()->save($passenger);
        return back();
    }

    /**
     * Display the specified res    urce.
     *
     * @param  \App\Models\Passenger  $Passenger
     * @return \Illuminate\Http\Response
     */
    public function show(Passenger $Passenger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Passenger  $Passenger
     * @return \Illuminate\Http\Response
     */
    public function edit(Passenger $Passenger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passenger  $Passenger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passenger $Passenger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Passenger  $Passenger
     * @return \Illuminate\Http\Response
     */
    public function destroy_ticket_passenger($id)
    {
        Passenger::destroy($id);
        return back();
    }
}
