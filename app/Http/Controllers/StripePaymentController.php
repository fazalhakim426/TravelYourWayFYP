<?php
   
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\Ticket;
use App\Models\Visa;
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
    public function stripeVisaPost(Request $request)
    {
        $visa=Visa::find($request->visa_id);
       

       $visa->update([
           'status'=>'Paid',
        ]);

     
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $visa->charges,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Visa Payment" 
        ]);

        Payment::create([
                'charges'=>$visa->charges,
                'paymentable_id'=>$visa->id,
                'paymentable_type'=>"App\Models\Visa",
            ]);
            
            



        return redirect('customer/dashboard');
        
    }


    public function stripeTicketPost(Request $request)
    {
            $ticket=Ticket::find($request->ticket_id);
       
    

       $ticket->update([
           'status'=>'Paid',
        ]);

     
        Payment::create([
                'charges'=>$ticket->total_payable,
                'paymentable_id'=>$ticket->id,
                'paymentable_type'=>"App\Models\Ticket",
            ]);
            
            
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $ticket->total_payable,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Ticket Payment" 
        ]);


        return redirect('customer/dashboard');
        
    }


    public function stripePost(Request $request)
    {
        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->total_charges,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Hotel Payment" 
        ]);
  
        foreach($request->room_id as $room_id) {
            $booking=Booking::create([
                "customer_id" => Auth::user()->userable_id,
                "room_id" => $room_id,
                "from" => $request->from,
                "to" => $request->to,
                "hotel_id" => $request->hotel_id,
            ]);

            Payment::create([
                'charges'=>$request->total_charges,
                'paymentable_id'=>$booking->id,
                'paymentable_type'=>"App\Models\Booking",
            ]);
            // $booking->payment;
        }
        
        return redirect('customer/dashboard');
    }
}