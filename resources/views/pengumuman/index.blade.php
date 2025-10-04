@extends('layouts.main')

@section('content')
<section class="py-5 bg-light">
    <div class="container">

        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Pengumuman</h2>
            <div class="mx-auto" style="width: 80px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        </div>

        <!-- Announcement Grid -->
        <div class="row g-4">
            @foreach ($pengumumans as $pengumuman)
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 rounded-4 h-100 announcement-card">
                        <div class="card-body p-4 d-flex flex-column">
                            <!-- Title -->
                            <h5 class="card-title fw-bold text-dark mb-3">{{ $pengumuman->judul }}</h5>
                            
                            <!-- Date -->
                            <div class="mb-2 text-muted small">
                                <i class="bi bi-clock-history me-1"></i> 
                                {{ $pengumuman->created_at->diffForHumans() }}
                            </div>
                            
                            <!-- Excerpt -->
                            <p class="card-text flex-grow-1 text-secondary" style="text-align: justify;">
                                {!! $pengumuman->excerpt !!}
                            </p>

                            <!-- Read More -->
                            <div class="mt-3">
                                <a href="/pengumuman/{{ $pengumuman->slug }}" 
                                   class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                    Selengkapnya <i class="bi bi-arrow-right-circle ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="my-4 text-center">
            {{ $pengumumans->links() }}
        </div>

    </div>
</section>

<!-- Custom CSS -->
<style>
    .announcement-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .announcement-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
</style>
@endsection
