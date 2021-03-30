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
@include('userdashboard.layout.navigation')
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    

                    @include('userdashboard.layout.tab')




                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center " style="background: #edf2f7">
                               Please provide your Trip Detail so that we can understand.
</div>
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
  
  
                            <ul class="list-reset flex border-b">
         <div class="md:flex">
         <li class="mr-1">
      
      <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/visas">Trip Details</a>
      </li>

  <li class="-mb-px mr-1 ">
       <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/create1">Personal Information</a>
    
  </li>
  <li class="mr-1 ">
    <!-- <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#">Tab</a> -->
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/create2">Contact Information</a>
    
    
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/create3">Family Background</a>
   
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="#">Passport Information</a>
    </li>
 </li>

      <li class="mr-1">
      <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Education Detail</a>
      </li>
</div>
</ul>
                            </div>
                            <div class="p-3">
                            <form action="{{route('store4')}}" method=post class="w-full">
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-first-name">
                                               Passport Type
                                            </label>

                                            <input name=id type=hidden value="{{$visa->id}}">
                                            <input name=passport_type value="{{old('passport_type')==null?$visa->passport_type:old('passport_type')}}" class=" @error('passport_type') border-red-700 @enderror border-yellow-700  block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                                   id="grid-first-name" type="text" placeholder="Jane">
                                                   @error('passport_type')
                                                   <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                   @enderror
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-last-name">
                                                Passport Number
                                            </label>
                                            <input name=passport_number value="{{old('passport_number')==null?$visa->passport_number:old('passport_number')}}" class=" @error('passport_number') border-red-700 @enderror border-yellow-700  block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name" type="text" placeholder="Doe">
                                                   @error('passport_number')
                                                   <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                   @enderror
                                        </div>
                                    </div>


                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-first-name">
                                              Passport Issue Date
                                            </label>
                                            <input name=passport_issue_date value="{{old('passport_issue_date')==null?$visa->passport_issue_date:old('passport_issue_date')}}" class=" @error('passport_issue_country') border-red-700 @enderror border-yellow-700  block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                                   id="grid-first-name" type="date" placeholder="Jane">
                                                   @error('passport_issue_date')
                                                   <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                   @enderror

                                            
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-last-name">
                                                Passport Expiry date
                                            </label>
                                            <input name=passport_expiry_date value="{{old('passport_expiry_date')==null?$visa->passport_expiry_date:old('passport_expiry_date')}}"  class=" @error('passport_expiry_date') border-red-700 @enderror border-yellow-700  block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name" type="date" placeholder="Doe">
                                                   @error('passport_expiry_date')
                                                   <p class="text-red-500 text-xs italic">
                                                   {{$message}}</p>
                                                   @enderror
                                        </div>
                                        
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-last-name">
                                                Passport Issue Country
                                            </label>
                                            <input name=passport_issue_country  value="{{old('passport_issue_country')==null?$visa->passport_issue_country:old('passport_issue_country')}}" class=" @error('passport_issue_country') border-red-700 @enderror border-yellow-700  block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name"  placeholder="Doe">
                                                   @error('passport_issue_country')
                                                   <p class="text-red-500 text-xs italic">
                                                   {{$message}}</p>
                                                   @enderror


                                        </div>
                                    </div>
                             <div class="flex flex-wrap -mx-3 mb-6">
                                        

                                    </div>
                                







                              

                                        <div class="inline-flex">
                                             <a href="/create3">
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