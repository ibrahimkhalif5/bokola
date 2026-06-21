@extends('layouts.main')

@section('title', 'Tenders')
@section('meta_description', 'View current tenders and procurement opportunities from Elwak Municipality.')
@section('meta_keywords', 'Elwak, Municipality, tenders, procurement, bidding, Mandera')

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
               
               <span style="color: green;">Tenders</span>
             </h2>

     </div>


    <div class="row">
        <div class="col-12">
            <!-- Card with gray background -->
            <div class="card" style="background-color: #f8f9fa;">
                <div class="card-body">
                    <div class="table-responsive"><table class="table table-bordered table-image">
                        <thead>
                            <tr>
                                <th scope="col">Tender No.</th>
                                <th scope="col">Title</th>
                                <th scope="col">Submission Deadline</th>
                                <th scope="col">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tender as $key => $row)
                            <tr>
                                   <td>{{ $row->Tender_no }}</td>
                                <td>{{ $row->Title }}</td>
                                <td>{{ $row->end_date }}</td>
                                <td>
                                    <a href="{{ Storage::url($row->tender) }}" class="btn btn-danger" download><i class="bi bi-download"></i> Download</a>
                                </td> <!-- Download button -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table></div>
                    <!-- Pagination links -->
<div class="d-flex justify-content-center">
    {{ $tender->links() }}
</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Starter Section 2 Section -->


  </main>


@endsection