@extends('layouts.main')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background position-relative" data-aos="fade" style="background-image: url(assets/img/slider/el1.jpg);">
      <div class="container position-relative">
        <h1>Management</h1>

        <nav class="breadcrumbs">
          <ol>
            <!-- <li><a href="/">Home</a></li>
            <li class="current">Management</li> -->
            <p>Elwak Municipality is managed by a dedicated team of professionals responsible for coordinating day-to-day operations and ensuring effective service delivery to residents.</p>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Team 2 Section -->
    <section id="team-2" class="team-2 section">

      <div class="container">

        <div class="row">
        @foreach($member as $row)
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ Storage::url($row->photo) }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>{{$row->fullname}}</h4>
                <span><b>Designation:</b> {{$row->designation}}</span>
                <span><b>Key Qualifications:</b> {{$row->description}}</span>
                
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
            </div>
          </div><!-- End Team Member -->
          @endforeach

          



        </div>

      </div>

    </section><!-- /Team 2 Section -->

  </main>

@endsection