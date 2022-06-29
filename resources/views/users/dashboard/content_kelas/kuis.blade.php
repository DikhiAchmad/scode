@extends('users.dashboard.content_kelas.layout.index')
@section('title', 'SCode | Quiz')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Quiz</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active" id="count" style="font-weight: bolder"></div>
            </div>
        </div>
        <div class="section-body">
            <form action="{{ url('/users/quiz/' . $data1 . '/' . $data2) }}" enctype="multipart/form-data" name="end"
                method="POST">
                @csrf
                @method('POST')
                <div class="row">
                    {{-- @forelse ($quiz_soal as $soal) --}}
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="header-content">{{ $quiz_soal->pertanyaan }}</h1>

                                    <div class="form-group">
                                        @forelse ($quiz_jawaban as $jwb)
                                        <div class="form-check my-4">
                                            <input class="form-check-input" type="radio"
                                                name="jawaban_id"
                                                value="{{ $jwb->id }}">
                                            <label class="form-check-label" for="exampleRadios1">
                                                {{ $jwb->jawaban}}
                                            </label>
                                        </div>
                                        @empty
                                            <h1>null</h1>
                                        @endforelse

                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- @empty
                        <h1>null</h1> --}}
                    {{-- @endforelse --}}
                    <div class="mb-3">

                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                      </div>
                      <div class="mb-3">

                        <input type="hidden" class="form-control" id="quiziz_id" name="quiziz_id" value="{{ $quiz->id }}">
                      </div>
                      <div class="mb-3">

                        <input type="hidden" class="form-control" id="soal_id" name="soal_id" value="{{ $quiz_soal->id }}">
                      </div>
                      <div class="mb-3">

                        <input type="hidden" class="form-control" id="materi_id" name="materi_id" value="{{ $data2 }}">
                      </div>

                    <div class="col-md-12 text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var count = 300;
        var timer = setInterval(function() {
            document.getElementById('count').innerHTML = "time left: " + time_convert(count);
            count--;
            if (count === 0) {
                stopInterval()
            }
        }, 1000);

        var stopInterval = function() {
            document.getElementById('count').innerHTML = "time is up!";
            clearInterval(timer);
            document.end.submit();
        }

        function time_convert(num) {
            var hours = Math.floor(num / 60);
            var minutes = num % 60;
            return hours + ":" + minutes;
        }
    </script>
@endsection
