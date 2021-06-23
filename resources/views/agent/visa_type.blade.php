@extends('agent.layout.agent_layout')
@section('agent')

    <div class="flex flex-col">

        <!-- Card Sextion Starts Here -->
        <div id="totalneworder" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

            <!-- card -->

            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                <div class="px-6 py-2 border-b border-light-grey">
                    <div class="font-bold text-xl">
                        @error('charges')
                            <p class="text-red-700 italic ">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table text-grey-darkest">
                        <thead class="bg-gray-400  text-white ">
                            <tr>
                                <th colspan='5' class='text-center text-indigo-400' >New {{ $sub_active }}s</th>
                            </tr>
                            <tr>
                                <th class="border w-1/6 px-4 py-2">Name</th>
                                <th class="border w-1/6 px-4 py-2">Country</th>
                                <th class="border w-1/6 px-4 py-2">Request Payment</th>
                                <th class="border w-1/6 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse (
                              $user->userable->visas()
                                    ->where('type', $sub_active)
                                    ->where('status', '!=', 'Done')
                                    ->where('status', '!=', 'Cancel')
                                    ->get()  as $visa)
                                <tr>
                                    <td class="border px-4 py-2">
                                        {{ $visa->title . ' ' . $visa->first_name . ' ' . $visa->last_name }}
                                    </td>

                       
                                    <td class="border px-4 py-2 center">
                                        {{ $visa->type == 'Hajj' || $visa->type == 'Ummrah' ? '' : $visa->visa_apply_country }}<br>

                                        {{ $visa->type }}
                                    </td>
                                   

                                    <td class="border px-4 py-2 w-12/2">
                                        @if($visa->payment)
                                            <a href="/agent/view-visa/{{ $visa->id }}"
                                                class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-white">
                                                <i class="fas fa-upload"></i></a>

                                            Upload Document

                                            <br>






                                        @elseif($visa->charges==null|$visa->payment==null)

                                            <a href="/agent/view-visa/{{ $visa->id }}"
                                                class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-white">
                                                Payment Update!
                                            </a>

                                        @endif


                                    </td>

                                    <td class="border px-4 py-2">
                                        <a href="/agent/view-visa/{{ $visa->id }}"
                                            class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-white">
                                            <i class="fas fa-eye"></i></a>

                                        <a href="/agent/visa_cancel?id={{ $visa->id }}"
                                            class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
                                            <i class="fas fa-times bg-red-700"></i></a>


                                    </td>


                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center ">
                                        No Record Found!
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/Grid Form-->







        <!-- Card Sextion Starts Here -->
        <div id="totalcancel" class=" flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

            <!-- card -->

            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                <br>
                <div class="table-responsive">
                    <table class="table text-grey-darkest">
                        <thead class="bg-gray-400  text-white text-normal">
                            <tr>

                            <tr>
                                <th colspan='5'  class="text-center">
                                    <div class="font-bold text-xl text-indigo-500">Cancelled {{ $sub_active }} </div>
                </div>
                </th>
                </tr>


                <th class="border w-1/5 px-4 py-2">Customer</th>
                <th class="border w-1/5 px-4 py-2">Country</th>
                <th class="border w-1/5 px-4 py-2">Request Payment</th>
                <th class="border w-1/5 px-4 py-2">Actions</th>
                </tr>
                </thead>
                <tbody>

                    @forelse ($user->userable->visas()->where('type', $sub_active)->where('status', 'Cancel')->get()
        as $visa)




                        <tr>
                            <td class="border px-4 py-2">
                                {{ $visa->title . ' ' . $visa->first_name . ' ' . $visa->last_name }}
                            </td>

               
                            <td class="border px-4 py-2 center">
                                {{ $visa->type == 'Hajj' || $visa->type == 'Ummrah' ? '' : $visa->visa_apply_country }}<br>

                                {{ $visa->type }}
                            </td>
                           
                            <td class="border px-4 py-2">
                                @if ($visa->payment)

                                    @if ($visa->payment->refunded)
                                        <div
                                            class="bg-green-500 hover:bg-green-800 text-white font-light py-1 px-2 rounded-lg">
                                            Payment Refunded! {{ $visa->payment->charges }}
                                        </div>
                                    @else
                                        <button
                                            class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg">
                                            Refund request! {{ $visa->payment->charges }}
                                        </button>
                                    @endif


                                @else
                                    No payment History

                                @endif




                            </td>

                            <td class="border px-4 py-2">

                         
                                @if (!($visa->payment && $visa->payment->refunded))
                                    <a href="/agent/visa_revoke?id={{ $visa->id }}"
                                        class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
                                        <i class="fas fa-undo bg-red-700"></i></a>
                                @endif

                                <a href="/agent/view-visa/{{ $visa->id }}"
                                  class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-white">
                                  <i class="fas fa-eye"></i></a>
                                {{-- <form method="POST" action="{{route('adminvisadestroy') }}"  >
             @method('DELETE')
           @csrf
           <input type=hidden name='id' value='{{$visa->id}}'>
     <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-red-500">
             <i class="fas fa-trash"></i>

             </form> --}}

                            </td>


                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center ">
                                No Record Found!
                            </td>
                        </tr>


                    @endforelse







                </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/Grid  in progress Form-->











    <!-- Done Card Sextion Starts Here -->
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

        <!-- card -->

        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
            <div class="px-6 py-2 border-b border-light-grey">
            </div>
            <div class="table-responsive">
                <table class="table text-grey-darkest">
                    <thead class="bg-gray-400  text-white text-normal">
                        <tr>
                            <th colspan='5' class='text-center'>
                                <div class="font-bold text-xl  text-indigo-600">Done {{ $sub_active }} </div>
            </div>
            </th>
            </tr>
            <tr>
                <th class="border w-1/5 px-4 py-2">Customer</th>
                <th class="border w-1/5 px-4 py-2">Country</th>
                <th class="border w-1/5 px-4 py-2">Payment</th>
                <th class="border w-1/5 px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody>

                @forelse ($user->userable->visas()->where('type', $sub_active)->get()
        as $visa)
                    <tr>
                        <td class="border px-4 py-2">
                            {{ $visa->title . ' ' . $visa->first_name . ' ' . $visa->last_name }}
                        </td>

                        <td class="border px-4 py-2 center">
                            {{ $visa->type == 'Hajj' || $visa->type == 'Ummrah' ? '' : $visa->visa_apply_country }}<br>

                            {{ $visa->type }}
                        </td>
                       
                        <td class="border px-4 py-2">
                            <i class="fas fa-check text-green-500 mx-2"></i>
                            {{ $visa->charges }} PKR <br>
                        </td>
                        <td>
                            <a href="/agent/view-visa/{{ $visa->id }}"
                                class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-white">
                                <i class="fas fa-eye"></i></a>



                        </td>

                        </td>


                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center ">
                            No Record Found!
                        </td>
                    </tr>


                @endforelse







            </tbody>
            </table>
        </div>
    </div>
    </div>
    <!--/Grid done Form-->








    </div>



@stop
