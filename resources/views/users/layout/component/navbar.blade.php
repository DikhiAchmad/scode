{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4">
    <div class="container">
        <a class="navbar-brand me-5" href="{{ url('/') }}"><img src="{{ asset('assets/image/scode.png') }}"
                alt="logo" class="logo" height="20"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-sm-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-md-3 my-sm-2">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item px-md-3 my-sm-2">
                    <a class="nav-link" href="{{ url('kelas') }}">Kelas</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item px-md-3 my-sm-2">
                    <a class="nav-link link-info btn-rounded" aria-current="page" href="{{ url('login') }}">Login</a>
                </li>
                <li class="nav-item px-md-3 my-sm-2">
                    <a class="nav-link link-navy btn-rounded" href="{{ url('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- end navbar --}}
