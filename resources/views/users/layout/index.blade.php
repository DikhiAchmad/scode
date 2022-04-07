<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/bundle.css') }}">
</head>

<body>
    @include('sweetalert::alert')
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
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item px-md-3 my-sm-2">
                        <a class="nav-link {{ Request::is('list_kelas') ? 'active' : '' }}"
                            href="{{ url('list_kelas') }}">Kelas</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto align-items-center">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item px-md-3 my-sm-2">
                                <a class="nav-link link-info btn-rounded" aria-current="page"
                                    href="{{ url('login') }}">Login</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item px-md-3 my-sm-2">
                                <a class="nav-link link-navy btn-rounded" href="{{ url('register') }}">Register</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->status == 'user')
                                    <li><a class="dropdown-item" href="{{ route('dashboard.index') }}">dashboard
                                            kelas</a>
                                    </li>
                                @elseif (Auth::user()->status == 'pengajar')
                                    <li><a class="dropdown-item"
                                            href="{{ route('pengajar_dashboard.index') }}">dashboard
                                            pengajar</a>
                                    </li>
                                @elseif (Auth::user()->status == 'admin')
                                    <li><a class="dropdown-item" href="{{ route('admin_dashboard.index') }}">dashboard
                                            admin</a>
                                    </li>
                                @endif

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                    document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    @yield('content')

    {{-- footer --}}
    <footer class="bg-navy py-5 mt-5">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-3 me-5">
                    <img src="{{ asset('assets/image/Scode-whit.png') }}" alt="">
                    <p class="desc-footer my-4">platform edukasi tentang programming dalam bahasa Indonesia. let's work
                        and
                        always be creative.</p>
                    <div class="row">
                        <div class="col-2">
                            <a href=""><img src="{{ asset('assets/image/icon/ig.png') }}" alt=""></a>
                        </div>
                        <div class="col-2">
                            <a href=""><img src="{{ asset('assets/image/icon/in.png') }}" alt=""></a>
                        </div>
                        <div class="col-2">
                            <a href=""><img src="{{ asset('assets/image/icon/yt.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h1 class="title-menu">Menu</h1>
                    <div class="row menu-section">
                        <div class="col-12 menu">
                            <a href="{{ url('/') }}" class="">Home</a>
                        </div>
                        <div class="col-12 menu">
                            <a href="{{ url('list_kelas') }}" class="">Kelas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="bg-navy text-center py-4">
        <p class="copyright">Copyright @ {{ date('Y') }} DIkhi Achmad Dani, All right Reserved.</p>
    </div>
    {{-- end footer --}}


    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
