
<div class="md:flex p-2">  
@foreach ($hotels as $hotel)

@if(count($hotel->rooms)>0)

    <!--Card 1-->
    <div class="w-full md:w-1/3l p-2 max-w-sm rounded overflow-hidden shadow-lg">
        <a href="{{route('hotel-room',$hotel->id)}}">
        <img class="object-cover md:object-cover h-48 w-full"  src="{{asset('storage/images/'.$hotel->images[0]->image)}}" alt="Mountain">
        </a> 
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{$hotel->name}}</div>
        <p class="text-gray-700 text-base">
       
          {{$hotel->description}}
        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$hotel->country->name }}</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$hotel->state->name }}</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$hotel->city->name }}</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$hotel->address }}</span>
      </div>
    </div>

@endif
@endforeach  </div>
