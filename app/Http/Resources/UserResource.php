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
        $userAgent=$this->user;
        
        return
        [
            
            'id'=>$userAgent->id,
            'name'=>$userAgent->name,
            'profile_image'=>asset('profile_images/'.$userAgent->profile_image),
            'email'=>$userAgent->email,
            'phone_number'=>$userAgent->phone_number,
            'country'=>$userAgent->country,
            'city'=>$userAgent->city,
            'state'=>$userAgent->state,
            'userable_type'=>$userAgent->userable_type,
            'userable_id'=>$userAgent->userable_id,

            

        ];
    }



}
