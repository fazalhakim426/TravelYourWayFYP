<div class="flex flex-col">
<div class="flow-root bg-gray-400">
        <div class="my-4 block text-gray-700 text-center bg-gray-500 px-4 py-2">
            {{ $visa->type }} To
            {{ $visa->visa_apply_country }}
{{-- {{dd($visa)}} --}}
        </div>
      </div>


    @can('customer')
    
      <div class="flow-root bg-gray-200">
        <div class="my-4 block text-red-700 text-center bg-gray-400 px-4 py-2">
            Read Instruction: {{$visa->instructions}}
        </div>
      </div>
<div class='float-center'>
    @if($visa->documents)  
<a href="/download-visa-document/{{ encrypt($visa->id) }}" 
        class="bg-indigo-600  float-right cursor-pointer rounded p-1 md:w-1/5 mx-1 text-white">
        <i class="fas fa-download"></i> Download {{$visa->type}}.</a>
        @endif
 
</div>
         @endcan
    @cannot('customer')

    @if ($visa->payment && $visa->payment->refunded)

    @elseif ($visa->payment)
        <form action="{{ route('visa-upload-documents') }}" enctype="multipart/form-data" method="post">
            @csrf
            <table class="table">
                <tr>
                    <td colspan="2">

                        @if($visa->documents)
                        Update  {{ $visa->type }} final documents.
                        @else
                            
                        Upload {{ $visa->type }} final documents.
                        @endif

                    </td>
                </tr>
                <tr>
                    <td>



                        <input name='id' value="{{ $visa->id }}" type=hidden>
                        <input name='customer_id' value="{{ $visa->customer_id }}" type=hidden>
                        <input name='documents' value="{{ $visa->documents }}" class="appearance-none" id="charges"
                            type="file">
                        @error('documents')
                              <span class="text-red-500">  {{$message}}
                              </span>
                              @enderror

                    </td>
                    <td>
                        <button class="bg-blue-700 cursor-pointer rounded p-1 mx-1 text-white"
                            type="submit">Upload Document</button>

                    </td>
                </tr>
            </table>
        </form>
    

    @elseif($visa->charges==null|$visa->payment==null)

        <form action="{{ route('visa-apply-charges') }}" method="post">
            @csrf
            <table class='table'>
                
                <tr>
                    
                    <td>
                        {{-- {{dd($visa)}} --}}
                        <label for="instruction">Instruction</label>
                        <textarea  name='instructions' id='instructions' line='3'
                        class="appearance-none @error('instructions') border-red-500 @enderror 
                         w-full bg-gray-200 text-gray-700 border
                          rounded  border-yellow-500   leading-tight 
                          focus:outline-none focus:bg-white-500"
                         value="{{ old('instructions') }}" 
                        type="number" placeholder="Add instruction">
                        {{ $visa->instructions }}
                        </textarea>
                    </td>
                    <td>

                        <label for="charges">Charges</label>
                        <input name='id' value="{{ $visa->id }}" type=hidden>
                        <input name='customer_id' value="{{ $visa->customer_id }}" type=hidden>
                        <input name='charges' value="{{ $visa->charges }}"
                            class="appearance-none @error('charges') border-red-500 @enderror 
                            block  bg-gray-200 w-full text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
                            id="charges" value="{{ old('charges') }}" 
                            type="number" placeholder="Charges PKR">
                    </td>
                </tr>
                <tr>
     

                    <td colspan="2" >
                        <button class="bg-blue-700 float-right cursor-pointer rounded p-1 mx-1 text-white"
                            type="submit">Submit</button>
                            

                    </td>
                </tr>

        </form>
        </table>

    @endif

    @endcannot


    <br>
    <br>

    <table class="table border ">
        <thead class="bg-gray-600 border w-1/8 px-4 py-2">
      
        </thead>
        <tbody>
            <tr class=''>

                <td class="  w-1/2  text-normal">Agent Name</td>
                <td>{{ $visa->agent->user->name }}</td>
            </tr>
            <tr>

                <td class="bg-gray-600 border w-1/8 px-4 py-2">Charges</td>
  
                <td>
                    
                    {{ $visa->charges == null ? 'Not Assign' : $visa->charges }}
                @if($visa->charges )
                {{ $visa->payment == null ?'Not Paid' : "Paid" }}
                     @endif
                </td>
            </tr>

            <tr>

                <td class="bg-gray-600 border w-1/8 px-4 py-2">User email</td>
                <td>{{ $visa->customer->user->email }}</td>
            </tr>


            <tr>

                <td class="bg-gray-600 border w-1/8 px-4 py-2">Number of days</td>
                <td>{{ $visa->days }}</td>
            </tr>
            <tr>

                <td class="bg-gray-600 border w-1/8 px-4 py-2">Date of birth</td>
                <td>{{ $visa->date_of_birth }}</td>
            </tr>
            <tr>

                <td class="bg-gray-600 border w-1/8 px-4 py-2">First Name</td>
                <td>{{ $visa->title }}</td>
            </tr>
            <tr>

                <td class="bg-gray-600 border w-1/8 px-4 py-2">Last Name</td>
                <td>{{ $visa->last_name }}</td>
            </tr>


            <tr>

                <td class="bg-gray-600 border w-1/8 px-4 py-2">phone Number</td>
                <td>{{ $visa->phone_number }}</td>
            </tr>


            <tr>

                <td class="bg-gray-600 border w-1/8 px-4 py-2">
                    Work Phone
                </td>
                <td>{{ $visa->work_phone }}</td>
            </tr>

            <tr>


            <tr>

                <td class="bg-gray-600 border w-1/8 px-4 py-2">Street Adress</td>
                <td>{{ $visa->street }}</td>
            </tr>
            <tr>

                <td class="bg-gray-600 border w-1/8 px-4 py-2">Gender</td>
                <td>{{ $visa->gender }}</td>
            </tr>
            <tr>

                <td class="bg-gray-600 border w-1/8 px-4 py-2">Passport Number</td>
                <td>{{ $visa->passport_number }}</td>
            </tr>

            <tr>
                <td>
                    <label class="block uppercase tracking-wide text-gray-700  mb-1" for="grid-last-name">
                        CNIC Back Image
                    </label>


                    <img class="w-full md:w-1/2 px-3 pt-5"
                        src="{{ url('storage/' . $visa->cnic_back_image) }}" alt="image">

                </td>
                <td>

                    <label class="block uppercase tracking-wide text-gray-700  mb-1" for="grid-last-name">
                        CNIC Front Image
                    </label>

                    <img class="w-full md:w-1/2 px-3 pt-5"
                        src="{{ url('storage/' . $visa->cnic_front_image) }}" alt="image">




                </td>
            </tr>
            <tr>
                <td>
                    <label class="block uppercase tracking-wide text-gray-700  mb-1" for="grid-last-name">
                        Passport Back Image
                    </label>


                    <img class="w-full md:w-1/2 px-3 pt-5"
                        src="{{ url('storage/' . $visa->passport_back_image) }}" alt="image">

                </td>
                <td>

                    <label class="block uppercase tracking-wide text-gray-700  mb-1" for="grid-last-name">
                        Passport Front Image
                    </label>


                    <img class="w-full md:w-1/2 px-3 pt-5"
                        src="{{ url('storage/' . $visa->passport_front_image) }}" alt="image">




                </td>
            </tr>




        </tbody>
    </table>





</div>


