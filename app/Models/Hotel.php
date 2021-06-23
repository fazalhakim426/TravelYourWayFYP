<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps=false;
    protected $fillable = [
        'country',
        'hotel_name',
        'description',
        'address',
        'state_id',
        'country_id',
    ];
    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
