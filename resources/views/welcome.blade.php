<x-app-layout>  
<!-- This example requires Tailwind CSS v2.0+ -->

    <!-- Banner start -->
    <section class="swiper-banner">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url({{asset('/resources/images/slider/slider7.jpg')}})">
                        <div class="swiper-content" data-animation="animated fadeInDown">
                            <h2>Book a ticket , visa and many more</h2>
                            <h1>we are here to help you 24/7</h1>
                            <a href="customer/tickets" class="btn-blue btn-red">Book Air Ticket Now</a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url({{asset('/resources/images/slider/slider8.jpg')}})">
                        <div class="swiper-content" data-animation="animated fadeInRight">
                            <h2>Enjoy Tour Across The Word</h2>
                            <h1>We offer you better deals</h1>
                            <a href="#" class="btn-blue btn-red">Book Visit Visa Now</a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url({{asset('/resources/images/slider/slider10.jpg')}})">
                        <div class="swiper-content" data-animation="animated fadeInUp">
                            <h2>Book Hotel Acroos The Word</h2>
                            <h1>We Are Offering best Deails </h1>
                            <a href="" class="btn-blue btn-red">Book Hotel Now </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="overlay"></div>
        </div>
    </section>
    <!-- Banner Ends -->

{{-- 
    <!-- Search Box -->
    <div class="search-box clearfix">
        <div class="container">
            <div class="search-outer">
                <div class="search-content">
                    <form>
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <div class="search-title d-flex align-items-center justify-content-between">
                                    <p>Find Your <span>Holiday</span></p>
                                    <i class="flaticon-sun-umbrella "></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="table_item">
                                    <div class="form-group">
                                        <select id="custom-select-1" class="selectpicker form-control">
                                          <option value="0">Destination</option>
                                          <option value="1">pakistan</option>
                                          <option value="2">Dubai</option>
                                          <option value="3">Uk</option>
                                        
                                        </select>

                                        <i class="flaticon-maps-and-flags"></i>
                                    </div>
                                    <div class="form-group  form-icon">
                                        <select name="custom-select-2" class="selectpicker form-control" tabindex="1">
                                            <option value="0">Country</option>
                                            <option value="1">pakistan</option>
                                            <option value="2">Dubai</option>
                                            <option value="3">Uk</option>
                                         
                                        </select>
                                        <i class="flaticon-box"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="table_item">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" value="Check-In" />
                                            <i class="flaticon-calendar"></i>
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group form-icon">
                                        <div class='input-group date' id='datetimepicker2'>
                                            <input type='text' class="form-control" value="Check-Out" />
                                            <i class="flaticon-calendar"></i>
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="table_item table-item-slider">
                                    <div class="range-slider">
                                        <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                            <span class="min-value">0 $</span> 
                                            <span class="max-value">2000 $</span>
                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="search">
                                        <a href="#" class="btn-blue btn-red">SEARCH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <!-- Search Box Ends --> --}}

    <!-- Popular Packages --> 
    <section class="popular-packages">
        <div class="container">
            <div class="section-title text-center">
                <br>
                <h2>Our Services</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>we are offering air ticket, visas (visit visa, umrah, hajj and immitgration visa ) & hotel bboking in a very affective cost and time we are glade to see you here </p>
            </div>
            <div class="row package-slider slider-button">
                <div class="col-lg-4">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="{{asset('resources/images/alarab.jpg')}}" alt="Image" style=" width: 200px; height: 300px;object-fit:cover;">
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <p><span>$659</span> / Average  </p>
                            </div>
                        </div>
                        <div class="package-content">
                            <h3>Hotel Booking </h3>
                            <p class="package-days"><i class="flaticon-maps-and-flags"></i>Dubai</p>
                            <p>takes hotel design to a new level of modern luxury.</p>
                            <div class="package-info">
                                <a href="/customer/hotels" class="btn-blue btn-red">BOOK NOW</a>
                            </div>
                        </div>
                    </div
                    >
                </div>
                <div class="col-lg-4">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="{{asset('resources/images/slider/slider10.jpg')}}" alt="Image" style=" width: 200px; height: 300px;object-fit:cover;">
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <p><span>$659</span> / Average </p>
                            </div>
                        </div>
                        <div class="package-content">
                            <h3>Air Ticket</h3>
                            <p class="package-days"><i class="flaticon-time"></i></p>
                            <p> Search One and Done! Book the Best Flights for Your Next Destination. we will find best flight for you </p>
                            <div class="package-info">
                                <a href="/customer/tickets" class="btn-blue btn-red">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="{{asset('resources/images/package3.jpg')}}" alt="Image" style=" width: 200px; height: 300px;object-fit:cover;">
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <p><span>$659</span> / Average </p>
                            </div>
                        </div>
                        <div class="package-content">
                            <h3>Visit Visa</h3>
                            <p class="package-days"><i class="flaticon-maps-and-flags"></i> Dubai</p>
                            <p>Visitor visas are nonimmigrant visas for persons who want to enter the Dubai temporarily</p>
                            <div class="package-info">
                                <a href="/customer/visas" class="btn-blue btn-red">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="{{asset('resources/images/hajj.jpg')}}" alt="Image" style=" width: 200px; height: 300px;object-fit:cover;">
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <p><span>$659</span> / Average  </p>
                            </div>
                        </div>
                        <div class="package-content">
                            <h3>Hajj Visa</h3>
                            <p class="package-days"><i class="flaticon-maps-and-flags"></i>saudi arabia</p>
                            <p>Hajj, annual pilgrimage to Mecca that is mandatory for all Muslims to make at least once in their lives</p>
                            <div class="package-info">
                                <a href="/customer/visas_apply/Hajj" class="btn-blue btn-red">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="{{asset('resources/images/umrah.jpg')}}" alt="Image" style=" width: 200px; height: 300px;object-fit:cover;">
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <p><span>$659</span> / Average </p>
                            </div>
                        </div>
                        <div class="package-content">
                            <h3>Umrah Visa</h3>
                            <p class="package-days"><i class="flaticon-maps-and-flags"></i>saudi arabia</p>
                            <p>SAUDIA guests holding Umrah visas and planning to travel to Saudi Arabia to perform Umrah, can book</p>
                            <div class="package-info">
                                <a href="/customer/visas_apply/Ummrah" class="btn-blue btn-red">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            
            </div>
        </div>
    </section>
    <!-- Popular Packages Ends -->

    <!-- Deals -->
    <section class="deals">
        <div class="container">
            <div class="section-title section-title-white text-center">
                <h2>Rooms</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>.Our research into hotel guests' 
                    online behaviour shows
                     that alarmingly often they have 
                     problems deciding which room to choose.</p>
            </div>
            <div class="deals-outer">
                <div class="row deals-slider slider-button">
                    @foreach ($rooms as $room)
                        {{-- {{dd($room)}} --}}
                  
                    <div class="col-md-3">
                        <div class="deals-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="{{asset('storage/images/'.$room->images[0]->image)}}" alt="Image">
                                    <span class="deal-price">{{$room->charges_per_day}}</span>
                                </div>
                                <div class="deal-content">
                                    <div class="deal-rating">
                                        {{-- <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span> --}}
                                        {{$room->title}} Seater

                                    </div>
                                    <h3>{{$room->hotel->name}}</h3>
                                    <p>{{$room->hotel->description}}</p>
                                    {{-- <a href="#" class="btn-blue btn-red">More Details</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- Deals Ends -->
{{--  


    <!-- Top Destinations -->
    <section class="top-destinations">
        <div class="container">
            <div class="section-title text-center">
                <h2>Top Destinations</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>the top distination for tourist to enjoy the moment with  partners</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{asset('resources/images/deal1.jpg')}}" alt="Image">
                        <div class="overlay">
                            <h2><a href="#">Bahamas</a></h2>
                            <p>Plan Your Tour to Bahamas With Us.</p>
                        </div>
                    </div>
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{asset('resources/images/deal2.jpg')}}" alt="Image">
                        <div class="overlay">
                            <h2><a href="#">Italy</a></h2>
                            <p>Plan Your Tour to Bahamas With Us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="top-destination-item destination-margin">
                        <img class="img-responsive" src="{{asset('resources/images/deal5.jpg')}}" alt="Image">
                        <div class="overlay overlay-full">
                            <h2><a href="#">Egypt</a></h2>
                            <p>Plan Your Tour to Bahamas With Us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{asset('resources/images/deal3.jpg')}}" alt="Image">
                        <div class="overlay">
                            <h2><a href="#">Nepal</a></h2>
                            <p>Plan Your Tour to Bahamas With Us.</p>
                        </div>
                    </div>
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{asset('resources/images/deal4.jpg')}}" alt="Image">
                        <div class="overlay">
                            <h2><a href="#">Thailand</a></h2>
                            <p>Plan Your Tour to Bahamas With Us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Destination Ends --> --}}

    <!-- Trip Ad -->
    {{-- <section class="trip-ad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    
                    <div class="trip-ad-content">
                        <div class="ad-title">
                            <h2>Explore The <span>Word Trip</span></h2>
                        </div>
                        <p>Apply For VIsit Visa And Explore the word right now </p>
                        <p>we are offering greate deails for the people who like to travel from one place to other</p>
                        <div class="trip-ad-btn">
                            <a href="customer/visas_apply/Visit" class="btn-blue btn-red">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ad-price">
                        <div class="ad-price-inner">
                            <span>Starting at <span class="rate">$3000</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Trip Ad Ends -->

    <!-- Deals On Sale -->

    <!-- Deals On Sale Ends -->

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="section-title text-center">
            <h2>Best Rated Travel Agent</h2>
            <div class="section-icon section-icon-white">
                <i class="flaticon-diamond"></i>
            </div>       
        </div>
        <!-- Paradise Slider -->
        <div id="testimonial_094" class="carousel slide testimonial_094_indicators thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="3000" data-duration="1000">


            <!-- Indicators -->
            <ol class="carousel-indicators">
                {{-- {{dd($agents[)}} --}}
                @foreach($agents as $index=>$agent)
{{-- {{dd($agent)}} --}}
                  @if($index==0)
                <li data-target="#testimonial_094" data-slide-to="{{$index}}" class="active">
                 
                   @else
                   <li data-target="#testimonial_094" data-slide-to="{{$index}}">
                 
                   @endif
                    <img src="{{ ('profile_images/'.$agent->profile_image.'')}}" alt="testimonial_094_01"> <!-- 1st Image -->
                </li>
                @endforeach
              
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
              
                @foreach($agents as $index=>$agent)

                @if($index==0)
                <div class="carousel-item active">
                    @else
                    <div class="carousel-item">
                  
                    @endif
                    <!-- Text Layer -->
                    <div class="testimonial_094_slide">
                        <p>
                            The people who work in travel agencies are called 
                            travel agents. These travel agents work for sending 
                            people authentically from one country to the other.
                        </p>
                        <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <h5><a href="#">{{$agent->name}}</a></h5>
                    </div> <!-- /Text Layer -->
                </div> <!-- /item -->
                @endforeach
                <!-- End of First Slide -->


             

            </div> <!-- End of Wrapper For Slides -->
        </div> <!-- End Paradise Slider -->
    </section>
    <!-- Testimonials -->

    <!-- Countdown -->
    {{-- <section class="countdown-section">
        <div class="container">
            <div class="countdown-title">
                <h2>Special Tour in May, Discover <span>Thailand</span> for 50 Customers with <span>Discount 30%</span></h2>
                <p>It’s limited seating! Hurry up</p>
            </div>
            <div class="countdown countdown-container">
                <p id="demo"></p>
            </div><!-- /.countdown-wrapper -->
        </div>
        <div class="testimonial-overlay"></div>
    </section> --}}
    <!-- Countdown Ends -->



</x-app-layout>