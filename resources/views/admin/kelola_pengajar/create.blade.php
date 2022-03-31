@extends('admin.layout.index')
@section('title', 'create Pengajar')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Create Pengajar</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin_dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Create Pengajar</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('kelola_pengajar.store') }}">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label>name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="masukkan nama" name="name">
                                        @error('name')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>telepon</label>
                                        <input type="number" class="form-control @error('telp') is-invalid @enderror"
                                            placeholder="masukkan nomor telepon" name="telp">
                                        @error('telp')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">jenis kelamin</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                id="exampleRadios1" value="L">
                                            <label class="form-check-label" for="exampleRadios1">
                                                laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                id="exampleRadios2" value="P">
                                            <label class="form-check-label" for="exampleRadios2">
                                                perempuan
                                            </label>
                                        </div>
                                        @error('jenis_kelamin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="masukkan email" name="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            placeholder="masukkan password" name="password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('kelola_pengajar.index') }}"
                                            class="btn btn-info mr-3">kembali</a>
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
