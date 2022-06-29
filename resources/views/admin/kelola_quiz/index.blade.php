@extends('admin.layout.index')
@section('title', 'Kelola Quiz')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kelola Quiz</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Kelola Quiz</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Kelola Quiz</h4>
                            <a href="{{ route('setting_quiz.create') }}" class="btn btn-success">Create</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Materi</th>
                                        <th scope="col">Nilai Soal</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $quiz)
                                        <tr>
                                            <th scope="row">{{ ++$no }}</th>
                                            <td>{{ $quiz->nama }}</td>
                                            <td>{{ $quiz->materi->judul }}</td>
                                            <td>{{ $quiz->nilai_soal }}</td>
                                                @if ($quiz->status == 1)
                                                <td>Aktif</td>
                                            @else
                                                <td>Tidak Aktif</td>
                                            @endif
                                            <td class="d-flex align-items-center justify-content-center">
                                                <a href="{{ route('setting_quiz.edit', $quiz->id) }}"
                                                    class="btn btn-warning mr-2"><i class="fas fa-pen"></i></a>
                                                <form method="POST"
                                                    action="{{ route('setting_quiz.destroy', $quiz->id) }}">
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
