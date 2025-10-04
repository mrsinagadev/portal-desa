@extends('layouts.main')

@section('content')
    <section class="counts section-bg">
        <div class="container">

            <div class="section-title">
                <h2 class="fw-bold text-dark">Berita Desa</h2>
                <div class="mx-auto" style="width: 80px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
            </div>

            <div class="row">
                @foreach ($beritas as $berita)
                    <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up">
                        <div class="count-box news-card">
                            <div class="card">
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $berita->judul }}</h5>
                                    <div class="news-date">{{ $berita->created_at->diffForHumans() }}</div>
                                    <p class="card-text">{{ $berita->excerpt }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="/berita/{{ $berita->slug }}"
                                        class="badge bg-primary text-decoration-none float-end p-2">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $beritas->links() }}

        </div>
    </section>
@endsection
