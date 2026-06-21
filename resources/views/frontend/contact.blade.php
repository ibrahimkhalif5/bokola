@extends('layouts.main')

@section('title', 'Contact Us')
@section('meta_description', 'Contact Elwak Municipality — address, phone, email, and online contact form. We are here to serve the community of Mandera South.')
@section('meta_keywords', 'Elwak, Municipality, contact, address, phone, email, Mandera')

@section('content')

<main class="main">

  <div class="page-title dark-background position-relative" data-aos="fade" style="background-image: url({{asset('assets/img/slider/elk.png')}});"></div>

  <section id="contact" class="contact section">

    <div class="container section-title" data-aos="fade-up">
      <h2>
        <span style="color: black;">Contact</span>&nbsp;
        <span style="color: green;">Us</span>
      </h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 justify-content-center">

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="contact-card">
            <div class="contact-icon">
              <i class="bi bi-geo-alt"></i>
            </div>
            <h3>Address</h3>
            <p>Mandera South, Kenya</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="contact-card">
            <div class="contact-icon">
              <i class="bi bi-telephone"></i>
            </div>
            <h3>Call Us</h3>
            <p>+254720476005</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="contact-card">
            <div class="contact-icon">
              <i class="bi bi-envelope"></i>
            </div>
            <h3>Email Us</h3>
            <p>municipality.elwak@gmail.com</p>
          </div>
        </div>

      </div>

      <div class="contact-map" data-aos="fade-up" data-aos-delay="150">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.8739288934675!2d41.86273767318692!3d2.805584898535616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x179c9d1a7ae00c87%3A0x1c09fcacc7be21f!2sElwak%2C%20Kenya!5e0!3m2!1sen!2sus!4v1694965061421!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-8">

          @if(session('success'))
            <div class="alert-success">
              <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
            </div>
          @endif

          <form method="POST" action="{{ route('contact_us') }}" class="contact-form">
            @csrf
            <div class="row gy-4">
              <div class="col-md-6">
                <input type="text" name="fullname" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
              </div>
              <div class="col-12">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
              </div>
              <div class="col-12">
                <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn-submit">Send Message <i class="bi bi-send"></i></button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>

  </section>

</main>

@endsection
