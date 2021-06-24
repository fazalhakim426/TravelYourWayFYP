<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps=false;
    protected $fillable = [
        'country',
        'state_id',
        'country_id',

        'hotel_name',
        'name',
        'description',
        'address',
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
