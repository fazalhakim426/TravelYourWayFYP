<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
class Visa extends Model
{
    use HasApiTokens,HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'country',
        'type',
        'user_id',
        'days',
        'arrival_date',
        'visa_apply_country',
        'status',
        'departure_airport',
        'arrival_airport',
        'name',
            'email',
            'country_of_birth',
            'city_of_birth',
            'date_of_birth',
            'marital_status',
            'gender',
            'number_of_people',
            'father_name'
            ,'mother_name',
            'location',
            'parent_location',

            'street_address' ,
            'city' ,
            'state' ,
            'country' ,
            'phone_number' ,
            'phone_number1' ,
            'work_phone' ,
            'postal_code' ,

            'passport_type' ,
            'passport_number' ,
            'passport_issue_date' ,
            'passport_expiry_date' ,
            'passport_issue_country' ,

            'degree_name' ,
            'completion_date' ,
            'employment_status' ,
            'salary' ,
            'job_location' ,

    ];


    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = ucfirst($value);
    }
}
