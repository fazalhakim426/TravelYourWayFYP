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
                <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"> Username: {{ Auth::user()->name }}</a>
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
            <aside id="sidebar" class="bg-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border @if(Request::url() === URL::to('/').'/customer/dashboard') bg-gray-600 @endif">
                    
                        <a href="/customer/dashboard"  class="hover:font-normal text-sm text-white no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    
                    <li class="border-t  border-black-border w-full h-full px-2 py-3 @if((Request::url() === URL::to('/').'/customer/visas'))  bg-gray-600  @endif @if((Request::url() === URL::to('/').'/personalInformationIndex'))  bg-gray-600  @endif  @if((Request::url() === URL::to('/').'/contactInformationIndex'))  bg-gray-600  @endif  @if((Request::url() === URL::to('/').'/agentIndex'))  bg-gray-600  @endif  @if((Request::url() === URL::to('/').'/apply/Hajj'))  bg-gray-600  @endif  @if((Request::url() === URL::to('/').'/edit4'))  bg-gray-600  @endif  @if((Request::url() === URL::to('/').'/edit5'))  bg-gray-600  @endif @if((Request::url() === URL::to('/').'/apply/Ummrah'))  bg-gray-600  @endif ">
                        <a   href="/customer/visas"
                           class="mx-4   hover:font-normal text-sm text-white no-underline">
                           Visa Apply
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>            
                    </li>


                    <li class="border-t  border-light-border w-full h-full px-2 py-3 @if((Request::url() === URL::to('/').'/customer/tickets'))  bg-gray-600  @endif @if((Request::url() === URL::to('/').'/ticketTripDetailIndex'))  bg-gray-600  @endif  @if((Request::url() === URL::to('/').'/edit1'))  bg-gray-600  @endif  @if((Request::url() === URL::to('/').'/edit2'))  bg-gray-600  @endif  @if((Request::url() === URL::to('/').'/edit3'))  bg-gray-600  @endif  @if((Request::url() === URL::to('/').'/edit4'))  bg-gray-600  @endif  @if((Request::url() === URL::to('/').'/edit5'))  bg-gray-600  @endif @if((Request::url() === URL::to('/').'/create1'))  bg-gray-600  @endif ">
                        <a   href="/customer/tickets"
                           class="mx-4   hover:font-normal text-sm text-white no-underline">
                           Ticket Apply
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>            
                    </li>

                  

                            <li class="border-t border-light-border w-full h-full px-2 py-3 @if(Request::url() === URL::to('/').'/customer/hotelreservations')  bg-gray-600  @endif" >
                                <a  href="/customer/hotelreservations"
                                   class="mx-4   hover:font-normal text-sm text-white no-underline">
                                    Hotel Reservation
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                      
                </ul>

            </aside>
            <!--/Sidebar-->