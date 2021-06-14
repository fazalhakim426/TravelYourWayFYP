@extends('super_agent.layout.super_agent_layout')
@section('super_agent')

    <!-- Stats Row Starts Here -->



<br>
<div class="container">

    <!--Grid Form-->

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center " style="background: #edf2f7">
            Add Room.
            <br>
            {{$hotel->country->name }} // {{$hotel->state->name }}//  {{$hotel->city->name }} // {{$hotel->name }}
              
        </div>
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">



            <ul class="list-reset flex border-b">
<div class="md:flex">

    <li class="mr-1">

    <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold"
        href="/super-agent/hotels"> Hotels</a>
    </li>      <li class="mr-1">

        <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" 
        href="/super-agent/hotels/create">Add New Hotel</a>
        </li>



<li class="-mb-px mr-1 ">
<a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="#"> Add Rooms</a>

</li>
<li class="mr-1 ">
</li>
<li class="mr-1">
</li>
</div>
</ul>

            </div>
            <div class="p-3">




                <form id='form_id' method='POST' action="{{route('room-store')}}" class="w-full"  enctype="multipart/form-data" >
                    @csrf
                 <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full px-3">
                             <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                 Room Images
                             </label>
              
                                 <input name="images[]" multiple  type="file"
                                 class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                 id="grid-password" type="file" >

                             <p class="text-grey-dark text-xs italic">Add amazig banner. </p>
                             @error('images')
                             <label class="text-red-500 text-xs italic"
                             for="grid-first-name">
                             {{ $message }}
                             @enderror
                         </div>
                     </div>
                     
                     
            
            
                <div class="flex flex-wrap -mx-3 mb-6">
            
                    
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                               for="grid-state">
                            Room Type
                        </label>
                        <div class="relative">
                            <select id="country-dd"  name="title"  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    id="grid-state">

                                    <option>Single</option>
                                    <option>Double</option>
                                    <option>Triple</option>
                                    <option>Quad</option>
                                    <option>Queen</option>
                                    <option>King</option>
                            </select>
                            @error('title')
                            <label class="text-red-500 text-xs italic"
                            for="grid-first-name">
                            {{ $message }}
                                </label>
                               @enderror
            
                               <input  type='hidden' name='hotel_id' value="{{$hotel->id}}">
                            
                        </div>



                    </div>
            
            
    
                    
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                               for="grid-state">
                                Charges Per Day
                        </label>
                        <div class="relative">
                            <Input id="state-dd" type="number" value='{{old('charges_per_day')}}' name="charges_per_day"   class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    id="grid-state">
                         
                            @error('charges_per_day')
                               <label class="text-red-500 text-xs italic"
                               for="grid-first-name">
                               {{ $message }}
                        </label>
                               @enderror
            
                    
                        </div>
                    </div>
            
                                         
            
    
                    
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                               for="grid-state">
                                Capacity
                        </label>
                        <div class="relative">
                            <Input type="number" value='{{old('capacity')}}' name="capacity"   class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    id="grid-state">
                         
                            @error('capacity')
                               <label class="text-red-500 text-xs italic"
                               for="grid-first-name">
                               {{ $message }}
                        </label>
                               @enderror
            
                    
                        </div>
                    </div>
            
                                          
            
            
                </div>
            
            
                                     
            
            
            
            
        
            
            
            
            
            
            
            
                                            <div class="inline-flex">
                                                 <a href="/super-agent/hotels">
                                        <p class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
                                            Goto Hotels
                                        </p></a>
                                        
                                        <button type=submit class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-r">
                                            Add Room
                                        </button>
                                        </form>

                                    </div>
                           <!--/Grid Form-->





                                        
             


                                 








                                        <table class="table text-grey-darkest">
                                            <thead class="bg-grey-dark text-white text-normal">
                                           <tr>
                                             <th class="border w-1/4 px-4 py-2">Banner</th>
                                             <th class="border w-1/4 px-4 py-2">Type</th>
                                             <th class="border w-1/4 px-4 py-2">capacity</th>
                                             <th class="border w-1/6 px-4 py-2">Charges/day</th>
                                             {{-- <th class="border w-1/7 px-4 py-2">Charges</th> --}}
                                             <th class="border w-1/5 px-4 py-2">Actions</th>
                                           </tr>
                                         </thead>
                                         <tbody>
                                             
                                         @foreach($rooms as $room)
                                         {{-- {{dd($room->images)}} --}}
                                        <tr>
                                           
                                       <td class="border px-4 py-2">     
                                           <img class="w-40  md:w-80 
                                           d:h-auto  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 " 
                                            src="{{asset('storage/images/'.$room->images[0]->image)}}"
                                            />
                                            </td>
                                            <td class="border px-4 py-2">{{$room->title}}</td>
                                            <td class="border px-4 py-2">{{$room->capacity}}</td>
                                                 <td class="border px-4 py-2"> {{$room->charges_per_day}} </td>
                                               
                                                 {{-- <td class="border px-4 py-2"> {{$room->charges_per_day}} PKR</td>
                                                --}}
                                                 
                                                 <td class="border px-4 py-2">
                                                  
                                                     
                                                            
                                                             <form method="post" action="{{ route('room-destroy',$room->id)}}">
                                                             @method('DELETE')
                                                             @csrf
                                                     <button type="submit" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                             <i class="fas fa-trash"></i>
                                                    </button>
                                                    </form>
                                                                                    </td>
                                                                                </tr>
                                                                                    @endforeach
                                                    </tbody>
                                                                        </table>










                                                                    </div>
                                                                </div>








</div>




</div>

@endsection