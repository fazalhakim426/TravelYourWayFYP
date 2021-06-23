<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('resources/images/logo.png')}}">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('resources/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <!--Custom CSS-->
        <link href="{{ asset('resources/css/style.css')}}" rel="stylesheet" type="text/css">
        <!--Flaticons CSS-->
        <link href="{{ asset('resources/font/flaticon.css')}}" rel="stylesheet" type="text/css">
        <!--Plugin CSS-->
        <link href="{{ asset('resources/css/plugin.css')}}" rel="stylesheet" type="text/css">
        <!--Font Awesome-->
        <link href="{{ asset('resources/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <script src="{{asset('resources/js/custom-countdown.js')}}"></script>
    </body>
</html>
