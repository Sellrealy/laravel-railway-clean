<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestbook;

class GuestbookController extends Controller
{
    public function index()
    {
        return view('guestbook');
    }

public function store(Request $request)
{

    $request->validate([

        'nama' => 'required',

        'lagu' => 'required',

        'artist' => 'required',

        'pesan' => 'required'

    ]);

    Guestbook::create([

        'nama' => $request->nama,

        'lagu' => $request->lagu,

        'artist' => $request->artist,

        'cover' => $request->cover,

        'preview' => $request->preview,

        'pesan' => $request->pesan

    ]);

    return back()
        ->with(
            'success',
            'Song berhasil dikirim 🎵💌'
        );
}

public function destroy($id)
{
    Guestbook::findOrFail($id)->delete();

    return back()->with(
        'success',
        'Pesan berhasil dihapus 🌷'
    );
}
}