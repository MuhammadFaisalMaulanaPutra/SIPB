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
                            <form action="/edit-kota-{{ $city->id }}" method="post">
                                @method('put')
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <select class="form-select" aria-label="Default select example" name='id_provinsi' required/>
                                            @foreach ($province as $provinces)
                                                @if (old('id_provinsi', $city->FK_ID_PROVINSI) == $provinces->id)
                                                    <option value={{ $provinces->id }} selected>{{ $provinces->nama_provinsi }}</option>
                                                @else
                                                    <option value={{ $provinces->id }}>{{ $provinces->nama_provinsi }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control @error('nama_kota') is-invalid @enderror" id="inputName" name="nama_kota" type="text" maxlength="50" placeholder="Kota" value="{{ old('nama_kota',$city->nama_kota) }}" required/>
                                        @error('nama_kota')
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