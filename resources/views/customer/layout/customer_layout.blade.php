<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSS only -->
    @include('customer.layout.head')
</head>

<body>

    @include('customer.layout.navigation')
    <!--Main-->

    <main class="bg-white-300 flex-1 p-3 overflow-hidden">


        @if (Session::has('success'))

            <div class="bg-green-300 mb-2 border border-green-300 text-green-600 px-4 py-3 rounded relative"
                role="alert">
                <strong class="font-bold"></strong>
                <span class="block sm:inline"> {{ nl2br(Session::get('success')) }}.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        @endif

        @yield('customer')

    </main>
    <!--/Main-->
    </div>
    <!--Footer-->

    <footer class="bg-grey-darkest text-white p-2">
        @include('customer.layout.footer')
    </footer>
    <!--/footer-->

    </div>

    </div>
    <script src="{{ URL::asset('admin-master/main.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>
