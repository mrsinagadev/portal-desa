@extends('layouts.main')

@section('content')
<section id="posyandu-page" class="d-flex align-items-center justify-content-center" style="min-height:60vh;">
    <div class="text-center">
         <img src="https://undraw.co/api/illustrations/undraw_page_not_found_re_e9o6.svg" 
             alt="Page Not Found" style="width:220px;" class="mb-4">
        <h1 class="fw-bold text-gradient mb-2">Halaman PKK</h1>
        <p class="fs-5 text-muted mb-3">Maaf, halaman ini masih dalam tahap pengembangan.</p>
        <a href="/" class="btn btn-gradient-modern px-4 py-2">
            <i class="bi bi-arrow-left-circle me-2"></i> Kembali ke Beranda
        </a>
    </div>
</section>
<style>
#posyandu-page .text-gradient {
    background: linear-gradient(90deg,#0d6efd,#00c6ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.btn-gradient-modern {
    background: linear-gradient(90deg,#0d6efd,#00c6ff);
    color: #fff;
    border: none;
    border-radius: 32px;
    font-weight: 600;
    font-size: 1.1rem;
    box-shadow: 0 2px 12px rgba(0,123,255,0.10);
    transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}
.btn-gradient-modern:hover, .btn-gradient-modern:focus {
    background: linear-gradient(90deg,#ffd54f,#00c6ff);
    color: #232526;
    transform: scale(1.06) translateY(-2px);
    box-shadow: 0 4px 16px rgba(0,198,255,0.15);
    text-decoration: none;
}
</style>
@endsection