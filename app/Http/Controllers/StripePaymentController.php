<?php
   
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        
        return view('stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        
        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // Stripe\Charge::create ([
        //         "amount" => $request->total_charges,
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,
        //         "description" => "Hotel Payment" 
        // ]);
  
        foreach($request->room_id as $room_id) {
            $booking=Booking::create([
                "customer_id" => Auth::user()->userable_id,
                "room_id" => $room_id,
                "from" => $request->from,
                "to" => $request->to,
                "hotel_id" => $request->hotel_id,
            ]);

            $payment=Payment::create([
                'charges'=>$request->total_charges,
                'paymentable_id'=>$booking->id,
                'paymentable_type'=>"App\Models\Booking",
            ]);
            // $booking->payment;
        }



        return redirect('customer/dashboard');
    }
}