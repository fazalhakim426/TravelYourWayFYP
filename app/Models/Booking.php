<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;
class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
        'from',
        'to',
        'room_id',
        'customer_id',
        'hotel_id',
    ];
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function payment()
    {
        return $this->morphOne(Payment::class,'paymentable');
    }




}
