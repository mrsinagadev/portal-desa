@extends('layouts.main')

@section('content')
<section class="counts bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">{{ $wilayah->judul }}</h2>
            <div class="mx-auto" style="width: 80px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        </div>

        <!-- Content Card -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4 p-md-5">
                        <article class="fs-5 lh-lg text-secondary" style="text-align: justify;">
                            {!! $wilayah->body !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
