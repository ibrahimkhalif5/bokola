@extends('layouts.main')

@section('title', 'Gallery')
@section('meta_description', 'Photo gallery of Elwak Municipality — showcasing our town, services, events, and community in Mandera South, Kenya.')
@section('meta_keywords', 'Elwak, Municipality, gallery, photos, Mandera, Kenya')

@section('content')

<main class="main">

  <div class="page-title dark-background position-relative" data-aos="fade" style="background-image: url({{asset('assets/img/slider/elk.png')}});">
    <div class="container position-relative">
      <h1>Gallery</h1>
    </div>
  </div>

  <section id="gallery" class="gallery section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Gallery</h2>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

      <div class="masonry-grid">
        @foreach($gal as $row)
          <div class="masonry-item">
            <a href="{{ Storage::url($row->image) }}" class="glightbox" data-glightbox="description: {{ $row->description }}">
              <img src="{{ Storage::url($row->image) }}" alt="{{ $row->description }}" loading="lazy">
              <span class="masonry-overlay">
                <i class="bi bi-search"></i>
              </span>
            </a>
          </div>
        @endforeach
      </div>

    </div>

  </section>

</main>

@endsection