@extends('layouts.main')

@section('content')
<section class="counts section-bg py-5">
    <div class="section-title text-center mb-4">
        <h2 class="fw-bold text-dark">Layanan</h2>
        <div class="mx-auto" style="width: 80px; height: 4px; background: linear-gradient(90deg,#0d6efd,#00c6ff); border-radius: 2px;"></div>
    </div>
    <div class="container">
        <div class="row g-4 justify-content-center">
            @foreach ($layanans as $layanan)
            <div class="col-lg-4 col-md-6">
                <div class="card layanan-card shadow-lg border-0 rounded-4 h-100 text-center">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center py-4">
                        <span class="icon-gradient mb-3"><i class="bi bi-file-earmark-text"></i></span>
                        <h4 class="fw-bold mb-2">{{ $layanan->layanan }}</h4>
                        <button type="button" class="btn btn-gradient px-4 py-2 mt-2" data-bs-toggle="modal" data-bs-target="#modalLayanan{{ $layanan->id }}">
                            Lihat Persyaratan
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal Persyaratan -->
            <div class="modal fade" id="modalLayanan{{ $layanan->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $layanan->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-4">
                        <div class="modal-header border-0">
                            <h5 class="modal-title fw-bold" id="modalLabel{{ $layanan->id }}">{{ $layanan->layanan }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {!! $layanan->persyaratan !!}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<style>
.layanan-card {
    transition: box-shadow 0.3s, transform 0.2s;
    background: #fff;
}
.layanan-card:hover {
    box-shadow: 0 8px 32px rgba(0,123,255,0.18);
    transform: translateY(-4px) scale(1.03);
}
.icon-gradient {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    font-size: 2.2rem;
    border-radius: 50%;
    background: linear-gradient(135deg, #0d6efd 60%, #00c6ff 100%);
    color: #fff;
    box-shadow: 0 2px 12px rgba(0,123,255,0.12);
    transition: background 0.3s, transform 0.2s;
}
.layanan-card:hover .icon-gradient {
    background: linear-gradient(135deg, #ffd54f 60%, #00c6ff 100%);
    transform: scale(1.08) rotate(-8deg);
}
.btn-gradient {
    background: linear-gradient(90deg,#0d6efd,#00c6ff);
    color: #fff;
    border: none;
    border-radius: 24px;
    font-weight: 600;
    box-shadow: 0 2px 8px rgba(0,123,255,0.10);
    transition: background 0.3s, transform 0.2s;
}
.btn-gradient:hover, .btn-gradient:focus {
    background: linear-gradient(90deg,#ffd54f,#00c6ff);
    color: #232526;
    transform: scale(1.05);
}
.modal-content {
    border-radius: 24px;
}
</style>
@endsection