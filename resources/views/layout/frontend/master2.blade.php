<head>
    <title>Mekapp : The Best Choices for The Best Looks</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="asset/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset/css/magnific-popup.css">

    <link rel="stylesheet" href="asset/css/aos.css">

    <link rel="stylesheet" href="asset/css/ionicons.min.css">

    <link rel="stylesheet" href="asset/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="asset/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="asset/css/flaticon.css">
    <link rel="stylesheet" href="asset/css/icomoon.css">
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Mekapp</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item @yield('afterlogin')"><a href="{{route('afterlogin')}}" class="nav-link">Home</a></li>
	        	<li class="nav-item @yield('about')"><a href="" class="nav-link">About</a></li>
	        	<li class="nav-item @yield('riwayat')"><a href="{{route('riwayat')}}" class="nav-link">Riwayat Booking</a></li>
            <li class="nav-item cta"><a href="{{route('logout')}}" class="nav-link">{{Session::get('uname')}}</a></li>
          </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap d-flex js-fullheight">
    	<div class="forth js-fullheight d-flex align-items-center">
    		<div class="text">
    			<h2>Selamat Datang di Mekapp</h2>
    			<h1 class="mb-5">The Best Choices <br>for The Best Looks</h1>
    		</div>
    	</div>
    	<div class="third js-fullheight">
    		<section class="home-slider owl-carousel js-fullheight">
		      <div class="slider-item js-fullheight" style="background-image: url(images/3.jpg);">
		      	<div class="overlay"></div>
		      </div>

		      <div class="slider-item js-fullheight" style="background-image: url(images/work2.jpg);">
		      	<div class="overlay"></div>
		      </div>

		      <div class="slider-item js-fullheight" style="background-image: url(images/4.jpg);">
		      	<div class="overlay"></div>
		      </div>

		      <div class="slider-item js-fullheight" style="background-image: url(images/work4.jpg);">
		      	<div class="overlay"></div>
		      </div>
		    </section>

    	</div>
    </section>
@yield('content2')
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mekapp</h2>
              <p>Mekapp merupakan sebuah laman website yang berfokus pada bidang kecantikan yang memudahkan pengguna dalam mencari MUA sesuai dengan kebutuhan.</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-5">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{route('home')}}" class="py-2 d-block">Home</a></li>
                <li><a href="{{route('portfolio')}}" class="py-2 d-block">Portfolio</a></li>
                <li><a href="{{route('contact')}}" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Jl. Kenangan Bersamamu</a></li>
                <li><a href="#" class="py-2 d-block">+6282132630268</a></li>
                <li><a href="#" class="py-2 d-block">info@Mekapp.com</a></li>
                <li><a href="#" class="py-2 d-block">Mekapp@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

 
    <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="asset/js/popper.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/jquery.easing.1.3.js"></script>
  <script src="asset/js/jquery.waypoints.min.js"></script>
  <script src="asset/js/jquery.stellar.min.js"></script>
  <script src="asset/js/owl.carousel.min.js"></script>
  <script src="asset/js/jquery.magnific-popup.min.js"></script>
  <script src="asset/js/aos.js"></script>
  <script src="asset/js/jquery.animateNumber.min.js"></script>
  <script src="asset/js/bootstrap-datepicker.js"></script>
  <script src="asset/js/jquery.timepicker.min.js"></script>
  <script src="asset/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="asset/js/google-map.js"></script>
  <script src="asset/js/main.js"></script>