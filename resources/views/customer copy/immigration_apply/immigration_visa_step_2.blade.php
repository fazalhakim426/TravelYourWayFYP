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
    <!-- <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Tab</a> -->
    <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="#">Contact Information</a>
    
    
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Family Background</a>
   
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Passport Information</a>
    </li>
 </li>

      <li class="mr-1">
      <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Education Detail</a>
      </li>
</div>
</ul>


                            </div>
                            <div class="p-3">
                               



                            <form class="w-full" method="post" action="{{route('store2')}}">
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block  uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-first-name">
                                               Street Address
                                            </label>
                                            <input name='street_address' value="{{old('street_address')==null?$visa->street_address:old('street_address')}}"   class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('street_address')  border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white-500"
                                                   id="grid-first-name" type="text" placeholder="123">
                                            @error('street_address')
                                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <input name='id' type='hidden' value="{{$visa->id}}">
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-last-name">
                                                City
                                            </label>
                                            <input name='city' value="{{old('city')==null?$visa->city:old('city')}}" class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight @error('city')  border-red-500 @enderror border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name" type="text" placeholder="Buner">
                                                   @error('city')
                                                   <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                   @enderror
                                        </div>
                                    </div>


                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-first-name">
                                              State
                                            </label>
                                            <input name="state" value="{{old('state')==null?$visa->state:old('state')}}"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight @error('state')  border-red-500 @enderror border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white-500"
                                                   id="grid-first-name" id="state" type="text" placeholder="KPK">
                                                   @error('state')
                                                   <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                   @enderror
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                                   for="grid-last-name">
                                                Country
                                            </label>
                                            <input name="country"  value="{{old('country')==null?($visa->country=null?"Pakistan":"Pakistan"):old('country')}}"  class="appearance-none block w-full bg-gray-200 @error('country')  border-red-500 @enderror text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white-500 focus:border-gray-600"
                                                   id="grid-last-name" type="text" placeholder="Pakistan">
                                                   @error('country')
                                                   <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                   @enderror
                                        </div>
                                    </div>
                                    <!-- <div class="flex flex-wrap -mx-3 mb-6">
                                        

                                    </div> -->
                                    <div class="flex flex-wrap -mx-3 mb-2">
                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                   for="grid-city">
                                                Phone Number 
                                            </label>
                                            <input name="phone_number"  value="{{old('phone_number')==null?$visa->phone_number:old('phone_number')}}"  class="appearance-none  @error('phone_number')  border-red-500 @enderror block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white focus:border-grey"
                                                   id="grid-city" type="number" placeholder="Albuquerque">
                                                   @error('phone_number')
                                                   <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                   @enderror
                                        </div>
                               
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                   for="grid-city">
                                                   Work Phone
                                            </label>
                                            <input name='work_phone'   value="{{old('work_phone')==null?$visa->work_phone=null?$visa->phone_number:$visa->phone_number:old('work_phone')}}"  class="appearance-none  @error('work_phone')  border-red-500 @enderror block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white focus:border-grey"
                                                   id="grid-city" type="number" placeholder="Albuquerque">
                                                   @error('work_phone')
                                                   <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                   @enderror
                                        </div>

                             
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                   for="grid-zip">
                                                Postal Code
                                            </label>
                                            <input name=id type=hidden value="{{$visa->id }}">
                                            <input value="{{old('postal_code')==null?$visa->postal_code:old('postal_code')}}" name="postal_code" class="@error('postal_code')  border-red-500 @enderror appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white focus:border-grey"
                                                   id="grid-zip" type="number" placeholder="3">
                                                   @error('postal_code')
                                                   <p class="text-red-500 text-xs italic">{{$message}}</p>
                                                   @enderror
                                        </div>
                                    </div>
                               

                              

                                        <div class="inline-flex">
                                             <a href="/create1">
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