<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        return
        [
            
            'id'=>$this->id,
            'name'=>$this->name,
            'membership'=>$this->membership,
            'profile_image'=>$this->profile_image,
            'email'=>$this->email,
            'phone_number'=>$this->phone_number,
            'country'=>$this->country,
            'city'=>$this->city,
            'state'=>$this->state,

        ];
    }
}
