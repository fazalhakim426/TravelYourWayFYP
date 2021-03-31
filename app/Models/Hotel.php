<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps=false;
    protected $fillable = [
        'country',
        'hotel_name',
        'charges_per_day',
    ];

   

    public function payment()
    {
        return $this->hasOne(Payment::class,'hotel_id');
    }
}
