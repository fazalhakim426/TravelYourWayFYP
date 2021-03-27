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
                               Note:if you are applying for some one else please make sure to change the information given below so that we had right information about your travaler.        
</div>
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
  
  
                   
                           
                            <ul class="list-reset flex border-b">
         <div class="md:flex">
         <li class="mr-1">
         <li class="-mb-px mr-1 ">
       <a   class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="adminvisaedit0?id={{$visa->id}}">     Update Trip Details</a>
    
  </li>

  <li class="-mb-px mr-1 ">
       <a  class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold"  href="adminvisaedit1?id={{$visa->id}}">Update Personal Information</a>
    
  </li>
  <li class="mr-1 ">
    <!-- <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#">Tab</a> -->
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  href="adminvisaedit2?id={{$visa->id}}">Update Contact Information</a>
    
    
  </li>
  <li class="mr-1">
    <a  href="adminvisaedit3?id={{$visa->id}}"     class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"  >Update Family Background</a>
   
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
                               








                            <form method="POST"   class="w-full" action="{{ route('adminvisaupdate1') }}">
            @csrf
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-black-700 text-xs  mb-1"
                                                   for="grid-first-name">
                                                Full Name
                                            </label>
                                            <input name=id type=hidden value="{{$visa->id }}">
                                         
                                            <input name=name  value="{{  old('name') == null ? $visa->name :  old('name') }}"  class=" border-yellow-500 appearance-none block w-full bg-gray-200 text-gray-700 border border-yellow-500Fm  @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                                   id="name" type="text" placeholder="Jane">
                                            @error('name')
                                                   <p class="text-red-500 text-xs italic"
                                                   for="name">
                                                   {{ $message }}
                                            </p>
                                                   @enderror
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-black-700 text-xs  mb-1"
                                                   for="email">
                                                Email
                                            </label>
                                            <input name=email  value="{{  old('email') == null ? $visa->email :  old('email') }}"  class="appearance-none block w-full bg-gray-200 text-grey-darker border @error('email') border-red-500 @enderror border-gray-200 rounded border-yellow-500   py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name" type="text" placeholder="Doe">
                                        </div>
                                    </div>
                                    <!-- <div class="flex flex-wrap -mx-3 mb-6">
                                        
                                    </div> -->
                                    <div class="flex flex-wrap -mx-3 mb-2">
                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs  mb-1"
                                                   for="grid-city">
                                                Country Of Birth
                                            </label>
                                            <input name=country_of_birth value="{{  old('country_of_birth') == null ? $visa->country_of_birth :  old('country_of_birth') }}" class="appearance-none block w-full @error('country_of_birth') border-red-500 @enderror bg-grey-200 text-grey-darker border border-grey-200 rounded border-yellow-500   py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="grid-city" type="text" placeholder="Albuquerque">
                                                   @error('country_of_birth')
                                                   <label class="text-red-500 text-xs italic"
                                                   for="country_of_birth">
                                                   {{ $message }}
                                            </label>
                                                   @enderror
                                        </div>
                                      

                                    

                                        
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs  mb-1"
                                                   for="grid-city">
                                                Date Of Birth
                                            </label>
                                            <input name=date_of_birth value="{{  old('date_of_birth') == null ? $visa->date_of_birth :  old('date_of_birth') }}" class="appearance-none block w-full bg-grey-200 text-grey-darker @error('date_of_birth') border-red-500 @enderror border border-grey-200 rounded border-yellow-500   py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="grid-city" type="date" placeholder="Albuquerque">
                                                   @error('date_of_birth')
                                                   <label class="text-red-500 text-xs italic"
                                                   for="date_of_birth">
                                                   {{ $message }}
                                            </label>
                                                   @enderror
                                        </div>

                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-grey-darker text-xs  mb-1"
                                                   for="grid-state">
                                                Marital Status
                                            </label>
                                            <div class="relative">
                                                <select name=marital_status class="block border-yellow-500 appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none @error('marital_status') border-red-500 @enderror focus:bg-white focus:border-grey"
                                                        id="grid-state">
                                                        <option>{{  old('marital_status') == null ? $visa->marital_status :  old('marital_status') }}</option>
                                                    <option>Married</option>
                                                    <option>UnMarried</option>
                                                </select>
                                                @error('marital_status')
                                                   <label class="text-red-500 text-xs italic"
                                                   for="marital_status">
                                                   {{ $message }}
                                            </label>
                                                   @enderror
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 20 20">
                                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                                    </svg>
                                                </div>
                                            </div></div>

                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs  mb-1"
                                                   for="grid-state">
                                                Gender
                                            </label>
                                            <div class="relative">
                                                <select name=gender class="block border-yellow-500 appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded @error('gender') border-red-500 @enderror leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="grid-state">
                                                        <option>{{  old('gender') == null ? $visa->gender :  old('gender') }}</option>
                                                        <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Other</option>
                                                </select>
                                                @error('gender')
                                                   <label class="text-red-500 text-xs italic"
                                                   for="gender">
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
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs  mb-1"
                                                   for="grid-zip">
                                                Number Of People
                                            </label>
                                            <input name=number_of_people value="{{  old('number_of_people') == null ? $visa->number_of_people :  old('number_of_people') }}"  class="appearance-none  @error('number_of_people') border-red-500 @enderror block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded border-yellow-500   py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   id="grid-zip" type="text" placeholder="3">
                                                   @error('number_of_people')
                                                   <label class="text-red-500 text-xs italic"
                                                   for="number_of_people">
                                                   {{ $message }}
                                            </label>
                                                   @enderror
                                        </div>
                                    </div>
                 




                              

                                        <div class="inline-flex">
                                 
                                    <form method="get" action="{{route('visas.edit', $visa->id) }}"  >
                                                      @csrf
                                                      <!-- <a class=" href="#">Update Trip Details</a> -->
    
                                                <button type=submit class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
                                                Prev
                                                        </button>
                                                        </form>


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