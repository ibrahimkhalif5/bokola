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
          <h3>Enforcement and Compliance</h3>
          <p>
            The department is responsible for achieving financial management, resource allocation and financial strategic planning.
          </p>
          <div><br></div>
          <div>Key Functions of the Department:-<br></div>
          <p></p>
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> <span>The Department is responsible to manage the financial resources and administrative operations to support the Municipality’s functions and services.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Budgeting: The department is responsible for developing and managing the municipal budget, allocating funds to different departments and programs, and ensuring financial sustainability.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Accounting: The department maintains financial records, processes payments, and manages accounts receivable. They ensure financial transactions are recorded accurately and in compliance with regulations.</span></li>
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