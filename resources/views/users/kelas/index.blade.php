@extends('users.layout.index')
@section('title', 'Scode | Homepage')
@section('content')
    <div class="container section-3 py-5">
        <div class="section-desc text-center">
            <h1 class="title">Daftar Kelas</h1>
            <p class="desc">Temukan dan Pelajari ilmu baru <br />
                sesuai yang kamu inginkan.</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-kelas">
                    <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                    <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                    <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer yang digunakan
                        pada
                        bagian back-end...</p>
                    <a href="{{ url('kelas') }}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-kelas">
                    <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                    <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                    <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer yang digunakan
                        pada
                        bagian back-end...</p>
                    <a href="{{ url('kelas') }}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-kelas">
                    <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                    <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                    <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer yang digunakan
                        pada
                        bagian back-end...</p>
                    <a href="{{ url('kelas') }}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-kelas">
                    <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                    <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                    <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer yang digunakan
                        pada
                        bagian back-end...</p>
                    <a href="{{ url('kelas') }}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-kelas">
                    <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                    <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                    <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer yang digunakan
                        pada
                        bagian back-end...</p>
                    <a href="{{ url('id') }}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-kelas">
                    <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                    <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                    <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer yang digunakan
                        pada
                        bagian back-end...</p>
                    <a href="{{ url('kelas') }}" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
@endsection
