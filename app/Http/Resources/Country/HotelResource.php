<?php

namespace App\Http\Resources\Country;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
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


        $av=array_values($array);
        // array_values()

        return [
            
            'description'=>$this->description,
            'address'=>$this->address,
            
            'id'=>$this->id,
            'name'=>$this->name,
            'images'=>$images,
           ]; 
    }
}
