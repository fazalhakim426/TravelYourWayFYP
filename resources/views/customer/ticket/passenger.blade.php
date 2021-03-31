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
    <title>Customer </title>
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
                                   Add Passenger
                              </div>
                                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
      
      
                               
                                <ul class="list-reset flex border-b">
             <div class="md:flex">
             <li class="mr-1">
          
          <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/tickets">Airline</a>
          </li>
    
      <li class="-mb-px mr-1 ">
           <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="/personalInformationIndex">Trip Detail</a>
        
      </li>
    
      <li class="mr-1 ">
        <!-- <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Tab</a> -->
        <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="#">Passenger Details</a>
        
        
      </li>
      <li class="mr-1">
        <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Select Agent</a>
       
      </li>
    
    </div>
    </ul>

                            </div>
                <div class="p-3">
                               


    <!--Grid Form-->
    <x-auth-validation-errors/>
    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                Assign Passenger
               
            </div>
            <div class="p-3">
                <table class="table-responsive w-full rounded justify-center">
                    <thead>
                     

                          <tr>
                            <th class="border w-1/6 px-4 py-2">Title</th>
                            <th class="border w-1/6 px-4 py-2">First Name</th>
                            <th class="border w-1/6 px-4 py-2">Last Nmae</th>
                            <th class="border w-1/6 px-4 py-2">DOB</th>
                            <th class="border w-1/6 px-4 py-2">Passport #</th>
                            <th class="border w-1/6 px-4 py-2">Nationality</th>
                            <th class="border w-1/6 px-4 py-2">
                            
                                <button data-modal='centeredFormModal'
                                class="modal-trigger bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Add
                            </button>
                            </th>
                          </tr>
                    </thead>
                    <tbody>
                    @foreach($ps as $p)
<tr>
    <td class="border px-4 py-2">{{$p->title}}</td>

    <td class="border px-4 py-2">{{$p->first_name}}</td>
    
<td class="border px-4 py-2">{{$p->last_name}}</td>
<td class="border px-4 py-2">{{$p->date_of_birth}}</td>
<td class="border px-4 py-2">{{$p->passport_number}}</td>
<td class="border px-4 py-2">{{$p->nationality}}</td>
<td class="border px-4 py-2">
<a  onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500" href="destroyPassenger/{{$p->id}}">
<i class="fas fa-trash"></i>
</a>

</td>
</tr>
@endforeach
                    </tbody>
                </table>

                @if(count($ps)==0)
                         <tr><td>
                        <p class="text-black leading-none"><span class="text-red-500">No Record Found</span></p>
                        </td></tr>
                        @endif  
            </div>
        </div>
    </div>

    <!--/Grid Form-->




    <div class="inline-flex">
        <a href="/ticketTripDetailIndex">
<p class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
   Prev
</p></a>
<form action="{{route('ticketSelectAgent')}}" method='post'>
    @csrf
    <input type='hidden' value='{{$ticket->id}}' name='id'>
<button type=submit class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-r">
  Next
</button>
</form>

</div>



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










<!-- Centered With a Form Modal -->
<div id='centeredFormModal' class="modal-wrapper">
    <div class="overlay close-modal"></div>
    <div class="modal modal-centered">
        <div class="modal-content shadow-lg p-5">
            <div class="border-b p-2 pb-3 pt-0 mb-4">
               <div class="flex justify-between items-center">
                    Add Passenger
                    <span class='close-modal cursor-pointer px-3 py-1 rounded-full bg-gray-100 hover:bg-gray-200'>
                        <i class="fas fa-times text-gray-700"></i>
                    </span>
               </div>
            </div>
            <!-- Modal content -->
         
            <form method="POST"   action="{{ route('addTicketPassenger') }}">
             @csrf
             <div class="flex flex-wrap -mx-3 mb-2">
             <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide  text-xs mb-2" for="grid-city">
                    passenger type 
                </label>
                <input type="hidden" name='ticket_id' value="{{$ticket->id}}">
                <select  name="pax_type" 
                    class="appearance-none block w-full   border border-grey-200 rounded py-3 px-4 leading-tight "
                    id="grid-city" type="text" placeholder="title">
                    <option value="adult">Adult</option>
                    <option value="kids">Kids</option>
                </select>
            </div>
            <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide  text-xs mb-2" for="grid-city">
                    DOB 
                </label>
                <input  name="date_of_birth" 
                class="block w-full  text-blue-400 border  rounded py-3 px-4 "
                id="grid-city" type="date" placeholder="33/33/1987">
                
            </div>
        </div>


             <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide  text-xs mb-2" for="grid-city">
                        Title 
                    </label>
                    <input type="hidden" name='ticket_id' value="{{$ticket->id}}">
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
                        Passport Numer
                    </label>
                    <input  name="passport_number" 
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
<script src="{{URL::asset('admin-master/main.js')}}"></script>
</body>

</html>