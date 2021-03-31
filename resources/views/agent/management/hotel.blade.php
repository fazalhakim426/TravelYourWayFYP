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
    <title>Admin</title>
</head>

<body>

@include('agent.layout.navigation')

            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                     <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="/dashboard?#totalneworder" class="no-underline text-white text-lg">
                                    New Order
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="/dashboard?#totalinprogress" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="/dashboard?#totalinprogress" class="no-underline text-white text-lg">
                                    Total In Progress
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="/dashboard?#totaldone" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="/dashboard?#totaldone" class="no-underline text-white text-lg">
                                    Total Done
                                </a>
                            </div>
                        </div>
                       


                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="/dashboard?#totalcancelled" class="no-underline text-white text-lg">
                                    Total Cancelled 
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- /Stats Row Ends Here -->




                 








                    
                                            <!-- Card Sextion Starts Here -->
                                 <div id="totalneworder" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                                                 <!-- card -->

                                        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                      <div class="px-6 py-2 border-b border-light-grey">
                                       











                                      <!-- <div class='flex flex-1  flex-col md:flex-row lg:flex-row mx-2'> -->
                        <!-- <div class="mb-2 mx-2 border-solid border-gray-300  rounded border shadow-sm w-full md:w-1/2 lg:w-1/2"> -->
                            <div class="bg-gray-200 px-2 py-3 border-solid text-center border-gray-300 border-b">
                                Hotel Detail
                            </div>
                            <div class="p-3 text-center">
                                <button data-modal='centeredFormModal'
                                    class="modal-trigger bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Add New Hotel
                                </button>
                            </div>

                        <!-- </div> -->

                       
                    <!-- </div> -->










                                         
                                            </div>
                                          <div class="table-responsive">
                                              <table class="table text-grey-darkest">
                                       <thead class="bg-grey-dark text-white text-normal">
                                      <tr>
                                        <th class="border w-1/4 px-4 py-2">Picture</th>
                                        <th class="border w-1/4 px-4 py-2">Country</th>
                                        <th class="border w-1/6 px-4 py-2">Hotel Name</th>
                                        <th class="border w-1/7 px-4 py-2">Charges</th>
                                        <th class="border w-1/5 px-4 py-2">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($hotels as $hotel)
                                   <tr>
      <td class="border px-4 py-2">                                       <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "  src="{{asset('storage/images/'.explode(',',$hotel->images)[0] )}}"/>
                                       </td>
                                            <td class="border px-4 py-2">{{$hotel->country}}</td>
                                            <td class="border px-4 py-2"> {{$hotel->hotel_name}} </td>
                                            <td class="border px-4 py-2"> {{$hotel->charges_per_day}} PKR</td>
                                          
                                            
                                            <td class="border px-4 py-2">
                                             
                                                <a href="destroyedit?id={{$hotel->id}}"class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-edit"></i></a>
                                                       
                                                        <form method="post" action="{{ route('hotels.destroy',$hotel->id)}}">
                                                        @method('DELETE')
                                                        @csrf
                                                <button type="submit" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                        <i class="fas fa-trash"></i>

</button>
</form>
                                            </td>
                                        </tr>
                                           @endforeach
</tbody>
                                </table>
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











<!-- Centered With a Form Modal -->
<div id='centeredFormModal' class="modal-wrapper">
    <div class="overlay close-modal"></div>
    <div class="modal modal-centered">
        <div class="modal-content shadow-lg p-5">
            <div class="border-b p-2 pb-3 pt-0 mb-4">
               <div class="flex justify-between items-center">
                    Add Hotel
                    <span class='close-modal cursor-pointer px-3 py-1 rounded-full bg-gray-100 hover:bg-gray-200'>
                        <i class="fas fa-times text-gray-700"></i>
                    </span>
               </div>
            </div>
            <!-- Modal content -->
            <form id='form_id' method='POST' action="{{route('hotels.store')}}" class="w-full"  enctype="multipart/form-data" >
               @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                            Image
                        </label>
                        <input name="images" multiple type="file"
                            class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                            id="grid-password" type="file" >
                        <p class="text-grey-dark text-xs italic">Add amazig photoes. </p>
                    </div>
                </div>


            <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label  class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                            Country
                        </label>
                        
                        <input name='country'  class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            id="grid-state">

                                         
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                            Hotel Name
                        </label>
                        <input name="hotel_name" 
                            class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                            id="grid-last-name" type="text" placeholder="Doe">
                    </div>
                </div>
               
            <div class="flex flex-wrap -mx-3 mb-2">
                   


                    
                    
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-zip">
                            Fee
                        </label>
                        <input name="charges_per_day"
                            class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                            id="grid-zip" type="text" placeholder="3400 PKR">
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


<script >
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
    </script>
<script src="{{URL::asset('admin-master/main.js')}}"></script>
</body>

</html>