@extends('layouts.main')
@section('content')

<main class="main">

<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/slider/el7.jpg);">
  <div class="container position-relative">
    <h1>Enforcement & Compliance</h1>
      <nav class="breadcrumbs">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="current">Enforcement</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Aboutundefined 6 Section -->
<section id="aboutundefined-6" class="aboutundefined-6 section">

  <div class="container">

    <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-5">
        <img src="{{asset('assets/img/slider/el7.jpg')}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3>Directorate of Enforcement and Compliance</h3>
          <p>
          This unit comprises of Rapid Response Team, 
          Forest guard and Traffic Marshalls that were mandated to carry out various major municipal functions.
           Some of their mandates are listed below:-
          </p>
         
          <ul>
          <li><i class="bi bi-check-circle-fill"></i> <span>To enforce and ensure compliance with County laws and other relevant laws.</span></li>
          <li><i class="bi bi-check-circle-fill"></i> <span>To provide Security Services to County VIPs, properties, and installations.</span></li>
          <li><i class="bi bi-check-circle-fill"></i> <span>Enhance revenue collection by enforcing development control and parking charges.</span></li>
          <li><i class="bi bi-check-circle-fill"></i> <span>Reduce illegal menace and structures within the Elwak town CBD e.g. hawking, obstructions, encroachments, etc.</span></li>
          <li><i class="bi bi-check-circle-fill"></i> <span>Enforce waste management practices.</span></li>
          <li><i class="bi bi-check-circle-fill"></i> <span>Ensure the availability of valid health licenses.</span></li>
          <li><i class="bi bi-check-circle-fill"></i> <span>Ensure the availability of valid medical certificates for food handlers.</span></li>
          <li><i class="bi bi-check-circle-fill"></i> <span>Inspect structural conditions of the premises.</span></li>
        </ul>

        </div>
      </div>
    </div>

  </div>

</section><!-- /Aboutundefined 6 Section -->


   <!-- Testimonials Section -->
   <section id="testimonials" class="testimonials section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Department Heads</h2>

</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        }
      }
    </script>
    <div class="swiper-wrapper">
    @foreach($dept as $key => $row)
      <div class="swiper-slide">
        <div class="testimonial-item">
          <img src="{{ Storage::url($row->photo) }}" class="testimonial-img" alt="">
          <h3>{{$row->hod}}</h3>
          <h4>{{$row->description}}</h4>
   
        </div>
      </div><!-- End testimonial item -->
@endforeach

    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section><!-- /Testimonials Section -->

</main>

@endsection