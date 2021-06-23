<div>

    <section class="swiper-banner">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"
                        style="background-image:url({{ asset('resources/images/hotel/slider1.jpg') }})">
                        <div class="swiper-content" data-animation="animated fadeInDown">
                            <h2>Welcome To Yatra Hotel</h2>
                            <h1>Dream your Wonderful Hotel</h1>
                            {{-- <a href="tour-detail.html" class="btn-red btn-red">Explore Room</a> --}}
                        </div>
                    </div>
                    <div class="swiper-slide"
                        style="background-image:url( {{ asset('resources/images/hotel/slider2.jpg') }})">
                        <div class="swiper-content" data-animation="animated fadeInRight">
                            <h2>exciting schemes just a click away</h2>
                            <h1>Quality Holidays With Us</h1>
                            <a href="tour-detail.html" class="btn-red btn-red">View More</a>
                        </div>
                    </div>
                    <div class="swiper-slide"
                        style="background-image:url({{ asset('resources/images/hotel/slider3.jpg') }})">
                        <div class="swiper-content" data-animation="animated fadeInUp">
                            <h2>Cost friendly packages on your way</h2>
                            <h1>Everything is here right For u</h1>
                            <a href="tour-detail.html" class="btn-red btn-red">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="overlay"></div>
        </div>


        <!-- Search Box Ends -->
    </section>
    <!-- Banner Ends -->


    {{-- <section class="breadcrumb-outer text-center">
       
    </section> --}}
    <!-- BreadCrumb Ends -->
 

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="contact-form" class="contact-form">

                        <div id="contactform-error-msg"></div>
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form method="post" id="contactform" action="{{ route('contact.store') }}">

                            <!-- CROSS Site Request Forgery Protection -->
                            @csrf
                            <div class="row">

                                <div class="form-group col-lg-2">
                                    <label>check in:</label>
                                    <input type="date" name="check_in" value='{{ old('email') }}' class="form-control"
                                        id="email" placeholder="abc@xyz.com" required>
                                    @error('check_in')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-2 col-left-padding">
                                    <label>Check Out:</label>
                                    <input type="date" name="check_out" class="form-control" value='{{ old('phone') }}'
                                        id="phnumber" placeholder="XXXX-XXXXXX" required>
                                    @error('check_out')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-2 col-left-padding">
                                    <label>Country</label>
                                    <select  wire:click="countrySelected" name="country" id="country-dd" name="country_id" class="form-control">
                                        @foreach ($countries as $data)
                                            <option value="{{ $data->id }}">
                                                {{ $data->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="form-group col-lg-2 col-left-padding">
                                    <label>City</label>
                                    <select id="state-dd" name="state_id" id="grid-state" name="country" id="country-dd"
                                        name="country_id" class="form-control">
                                        @foreach ($countries as $data)
                                    <option value="{{$data->id}}">
                                        {{$data->name}}
                                    </option>
                                    @endforeach
                                    </select>
                                    @error('country')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-2 col-left-padding">
                                    <label>State</label>
                                    <select id="city-dd" name="city_id" class="form-control">

                                    </select>
                                    @error('state')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-2">
                                    {{-- <div class="form-outline form-white">
                                        <input type="text" id="formWhite" class="form-control" />
                                        <label class="form-label" for="formWhite">Example label</label>
                                      </div> --}}

                                    <label>Search Hotel:</label>
                                    <input type="text" name="hotel_name" value='{{ old('hotel_name') }}'
                                        class="form-control " id="email" placeholder="hotel name" required>
                                    @error('search')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <div class="comment-btn">
                                        <input type="submit" class="btn-blue btn-red" id="submit"
                                            value="CHECK AVAILABILITY">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </section>









    <!-- Popular Packages -->
    <section class="popular-packages">
        <div class="container">
            <div class="section-title">
                <h2>Book <span>Room</span></h2>
                <p> the safe and easy housing platform to find and book rooms, apartments, flats and residences..</p>
            </div>
            <div class="row room-slider slider-button">
                @foreach ($rooms as $room)
                    <div class="col-lg-4">
                        <div class="package-item">
                            <img src="{{ asset('storage/images/' . $room->images[0]->image) }}" alt="Image">
                            <div class="package-content">


                                <h5>Starting: <span>{{ $room->charges_per_day }}</span>
                                    PKR/ PER Day </h5>
                                <h3><a href="hotel-detail.html">{{ $room->charges_per_day }}</a></h3>
                                <p>{{ $room->hotel->description }}.</p>

                                <div class="package-info align-items-center">
                                    <a href="/customer/hotels" class="btn-blue btn-red align-items-center bg-info">BOOK
                                        NOW</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4">
                <div class="package-item">
                    <img src="{{asset('resources/images/hotel/room-2.jpg')}}" alt="Image">
                    <div class="package-content">
                        <h5>Starting: <span>$459</span> / day </h5>
                        <h3><a href="hotel-detail.html">Standard Room</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p> 
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="package-item">
                    <img src="{{asset('resources/images/hotel/room-3.jpg')}}" alt="Image">
                    <div class="package-content">
                        <h5>Starting: <span>$259</span> / day </h5>
                        <h3><a href="hotel-detail.html">Double Room</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div> --}}

                {{-- <div class="col-lg-4">
                <div class="package-item">
                    <img src="{{asset('resources/images/hotel/room-4.jpg')}}" alt="Image">
                    <div class="package-content">
                        <h5>Starting: <span>$159</span> / day </h5>
                        <h3><a href="hotel-detail.html">Single Room</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>
    </section>
</div>
