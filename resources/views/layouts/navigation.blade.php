

<!-- Header -->
<header>
    <div class="upper-head clearfix">
        <div class="container">
            <div class="contact-info">
                <p><i class="flaticon-phone-call"></i> Phone: (92)-256-6789</p>
                <p><i class="flaticon-mail"></i> Mail: travelyourway@gmail.com</p>
            </div>
            <div class="login-btn pull-right">

                <div>
                    @if (Route::has('login'))
                        @auth
                        <a href="/dashboard" >Dashboard</a>
                      
       
                         <a  href="{{  route('logout') }}" >
                        {{ __('Logout') }}</a>
    
                        @else
                        
                            <a href="{{ route('login') }}"><i class="fa fa-unlock-alt"></i>Login</a>
                            @if (Route::has('register'))
                                <!-- <a  class="ml-4 text-sm text-gray-700 underline"></a> -->
                                <a href="{{ route('register') }}" ><i class="fa fa-user-plus"></i> Register </a>
       
                            @endif
                        @endauth
          @endif 
        </form>
    
         </div>

            </div>
        </div>
    </div>
</header>
<!-- Header Ends -->







<!-- Navigation Bar -->
<div class="navigation">
    <div class="container">
        <div class="navigation-content">
            <div class="header_menu">
                <!-- start Navbar (Header) -->
                <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                    <div class="logo pull-left">
                        <a href=""><img alt="Image" src="{{ asset('resources/images/logo.png') }}" width="30"
                                height="30"></a>
                    </div>
                    <div id="navbar" class="navbar-nav-wrapper">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            
                            {{-- @if($sub_active) 
                          
                            @endif  --}}

                            <li>
                                <a  href="/" >
                                    Home 
                                    <i class="fa ">
                                        </i>
                                    </a>
                            </li>


                            <li>
                                <a href="#">Visa <i class="fa "></i></a>
                                <ul>
                                    {{-- <li><a href="#">Travel</a>
                                        <ul>
                                            <li><a href="">Immigrations</a></li>
                                            <li><a href="">Home Banner</a></li>
                                            <li><a href="">Home Video</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="/customer/visas_apply/Immigration">Immigration</a></li>
                                    <li><a href="/customer/visas_apply/Visit">Visit</a></li>
                                    <li><a href="/customer/visas_apply/Hajj">Hajj</a></li>
                                    <li><a href="/customer/visas_apply/Ummrah">Ummrah</a></li>
                                </ul>
                            </li>
                           

                            <li>
                                <a href="/hotelIndex">Hotel <i class="fa "></i></a>

                            </li>
                            <li>
                                <a href="/customer/tickets">Ticket<i class="fa "></i></a>

                            </li>
                            <li>
                                <a href="/contact_us"><i class="fa "></i> Contact US<i class="fa "></i></a>

                            </li>
                            <li>
                                <a href="about_us"><i class=""></i> About Us<i class="fa "></i></a>

                            </li>
                          


                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                    <div id="slicknav-mobile"></div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Navigation Bar Ends -->
