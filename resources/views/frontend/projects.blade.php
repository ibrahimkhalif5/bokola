@extends('layouts.main')

@section('title', 'Projects')
@section('meta_description', 'Explore ongoing and completed projects by Elwak Municipality — infrastructure, urban development, and community initiatives.')
@section('meta_keywords', 'Elwak, Municipality, projects, development, infrastructure, Mandera')

@section('content')

<main class="main">

  <div class="page-title dark-background position-relative" data-aos="fade" style="background-image: url({{asset('assets/img/slider/elk.png')}});"></div>

  <section id="projects" class="projects section">

    <div class="container section-title" data-aos="fade-up">
      <h2>
        <span style="color: black;">Our</span>&nbsp;
        <span style="color: green;">Projects</span>
      </h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        @foreach($project as $row)
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="project-card">
              <div class="project-img">
                <img src="{{ Storage::url($row->image) }}" alt="{{ $row->name }}" loading="lazy">
                <span class="project-status">{{ $row->status }}</span>
              </div>
              <div class="project-body">
                <h3>{{ $row->name }}</h3>
                <p class="project-sponsor"><i class="bi bi-building"></i> {{ $row->sponsor }}</p>
                <a href="#" class="btn-project">View Project <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>

  </section>

</main>

@endsection
