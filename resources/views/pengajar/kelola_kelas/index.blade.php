@extends('pengajar.layout.index')
@section('title', 'kelola kelas')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>kelola kelas</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">kelola kelas</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>kelola kelas</h4>
                            <a href="{{ route('kelola_kelas.create') }}" class="btn btn-success">create</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">no</th>
                                        <th scope="col">gambar</th>
                                        <th scope="col">judul kelas</th>
                                        <th scope="col">deskripsi</th>
                                        <th scope="col" class="text-center">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $kelola)
                                        <tr>
                                            <th class="text-center" scope="row">{{ ++$no }}</th>
                                            <td class="py-3 text-center"><img
                                                    src="{{ asset('assets/image/' . $kelola->gambar) }}"
                                                    class="rounded" width="100" alt=""></td>
                                            <td class="text-center">{{ $kelola->nama_kelas }}</td>
                                            <td style="width: 40%;">{{ $kelola->deskripsi }}</td>
                                            <td class="d-flex align-items-center justify-content-center">
                                                <a href="{{ route('kelola_kelas.edit', $kelola->id) }}"
                                                    class="btn btn-warning mr-2"><i class="fas fa-pen"></i></a>
                                                <form method="POST"
                                                    action="{{ route('kelola_kelas.destroy', $kelola->id) }}">
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
                        <div class="card-footer text-right">
                            {{ $data->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
