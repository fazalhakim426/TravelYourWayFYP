<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>{{ Auth::user()->name }} </title>
</head>

<body>

        @include('customer.layout.navigation')
        
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 ">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                   


                @include('customer.layout.tab')



                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center " style="background: #edf2f7">
                               First Select your favourite Hotel. 
                           </div>
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
  
  
          
                            <ul class="list-reset flex border-b">
         <div class="md:flex">
         <li class="mr-1">
      
      <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="#">Hotels </a>
      </li>

  <li class="-mb-px mr-1 ">
       <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" >Rooms</a>
    
  </li>
  <li class="mr-1 ">
 
    
  </li>
  <li class="mr-1">
    
  </li>
 
</div>
</ul>
                            </div>
                            <div class="p-3">




                                @include('customer.hotel.filter')    

                               

                                  
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/Grid Form-->










                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
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



</body>

</html>