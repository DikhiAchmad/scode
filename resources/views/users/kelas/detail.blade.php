@extends('users.layout.index')
@section('title', 'Scode | Homepage')
@section('content')
    <div class="container section-3 py-5">
        <div class="section-desc text-center">
            <h1 class="title">Detail Kelas</h1>
            <p class="desc">belajar php untuk pemula.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('assets/image/banner.jpg') }}" alt="focusing study" class="image-full">
            </div>
            <div class="col-lg-6 description">
                <h1 class="title">Belajar PHP untuk Pemula</h1>
                <p class="desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer yang digunakan pada
                    bagian back-end website untuk mengatur logika dan interaksi dengan database.</p>
                <a href="" class="link-navy btn-square btn">Gabung Kelas</a>
            </div>
        </div>
    </div>
@endsection
