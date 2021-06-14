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
            'name'=>$this->user->name,
            'profile_image'=>asset('/profile_images/'.$this->user->profile_image),
            'email'=>$this->user->email,
            'phone_number'=>$this->user->phone_number,
            'country'=>$this->user->country,
            'city'=>$this->user->city,
            'state'=>$this->user->state,
            'userable_type'=>$this->user->userable_type,
            'userable_id'=>$this->user->userable_id,            

        ];
    }



}
