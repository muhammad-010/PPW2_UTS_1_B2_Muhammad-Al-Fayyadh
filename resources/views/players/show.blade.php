@extends('players.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Informasi Pemain
                </div>
                <div class="float-end">
                    <a href="{{ route('players.index') }}" class="btn btn-primary btn-sm">&larr; Kembali</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Nama:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $player->nama_pemain }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Nomor Punggung:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $player->nomor_punggung }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Posisi:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $player->posisi }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection