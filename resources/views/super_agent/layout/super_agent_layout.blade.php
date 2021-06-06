<!doctype html>
<html>
<head>
   @include('super_agent.layout.head')
</head>
<body>

    @include('super_agent.layout.side_nav')
<!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">
              @include('super_agent.layout.top_nav')
              
                @yield('super_agent')
              {{-- @include('super_agent.nav') --}}
             {{-- {{dd(33)}} --}}
    
    </main>
    <!--/Main-->
</div>
<!--Footer-->

<footer class="bg-grey-darkest text-white p-2">
  @include('super_agent.layout.footer')  
</footer>
<!--/footer-->

</div>

</div>
<script src="{{URL::asset('admin-master/main.js')}}"></script>
</body>

</html>