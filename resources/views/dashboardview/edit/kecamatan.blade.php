@extends('dashboardview.layout.main')

@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit {{ $title }}</h3></div>
                        <div class="card-body">
                            <form action="/edit-kecamatan-{{ $district->id }}" method="post">
                                @method('put')
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <select class="form-select" aria-label="Default select example" name='id_kota'>
                                            @foreach ($city as $cities)
                                                @if (old('id_kota', $district->FK_ID_KOTA) == $cities->id)
                                                    <option value={{ $cities->id }} selected>{{ $cities->nama_kota }}</option>
                                                @else
                                                    <option value={{ $cities->id }}>{{ $cities->nama_kota }}</option>
                                                @endif
                                            @endforeach
                                          </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control @error('nama_kecamatan') is-invalid @enderror" id="inputName" name="nama_kecamatan" type="text" maxlength="50" placeholder="Kecamatan" value="{{ old('nama_kecamatan',$district->Nama_Kecamatan) }}" required/>
                                        @error('nama_kecamatan')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Perbarui</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection