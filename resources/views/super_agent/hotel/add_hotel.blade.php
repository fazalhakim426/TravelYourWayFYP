        @extends('super_agent.layout.super_agent_layout')
        @section('super_agent')

            <!-- Stats Row Starts Here -->
        


        @include('customer.layout.tab')

        <br>
        <div class="container">

            <!--Grid Form-->

            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center " style="background: #edf2f7">
                    Please provide your Hotel Information.
                </div>
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">



                    <ul class="list-reset flex border-b">
        <div class="md:flex">
        <li class="mr-1">

        <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="#">Hotel Location</a>
        </li>

        <li class="-mb-px mr-1 ">
        <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Add Rooms</a>

        </li>
        <li class="mr-1 ">
        </li>
        <li class="mr-1">
        </li>
        </div>
        </ul>

                    </div>
                    <div class="p-3">



        @if($ticket==null)

            @include('super_agent.hotel.hotel_new')                
        @else
            @include('super_agent.hotel.hotel_update')   
        @endif
                     
    
                     </div>
                    </div>
                </div>
            <!--/Grid Form-->







        </div>




        </div>

        @endsection