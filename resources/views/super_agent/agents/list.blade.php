@extends('super_agent.layout.super_agent_layout')
@section('super_agent')

                <div class="flex flex-col">
                 
                                            <!-- Card Sextion Starts Here -->
                                 <div id="totalneworder" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                                                 <!-- card -->

                                        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                      <div class="px-6 py-2 border-b border-light-grey">
                                         <div class="font-bold text-xl">Agent List
                                         @error('charges')
                                       <p class="text-red-700 italic ">{{$message}}</p>

                                       @enderror

                                       
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


                                       <div style="float: right">
                                             <button data-modal='centeredFormModal' value='{{Auth::user()->userable->id}}' onclick="function1(this)"
                                        class=" modal-trigger bg-gray-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                        Add Agent
                                      </button>
                                       </div>
                                     
                                         </div>
                                            </div>
                                          <div class="table-responsive">
                                              <table class="table text-grey-darkest">
                                       <thead class="bg-grey-dark text-white text-normal">
                                      <tr>

                                        <th class="border w-1/6 px-4 py-2">Profile</th>
                                        <th class="border w-1/5 px-4 py-2">Name</th>
                                        <th class="border w-1/5 px-4 py-2">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      
                                      {{-- {{dd($agent->users)}} --}}
                                    @foreach($agents as $index=>$agent)
                                    {{-- {{ dd($agent->user->user)}} --}}
                                      <tr>
                                      <td class="border px-4 py-2">
                                        <img class="h-auto w-full mx-auto"  id="imgFileUpload" alt="Select File" title="Select File" style="cursor: pointer" 
                                        src="{{asset('profile_images/'.$agent->user->profile_image)}}"
                                        alt="">
                                      </td>
    
                                         <td class="border px-4 py-2 center">
                                           {{$agent->user->name}}
                                      
                                         </td>
                                       

                                       <td>
                                           <a href="{{route('delete-agent',['agent'=>$agent])}}">
                                        <button  
                                        class="modal-trigger bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        Delete
                                       </button></a>
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
                       </div>
                   </div>
                   <!--/Grid done Form-->





                    


                </div>
          








<!-- Centered With a Form Modal -->
<div id='centeredFormModal' class="modal-wrapper">
  <div class="overlay close-modal"></div>
  <div class="modal modal-centered">
      <div class="modal-content shadow-lg p-5">
          <div class="border-b p-2 pb-3 pt-0 mb-4">
             <div class="flex justify-between items-center">
                  Add Agent 
                  <span class='close-modal cursor-pointer px-3 py-1 rounded-full bg-gray-100 hover:bg-gray-200'>
                      <i class="fas fa-times text-gray-700"></i>
                  </span>
             </div>
          </div>
          <!-- Modal content -->
          <form method="POST"   action="add_agent">
           @csrf
           <div class="flex flex-wrap -mx-3 mb-2">
           <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide  text-xs mb-2" for="grid-city">
                   type 
              </label>
              <input type="hidden" name='super_agent_id' id='super_agent_id' >
              <select  name="pax_type" 
                  class="appearance-none block w-full   border border-grey-200 rounded py-3 px-4 leading-tight "
                  id="grid-city" type="text" placeholder="title">
                  <option value="adult">Adult</option>
                  <option value="kids">Kids</option>
              </select>
          </div>
          <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide  text-xs mb-2" for="grid-city">
                  Email 
              </label>
              <input  name="email" 
              class="block w-full  text-indigo-400 border  rounded py-3 px-4 "
              id="grid-city" type="email" placeholder="33/33/1987">
              
          </div>
      </div>


           <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide  text-xs mb-2" for="grid-city">
                      Title 
                  </label>
                  <input type="hidden" name='ticket_id' value="">
                  <select  name="title" 
                      class="appearance-none block w-full   border border-grey-200 rounded py-3 px-4 leading-tight "
                      id="grid-city" type="text" placeholder="title">
                      <option value="Mr">Mr</option>
                      <option value="Miss">Miss</option>
                  </select>
              </div>
               <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide  text-xs mb-2" for="grid-city">
                      First Name 
                  </label>
                  <input  name="first_name" 
                      class="appearance-none block w-full   border border-grey-200 rounded py-3 px-4 leading-tight "
                      id="grid-city" type="text" placeholder="fazal">
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide  text-xs mb-2" for="grid-city">
                      Last Name 
                  </label>
                  <input  name="last_name" 
                      class="appearance-none block w-full   border border-grey-200 rounded py-3 px-4 leading-tight "
                      id="grid-city" type="text" placeholder="hakim">
              </div>
          
          </div>



          
          <div class="flex flex-wrap -mx-3 mb-2">
            
               <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide  text-xs mb-2" for="grid-city">
                      Password
                  </label>
                  <input  name="password" 
                      class="appearance-none block w-full   border border-grey-200 rounded py-3 px-4 leading-tight "
                      id="grid-city" type="text" placeholder="333-3322DDD">
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide  text-xs mb-2" for="grid-city">
                      Nationality 
                  </label>
                  <input  name="nationality" 
                      class="appearance-none block w-full   border border-grey-200 rounded py-3 px-4 leading-tight "
                      id="grid-city" type="text" placeholder="Pakistan">
              </div>
          
          </div>

              <div class="mt-5">
                  <button class='bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded'> Submit </button>
                  <span class='close-modal cursor-pointer bg-red-200 hover:bg-red-500 text-red-900 font-bold py-2 px-4 rounded'>
                      Close
                  </span>
              </div>
          </form>

      </div>
  </div>
</div>

@endsection