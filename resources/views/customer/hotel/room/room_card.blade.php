
<div class="md:flex p-2">
@foreach ($hotel->rooms as $room)
<div class="wrapper md:w-1/3   bg-gray-400 p-2 antialiased text-gray-900">
  <div>
      
      <img  class="object-cover  h-40 w-full" src="{{asset('storage/images/'.$room->images[0]->image)}}" alt=" random imgee" class="w-full  object-cover object-center rounded-lg shadow-md">    
      
   <div class="relative px-4 -mt-3  ">
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <div class="flex items-baseline">
        <span class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
          {{$room->title}}
          
        </span>
        <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
          
          <div class='float-right'>
          {{$room->capacity}} members
               <input value="{{$room->id}}" name='room_id[]' type="checkbox">
 
          </div>
              </div>  
      </div>
      
      <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate"> {{$room->name}}</h4>
   
    <div class="mt-1">
      {{$room->charges_per_day}} 
      <span class="text-gray-600 text-sm">   /day</span>
    </div>
    <div class="mt-4">
      <span class="text-teal-600 text-md font-semibold">4/5 ratings </span>
      <span class="text-sm text-gray-600">(based on 234 ratings)</span>
    </div>  
    </div>
   </div>
    
  </div>
    </div>
    
    
    




    <!--Card 1-->
    {{-- <div class="w-full md:w-1/3 p-2 max-w-sm rounded overflow-hidden shadow-lg">
      <img class="w-full" class="lazy" src="{{asset('storage/images/'.$hotel->images[0]->image)}}" alt="Mountain">
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
    </div> --}}

  
@endforeach  </div>


