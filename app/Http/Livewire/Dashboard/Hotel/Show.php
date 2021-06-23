<?php

namespace App\Http\Livewire\Dashboard\Hotel;

use App\Models\Room;
use Livewire\Component;

class Show extends Component
{
    // public $hotel;
    public $countries;
    public $rooms;


    
    public function mount(){
        $this->rooms=Room::with(['hotel','images'])->limit(6)->get();
    }
    public function render()
    {
        return view('livewire.dashboard.hotel.show');
    }
   
}
