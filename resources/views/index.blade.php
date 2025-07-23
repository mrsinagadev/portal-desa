@extends('layouts.main')

@section('content')
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    @foreach ($sliders as $key => $slider)
                        <div class="carousel-item{{ $key === 0 ? ' active' : '' }}"
                            style="background-image: url({{ asset('storage/' . $slider->img_slider) }});">
                        </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="bi bi-bar-chart-line-fill"></i></div>
                    <h4 class="title"><a href="/data-desa">Statistik</a></h4>
                </div>
                <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="bi bi-globe-asia-australia"></i></div>
                    <h4 class="title"><a href="/peta-desa">Peta Desa</a></h4>
                </div>
                <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="bi bi-shop"></i></div>
                    <h4 class="title"><a href="/umkm">UMKM Desa</a></h4>
                </div>
                <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="bi bi-telephone-forward"></i></div>
                    <h4 class="title"><a href="/kontak">Pengaduan</a></h4>
                </div>
            </div>

        </div>
    </section>

    <section id="kepala-dusun-visimisi" class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center align-items-center">
                <!-- Foto Kepala Dusun -->
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-body">
                            <img src="{{ asset('img/foto_kades_pujlmulyo.png') }}" alt="Kepala Dusun"
                                class="rounded-circle img-fluid mb-3"
                                style="width: 200px; height: 200px; object-fit: cover;">
                            <h4 class="card-title mb-0 mt-2 fw-bold">Armadaiyah</h4>
                            <p class="text-muted">Kepala Desa Pujimulyo</p>
                        </div>
                    </div>
                </div>
                <!-- Visi Misi -->
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-4 h-100">
                        <div class="card-body">
                            <h3 class="mb-3 text-primary"><i class="bi bi-bullseye"></i> Visi</h3>
                            <p class="fs-5">{{ $visiMisi->visi }}</p>
                            <h3 class="mt-4 mb-3 text-success"><i class="bi bi-list-check"></i> Misi</h3>
                            <p class="fs-5">{{ $visiMisi->misi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counts section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Berita Desa</h2>
            </div>

            <div class="row">

                @foreach ($beritas as $berita)
                    <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up">
                        <div class="count-box news-card">
                            <div class="card">
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $berita->judul }}</h5>
                                    <p class="card-text">{{ $berita->excerpt }}</p>
                                    <div class="news-date">{{ $berita->created_at->diffForHumans() }}</div>
                                </div>
                                <div class="card-footer">
                                    <a href="/berita/{{ $berita->slug }}" type="button"
                                        class="btn btn-link float-end">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="button" style="text-align: center">
                    <a class="btn btn-primary mx-auto" href="/berita" role="button">Lihat Semua</a>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= Video Section ======= -->
    <section id="services" class="services mx-4">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Video Profile</h2>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <iframe width="100%" height="500" src="{{ $videoProfil->url_video }}" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
