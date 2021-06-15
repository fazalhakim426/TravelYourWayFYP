<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

   public $timestamps=false;

    protected $fillable=[
        'capacity',
        'title',
        'charges_per_day',
    ];


    public function payment()
    {
        return $this->hasOne(Payment::class,'hotel_id');
    }


    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }
}
