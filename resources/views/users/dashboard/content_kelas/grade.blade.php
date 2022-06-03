@extends('users.layout.index')
@section('content')
    <div class="">
        <h1 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Statistik Quiz</h1>
        <hr>

        <h4 class="text-center">Total Petanyaan Quiz : 10/10</h4>

        <div id="content">
            <h4 style="margin-left: 50px">Time Speed : 00.59.10</h4>
            <div class="card grafik" style="width:500px">
                <canvas id="myChart"></canvas>
            </div>
        </div>

        <div id="content1">
            <h4 style="text-align: right" >Nilai Total : 100%</h4>

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
                        <td class="text-center">10</td>
                    </tr>
                    <tr>
                        <td>Total Jawaban Terkirim</td>
                        <td class="text-center">10</td>
                    </tr>
                    <tr>
                        <td>Jawaban Benar</td>
                        <td class="text-center">10</td>
                    </tr>
                    <tr>
                        <td>Jawaban Salah</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <td>Jawaban Kosong</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <td>Bahasa</td>
                        <td class="text-center">Indonesia</td>
                    </tr>
                    <tr>
                        <td>Total Nilai</td>
                        <td class="text-center">10</td>
                    </tr>
                    <th scope="col" class="text-center">Total Nilai</th>
                    <th scope="col" class="text-center">100</th>
                    </div>
                </tbody>
            </table>
        </div>

        <div class="box">
            <table class="table table-dark table-bordered table-striped justify-content-center" style="margin-top: 20px">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Level Name</th>
                        <th scope="col" class="text-center">Anda Cocok Dengan Ilmu Informatika</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="box1">
            <table class="table table-secondary table-bordered table-striped" style="margin-top: 20px">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Pertanyaan</th>
                        <th scope="col" class="text-center">Jawaban</th>
                        <th scope="col" class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Apa itu java?</td>
                        <td class="text-center">java</td>
                        <td class="text-center">Benar</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Apa itu java?</td>
                        <td class="text-center">java</td>
                        <td class="text-center">Salah</td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>


    <script>
        const labels = [
            'Jawaban Salah',
            'Jawaban Benar',
            'Jawaban Kosong',

        ];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Statistik Desa Pada Sistem',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(170, 160, 180, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(75, 192, 192)',
                    'rgb(170, 160, 180)'
                ],
                data: [
                    '10',
                    '10',
                    '10'
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
