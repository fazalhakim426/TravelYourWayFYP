
<div class="md:flex p-2">  
@foreach ($hotels as $hotel)


    <!--Card 1-->
    <div class="w-full md:w-1/3 p-2 max-w-sm rounded overflow-hidden shadow-lg">
        <a href="{{route('hotel-room',$hotel->id)}}">
        <img class="w-full" class="lazy" src="{{asset('storage/images/'.$hotel->images[0]->image)}}" alt="Mountain">
        </a> 
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{$hotel->name}}</div>
        <p class="text-gray-700 text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$hotel->country->name }}</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$hotel->state->name }}</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$hotel->city->name }}</span>
      </div>
    </div>


@endforeach  </div>
