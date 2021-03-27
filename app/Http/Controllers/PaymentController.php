<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Visa;
use App\Models\User;
use App\Notifications\SendPaymentNotification;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    } 
    
    public function applycharges(Request $request){
        User::find($request->user_id)->notify(new SendPaymentNotification);
        $request->validate(
            [
                'charges'=>'required|numeric|gt:1000',
            ]
            );
       
        Visa::where('id',$request->id)->update([
            'status'=>"Payment Request",
            'charges'=>$request->charges,
        ]);
        return back();
    }
    
    public function pay($id)//temparoy payment
    {
        Visa::where('id',$id)->update([
            'status'=>"Paid"
        ]);
        return back();
        //
    } public function done($id)//temparoy payment
    {
        Visa::where('id',$id)->update([
            'status'=>"Done"
        ]);
        return back();
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
