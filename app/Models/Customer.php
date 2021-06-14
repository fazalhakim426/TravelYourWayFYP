<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;
    public $fillable=[
        'user_id',
        'id',
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function visas()
    {
        return $this->hasMany(Visa::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    public function count_status()
    {  
           return $this->visas()->get();
            
   
        // $status['visa']['incomplete']
        // $status['visa']['completed']
        // $status['visa']['payment_request']
        // $status['visa']['paid']
        // $status['visa']['done']

      
        
    }

}
