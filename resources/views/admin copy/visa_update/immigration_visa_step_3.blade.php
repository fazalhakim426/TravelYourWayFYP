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
@include('admindashboard.layout.adminnavigation')
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                   




                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center " style="background: #edf2f7">
                               Please provide your family detail.Your information is secure we will not share it with any one.
</div>
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
  
                            <ul class="list-reset flex border-b">
         <div class="md:flex">
         <li class="mr-1">
         <li class="-mb-px mr-1 ">
       <a   class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="adminvisaedit0?id={{$visa->id}}">     Update Trip Details</a>
    
  </li>

  <li class="-mb-px mr-1 ">
       <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="adminvisaedit1?id={{$visa->id}}">Update Personal Information</a>
    
  </li>
  <li class="mr-1 ">
    <!-- <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#">Tab</a> -->
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="adminvisaedit2?id={{$visa->id}}">Update Contact Information</a>
    
    
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold"  href="adminvisaedit3?id={{$visa->id}}">Update Family Background</a>
   
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="adminvisaedit4?id={{$visa->id}}">Update Passport Information</a>
    </li>
   </li>

      <li class="mr-1">
      <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"   href="adminvisaedit5?id={{$visa->id}}">Update Education Detail</a>
      </li>
</div>
</ul>
                            </div>
                            <div class="p-3">
                                

                            <form method='post' action="{{route('adminvisaupdate3')}}" class="w-full">
                            @csrf   
                            <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-first-name">
                                               Father Name
                                            </label>
                                            <input name=id type=hidden value="{{$visa->id}}">
                                            <input name=father_name value="{{old('father_name')==null?$visa->father_name:old('father_name')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-yellow-500  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                                   id="grid-first-name" type="text" placeholder="Jane">
                                                   @error('father_name')
                                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                     @enderror
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-last-name">
                                                Mother Name
                                            </label>
                                            <input name="mother_name" value="{{old('mother_name')==null?$visa->mother_name:old('mother_name')}}" class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded border-yellow-500   py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name" type="text" placeholder="Doe">
                                                   @error('mother_name')
                                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                     @enderror
                                        </div>
                                    </div>


                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-first-name">
                                              Parent Location
                                            </label>
                                            <input name="parent_location" value="{{old('parent_location')==null?$visa->parent_location:old('parent_location')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-yellow-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                                   id="grid-first-name" type="text" placeholder="Jane">
                                                   @error('parent_location')
                                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                     @enderror
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-last-name">
                                                Language
                                            </label>
                                        
                                            <input name="language" value="{{old('language')==null?$visa->language:old('language')}}" class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded border-yellow-500  py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name" type="text" placeholder="Doe">
                                                   @error('language')
                                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                     @enderror
                                        </div>
                                    </div>
                             <div class="flex flex-wrap -mx-3 mb-6">
                                        

                                    </div>



                              

                                        <div class="inline-flex">
                                             <a href="/create2">
                                    <p class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
                                        Prev
                                    </p></a>
                                    <button class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-r">
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