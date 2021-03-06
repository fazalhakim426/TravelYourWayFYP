<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $fillable=[
        'passengerable',
        'passengerable_id',
        'title',
        'first_name',
        'last_name',
        'date_of_birth',
        'passport_number',
        'nationality',
        'pax_type',//adult kid
    ];
}
