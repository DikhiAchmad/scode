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
                @foreach ($data as $list)
                    <div class="col-md-4">
                        <div class="card-kelas">
                            <img src="{{ asset('assets/image/' . $list->kelas->gambar) }}" alt="banner kelas">
                            <h1 class="card-title-kelas">{{ $list->kelas->nama_kelas }}</h1>
                            <p class="card-desc-kelas">{{ $list->kelas->deskripsi }}</p>
                            <a href="{{ route('content', [$list->kelas->id, 1]) }}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
