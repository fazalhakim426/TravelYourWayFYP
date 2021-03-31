<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    
                    <a href="/" class="text-white">
                  Agent
                  </a>
                </div>

                <div class="p-1 flex flex-row items-center">
                <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"> agent : {{ Auth::user()->name }}</a>
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
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border @if(Request::url() === URL::to('/').'/agentdashboard') bg-white @endif">
                    
                        <a href="/agentdashboard"  class="font-sans hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Visa notification
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    
                   
                    <li class="w-full h-full py-3 px-2">
                       
                        <ul class="list-reset -mx-2 bg-white-medium-dark">
                
                        <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3  @if(Request::url() === URL::to('/').'/ticketnotifications') bg-white @endif">
                                <a  href="/ticketnotifications"
                                   class="mx-4 font-sans hover:font-normal text-sm text-nav-item no-underline">
                                    Ticket Notification
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                      


                            <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3 @if((Request::url() === URL::to('/').'/mangaesuperagents')) bg-white @endif @if((Request::url() === URL::to('/').'/manageadminvisaedit0')) bg-white @endif  @if((Request::url() === URL::to('/').'/manage/adminvisaedit1')) bg-white @endif  @if((Request::url() === URL::to('/').'/manage/adminvisaedit2')) bg-white @endif  @if((Request::url() === URL::to('/').'/manage/adminvisaedit3')) bg-white @endif  @if((Request::url() === URL::to('/').'/manage/adminvisaedit4')) bg-white @endif  @if((Request::url() === URL::to('/').'/manage/adminvisaedit5')) bg-white @endif ">
                                <a   href="/mangaesuperagents"
                                   class="mx-4 font-sans hover:font-normal text-sm text-nav-item no-underline">
                                    Manage Super Agent
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            {{-- <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3 @if((Request::url() === URL::to('/').'/manage/Visit')) bg-white @endif @if((Request::url() === URL::to('/').'/manage/adminvisaedit0')) bg-white @endif  @if((Request::url() === URL::to('/').'/manage/adminvisaedit1')) bg-white @endif  @if((Request::url() === URL::to('/').'/manage/adminvisaedit2')) bg-white @endif  @if((Request::url() === URL::to('/').'/manage/adminvisaedit3')) bg-white @endif  @if((Request::url() === URL::to('/').'/manage/adminvisaedit4')) bg-white @endif  @if((Request::url() === URL::to('/').'/manage/adminvisaedit5')) bg-white @endif ">
                                <a   href="/manage/Visit"
                                   class="mx-4 font-sans hover:font-normal text-sm text-nav-item no-underline">
                                    Visit 
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>

                            <li class="border-t border-light-border w-full h-full px-2 py-3 @if(Request::url() === URL::to('/').'/manage/Ummrah') bg-white @endif">
                                <a  href="/manage/Ummrah"
                                   class="mx-4 font-sans hover:font-normal text-sm text-nav-item no-underline">
                                    Ummrah
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>  
                            <li class="border-t border-light-border w-full h-full px-2 py-3 @if(Request::url() === URL::to('/').'/manage/Ticket') bg-white @endif">
                                <a  href="/manage/Ticket"
                                   class="mx-4 font-sans hover:font-normal text-sm text-nav-item no-underline">
                                   Ticket
                                   <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3 @if(Request::url() === URL::to('/').'/manage/Hajj') bg-white @endif">
                                <a  href="/manage/Hajj"
                                   class="mx-4 font-sans hover:font-normal text-sm text-nav-item no-underline">
                                    Hajj
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
--}}
                            <li class="border-t border-light-border w-full h-full px-2 py-3 @if(Request::url() === URL::to('/').'/hotels') bg-white @endif" >
                                <a  href="/hotels"
                                   class="mx-4 font-sans hover:font-normal text-sm text-nav-item no-underline">
                                    Hotels
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>  
                        </ul>
                    </li>
                </ul>

            </aside>
            <!--/Sidebar-->