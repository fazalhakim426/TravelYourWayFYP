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
        'customer_id',
        'agent_id',
        'super_agent_id',//asign

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

    ];
    
    protected $attributes = [
        'status' => "Incomplete",
    ];
    public function agent(){
        return $this->belongsTo(Agent::class);
    }
    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = ucfirst($value);
    }
    public function super_agent()
    {
        return $this->hasOne(User::class, 'super_agent_id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
 
    public function payment()
    {
        return $this->morphOne(Payment::class,'paymentable');
    }

    public function reviews()
    {
        return $this->marhpMany(Review::class,'reviewable');
    }

}
