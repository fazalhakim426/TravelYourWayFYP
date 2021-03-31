<form method="POST"   action="{{ route('tickets.store') }}">
    @csrf


                            


    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                   for="grid-state">
                   Journey Type
            </label>
            <div class="relative">
                <select id=type name='journey_type'  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                        id="grid-state">
                   
                   
                    <option >Single</option>
                        <option  >Round</option>
                    <option >Multi</option>
                </select>
                @error('journey_type')
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

                              

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                   for="grid-state">
                   Issuing Airline
            </label>
            <div class="relative">
                <select id=type name='issuing_airline'  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                        id="grid-state">
                   
                   
                    <option >A</option>
                        <option  >B</option>
                    <option >C</option>
                </select>
                @error('issuing_airline')
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
                   Journey Type
            </label>
            <div class="relative">
                <select id=type name='journey_type'  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                        id="grid-state">
                   
                   
                    <option >Single</option>
                        <option  >Round</option>
                    <option >Multi</option>
                </select>
                @error('journey_type')
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

                              

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                   for="grid-state">
                   Issuing Airline
            </label>
            <div class="relative">
                <select id=type name='issuing_airline'  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                        id="grid-state">
                   
                   
                    <option >A</option>
                        <option  >B</option>
                    <option >C</option>
                </select>
                @error('issuing_airline')
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
                 Class
            </label>
            <div class="relative">
                <select id=class name='class' onchange="myFunction(this.value)" class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                        id="grid-state">
                    
                   
                    <option >Business</option>
                        <option  >First Class</option>
                    <option >Economy Class</option>
                </select>
                @error('class')
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

                              

       
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                   for="grid-state">
                   Apply Country
            </label>
            <div class="relative">
                <select id=type name='ticket_apply_country'  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                        id="grid-state">
                   
                   
                    <option >India</option>
                        <option  >Pakistan</option>
                        <option >America</option>
                        <option >china</option>
                        <option >Afghanistan</option>
                </select>
                @error('ticket_apply_country')
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
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 " >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                   for="grid-first-name">
                   Booking Source
            </label>
            <input name='booking_source' 
             class="appearance-none @error('booking_source') border-red-500 @enderror block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
                   value="{{old('days')}}"
                   type="text" placeholder="booking Source"/>

            @error('booking_source')
            <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror
        </div>            

       
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 " >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                   for="grid-first-name">
             Departure Date
            </label>
            <input name='departure_date' 
             class="appearance-none @error('departure_date') border-red-500 @enderror block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
                   value="{{old('days')}}"
                   type="number" placeholder="Departure Date"/>

            @error('departure_date')
            <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror
        </div>
    </div>
    

                            


    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 " >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                   for="grid-first-name">
              Number of Days you want to staygg
            </label>
            <input name='days' 
             class="appearance-none @error('days') border-red-500 @enderror block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
                   value="{{old('days')}}"
                   type="number" placeholder="Days"/>

            @error('days')
            <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror
        </div>

                              

       
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 " >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                   for="grid-first-name">
              Number of Days you want to staygg
            </label>
            <input name='days' 
             class="appearance-none @error('days') border-red-500 @enderror block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
                   value="{{old('days')}}"
                   type="number" placeholder="Days"/>

            @error('days')
            <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror
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