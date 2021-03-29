<x-app-layout>
    <x-auth-card>
        
        <x-slot name="logo">
          
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
       

        <form method="POST" action="{{ route('register2') }}">
            @csrf


<!--  phone number -->
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
                    <x-label for="street" :value="__('Address')" />
                     <input id="street" value="{{old('street')==null?Auth::user()->street:old('street')}}"  class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" type="text" name="street" placeholder="Street No 1" />
                    @error('street')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
               
                </div>
             
                <div class="mt-2">
                    <label class="hidden text-sm block text-gray-600" for="address">City</label>
                    <input id="city" value="{{old('city')==null?Auth::user()->city:old('city')}}"  class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" type="text" name="city" placeholder="city " />
                    @error('city')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="hidden text-sm block text-gray-600" for="state">City</label>
                    <input id="state" value="{{old('state')==null?Auth::user()->state:old('state')}}"  class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" type="text" name="state" placeholder="state" />
                    @error('state')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="inline-block mt-2 w-1/2 pr-1">
                    <label class="hidden block text-sm text-gray-600" for="cus_email">Country</label>
                    <input id="country" value="{{old('country')==null?Auth::user()->country:old('country')}}"  class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" type="text" name="country" placeholder="country" />
                    @error('country')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror    
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                    <label class="hidden block text-sm text-gray-600" for="cus_email">Zip</label>
                    <input id="zip" value="{{old('zip')==null?Auth::user()->zip:old('zip')}}"  class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" type="text" name="zip" placeholder="12970" />
                    @error('zip')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
               
                </div>
                <div class="mt-2">
                    <x-label for="membership" :value="__('Membership')" />
                     <select id="membership"   class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"  name="membership"  >
                    
                     @if((old('membership')==null?Auth::user()->membership:old('membership'))!="")
                     <option>
                         {{old('membership')==null?Auth::user()->membership:old('membership')}}
                     </option>
                     @endif
                     <option>Customer</option>
                     <option>Agent</option>
                     <option>Super Agent</option>
                 
                     </select>
                     @error('membership')
                     <p class="text-red-500">{{$message}}</p>
                     @enderror
               
                </div>

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
</x-app-layout>


