@extends('dashboardview.layout.main')

@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Tambah {{ $title }}</h3></div>
                        <div class="card-body">
                            <form action="/create-bencana" method="post">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <select class="form-select" aria-label="Default select example" name='id_katben'>
                                            <option selected>Pilih Ketegori</option>
                                            @foreach ($category as $categories)
                                                <option value="{{ $categories->id }}">{{ $categories->Kategori_Bencana }}</option> 
                                            @endforeach
                                          </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control @error('nama_kecamatan') is-invalid @enderror" id="inputName" name="nama_bencana" type="text" maxlength="50" placeholder="Bencana" value="{{ old('nama_bencana') }}" required/>
                                        @error('nama_bencana')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Tambah</button></div>
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