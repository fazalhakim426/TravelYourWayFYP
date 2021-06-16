<!DOCTYPE html>
<html lang="en">

<head>




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css --> 
       <title>TYW</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        .panel-title {
        display: inline;
        font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
    </style>
    <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/styles.css')}}">

    <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>{{ Auth::user()->name }} </title>
</head>

<body>


        @include('customer.layout.navigation')
        
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 ">

                    <!-- Stats Row Starts Here -->
                   


                @include('customer.layout.tab')



                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                           
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
  
                           Ticket Payment
          
                            <ul class="list-reset flex border-b">
         <div class="md:flex">
         <li class="mr-1">
      <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="/customer/dasboard">Dashboard</a>
   
      </li>

  <li class="-mb-px mr-1 ">
    
  </li>
  <li class="mr-1 ">
    <!-- <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Tab</a> -->
  </li>
  <li class="mr-1">
    
  </li>
 
</div>
</ul>
                            </div>
                                    <div class="p-3">


                                            @include('customer.ticket.payment_template')    
             

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

// var form = document.getElementById("form-id");

// document.getElementById("your-id").addEventListener("click", function () {
//   form.submit();
// });

// $(document).ready(function () {
//     var dateToday = new Date(); 
// $(function() {
//     $( "#to" ).datepicker({
//         numberOfMonths: 3,
//         showButtonPanel: true,
//         minDate: dateToday
//     });
// });


            // $('.dateselect').on('change', function () {
            //     var idHotel = $('#hotel_id').val();
            //     var from = $('#from').val();
            //     var to = $('#to').val();
            //     if(from&&to&&idHotel)
            //     {
                    
            //     $("#room-cards").html('');
                
                

            //     $.ajax({
            //         url: "{{url('api/fetch-hotel-rooms')}}",
            //         type: "POST",
            //         data: {
            //             from: from,
            //             to: to,
            //             hotel_id: idHotel,
            //             _token: '{{csrf_token()}}'
            //         },
            //         dataType: 'json',
            //         success: function (result) {
            //             console.log(result.output);

            //             $("#room-cards").html(result.output);
                

            //             // $('#room-cards').html('<option value="">Select State</option>');
            //             $.each(result.output, function (key, value) {
            //                 $("#room-cards").append(
            //                     value
            //                     );
            //             });

            //             // $('#city-dd').html('<option value="">Select City</option>');
            //         }
            //     });



            //     }


            // });


            // $('#country-dd').on('change', function () {
            //     var idCountry = this.value;
            //     $("#state-dd").html('');
            //     $.ajax({
            //         url: "{{url('api/fetch-states')}}",
            //         type: "POST",
            //         data: {
            //             country_id: idCountry,
            //             _token: '{{csrf_token()}}'
            //         },
            //         dataType: 'json',
            //         success: function (result) {
            //             console.log(result);
            //             $('#state-dd').html('<option value="">Select State</option>');
            //             $.each(result.states, function (key, value) {
            //                 $("#state-dd").append('<option value="' + value
            //                     .id + '">' + value.name + '</option>');
            //             });
            //             $('#city-dd').html('<option value="">Select City</option>');
            //         }
            //     });
            // });






            // $('#state-dd').on('change', function () {
            //     var idState = this.value;
            //     $("#city-dd").html('');
            //     $.ajax({
            //         url: "{{url('api/fetch-cities')}}",
            //         type: "POST",
            //         data: {
            //             state_id: idState,
            //             _token: '{{csrf_token()}}'
            //         },
            //         dataType: 'json',
            //         success: function (res) {
                        
            //             console.log(res);
            //             $('#city-dd').html('<option value="">Select City</option>');
            //             $.each(res.cities, function (key, value) {
            //                 $("#city-dd").append('<option value="' + value
            //                     .id + '">' + value.name + '</option>');
            //             });
            //         }
            //     });
            // });




            
            // $('#city-dd').on('change', function () {
            //     var idHotel= this.value;
            //     $("#hotel-dd").html('');
            //     $.ajax({
            //         url: "{{url('api/fetch-hotels')}}",
            //         type: "POST",
            //         data: {
            //             city_id: idHotel,
            //             _token: '{{csrf_token()}}'
            //         },
            //         dataType: 'json',
            //         success: function (res) {
                        
            //             // console.log(res);
            //             $('#hotel-dd').html('<option value="">Select Hotel</option>');
            //             $.each(res.hotels, function (key, value) {
            //                 $("#hotel-dd").append('<option value="' + value
            //                     .id + '">' + value.name + '</option>');
            //             });
            //         }
            //     });
            // });







 
    </script>

  
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
  
});
</script>



</body>

</html>