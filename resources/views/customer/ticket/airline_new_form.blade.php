<form method="POST"   action="{{ route('tickets.store') }}">
    @csrf


                            


    <div class="flex flex-wrap -mx-3 mb-6">

        
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





        
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                   for="grid-state">
                   Booking Source
            </label>
            <div class="relative">
                <select id=type name='booking_source'  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                        id="grid-state">
                   
                   
                    <option >a</option>
                        <option  >b</option>
                    <option >c</option>
                </select>
                @error('booking_source')
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









                           

                      

                                <div class="inline-flex">
                                     <a href="/dashboard">
                            <p class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
                                Close
                            </p></a>
                            
                            <button type=submit class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-r">
                                Save & Next
                            </button>
                            </form>