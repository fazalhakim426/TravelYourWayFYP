@extends('customer.layout.customer_layout')
@section('customer')

    <div class="flex flex-col">
        <!-- Stats Row Starts Here -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <div
                class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        {{ $count['incomplete'] }}
                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Incomplete
                    </a>
                </div>
            </div>


            <div
                class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        {{ $count['cancel'] }}
                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Total Cancelled
                    </a>
                </div>
            </div>





            <div
                class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        {{ $count['completed'] }}

                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Total Submitted 
                    </a>
                </div>
            </div>

            <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        {{ $count['payment_request'] }}

                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Total In Progress
                    </a>
                </div>
            </div>

            <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        {{ $count['done'] }}

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
                                <th class="border w-1/5 px-4 py-2"> Create At </th>
                                <th class="border w-1/5 px-4 py-2">Type</th>
                                <th class="border w-1/5 px-4 py-2">Payment</th>
                                <th class="border w-1/5 px-4 py-2">Order Status</th>
                                <th class="border w-1/3 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($visas as $visa)
                                @if ($visa->status != null)
                                    <tr>
@if($visa->created_at)
<td>

    {{ $visa->created_at->diffForHumans() }} <br>
</td>
                                         
   
@else
<td>  Last Version</td>
  
@endif

                                        <td class="border px-4 py-2 center">
                                           
                                            {{ $visa->type }}
                                        </td>
           

                                        <td class="border px-4 py-2">{{ $visa->charges == null ? 'Pending' : '' }}
                                            @if($visa->status=='Cancel')
                                            Visa Cancelled

                                            @elseif ($visa->charges && $visa->payment == null)
                                                <a href='visa/payments/{{ encrypt($visa->id) }}'
                                                    class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                                    Pay Now {{ $visa->charges }} pkr
                                                </a>

                                            @elseif($visa->payment!=null&&$visa->charges)
                                                <a href='done_visa/{{ $visa->id }}'
                                                    class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                                    Paid {{ $visa->charges }} pkr
                                            </a> @elseif($visa->charges&&$visa->status=='Done')
                                                {{-- <a href='done_visa/{{$visa->id}}' class="bg-blue-700 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                               Review
                            </a> --}}
                                            @endif



                                        </td>
                                        <td class="border px-4 py-2">
                                            {{-- @if ($visa->status == 'Paid')
                           <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                
                               @elseif($visa->status=="Cancel")
                               <button class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                    
                                   @elseif($visa->status=="Paid")
                                   <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                        
                                           
                               <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                 
                               @endif
                           </button> --}}

                                            {{ $visa->status }}



                                        </td>

                                        <td class="border px-4 py-2">




                                            {{-- <td class="border px-4 py-2">
                                            <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                    <i class="fas fa-eye"></i></a>
                                            <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                    <i class="fas fa-edit"></i></a>
                                            <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                    <i class="fas fa-trash">


                                                    </i>
                                            </a> --}}

                                            <div class='display: table'>
                                           
                                                <a href="view-visa/{{ $visa->id }}"
                                                    class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-white">
                                                    <i class="fas fa-eye"></i></a>
                                                        
                                                    @if($visa->status=='Submitted'||$visa->status=='Incomplete')
                                                    <a href="visas/{{ $visa->id }}"
                                               class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-white">
                                               <i class="fas fa-edit"></i></a>

                                               @endif      
                                            </div>



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
                                <th class="border w-1/5 px-4 py-2">  Create At </th>
                                <th class="border w-1/5 px-4 py-2">journey type</th>
                                 <th class="border w-1/5 px-4 py-2">Payment</th>
                                <th class="border w-1/5 px-4 py-2">Order Status</th>
                                <th class="border w-1/5 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($tickets as $ticket)

                                {{-- {{dd($ticket)}} --}}

                                @if ($ticket->status != null)
                                    <tr>

                                        <td class="border px-4 py-2">
                                         {{ $ticket->created_at->diffForHumans() }} <br>
                        
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $ticket->journey_type }}
                                        </td>

                                      

                                        <td class="border px-4 py-2">

                                            {{ $ticket->total_payable == null ? 'pending' : '' }}


                                            @if($ticket->status=='Cancel')
                                                    Ticket Cancelled
                                            @elseif($ticket->total_payable && $ticket->payment == null)
                                            
                                                <a href='ticket/payments/{{ encrypt($ticket->id) }}'
                                                    class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                                
                                                    Pay Now {{ $ticket->total_payable }} pkr
                                                </a>

                                            @elseif($ticket->total_payable&&$ticket->payment!=null)
                                                <a href='done_ticket/{{ $ticket->id }}'
                                                    class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                                    Paid {{ $ticket->total_payable }} pkr
                                                </a>
                                            @elseif($ticket->total_payable&&$ticket->status=='Done')
                                                {{-- <a href='done_ticket/{{$ticket->id}}' class="bg-blue-700 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                  Review
                               </a> --}}
                                            @endif


                                        </td>
                                        <td class="border px-4 py-2">
                                            {{ $ticket->status }}

                                        </td>

                                        <td class="border px-4 py-2">
                                            {{-- <a  href="tickets/{{$ticket->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                       <i class="fas fa-eye"></i></a> --}}
{{-- {{dd($ticket->status)}} --}}
                                                  
                                            <a href="view-ticket/{{ $ticket->id }}"
                                                class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-white">
                                                <i class="fas fa-eye"></i></a>

                                              @if($ticket->status=='Submitted'||$ticket->status=='Incomplete')
                                            <a href="tickets/{{ $ticket->id }}"
                                                class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-white">
                                                <i class="fas fa-edit"></i></a>
                                                @endif




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




    </div>
@stop
