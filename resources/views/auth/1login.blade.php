<!doctype html>
<html lang="en">

<head>
  <title>Login | Travel Your Way</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/all.css')}}">

  <!-- <link rel="stylesheet" href="./dist/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" -->
    <!-- crossorigin="anonymous"> -->
  <style>
  .login{
    background: url("{{URL::asset('/admin-master/dist/images/login-new.jpeg') }}")
  }
  </style>  
</head>

<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
  <div class="w-full max-w-lg">
    <div class="leading-loose">


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" action="{{ route('login') }}">
    @csrf

      

        <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
        <div class="">
             <!-- Email Address -->
             <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="email" name="email" :value="old('email')" required autofocus />
            </div>


          <!-- <label class="block text-sm text-gray-00" for="username">Username</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="text" required="" placeholder="User Name" aria-label="username"> -->
        </div>
        <div class="mt-2">
        <x-label for="password" :value="__('Password')" />

<x-input class="block text-sm text-gray-600" id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" />


          <!-- <label  for="password">Password</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="text" required="" placeholder="*******" aria-label="password"> -->
        </div>
        <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Login</button>
          <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="#">
            Forgot Password?
          </a>
        </div>
        <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="#">
          Not registered ?
        </a>
      </form>

    </div>
  </div>
</div>
</body>

</html>
