<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SuperAgent;
class Agent extends Model
{
    use HasFactory;

    public $table='agents';

    protected $fillable = [
        'id',
        'user_id',
        'super_agent_id'
    ];

        public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    
    public function visas()
    {
        return $this->hasMany(Visa::class);
    }

    
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    



    public function super_agent(){
        // dd($this);
        return $this->belongsTo(SuperAgent::class,'super_agent_id','id');
    }
    
  
}
