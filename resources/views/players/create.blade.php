@extends('players.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Tambah Pemain Baru
                </div>
                <div class="float-end">
                    <a href="{{ route('players.index') }}" class="btn btn-primary btn-sm">&larr; Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('players.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="nama_pemain" class="col-md-4 col-form-label text-md-end text-start">Nama</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nama_pemain') is-invalid @enderror" id="nama_pemain" name="nama_pemain" value="{{ old('nama_pemain') }}">
                            @if ($errors->has('nama_pemain'))
                                <span class="text-danger">{{ $errors->first('nama_pemain') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start">Nomor Punggung</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('nomor_punggung') is-invalid @enderror" id="nomor_punggung" name="nomor_punggung" value="{{ old('nomor_punggung') }}">
                            @if ($errors->has('nomor_punggung'))
                                <span class="text-danger">{{ $errors->first('nomor_punggung') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start">Posisi</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('posisi') is-invalid @enderror" id="posisi" name="posisi" value="{{ old('posisi') }}">
                            @if ($errors->has('posisi'))
                                <span class="text-danger">{{ $errors->first('posisi') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Tambah Pemain">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection