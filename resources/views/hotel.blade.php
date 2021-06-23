<x-app-layout>  
{{-- @push('css')
    
<link href="{{asset('resources/css/hotel.css')}}" rel="stylesheet" type="text/css">


@endpush --}}
{{-- {{dd($)}} --}}
{{-- @@livewire('component', ['user' => $user], key($user->id)) --}}
@livewire('dashboard.hotel.show', ['countries' => $countries])

</x-app-layout>