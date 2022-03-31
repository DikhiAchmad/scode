@extends('users.layout.index')
@section('title', 'Scode | Homepage')
@section('content')
    {{-- front page --}}
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('assets/image/frontpage.jpg') }}" alt="focusing study" class="image-full">
            </div>
            <div class="col-lg-6 description">
                <p class="sub-title">Learn Comfortably</p>
                <h1 class="title">Belajar Hal Baru Dengan Metode <br />
                    Belajar Yang Nyaman.</h1>
                <p class="desc">Sebuah platform yang memfasilitasi pembelajar agar dapat memahami suatu
                    topik dengan metode berupa text maupun video dan disusun berdasarkan sebuah studi kasus yang juga
                    sejalan dengan kebutuhan industri saat ini.</p>
                <a href="" class="link-navy btn-rounded btn">Let's Go</a>
            </div>
        </div>
    </div>
    {{-- end front page --}}
    {{-- section 2 --}}
    <div class="container section-2 py-5">
        <h1 class="title">Apa yang Kamu <br /> dapatkan Disini ?</h1>
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="row card-grey align-items-center">
                    <div class="col-7">
                        <img src="{{ asset('assets/image/folder.png') }}" alt="folder">
                        <p class="desc-get">Belajar bisa berupa Text dan Video</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row card-grey align-items-center">
                    <div class="col-7">
                        <img src="{{ asset('assets/image/tas.png') }}" alt="folder">
                        <p class="desc-get">Project <br /> Portofolio</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row card-grey align-items-center">
                    <div class="col-7">
                        <img src="{{ asset('assets/image/kunci.png') }}" alt="folder">
                        <p class="desc-get">Akses untuk Selamanya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end section 2 --}}

    {{-- section 3 --}}
    <div class="container section-3 py-5">
        <div class="section-desc text-center">
            <h1 class="title">Kelas Popular</h1>
            <p class="desc">kelas yang paling banyak diambil oleh member kami.</p>
        </div>
        <div class="row">
            @forelse ($kelas as $list)
                <div class="col-md-4">
                    <div class="card-kelas">
                        <img src="{{ asset('assets/image/' . $list->gambar) }}" alt="banner kelas">
                        <h1 class="card-title-kelas">{{ $list->nama_kelas }}</h1>
                        <p class="card-desc-kelas">{{ $list->deskripsi }}</p>
                        {{-- <a href="" class="stretched-link"></a> --}}
                        <a href="{{ route('kelas.show', $list->id) }}" class="stretched-link"></a>
                    </div>
                </div>
            @empty
                <h1>tidak ada kelas</h1>
            @endforelse
        </div>
        <div class="text-center mt-3">
            <a href="{{ url('list_kelas') }}" class="link-info btn-rounded btn fw-bold">lihat selengkapnya</a>
        </div>
    </div>
    {{-- end section 3 --}}
@endsection
