@extends('layouts.main')

@section('content')
<section class="py-5 bg-light">
    <div class="container">

        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Gallery</h2>
            <div class="mx-auto" style="width: 80px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        </div>

        <!-- Gallery Grid -->
        <div class="row g-4">
            @foreach ($galerrys as $gallery)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow-sm border-0 rounded-4 h-100 gallery-card">
                        <div class="ratio ratio-4x3 rounded-top-4 overflow-hidden">
                            <img src="{{ asset('storage/' . $gallery->gambar) }}" 
                                 class="img-fluid w-100 h-100" 
                                 alt="Gallery"
                                 style="object-fit: cover; transition: transform 0.4s ease;">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text text-secondary fw-bold small">{{ $gallery->keterangan }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="my-4 text-center">
            {{ $galerrys->links() }}
        </div>

    </div>
</section>

<!-- Custom CSS untuk efek hover -->
<style>
    .gallery-card img:hover {
        transform: scale(1.08);
    }
</style>
@endsection
