@extends('admin.layout.index')
@section('title', 'dashboard Admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">Dashboard</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total Admin</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $countAdmin }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="far fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>total member</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $countMember }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="far fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>total pengajar</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $countPengajar }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="far fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>total kelas</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $countKelas }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">no</th>
                                        <th scope="col">mentor</th>
                                        <th scope="col">total kelas</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @forelse ($kelasPengajar as $list)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $list->name }}</td>
                                            <td>{{ $list->count }}</td>
                                        </tr>
                                    @empty
                                        <h1>data kosong</h1>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Recent Activities</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                                @foreach ($users as $user)
                                    <li class="media">
                                        <div class="media-body">
                                            @if (Cache::has('user-is-online-' . $user->id))
                                                <div class="float-right">Online</div>
                                            @else
                                                <div class="float-right">
                                                    {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</div>
                                            @endif
                                            <div class="media-title">{{ $user->name }}</div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
