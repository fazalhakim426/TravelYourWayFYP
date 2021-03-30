<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Country\CountryResource;

use App\Http\Resources\Country\CountriesResource;

use App\models\country;
class CountryAPIController extends Controller
{
    public function index(){
    
        return CountryResource::collection(Country::all());
    }


    public function show(Country $country){
        return new CountryResource($country);
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
