@extends('super_agent.layout.super_agent_layout')
@section('super_agent')



            <!-- Stats Row Starts Here -->
        


            <br>
            <div class="container">
    
                <!--Grid Form-->
    
                <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center " style="background: #edf2f7">
                      List OF hotels
                    </div>
                        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
    
    
    
                        <ul class="list-reset flex border-b">
            <div class="md:flex">

            <li class="mr-1">

                <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="/super-agent/hotels"> Hotels</a>
                </li>      <li class="mr-1">

                    <a 
                    class="bg-white inline-block py-2 px-4 text-grey-light font-semibold"
                    href="/super-agent/hotels/create">Add New Hotel</a>
                    </li>

        <li class="-mb-px mr-1 ">
        <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" >Add Rooms</a>

        </li>


          
            <li class="mr-1 ">
            </li>
            <li class="mr-1">
            </li>
            </div>
            </ul>
    
                        </div>
                        <div class="p-3">
    
    
            
                            <table class="table text-grey-darkest">
                                <thead class="bg-grey-dark text-white text-normal">
                               <tr>
                                 <th class="border w-1/4 px-4 py-2">Banner</th>
                                 <th class="border w-1/4 px-4 py-2">Country</th>
                                 <th class="border w-1/6 px-4 py-2">Hotel Name</th>
                                 {{-- <th class="border w-1/7 px-4 py-2">Charges</th> --}}
                                 <th class="border w-1/5 px-4 py-2">Actions</th>
                               </tr>
                             </thead>
                             <tbody>
                             
                             @foreach($hotels as $hotel)
                            <tr>
                               
                           <td class="border px-4 py-2">     
                               <img class="w-40  md:w-80 
                               d:h-auto  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 " 
                                src="{{asset('storage/images/'.$hotel->images[0]->image)}}"
                                />
                                </td>
                                     <td class="border px-4 py-2">{{$hotel->country->name}}</td>
                                     <td class="border px-4 py-2"> {{$hotel->name}} </td>
                                   
                                     {{-- <td class="border px-4 py-2"> {{$hotel->charges_per_day}} PKR</td>
                                    --}}
                                     
                                     <td class="border px-4 py-2">
                                      
                                         <a href="add-room/{{$hotel->id}}"class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                 <i class="fas fa-edit"></i></a>
                                                
                                                 <form method="post" action="{{ route('hotels.destroy',$hotel->id)}}">
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
                <!--/Grid Form-->
    
    
    
    
    
    
    
            </div>
    
    
    
    
            @endsection