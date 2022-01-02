@extends('dashboardview.layout.main')

@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    @if (session()->has('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('update') }}
        </div>
    @endif
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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal Lahir</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tfoot>
                        {{-- <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal Lahir</th>
                            <th>Role</th>
                        </tr> --}}
                    </tfoot>
                    <tbody>
                        @foreach ($user as $users)
                        <tr>
                            <th>{{ $users -> nama_user }}</th>
                            <th>{{ $users -> email }}</th>
                            <th>{{ $users -> tgl_lahir }}</th>
                            <th>
                                <a href="{{ url('/form-edit-userrole-') }}{{ $users->id }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                {{ $users -> role -> Role }}
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