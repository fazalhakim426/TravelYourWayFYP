<?php

namespace App\Http\Resources\Country;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $array=$this->images()->get('image')->toArray();
        $images=array();
         foreach($array as $arr)
         {
             $images[]=asset('/storage/images/'.$arr['image']);
         }

        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'images'=>$images,
            'capacity'=>$this->capacity,
            'charges_per_day'=>$this->charges_per_day,
            'reserved'=>$this->reserved==null?'no':'yes',
           ];
    }
}
