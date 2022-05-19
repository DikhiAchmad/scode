@extends('pengajar.layout.index')
@section('title', 'kelola kelas')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>kelola materi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">kelola materi</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>kelola materi</h4>
                            <a href="{{ route('kelola_materi.create') }}" class="btn btn-success">create</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">no</th>
                                        <th scope="col">nama kelas</th>
                                        <th scope="col">link video</th>
                                        <th scope="col">judul materi</th>
                                        <th scope="col">isi</th>
                                        <th scope="col" class="text-center">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $materi)
                                        <tr>
                                            <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                            <th class="text-center">{{ $materi->nama_kelas }}</th>
                                            <td class="text-center"><iframe style="width: 200px; height: 100px;"
                                                    class="videos-content" src="{{ $materi->link_video }}">
                                                </iframe></td>
                                            <td class="text-center">{{ $materi->judul }}</td>
                                            <td style="width: 30%;">
                                                <p
                                                    style="overflow: hidden; max-width: 100px;
                                                                                                                                                                display: -webkit-box;
                                                                                                                                                                -webkit-line-clamp: 1;
                                                                                                                                                                -webkit-box-orient: vertical;">
                                                    {{ $materi->isi }}</p>
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center">
                                                <a href="{{ route('kelola_materi.edit', $materi->id) }}"
                                                    class="btn btn-warning mr-2"><i class="fas fa-pen"></i></a>
                                                <form method="POST"
                                                    action="{{ route('kelola_materi.destroy', $materi->id) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <button type="submit"
                                                        onclick="return confirm('Anda yakin ingin menghapus data ini?')"
                                                        class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <h1>data kosong</h1>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
