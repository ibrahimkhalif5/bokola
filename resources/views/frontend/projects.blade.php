@extends('layouts.main')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background position-relative" data-aos="fade" style="background-image: url({{asset('assets/img/slider/elk.png')}});">
      
    </div><!-- End Page Title -->

     <!-- Slider 3 Section -->
     <section id="slider-3" class="slider-3 section dark-background">
    
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
            "centeredSlides": true,
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": ".swiper-button-next",
              "prevEl": ".swiper-button-prev"
            }
          }
        </script>

        <div class="swiper-wrapper">
        @foreach($project as $row )
          <div class="swiper-slide" style="background-image: url({{Storage::url($row->image)}});">
            <div class="content">
              <h2><a href="single-post.html">{{$row->name}}</a></h2>
              <h2><a href="single-post.html">{{$row->status}}</a></h2>
                </div>
          </div>
@endforeach
        
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Slider 3 Section -->

  </main>




@endsection





