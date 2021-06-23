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
            'customer_id'=>$this->customer_id,
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
    
    'passport_front_image'=>asset('/storage/visa_ticket/images/'.$this->passport_front_image),
    'passport_back_image'=>asset('/storage/visa_ticket/images/'.$this->passport_back_image),
    'cnic_front_image'=>asset('/storage/visa_ticket/images/'.$this->cnic_front_image),
    'cnic_back_image'=>asset('/storage/visa_ticket/images/'.$this->cnic_back_image),
            'charges'=>$this->charges,
            'instructions'=>$this->instructions,
            'documents'=>asset('/storage/visa_ticket/documents/'.$this->documents),
            'comments'=>$this->comments,
            'agent_name'=>$this->agent->user->name,//asign
            'agent_email'=>$this->agent->user->email,//asign
            'agent_phone'=>$this->agent->user->phone_number,//asign

        ];
    }
}
