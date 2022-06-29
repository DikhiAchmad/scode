@extends('users.layout.index')
@section('content')
    <div class="container">
        <h1 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Statistik Quiz</h1>
        <hr>

        <h4 class="text-center">Total Pertanyaan Quiz : {{ $pertanyaan }}</h4>

        <div id="content" class="content pt-2" style="width: 400px">
            <div class="card text-center justify-content-center" style="">
                <canvas id="myChart"></canvas>
            </div>
        </div>

        <div id="content1">
            <h4 style="text-align: right">Nilai Total : {{ $data_quiz->nilai_total }}</h4>

            <table class="table table-secondary table-bordered table-striped" style="margin-top: 20px">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Keterangan</th>
                        <th scope="col" class="text-center">Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Total Pertanyaan</td>
                        <td class="text-center">{{ $pertanyaan }}</td>
                    </tr>
                    <tr>
                        <td>Jawaban Benar</td>
                        <td class="text-center">{{ $jwb_benar }}</td>
                    </tr>
                    <tr>
                        <td>Jawaban Salah</td>
                        <td class="text-center">{{ $jwb_salah }}</td>
                    </tr>
                    <th scope="col" class="text-center">Total Nilai</th>
                    <th scope="col" class="text-center">{{ $data_quiz->nilai_total }}</th>
        </div>
        </tbody>
        </table>
    </div>

    {{-- <div class="box">
        <table class="table table-dark table-bordered table-striped justify-content-center" style="margin-top: 20px">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Level Name</th>
                    <th scope="col" class="text-center">Anda Cocok Dengan Ilmu Informatika</th>
                </tr>
            </thead>
        </table>
    </div> --}}

    <div class="box1">
        <table class="table table-secondary table-bordered table-striped" style="margin-top: 20px">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Pertanyaan</th>
                    <th scope="col" class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_detail as $detail)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $detail->quiz_soal->pertanyaan }}</td>
                        <td class="text-center">
                            @if ($detail->jawaban_benar == 1)
                                benar
                            @else
                                salah
                            {{-- {{ $detail-> ? 'benar' : 'salah' }} --}}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-12 text-center">

                <a href="{{ route('dashboard.index') }}" class="btn btn-primary text-center"> Kembali ke dashboard</a>
            </div>
        </div>
    </div>


    </div>


    <script>
        const labels = [
            'Jawaban Salah',
            'Jawaban Benar',
            // 'Jawaban Kosong',

        ];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Statistik Desa Pada Sistem',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    // 'rgba(170, 160, 180, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(75, 192, 192)',
                    // 'rgb(170, 160, 180)'
                ],
                data: [
                    {!! json_encode($jwb_salah) !!},
                    {!! json_encode($jwb_benar) !!},
                ],
                borderWidth: 1.5,
            }]
        };

        const config = {
            type: 'pie',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@endsection
