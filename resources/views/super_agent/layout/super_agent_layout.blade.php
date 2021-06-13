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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    dataType: 'json',
                    success: function (result) {
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
                        $('#city-dd').html('<option value="">Select City</option>');
                        $.each(res.cities, function (key, value) {
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