<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

<!-- Email Address -->
<div class="mt-4">
    <x-label for="email" :value="__('Email')" />

    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
</div>


            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>

                <!-- <div class=" bg-gray-300">
    <div class="container flex justify-center py-20">
        <div class="p-8 bg-white rounded-lg max-w-md pb-10">
            <div class="flex justify-center mb-4"> <img src="https://i.imgur.com/f6Tb5U1.png" width="70"> </div> <input type="text" class="h-12 rounded w-full border px-3 focus:text-black focus:border-blue-100" placeholder="Name"> <input type="text" class="h-12 mt-3 rounded w-full border px-3 focus:text-black focus:border-blue-100" placeholder="Email"> <input type="text" class="h-12 mt-3 rounded w-full border px-3 focus:text-black focus:border-blue-100" placeholder="Password"> <input type="text" class="h-12 mt-3 rounded w-full border px-3 focus:text-black focus:border-blue-100" placeholder=" Retype password"> <button class="uppercase h-12 mt-3 text-white w-full rounded bg-red-700 hover:bg-red-800">Register</button>
            <div class="flex justify-between items-center mt-3">
                <hr class="w-full"> <span class="p-2 text-gray-400 mb-1">OR</span>
                <hr class="w-full">
            </div> -->
        
        <!-- </div>
    </div>
</div> -->


            </div>
            </form>
            

           
<div class="flex justify-between items-center mt-3">
                <hr class="w-full"> <span class="p-2 text-gray-400 mb-1">OR</span>
                <hr class="w-full">
            </div>
            <a href="/facebook/redirect">
            <button class="uppercase h-12 mt-3 text-white w-full rounded bg-blue-800 hover:bg-blue-900">
                 <i class="fa fa-facebook mr-2"></i>Facebook</button>
            </a>
            <a href="/auth/redirect">
         <button class="uppercase h-12 mt-3 text-white w-full rounded bg-red-800 hover:bg-red-900">
             <i class="fa fa-google mr-2"></i>Google</button>
            </a>



        
    </x-auth-card>
</x-guest-layout>


