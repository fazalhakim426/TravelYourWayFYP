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


    public function super_agent(){
        // dd($this);
        return $this->belongsTo(SuperAgent::class,'super_agent_id','id');
    }
    
    // public function super_agents()
    // {
    //     return $this->belongsToMany(SuperAgent::class,'agent_super_agents');
    // }

    //     public function pending_super_agent()
    //     {
    //         return $this->belongsToMany(SuperAgent::class,'agent_super_agents')
    //         ->wherePivot('status',1);
    //     }

    //     public function my_super_agent()
    //     {
    //         return $this->belongsToMany(SuperAgent::class,'agent_super_agents')
    //         ->wherePivot('status',2);;
    //    }
}
