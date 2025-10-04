@extends('layouts.main')

@section('content')
<section id="contact" class="contact py-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center mb-5">
            <h2 class="fw-bold text-dark">Kontak Kami</h2>
            <div class="mx-auto" style="width: 80px; height: 4px; background: linear-gradient(90deg,#0d6efd,#00c6ff); border-radius: 2px;"></div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up">
                <div class="card shadow-lg border-0 rounded-4 h-100">
                    <div class="card-body p-0">
                        <div class="info-box p-0">
                            <div class="d-flex flex-column align-items-center py-4">
                                <span class="icon-gradient mb-3"><i class="bx bx-map" style="color: white"></i></span>
                                <h4 class="fw-bold mb-2">Lokasi Desa</h4>
                                <iframe width="100%" height="320" frameborder="0" style="border-radius:16px;" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=320&amp;hl=en&amp;q={{ urlencode($kontak->lokasi) }}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="card shadow border-0 rounded-4 h-100">
                            <div class="card-body text-center py-4">
                                <span class="icon-gradient mb-3"><i class="bx bx-envelope"></i></span>
                                <h4 class="fw-bold mb-2">Email Kami</h4>
                                <p class="mb-0 fs-5">{{ $kontak->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow border-0 rounded-4 h-100">
                            <div class="card-body text-center py-4">
                                <span class="icon-gradient mb-3"><i class="bx bx-phone-call"></i></span>
                                <h4 class="fw-bold mb-2">Nomor HP Kami</h4>
                                <p class="mb-0 fs-5">{{ $kontak->no_hp }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow border-0 rounded-4 h-100">
                            <div class="card-body text-center py-4">
                                <span class="icon-gradient mb-3"><i class="bx bx-phone-call"></i></span>
                                <h4 class="fw-bold mb-2">Nomor Ambulance</h4>
                                <p class="mb-0 fs-5">081234567890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.icon-gradient {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 56px;
    height: 56px;
    font-size: 2rem;
    border-radius: 50%;
    background: linear-gradient(135deg, #0d6efd 60%, #00c6ff 100%);
    color: #fff;
    box-shadow: 0 2px 12px rgba(0,123,255,0.12);
    transition: background 0.3s, transform 0.2s;
}
.card:hover .icon-gradient {
    background: linear-gradient(135deg, #ffd54f 60%, #00c6ff 100%);
    transform: scale(1.08) rotate(-8deg);
}
.card {
    transition: box-shadow 0.3s, transform 0.2s;
}
.card:hover {
    box-shadow: 0 8px 32px rgba(0,123,255,0.18);
    transform: translateY(-4px) scale(1.02);
}
</style>
@endsection