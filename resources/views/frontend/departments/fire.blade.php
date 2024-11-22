@extends('layouts.main')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/slider/elk.png);">
      
    </div><!-- End Page Title -->

    <!-- Aboutundefined 5 Section -->
    <section id="aboutundefined-5" class="aboutundefined-5 section">

      <div class="container">

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <img src="{{asset('assets/img/slider/fire.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Department of Fire and Disaster Management</h3>
              <p>
              The unit is mandated in rescuing and protecting life and property in the event of fires within the municipality and protecting people in the event of other emergencies.
              </p>
              <div><br></div>
              <div>Key Functions of the Department:-<br></div>
              <p></p>
            <ul>
            <li><i class="bi bi-check-circle-fill"></i> <span>It provides protection of life, property, and the environment within our community from fire disasters.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>To focus on disaster risk reduction.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>To enhance public safety and emergency response.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>To enhance public awareness and disaster response.</span></li>
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