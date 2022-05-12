@extends('layouts.main')

@section('container')

<!-- home section -->
<section id="home">
    <div class="row justify-content-center">
      <div class="home-caption flex-column col">
        <div class="my-auto">
        <div class="home-logo">
        <img src="img/logo-white.png" alt="" />
      </div>
        <h1 class="text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Tiwidee Studio</h1>
        <h2 class="text-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">WEDDING PHOTOGRAPHY</h2>
      </div>
      </div>
    </div>
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="img/carousel/1.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/carousel//2.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/carousel//3.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>
</section>
<!-- home section end -->

<!-- showcase section -->
<section id="showcase">
  <div class="row">
    <div class="col-4 showcase-1">
      <div class="showcase-desc">
        <h4 class="fw-bold">WEDDING</h4>
        <h5>57 Completed Project</h5>
      </div>
    </div>
    <div class="col-4 showcase-2">
      <div class="showcase-desc">
        <h4 class="fw-bold">PHOTO CINEMA</h4>
        <h5>78 Completed Project</h5>
      </div>
    </div>
    <div class="col-4 showcase-3">
      <div class="showcase-desc">
        <h4 class="fw-bold">FAMILY</h4>
        <h5>25 Completed Project</h5>
      </div>
    </div>
  </div>
</section>
<!-- showcase section end -->

<!-- About section -->
<section id="about">
  <div class="container">
    {{-- <div class="row justify-content-center">
      <img src="img/seperator.png" alt="" />
      <img class="about-logo" src="img/logo-green.png" alt="" />
    </div>
    <div class="row">
      <div class="col-lg-12 mt-5">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quisquam pariatur dolorem molestias! Beatae minima est consectetur ab repudiandae magnam assumenda quasi ullam exercitationem? Eligendi assumenda blanditiis ullam
        voluptatum ratione in maxime ducimus eveniet, debitis reprehenderit autem nostrum nulla atque quod provident quibusdam ex quos beatae dicta odit similique consequatur.
      </div>
    </div> --}}
    <div class="row card-pink">
      <div class="col-lg-6 col-6 card-1"></div>
      <div class="col-lg-6 col-6 card-1-contain">
        <div class="card-1-detail">
          <h1>Curating Beauty <br> In All Detail</h1>
          <h2>Since 2021</h2>
          <p>We take care of all the details so you can enjoy the perfect experience</p>
        </div>
      </div>
    </div>
    <div class="row card-blue">
      <div class="col-lg-6 col-6 card-2"></div>
      <div class="col-lg-6 col-6 card-2-contain">
        <div class="card-2-detail">
          <h1>Unique Take On A Fine Art</h1>
          <h2>Since 2021</h2>
          <p>It's all of those in between moments. Not planned. Not posed. Just real moments captured in the most beautiful way possible.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About section end -->

<!-- service section -->
<section id="service">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-5 service-header">
        <h1>OUR SERVICE</h1>
      </div>
    </div>
    <div class="row card-service-column">
      <div class="col-12 col-lg-4">
        <div class="card-service">
          <img src="img/service-icon/camera.png" alt="" />
          <div class="card-service-body">
            <h5 class="card-service-title">Photo / Video</h5>
            <p class="card-text">Our photographers are curated professionals you can trust to capture your every moment and turn them into perfect photos</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="card-service">
          <img src="img/service-icon/makeup.png" alt="" />
          <div class="card-service-body">
            <h5 class="card-service-title">Make Up</h5>
            <p class="card-text">Coordinate hair and make-up schedule with bridal party and stylists and ensure that hair and make-up is completed in a timely fashion</p>
          </div>
        </div>
      </div>
      <div class="col-12  col-lg-4">
        <div class="card-service">
          <img src="img/service-icon/cake.png" alt="" />
          <div class="card-service-body">
            <h5 class="card-service-title">Decoration</h5>
            <p class="card-text">Creating an amazing decor design that will be forever remember for its elegance, and beauty</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row envelope-square">
    <div class="col envelope-content">
      <h3>Let's Explore</h3>
      <h1 class="fw-bold">WHAT'VE WE CREATED</h1>
      <p>Whether its photography, videography or even drone cinematography, Our photographers and videographers are experts at storytelling</p>
    </div>
  </div>
  <div class="row envelope">
    <div class="col-lg-6 envelope-1"></div>
    <div class="col-lg-6 envelope-2"></div>
  </div>
</section>
<!-- end service section -->

<!-- photography section -->
<section id="photography">
  {{-- <div class="photo-container">
    <div class="row gx-0 photo-gallery">
      <div class="col-3 photo-card">
        <img class="inner-img" src="img/photog/1.jpg" alt="" />
      </div>
      <div class="col-3 photo-card">
        <img class="inner-img" src="img/photog/2.jpg" alt="" />
      </div>
      <div class="col-3 photo-card">
        <img class="inner-img" src="img/photog/3.jpg" alt="" />
      </div>
      <div class="col-3 photo-card">
        <img class="inner-img" src="img/photog/4.jpg" alt="" />
      </div>
      <div class="col-3 photo-card">
        <img class="inner-img" src="img/photog/5.jpg" alt="" />
      </div>
    </div>
  </div> --}}

<div class="container-photo d-flex">
    <div class="panel panel-1">
      <h3>WEDDING</h3>
    </div>
    <div class="panel panel-2">
      <h3>GROUP</h3>
    </div>
    <div class="panel panel-3">
      <h3>PHOTO CINEMA</h3>
    </div>
    <div class="panel panel-4">
      <h3>FAMILY</h3>
    </div>
    <div class="panel panel-5">
      <h3>PERSONAL</h3>
    </div>
</div>
</section>
<!-- photography section end -->

<!-- contact section -->
<section id="contact">
  <div class="container">
    <div class="contact-content text-center justify-content-center">
      <h2 class="fw-bold">LETS CAPTURE YOUR BEAUTIFUL MOMENT</h2>
      <p>We'll get straight back to you to discuss your wedding plans as soon as you complete our wedding enquiry form</p>
      <button class="btn-custom text-center">MAKE YOUR ENQUIRY NOW</button>
    </div>
  </div>
</section>
<!-- end contact section -->

<!-- map section -->
<section id="maps">
  <div class="responsive-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6664669606885!2d106.82496411419315!3d-6.175387062231512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational%20Monument!5e0!3m2!1sen!2sid!4v1643182881411!5m2!1sen!2sid"
      height="450"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
    ></iframe>
  </div>
</section>
<!-- map section end -->

@endsection
