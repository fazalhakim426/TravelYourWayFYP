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
        'user_id',
        'agent_id',
        'status',
//visa information 
        'visa_apply_country',
        'type',  //visit immigration hajj ummrah
        'days',
//personal information
        'title',
        'passport_number',
        'date_of_birth',
        'first_name',
        'last_name',
        'gender',
//contact informaiton
        'email',
        'phone_number',
        'work_phone',
        'street',
//agent field
        'charges',
        'comments',
        'super_agent_id',//asign

    ];

    protected $attributes = [
        'status' => "Incomplete",
    ];
    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = ucfirst($value);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class,'visa_id');
    }
    
    public function super_agent()
    {
        return $this->belongsTo(User::class, 'super_agent_id');

    }
    

    public function review()
    {
        return $this->hasMany(VisaReview::class,'visa_id');
    }
    

}
