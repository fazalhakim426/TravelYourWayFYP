<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('resources/images/logo.png')}}">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('resources/css/bootstrap.min.css')}}" rel="stylesheet" >
        <!--Custom CSS-->
        <link href="{{ asset('resources/css/style.css')}}" rel="stylesheet" >
        <!--Flaticons CSS-->
        <link href="{{ asset('resources/font/flaticon.css')}}" rel="stylesheet" >
        <!--Plugin CSS-->
        <link href="{{ asset('resources/css/plugin.css')}}" rel="stylesheet" >
        <!--Font Awesome-->
        <link href="{{ asset('resources/css/font-awesome.min.css')}}" rel="stylesheet" >
      
      

        <title>{{ config('app.name', 'Travel Your Way') }}</title>
        {{-- @livewireStyles --}}
        <!-- Styles -->
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">        
        <script src="{{ asset('js/app.js') }}" defer></script>
         <!-- Preloader -->

         
    {{-- <div id="preloader">
        <div id="status"></div>
    </div> --}}


    <!-- Preloader Ends -->
    </head>
    <body >
        
        @include('layouts.navigation')

            <main>
                {{ $slot }}
            </main>


        {{-- @livewireScripts --}}

        @include('layouts.footer')


        <script src="{{URL::asset('admin-master/main.js')}}"></script>
            <!-- *Scripts* -->
    <script src="{{asset('resources/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('resources/js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{asset('resources/js/plugin.js')}}"></script> --}}
    <script src="{{asset('resources/js/main.js')}}"></script>
    <script src="{{asset('resources/js/main-1.js')}}"></script>    
    <script src="{{asset('resources/js/preloader.js')}}"></script>
    <script src="{{asset('resources/js/custom-swiper2.js')}}"></script>
    {{-- <script src="{{asset('resources/js/custom-countdown.js')}}"></script> --}}
    @livewireStyles
    <script>
$(document).ready(function () {
            $('#country-dd').on('change', function () {
                var idCountry = this.value;
                $("#state-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataTyppe: 'json',
                    success: function (result) {
                        console.log(result);
                        $('#state-dd').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-dd').html('<option value="">Select City</option>');
                    }
                });
            });


            $('#state-dd').on('change', function () {
                var idState = this.value;
                $("#city-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        
                        console.log(res);
                        $('#city-dd').html('<option value="">Select City</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });




            
            $('#city-dd').on('change', function () {
                var idHotel= this.value;
                $("#hotel-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-hotels')}}",
                    type: "POST",
                    data: {
                        city_id: idHotel,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        
                        // console.log(res);
                        $('#hotel-dd').html('<option value="">Select Hotel</option>');
                        $.each(res.hotels, function (key, value) {
                            $("#hotel-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });



        });

    </script>
  @livewireScripts
    </body>
</html>
