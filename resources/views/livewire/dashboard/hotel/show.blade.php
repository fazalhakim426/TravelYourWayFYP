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


    <section  style='background-color:#D3D3D3' >
        <div class="container " >
            <div class="row">
                <div class="col-lg-12">
                    <div id="contact-form" class="contact-form">

                        <div id="contactform-error-msg"></div>
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        {{-- <label for="from">From</label> <input type="text" id="from" name="from"/> <label for="to">to</label> <input type="text" id="to" name="to"/> --}}


                        <form method="post" id="contactform" action="{{ route('book-room') }}">

                            <!-- CROSS Site Request Forgery Protection -->
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-3">
                                    <label>check in:</label>
                                    {{-- {{dd($check_out)}} --}}
                                    <input type="date" min="{{ $from }}" max='{{ $to }}'
                                        name="check_in" value='{{old('check_in')?old('check_in'):($check_in!=null?$check_in:$from) }}'  class="form-control" id="from"
                                        placeholder="abc@xyz.com" required>
                                    @error('check_in')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 col-left-padding">
                                    <label>Check Out:</label>
                                    <input type="date" min="{{ $from }}" max='{{ $to }}'
                                        name="check_out" class="form-control" value='{{old('check_out')?old('check_out'):($check_out!=null?$check_out:$to) }}' id="to"
                                        placeholder="XXXX-XXXXXX" required>
                                    @error('check_out')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-3 col-left-padding">
                                    <label>Country</label>
                                    <select id="country-dd" name="country_id" class="form-control">
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


                                <div class="form-group col-lg-3 col-left-padding">
                                    <label>State</label>
                                    <select id="state-dd" name="state_id" id="grid-state" name="country" id="country-dd"
                                        name="country_id" class="form-control">
                                        {{-- @foreach ($countries as $data)
                                    <option value="{{$data->id}}">
                                        {{$data->name}}
                                    </option>
                                    @endforeach --}}
                                    </select>
                                    @error('country')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 col-left-padding">
                                    <label>City</label>
                                    <select id="city-dd" name="city_id" class="form-control">

                                    </select>
                                    @error('state')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-3">
                                    {{-- <div class="form-outline form-white">
                                        <input type="text" id="formWhite" class="form-control" />
                                        <label class="form-label" for="formWhite">Example label</label>
                                      </div> --}}

                                    <label>Search Hotel:</label>
                                    <input type="text" name="hotel_name" value='{{ old('hotel_name') }}'
                                        class="form-control " id="hotel_name" placeholder="hotel name">
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
                {{-- <div class="col-lg-4">
                    <div class="contact-about footer-margin">
                        <div class="about-logo">
                            <img src="{{asset('/resources/images/logo.png')}}" alt="Image">
                        </div>
                        <h4>Travel With Us</h4>
                        <p>We Are offering best deail on all type of booking be with us </p>
                        <div class="contact-location">
                            <ul>
                                <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> Comsats Abbottabad</li>
                                <li><i class="flaticon-phone-call"></i> (92)-335-6789</li>                                        
                                <li><i class="flaticon-mail"></i> travelyourway@gmail.com</li>
                            </ul>
                        </div>
                        <div class="footer-social-links">
                            <ul>
                                <li class="social-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>    
                    </div>
                </div> --}}
            </div>
        </div>
    </section>









    <!-- Popular Packages -->
    <section class="popular-packages" style='background-color:#D3D3D3'>
        <div class="container">
            {{-- <div class="section-title">
                <h2>Book <span>Room</span></h2>
                <p> the safe and easy housing platform to find and book rooms, apartments, flats and residences..</p>
            </div> --}}
            <div class="row room-slider slider-button">
            
                @forelse ($rooms as $room)
                    <div class="col-lg-4">
                        <div class="package-item align-items-center" >
                            <img src="{{ asset('storage/images/' . $room->images[0]->image) }}" alt="Image">
                            <div class="package-content " style=" text-align: center;">

                              @if($room->hotel!=null)
                                    <h3>Hotel {{ $room->hotel->name }}</h3><br>
                                 @endif  
                                    <hr>
                                <h5>Charges <span>{{ $room->charges_per_day }}</span>
                                    PKR/ PER Day </h5>
                                    
                                    <h3>{{ $room->title }}</h3>
                                <p>{{ $room->hotel->description }}.</p>

                                <div class="package-info align-items-center">
                                    
                                    @if(isset($room->reserved))
                                    @if(isset($room->reserved))
                                            <Button class="btn-blue btn-red align-items-center bg-danger">Not
                                                Available</Button>

                                        @else
                                        <form method='post' action="{{route('book-now')}}">
                                            @csrf
                                            <input type="hidden" name='check_in' value="{{$check_in}}">
                                            <input type="hidden" name='check_out' value="{{$check_out}}" >
                                            <input type="hidden" name='room_id' value="{{$room->id}}" >
                                            <input type="hidden" name='charges_per_day' value="{{$room->charges_per_day}}" >
                                 
                                            <button type='submit'
                                                class="btn-blue btn-red align-items-center bg-info">BOOK
                                                NOW</a>  
                                            
                                            </form>
                                            @endif
                                            @endif

                            </div>

                        </div>
                    </div>
                </div>
                @empty
                       <div >
                           No Record Found!
                    </div> 
                    
               
            @endforelse
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
