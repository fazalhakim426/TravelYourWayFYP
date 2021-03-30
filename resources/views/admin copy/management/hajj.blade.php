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
                                Manage Hajj Information
                            </div>
                            

                        <!-- </div> -->

                       
                    <!-- </div> -->










                                         
                                            </div>
                                          <div class="table-responsive">
                                              <table class="table text-grey-darkest">
                                       <thead class="bg-grey-dark text-white text-normal">
                                      <tr>
                                        <th class="border w-1/4 px-4 py-2">Description</th>
                                        <th class="border w-1/6 px-4 py-2">Fee</th>
                                        <th class="border w-1/7 px-4 py-2">Status</th>
                                        <th class="border w-1/5 px-4 py-2">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                            <td class="border px-4 py-2">information</td>
                                            <td class="border px-4 py-2"> 900 PKR</td>
                                            <td class="border px-4 py-2">
                                            <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                                Enable
                                            </button>
                                            </td>
                                            
                                            <td class="border px-4 py-2">
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-eye"></i></a>
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-edit"></i></a>
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                        <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>


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
            <form id='form_id' class="w-full">
               
               
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                            Country
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                            id="grid-city" type="text" placeholder="Albuquerque">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                            Status
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                id="grid-state">
                                <option>Enable</option>
                                <option>Disable</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-zip">
                            Fee
                        </label>
                        <input
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

<script src="{{URL::asset('admin-master/main.js')}}"></script>
</body>

</html>