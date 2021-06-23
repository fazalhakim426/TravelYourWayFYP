<x-app-layout>  

<!-- This example requires Tailwind CSS v2.0+ -->
<section class="swiper-banner">
    <div class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url({{asset('resources/images/hotel/slider1.jpg')}})">
                    <div class="swiper-content" data-animation="animated fadeInDown">
                        <h2>Welcome To Yatra Hotel</h2>
                        <h1>Dream your Wonderful Hotel</h1>
                        <a href="tour-detail.html" class="btn-red btn-red">Explore Room</a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url( {{asset('resources/images/hotel/slider2.jpg')}})">
                    <div class="swiper-content" data-animation="animated fadeInRight">
                        <h2>exciting schemes just a click away</h2>
                        <h1>Quality Holidays With Us</h1>
                        <a href="tour-detail.html" class="btn-red btn-red">View More</a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url({{asset('resources/images/hotel/slider3.jpg')}})">
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

    <!-- Search Box -->
    <div class="search-box clearfix">
        <div class="search-outer">
            <h3 class="text-center">Quick Booking</h3>
            <div class="search-content table_item">
                <form>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" value="Check In" />
                            <i class="flaticon-calendar"></i>
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-group form-icon">
                        <div class='input-group date' id='datetimepicker2'>
                            <input type='text' class="form-control" value="Check Out" />
                            <i class="flaticon-calendar"></i>
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-group  form-icon">
                        <select name="country" class="selectpicker form-control" tabindex="1">
                            <option value="0">Country</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                        <i class="flaticon-box"></i>
                    </div>
                    
                    <div class="form-group  form-icon">
                        <select name="guest" class="selectpicker form-control" tabindex="1">
                            <option value="0">Guest</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                        <i class="flaticon-box"></i>
                    </div>

                    <div class="form-group  form-icon">
                        <select name="room" class="selectpicker form-control" tabindex="1">
                            <option value="0">Room</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                        <i class="flaticon-box"></i>
                    </div>

                    <div class="search">
                        <a href="#" class="btn-red btn-red">CHECK AVAILABILITY</a>
                    </div>        
                </form> 
            </div>
        </div>
    </div>
    <!-- Search Box Ends -->
</section>
<!-- Banner Ends -->


<!-- Popular Packages --> 
<section class="popular-packages">
    <div class="container">
        <div class="section-title">
            <h2>Popular <span>Rooms</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt .</p>
        </div>
        <div class="row room-slider slider-button">
            <div class="col-lg-4">
                <div class="package-item">
                    <img src="{{asset('resources/images/hotel/room-1.jpg')}}" alt="Image">
                    <div class="package-content">
                        <h5>Starting: <span>$659</span> / PER </h5>
                        <h3><a href="hotel-detail.html">Luxury Room</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
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
            </div>

            <div class="col-lg-4">
                <div class="package-item">
                    <img src="{{asset('resources/images/hotel/room-4.jpg')}}" alt="Image">
                    <div class="package-content">
                        <h5>Starting: <span>$159</span> / day </h5>
                        <h3><a href="hotel-detail.html">Single Room</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Packages Ends -->

<!-- Popular Packages --> 
<section class="services pt-5 pb-5">
  

        </div>
        <div class="sml-services">
            <div class="row">
                <div class="col-lg-4 col-md-12 mar-bottom-30">
                    <div class="package-item">
                        <img src="{{asset('resources/images/alarab.jpg')}}" alt="Image" height="320">
                        <div class="package-position">
                            <h3 class="mar-0">Hotel</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mar-bottom-30">
                    <div class="package-item">
                        <img src="{{asset('resources/images/hotel/services3.jpg')}}" alt="Image">
                        <div class="package-position">
                            <h3 class="mar-0">Restaurant</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mar-bottom-30">
                    <div class="package-item">
                        <img src="{{asset('resources/images/hotel/services5.jpg')}}" alt="Image">
                        <div class="package-position">
                            <h3 class="mar-0">Activities</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Packages Ends -->


<!-- Trip Ad -->
<section class="cta">
    <div class="container">
        <div class="cta-content text-center">
            <div class="cta-title">
                <h2 class="white text-uppercase">Relax And Enjoy Your Holiday @Thailand Trip</h2>
                <h3 class="white">Luxury Hotel & Best Resort </h3>
            </div>
            <div class="cta-btn">
                <a href="hotel-detail.html" class="btn-red btn-red">BOOK NOW</a>
            </div>
        </div>
    </div>
</section>
<!-- Trip Ad Ends -->

<!-- Deals On Sale -->

<!-- Testimonials Ends -->

<!-- Countdown -->
<section class="countdown-section p-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="countdown-title">
                    <h3 class="white">Hot offer</h3>
                    <h2 class="white">GET <span>40% DISCOUNT</span> ONLY IN SUMMER VOCATIONS</h2>
                    <a href="#" class="btn-red mar-top-15">Book Now</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="countdown countdown-container">
                    <h3 class="white">Limited offer</h3>
                    <p id="demo"></p>
                </div><!-- /.countdown-wrapper -->
            </div>
        </div>
    </div>
</section>
<!-- Countdown Ends -->

<!-- Blog -->
<section class="blog pb-5">
    <div class="container">
        <div class="section-title">
            <h2>Latest <span>News</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt .</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 mar-bottom-30">
                <div class="blog-item">
                    <div class="blog-image">
                        <img src="{{asset('resources/images/blog1.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-content">
                        <h3><a href="blog-detail.html">Electric Feel And Of Other Things</a></h3>
                        <div class="blog-date"><p><i class="fa fa-clock-o"></i> 12 May 2019</p></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mar-bottom-30">
                <div class="blog-item">
                    <div class="blog-image">
                        <img src="{{asset('resources/images/blog2.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-content">
                        <h3><a href="blog-detail.html">Electric Feel And Of Other Things</a></h3>
                        <div class="blog-date"><p><i class="fa fa-clock-o"></i> 12 May 2019</p></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mar-bottom-30">
                <div class="blog-item">
                    <div class="blog-image">
                        <img src="{{asset('resources/images/blog3.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-content">
                        <h3><a href="blog-detail.html">Electric Feel And Of Other Things</a></h3>
                        <div class="blog-date"><p><i class="fa fa-clock-o"></i> 12 May 2019</p></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Ends -->


@push('script')

@endpush
{{-- <script src="{{URL::asset('admin-master/main.js')}}"></script> --}}
</x-app-layout>