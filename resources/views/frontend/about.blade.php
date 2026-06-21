@extends('layouts.main')

@section('title', 'About Us')
@section('meta_description', 'Learn about Elwak Municipality — our history, mission, vision, and the team serving the community in Mandera South, Kenya.')
@section('meta_keywords', 'Elwak, Municipality, about, history, Mandera, Kenya')

@section('content')

<main class="main">

  <div class="page-title dark-background position-relative" data-aos="fade" style="background-image: url({{asset('assets/img/slider/elk.png')}});">
    <div class="container position-relative">
      <h1>About Us</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">About Us</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id="about" class="about section">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>
              <span style="color: black;">Welcome</span>&nbsp;
              <span style="color: green;">Note</span>
            </h2>
            <p>It is our duty and privilege to ensure that Elwak remains a vibrant, welcoming town for both residents and visitors alike. Our journey has been one of perseverance, growth, and transformation.</p>
            <p>To every resident of Elwak Municipality, your resilience and commitment have been the driving forces behind our progress. I deeply appreciate your trust in our vision, and I am confident that together, we will continue building a prosperous and thriving future for our town.</p>
            <p>Let us work together to make Elwak greener, cleaner, and one of the most secure regions in Kenya. Feel at home and enjoy your time in our wonderful municipality.</p>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('assets/img/slider/enfo.jpeg')}}" class="img-fluid" alt="Elwak Municipality welcome image" loading="lazy">
        </div>

      </div>
    </div>

  </section>

</main>

@endsection
