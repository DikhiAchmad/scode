@extends('pengajar.layout.index')
@section('title', 'create Quiz')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Create urutan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin_dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Create urutan</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('kelola_urutan.store') }}">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label>urutan</label>
                                        <input type="text" class="form-control @error('urutan') is-invalid @enderror"
                                            placeholder="masukkan urutan" name="urutan">
                                        @error('urutan')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>kelas</label>
                                        <select class="custom-select" name="kelas_id">
                                            <option value="" selected>pilih kelas</option>
                                            @foreach ($kelas as $datas)
                                                <option value="{{ $datas->id }}">{{ $datas->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>materi</label>
                                        <select class="custom-select" name="materi_id">
                                            <option value="" selected>pilih materi</option>
                                            @foreach ($materi as $datas)
                                                <option value="{{ $datas->id }}">{{ $datas->judul }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('kelola_urutan.index') }}" class="btn btn-info mr-3">kembali</a>
                                        <button type="submit" class="btn btn-success">tambahkan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
