@extends('dashboardview.layout.main')

@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ $title }}</h3></div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-3">Pelapor</dt>
                                <dd class="col-sm-9">{{ $report -> user -> nama_user }}</dd>
                                
                                <dt class="col-sm-3">Kecamatan</dt>
                                <dd class="col-sm-9">{{ $report -> kecamatan -> Nama_Kecamatan }}</dd>
                              
                                <dt class="col-sm-3">Bencana</dt>
                                <dd class="col-sm-9">{{ $report -> bencana -> Nama_bencana }}</dd>

                                <dt class="col-sm-3">Tanggal Bencana</dt>
                                <dd class="col-sm-9">{{ $report -> tgl_bencana }}</dd>

                                <dt class="col-sm-3">Waktu Bencana</dt>
                                <dd class="col-sm-9">{{ $report -> waktu_bencana }}</dd>

                                <dt class="col-sm-3">Judul Laporan</dt>
                                <dd class="col-sm-9">{{ $report -> judul_laporan }}</dd>
                                
                                <dt class="col-sm-3">Isi Laporan</dt>
                              </dl>
                              <dd class="col-sm-12">{{ $report -> isi_laporan }}</dd>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection