<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'user_id'=>$this->user_id,
        'agent_id'=>$this->agent_id,
        'booking_source'=>$this->booking_source,
        'journey_type'=>$this->journey_type,  //signle round multi
        'issuing_airline'=>$this->issuing_airline,
        'ticket_apply_country'=>$this->ticket_apply_country,
        'departure_airport'=>$this->departure_airport,
        'arrival_airport'=>$this->arrival_airport,
        'departure_date'=>$this->departure_date,
        'class'=>$this->class,  //  business, first class ,  economy class 
          //agent field
          'total_payable'=>$this->total_payable,
          'super_agent_id'=>$this->super_agent_id,
          'passengers'=>$this->passengers,
          'agent_name'=>$this->agent->user->name,//asign
          'agent_email'=>$this->agent->user->email,//asign
          'agent_phone'=>$this->agent->user->phone_number,//asign
        ];
    }
}
