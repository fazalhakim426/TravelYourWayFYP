        @extends('super_agent.layout.super_agent_layout')
        @section('super_agent')

            <!-- Stats Row Starts Here -->
        


        <br>
        <div class="container">

            <!--Grid Form-->

            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center " style="background: #edf2f7">
                   <a href="/super-agent/hotels"><button> Back</button> </a>
                </div>
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">



                    <ul class="list-reset flex border-b">
        <div class="md:flex">
            <li class="mr-1">

                <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold  " href="/super-agent/hotels"> Hotels</a>
                </li>      <li class="mr-1">

                    <a class="
                    bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="/super-agent/hotels/create">Add New Hotel</a>
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




                        <form id='form_id' method='POST' action="{{route('hotels.store')}}" class="w-full"  enctype="multipart/form-data" >
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                        Hotel Banner
                                    </label>
                                    <input name="image"  type="file"
                                        class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-password" type="file" >
                                    <p class="text-grey-dark text-xs italic">Add amazig banner. </p>
                                    @error('image')
                                    <label class="text-red-500 text-xs italic"
                                    for="grid-first-name">
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                        Hotel Description
                                    </label>
                                    <textarea name="description" line="3"
                                        class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-password" ></textarea>


                           @error('description')
                                    <label class="text-red-500 text-xs italic"
                                    for="grid-first-name">
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            
                            
                    
                    
                        <div class="flex flex-wrap -mx-3 mb-6">
                    
                            
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                       for="grid-state">
                                    Country
                                </label>
                                <div class="relative">
                                    <select id="country-dd"  name="country_id"  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            id="grid-state">
                                            <option value="">Select Country</option>
                                            @foreach ($countries as $data)
                                            <option value="{{$data->id}}">
                                                {{$data->name}}
                                            </option>
                                            @endforeach
                                    </select>
                                    @error('country_id')
                                       <label class="text-red-500 text-xs italic"
                                       for="grid-first-name">
                                       {{ $message }}
                                </label>
                                       @enderror
                    
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                    
                    
                    
                    
                    
                            
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                       for="grid-state">
                                       Select State
                                </label>
                                <div class="relative">
                                    <select id="state-dd"  name="state_id"   class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            id="grid-state">
                                    </select>
                                    @error('state_id')
                                       <label class="text-red-500 text-xs italic"
                                       for="grid-first-name">
                                       {{ $message }}
                                </label>
                                       @enderror
                    
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                    
                                                  
                               
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                       for="grid-state">
                                    Selct City
                                </label>
                                <div class="relative">
                                    <select id="city-dd" name='city_id'  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            id="grid-state">
                                        
                                    </select>
                                    @error('city_id')
                                       <label class="text-red-500 text-xs italic"
                                       for="grid-first-name">
                                       {{ $message }}
                                </label>
                                       @enderror
                    
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                    

                    
                        </div>
                    
                    
                                             
                    
                    
                        <div class="flex flex-wrap -mx-3 mb-6">
                    
                            
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                       for="grid-state">
                                    Address
                                </label>
                                <div class="relative">
                                    <input name='address'  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            id="grid-state">
                                        
                                    @error('address')
                                       <label class="text-red-500 text-xs italic"
                                       for="grid-first-name">
                                       {{ $message }}
                                </label>
                                       @enderror
                    
                                    
                                </div>
                            </div>
                    
                    
                    
                    
                    
                            
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                       for="grid-state">
                                       Hotel Name
                                </label>
                                <div class="relative">
                                    <input   name="name"   class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            id="grid-state">
                                
                                    @error('name')
                                       <label class="text-red-500 text-xs italic"
                                       for="grid-first-name">
                                       {{ $message }}
                                </label>
                                       @enderror
                    
                                   
                                </div>
                            </div>
                    
                                                  
                    
                    
                        </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                                                    <div class="inline-flex">
                                                         <a href="/dashboard">
                                                <p class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
                                                    Close
                                                </p></a>
                                                
                                                <button type=submit class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-r">
                                                    Save & Next
                                                </button>
                                                </form>





                                                
                     
    
                     </div>
                    </div>
                </div>
            <!--/Grid Form-->







        </div>




        </div>

        @endsection