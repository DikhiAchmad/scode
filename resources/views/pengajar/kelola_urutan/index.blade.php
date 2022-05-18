@extends('pengajar.layout.index')
@section('title', 'kelola kelas')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>kelola urutan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">kelola urutan</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>kelola urutan</h4>
                            <a href="{{ route('kelola_urutan.create') }}" class="btn btn-success">create</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">no</th>
                                        <th scope="col">urutan</th>
                                        <th scope="col">kelas</th>
                                        <th scope="col">materi</th>
                                        <th scope="col" class="text-center">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $materi)
                                        <tr>
                                            <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                            <td class="text-center">{{ $materi->urutan }}</td>
                                            <td class="text-center">
                                                <p>{{ $materi->nama_kelas }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p>{{ $materi->judul }}</p>
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center">
                                                <a href="{{ route('kelola_urutan.edit', $materi->id) }}"
                                                    class="btn btn-warning mr-2"><i class="fas fa-pen"></i></a>
                                                <form method="POST"
                                                    action="{{ route('kelola_urutan.destroy', $materi->id) }}">
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
