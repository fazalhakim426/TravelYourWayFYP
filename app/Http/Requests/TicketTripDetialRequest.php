<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketTripDetialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          

        'journey_type'=>'required',  //signle round multi
        'ticket_apply_country'=>'required',
        'departure_airport'=>'required',
        'arrival_airport'=>'required',
        'departure_date'=>'required',
        'class'=>'required',  //  business, first class ,  economy class 
       
        ];
    }
}
