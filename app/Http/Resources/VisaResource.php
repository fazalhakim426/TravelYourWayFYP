<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VisaResource extends JsonResource
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
            
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'agent_id'=>$this->agent_id,
            'status'=>$this->status,
    //visa information 
            'visa_apply_country'=>$this->visa_apply_country,
            'type'=>$this->type,  //visit immigration hajj ummrah
            'days'=>$this->days,
    //personal information
            'passport_number'=>$this->date_of_birth,
            'title'=>$this->first_name,
            'date_of_birth'=>$this->date_of_birth,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'gender'=>$this->gender,
    //contact informaiton
            'country'=>$this->country,
            'email'=>$this->email,
            'phone_number'=>$this->phone_number,
            'work_phone'=>$this->work_phone,
            'street'=>$this->street,
    //agent field
            'charges'=>$this->charges,
            'comments'=>$this->comments,
            'super_agent_id'=>$this->super_agent_id,//asign

        ];
    }
}
