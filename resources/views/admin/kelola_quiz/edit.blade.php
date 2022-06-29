@extends('admin.layout.index')
@section('title', 'Edit Quiz')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Edit Quiz</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin_dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Edit Quiz</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('setting_quiz.update', $quiziz->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" value="{{ old('nama', $quiziz->nama) }}"
                                            class="form-control @error('nama') is-invalid @enderror" name="nama">
                                        @error('nama')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="materi_id" class="form-label">Pilih Materi</label>
                                        <select id="materi_id" class="form-select @error('materi_id') is-invalid @enderror"
                                            name="materi_id">
                                            <option selected>Pilih...</option>
                                            @foreach ($materis as $materi)
                                                @if (old('materi_id', $materi->id) == $quiziz->materi_id)
                                                    <option selected value="{{ $materi->id }}">{{ $materi->judul }}
                                                    </option>
                                                @else
                                                    <option value="{{ $materi->id }}">{{ $materi->judul }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('materi_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai Soal</label>
                                        <input type="text" value="{{ old('nilai_soal', $quiziz->nilai_soal) }}"
                                            class="form-control @error('nilai_soal') is-invalid @enderror"
                                            name="nilai_soal">
                                        @error('nilai_soal')
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
                                            @if (old('status', $quiziz->status) == 1)
                                                <option value=1 selected>Aktif</option>
                                                <option value=0 >Tidak Aktif</option>
                                            @else
                                                <option value=1>Aktif</option>
                                                <option value=0 selected>Tidak Aktif</option>
                                            @endif
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('setting_quiz.index') }}" class="btn btn-info mr-3">Kembali</a>
                                        <button type="submit" class="btn btn-success">Edit Data</button>
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
