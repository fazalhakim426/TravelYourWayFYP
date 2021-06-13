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
                                        <div class="font-bold text-xl">Paid and Pending</div>
                                           </div>
                                         <div class="table-responsive">
                                             <table class="table text-grey-darkest">
                                      <thead class="bg-grey-dark text-white text-normal">
                                      <tr>
                                        
                                        <th class="border w-1/2 px-4 py-2">Agent</th>
                                        <th class="border w-1/2 px-4 py-2">Name</th>
                                        <th class="border w-1/2 px-4 py-2">Address</th>
                                        <th class="border w-1/2 px-4 py-2">Visa Country</th>
                                        <th class="border w-1/2 px-4 py-2">Type</th>
                                        <th class="border w-1/4 px-4 py-2">passport#</th>
                                        <th class="border w-1/1 px-4 py-2">Order Status</th>
                                       
                                       {{-- <th class="border w-1/5 px-4 py-2">Actions</th> --}}
                                     </tr>
                                   </thead>
                                   <tbody>
                                     {{-- {{dd()}} --}}
                                   @foreach($user->userable->paid_visas as $visa)
                                 
                                 
                     
                                     
                                     <tr>
                                       
                                          <td class="border px-4 py-2">
                                            <img class="h-auto w-full mx-auto"  id="imgFileUpload" alt="Select File" title="Select File" style="cursor: pointer" 
                                            src="{{asset('profile_images/'.$visa->agent->user->profile_image)}}"
                                            alt="">
                                          </td>
        
                                             <td class="border px-4 py-2 center">
                                               {{$visa->agent->user->name}}
                                          
                                             </td>



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
                                     <td class="border px-4 py-2"> <i class="fas fa-check text-green-500 mx-2"></i> {{ $visa->charges}} PKR
                                      
                                        @if($visa->charges&&$visa->status=='Paid')
                                        <a href='done/{{$visa->id}}' class="m-55  bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                           Mark Done
                                        </a>
                                        @endif

                                    </td>
                                         
                                           {{-- <td class="border px-4 py-2">
                           
                                                       <a  href="/adminvisaaccomplish?id={{$visa->id}}"  class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
                                                       <i class="fas fa-times bg-red-700"></i></a>
                                                     

                                                       
                                               
                                           </td> --}}

                                           
                                       </tr>

                                       
                                     @endforeach




                                  


                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                   <!--/Grid done Form-->

                </div>
                @stop