<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>User</title>
</head>

<body>
@include('customer.layout.navigation')
            <!--Main-->
            
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                    <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    {{$count['incomplete']}}
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Incomplete
                                </a>
                            </div>
                        </div>


                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    {{$count['cancel']}}
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Cancelled 
                                </a>
                            </div>
                        </div>





                        <div class="shadow bg-info   border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    {{$count['completed']}}
                                    
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Submitted
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    {{$count['payment_request']}}
                                    
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total In Progress
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    {{$count['done']}}
                                    
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Done
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /Stats Row Ends Here -->




 
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif








                    
                                            <!-- Card Sextion Starts Here -->
                                            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                                                <!-- card -->

                                       <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                     <div class="px-6 py-2 border-b border-light-grey">
                                        <div class="font-bold text-xl">Visa History</div>
                                           </div>
                                         <div class="table-responsive">
                                             <table class="table text-grey-darkest">
                                      <thead class="bg-grey-dark text-white text-normal">
                                     <tr>
                                       <th class="border w-1/5 px-4 py-2">Name</th>
                                       <th class="border w-1/5 px-4 py-2">Address</th>
                                       <th class="border w-1/5 px-4 py-2">Visa Country</th>
                                       <th class="border w-1/5 px-4 py-2">passport#</th>
                                       <th class="border w-1/5 px-4 py-2">Payment</th>
                                       <th class="border w-1/7 px-4 py-2">Order Status</th>
                                       <th class="border w-1/7 px-4 py-2">Actions</th>
                                     </tr>
                                   </thead>
                                   <tbody>
        
                                   @foreach($visas as $visa)
                                   @if($visa->status!=null)     
<tr>


                                     <td class="border px-4 py-2">
                                    {{$visa->title." ".$visa->first_name." ".$visa->last_name}}
                                    
                                    </td>

                                     <td class="border px-4 py-2 center">
                                       {{$visa->street." ".$visa->phone_number}}
                                  
                                     </td>
                                       <td class="border px-4 py-2 center">
                                       {{ $visa->type=="Hajj"|| $visa->type=="Ummrah"?"":$visa->visa_apply_country}}<br>
                                       
                                       {{$visa->type}}
                                   </td>
                                        <td class="border">
                                        {{$visa->passport_number}}

                                        </td>
                                         
                                           <td class="border px-4 py-2">{{$visa->charges==null?'Pending':""}}

                                            @if($visa->charges&&$visa->payment==null)
                                            <a href='visa/payments/{{encrypt($visa->id)}}' class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                                Pay Now {{$visa->charges}} pkr
                                            </a>

                                            @elseif($visa->payment!=null&&$visa->charges)
                                            <a href='done_visa/{{$visa->id}}' class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                              Paid {{ $visa->charges }} pkr
                                            </a> @elseif($visa->charges&&$visa->status=='Done')
                                            {{-- <a href='done_visa/{{$visa->id}}' class="bg-blue-700 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                               Review
                                            </a> --}}
                                            @endif


                                            
                                               </td>
                                           <td class="border px-4 py-2">
                                               {{-- @if($visa->status=="Paid")
                                           <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                
                                               @elseif($visa->status=="Cancel")
                                               <button class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                    
                                                   @elseif($visa->status=="Paid")
                                                   <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                        
                                                           
                                               <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                 
                                               @endif
                                           </button> --}}
                                          
                                           {{ $visa->status}}

                                       

                                           </td>
                                           
                                           <td class="border px-4 py-2">
                                        <a  href="visas/{{$visa->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                            <i class="fas fa-expand"></i></a>



                      


                                           </td>

                                           
                                       </tr>




                                       @endif 
                                       @endforeach

                                      
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                   <!--/Grid Form-->















                   
                    
                                            <!-- Card Sextion Starts Here -->
                                            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                                                <!-- card -->

                                       <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                     <div class="px-6 py-2 border-b border-light-grey">
                                        <div class="font-bold text-xl">Ticket History</div>
                                           </div>
                                         <div class="table-responsive">
                                             <table class="table text-grey-darkest">
                                      <thead class="bg-grey-dark text-white text-normal">
                                     <tr>
                                       <th class="border w-1/7 px-4 py-2">journey type</th>
                                       <th class="border w-1/7 px-4 py-2">class</th>
                                       <th class="border w-1/5 px-4 py-2">Visa Country</th>
                                       <th class="border w-1/5 px-4 py-2">Route#</th>
                                       <th class="border w-1/6 px-4 py-2">Payment</th>
                                       <th class="border w-1/8 px-4 py-2">Order Status</th>
                                       <th class="border w-1/8 px-4 py-2">Actions</th>
                                     </tr>
                                   </thead>
                                   <tbody>
        
                                   @foreach($tickets as $ticket)

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
                   <!--/Grid Form-->





















                   
                    
                                            <!-- Card Sextion Starts Here -->
                                            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                                                <!-- card -->

                                       <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                     <div class="px-6 py-2 border-b border-light-grey">
                                        <div class="font-bold text-xl">Booked Room</div>
                                           </div>
                                         <div class="table-responsive">
                                             <table class="table text-grey-darkest">
                                      <thead class="bg-grey-dark text-white text-normal">
                                     <tr>
                                       <th class="border w-1/4 px-4 py-2">Hotel</th>
                                       <th class="border w-1/4 px-4 py-2">Addrees</th>
                                       <th class="border w-1/6 px-4 py-2">Room</th>
                                       <th class="border w-1/8 px-4 py-2">Members</th>
                                       <th class="border w-1/5 px-4 py-2">Duration</th>
                                       <th class="border w-1/5 px-4 py-2">Payment</th>
                                       <th class="border w-1/7 px-4 py-2">Actions</th>
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
                          
                                           
                                           <td class="border px-4 py-2">
                   
                                                     

                                                       <form method="POST" action="{{route('booking.destroy') }}"  >
                                                       @method('DELETE')

                                                       <input type="hidden" name='id' value='{{$booking->id}}'>
                                                     @csrf
                                               <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                       <i class="fas fa-trash"></i>
                                                       </form>
                                               </a>
                                           </td>

                                           
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
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="{{URL::asset('admin-master/main.js')}}"></script>
</body>

</html>