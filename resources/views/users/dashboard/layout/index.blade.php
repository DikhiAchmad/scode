<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Scode | dashboard</title>
    <link rel="stylesheet" href={{ asset('assets/style/style.css') }}>
    <link rel="stylesheet" href={{ asset('assets/style/components.css') }}>
    <link rel="stylesheet" href="{{ mix('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html"><img src="{{ asset('assets/image/scode.png') }}" alt="logo"
                                class="logo" height="20"></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">Sc</a>
                    </div>
                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> Back to Homepage
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="active"><a class="nav-link" href="{{ url('dashboard') }}"><i
                                    class="fab fa-accusoft"></i> <span>Kelas</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Kelas</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="{{ url('/') }}">Home</a></div>
                            <div class="breadcrumb-item">Kelas</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-kelas">
                                <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                                <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                                <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer
                                    yang digunakan
                                    pada
                                    bagian back-end...</p>
                                <a href="{{ url('kelas') }}" class="stretched-link"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-kelas">
                                <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                                <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                                <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer
                                    yang digunakan
                                    pada
                                    bagian back-end...</p>
                                <a href="{{ url('kelas') }}" class="stretched-link"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-kelas">
                                <img src="{{ asset('assets/image/banner.jpg') }}" alt="banner kelas">
                                <h1 class="card-title-kelas">Belajar PHP untuk Pemula</h1>
                                <p class="card-desc-kelas">Berkenalan dengan php, bahasa program yang sangat populer
                                    yang digunakan
                                    pada
                                    bagian back-end...</p>
                                <a href="{{ url('kelas') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; {{ date('Y') }} <div class="bullet"></div> Dikhi Achmad Dani, All
                    right reserved.
                </div>
                <div class="footer-right">
                    {{-- 2.3.0 --}}
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ mix('js/dashboard.js') }}"></script>
    <script src={{ asset('assets/js/stisla.js') }}></script>

    <script src={{ asset('assets/js/scripts.js') }}></script>
    <script src={{ asset('assets/js/custom.js') }}></script>
</body>

</html>
