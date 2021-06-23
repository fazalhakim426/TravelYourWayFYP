<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Country\RoomResource;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Hotel;
use App\Models\Payment;
use App\Models\Ticket;
use App\Models\Visa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class CustomerAPIController extends Controller
{
    public function count_status($id)
    {
        $customer = Customer::find($id);
        return $customer->count_status_plus();
    }

    public function visa_payment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'visa_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $visa = Visa::find($request->visa_id);

        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // Stripe\Charge::create ([
        //         "amount" => $request->total_charges,
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,
        //         "description" => "Hotel Payment" 
        // ]);

        $visa->update([
            'status' => 'Paid',
        ]);


        Payment::create([
            'charges' => $visa->charges,
            'paymentable_id' => $visa->id,
            'paymentable_type' => "App\Models\Visa",
        ]);



        return response([
            'status' => true,
            'message' => 'Successfully Book',
        ]);
    }

    public function ticket_payment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ticket_id' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        $ticket = Ticket::find($request->ticket_id);

        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // Stripe\Charge::create ([
        //         "amount" => $request->total_charges,
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,
        //         "description" => "Hotel Payment" 
        // ]);

        $ticket->update([
            'status' => 'Paid',
        ]);


        Payment::create([
            'charges' => $ticket->total_payable,
            'paymentable_id' => $ticket->id,
            'paymentable_type' => "App\Models\Ticket",
        ]);



        return response([
            'status' => true,
            'message' => 'Successfully Book',
        ]);
    }

    public function booking_payment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'from' => 'required',
            'to' => 'required',
            'hotel_id' => 'required',
            'customer_id' => 'required',
            'room_id' => 'required',
            'total_charges' => 'required',


        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }



        //   'from',
        //   'to',
        //   'room_id',
        //   'customer_id',
        //   'hotel_id',


        // STRIPE_KEY
        //   name
        //   card_number
        //   CVC
        //   expiration_month
        //   expiration_year
        //   total_charges



        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // Stripe\Charge::create ([
        //         "amount" => $request->total_charges,
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,
        //         "description" => "Hotel Payment" 
        // ]);


        $room_ids=explode(",",$request->room_id);


        foreach ($room_ids as $room_id) {
            $booking = Booking::create([
                "customer_id" => $request->customer_id,
                "room_id" => $room_id,
                "from" => $request->from,
                "to" => $request->to,
                "hotel_id" => $request->hotel_id,
            ]);

            Payment::create([
                'charges' => $request->total_charges,
                'paymentable_id' => $booking->id,
                'paymentable_type' => "App\Models\Booking",
            ]);
            // $booking->payment;
        }

        return response([
            'status' => true,
            'message' => 'Successfully Book',
        ]);
    }






    public function booking_payment_by_hand(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'from' => 'required',
            'to' => 'required',
            'hotel_id' => 'required',
            'customer_id' => 'required',
            'room_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }

        foreach ($request->room_id as $room_id) {
            Booking::create([
                "room_id" => $room_id,
                "from" => $request->from,
                "to" => $request->to,
                "customer_id" => $request->customer_id,
                "hotel_id" => $request->hotel_id,
            ]);
        }
        return response([
            'status' => true,
            'message' => 'Successfully Book',
        ]);
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


        foreach ($all_rooms as $all_room) {
            foreach ($reserved as $res) {
                //    dd($all_room);
                if ($res->room != null)
                    if ($res->room->id == $all_room->id) {
                        // echo dd(3);
                        $all_room->reserved = 'reserved';
                        break;
                    }
            }
        }
        //   dd($hotel->rooms)
        return RoomResource::collection($all_rooms);
    }
}
