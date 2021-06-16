<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $fillable = [
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

    public function booking()
    {
        return $this->hasMany(Booking::class);
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
        $status['visa']['incomplete'] = count($incomplete);
        $status['visa']['cancel'] = count($cancel);
        $status['visa']['completed'] = count($completed);
        $status['visa']['payment_request'] = count($payment_request);
        $status['visa']['paid'] = count($paid);
        $status['visa']['done'] = count($done);
        $incomplete = $this->ticket()->whereStatus('Incomplete')->get();
        $cancel = $this->ticket()->whereStatus('Cancel')->get();
        $completed = $this->ticket()->whereStatus('Completed')->get();
        $payment_request = $this->ticket()->whereStatus('payment_request')->get();
        $paid = $this->ticket()->whereStatus('Paid')->get();
        $done = $this->ticket()->whereStatus('Done')->get();
        $status['ticket']['incomplete'] = count($incomplete);
        $status['ticket']['cancel'] = count($cancel);
        $status['ticket']['payment_request'] = count($payment_request);
        $status['ticket']['paid'] = count($paid);
        $status['ticket']['done'] = count($done);
        return $status;
    }

    public function count_status_plus()
    {
        //    return $this->visas()->count;
        $incompleted = $this->visas()->whereStatus('Incomplete')->get();
        $cancel = $this->visas()->whereStatus('Cancel')->get();
        $completed = $this->visas()->whereStatus('Submitted')->get();
        $payment_request = $this->visas()->whereStatus('Payment Request')->get();
        $paid = $this->visas()->whereStatus('Paid')->get();
        $done = $this->visas()->whereStatus('Done')->get();


        $t_incompleted= $this->ticket()->whereStatus('Incomplete')->get();
        $t_cancel = $this->ticket()->whereStatus('Cancel')->get();
        $t_completed = $this->ticket()->whereStatus('Submitted')->get();
        $t_payment_request = $this->ticket()->whereStatus('Payment Request')->get();
        $t_paid = $this->ticket()->whereStatus('Paid')->get();
        $t_done = $this->ticket()->whereStatus('Done')->get();


        $status['incomplete'] = count($incompleted)+count($t_incompleted);
        $status['cancel'] = count($cancel)+count($t_cancel);
        $status['completed'] = count($completed)+count($t_completed);
        $status['payment_request'] =  count($payment_request)+count($t_payment_request);
        $status['paid'] =count($paid)+count($t_paid);
        $status['done'] = count($done)+count($t_done);

        return $status;
    }
}
