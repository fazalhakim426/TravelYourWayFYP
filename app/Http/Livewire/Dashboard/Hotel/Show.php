<?php

namespace App\Http\Livewire\Dashboard\Hotel;

use App\Models\Room;
use App\Models\State;
use Livewire\Component;

class Show extends Component
{
    // public $hotel;
    public $countries;
    public $rooms;
    public $cities;
    public $state;
    public $from;
    public $to;
    public $check_in;
    public $check_out;




    public function render()
    {
        return view('livewire.dashboard.hotel.show');
    }

    public function countrySelected($id,$name)
    {

        $this->rooms=null;
    }
   
}
