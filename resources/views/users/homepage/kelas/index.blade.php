@extends('users.layout.index')
@section('title', 'Scode | Kelas')
@section('content')
    <div class="container section-3 py-5">
        <div class="section-desc text-center">
            <h1 class="title">Daftar Kelas</h1>
            <p class="desc">Temukan dan Pelajari ilmu baru <br />
                sesuai yang kamu inginkan.</p>
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
                <h1>data tidak ada</h1>
            @endforelse

        </div>
    </div>
@endsection
