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
                            <h4>kelola kelas</h4>
                            <a href="{{ route('kelola_pengajar.create') }}" class="btn btn-success">create</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">no</th>
                                        <th scope="col">link video</th>
                                        <th scope="col">judul kelas</th>
                                        <th scope="col">isi</th>
                                        <th scope="col" class="text-center">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @forelse ($data as $user) --}}
                                    <tr>
                                        <th class="text-center" scope="row">1</th>
                                        <td class="text-center">http:yutube/teh-pucuk</td>
                                        <td class="text-center">belajar PHP</td>
                                        <td style="width: 40%;">Berkenalan dengan php, bahasa program
                                            yang sangat populer yang digunakan pada
                                            bagian back-end website untuk mengatur
                                            logika dan interaksi dengan database.</td>
                                        <td class="d-flex align-items-center justify-content-center">
                                            <a href="" class="btn btn-warning mr-2"><i class="fas fa-pen"></i></a>
                                            <form method="POST" action="">
                                                <button type="submit"
                                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    {{-- @empty --}}
                                    {{-- <h1>data kosong</h1> --}}
                                    {{-- @endforelse --}}

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-right">
                            {{-- {{ $data->links('vendor.pagination.custom') }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
