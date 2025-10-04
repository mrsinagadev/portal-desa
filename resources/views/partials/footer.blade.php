<!-- filepath: c:\laragon\www\portal-desa\resources\views\partials\footer.blade.php -->
<footer id="footer" class="footer-modern text-light pt-5">
    <div class="container">
        <div class="row gy-4 align-items-center justify-content-center text-center">
            <!-- Logo & Info -->
            <div class="col-lg-7 col-md-10 mx-auto mb-4 mb-lg-0">
                <div class="d-flex flex-column align-items-center mb-3">
                    <h3 class="fw-bold text-gradient mb-0">{{ $nm_desa }}</h3>
                    <span class="badge bg-warning text-dark fs-6 px-3 py-1 mt-1">{{ $kecamatan }},
                        {{ $kabupaten }}</span>
                </div>
                <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i>Provinsi {{ $provinsi }}, Kode Pos
                    {{ $kode_pos }}</p>
                <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i>{{ $no_hp }}</p>
                <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i>{{ $email }}</p>
                <div class="mt-3 d-flex justify-content-center gap-2">
                    <a href="https://www.facebook.com/pemdespujimulyo" target="_blank" class="social-icon facebook"
                        title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.tiktok.com/@pemdespujimulyo" target="_blank" class="social-icon tiktok"
                        title="Tiktok">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>
            </div>
            <!-- Tambahkan menu/footer lain di sini jika diperlukan -->
        </div>
        <hr class="my-4 border-light">
        <div class="text-center pb-3">
            <span class="copyright text-light fs-6">
                &copy; {{ date('Y') }} <strong>{{ $nm_desa }}</strong> - Deli Serdang. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>
<style>
    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        font-size: 1.6rem;
        background: #222;
        color: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
        transition: background 0.3s, color 0.3s, transform 0.2s, box-shadow 0.3s;
        border: 2px solid transparent;
    }

    .social-icon.facebook {
        background: #1877f2;
        color: #fff;
    }

    .social-icon.tiktok {
        background: linear-gradient(135deg, #000 60%, #25F4EE 100%);
        color: #fff;
    }

    .social-icon.facebook:hover {
        background: #fff;
        color: #1877f2;
        border-color: #1877f2;
        transform: scale(1.12) rotate(-8deg);
        box-shadow: 0 4px 16px rgba(24, 119, 242, 0.18);
    }

    .social-icon.tiktok:hover {
        background: #fff;
        color: #25F4EE;
        border-color: #25F4EE;
        transform: scale(1.12) rotate(8deg);
        box-shadow: 0 4px 16px rgba(37, 244, 238, 0.18);
    }

    .footer-modern .row {
        justify-content: center;
        text-align: center;
    }

    .footer-modern .col-lg-7 {
        margin-left: auto;
        margin-right: auto;
        float: none;
    }

    .footer-modern .d-flex {
        justify-content: center !important;
    }

    @media (max-width: 991px) {
        .footer-modern .row>div {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>
