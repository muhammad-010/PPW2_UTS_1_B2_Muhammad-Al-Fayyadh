@extends('players.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">Daftar Pemain</div>
            <div class="card-body">
                <a href="{{ route('players.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i>Tambah Pemain Baru</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($players as $player)
                        <tr>
                            <td>{{ $player->id }}</td>
                            <td>{{ $player->nama_pemain }}</td>
                            <td>{{ $player->nomor_punggung }}</td>
                            <td>{{ $player->posisi }}</td>
                            <td>
                                <form action="{{ route('players.destroy', $player->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('players.show', $player->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('players.edit', $player->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash" onclick="return confirm('Do you want to delete this player?');"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>Pemain Tidak Ditemukan</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $players->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection