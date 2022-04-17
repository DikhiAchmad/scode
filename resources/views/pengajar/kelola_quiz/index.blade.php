@extends('pengajar.layout.index')
@section('title', 'kelola quiz')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>kelola quiz</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">kelola quiz</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>kelola Quiz</h4>
                            <a href="{{ route('kelola_quiz.create') }}" class="btn btn-success">create</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">no</th>
                                        <th scope="col">pertanyaan</th>
                                        <th scope="col">pilihan 1</th>
                                        <th scope="col">pilihan 2</th>
                                        <th scope="col">pilihan 3</th>
                                        <th scope="col">pilihan 4</th>
                                        <th scope="col">jawaban benar</th>
                                        <th scope="col" class="text-center">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $quiz)
                                        <tr>
                                            <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                            <td class="text-center">{{ $quiz->pertanyaan }}</td>
                                            <td class="text-center">{{ $quiz->pilihan_1 }}</td>
                                            <td class="text-center">{{ $quiz->pilihan_2 }}</td>
                                            <td class="text-center">{{ $quiz->pilihan_3 }}</td>
                                            <td class="text-center">{{ $quiz->pilihan_4 }}</td>
                                            <td class="text-center">{{ $quiz->jawaban_benar }}</td>
                                            <td class="d-flex align-items-center justify-content-center">
                                                <a href="{{ route('kelola_quiz.edit', $quiz->id) }}"
                                                    class="btn btn-warning mr-2"><i class="fas fa-pen"></i></a>
                                                <form method="POST"
                                                    action="{{ route('kelola_quiz.destroy', $quiz->id) }}">
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
                            {{-- {{ $data->links('vendor.pagination.custom') }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
