<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        //    return $this->visas()->count;
           $incomplete = $this->visas()->whereStatus('Incomplete')->get();
           $cancel = $this->visas()->whereStatus('Cancel')->get();
           $completed = $this->visas()->whereStatus('Completed')->get();
           $payment_request = $this->visas()->whereStatus('payment_request')->get();
           $paid = $this->visas()->whereStatus('Paid')->get();
           $done = $this->visas()->whereStatus('Done')->get();
           $status['visa']['incomplete']=count($incomplete);
           $status['visa']['cancel']=count($cancel);
        $status['visa']['completed']=count($completed);
        $status['visa']['payment_request']=count($payment_request);
        $status['visa']['paid']=count($paid);
        $status['visa']['done']=count($done);


        
        $incomplete = $this->ticket()->whereStatus('Incomplete')->get();
        $cancel = $this->ticket()->whereStatus('Cancel')->get();
        $completed = $this->ticket()->whereStatus('Completed')->get();
        $payment_request = $this->ticket()->whereStatus('payment_request')->get();
        $paid = $this->ticket()->whereStatus('Paid')->get();
        $done = $this->ticket()->whereStatus('Done')->get();
     $status['ticket']['incomplete']=count($incomplete);
     $status['ticket']['cancel']=count($cancel);
     $status['ticket']['payment_request']=count($payment_request);
     $status['ticket']['paid']=count($paid);
     $status['ticket']['done']=count($done);


     
        return $status;

      
        
    }

}
