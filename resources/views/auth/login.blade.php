@extends('users.layout.index')
@section('title', 'Scode | login')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5 former">
                <h1 class="fw-bolder text-center mb-5">Let’s <br />Get Started!</h1>
                <form class="" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <input type="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Email-Address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4 text-end">
                        <a href="" class="link-form">lupa password?</a>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-full-navy">Login</button>
                    </div>
                    <a href="" class="btn btn-full-greenlight">Register</a>
                </form>
            </div>
        </div>
    </div>
@endsection
