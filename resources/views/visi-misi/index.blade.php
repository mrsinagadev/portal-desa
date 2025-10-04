@extends('layouts.main')

@section('content')
    <section class="counts bg-light py-5">
        <div class="container">

            <!-- Judul -->
            <div class="section-title text-center mb-2">
                <h2 class="fw-bold text-dark">Struktur Organisasi Desa</h2>
                <div class="mx-auto" style="width: 80px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
            </div>

            <!-- Kepala Desa -->
            <div class="row justify-content-center mb-4">
                <div class="col-lg-4">
                    <div class="card text-center border-primary border-2 rounded-3 shadow-sm transition-hover">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary">Kepala Desa</h5>
                            <p class="card-text">ARMADAIYAH</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sekretaris Desa -->
            <div class="row justify-content-center mb-4">
                <div class="col-lg-3">
                    <div class="card text-center border-secondary border-2 rounded-3 shadow-sm transition-hover">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-warning">Sekretaris Desa</h5>
                            <p class="card-text">ROHMAT HAKIM, S.KOM</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bawahan Sekretaris -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card text-center rounded-3 shadow-sm transition-hover">
                        <div class="card-body">
                            <h6 class="card-title fw-semibold text-warning">Kepala Tata Usaha dan Umum</h6>
                            <p class="card-text">RENNY PUSPITA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card text-center rounded-3 shadow-sm transition-hover">
                        <div class="card-body">
                            <h6 class="card-title fw-semibold text-warning">Kepala Urusan Keuangan</h6>
                            <p class="card-text">ARIYA ISNAIN</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card text-center rounded-3 shadow-sm transition-hover">
                        <div class="card-body">
                            <h6 class="card-title fw-semibold text-warning">Kepala Urusan Perencanaan</h6>
                            <p class="card-text">IYULFAN YUSUF</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kasi langsung di bawah Kepala Desa -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card text-center border-success border-2 rounded-3 shadow-sm transition-hover">
                        <div class="card-body">
                            <h6 class="card-title fw-semibold text-primary">Kepala Seksi Pemerintahan</h6>
                            <p class="card-text">CHAIRUL REZA HARAHAP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card text-center border-success border-2 rounded-3 shadow-sm transition-hover">
                        <div class="card-body">
                            <h6 class="card-title fw-semibold text-primary">Kepala Seksi Kesejahteraan</h6>
                            <p class="card-text">WAHYU PRATAMA HARAHAP, S.T</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card text-center border-success border-2 rounded-3 shadow-sm transition-hover">
                        <div class="card-body">
                            <h6 class="card-title fw-semibold text-primary">Kepala Seksi Pelayanan</h6>
                            <p class="card-text">MUHAMMAD ILHAM AZMI, S.KOM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <!-- Visi & Misi -->
        <div class="section-title text-center mb-4">
            <h2 class="fw-bold text-dark">Visi & Misi</h2>
            <div class="mx-auto" style="width: 80px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-4 mx-auto" style="max-width: 800px;">
                    <div class="card-body p-4 p-md-5">

                        <!-- Visi -->
                        <div class="mb-4">
                            <h4 class="fw-bold text-primary">Visi</h4>
                            <p class="fs-5 lh-lg text-secondary" style="text-align: justify;">
                                {!! $visiMisi->visi !!}
                            </p>
                        </div>

                        <!-- Misi -->
                        <div>
                            <h4 class="fw-bold text-primary">Misi</h4>
                            <p class="fs-5 lh-lg text-secondary" style="text-align: justify;">
                                {!! $visiMisi->misi !!}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
