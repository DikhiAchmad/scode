@extends('admin.layout.index')
@section('title', 'Kelola Pengajar')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>kelola pengajar</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/') }}">dashboard</a></div>
                    <div class="breadcrumb-item">kelola pengajar</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>kelola pengajar</h4>
                            <a href="{{ route('kelola_pengajar.create') }}" class="btn btn-success">create</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">no</th>
                                        <th scope="col">nama</th>
                                        <th scope="col">telepon</th>
                                        <th scope="col">jenis kelamin</th>
                                        <th scope="col">email</th>
                                        <th scope="col" class="text-center">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $user)
                                        <tr>
                                            <th scope="row">{{ ++$no }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->telp }}</td>
                                            <td>{{ $user->jenis_kelamin }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td class="d-flex align-items-center justify-content-center">
                                                <a href="{{ route('kelola_pengajar.edit', $user->id) }}"
                                                    class="btn btn-warning mr-2"><i class="fas fa-pen"></i></a>
                                                <form method="POST"
                                                    action="{{ route('kelola_pengajar.destroy', $user->id) }}">
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
