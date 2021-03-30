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
                             Your education detail.
</div>
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
  
  
                            <ul class="list-reset flex border-b">
         <div class="md:flex">
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
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="adminvisaedit3?id={{$visa->id}}">Update Family Background</a>
   
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="adminvisaedit4?id={{$visa->id}}">Update Passport Information</a>
    </li>
   </li>

      <li class="mr-1">
      <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold"  href="adminvisaedit5?id={{$visa->id}}">Update Education Detail</a>
      </li>
</div>
</ul>
                            </div>
                            <div class="p-3">
                                
                            








                            <form class="w-full" action='{{route("adminvisaupdate5")}}' method='post'>
                            @csrf




                            <div class="flex flex-wrap -mx-3 mb-6">
                                       


                            

                                       
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-last-name">
                                               Degree Name
                                            </label>

                                            <input name=degree_name value="{{old('degree_name')==null?$visa->degree_name:old('degree_name')}}" class=" border-blue-700 @error('degree_name') border-red-700 @enderror appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name" type="text" placeholder="Doe">
                                                   @error('degree_name')
                                                   <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                                   @enderror
                                        </div>
                                    </div>
  <input name=id type=hidden value="{{$visa->id}}">

                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-first-name">
                                              Completion Date
                                            </label>
                                            <input name=completion_date value="{{old('completion_date')==null?$visa->completion_date:old('completion_date')}}" class=" border-blue-700 @error('completion_date') border-red-700 @enderror  appearance-none  block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                                   id="grid-first-name" type="date" placeholder="Days">
                                                   @error('completion_date')
                                                   <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                                   @enderror
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-last-name">
                                              Employment Status
                                            </label>
                                            <input name=employment_status value="{{old('employment_status')==null?$visa->employment_status:old('employment_status')}}" class=" border-blue-700 @error('employment_status') border-red-700 @enderror  appearance-none  block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name" type="text" placeholder="Doe">
                                                   @error('employment_status')
                                                   <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                                   @enderror
                                        </div>
                                        
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-last-name">
                                                Salary     
                                            </label>
                                            <input name=salary value="{{old('salary')==null?$visa->salary:old('salary')}}" class=" border-blue-700 @error('salary') border-red-700 @enderror  appearance-none  block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name" type="text" placeholder="Doe">
                                                   @error('salary')
                                                   <p class='text-red-500 text-xs italic'>{{$message}}
                                                   @enderror
                                        </div> 
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-last-name">
                                                Job Location     
                                            </label>
                                            <input name=job_location value="{{old('job_location')==null?$visa->job_location:old('job_location')}}" class=" @error('job_location') border-red-700 @enderror  border-blue-700 appearance-none  block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name" type="text" placeholder="Doe">
                                                   @error('job_location')
                                                   <p class="text-red-700 text-xs italic">{{$message}}</p>
                                                   @enderror
                                        </div>
                                    </div>
                             <div class="flex flex-wrap -mx-3 mb-6">
                                        

                                    </div>
                   




                              

                                        <div class="inline-flex">
                                             <a href="/create4">
                                    <p class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
                                        Prev
                                    </p></a>
                                    
                                    <button type=submit class="bg-red-200 hover:bg-red-500 text-red-900 font-bold py-2 px-4 rounded-r">
                                        Submit
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