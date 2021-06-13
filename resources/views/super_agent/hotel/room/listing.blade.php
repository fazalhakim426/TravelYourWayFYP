@extends('super_agent.layout.super_agent_layout')
@section('super_agent')

    <!-- Stats Row Starts Here -->



<br>
<div class="container">

    <!--Grid Form-->

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center " style="background: #edf2f7">
            Please provide Room Detail.
            <br>
            {{$hotel->country->name }} // {{$hotel->state->name }}//  {{$hotel->city->name }} // {{$hotel->name }}
              
        </div>
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">



            <ul class="list-reset flex border-b">
<div class="md:flex">
<li class="mr-1">
<a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Hotel Location</a>

</li>

<li class="-mb-px mr-1 ">
<a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="#"> Add Rooms</a>

</li>
<li class="mr-1 ">
</li>
<li class="mr-1">
</li>
</div>
</ul>

            </div>
            <div class="p-3">




                <form id='form_id' method='POST' action="{{route('room-store')}}" class="w-full"  enctype="multipart/form-data" >
                    @csrf
                 <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full px-3">
                             <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                 Room Images
                             </label>
                             <input name="images" multiple  type="file"
                                 class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                 id="grid-password" type="file" >
                             <p class="text-grey-dark text-xs italic">Add amazig banner. </p>
                             @error('images')
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
                            Title
                        </label>
                        <div class="relative">
                            <input id="country-dd"  name="title"  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    id="grid-state">

                            <input type="hidden" name='hotel_id' value="{{$hotel->id}}">
                            @error('title')
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
                                Charges Per Day
                        </label>
                        <div class="relative">
                            <Input id="state-dd"  name="charges_per_day"   class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    id="grid-state">
                         
                            @error('state_id')
                               <label class="text-red-500 text-xs italic"
                               for="grid-first-name">
                               {{ $message }}
                        </label>
                               @enderror
            
                    
                        </div>
                    </div>
            
                                          
            
            
                </div>
            
            
                                     
            
            
            
            
        
            
            
            
            
            
            
            
                                            <div class="inline-flex">
                                                 <a href="/super-agent/hotels">
                                        <p class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
                                            Goto Hotels
                                        </p></a>
                                        
                                        <button type=submit class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-r">
                                            Add Room
                                        </button>
                                        </form>





                                        
             

             </div>
            </div>
        </div>
    <!--/Grid Form-->







</div>




</div>

@endsection