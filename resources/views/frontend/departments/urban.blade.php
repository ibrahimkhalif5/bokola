@extends('layouts.main')
@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/slider/urban.jpeg);">
      <div class="container position-relative">
        <h1>Urban Development</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current"> Urban Development</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Aboutundefined 5 Section -->
    <section id="aboutundefined-5" class="aboutundefined-5 section">

      <div class="container">

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <img src="{{asset('assets/img/slider/mk.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Department of Urban Development</h3>
              <p>
              The directorate comprises of four units. This includes Energy, Trade Development, Roads and Urban Planning,
               mandated to carry out various major municipal functions. 
              </p>
              <div><br></div>
              <div>Key Functions of the Department:-<br></div>
              <p></p>
              <ul>
              <li><i class="bi bi-check-circle-fill"></i> <span>The Energy unit is in charge of solar streetlights, grid-powered streetlights, and high mast security floodlights installed within Elwak Municipality.</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>The Energy sub-sector under Elwak Municipality is mandated to ensure increased environmental conservation, appropriate utilization of renewable energy, and improved access to affordable locally available natural resources to meet the various socio-economic needs of residents of Elwak Municipality.</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>The Roads unit is responsible for cleaning the streets of dirt and sand and clearing out unwanted vegetation along the roads within the municipality.</span></li>
            </ul>

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Aboutundefined 5 Section -->

   
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