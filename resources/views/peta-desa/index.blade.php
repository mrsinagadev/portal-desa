@extends('layouts.main')

@section('content')
<section class="py-5 bg-light">
    <div class="container">

        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">{{ $petaDesa->judul }}</h2>
            <div class="mx-auto" style="width: 80px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        </div>

        <!-- Map Card -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe 
                                src="https://maps.google.com/maps?hl=en&amp;q={{ urlencode($petaDesa->alamat) }}&amp;t=h&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" 
                                style="border:0;" 
                                allowfullscreen 
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                    <div class="card-footer bg-white text-center py-3">
                        <small class="text-muted">
                            <i class="bi bi-geo-alt-fill text-danger me-1 fw-bold"></i> {{ $petaDesa->alamat }}
                        </small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
