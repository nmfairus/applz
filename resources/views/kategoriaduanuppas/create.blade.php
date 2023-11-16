@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Tambah Kategori Aduan UPPA
                </div>
                <div class="float-end">
                    <a href="{{ route('kategoriaduanuppas.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('kategoriaduanuppas.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="nama" class="col-md-4 col-form-label text-md-end text-start">Nama</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Tambah Jenis Aset">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection