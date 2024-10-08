<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        return view('players.index', [
            'players' => Player::latest()->paginate(10)
        ]);
    }
    public function create()
    {
        return view('players.create');
    }
    public function store(Request $request)
    {
        Player::create($request->all());
        return redirect()->route('players.index')
                ->withSuccess('Pemain berhasil ditambahkan');
    }
    public function show(Player $player)
    {
        return view('players.show', [
            'player' => $player
        ]);
    }
    public function edit(Player $player)
    {
        return view('players.edit', [
            'player' => $player
        ]);
    }
    public function update(Request $request, Player $Player)
    {
        $Player->update($request->all());
        return redirect()->route('players.index')
                ->withSuccess('Pemain berhasil diubah');
    }
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index')
                ->withSuccess('Pemain berhasil dihapus');
    }
}
