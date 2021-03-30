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

           

        @include('userdashboard.layout.navigation')
        
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    
                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center " style="background: #edf2f7">
                               Please provide your Trip Detail so that we can  book for your desire arrival_airport.
</div>
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                           <ul class="list-reset flex border-b">
         <div class="md:flex">
      

                                                        <li class="-mb-px mr-1 ">
       <a   class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold"  href="edit1?id={{$visa->id}}"  href="edit0?id={{$visa->id}}">     Update Trip Details</a>
    
  </li>

  <li class="-mb-px mr-1 ">
       <a   class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="edit1?id={{$visa->id}}">Update Personal Information</a>
    
  </li>
  <li class="mr-1 ">
    <!-- <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#">Tab</a> -->
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="edit2?id={{$visa->id}}">Update Contact Information</a>
    
    
  </li>
  <li class="mr-1">
    <a  href="edit3?id={{$visa->id}}"     class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  >Update Family Background</a>
   
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="edit4?id={{$visa->id}}">Update Passport Information</a>
    </li>
   </li>

      <li class="mr-1">
      <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"   href="edit5?id={{$visa->id}}">Update Education Detail</a>
      </li>
</div>
</ul>
                            </div>
                            <div class="p-3">

                     
                           <!-- incomplete visa -->
                           <h3>Update Visa</h3>

                           <form method="POST" action="/visas/{{ $visa->id }}">

        {{ csrf_field() }}
{{ method_field('PATCH') }}
@csrf

<div class="flex flex-wrap -mx-3 mb-6">
                            <div id="visaapplycountry"  class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                       for="grid-state">
                                    Visa Apply Country
                                </label>
                                <div class="relative">
                                    <select name='visa_apply_country' class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            id="grid-state">
                                            
                                            <option>{{ old('visa_apply_country')==null? $visa->visa_apply_country:old('visa_apply_country') }}</option>
                                            
                                            @foreach($countries as $country)
                                                    <option>{{$country->country}}</option>
                                                    @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                                                  

                           
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                       for="grid-last-name">
                                    Arrival Airport
                                                              </label>
                                <input name='arrival_airport' value="{{ old('arrival_airport')==null?$visa->arrival_airport:old('arrival_airport') }}" id="arrival_airport"  class=" appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                        type="text" placeholder="Doe">
                                       @error('arrival_airport')
                                       <label class="text-red-500 text-xs italic"
                                       for="grid-first-name">
                                       {{ $message }}
                                </label>
                                       @enderror
                            </div>
                        </div>

                        <input name=id type=hidden value="{{$visa->id }}">


                <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                       for="grid-state">
                                    Type
                                </label>
                                <div class="relative">
                                
                                <select id=type name='type' onchange="myFunction(this.value)" class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="grid-state">
                                                        <option value="{{ old('type')==null?$visa->type:old('type') }}">{{ old('type')==null?$visa->type:old('type') }}</option>
                                                       
                                                        
                                                        <option  value='Visit'>Visit</option>
                                        <option value='Immigration'>Immigration</option>
                                        <option  value='Ummrah'>Ummrah</option>
                                        <option value='Hajj'>Hajj</option>
                                        <option value='Ticket'>Ticket</option>
                                              
                                                </select>

                                    @error('type')
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

                                                  

                           
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 " id='numberofpeople'>
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                       for="grid-first-name">
                                  Number of Days you want to stay
                                </label>
                                <input name='days' 
                                 class="appearance-none @error('days') border-red-500 @enderror block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
                                       id="days" value="{{old('days')}}"
                                       type="number" placeholder="Days">

                                @error('days')
                                <p class="text-red-500 text-xs italic">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                         









                        <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                       for="grid-state">
                                       Departure Airport
                                </label>
                                <div class="relative">
                                    <select name='departure_airport' class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            id="grid-state">
                                            <option>{{ old('departure_airport')==null?$visa->departure_airport: old('departure_airport')}}</option>
                                        
                                        <option>Karachi</option>
                                        <option>Islamabad</option>
                                        <option>Lahore</option>
                                        <option>Peshawar</option>
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

<script src="{{URL::asset('admin-master/type_handler.js')}}"></script>
<script src="{{URL::asset('admin-master/main.js')}}"></script>
</body>

</html>