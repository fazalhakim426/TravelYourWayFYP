<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    
                    <a href="/" class="text-white">
                  TYW 
                  </a>
                </div>

                <div class="p-1 flex flex-row items-center">
                <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"> AoA : {{ Auth::user()->name }}</a>
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
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border @if(Request::url() === URL::to('/').'/dashboard') bg-white @endif">
                    
                        <a href="/dashboard"  class="  hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    
                 
                      


                    <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3 @if((Request::url() === URL::to('/').'/visas')) bg-white @endif @if((Request::url() === URL::to('/').'/edit0')) bg-white @endif  @if((Request::url() === URL::to('/').'/edit1')) bg-white @endif  @if((Request::url() === URL::to('/').'/edit2')) bg-white @endif  @if((Request::url() === URL::to('/').'/edit3')) bg-white @endif  @if((Request::url() === URL::to('/').'/edit4')) bg-white @endif  @if((Request::url() === URL::to('/').'/edit5')) bg-white @endif @if((Request::url() === URL::to('/').'/create1')) bg-white @endif ">
                        <a   href="/visas"
                           class="mx-4   hover:font-normal text-sm text-nav-item no-underline">
                           Apply
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>            
                    </li>

                    
                    <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3 @if((Request::url() === URL::to('/').'/mangeagent')) bg-white @endif @if((Request::url() === URL::to('/').'/edit0')) bg-white @endif  @if((Request::url() === URL::to('/').'/edit1')) bg-white @endif"  >
                        <a   href="/manage/agents"
                           class="mx-4   hover:font-sans text-sm text-nav-item no-underline">
                           Manage Agent
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
<!-- 
                            <li class="border-t border-light-border w-full h-full px-2 py-3 @if(Request::url() === URL::to('/').'/ummrahs') bg-white @endif">
                                <a  href="ummrahs"  
                                   class="mx-4   hover:font-normal text-sm text-nav-item no-underline">
                                    Ummrah
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3 @if(Request::url() === URL::to('/').'/hajjs') bg-white @endif">
                                <a  href="/hajjs"
                                   class="mx-4   hover:font-normal text-sm text-nav-item no-underline">
                                    Hajj
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li> -->

                            <li class="border-t border-light-border w-full h-full px-2 py-3 @if(Request::url() === URL::to('/').'/hotelreservations') bg-white @endif" >
                                <a  href="/hotelreservations"
                                   class="mx-4   hover:font-normal text-sm text-nav-item no-underline">
                                    Hotel Reservation
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                      
                </ul>

            </aside>
            <!--/Sidebar-->