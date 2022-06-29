@extends('admin.layout.index')
@section('title', 'Kelola Jawaban')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kelola Jawaban</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Kelola Jawaban</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Kelola Jawaban</h4>
                            <a href="{{ route('setting_jawaban.create') }}" class="btn btn-success">Create</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Soal</th>
                                        <th scope="col">Jawaban</th>
                                        <th scope="col">Jawaban Benar</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $quiz_jawaban)
                                        <tr>
                                            <th scope="row">{{ ++$no }}</th>
                                            <td>{{ $quiz_jawaban->quiz_soal->pertanyaan }}</td>
                                            <td>{{ $quiz_jawaban->jawaban }}</td>
                                            @if ($quiz_jawaban->jawaban_benar == 1)
                                                <td>Benar</td>
                                            @else
                                                <td>Salah</td>
                                            @endif
                                            @if ($quiz_jawaban->status == 1)
                                                <td>Aktif</td>
                                            @else
                                                <td>Tidak Aktif</td>
                                            @endif
                                            <td class="d-flex align-items-center justify-content-center">
                                                <a href="{{ route('setting_jawaban.edit', $quiz_jawaban->id) }}"
                                                    class="btn btn-warning mr-2"><i class="fas fa-pen"></i></a>
                                                <form method="POST"
                                                    action="{{ route('setting_jawaban.destroy', $quiz_jawaban->id) }}">
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
