@extends('players.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Product
                </div>
                <div class="float-end">
                    <a href="{{ route('players.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('players.update', $player->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Nama</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="nama_pemain" value="{{ $player->nama_pemain }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nomor_punggung" class="col-md-4 col-form-label text-md-end text-start">Nomor Punggung</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('nomor_punggung') is-invalid @enderror" id="nomor_punggung" name="nomor_punggung" value="{{ $player->nomor_punggung }}">
                            @if ($errors->has('nomor_punggung'))
                                <span class="text-danger">{{ $errors->first('nomor_punggung') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Posisi</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('posisi') is-invalid @enderror" id="posisi" name="posisi" value="{{ $player->posisi }}"></input>
                            @if ($errors->has('posisi'))
                                <span class="text-danger">{{ $errors->first('posisi') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection