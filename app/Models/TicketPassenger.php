<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketPassenger extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'first_name',
        'last_name',
        'date_of_birth',
        'passport_number',
        'nationality',
        'pax_type',//adult kid
    ];
}
