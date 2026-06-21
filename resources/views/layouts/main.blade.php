<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  @hasSection('title')
    <title>@yield('title') | Elwak Municipality</title>
  @else
    <title>Elwak Municipality — Mandera South, Kenya</title>
  @endif

  <meta name="description" content="@yield('meta_description', 'Elwak Municipality — official website for municipal services, projects, news, tenders, and departmental information in Mandera South, Kenya.')">
  <meta name="keywords" content="@yield('meta_keywords', 'Elwak, Municipality, Mandera, Kenya, municipal services, county government, public health, urban development')">

  <link rel="canonical" href="{{ url()->current() }}">

  <meta property="og:site_name" content="Elwak Municipality">
  <meta property="og:title" content="@yield('og_title', 'Elwak Municipality')">
  <meta property="og:description" content="@yield('og_description', 'Official website of Elwak Municipality — serving the community of Mandera South, Kenya.')">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="@yield('og_type', 'website')">
  <meta property="og:image" content="{{ asset('assets/img/slider/manderaLogo.png') }}">
  <meta property="og:locale" content="en_US">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('og_title', 'Elwak Municipality')">
  <meta name="twitter:description" content="@yield('og_description', 'Official website of Elwak Municipality — serving the community of Mandera South, Kenya.')">

  <link href="{{asset('assets/img/ek.jpg')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "GovernmentOrganization",
    "name": "Elwak Municipality",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('assets/img/slider/manderaLogo.png') }}",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Elwak",
      "addressRegion": "Mandera",
      "addressCountry": "KE"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+254-720-476-005",
      "contactType": "customer service",
      "email": "municipality.elwak@gmail.com"
    }
  }
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  @vite(['resources/scss/bootstrap-custom.scss', 'resources/css/main.css'])

</head>

<body class="index-page">

  <a href="#main-content" class="skip-link">Skip to main content</a>

  <div class="whatsapp-float" id="whatsapp-float">
    <a href="https://wa.me/254720476005" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
      <i class="bi bi-whatsapp"></i>
    </a>
  </div>

  <div class="topbar" id="topbar">
    <div class="container">
      <div class="topbar-left">
        <a href="mailto:municipality.elwak@gmail.com"><i class="fa-regular fa-envelope"></i> municipality.elwak@gmail.com</a>
        <a href="tel:+254720476005"><i class="fa-regular fa-phone"></i> +254 720 476 005</a>
      </div>
      <div class="topbar-right">
        <a href="https://www.facebook.com/people/ELWAK-Municipality/100075843295803/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" aria-label="Twitter / X"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://wa.me/254720476005" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </div>
  </div>

  <header id="header" class="header">
    <div class="header-inner">
      <a href="/" class="logo">
        <img src="{{asset('assets/img/slider/manderaLogo.png')}}" alt="Elwak Municipality Logo" class="logo-img">
        <div class="logo-text">
          <span class="logo-title">Elwak</span>
          <span class="logo-subtitle">Municipality</span>
        </div>
      </a>

      <nav class="nav-menu" id="nav-menu">
        <ul class="nav-list">
            <li><a href="/" class="active">Home</a></li>
            <li class="nav-dropdown">
              <a href="#">About <i class="bi bi-chevron-down"></i></a>
              <ul class="dropdown-menu-custom">
                <li><a href="/about_us">Background</a></li>
                <li><a href="/board_members">Municipal Board</a></li>
                <li><a href="/management">Management</a></li>
              </ul>
            </li>
            <li class="nav-dropdown">
              <a href="#">Departments <i class="bi bi-chevron-down"></i></a>
              <ul class="dropdown-menu-custom">
                <li><a href="/Finance">Administration &amp; Finance</a></li>
                <li><a href="/Environment">Environment &amp; Sanitation</a></li>
                <li><a href="/Urban">Urban Development</a></li>
                <li><a href="/Enforcement">Enforcement &amp; Compliance</a></li>
                <li><a href="/Fire">Fire &amp; Disaster Management</a></li>
              </ul>
            </li>
            <li><a href="/#services">Services</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/#news">News</a></li>
            <li class="nav-dropdown">
              <a href="#">Media <i class="bi bi-chevron-down"></i></a>
              <ul class="dropdown-menu-custom">
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/downloads">Resources</a></li>
                <li><a href="/tenders">Tenders</a></li>
                <li><a href="/careers">Careers</a></li>
              </ul>
            </li>
          </ul>
        </nav>

        <div class="header-actions">
          <button class="search-toggle" id="searchToggle" aria-label="Search">
            <i class="bi bi-search"></i>
          </button>
          <a href="/contact_us" class="btn-header-contact">Contact Us</a>
          <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          </button>
      </div>
    </div>

    <div class="mobile-nav" id="mobileNav">
      <div class="mobile-nav-header">
        <a href="/" class="logo">
          <img src="{{asset('assets/img/slider/manderaLogo.png')}}" alt="Elwak Municipality Logo" class="logo-img">
          <div class="logo-text">
            <span class="logo-title">Elwak</span>
            <span class="logo-subtitle">Municipality</span>
          </div>
        </a>
        <button class="nav-close" id="navClose" aria-label="Close navigation">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>
      <ul class="mobile-nav-list">
        <li><a href="/">Home</a></li>
        <li class="has-sub">
          <a href="#">About <i class="bi bi-chevron-down"></i></a>
          <ul class="sub-menu">
            <li><a href="/about_us">Background</a></li>
            <li><a href="/board_members">Municipal Board</a></li>
            <li><a href="/management">Management</a></li>
          </ul>
        </li>
        <li class="has-sub">
          <a href="#">Departments <i class="bi bi-chevron-down"></i></a>
          <ul class="sub-menu">
            <li><a href="/Finance">Administration &amp; Finance</a></li>
            <li><a href="/Environment">Environment &amp; Sanitation</a></li>
            <li><a href="/Urban">Urban Development</a></li>
            <li><a href="/Enforcement">Enforcement &amp; Compliance</a></li>
            <li><a href="/Fire">Fire &amp; Disaster Management</a></li>
          </ul>
        </li>
        <li><a href="/#services">Services</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/#news">News</a></li>
        <li class="has-sub">
          <a href="#">Media <i class="bi bi-chevron-down"></i></a>
          <ul class="sub-menu">
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/downloads">Resources</a></li>
            <li><a href="/tenders">Tenders</a></li>
            <li><a href="/careers">Careers</a></li>
          </ul>
        </li>
        <li><a href="/contact_us">Contact</a></li>
      </ul>
    </div>
    <div class="nav-overlay" id="navOverlay"></div>
  </header>

  <div id="main-content">
    @yield('content')
  </div>

  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row g-5">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <div class="footer-logo">
                <img src="{{asset('assets/img/slider/manderaLogo.png')}}" alt="Elwak Municipality">
                <div>
                  <span class="footer-logo-title">Elwak</span>
                  <span class="footer-logo-sub">Municipality</span>
                </div>
              </div>
              <p class="footer-desc">Committed to providing quality services and sustainable development for our community in Mandera South, Kenya.</p>
              <div class="footer-social">
                <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <h4 class="footer-heading">Quick Links</h4>
            <ul class="footer-links">
              <li><a href="/">Home</a></li>
              <li><a href="/about_us">About Us</a></li>
              <li><a href="/gallery">Gallery</a></li>
              <li><a href="/projects">Projects</a></li>
              <li><a href="/downloads">Resources</a></li>
              <li><a href="/board_members">Board Members</a></li>
              <li><a href="/contact_us">Contact Us</a></li>
              <li><a href="/careers">Careers</a></li>
              <li><a href="/tenders">Tenders</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6">
            <h4 class="footer-heading">Departments</h4>
            <ul class="footer-links">
              <li><a href="/Finance">Administration &amp; Finance</a></li>
              <li><a href="/Environment">Environment &amp; Sanitation</a></li>
              <li><a href="/Urban">Urban Development</a></li>
              <li><a href="/Enforcement">Enforcement &amp; Compliance</a></li>
              <li><a href="/Fire">Fire &amp; Disaster Management</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6">
            <h4 class="footer-heading">Contact Info</h4>
            <div class="footer-contact">
              <div class="contact-item">
                <i class="bi bi-geo-alt"></i>
                <span>Elwak Municipality, Mandera, Kenya</span>
              </div>
              <div class="contact-item">
                <i class="bi bi-telephone"></i>
                <a href="tel:+254720476005">+254 720 476 005</a>
              </div>
              <div class="contact-item">
                <i class="bi bi-envelope"></i>
                <a href="mailto:municipality.elwak@gmail.com">municipality.elwak@gmail.com</a>
              </div>
              <div class="contact-item">
                <i class="bi bi-clock"></i>
                <span>Mon–Fri: 8AM – 5PM</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-inner">
          <p>&copy; <span>Copyright</span> <strong>Elwak Municipality</strong>. All Rights Reserved.</p>
          <p class="footer-credit">Designed with <i class="bi bi-heart-fill"></i> for our community</p>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top" aria-label="Scroll to top">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <div id="preloader">
    <img src="{{asset('assets/img/slider/manderaLogo.png')}}" alt="Elwak Municipality" class="preloader-logo">
    <div class="preloader-dots">
      <span></span><span></span><span></span><span></span><span></span>
    </div>
  </div>

  <div id="searchOverlay" class="search-overlay">
    <div class="search-overlay-content">
      <button class="search-close" id="searchClose" aria-label="Close search"><i class="bi bi-x-lg"></i></button>
      <form action="/search" method="GET" class="search-form">
        <input type="text" name="q" class="search-input" placeholder="Search services, news, documents..." autocomplete="off">
        <button type="submit" class="search-submit"><i class="bi bi-search"></i> Search</button>
      </form>
    </div>
  </div>

  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" defer></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}" defer></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}" defer></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}" defer></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}" defer></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}" defer></script>

  @vite(['resources/js/main.js'])

</body>

</html>
