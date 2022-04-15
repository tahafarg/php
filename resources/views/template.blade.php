<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>El Maw2af</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/logcss.css" rel="stylesheet">
  <link href="assets/css/template.css" rel="stylesheet">
  <link href="assets/css/templatemo2-style.css" rel="stylesheet">
  <link href="assets/css/style1.css" rel="stylesheet">
  <link href="assets/css/tooplate-style.css" rel="stylesheet">
  <link href="assets/css/addD.css" rel="stylesheet">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
 {{-- ////////////////////////// --}}
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="Final.css">
  <link rel="stylesheet" href="css/superfish.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto" >الموقف</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto active" href="/homes">Home</a></li>
          <li><a class="nav-link scrollto" href="/about">About us</a></li>
          <li><a class="nav-link scrollto" href="/ex">booking</a></li>
          <li><a class="nav-link   scrollto" href="/contact">contact us</a></li>
          
          @guest
          @if (Route::has('login'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
      @endif

      @if (Route::has('register'))
          <li class="nav-item">
             <li class="dropdown"><a href="#"><span>sign up</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('driver.index')}}">as driver</a></li> 
             <li><a href="{{route('register')}}">as passenger</a></li>  
              <!-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>  -->
          </li>
      @endif
      @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu  dropdown-menu-end" aria-labelledby="navbarDropdown">
            @if(Auth::user()->Pass)
            <a class="dropdown-item" style="color: rgb(17, 58, 119)" href="/DRIprof">
             
              {{ __('Profile') }}
             
             </a> 
             @else
             <a class="dropdown-item" style="color: rgb(17, 58, 119)" href="/prof">
             
              {{ __('Profile') }}
            </a> 
             @endif
              <a class="dropdown-item" style="color: rgb(17, 58, 119)" href="{{ route('mylogout') }}">
                  {{ __('Logout') }}
              </a>
              @auth
              @if(Auth::user()->pass)
              @if (Auth::user()->pass['status']=='no')
              <li><a href="">painding</a></li>
              @elseif(Auth::user()->pass['status']=='yes')
              <li><a href="{{route('/ex3')}}">Dashboard driver</a></li>
              @endif
              @endif
              @if (Auth::user()['role']=='admin')
              <li>
                <a href="{{route('admin')}}"> Your Dashboard</a></li>
              @endif
              @endauth
              <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  {{-- @csrf --}}
              </form> -->
          </div>
      </li>
      

      @endguest

    
 










                    <!-- <li class="dropdown"><a href="inner-page.html"><span>sign up</span> <i class="bi bi-chevron-down"></i></a> -->
            {{-- <ul> --}}
              <!-- <li><a href="{{route('driver.create')}}">as driver</a></li>  -->
              <!-- {{-- /////////////////////////////// --}} -->
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a> -->
                <!-- <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul> -->


              <!-- <li><a href="{{route('register')}}">as passenger</a></li>  -->
              <!-- {{-- ////////////// --}} -->
              <!-- <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->

              <!-- {{-- ///////////
            </ul>
          </li>
          ///////////// --}} -->
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->

<!-- {{-- /////////////////////////////////// --}} -->
         {{-- <li><a class="getstarted scrollto" href="{{route('login')}}">sign in</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->  --}}


    </div>
  </header><!-- End Header -->




  @yield('body')

  {{-- @yield('main') --}}
  


  <!-- ======= Footer ======= -->
  <footer id="footer">
  <div class="footer-top"><!-- Footer -->
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/ex">Booking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sponsors</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/terms">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/policy">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Daily</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Business Rides</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>FOLLOW US on our social media pages</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-telegram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div>
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>الموقف</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">الموقف</a>
      </div>
    </div>
    </div>
  
  </footer>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
{{-- 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   --}}
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- End Footer -->
</body>
</html>