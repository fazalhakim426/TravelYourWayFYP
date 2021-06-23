<x-app-layout>  

@livewire('dashboard.hotel.show', ['check_in'=>isset($check_in)?$check_in:null,'check_out'=>isset($check_out)?$check_out:null,'from'=>$from,'to'=>$to,'countries' => $countries,'rooms'=>$rooms])

</x-app-layout>