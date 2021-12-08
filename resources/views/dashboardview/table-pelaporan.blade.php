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
                            <th>Tanggal Kejadian</th>
                            <th>Pelapor</th>
                            <th>Bencana</th>
                            <th>Kecamatan</th>
                            <th>Judul Laporan</th>
                            <th>Isi Laporan</th>
                            <th>Waktu Bencana</th>
                            <th>Approve</th>
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
                            <th>{{ $reports -> tgl_bencana }}</th>
                            <th>{{ $reports -> user -> nama_user }}</th>
                            <th>{{ $reports -> bencana -> Nama_bencana }}</th>
                            <th>{{ $reports -> kecamatan -> Nama_Kecamatan }}</th>
                            <th>{{ $reports -> judul_laporan }}</th>
                            <th>{{ $reports -> isi_laporan }}</th>
                            <th>{{ $reports -> waktu_bencana }}</th>
                            <th>
                                <div>
                                    <form action="report/approve/{{ $reports->id }}" method="post" class="mb-2">
                                        @csrf
                                        <button class="btn btn-success btn-icon-split" type='submit'>
                                            <i class="bi bi-check-lg">Approve</i>
                                        </button>
                                    </form>
                                    <form action="report/decline/{{ $reports->id }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger btn-icon-split" type='submit'>
                                            <i class= "bi bi-x-lg">Decline</i>
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