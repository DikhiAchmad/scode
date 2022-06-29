@extends('admin.layout.index')
@section('title', 'Tambah Jawaban Quiz')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Tambah Jawaban Quiz</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin_dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Tambah Jawaban Quiz</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('setting_jawaban.store') }}">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label for="quiz_soal_id" class="form-label">Pilih Soal</label>
                                        <select id="quiz_soal_id"
                                            class="form-select @error('quiz_soal_id') is-invalid @enderror"
                                            name="quiz_soal_id">
                                            <option selected>Pilih...</option>
                                            @foreach ($quiz_soal as $soal)
                                                <option value="{{ $soal->id }}">{{ $soal->pertanyaan }} -
                                                    {{ $soal->quiziz->nama }} - {{ $soal->quiziz->materi->judul }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('quiz_soal_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban 1</label>
                                        <input type="text" class="form-control @error('jawaban') is-invalid @enderror"
                                            placeholder="Masukkan jawaban soal" name="jawaban">
                                        @error('jawaban')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jawaban_benar" class="form-label fs-6">Jawaban Benar</label>
                                        <select id="jawaban_benar"
                                            class="form-select @error('jawaban_benar') is-invalid @enderror"
                                            name="jawaban_benar">
                                            <option selected>Pilih...</option>
                                            <option value=1>Benar</option>
                                            <option value=0>Salah</option>
                                        </select>
                                        @error('jawaban_benar')
                                            <div class="text-danger">{{ $message }}</div>
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
                                        <label>Jawaban 2</label>
                                        <input type="text" class="form-control @error('jawaban_2') is-invalid @enderror"
                                            placeholder="Masukkan jawaban soal" name="jawaban_2">
                                        @error('jawaban_2')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jawaban_benar_2" class="form-label fs-6">Jawaban Benar</label>
                                        <select id="jawaban_benar_2"
                                            class="form-select @error('jawaban_benar_2') is-invalid @enderror"
                                            name="jawaban_benar_2">
                                            <option selected>Pilih...</option>
                                            <option value=1>Benar</option>
                                            <option value=0>Salah</option>
                                        </select>
                                        @error('jawaban_benar_2')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status_2" class="form-label fs-6">Status</label>
                                        <select id="status_2" class="form-select @error('status_2') is-invalid @enderror"
                                            name="status_2">
                                            <option selected>Pilih...</option>
                                            <option value=1>Aktif</option>
                                            <option value=0>Tidak Aktif</option>
                                        </select>
                                        @error('status_2')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban 3</label>
                                        <input type="text" class="form-control @error('jawaban_3') is-invalid @enderror"
                                            placeholder="Masukkan jawaban soal" name="jawaban_3">
                                        @error('jawaban_3')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jawaban_benar_3" class="form-label fs-6">Jawaban Benar</label>
                                        <select id="jawaban_benar_3"
                                            class="form-select @error('jawaban_benar_3') is-invalid @enderror"
                                            name="jawaban_benar_3">
                                            <option selected>Pilih...</option>
                                            <option value=1>Benar</option>
                                            <option value=0>Salah</option>
                                        </select>
                                        @error('jawaban_benar_3')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status_3" class="form-label fs-6">Status</label>
                                        <select id="status_3" class="form-select @error('status_3') is-invalid @enderror"
                                            name="status_3">
                                            <option selected>Pilih...</option>
                                            <option value=1>Aktif</option>
                                            <option value=0>Tidak Aktif</option>
                                        </select>
                                        @error('status_3')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban 4</label>
                                        <input type="text" class="form-control @error('jawaban_4') is-invalid @enderror"
                                            placeholder="Masukkan jawaban soal" name="jawaban_4">
                                        @error('jawaban_4')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jawaban_benar_4" class="form-label fs-6">Jawaban Benar</label>
                                        <select id="jawaban_benar_4"
                                            class="form-select @error('jawaban_benar_4') is-invalid @enderror"
                                            name="jawaban_benar_4">
                                            <option selected>Pilih...</option>
                                            <option value=1>Benar</option>
                                            <option value=0>Salah</option>
                                        </select>
                                        @error('jawaban_benar_4')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status_4" class="form-label fs-6">Status</label>
                                        <select id="status_4" class="form-select @error('status_4') is-invalid @enderror"
                                            name="status_4">
                                            <option selected>Pilih...</option>
                                            <option value=1>Aktif</option>
                                            <option value=0>Tidak Aktif</option>
                                        </select>
                                        @error('status_4')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('setting_jawaban.index') }}"
                                            class="btn btn-info mr-3">Kembali</a>
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
