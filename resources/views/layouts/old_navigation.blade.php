 <!-- component -->

 <nav class="flex items-center justify-between flex-wrap bg-gray-900 text-white p-6">
  <div class="flex items-center flex-no-shrink text-white mr-6">
   <span class="font-semibold text-xl tracking-tight">Travel Your Way</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-blue-800 hover:border-white">
      <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#ourservices" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-indigo-600 mr-4">
        Our Services
      </a>
     
      <a href="#aboutus" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-indigo-600 mr-4">
        About Us
      </a>
    </div>
    <div>
                @if (Route::has('login'))
                    @auth
                    <a href="/dashboard"  class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-indigo-600 mt-4 lg:mt-0">Dashboard</a>
                  
   
                     <a  href="{{  route('logout') }}"  class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-indigo-600 mt-4 lg:mt-0">
                    {{ __('Logout') }}</a>

                    @else
                    
      <a href="{{ route('login') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-indigo-600 mt-4 lg:mt-0">Login</a>
                        @if (Route::has('register'))
                            <!-- <a  class="ml-4 text-sm text-gray-700 underline"></a> -->
                            <a href="{{ route('register') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-indigo-600 mt-4 lg:mt-0">Register</a>
   
                        @endif
                    @endauth
      @endif 
    </form>

     </div>
  </div>
</nav> 


@auth
{{dd('auth')}}    
@else
    {{dd('not auth')}}
@endauth
