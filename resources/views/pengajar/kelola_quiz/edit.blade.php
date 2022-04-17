@extends('admin.layout.index')
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
                                <form method="POST" action="{{ route('kelola_quiz.update', $kelola->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>pertanyaan</label>
                                        <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror"
                                            placeholder="masukkan pertanyaan" name="pertanyaan"
                                            value="{{ $kelola->pertanyaan }}">
                                        @error('pertanyaan')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>pilihan 1</label>
                                        <input type="text" class="form-control @error('pilihan_1') is-invalid @enderror"
                                            placeholder="masukkan pilihan 1" name="pilihan_1"
                                            value="{{ $kelola->pilihan_1 }}">
                                        @error('pilihan_1')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>pilihan 2</label>
                                        <input type="text" class="form-control @error('pilihan_2') is-invalid @enderror"
                                            placeholder="masukkan pilihan 2" name="pilihan_2"
                                            value="{{ $kelola->pilihan_2 }}">
                                        @error('pilihan_2')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>pilihan 3</label>
                                        <input type="text" class="form-control @error('pilihan_3') is-invalid @enderror"
                                            placeholder="masukkan pilihan_3" name="pilihan_3"
                                            value="{{ $kelola->pilihan_3 }}">
                                        @error('pilihan_3')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>pilihan 4</label>
                                        <input type="text" class="form-control @error('pilihan_4') is-invalid @enderror"
                                            placeholder="masukkan pilihan 4" name="pilihan_4"
                                            value="{{ $kelola->pilihan_4 }}">
                                        @error('pilihan_4')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>jawaban benar</label>
                                        <input type="text" class="form-control @error('jawaban_benar') is-invalid @enderror"
                                            placeholder="masukkan jawaban benar" name="jawaban_benar"
                                            value="{{ $kelola->jawaban_benar }}">
                                        @error('jawaban_benar')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('kelola_pengajar.index') }}"
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
