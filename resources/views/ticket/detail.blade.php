

    <div class="flex flex-col">
        @error('total_payable')
            <p class="text-red-700 italic ">{{ $message }}</p>
        @enderror

        <div class="flow-root bg-gray-400">
            <div class="my-4 block text-gray-700 text-center bg-gray-500 px-4 py-2">
                Ticket  To {{ $ticket->ticket_apply_country }} 
                {{ $ticket->visa_apply_country }}
    
            </div>
          </div>





        @can('customer')

        @if($ticket->instructions)
                <div class="flow-root bg-gray-200">
                    <div class="my-4 block text-red-700 text-center bg-gray-400 px-4 py-2">
                       Read Instruction: {{$ticket->instructions}}
                    </div>
                </div>
          @endif
    
          <div class='float-center'>

            <a href="/download-ticket-document/{{ encrypt($ticket->id) }}" 
                    class="bg-indigo-600  float-right cursor-pointer rounded p-1 md:w-1/5 mx-1 text-white">
                    <i class="fas fa-download"></i> Download Ticket.</a>
             
            </div>

        @endcan
        @cannot('customer')

        @if ($ticket->payment)
            <form action="{{ route('ticket-upload-documents') }}" enctype="multipart/form-data" method="post">
                @csrf
                <table class="table">
                    <tr>
                        <td colspan="2">
                            @if($ticket->documents)
                            Update The final documents.
                            @else
                                
                            Upload The final documents.
                            @endif
                            <div class="font-bold text-xl">


                        </td>
                    </tr>
                    <tr>
                        <td>



                            <input name='id' value="{{ $ticket->id }}" type=hidden>
                            <input name='customer_id' value="{{ $ticket->customer_id }}" type=hidden>

                            <input name='documents' value="{{ $ticket->documents }}" class="appearance-none" id="charges"
                                type="file">

                                @error('documents')
                              <span class="text-red-500">  {{$message}}
                              </span>
                            @enderror
     
                        </td>
                        <td>
                            <button class="bg-blue-700 cursor-pointer rounded p-1 mx-1 text-white"
                                type="submit">Submit</button>

                        </td>
                    </tr>
                </table>
            </form>


        @elseif($ticket->total_payable==null|$ticket->payment==null)

          
                <table> 
                     <form action="{{ route('ticket-apply-charges') }}" method="post">
                @csrf
                    <tr>

                        <td class='md:w-1/3'>
                            {{-- {{dd($ticket)}} --}}
                            <label for="instructions">Instruction</label>
                            <textarea  name='instructions' id='instructions' line='3'
                            class=" @error('instructions') border-red-500 @enderror 
                            w-full  bg-gray-200 text-gray-700 "
                             value="{{ old('instructions') }}" 
                            type="number" placeholder="Add instruction">
                            {{ $ticket->instructions }}
                            </textarea>
                        </td>

                        <td class='md:w-1/3'>
                              <label for="total_payable">Charges</label>
                            <input name='id' value="{{ $ticket->id }}" type=hidden>
                            <input name='customer_id' value="{{ $ticket->customer_id }}" type=hidden>
                            <input name='total_payable' value="{{ $ticket->total_payable }}"
                                class="appearance-none ml-8  @error('total_payable') border-red-500 @enderror block  bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
                                id="total_payable" value="{{ old('total_payable') }}" type="number" placeholder="Charges PKR">

                        </td>

                        <td class='md:w-1/3'>

                            <button class=" bg-blue-700 cursor-pointer rounded p-1 mx-1 text-white"
                                type="submit">Submit</button>

                        </td>
                    </tr>

            </form>
            </table>

        @endif
        @endcannot



        <br>
        <br>
        {{-- {{dd($ticket)}} --}}

        <table class="table border ">
        
            <tbody>
                <tr>

                    <td class=" text-normal">Agent Name</td>
                    <td>{{ $ticket->agent->user->name }}</td>
                </tr>
                <tr>

                    <td class=" text-normal">User email</td>
                    <td>{{ $ticket->customer->user->email }}</td>
                </tr>
                <tr>

                    <td class=" text-normal">Charges</td>
                    <td>              
                        {{ $ticket->payment == null ? 'Not Paid' : "Paid" }}
                        {{ $ticket->total_payable == null ? 'Not Assign' : $ticket->total_payable }}
   
                    
                    </td>
                </tr>
                <tr>

                    <td class=" text-normal">Booking Source</td>
                    <td>{{ $ticket->booking_source }}</td>
                </tr>
                <tr>

                    <td class=" text-normal">Issuing Airline</td>
                    <td>{{ $ticket->issuing_airline }}</td>

                </tr>
                <tr>


                    <td class=" text-normal">Ticket Apply Country</td>
                    <td>{{ $ticket->ticket_apply_country }}</td>
                </tr>
                <tr>
                    <td class=" text-normal">Departure Airport</td>
                    <td>
                       {{$ticket->departure_airport}}
                    </td>
                </tr>


                <tr>
                    <td class=" text-normal">Departure Date</td>
                    <td>
                        {{$ticket->departure_date}}
                    </td>
                </tr>


                <tr>

                    <td class=" text-normal">journey Type</td>
                    <td>{{ $ticket->journey_type }}</td>
                </tr>
                

            </tbody>
        </table>





    </div>





    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
      <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
          <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
             Passengers
             
          </div>
          <div class="p-3">
              <table class="table-responsive w-full rounded justify-center">
                  <thead>
                   

                        <tr>
                          <th class="bg-white border w-1/6 px-4 py-2">Title</th>
                          <th class="bg-white border w-1/6 px-4 py-2">First Name</th>
                          <th class="bg-white border w-1/6 px-4 py-2">Last Nmae</th>
                          <th class="bg-white border w-1/6 px-4 py-2">DOB</th>
                          <th class="bg-white border w-1/6 px-4 py-2">Passport #</th>
                          <th class="bg-white border w-1/6 px-4 py-2">Nationality</th>

                        </tr>
                  </thead>
                  <tbody>
                  @foreach($ticket->passengers as $p)
<tr>
  <td class="border px-4 py-2">{{$p->title}}</td>

  <td class="border px-4 py-2">{{$p->first_name}}</td>
  
<td class="border px-4 py-2">{{$p->last_name}}</td>
<td class="border px-4 py-2">{{$p->date_of_birth}}</td>
<td class="border px-4 py-2">{{$p->passport_number}}</td>
<td class="border px-4 py-2">{{$p->nationality}}</td>

</tr>
@endforeach
                  </tbody>
              </table>
         
          </div>
      </div>
  </div>

  <!--/Grid Form-->
