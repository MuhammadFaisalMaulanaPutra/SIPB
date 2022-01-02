@extends('dashboardview.layout.main')

@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    @if (session()->has('approved'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('approved') }}
        </div>
    @endif

    @if (session()->has('declined'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('declined') }}
        </div>
    @endif

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">DataTables {{ $title }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Kejadian</th>
                            <th>Pelapor</th>
                            <th>Bencana</th>
                            <th>Kecamatan</th>
                            <th>Judul Laporan</th>
                            <th>Waktu Bencana</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>Bencana</th>
                            <th>Kategori Bencana</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @foreach ($report as $reports)
                        <tr>
                            <th>{{ $counter++ }}</th>
                            <th>{{ $reports -> tgl_bencana }}</th>
                            <th>{{ $reports -> user -> nama_user }}</th>
                            <th>{{ $reports -> bencana -> Nama_bencana }}</th>
                            <th>{{ $reports -> kecamatan -> Nama_Kecamatan }}</th>
                            <th>{{ $reports -> judul_laporan }}</th>
                            <th>{{ $reports -> waktu_bencana }}</th>
                            <th>
                                <div class="d-inline">
                                    <a href="dashboard-table-report-detail-{{ $reports->id }}" class="btn btn-info">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <form action="report/approve/{{ $reports->id }}" method="post" class="d-inline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Approve">
                                        @csrf
                                        <button class="btn btn-success" type='submit'>
                                            <i class="bi bi-check-lg"></i>
                                        </button>
                                    </form>
                                    <form action="report/decline/{{ $reports->id }}" method="post" class="d-inline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Decline">
                                        @csrf
                                        <button class="btn btn-danger" type='submit'>
                                            <i class= "bi bi-x-lg"></i>
                                        </button>
                                    </form>
                                </div>
                            </th>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
                    

@endsection