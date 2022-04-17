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
