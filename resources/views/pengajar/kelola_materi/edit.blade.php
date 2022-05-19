@extends('pengajar.layout.index')
@section('title', 'update Materi')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Update Materi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin_dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Update Materi</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('kelola_materi.update', $kelola->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>kelas</label>
                                        <select class="custom-select" name="kelas_id">
                                            <option value="">pilih kelas</option>
                                            @foreach ($data as $datas)
                                                <option @if ($kelola->kelas_id == $datas->id) selected @endif
                                                    value="{{ $datas->id }}">{{ $datas->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>link video</label>
                                        <input type="text" class="form-control @error('link_video') is-invalid @enderror"
                                            placeholder="masukkan link video" name="link_video"
                                            value="{{ $kelola->link_video }}">
                                        @error('link_video')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>judul kelas</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                            placeholder="masukkan nama judul" name="judul" value="{{ $kelola->judul }}">
                                        @error('judul')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>isi</label>
                                        <textarea class="summernote" name="isi">{{ $kelola->isi }}</textarea>
                                        @error('isi')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('kelola_materi.index') }}"
                                            class="btn btn-info mr-3">kembali</a>
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
