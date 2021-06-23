<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSS only -->
    @include('super_agent.layout.head')
</head>

<body>

    @include('super_agent.layout.side_nav')
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


        {{-- @include('super_agent.layout.top_nav') --}}
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
    <script src="{{ URL::asset('admin-master/main.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#country-dd').on('change', function() {
                var idCountry = this.value;
                $("#state-dd").html('');
                $.ajax({
                    url: "{{ url('api/fetch-states') }}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#state-dd').html('<option value="">Select State</option>');
                        $.each(result.states, function(key, value) {
                            $("#state-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-dd').html('<option value="">Select City</option>');
                    }
                });
            });
            $('#state-dd').on('change', function() {
                var idState = this.value;
                $("#city-dd").html('');
                $.ajax({
                    url: "{{ url('api/fetch-cities') }}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#city-dd').html('<option value="">Select City</option>');
                        $.each(res.cities, function(key, value) {
                            $("#city-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });

    </script>


</body>

</html>
