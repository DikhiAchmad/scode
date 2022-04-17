@extends('pengajar.layout.index')
@section('title', 'update Pengajar')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Update Pengajar</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin_dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Update Pengajar</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('kelola_kelas.update', $kelola->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>nama kelas</label>
                                        <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror"
                                            placeholder="masukkan nama kelas" name="nama_kelas"
                                            value="{{ $kelola->nama_kelas }}">
                                        @error('nama_kelas')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" class="form-control" name="gambar">
                                    </div>
                                    <div class="form-group">
                                        <label>deskripsi</label>
                                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                            placeholder="masukkan deskripsi" name="deskripsi"
                                            value="{{ $kelola->deskripsi }}">
                                        @error('deskripsi')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('kelola_kelas.index') }}" class="btn btn-info mr-3">kembali</a>
                                        <button type="submit" class="btn btn-success">edit data</button>
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
