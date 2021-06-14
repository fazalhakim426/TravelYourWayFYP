<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerAPIController extends Controller
{
    public function count_status($id)
    {
        $customer=Customer::find($id);
        return $customer->count_status();
    }
}
