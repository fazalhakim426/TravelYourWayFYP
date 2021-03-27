<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
class Country extends Model
{
    
    use HasApiTokens,HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'country',
    ];

    public function setCountryAttribute($value)
    {
        $this->attributes['country'] = ucfirst($value);
    }
}
