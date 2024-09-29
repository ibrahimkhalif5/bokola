@extends('layouts.main')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background position-relative" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Downloads</h1>

        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">downloads</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

  <!-- Starter Section 2 Section -->
<section id="starter-section-2" class="starter-section-2 section">
    <div class="row">
        <div class="col-12">
            <!-- Card with gray background -->
            <div class="card" style="background-color: #f8f9fa;">
                <div class="card-body">
                    <table class="table table-bordered table-image">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Document Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($doc as $key => $row)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th> <!-- Display row number -->
                                <td>{{ $row->title }}</td> <!-- Display document title -->
                                <td>
                                    <a href="{{ asset('storage/' . $row->document) }}" class="btn btn-danger" download>Download</a>
                                </td> <!-- Download button -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Starter Section 2 Section -->


  </main>


@endsection