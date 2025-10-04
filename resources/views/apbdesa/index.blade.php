@extends('layouts.main')

@section('content')
<section class="py-5 bg-light">
    <div class="container">

        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Anggaran Desa / APBDES</h2>
            <div class="mx-auto" style="width: 80px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        </div>

        <!-- Card Grid -->
        <div class="row g-4">
            @foreach ($anggarans as $anggaran)
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm border-0 rounded-4 h-100 anggaran-card">
                        <!-- Gambar -->
                        <div class="ratio ratio-16x9 rounded-top-4 overflow-hidden">
                            <img src="{{ asset('storage/' . $anggaran->gambar) }}" 
                                 class="img-fluid w-100 h-100" 
                                 alt="gambar anggaran" 
                                 style="object-fit: cover; transition: transform 0.4s ease;">
                        </div>

                        <!-- Konten -->
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark mb-3">{{ $anggaran->judul }}</h5>
                            <div class="mt-auto">
                                <a href="/apbdesa/{{ $anggaran->slug }}" 
                                   class="btn btn-outline-primary rounded-pill px-3">
                                    <i class="bi bi-eye me-1"></i> Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="my-4 text-center">
            {{ $anggarans->links() }}
        </div>

    </div>
</section>

<!-- Custom CSS -->
<style>
    .anggaran-card img:hover {
        transform: scale(1.08);
    }
    .anggaran-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .anggaran-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
</style>
@endsection
