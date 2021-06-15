<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Country\RoomResource;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class CustomerAPIController extends Controller
{
    public function count_status($id)
    {
        $customer=Customer::find($id);
        return $customer->count_status_plus();
    }

    public function booking(Request $request)
    {
        # code...
    }


























    public function available_room(Request $request)
    {

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'from' => 'required',
            'to' => 'required',
            'hotel_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
              'success' => false,
              'message' => $validator->errors(),
            ], 401);
          }
  

        
            // $request->customer_id = Auth::user()->userable_id;
        
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
                    //    dd($all_room);
                       if($res->room!=null)
                        if($res->room->id==$all_room->id)
                        {
                            // echo dd(3);
                            $all_room->reserved='reserved';
                            break;
                        }
                 }   
            }
                //   dd($hotel->rooms)
            return RoomResource::collection($all_rooms);
            
        }







        
    
}
