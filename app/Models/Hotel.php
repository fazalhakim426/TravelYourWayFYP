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
        'state_id',
        'country_id',
        'country_id',
    ];



   

    public function images()
    {
        return $this->marphMany(Image::class,'imageable');
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
