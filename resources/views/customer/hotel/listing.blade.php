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



                
        <!-- Card Sextion Starts Here -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

            <!-- card -->

            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                <div class="px-6 py-2 border-b border-light-grey">
                    <div class="font-bold text-xl">Booked Room</div>
                </div>
                <div class="table-responsive">
                    <table class="table text-grey-darkest">
                        <thead class="bg-grey-dark text-white text-normal">
                            <tr>
                                <th class="border w-1/4 px-4 py-2">Hotel</th>
                                <th class="border w-1/4 px-4 py-2">Addrees</th>
                                <th class="border w-1/6 px-4 py-2">Room</th>
                                <th class="border w-1/8 px-4 py-2">Members</th>
                                <th class="border w-1/5 px-4 py-2">Duration</th>
                                <th class="border w-1/5 px-4 py-2">Payment</th>
                                <th class="border w-1/7 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($bookings as $booking)
                                @if ($booking->room != null)
                                    <tr>

                                        <td class="border px-4 py-2">
                                            Name : {{ $booking->hotel->name }}<br>
                                            Address: {{ $booking->hotel->address }}
                                        </td>

                                        <td class="border px-4 py-2 center">
                                            Country: {{ $booking->hotel->country->name }}<br>
                                            State: {{ $booking->hotel->state->name }} <br>
                                            City :{{ $booking->hotel->city->name }}<br>
                                            Address: {{ $booking->hotel->address }}
                                        </td>
                                        <td class="border px-4 py-2 center">

                                            {{ $booking->room->title }}<br>
                                            {{ $booking->room->charges_per_day }} pkr/day

                                        </td>
                                        <td class="border px-4 py-2 center">

                                            {{ $booking->room->capacity }}
                                        </td>
                                        <td class="border">
                                            From: {{ $booking->from }}<br>
                                            To: {{ $booking->to }} <br>

                                        </td>
                                        <td class="border px-4 py-2">
                                            @if ($booking->payment == null)
                                                Pending
                                            @else
                                                Paid
                                            @endif
                                        </td>
                                        <td class="border px-4 py-2">
                                            <form method="POST" action="{{ route('booking.destroy') }}">
                                                @method('DELETE')

                                                <input type="hidden" name='id' value='{{ $booking->id }}'>
                                                @csrf
                                                <button type="submit" onclick="return confirm('Are you sure?')"
                                                    class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                    <i class="fas fa-trash"></i>
                                            </form>
                                            </a>
                                        </td>


                                    </tr>




                                @endif
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/Grid Form-->












</body>

</html>