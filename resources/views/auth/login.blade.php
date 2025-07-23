@extends('layouts.app')

@section('auth')
<style>
    body {
        background: linear-gradient(120deg, #1a237e 60%, #fbc02d 100%);
        min-height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .login-card {
        background: rgba(255,255,255,0.92);
        border-radius: 22px;
        box-shadow: 0 8px 32px 0 rgba(12, 24, 196, 0.18);
        backdrop-filter: blur(4px);
        border: 1px solid rgba(22, 21, 21, 0.007);
    }
    .logo-img img {
        border-radius: 12px;
        padding: 8px;
    }
    .form-label {
        font-weight: 600;
        color: #1a237e;
    }
    .btn-primary {
        background: linear-gradient(90deg, #1a237e 60%, #fbc02d 100%);
        border: none;
        font-weight: 600;
        letter-spacing: 1px;
    }
    .btn-primary:hover {
        background: linear-gradient(90deg, #fbc02d 60%, #1a237e 100%);
    }
    .alert {
        border-radius: 10px;
    }
</style>
<div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-md-8 col-lg-6 col-xxl-3">
        <div class="card mb-0 login-card">
            <div class="card-body">
                <div class="text-center mb-4">
                    <a href="/" class="logo-img d-block py-3 w-100">
                        <img src="{{ asset('admin/assets/images/auth/logo desa.png') }}" width="160" alt="Logo">
                    </a>
                    <h4 class="fw-bold mt-2 mb-0" style="color:#1a237e;">Portal Desa Pujimulyo</h4>
                    <p class="text-muted mb-0" style="font-size:15px;">Silakan login untuk masuk ke sistem</p>
                </div>
                @if (session()->has('password-success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('password-success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                            required autocomplete="email" autofocus>
                    </div>

                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password"
                            required autocomplete="current-password">
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input class="form-check-input primary" type="checkbox" name="remember"
                                id="flexCheckChecked">
                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                Ingat perangkat ini
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fs-5 mb-3 rounded-2">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection