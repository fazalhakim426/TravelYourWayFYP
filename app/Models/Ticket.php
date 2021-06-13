<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
class Ticket extends Model
{
    use HasFactory,HasApiTokens;

    public $timestamps = false;
    protected $fillable = [
          
        'user_id',
        'agent_id',
        'super_agent_id',
        'status',
        'booking_source',
      
        'issuing_airline',

        'journey_type',  //signle round multi
        'ticket_apply_country',
        'departure_airport',
        'arrival_airport',
        'departure_date',
        'class',
          //  business, first class ,  economy class 
       
          //agent field
        
          'PNR',
          'base_fare',
          'discount',
          'total_payable',
          'super_agent_id',//asign by agent//show passenger details and passport details


    ];

    
    
    public function super_agent()
    {
        return $this->belongsTo(User::class, 'super_agent_id');

    }

    public function agent(){
        return $this->belongsTo(Agent::class);
    }

    public function passengers(){
        return $this->hasMany(Passenger::class,'passengerable_type');
    }

    public function payment()
    {
        return $this->marhpOne(Payment::class,'paymentable_type');
    }
   
    public function reviews()
    {
        return $this->marhpMany(Review::class,'reviewable');
    }

}
