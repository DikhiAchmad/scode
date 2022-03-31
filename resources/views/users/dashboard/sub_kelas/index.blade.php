@extends('users.dashboard.layout.index')
@section('title', 'dashboard kelas')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kelas</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/') }}">Home</a></div>
                    <div class="breadcrumb-item">Kelas</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-kelas">
                        <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                        <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                        <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer
                            yang digunakan
                            pada
                            bagian back-end...</p>
                        <a href="{{ url('kelas') }}" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-kelas">
                        <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                        <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                        <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer
                            yang digunakan
                            pada
                            bagian back-end...</p>
                        <a href="{{ url('kelas') }}" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-kelas">
                        <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                        <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                        <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer
                            yang digunakan
                            pada
                            bagian back-end...</p>
                        <a href="{{ route('kelas_saya.index') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
