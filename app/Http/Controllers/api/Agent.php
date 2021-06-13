<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;


use App\Models\Agent as AgentModel;
class Agent extends Controller
{

    public function getAgent()
    {
        // return UserResource::collection(User::all());
        return UserResource::collection(
            AgentModel::all()
                                       );

    }
     
}