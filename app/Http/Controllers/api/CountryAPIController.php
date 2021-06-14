<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Country\CityResource;
use Illuminate\Http\Request;
use App\Http\Resources\Country\CountryResource;

use App\Http\Resources\Country\CountriesResource;
use App\Http\Resources\Country\HotelResource;
use App\Http\Resources\Country\RoomResource;
use App\Http\Resources\Country\StateResource;
use App\Http\Resources\VisaResource;
use App\Models\City;
use App\models\country;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\State;
class CountryAPIController extends Controller
{
    public function index(){
    
        return CountryResource::collection(Country::all());
    }
    public function get_states($id){
    $state=State::where('country_id',$id)->get();
        return StateResource::collection($state);
    }
    public function get_cities($id){
    
        return CityResource::collection(City::where('state_id',$id)->get());
    }


    public function show(Country $country){

        return new CountryResource($country);
    }




    public function get_hotels()
    {
        $visa=Hotel::get();
        return HotelResource::collection($visa);
    
    }
    public function get_country_hotels($id)
    {
        $hotel=Hotel::where('country_id',$id)->get(         );
        return HotelResource::collection($hotel);
    
    } 
       public function get_state_hotels($id)
    {
        $hotel=Hotel::where('state_id',$id)->get();
        return HotelResource::collection($hotel);
    
    }
    public function get_city_hotels($id)
    {
        $hotel=Hotel::where('city_id',$id)->get();
        return HotelResource::collection($hotel);
    
    }

    public function get_rooms($id)
    {
        $rooms=Room::where('hotel_id',$id)->get();
        return RoomResource::collection($rooms);
    
    }




    public function store(Request $request)
    {
        
        return $request['name'];
        $country=new Country();
        $cname=$request->name;
        $country->country=$cname;
        if(Country::where('country',$cname)->exists()){
            return 
            [
                'status'=>false,
                'message'=>"Country Already exists",
            ];
          }
         else{
             $country->save();
            return 
            [
                'status'=>true,
                'message'=>"Country added Successfuly",
            ];
         }
        
        
        
    }
}
