@extends('dashboardview.layout.main')

@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Role {{ $title }}</h3></div>
                        <div class="card-body">
                            <form action="/edit-userrole-{{ $user->id }}" method="post">
                                @method('put')
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <select class="form-select" aria-label="Default select example" name='id_role'>
                                            @foreach ($role as $roles)
                                                @if (old('id_role', $user->id_role) == $roles->id)
                                                    <option value={{ $roles->id }} selected>{{ $roles->Role }}</option>
                                                @else
                                                    <option value={{ $roles->id }}>{{ $roles->Role }}</option>
                                                @endif
                                            @endforeach
                                          </select>
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