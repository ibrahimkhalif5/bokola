@extends('layouts.main')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background position-relative" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Projects</h1>

        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Projects</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Services 3 Section -->
    <section id="services-3" class="services-3 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
        @foreach($project as $key => $row)
          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="img">
                <img src="{{ asset('storage/' . $row->image) }}" class="img-fluid" alt="">
              </div>
              <div class="details">
                <a href="service-details.html" class="stretched-link">
                  <h3>{{$row->name}}</h3>
                </a>
                <p>Project Status:{{$row->status}}</p>
                <p>Project Sponsored By:{{$row->sponsor}}</p>
              </div>
            </div>
          </div><!-- End Service Item -->
@endforeach
         

        </div>

      </div>

    </section><!-- /Services 3 Section -->

  </main>




@endsection





