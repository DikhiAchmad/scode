@extends('admin.layout.index')
@section('title', 'Edit Jawaban Quiz')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Edit Jawaban Quiz</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin_dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Edit Jawaban Quiz</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('setting_jawaban.update', $quiz_jawaban->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Nama Soal</label>
                                        <input type="text" value="{{ old('quiz_soal_id', $quiz_jawaban->quiz_soal->pertanyaan) }}"
                                            class="form-control @error('quiz_soal_id') is-invalid @enderror" readonly>
                                        <input type="hidden" value="{{ old('quiz_soal_id', $quiz_jawaban->quiz_soal_id) }}"
                                            class="form-control @error('quiz_soal_id') is-invalid @enderror" name="quiz_soal_id" readonly>
                                        @error('quiz_soal_id')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban</label>
                                        <input type="text" value="{{ old('jawaban', $quiz_jawaban->jawaban) }}"
                                            class="form-control @error('jawaban') is-invalid @enderror" name="jawaban">
                                        @error('jawaban')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jawaban_benar" class="form-label fs-6">Jawaban Benar</label>
                                        <select id="jawaban_benar" class="form-select @error('jawaban_benar') is-invalid @enderror"
                                            name="jawaban_benar">
                                            <option selected>Pilih...</option>
                                            @if (old('jawaban_benar', $quiz_jawaban->jawaban_benar) == 1)
                                                <option value=1 selected>Benar</option>
                                                <option value=0 >Salah</option>
                                            @else
                                                <option value=1>Benar</option>
                                                <option value=0 selected>Salah</option>
                                            @endif
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="form-label fs-6">Status</label>
                                        <select id="status" class="form-select @error('status') is-invalid @enderror"
                                            name="status">
                                            <option selected>Pilih...</option>
                                            @if (old('status', $quiz_jawaban->status) == 1)
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
