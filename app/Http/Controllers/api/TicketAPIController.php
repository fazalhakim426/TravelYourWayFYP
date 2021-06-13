<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Requests\PassengerRequest;

use App\Http\Resources\TicketResource;
use App\Models\Agent;
use App\Models\Ticket;
use App\Models\Passenger;
use Validator;

class TicketAPIController extends Controller
{

  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'booking_source' => 'required',
      'user_id' => 'required',
      'journey_type' => 'required',
      'issuing_airline' => 'required',
      'departure_airport' => 'required',
      'arrival_airport' => 'required',
      'departure_date' => 'required',
      'class' => 'required',
      'agent_id' => 'required',


    ]);
    $request['status'] = "Submitted";

    if ($validator->fails()) {
      return response()->json([
        'success' => false,
        'message' => $validator->errors(),
      ], 401);
    }
    $agent = Agent::find($request->agent_id);
    $super_agent = $agent->super_agent;
    $request['super_agent_id'] = $super_agent->id;

    $t = Ticket::create($request->all());

    if ($t) {
      return response()->json([
        'success' => true,
        'message' => "Successfully Submitted",
        'ticket_id' => $t->id,
      ], 200);
    } else {
      return response()->json([
        'success' => false,
        'message' => " Some Error",
      ], 200);
    }
  }

  public function update(Request $request, $id)
  {

    $validator = Validator::make($request->all(), [
      'booking_source' => 'required',
      'user_id' => 'required',
      'journey_type' => 'required',
      'issuing_airline' => 'required',
      'departure_airport' => 'required',
      'arrival_airport' => 'required',
      'departure_date' => 'required',
      'class' => 'required',
      'issuing_airline' => 'required',

    ]);
    $request['status'] = "Submitted";

    if ($validator->fails()) {
      return response()->json([
        'success' => false,
        'message' => $validator->errors(),
      ], 401);
    }

    $input = $request->all();
    $ticket = Ticket::find($id);
    $ticket->fill($input)->save();
    return [
      'status' => true,
      'message' => 'updated'
    ];

    // if(Ticket::create($request->all())!=null){


    //     return response()->json([
    //         'success' => true,
    //         'message' => "Successfully Submitted",
    //       ], 200);
    //     }
    //     else{
    //         return response()->json([
    //             'success' => false,
    //             'message' => " Some Error",
    //           ], 200);
    //     }




  }


  public function ticket_passenger(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'title' => 'required',
      'first_name' => 'required',
      'last_name' => 'required',
      'date_of_birth' => 'required',
      'passport_number' => 'required',
      'nationality' => 'required',
      'pax_type' => 'required',
      'ticket_id' => 'required',

    ]);

    if ($validator->fails()) {
      return response()->json([
        'success' => false,
        'message' => $validator->errors(),
      ], 401);
    }



    $ticket = Ticket::find($request->ticket_id);

    $passenger = new Passenger($request->all());

    $result = $ticket->passengers()->save($passenger);

    if ($result != null) {
      $ticket->status = "Submmited";
      $ticket->save();
      return [
        'status' => true,
        'message' => 'Successfully Added'
      ];
    }
  }




  public function getAll($id)
  {
    return TicketResource::collection(Ticket::where('user_id', $id)->get());
  }
}
