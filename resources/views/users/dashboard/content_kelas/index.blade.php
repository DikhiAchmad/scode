<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ mix('css/dashboard.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
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
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/image/scode.png') }}" alt="logo"
                                class="logo" height="20"></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="{{ url('/') }}">Sc</a>
                    </div>
                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="{{ route('dashboard.index') }}"
                            class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> kembali ke Dashboard
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="active"><a class="nav-link" href="{{ route('dashboard.index') }}"><i
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
                        <div class="col-md-12">
                            <iframe class="videos-content" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>

                            <h1 class="header-content">Belajar PHP Dasar Pengenalan Dan Kegunaan PHP</h1>
                            <p class="description-content">Selamat datang di tutorial PHP dasar Belajar PHP Part 1 :
                                Pengenalan PHP di malasngoding.com. anda yang sudah mulai memasuki tutorial dasar php
                                ini di asumsikan untuk mempelajari tentang HTML dan CSS dasar terlebih dahulu sebelum
                                melompat ke tutorial PHP. untuk tutorial HTML dan CSS dasar nya sendiri bisa anda ikuti
                                di tutorial-tutorial malasngoding.com. Akan sangat lebih baik jika bahasa pemrograman di
                                pelajari secara bertahap agar mengerti dari tiap dasar dan fungsi nya masing-masing. hal
                                ini dapat mengakibatkan anda menemukan kesulitan dalam mempelajari pemrograman php jika
                                HTML dan CSS dasar belum anda kuasai. sehingga dapat berujung kepada malas ngoding :).
                                Pada artikel Belajar PHP Part 1 : Pengenalan PHP ini akan di jelaskan tentang
                                pengenalan-pengenalan dari bahasa pemrograman PHP. seperti bagaimana bentuk penulisan
                                syntax PHP, sifat dari PHP, sktruktur nya dan bagaimana cara menjalankan file PHP.
                                berikut tentang pengenalan dasar bahasa pemrograman PHP.
                            </p>
                            <img class="image-content" src="{{ asset('assets/image/content/code.png') }}" alt="">
                        </div>
                        <div class="col-md-12 d-flex justify-content-between">
                            <form action="">
                                <button type="submit" class="btn-prev">prev</button>
                            </form>
                            <form action="">
                                <button type="submit" class="btn-next">next</button>
                            </form>
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
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
</body>

</html>