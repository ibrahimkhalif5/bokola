@extends('layouts.main')

@section('title', 'Resources')
@section('meta_description', 'Download official documents, forms, and resources from Elwak Municipality.')
@section('meta_keywords', 'Elwak, Municipality, downloads, resources, documents, forms')

@section('content')

<main class="main">

  <div class="page-title dark-background position-relative" data-aos="fade" style="background-image: url({{asset('assets/img/slider/elk.png')}});"></div>

  <section id="downloads" class="downloads section">

    <div class="container section-title" data-aos="fade-up">
      <h2>
        <span style="color: black;">Available </span>
        <span style="color: green;">Resources</span>
      </h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="downloads-toolbar">
        <div class="search-box">
          <i class="bi bi-search"></i>
          <input type="text" id="downloadSearch" placeholder="Search documents...">
        </div>
        <div class="filter-buttons">
          <button class="filter-btn active" data-filter="all">All</button>
          @foreach($doc->pluck('status')->unique()->filter() as $status)
            <button class="filter-btn" data-filter="{{ Str::slug($status) }}">{{ $status }}</button>
          @endforeach
        </div>
      </div>

      <div class="row gy-4" id="downloadCards">
        @forelse($doc as $row)
          <div class="col-lg-4 col-md-6 col-sm-6 download-card-item"
               data-title="{{ strtolower($row->title) }}"
               data-category="{{ Str::slug($row->status ?? '') }}">
            <div class="download-card">
              <div class="download-icon">
                <i class="bi bi-file-earmark-text"></i>
              </div>
              <h3>{{ $row->title }}</h3>
              @if($row->status)
                <span class="download-badge">{{ $row->status }}</span>
              @endif
              <a href="{{ Storage::url($row->document) }}" class="btn-download" download>
                <i class="bi bi-download"></i> Download
              </a>
            </div>
          </div>
        @empty
          <div class="col-12 text-center py-5">
            <i class="bi bi-inbox" style="font-size: 3rem; color: #d1d5db;"></i>
            <p class="mt-3 text-muted">No documents available yet.</p>
          </div>
        @endforelse
      </div>

    </div>

  </section>

</main>

@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
  var searchInput = document.getElementById('downloadSearch');
  var filterBtns = document.querySelectorAll('.filter-btn');
  var cards = document.querySelectorAll('.download-card-item');

  function filterCards() {
    var search = searchInput.value.toLowerCase();
    var activeFilter = document.querySelector('.filter-btn.active').dataset.filter;

    cards.forEach(function(card) {
      var title = card.dataset.title;
      var category = card.dataset.category;
      var matchesSearch = title.includes(search);
      var matchesFilter = activeFilter === 'all' || category === activeFilter;
      card.style.display = matchesSearch && matchesFilter ? '' : 'none';
    });
  }

  if (searchInput) {
    searchInput.addEventListener('input', filterCards);
  }

  filterBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      filterBtns.forEach(function(b) { b.classList.remove('active'); });
      this.classList.add('active');
      if (searchInput) filterCards();
    });
  });
});
</script>
