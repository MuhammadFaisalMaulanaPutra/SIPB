@extends('dashboardview.layout.main')

@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

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
                            <th>Korban Bencana</th>
                            <th>Cancel Approval</th>
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
                                <a href="dashboard-table-approved-korban-{{ $reports->id }}" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="bi bi-people"></i>
                                    </span>
                                    <span class="text">Korban</span>
                                </a>
                            </th>
                            <th>
                                <a href="#" class="btn btn-warning btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="bi bi-file-earmark-excel"></i>
                                    </span>
                                    <span class="text">Cancel</span>
                                </a>
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