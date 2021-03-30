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


@include('admindashboard.layout.adminnavigation')


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
                                Immigration available Countries
                            </div>
                            <div class="p-3 text-center">
                                <button data-modal='centeredFormModal'
                                    class="modal-trigger bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Add New Country
                                </button>
                            </div>

                        <!-- </div> -->

                       
                    <!-- </div> -->










                                         
                                            </div>
                                          <div class="table-responsive">
                                              <table class="table text-grey-darkest">
                                       <thead class="bg-grey-dark text-white text-normal">
                                      <tr>
                                        <th class="border w-1/4 px-4 py-2">Country</th>
                                        <th class="border w-1/5 px-4 py-2">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($countries as $country)
                                    <tr>
                                            <td class="border px-4 py-2">{{$country->country}}</td>

                                            
                                            <td class="border px-4 py-2">
                                               
                                                <!-- <a href='countries?'class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-edit"></i></a> -->
                                                        <form method="post" action="{{ route('countries.destroy',$country->id)}}">
                                                        @method('DELETE')
                                                        @csrf
                                                <button type='submit' onclick=" return conform('are you sure!')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
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
                    Add Country
                    <span class='close-modal cursor-pointer px-3 py-1 rounded-full bg-gray-100 hover:bg-gray-200'>
                        <i class="fas fa-times text-gray-700"></i>
                    </span>
               </div>
            </div>
            <!-- Modal content -->
         
            <form method="POST"   action="{{ route('countries.store') }}">
             @csrf
               
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-2" for="grid-city">
                            Country 
                        </label>
                        <input  name="country" 
                            class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
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