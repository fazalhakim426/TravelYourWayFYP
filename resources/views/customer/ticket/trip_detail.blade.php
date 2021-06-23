<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>{{ Auth::user()->name }} </title>
</head>

<body>
@include('customer.layout.navigation')

            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center " style="background: #edf2f7">
                               Please provide your Trip Detail so that we can understand.
                          </div>
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
  
  
                           
                            <ul class="list-reset flex border-b">
         <div class="md:flex">
         <li class="mr-1">
      
      <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/customer/tickets">Airline</a>
      </li>

  <li class="-mb-px mr-1 ">
       <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="/#">Trip Detail</a>
    
  </li>

  <li class="mr-1 ">
    <!-- <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Tab</a> -->
    <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Passenger Details</a>
    
    
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Select Agent</a>
   
  </li>

</div>
</ul>


                            </div>
                            <div class="p-3">
                               



                                <form method="POST"   action="{{ route('ticketTripDetailStore') }}">
                                    @csrf
                                
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div id='ticketapplycountry' class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                   for="grid-state">
                                                   Journey Type
                                            </label>
                                            <div class="relative">
                                                <select name='journey_type' class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="grid-state" >
                                                        @if(old('journey_type')==null? $ticket->journey_type:old('journey_type'))
                                                        <option>{{ old('journey_type')==null? $ticket->journey_type:old('journey_type') }}</option>
                                                 @endif
                                                    <option>Single</option>
                                                    <option>Multi</option>
                                                    <option>Round</option>
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
                                                Class
                                            </label>
                                            <div class="relative">
                                                <select name='class' class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="grid-state"
                                                        
                                                        >
                                                        @if(old('journey_type')==null? $ticket->journey_type:old('journey_type'))
                                                        <option>{{ old('class')==null? $ticket->class:old('class') }}</option>
                                                        @endif
                                                    <option>Business Class</option>
                                                    <option>First Class</option>
                                                    <option>Economy Class</option>
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
                                      <div class="flex flex-wrap -mx-3 mb-6">
                                        <div id='ticketapplycountry' class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                   for="grid-state">
                                                 Ticket Apply Country
                                            </label>
                                            <div class="relative">
                                                <select name='ticket_apply_country' class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="grid-state" >
                                                        @if(old('ticket_apply_country')==null? $ticket->ticket_apply_country:old('ticket_apply_country'))
                                                        <option>{{ old('ticket_apply_country')==null? $ticket->ticket_apply_country:old('ticket_apply_country') }}</option>
                                                        @endif
                                                        @foreach ($countries as $country)
                                                            
                                                    <option>{{$country->name}}</option>
                                                 
                                                        @endforeach   <option>pakistan</option>
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
                                               Departure Airport
                                            </label>
                                            <div class="relative">
                                                <select name='departure_airport' class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="grid-state"
                                                        >
                                                        
                                                        @if(old('departure_airport')==null? $ticket->departure_airport:old('departure_airport'))
                                                        <option>{{ old('departure_airport')==null? $ticket->departure_airport:old('departure_airport') }}</option>
                                                        @endif
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
                              
                                      <div class="flex flex-wrap -mx-3 mb-6">
                                        <div id='ticketapplycountry' class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                   for="grid-state">
                                                   arrival_airport
                                            </label>
                                            <div class="relative">
                                                <select name='arrival_airport' class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="grid-state" >
                                                        
                                                        @if(old('arrival_airport')==null? $ticket->arrival_airport:old('arrival_airport'))
                                                        <option>{{ old('arrival_airport')==null? $ticket->arrival_airport:old('arrival_airport') }}</option>
                                                        @endif
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
                                                   departure_date
                                            </label>
                                            <div class="relative">
                                                <input name='departure_date' type='date' class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="grid-state"
                                                        value="{{ old('departure_date')==null? $ticket->departure_date:old('departure_date') }}"
                                                        >
                                                        @error('departure_date')
                                                        <label class="text-red-500 text-xs italic"
                                                        for="grid-first-name">
                                                        {{ $message }}
                                                 </label>
                                                        @enderror
                                             
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
                                  
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/Grid Form-->










                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="{{URL::asset('admin-master/main.js')}}"></script>
</body>

</html>