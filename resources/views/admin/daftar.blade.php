@extends('dashboard.app')

@section('title', 'Data Pendaftaran')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Pendaftaran</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form method="GET" action="{{ route('daftar') }}" class="mb-3">
                            <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                                <input type="date" name="start_date" class="form-control w-auto" placeholder="Tanggal Awal">
                                <span>s.d</span>
                                <input type="date" name="end_date" class="form-control w-auto" placeholder="Tanggal Akhir">
                                <button type="submit" class="btn btn-primary btn-sm mt-2 mt-md-0">
                                    <i class="fa fa-filter"></i> Filter
                                </button>
                            </div>
                            <div class="d-flex flex-wrap align-items-center gap-2">
                                <input type="text" name="search" class="form-control w-auto" placeholder="Cari Data">
                                <button type="submit" class="btn btn-primary btn-sm mt-2 mt-md-0">
                                    <i class="fa fa-search"></i> Cari
                                </button>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>No</th>
                                        <th>Email</th>
                                        <th>JK</th>
                                        <th>Kota</th>
                                        <th>Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($daftars as $daftar)
                                        <tr>
                                            <td>{{ \Carbon\Carbon::parse($daftar->created_at)->format('Y-m-d') }}</td>
                                            <td>{{ $daftar->nama_leng }}</td>
                                            <td>{{ $daftar->no_hp }}</td>
                                            <td>{{ $daftar->email }}</td>
                                            <td>{{ $daftar->j_kel }}</td>
                                            <td>{{ $daftar->kampus }}</td>
                                            <td>{{ $daftar->kelas }}</td>
                                            <td>
                                                <a href="{{ route('daftar.detil', $daftar->daftar_id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ route('daftar.hapus', $daftar->daftar_id) }}" onclick="return confirm('Apa Anda yakin melakukan ini?')" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            <button id="exportButton" class="btn btn-success btn-sm">Export to Excel</button>
                        </div>
                        <div class="d-flex justify-content-start mt-4">
                            {{ $daftars->links('vendor.pagination.simple-bootstrap-5') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
