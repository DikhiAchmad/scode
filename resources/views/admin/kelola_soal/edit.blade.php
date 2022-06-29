@extends('admin.layout.index')
@section('title', 'Edit Soal Quiz')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Edit Soal Quiz</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin_dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Edit Soal Quiz</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('setting_soal.update', $quiz_soal->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Nama Quiz</label>
                                        <input type="text" value="{{ old('quiziz_id', $quiz_soal->quiziz->nama) }}"
                                            class="form-control @error('quiziz_id') is-invalid @enderror" readonly>
                                        <input type="hidden" value="{{ old('quiziz_id', $quiz_soal->quiziz_id) }}"
                                            class="form-control @error('quiziz_id') is-invalid @enderror" name="quiziz_id" readonly>
                                        @error('quiziz_id')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Pertanyaan</label>
                                        <input type="text" value="{{ old('pertanyaan', $quiz_soal->pertanyaan) }}"
                                            class="form-control @error('pertanyaan') is-invalid @enderror" name="pertanyaan">
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
                                            @if (old('status', $quiz_soal->status) == 1)
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
