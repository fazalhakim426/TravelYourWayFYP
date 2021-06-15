<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Models\{Booking, Country, State, City, Hotel};
use Illuminate\Support\Facades\Auth;

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

    public function fetchHotelRooms(Request $request)
    {
        // $request->validate([
        //     'from' => 'required',
        //     'to' => 'required',
        //     'hotel_id' => 'required',
        // ]);
        $request->customer_id = Auth::user()->userable_id;
        
        $hotel = Hotel::find($request->hotel_id);
        $all_rooms = $hotel->rooms;
        $from = $request->from;
        $to = $request->to;

        $reserved = Booking::whereBetween('from', [$from, $to])
            ->whereBetween('to', [$from, $to])->get();
        
        foreach($all_rooms as $all_room)
        {
            foreach($reserved as $res)
            {



            if($res->room->id==$all_room->id)
            {

                $all_room->reserved='reserved';
                break;
            }
            
        }

               

        }

        $data['countries']=Country::all();
        $data['hotel']=$hotel;
        $data['rooms']=$rooms=$hotel->rooms;
       


// $output='';

// foreach($rooms as $room)
// {
// $output."<h1>33434</h1>";
//     }


// foreach($rooms as $room)

        // $output.'<div class="wrapper md:w-1/3   bg-gray-400 p-2 antialiased text-gray-900">
        //     <div>

        //         <img class="object-cover  h-40 w-full" src="{{ asset('.'storage/images/'.'.$room->images[0]->image) }}"
        //             alt=" random imgee" class="w-full  object-cover object-center rounded-lg shadow-md">

        //         <div class="relative px-4 -mt-3  ">
        //             <div class="bg-white p-6 rounded-lg shadow-lg">
        //                 <div class="flex items-baseline">
        //                     <span
        //                         class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
        //                         {{ $room->title }}

        //                     </span>


        //                     <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">

        //                         <div class='.'float-right'.'>
        //                             {{ $room->capacity }} members
        //                             @if (isset($room->reserved))
        //                                 <span
        //                                     class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
        //                                     Reserved

        //                                 </span>
        //                             @else
        //                                 <input value="{{ $room->id }}" name='.'room_id[]'.' type="checkbox">
        //                             @endif

        //                         </div>
        //                     </div>
        //                 </div>

        //                 <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate"> {{ $room->name }}
        //                 </h4>

        //                 <div class="mt-1">
        //                     {{ $room->charges_per_day }}
        //                     <span class="text-gray-600 text-sm"> /day</span>
        //                 </div>
        //                 <div class="mt-4">
        //                     <span class="text-teal-600 text-md font-semibold">4/5 ratings </span>
        //                     <span class="text-sm text-gray-600">(based on 234 ratings)</span>
        //                 </div>
        //             </div>
        //         </div>

        //     </div>
        // </div>';

    // endforeach

// $data['output']=$output;
        return response()->json($data);
        // return view('customer.hotel.room.listing',$data);

    }
    
}