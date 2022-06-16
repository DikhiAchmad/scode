@extends('users.dashboard.content_kelas.layout.index')
@section('title', 'SCode | Quiz')
@section('content')
    <section class="section">
        <div class="section-header">
                <h1>Quiz</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">Home</div>
            </div>
        </div>

        <div class="section-body">
            <form action="{{ route('quiz') }}" enctype="multipart/form-data">
            <div class="row">
                @forelse ($quiz as $q)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="header-content">{{$q->pertanyaan}}</h1>
                                <div class="form-group">
                                    <div class="form-check my-4">
                                        <input class="form-check-input" type="radio" name="jawaban{{$q->id}}" id="exampleRadios1"
                                            checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            {{$q->pilihan_1}}
                                        </label>
                                    </div>
                                    <div class="form-check my-4">
                                        <input class="form-check-input" type="radio" name="jawaban{{$q->id}}" id="exampleRadios2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            {{$q->pilihan_2}}
                                        </label>
                                    </div>
                                    <div class="form-check my-4">
                                        <input class="form-check-input" type="radio" name="jawaban{{$q->id}}" id="exampleRadios3">
                                        <label class="form-check-label" for="exampleRadios3">
                                            {{$q->pilihan_3}}
                                        </label>
                                    </div>
                                    <div class="form-check my-4">
                                        <input class="form-check-input" type="radio" name="jawaban{{$q->id}}" id="exampleRadios4">
                                        <label class="form-check-label" for="exampleRadios4">
                                            {{$q->pilihan_4}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <h1>null</h1>
                    @endforelse
                    <div class="col-md-12 text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </div>
                                </div>
                            </div>
                        </div>
            </div>
        </form>
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
                </div>
                        {{-- <div class="col-md-12">
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
                        </div> --}}


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
    </section>
@endsection
