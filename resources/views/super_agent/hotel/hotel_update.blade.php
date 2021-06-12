<form method="POST"   action="{{ route('ticketIncomplete') }}">
    @csrf

    <div class="flex flex-wrap -mx-3 mb-6">
        <div id='ticketapplycountry' class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                   for="grid-state">
                Issueing Airline
            </label>
            <div class="relative">
                <select name='issuing_airline' class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                        id="grid-state" >
                    <option>{{ old('issuing_airline')==null? $ticket->issuing_airline:old('issuing_airline') }}</option>
                    <option >Pakistan International Airlines</option>
                    <option  >Airblue</option>
                    <option >Askari Aviation</option>
                    <option >Shaheen Airline</option>
                    <option >SereneAir</option>
                   
    
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div id='ticketapplycountry' class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                   for="grid-state">
                Booking Source
            </label>
            <div class="relative">
                <select name='booking_source' class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                        id="grid-state"
                        
                        >
                        
                        <option>{{ old('booking_source')==null? $ticket->booking_source:old('booking_source') }}</option>
                 
                        <option >Pakistan International Airlines</option>
                        <option  >Airblue</option>
                    <option >Askari Aviation</option>
                    <option >Shaheen Airline</option>
                    <option >SereneAir</option>
                   
    
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
        </div>

      </div>

                            <input name=id type=hidden value="{{$ticket->id }}">



                                <div class="inline-flex">
                                     <a href="/dashboard">
                            <p class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
                                Close
                            </p></a>
                            
                            <button type=submit class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-r">
                                Save & Next
                            </button>
                            </form>