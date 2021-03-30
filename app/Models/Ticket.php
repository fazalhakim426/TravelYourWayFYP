<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory,HasApiTokens;

    public $timestamps = false;
    protected $fillable = [
          
        'user_id',
        'agent_id',
        
        'booking_source',
        'journey_type',  //signle round multi
        'issuing_airline',


        'ticket_apply_country',
        'departure_airport',
        'arrival_airport',
        'departure_date',
        'class',  //  business, first class ,  economy class 
       
          //agent field
        
          'PNR',
          'base_fare',
          'discount',
          'total_payable',
          'super_agent_id',//asign by agent//show passenger details and passport details


    ];

}
