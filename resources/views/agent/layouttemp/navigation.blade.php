<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    
                     
                    <a href="/" class="text-white">
                        Home
                        </a>
                </div>

                <div class="p-1 flex flex-row items-center">
                <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">Agent : {{ Auth::user()->name }}</a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="/register2" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                          <!-- <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li> -->
                          <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>
                      
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->






        <div class="flex flex-1">

        <div class="container mx-auto my-5 p-5">
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-3 border-t-4 border-green-400">
                        <div class="image overflow-hidden">
                            <img class="h-auto w-full mx-auto"
                            src="{{asset('profile_images/'.$user->profile_image)}}"
                            alt="">
                        </div>
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$user->name}} </h1>
                        <h3 class="text-gray-600 font-lg text-semibold leading-6">{{$user->phone_number}} </h3>
                        <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">From{{$user->city}} , {{$user->state}} , {{$user->country}}</p>
                        <ul
                            class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                          
                            <li class="flex items-center py-3">
                                <span>Member since</span>
                                <span class="ml-auto">{{$user->created_at}}</span>
                            </li>                          
                            <li class="flex items-center py-3">
                                <span>Profile <br> Update at:</span>
                                <span class="ml-auto">{{$user->updated_at}}</span>
                            </li>
                            <a href="/register2">
                                <li class="flex items-center py-3">
                                       <span></span>
                                       <span class="ml-auto"><span
                                               class="bg-green-500 py-1 px-2 rounded text-white text-sm">Edit Profile</span></span>
                                   </li>
                         
                            </a>
                                       
                        </ul>
                    </div>
                    <!-- End of profile card -->
                    <div class="my-4"></div>
                    <!-- Friends card -->
                    <div class="bg-white p-3 hover:shadow">
                        <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
                            <span class="text-green-500">
                                <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </span>
                            <span>Super Agents</span>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="text-center my-2">
                                <img class="h-16 w-16 rounded-full mx-auto"
                                    src="{{asset('/profile_images/'.$user->userable->super_agent->user->profile_image)}}"
                                    alt="">
                                <a href="#" class="text-main-color">{{$user->userable->super_agent->user->name}}</a>
                            </div>
                            {{-- <div class="text-center my-2">
                                <img class="h-16 w-16 rounded-full mx-auto"
                                    src="https://widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-4.png"
                                    alt="">
                                <a href="#" class="text-main-color">James</a>
                            </div>
                            <div class="text-center my-2">
                                <img class="h-16 w-16 rounded-full mx-auto"
                                    src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                    alt="">
                                <a href="#" class="text-main-color">Natie</a>
                            </div>
                            <div class="text-center my-2">
                                <img class="h-16 w-16 rounded-full mx-auto"
                                    src="https://bucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com/public/images/f04b52da-12f2-449f-b90c-5e4d5e2b1469_361x361.png"
                                    alt="">
                                <a href="#" class="text-main-color">Casey</a>
                            </div> --}}
                        </div>
                    </div>
                    <!-- End of friends card -->
                </div>
                <!-- Right Side -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
            
    
    
    
    
    