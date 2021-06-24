<?php

namespace App\Http\Resources\Booking;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'from'=>$this->from,
            'to'=>$this->to,
            'name'=>$this->hotel->name,
            'title'=>$this->room->title,
            'address'=>$this->hotel->address,
            'city'=>$this->hotel->city->name,
            'country'=>$this->hotel->country->name,
            'state'=>$this->hotel->state->name,
            'charges'=>$this->payment->charges,
            'status'=>$this->payment?'Paid':'Unpaid',
           ];
    }
}
