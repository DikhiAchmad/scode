@extends('admin.layout.index')
@section('title', 'Tambah Soal Quiz')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Tambah Soal Quiz</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin_dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Tambah Soal Quiz</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('setting_soal.store') }}">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label for="quiziz_id" class="form-label">Pilih Quiz</label>
                                        <select id="quiziz_id" class="form-select @error('quiziz_id') is-invalid @enderror"
                                            name="quiziz_id">
                                            <option selected>Pilih...</option>
                                            @foreach ($quiziz as $quiz)
                                                <option value="{{ $quiz->id }}">{{ $quiz->nama }} - {{ $quiz->materi->judul }}</option>
                                            @endforeach
                                        </select>
                                        @error('quiziz_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Pertanyaan</label>
                                        <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror"
                                            placeholder="Masukkan pertanyaan quiz" name="pertanyaan">
                                        @error('pertanyaan')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="form-label fs-6">Status</label>
                                        <select id="status" class="form-select @error('status') is-invalid @enderror"
                                            name="status">
                                            <option selected>Pilih...</option>
                                            <option value=1>Aktif</option>
                                            <option value=0>Tidak Aktif</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('setting_soal.index') }}" class="btn btn-info mr-3">Kembali</a>
                                        <button type="submit" class="btn btn-success">Tambahkan</button>
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
