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
