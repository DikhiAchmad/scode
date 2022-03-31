@extends('admin.layout.index')
@section('title', 'update member')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Update Member</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin_dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Update Member</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('kelola_users.update', $user->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="masukkan nama" name="name" value="{{ $user->name }}">
                                        @error('name')
                                            <span class="invalid-feedback " role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>telepon</label>
                                        <input type="number" class="form-control @error('telp') is-invalid @enderror"
                                            placeholder="masukkan nomor telepon" name="telp" value="{{ $user->telp }}">
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
                                                id="exampleRadios1" value="L"
                                                @if ($user->jenis_kelamin == 'L') checked @endif>
                                            <label class="form-check-label" for="exampleRadios1">
                                                laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                id="exampleRadios2" value="P"
                                                @if ($user->jenis_kelamin == 'P') checked @endif>
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
                                            placeholder="masukkan email" name="email" value="{{ $user->email }}">
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
                                        <a href="{{ route('kelola_users.index') }}" class="btn btn-info mr-3">kembali</a>
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
