@extends('layouts.main')
@section('content')

<main class="main">

<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/slider/green.jpeg);">
  <div class="container position-relative">
    <h1>Environment & Sanitation</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="current">Environment & Sanitation</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Aboutundefined 4 Section -->
<section id="aboutundefined-4" class="aboutundefined-4 section">

  <div class="container">

    <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-5">
        <img src="{{asset('assets/img/slider/elk.jpeg')}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3>Department of Environment and sanitation</h3>
          <p>
          The Department of Environment and Sanitation is dedicated to ensuring a clean, healthy, and sustainable environment for the community. It plays a pivotal role in promoting public health,
           environmental conservation, and effective waste management practices.
          </p>
          <div><br></div>
          <div>Key Functions of the Department:-<br></div>
          <p></p>
          <ul>
          <li><i class="bi bi-check-circle-fill"></i> <span>The Department regulates the provision of refuse collection and solid waste management services.</span></li>
          <li><i class="bi bi-check-circle-fill"></i> <span>Oversees the afforestation and greening program along major roads and government institutions.</span></li>
          <li><i class="bi bi-check-circle-fill"></i> <span>Performs food and water quality control, inspection, and enforcement of the Public Health Act by enforcing occupational health standards.</span></li>
        </ul>

        </div>
      </div>
    </div>

  </div>

</section><!-- /Aboutundefined 4 Section -->


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