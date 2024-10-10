@extends('layouts.main')
@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
      @foreach($gal as $index => $row )
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img src="{{ Storage::url($row->image) }}" alt="">
            </div><!-- End Carousel Item -->
        @endforeach

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">

              <h2>
                <span style="color: black;">Welcome</span>&nbsp;
                <span style="color: green;">Note</span>
              </h2>
              <p>It is our duty and privilege to ensure that Elwak remains a vibrant, welcoming town for both residents and visitors alike. Our journey has been one of perseverance, growth, and transformation.

                To every resident of Elwak Municipality, your resilience and commitment have been the driving forces behind our progress. I deeply appreciate your trust in our vision, and I am confident that together, we will continue building a prosperous and thriving future for our town.

                Let us work together to make Elwak greener, cleaner, and one of the most secure regions in Kenya. Feel at home and enjoy your time in our wonderful municipality.</p>
              
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('assets/img/slider/el12.jpg')}}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Slider Section -->
    <section id="slider" class="slider section accent-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>
          <span style="color: black;">Municipality</span>&nbsp;
          <span style="color: green;">Key sectors</span>
        </h2>
      </div>
      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

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
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/el2.jpg')}})">

              <div class="price align-self-start">Revenue Collection</div>
              <p class="description">
              The Revenue Department of Elwak Municipality, assigned this responsibility in January 2024, is tasked with efficiently collecting municipal revenues. This initiative ensures the necessary funds for essential services and infrastructure development within the municipality. Key revenue streams include local business taxes, property rates, and service fees, all contributing to the growth and sustainability of Elwak's community services and projects.
            
            </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/fire.jpg')}})">

              <div class="price align-self-start">Fire &amp; Disaster Management</div>
              <p class="description">
                
              Elwak Municipality's Fire & Disaster Management department is dedicated to preventing and responding to emergencies efficiently. The team is composed of well-trained firefighters equipped with modern tools to handle various disaster scenarios. For fire emergencies, residents can reach the team at +254 724 073 916. The department is committed to ensuring the safety and preparedness of the community through prompt and professional services.
            
            </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/public.jpg')}})">

              <div class="price align-self-start">Public Health &amp; Sanitation</div>
              <p class="description">

              The Public Health & Sanitation unit is a vital initiative aimed at safeguarding and enhancing community well-being in Elwak. Focused on disease prevention, health education, and improved sanitation, the program plays a crucial role in promoting a healthier and cleaner living environment for all residents, ensuring the overall health and safety of the community.
                      </p>
            </div><!-- End Event item -->
            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/tree.jpeg')}})">

                <div class="price align-self-start">Environment &amp; Sanitation</div>
                <p class="description">
                The Environment & Sanitation unit focuses on maintaining a clean and sustainable environment within the municipality. This unit is dedicated to waste management, environmental conservation, and promoting hygiene practices. Through its efforts, the unit ensures a healthier and more sustainable community by addressing sanitation challenges and encouraging environmentally friendly practices.



            </p>
                </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/el7.jpg')}})">

              <div class="price align-self-start"> Inspectorate &amp; Enforcement   </div>
              <p class="description">

              The Enforcement & Compliance unit is responsible for upholding county laws and regulations. Its primary role is to monitor and ensure adherence across various sectors, including business operations, construction, and public safety. By maintaining compliance, the unit contributes to a safer and more orderly environment within the municipality.
                      </p>
              </div><!-- End Event item -->




            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/mk.jpg')}})">

              <div class="price align-self-start">Trade &amp; Market Service</div>
              <p class="description">

              The Trade & Market unit in Elwak focuses on fostering economic growth and supporting local businesses. It plays a key role in regulating and managing markets, ensuring fair trade practices, and providing an enabling environment for traders. The unit also works towards boosting economic activity by promoting both local and external trade, contributing significantly to the overall development of the municipality.
                       </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Slider Section -->

    <!-- Stats 2 Section -->
    <section id="stats-2" class="stats-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-briefcase color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                <p>population</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-geo-alt color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="814" data-purecounter-duration="1" class="purecounter"></span>
                <p>Square KM</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-geo-alt color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                <p>Ward</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats 2 Section -->

    <!-- Testimonials 3 Section -->
    <section id="testimonials-3" class="testimonials-3 section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
     
        <h2>
                <span style="color: black;">Our</span>&nbsp;
                <span style="color: green;">Services</span>
              </h2>

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
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/slider/manderaLogo.png')}}" class="testimonial-img" alt="">
                  <h3>waste management services</h3>
                  <p>

                    <span>Promotion, regulation and provision of refuse collection and solid waste management services</span>

                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/slider/manderaLogo.png')}}" class="testimonial-img" alt="">
                  <h3>water and sanitation services</h3>

                  <p>

                    <span>Promotion and provision of water and sanitation services and infrastructure (in areas within the Municipality not served by the Water and Sanitation Provider)</span>

                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/slider/manderaLogo.png')}}" class="testimonial-img" alt="">
                  <h3>maintenance of urban roads</h3>

                  <p>

                    <span>Construction and maintenance of urban roads and associated infrastructure</span>

                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/slider/manderaLogo.png')}}" class="testimonial-img" alt="">
                  <h3>drainage Services</h3>

                  <p>

                    <span>Construction and maintenance of storm drainage and flood controls.</span>

                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/slider/manderaLogo.png')}}" class="testimonial-img" alt="">
                  <h3>street lighting</h3>

                  <p>

                    <span>Construction and maintenance of street lighting</span>

                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/slider/manderaLogo.png')}}" class="testimonial-img" alt="">
                  <h3>maintenance of walkways</h3>

                  <p>

                    <span>Construction and maintenance of walkways and other non-motorized transport infrastructure.</span>

                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/slider/manderaLogo.png')}}" class="testimonial-img" alt="">
                  <h3>Enforcement Services</h3>

                  <p>

                    <span>Development and enforcement of municipal plans and development controls</span>

                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/slider/manderaLogo.png')}}" class="testimonial-img" alt="">
                  <h3>Promotion of sports and cultural activities</h3>

                  <p>

                    <span>Promotion, regulation and provision of municipal sports and cultural activities.</span>

                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/slider/manderaLogo.png')}}" class="testimonial-img" alt="">
                  <h3>Development Control</h3>

                  <p>

                    <span>Control land, land sub-division, land development and zoning by public and private sectors for any purpose</span>

                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials 3 Section -->

    <!-- Slider 2 Section -->
<section id="slider-2" class="slider-2 section">
  <div class="container section-title" data-aos="fade-up">
    <h2>
      <span style="color: black;">News</span>&nbsp;
      <span style="color: black;">&</span>&nbsp;
      <span style="color: green;">Events</span>
    </h2>
  </div>
  <img class="slider-bg" src="{{asset('assets/img/slider/el1.jpg')}}" alt="" data-aos="fade-in">

  <div class="container">
    <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
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
        @foreach($event as $row)
        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="{{ Storage::url($row->image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <div class="price">
                <p><span>{{ $row->title }}</span></p>
              </div>
              <p class="fst-italic">{{ $row->description }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>

    </div>
  </div>
</section>
<!-- /Slider 2 Section -->


   

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
       
        <h2>
                <span style="color: black;">Our</span>&nbsp;
                
                <span style="color: green;">Partners</span>
              </h2>

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
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{asset('assets/img/slider/mdr.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/slider/manderaLogo.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/slider/download.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/slider/mdr.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/slider/mdr.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/slider/mdr.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/slider/mdr.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/slider/mdr.png')}}" class="img-fluid" alt=""></div>
                   </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Clients Section -->

  </main>


@endsection