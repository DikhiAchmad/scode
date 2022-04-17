@extends('users.dashboard.content_kelas.layout.index')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kelas</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/') }}">Home</a></div>
                <div class="breadcrumb-item">Kelas</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
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
                    </div>
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
        </div>

    </section>
@endsection
