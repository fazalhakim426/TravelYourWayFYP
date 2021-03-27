<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Travel Your Way</title>


        
<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: .8em;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
}
</style>




        @section('styles')
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
@endsection

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Bootstrap -->
  <!-- <link href="{{URL::asset('/template/plugins/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet"> -->
  <!-- Font Awesome -->
  <link href="{{URL::asset('/template/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="{{URL::asset('/template/plugins/slick-carousel/slick/slick.css')}}" rel="stylesheet">
  <link href="{{URL::asset('/template/plugins/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="{{URL::asset('/template/plugins/fancybox/jquery.fancybox.pack.css')}}" rel="stylesheet">
  <link href="{{URL::asset('/template/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{URL::asset('/template/css/style.css')}}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{URL::asset('/template/plugins/img/favicon.png')}}" rel="shortcut icon">




        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 <!-- Fonts -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"> -->
          

            <!-- <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                 
                </div>
            </div> -->
       




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Travel Your Way</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="text-primary nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/immigrationvisa1">Immigration Visa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Apply For Hotel Reservation</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Apply For Hajj </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Apply For Ummrah </a>
      </li>
   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Submenu action</a></li>
              <li><a class="dropdown-item" href="#">Another submenu action</a></li>


              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                  <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                  <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                </ul>
              </li>



            </ul>
          </li>
        </ul>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      @if(Route::has('login'))
      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" >
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-success text-success-700 underline">Dashboard</a>
                    @else
                    
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">
      Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
      @endif 
    </form>
  </div>
</nav>

        <!--===============================
=            Hero Area            =
================================-->



<!-- </div> -->







<section class="hero-area bg-1 text-center overly ">
	<!-- Container Start -->

  




    
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Travel Your Way </h1>
					<p>Best choice  <br> everyday in local communities around the world</p>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">


          

							<li class="list-inline-item">
								<a href=""><i class="fa fa-bed"></i> Hotel</a></li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-grav"></i> Visit</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-car"></i>Immigraion Visa</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-cutlery"></i> Hajj</a>
							</li>
							<li class="list-inline-item">
								<a href="getstart"><i class="fa fa-coffee"></i> Ummrah</a>
							</li>
						</ul>
					</div>
					
				</div>
				<!-- Advance Search -->
			
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-light" id="getstart">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Our Services</h2>
					<p>Select the purpose of Travel.</p>
				</div>
			</div>
		</div>





		<div class="card-deck">
    
	<!-- immigration -->
			<!-- offer 01 -->
      
      
			<div class="col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6 col-6">
      <a href="/immigrationvisa1">
   	<div class="card">
		         <div class="card-body">
               <img class="card-img" src="{{URL::asset('template/images/direction/immigration.png')}}" alt="Card image cap">
		          <h6 class="card-title text-center text-dark">Apply For Immigraion</h6>
              </div>
     </div></a>
	</div>   
	<!-- visite -->
	<!-- offer 02 -->
  <div class="col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6 col-6">
  
  <a href="/visit">
  <div class="card">
          <div class="card-body">
            <img class="card-img" src="{{URL::asset('template/images/direction/visit.png')}}" alt="Card image cap">
           <h6 class="card-title text-center ">Apply For Visit</h6>
        
          </div>
  </div>  </a>
</div>



	<!-- Hotel -->
	<!-- offer 03 -->
	<div class="col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6 col-6">
  
  <a href="/hotel">
   	<div class="card">
		         <div class="card-body">
               <img class="card-img" src="{{URL::asset('template/images/direction/hotel.png')}}" alt="Card image cap">
		          <h6 class="card-title mb-2 bg-gradient-light text-dark">Apply For Hotel</h6>
         
		  		   </div>
     </div>    </a>
	</div>

	<!-- hajj -->
	<!-- offer 04 -->
	<div class="col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6 col-6">
  
  <a href="/hajj">
     	<div class="card">
		         <div class="card-body">
               <img class="card-img" src="{{URL::asset('template/images/direction/hajj.png')}}" alt="Card image cap">
		          <h6 class="card-title text-center ">Apply for Hajj </h6>
            
		  		   </div>
     </div> </a>
	</div>

	<!-- ummrah -->
	<!-- offer 05 -->

	<div class="col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6 col-6">
  
  <a href="/ummrah">
   	<div class="card">
		         <div class="card-body">
               <img class="card-img" src="{{URL::asset('template/images/direction/hajj.png')}}" alt="Card image cap">
		          <h6 class="card-title text-center text-dark bold">Ummrah Apply</h6>
             
		  		   </div>
     </div></a>
	</div>



	<!-- ticket -->
	<!-- offer 06 -->
	<div class="col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6 col-6">
    <a href="/ticket">
   	<div class="card">
		         <div class="card-body">
               <img class="card-img" src="{{URL::asset('template/images/direction/tickets.png')}}" alt="Card image cap">
		          <h6 class="card-title text-center ">Apply For Ticket</h6>
		  		   </div>
 
     </div>   </a>
	</div>






			</div>
		</div>
	</div>
</section>




<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm" id="aboutus">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="{{URL::asset('template/images/logo-footer.png')}}" alt="">
          <!-- description -->
          <p class="alt-color">We are relaible service provider.Trust we do not wast customer time.We have high response time.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Quick Pages</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Get Start</a></li>
            <li><a href="#">Contact Us</a></li>
         
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Email List</h4>
          <ul>
		  <li><a href="#">Hakimfazal426@gmail.com</a></li>
            <li><a href="#">Niaz426@gmail.com</a></li>
            <li><a href="#">Tooba426@gmail.com</a></li>
          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <a href="">
            <!-- Icon -->
            <img src="{{URL::asset('template/images/footer/phone-icon.png')}}" alt="mobile-icon">
          </a>
          <p>Get  Mobile App and Save more</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Follow us on social media</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>


  @section('scripts')
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- JAVASCRIPTS -->
  <script>
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});

</script>

  <script src="{{URL::asset('/template/plugins/tether/js/tether.min.js')}}"></script>
  <script src="{{URL::asset('/template/plugins/raty/jquery.raty-fa.js')}}"></script>
  <script src="{{URL::asset('/template/plugins/bootstrap/dist/js/popper.min.js')}}"></script>
  <script src="{{URL::asset('/template/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('/template/plugins/slick-carousel/slick/slick.min.js')}}"></script>
  <script src="{{URL::asset('/template/plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{URL::asset('/template/plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
  <script src="{{URL::asset('/template/plugins/smoothscroll/SmoothScroll.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="{{URL::asset('/template/js/scripts.js')}}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"></script>
    <script src="/assets/admin/js/sessions/myjavascript.js"></script>
   
@stop

    </body>
</html>
