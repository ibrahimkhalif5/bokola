@extends('layouts.main')

@section('title', 'Elwak Municipality — Mandera South, Kenya')
@section('meta_description', 'Elwak Municipality — official website. Learn about municipal services, projects, news, tenders, and departments in Mandera South, Kenya.')
@section('meta_keywords', 'Elwak, Municipality, Mandera, Kenya, home, municipal services, county government')

@section('content')

<main class="main">

  <section id="hero" class="hero-section">
    <div class="swiper hero-swiper init-swiper">
      <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 1200,
        "effect": "fade",
        "fadeEffect": { "crossFade": true },
        "autoplay": { "delay": 6000, "disableOnInteraction": false },
        "pagination": { "el": ".hero-pagination", "clickable": true },
        "navigation": {
          "nextEl": ".hero-next",
          "prevEl": ".hero-prev"
        }
      }
      </script>
      <div class="swiper-wrapper">
        @foreach($gal as $row)
          <div class="swiper-slide">
            <div class="hero-slide" style="background-image: url('{{ Storage::url($row->image) }}')"></div>
          </div>
        @endforeach
      </div>

      <div class="hero-pagination"></div>
      <div class="hero-nav">
        <div class="hero-prev"><i class="bi bi-chevron-left"></i></div>
        <div class="hero-next"><i class="bi bi-chevron-right"></i></div>
      </div>
    </div>

    <div class="hero-caption" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
        <div class="hero-caption-inner">
          <span class="hero-badge">Welcome To Elwak Municipality</span>
          <h1 class="hero-title">Building a Sustainable <span class="text-primary">Future</span> Together</h1>
          <p class="hero-text">Committed to providing quality services and sustainable development for our community in Mandera South, Kenya.</p>
          <div class="hero-datetime" id="heroDatetime">
            <div class="dt-date" id="dtDate"></div>
            <div class="dt-time" id="dtTime"></div>
          </div>
          <div class="hero-buttons">
            <a href="/#services" class="btn-primary">Explore Services <i class="bi bi-arrow-right"></i></a>
            <a href="/#news" class="btn-outline">Latest News <i class="bi bi-newspaper"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="stats-section">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-delay="100">
          <div class="stat-card">
            <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
            <div class="stat-info">
              <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="72000" data-purecounter-duration="3"></span>
              <span class="stat-label">Elwak Population</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-delay="200">
          <div class="stat-card">
            <div class="stat-icon"><i class="bi bi-globe-africa"></i></div>
            <div class="stat-info">
              <span class="stat-number">814</span>
              <span class="stat-label">Square Kilometers</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-delay="300">
          <div class="stat-card">
            <div class="stat-icon"><i class="bi bi-map"></i></div>
            <div class="stat-info">
              <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="2"></span>
              <span class="stat-label">Wards</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-delay="400">
          <div class="stat-card">
            <div class="stat-icon"><i class="bi bi-briefcase-fill"></i></div>
            <div class="stat-info">
              <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="{{ $projectCount }}" data-purecounter-duration="1"></span>
              <span class="stat-label">Projects</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="section-block">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-tag">What We Do</span>
        <h2 class="section-title">Our <span class="highlight">Services</span></h2>
        <p class="section-desc">Delivering essential municipal services to enhance the quality of life in Elwak.</p>
      </div>

      <div data-aos="fade-up" data-aos-delay="100">
        <div class="swiper services-swiper init-swiper">
          <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 800,
            "autoplay": { "delay": 4000, "disableOnInteraction": false },
            "slidesPerView": 1,
            "spaceBetween": 24,
            "pagination": { "el": ".services-pagination", "clickable": true },
            "navigation": { "nextEl": ".services-next", "prevEl": ".services-prev" },
            "breakpoints": {
              "576": { "slidesPerView": 2, "spaceBetween": 20 },
              "992": { "slidesPerView": 4, "spaceBetween": 24 }
            }
          }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="service-card">
                <div class="service-icon"><i class="bi bi-trash3"></i></div>
                <h3>Waste Management</h3>
                <p>Promotion, regulation and provision of refuse collection and solid waste management services.</p>
                <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-card">
                <div class="service-icon"><i class="bi bi-droplet"></i></div>
                <h3>Water &amp; Sanitation</h3>
                <p>Promotion and provision of water and sanitation services and infrastructure across the municipality.</p>
                <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-card">
                <div class="service-icon"><i class="bi bi-signpost-2"></i></div>
                <h3>Urban Roads</h3>
                <p>Construction and maintenance of urban roads and associated infrastructure for better connectivity.</p>
                <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-card">
                <div class="service-icon"><i class="bi bi-water"></i></div>
                <h3>Drainage Services</h3>
                <p>Construction and maintenance of storm drainage and flood controls to protect our community.</p>
                <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-card">
                <div class="service-icon"><i class="bi bi-lamp"></i></div>
                <h3>Street Lighting</h3>
                <p>Construction and maintenance of street lighting for safer and more vibrant neighborhoods.</p>
                <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-card">
                <div class="service-icon"><i class="bi bi-walk"></i></div>
                <h3>Walkways</h3>
                <p>Construction and maintenance of walkways and non-motorized transport infrastructure.</p>
                <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-card">
                <div class="service-icon"><i class="bi bi-shield-check"></i></div>
                <h3>Enforcement</h3>
                <p>Development and enforcement of municipal plans and development controls for orderly growth.</p>
                <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-card">
                <div class="service-icon"><i class="bi bi-building-check"></i></div>
                <h3>Development Control</h3>
                <p>Control land subdivision, land development and zoning for public and private sectors.</p>
                <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="services-pagination"></div>
        </div>
        <div class="swiper-nav">
          <div class="services-prev"><i class="bi bi-chevron-left"></i></div>
          <div class="services-next"><i class="bi bi-chevron-right"></i></div>
        </div>
      </div>
    </div>
  </section>

  <section id="news" class="section-block bg-light">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-tag">Stay Informed</span>
        <h2 class="section-title">News &amp; <span class="highlight">Events</span></h2>
        <p class="section-desc">Latest updates and happenings from Elwak Municipality.</p>
      </div>

      <div data-aos="fade-up" data-aos-delay="100">
        <div class="swiper news-swiper init-swiper">
          <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 800,
            "autoplay": { "delay": 5000, "disableOnInteraction": false },
            "slidesPerView": 1,
            "spaceBetween": 24,
            "pagination": { "el": ".news-pagination", "clickable": true },
            "navigation": { "nextEl": ".news-next", "prevEl": ".news-prev" },
            "breakpoints": {
              "576": { "slidesPerView": 2, "spaceBetween": 20 },
              "992": { "slidesPerView": 4, "spaceBetween": 24 }
            }
          }
          </script>
          <div class="swiper-wrapper">
            @foreach($event as $row)
              <div class="swiper-slide">
                <div class="news-card">
                  <div class="news-image">
                    <img src="{{ Storage::url($row->image) }}" alt="{{ $row->title }}">
                    <span class="news-badge">News</span>
                  </div>
                  <div class="news-body">
                    <div class="news-date"><i class="bi bi-calendar3"></i> {{ \Carbon\Carbon::parse($row->created_at)->format('M d, Y') }}</div>
                    <h3>{{ $row->title }}</h3>
                    <p>{{ Str::limit($row->description, 100) }}</p>
                    <a href="#" class="btn-read">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <div class="news-pagination"></div>
        </div>
        <div class="swiper-nav">
          <div class="news-prev"><i class="bi bi-chevron-left"></i></div>
          <div class="news-next"><i class="bi bi-chevron-right"></i></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-block">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-tag">Our Work</span>
        <h2 class="section-title">Featured <span class="highlight">Projects</span></h2>
        <p class="section-desc">Transforming Elwak through strategic infrastructure and community development.</p>
      </div>

      <div data-aos="fade-up" data-aos-delay="100">
        <div class="swiper projects-swiper init-swiper">
          <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 800,
            "autoplay": { "delay": 5000, "disableOnInteraction": false },
            "slidesPerView": 1,
            "spaceBetween": 24,
            "pagination": { "el": ".projects-pagination", "clickable": true },
            "navigation": { "nextEl": ".projects-next", "prevEl": ".projects-prev" },
            "breakpoints": {
              "576": { "slidesPerView": 2, "spaceBetween": 20 },
              "992": { "slidesPerView": 3, "spaceBetween": 24 }
            }
          }
          </script>
          <div class="swiper-wrapper">
            @foreach($projects as $row)
              <div class="swiper-slide">
                <div class="project-card">
                  <div class="project-image">
                    <img src="{{ Storage::url($row->image) }}" alt="{{ $row->name }}">
                    <span class="project-status">{{ $row->status }}</span>
                  </div>
                  <div class="project-body">
                    <h3>{{ $row->name }}</h3>
                    <p><i class="bi bi-building"></i> {{ $row->sponsor }}</p>
                    <a href="/projects" class="btn-read">View Project <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <div class="projects-pagination"></div>
        </div>
        <div class="swiper-nav">
          <div class="projects-prev"><i class="bi bi-chevron-left"></i></div>
          <div class="projects-next"><i class="bi bi-chevron-right"></i></div>
        </div>
      </div>
    </div>
  </section>

  <section class="manager-section">
    <div class="container">
      <div class="manager-wrapper">
        <div class="manager-shape"></div>
        <div class="manager-shape-2"></div>
        <div class="row g-5 align-items-center">
          <div class="col-lg-5" data-aos="fade-right">
            <div class="manager-image-wrapper">
              <div class="manager-image-frame">
                <img src="{{asset('assets/img/slider/manager.png')}}" alt="Municipal Manager" class="manager-photo">
              </div>
              <div class="manager-decoration"></div>
            </div>
          </div>
          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
            <div class="manager-content">
              <span class="manager-tag">Welcome Message</span>
              <h2 class="manager-title">From the Municipal <span class="highlight">Manager</span></h2>
              <p class="manager-text">It is our duty and privilege to ensure that Elwak remains a vibrant, welcoming town for both residents and visitors alike. Our journey has been one of perseverance, growth, and transformation.</p>
              <p class="manager-text">To every resident of Elwak Municipality, your resilience and commitment have been the driving forces behind our progress. Let us work together to make Elwak greener, cleaner, and one of the most secure regions in Kenya.</p>
              <div class="manager-signature">
                <img src="{{asset('assets/img/slider/manderaLogo.png')}}" alt="Signature" class="sig-img">
                <div class="manager-name">
                  <strong>Abdi Hussein Kahiye</strong>
                  <span>Municipal Manager, Elwak Municipality</span>
                </div>
              </div>
              <a href="/about_us" class="btn-primary">Read Full Message <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" class="section-block">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-tag">Moments</span>
        <h2 class="section-title">Our <span class="highlight">Gallery</span></h2>
        <p class="section-desc">A visual journey through Elwak Municipality.</p>
      </div>

      <div class="gallery-grid" data-aos="fade-up" data-aos-delay="100">
        @foreach($gal as $index => $row)
          <div class="gallery-item @if($index === 0) gallery-item--large @endif">
            <a href="{{ Storage::url($row->image) }}" class="glightbox" data-gallery="home-gallery">
              <img src="{{ Storage::url($row->image) }}" alt="{{ $row->description ?? 'Gallery image' }}" onerror="this.src='{{asset('assets/img/slider/manderaLogo.png')}}'">
              <div class="gallery-overlay"><i class="bi bi-plus-lg"></i></div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section id="facebook" class="section-block bg-light">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-tag">Social Feed</span>
        <h2 class="section-title">Latest From <span class="highlight">Facebook</span></h2>
        <p class="section-desc">Follow us on Facebook for the latest updates, announcements, and community news from Elwak Municipality.</p>
      </div>

      <div class="facebook-wrapper" data-aos="fade-up" data-aos-delay="100">
        <div class="facebook-embed">
          <div id="fb-root"></div>
          <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v22.0"></script>
          <div class="fb-page"
               data-href="https://www.facebook.com/profile.php?id=100075843295803"
               data-tabs="timeline"
               data-width=""
               data-height="600"
               data-small-header="true"
               data-adapt-container-width="true"
               data-hide-cover="false"
               data-show-facepile="true">
          </div>
        </div>
        <p class="facebook-fallback">If the feed doesn't load, <a href="https://www.facebook.com/profile.php?id=100075843295803" target="_blank" rel="noopener">visit our Facebook page</a> for the latest updates.</p>
      </div>
    </div>
  </section>

  <section class="partners-section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-tag">Collaborators</span>
        <h2 class="section-title">Our <span class="highlight">Partners</span></h2>
      </div>

      <div data-aos="fade-up" data-aos-delay="100">
        <div class="swiper partners-swiper init-swiper">
          <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": { "delay": 3000, "disableOnInteraction": false },
            "slidesPerView": 2,
            "spaceBetween": 30,
            "breakpoints": {
              "576": { "slidesPerView": 3 },
              "768": { "slidesPerView": 4 }
            }
          }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide"><div class="partner-item"><img src="{{asset('assets/img/slider/mm.png')}}" alt="Mandera Municipality partner logo"></div></div>
            <div class="swiper-slide"><div class="partner-item"><img src="{{asset('assets/img/slider/mdr.png')}}" alt="Mandera County partner logo"></div></div>
            <div class="swiper-slide"><div class="partner-item"><img src="{{asset('assets/img/slider/kups.jpg')}}" alt="KUPS partner logo"></div></div>
            <div class="swiper-slide"><div class="partner-item"><img src="{{asset('assets/img/slider/assem.png')}}" alt="Mandera Assembly partner logo"></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

@endsection
