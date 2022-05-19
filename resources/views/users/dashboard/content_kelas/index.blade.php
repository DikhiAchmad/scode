@extends('users.dashboard.content_kelas.layout.index')
@section('title', 'SCode | Content')
@section('content')
    <section class="section">
        <div class="section-header">
            @foreach ($data as $dt)
                <h1>{{$dt->judul}}</h1>
            @endforeach
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/') }}">Home</a></div>
                <div class="breadcrumb-item">Kelas</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                @forelse ($data as $item)
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <iframe class="videos-content" src="{{ $item->link_video }}">
                                </iframe>
                                {!! $item->isi !!}
                            </div>
                        </div>
                    </div>

                @empty
                    <h1>tidak ada</h1>
                @endforelse
                @forelse ($quiz as $q)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="header-content">{{$q->pertanyaan}}</h1>
                            <form action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="form-check my-4">
                                        <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios1"
                                            checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            {{$q->pilihan_1}}
                                        </label>
                                    </div>
                                    <div class="form-check my-4">
                                        <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            {{$q->pilihan_2}}
                                        </label>
                                    </div>
                                    <div class="form-check my-4">
                                        <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios3">
                                        <label class="form-check-label" for="exampleRadios3">
                                            {{$q->pilihan_3}}
                                        </label>
                                    </div>
                                    <div class="form-check my-4">
                                        <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios4">
                                        <label class="form-check-label" for="exampleRadios4">
                                            {{$q->pilihan_4}}
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse

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
