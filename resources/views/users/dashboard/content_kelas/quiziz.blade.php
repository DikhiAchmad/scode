@extends('users.dashboard.content_kelas.layout.index')
@section('title', 'SCode | Quiz')
@section('content')
    <section class="section">
        <div class="section-header">
                <h1>Belajar PHP Dasar Pengenalan Dan Kegunaan PHP</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/') }}">Home</a></div>
                <div class="breadcrumb-item">Kelas</div>
                <div class="breadcrumb-item">Quiz</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="header-content">Quiz</h1>
                            </div>
                        </div>

                    </div>


                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="header-content">sistem penyimpanan informasi data yang besar juga kompleks ?</h1>

                                    <form method="POST" action="{{ route('kelola_kelas.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group">
                                            <div class="form-check my-4">
                                                <input class="form-check-input" type="radio" name="pilihan_1" id="exampleRadios1"
                                                    checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    server
                                                </label>
                                            </div>
                                            <div class="form-check my-4">
                                                <input class="form-check-input" type="radio" name="pilihan_2" id="exampleRadios2">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    hard disk
                                                </label>
                                            </div>
                                            <div class="form-check my-4">
                                                <input class="form-check-input" type="radio" name="pilihan_3" id="exampleRadios3">
                                                <label class="form-check-label" for="exampleRadios3">
                                                    hard disk
                                                </label>
                                            </div>
                                            <div class="form-check my-4">
                                                <input class="form-check-input" type="radio" name="pilihan_4" id="exampleRadios4">
                                                <label class="form-check-label" for="exampleRadios4">
                                                    server
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <nav aria-label="...">
                                <ul class="pagination pagination-lg">
                                  <li class="page-item active" aria-current="page">
                                    <span class="page-link">1</span>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                                  <li class="page-item"><a class="page-link" href="#">End Quiz</a></li>
                                </ul>
                              </nav>
                        </div>


                {{-- <div class="col-md-12 d-flex justify-content-between"> --}}
                    {{-- @foreach ($data as $s)
                        @if ()

                        @endif
                    @endforeach --}}
                    {{-- <form action="">
                        <button type="submit" class="btn-prev">prev</button>
                    </form>

                    <button type="submit" class="btn-next">next</button>
                </div> --}}
            </div>
        </div>

    </section>
@endsection
