@extends('super_agent.layout.super_agent_layout')
@section('super_agent')

      
                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                                            <!-- Card Sextion Starts Here -->
 

                                       

                   
                    
                                            <!-- Done Card Sextion Starts Here -->
                                            <div id="totaldone" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                                                <!-- card -->

                                       <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                     <div class="px-6 py-2 border-b border-light-grey">
                                        <div class="font-bold text-xl">Tickets</div>
                                           </div>
                                         <div class="table-responsive">
                                            

                                          <table class="table text-grey-darkest">
                                            <thead class="bg-grey-dark text-white text-normal">
                                           <tr>
                                             <th class="border w-1/7 px-4 py-2">journey type</th>
                                             <th class="border w-1/7 px-4 py-2">class</th>
                                             <th class="border w-1/5 px-4 py-2">Visa Country</th>
                                             <th class="border w-1/5 px-4 py-2">Route#</th>
                                             <th class="border w-1/3 px-4 py-2">Payment</th>
                                             <th class="border w-1/8 px-4 py-2">Order Status</th>
                                             <th class="border w-1/8 px-4 py-2">Actions</th>
                                           </tr>
                                         </thead>
                                         <tbody>
                                         @foreach($user->userable->tickets as $ticket)
      
                                         {{-- {{dd($ticket)}} --}}
      
                                         @if($ticket->status!=null)     
                                           <tr>
      
                                           <td class="border px-4 py-2">
                                          {{$ticket->journey_type   }}
                                          </td>
      
                                           <td class="border px-4 py-2 center">
                                             {{$ticket->class   }}
                                        
                                           </td>
                                             <td class="border px-4 py-2 center">
                                             
                                              issue airline : {{$ticket->issuing_airline}} <br>
                                              Booking Source : {{$ticket->booking_source}}
                                         </td>
                                              <td class="border">
                                                  From: {{$ticket->departure_airport}}<br>
                                                  To: {{$ticket->arrival_airport}} <br>
                                                  on: {{$ticket->departure_date}}
      
                                              </td>
                                               
                                                 <td class="border px-4 py-2">
                                                     
                                                  {{$ticket->total_payable==null?'pending':""}}
      
      
                                                     @if($ticket->total_payable&&$ticket->payment==null)
                                                     <a href='ticket/payments/{{encrypt($ticket->id)}}' class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                                         Pay Now  {{$ticket->total_payable}} pkr
                                                     </a>
                                                     @elseif($ticket->total_payable&&$ticket->payment!=null)
                                                     <a href='done_ticket/{{$ticket->id}}' class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                                        Paid {{ $ticket->total_payable }} pkr
                                                     </a>
                                                      @elseif($ticket->total_payable&&$ticket->status=='Done')
                                                     {{-- <a href='done_ticket/{{$ticket->id}}' class="bg-blue-700 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                                        Review
                                                     </a> --}}
                                                     @endif
      
                                                     
                                                     </td>
                                                 <td class="border px-4 py-2">
                                                {{ $ticket->status}}
      
                                                 </td>
                                                 
                                                 <td class="border px-4 py-2">
                                                     {{-- <a  href="tickets/{{$ticket->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                             <i class="fas fa-eye"></i></a> --}}
                                                            
      
                                                     <a  href="tickets/{{$ticket->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                             <i class="fas fa-expand"></i></a>
                                                           
      
                                                     {{-- </a> --}}
                                                 </td>
      
                                                 
                                             </tr>
      
      
      
      
                                             @endif 
                                             @endforeach
      
                                            
                                         </tbody>
                                     </table>




                                            </div>
                       </div>
                   </div>
                   <!--/Grid done Form-->

                </div>
                @stop