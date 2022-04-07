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
                <img src="{{ asset('assets/image/' . $details->gambar) }}" alt="focusing study" class="image-full">
            </div>
            <div class="col-lg-6 description">
                <h1 class="title">{{ $details->nama_kelas }}</h1>
                <p class="desc-kelas">{{ $details->deskripsi }}</p>
                <form action="{{ route('kelas.store') }}" method="GET">
                    @csrf
                    @method('POST')
                    <input type="hidden" value="{{ $details->id }}" name="kelas_id">
                    <button type="submit" class="link-navy btn-square btn">Gabung Kelas</button>
                </form>
            </div>
        </div>
    </div>
@endsection
