<x-app-layout>  

    
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>About Us</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- About Us -->
    <section class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Why Choose Us?</h2>
                        <div class="section-icon section-icon-white">
                            <i class="flaticon-diamond"></i>
                        </div>       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="about-item">
                        <div class="about-icon">
                            <i class="fa fa-superpowers" aria-hidden="true"></i>
                        </div>
                        <div class="about-content">
                            <h3>Perfect Planning</h3>
                            <p>Plan your perfect vacation with our travel agency. Choose among hundreds of all-inclusive offers!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-item">
                        <div class="about-icon">
                            <i class="fa fa-paw" aria-hidden="true"></i>
                        </div>
                        <div class="about-content">
                            <h3>Secure Venues</h3>
                            <p>We work hard to secure the best hotel rates in the most popular destinations. Search and book adventure tours now!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-item">
                        <div class="about-icon">
                            <i class="fa fa-fire" aria-hidden="true"></i>
                        </div>
                        <div class="about-content">
                            <h3>Beautiful Memories</h3>
                            <p>Book international vacation packages with us and create memories that will last a lifetime! Create History !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Ends -->

    <!-- Our Team -->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Our Team</h2>
                        <div class="section-icon section-icon-white">
                            <i class="flaticon-diamond"></i>
                        </div>       
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($super_agents as $super_agent)
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-image">
                            <img src="{{asset('resources/images/testemonial1.jpg')}}" alt="Image">
                        </div>
                        <div class="team-content">
                            <h3>{{$super_agent->user->name}} </h3>
                            <p>Super Agent</p>
                        </div>
                    </div>
                </div>
                @endforeach
               
                </div>
               
            </div>
        </div>
    </section>
    <!-- Our Team Ends -->

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

                <!-- Second Slide -->
                <div class="carousel-item">
                    <!-- Text Layer -->
                    <div class="testimonial_094_slide">
                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                        <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <h5><a href="#">Susan Doe, Houston</a></h5>
                    </div> <!-- /Text Layer -->
                </div> <!-- /item -->
                <!-- End of Second Slide -->

                <!-- Third Slide -->
                <div class="carousel-item">
                    <!-- Text Layer -->
                    <div class="testimonial_094_slide">
                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                        <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <h5><a href="#">Susan Doe, Houston</a></h5>
                    </div> <!-- /Text Layer -->
                </div> <!-- /item -->
                <!-- End of Third Slide -->

                <!-- Fourth Slide -->
                <div class="carousel-item">
                    <!-- Text Layer -->
                    <div class="testimonial_094_slide">
                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                        <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <h5><a href="#">Susan Doe, Houston</a></h5>
                    </div> <!-- /Text Layer -->
                </div> <!-- /item -->
                <!-- End of Fourth Slide -->

                <!-- Fifth Slide -->
                <div class="carousel-item">
                    <!-- Text Layer -->
                    <div class="testimonial_094_slide">
                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                        <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <h5><a href="#">Susan Doe, Houston</a></h5>
                    </div> <!-- /Text Layer -->
                </div> <!-- /item -->
                <!-- End of Fifth Slide -->
            </div> <!-- End of Wrapper For Slides -->
        </div> <!-- End Paradise Slider -->
    </section>
    <!-- Testimonials -->


</x-app-layout>