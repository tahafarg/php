@extends('template')
@section('body')
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6  flex-column justify-content-center pt-4 pt-lg-0 order- order-lg-0" data-aos="fade-up"
        data-aos-delay="200">
        <h1>Save your time with Us</h1>
        <h2>We redesign the way the world moves for the better</h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
        </div>
      </div>
      {{-- ///////////////// --}}
      {{-- @if (Auth::user()['role']=='admin')
      <div style="width:200px">
        <a href="{{view('adminf')}}"> Your Dashboard</a>
      </div>
      @endif --}}
      {{-- @if (Auth::user()['role']=='user')
      <a href="{{view('booking')}}">
      @endif --}}
      {{-- @if (Auth::user()->driver)
      <a href="{{view('driv')}}">Dashboard</a>
      @endif --}}
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        {{-- <img src="./Transport-PNG-Picture.png" class="img-fluid animated" alt=""> --}}
      </div>
    </div>
  </div>

</section><!-- End Hero -->
<section>
  <div id="services" class="services section">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-titles1">
            <h2>Why us?</h2>
          </div>
          {{-- <img src="./assets/img/car.jpg"    alt="here"> --}}
          {{-- <p>If you need the greatest collection of HTML templates for your business, please visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS</a> Blog. If you need to have a contact form PHP script, go to <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more information.</p> --}}
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="service-item first-service">
          <div class="icon">
            <img src="./assets/img/time.png" alt="here">
          </div>
          <h4>Arrive on Time</h4>
          <p>Our scheduled, non-stop trips will get you there faster.</p>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item second-service">
          <div class="icon">
            <img src="./assets/img/location_icon.png" alt="here">
          </div>
          <h4>Lots of location</h4>
          <p>You will find us in every single inch around you</p>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item third-service">
          <div class="icon">
            <img src="./assets/img/calender.png" alt="here">
          </div>
          <h4>Reservation</h4>
          <p>Easiest way to book your favourite trip </p>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item fourth-service">
          <div class="icon">
            <img src="./assets/img/hi.png" alt="here">
          </div>
          <h4>Control your ride</h4>
          <p>Choose your pickup and drop off pointes .</p>
        </div>
      </div>
    </div>
</section>
<hr>

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-titles1">
      <h2>About Us</h2>
    </div>

    <div class="row content">
      <div class="col-lg-6">
        <ul>
          El Mo2af is all about improveing the lives of people, saving time is our passion and simplify everyday tasks
          and movements ,
          We redesign the way the world moves for the better ,By providing widest choice, superior customer service,
          lowest prices and unmatched benefits
          . For more info click <a href="#"><span style="color: rgb(11, 1, 29)">HERE</span></a>
        </ul>
      </div>
    </div>
  </div>

</section><!-- End About Us Section -->
<hr>

<div class="section-titles1">
  <h2>Our Sponsers</h2>
</div>
<section id="cliens" class="cliens section-bg">
  <div class="container">

    <div class="row" data-aos="zoom-in">

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
      </div>

    </div>

  </div>
</section><!-- End Cliens Section -->
<hr>

@endsection