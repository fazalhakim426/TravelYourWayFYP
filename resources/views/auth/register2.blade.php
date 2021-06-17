<x-app-layout>
    
    <x-auth-card>
        
        <x-slot name="logo">
          
            <a href="/">
               
               {{-- {{  substr(substr(get_class(Auth::user()->userable)),6)}}  --}}

                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
       

        <form method="POST" action="{{ route('register2') }}" enctype="multipart/form-data">
            @csrf

                                <!-- Profile Card -->
                                <div class="bg-white p-3 border-t-4 border-gray-400">
                                    @error('profile_image')
                                    <p class="text-red-500">{{$message}}</p>
                                    @enderror
                                    <div class="image overflow-hidden">
                                        <span id="spnFilePath"></span>
                                        <input type="file" id="FileUpload1" name='profile_image'  />


                                        <img class="h-auto w-full mx-auto"  id="imgFileUpload" alt="Select File" title="Select File" style="cursor: pointer" 
                                            src="{{asset('profile_images/'.$user->profile_image)}}"
                                            alt="">
                                            


                                    </div>

                                    <ul
                                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                       
                                       
                                        @if(Auth::user()->userable!=null)
                                        <li class="flex items-center py-3">
                                            <span> "Member as a "</span>
                                            <span></span>
                                            <span class="ml-auto"><span
                                                    class="bg-gray-500 py-1 px-2 rounded text-white text-sm">   {{ substr(get_class(Auth::user()->userable),11)}}
                                                 </span></span>
                                       
                                        </li>   @endif

            
                               


    
                                    </ul>
    
                                </div>
                                <!-- End of profile card -->


<!--  phone number -->
<div class="mt-14">
    <div class="flex justify-center -mt-8">
    </div>

 

<div class="mt-4">
    <x-label for="name" :value="__('Name')" />

    <input id="name" value="{{Auth::user()->name}}"  class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" type="text" name="name" placeholder="John" />
</div>
<!--  phone number -->
<div class="mt-4">
    <x-label for="phone_number" :value="__('Phone Number')" />

    <input id="phone_number" value="{{old('phone_number')==null?Auth::user()->phone_number:old('phone_number')}}"  class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" type="number" name="phone_number" placeholder="03123443455" />
     @error('phone_number')
     <p class="text-red-500">{{$message}}</p>
     @enderror
</div>
     
          

                <div class="mt-2">
                    <x-label for="country" :value="__('Country')" />
                    <input id="country" value="{{old('country')==null?Auth::user()->country:old('country')}}"  class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" type="text" name="country" placeholder="country" />
                    @error('country')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
               
                </div>
             
                <div class="mt-2">
                    <x-label for="city" :value="__('City')" />
                    <input id="city" value="{{old('city')==null?Auth::user()->city:old('city')}}"  class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" type="text" name="city" placeholder="city " />
                    @error('city')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mt-2">
                    <x-label for="state" :value="__('State')" />
                    <input id="state" value="{{old('state')==null?Auth::user()->state:old('state')}}"  class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" type="text" name="state" placeholder="state" />
                    @error('state')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
              
               {{-- @if(Auth::user()->userable==null)
                <div class="mt-2">
                    <x-label for="membership" :value="__('Membership')" />
                     <select id="membership"   class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"  name="membership"  >
                     <option>Customer</option>
                     <option>Agent</option>
                     <option>Super Agent</option>
                 
                     </select>
                     @error('membership')
                     <p class="text-red-500">{{$message}}</p>
                     @enderror
               
                </div>
               
                @endif --}}

            <div class="flex items-center justify-end mt-4">
                <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Log out?') }}
                </a> -->


               

                <x-button class="ml-4">
                    {{ __('Finish') }}
                </x-button>

             
            </div>
            </form> 
        

               

               

             
          

          
    </x-auth-card>

    @if (Auth::user()->userable!=null)
    <div class="flex items-center justify-end mt-4">
      

   
    <a href="{{route('/delete-membership')}}"> <x-button class="ml-4 inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">
         {{ __('Delete Membership')  }}
     </x-button></a>  
    </div>
     @endif

</x-app-layout>



