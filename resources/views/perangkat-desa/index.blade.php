@extends('layouts.main')

@section('content')
    <section class="counts section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Perangkat Desa Pujimulyo</h2>
            </div>

            <div class="row">
                @foreach ($perangkatDesa as $perangkat)
                    <div class="col-md-6 col-lg-4 col-xl-3 mb-4" data-aos="fade-up">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">

                            <!-- Gambar dengan tinggi tetap dan crop rapi -->
                            <div class="ratio ratio-4x3" style="overflow: hidden;">
                                <img src="{{ asset('storage/' . $perangkat->foto) }}" class="w-100 h-100"
                                    style="object-fit: cover; object-position: top center;" alt="{{ $perangkat->nama }}">
                            </div>

                            <div class="card-body text-center">
                                <p class="card-title mb-1 fw-bold">{{ $perangkat->nama }}</p>
                                <p class="card-text text-muted small">{{ $perangkat->jabatan }}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section>
@endsection
