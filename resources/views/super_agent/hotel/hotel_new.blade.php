{{-- <form method="POST"   action="{{ route('tickets.store') }}">
    @csrf --}}


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

        
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
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





        
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
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

                              


    </div>


                         


    <div class="flex flex-wrap -mx-3 mb-6">

        
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
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





        
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                   for="grid-state">
                   Hotel Name
            </label>
            <div class="relative">
                <input   name="hotal_name"   class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                        id="grid-state">
            
                @error('hotal_name')
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