<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Models\{Country, State, City, Hotel};

class DropdownController extends Controller
{
    public function index()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('welcome', $data);
    }

    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function fetchHotel(Request $request)
    {
        $data['hotels'] = Hotel::where("city_id",$request->city_id)->get(["name", "id"]);
        return response()->json($data);
    }
}