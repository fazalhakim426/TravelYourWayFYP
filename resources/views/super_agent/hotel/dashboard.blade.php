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
                    <a 
                    class="bg-white inline-block border-l border-t 
                    border-r rounded-t py-2 px-4 text-blue-dark 
                    font-semibold" href="/super-agent/hotels/dashboard">
                     Dashboard</a>
                 </li>  


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
                                 <th class="border w-1/4 px-4 py-2">Hotel</th>
                                 <th class="border w-1/4 px-4 py-2">Addrees</th>
                                 <th class="border w-1/6 px-4 py-2">Room</th>
                                 <th class="border w-1/8 px-4 py-2">Members</th>
                                 <th class="border w-1/5 px-4 py-2">Duration</th>
                                 <th class="border w-1/5 px-4 py-2">Payment</th>
                               </tr>
                             </thead>
                             <tbody>
  
                             @foreach($bookings as $booking)
                             @if($booking->room!=null)     
                               <tr>

                               <td class="border px-4 py-2">
                              Name : {{$booking->hotel->name   }}<br>
                              Address: {{$booking->hotel->address   }}
                              </td>

                               <td class="border px-4 py-2 center">
                                  Country: {{$booking->hotel->country->name   }}<br>
                                  State: {{$booking->hotel->state->name   }} <br>
                                  City :{{$booking->hotel->city->name   }}<br>
                                  Address: {{$booking->hotel->address   }}
                            
                               </td>
                               <td class="border px-4 py-2 center">
                                 
                                  {{$booking->room->title}}<br>
                                  {{$booking->room->charges_per_day}} pkr/day

                             </td> <td class="border px-4 py-2 center">
                                 
                              {{$booking->room->capacity}}
                         </td>
                                  <td class="border">
                                      From: {{$booking->from}}<br>
                                      To: {{$booking->to}} <br>

                                  </td>
                                   
                                     <td class="border px-4 py-2">
                                         
                                         @if($booking->payment==null)
                                                    Pending
                                                  
                                         @else
                                           Paid
                                                        
                                         @endif

                                         
                                         </td>
                    
                                     
                                     {{-- <td class="border px-4 py-2">
             
                                               

                                                 <form method="POST" action="{{route('booking.destroy') }}"  >
                                                 @method('DELETE')

                                                 <input type="hidden" name='id' value='{{$booking->id}}'>
                                               @csrf
                                         <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                 <i class="fas fa-trash"></i>
                                                 </form>
                                         </a>
                                     </td> --}}

                                     
                                 </tr>




                                 @endif 
                                 @endforeach

                                
                             </tbody>
                         </table>









    
    
    
    
    
    
                                                    
                         
        
                         </div>
                        </div>
                    </div>
                <!--/Grid Form-->
    
    
    
    
    
    
    
            </div>
    
    
    
    
            @endsection