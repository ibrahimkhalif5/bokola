@extends('layouts.main')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background position-relative" data-aos="fade" style="background-image: url({{asset('assets/img/slider/elk.png')}});">
      
    </div><!-- End Page Title -->

  <!-- Starter Section 2 Section -->
<section id="starter-section-2" class="starter-section-2 section">
<div class="container section-title" data-aos="fade-up">
       
       <h2>
               <span style="color: black;">Available </span>
               
               <span style="color: green;">Jobs</span>
             </h2>

     </div>
    <div class="row">
        <div class="col-12">
            <!-- Card with gray background -->
            <div class="card" style="background-color: #f8f9fa;">
                <div class="card-body">
                    <table class="table table-bordered table-image">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Uploaded Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($job as $key => $row)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th> <!-- Display row number -->
                                <td>{{ $row->title }}</td> <!-- Display document title -->
                              
                                <td>{{ $row->created_at }}</td> <!-- Display document title -->
                                <td>
                                <a href="{{ asset('storage/' . $row->document) }}" class="btn btn-danger" download>
    <i class="fa fa-download"></i> Download File
</a>

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